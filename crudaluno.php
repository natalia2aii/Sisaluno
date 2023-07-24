<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f2f2f2;
  color: #333;
}

.container {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

.button {
  display: block;
  width: 150px;
  margin: 10px auto;
  padding: 10px 20px;
  background-color: #2196F3;
  color: #FFFFFF;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-decoration: none;
}

.button:hover {
  background-color: #0b7dda;
}


</style>
<body>

<?php

require_once('conexao.php');




if(isset($_POST['cadastrar'])){
       
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $cpf = $_POST ["cpf"];
        $datanascimento = $_POST["datanascimento"];
        $endereco = $_POST ["endereco"];
        $estatus = $_POST ["estatus"];

       
        $sql = "INSERT INTO Aluno(nome, idade, cpf, datanascimento, endereco, estatus) 
                VALUES('$nome', '$idade', '$cpf', '$datanascimento', '$endereco', '$estatus')";

   
        $sqlcombanco = $conexao->prepare($sql);
        
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> o aluno
                $nome foi Incluido com sucesso!!!"; 
                echo " <button class='button'><a href='cadaluno.php'>voltar</a></button>";
            }
        }


if(isset($_POST['update'])){

    
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $cpf= $_POST["cpf"];
    $datanascimento= $_POST["datanascimento"];
    $endereco= $_POST ["endereco"];
    $status= $_POST ["status"];
    $id= $_POST["id"];
    
    $sql = "UPDATE  Aluno SET nome= :nome, idade= :idade, cpf= :cpf, datanascimento= :datanascimento, 
    endereco= :endereco, estatus= :estatus 
WHERE id= :id ";
   
    
    $stmt = $conexao->prepare($sql);

   
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':cpf',$cpf, PDO::PARAM_STR);
    $stmt->bindParam(':datanascimento',$datanascimento, PDO::PARAM_STR);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
    $stmt->bindParam(':estatus',$estatus, PDO::PARAM_STR);
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o aluno
             $nome foi Alterado com sucesso!!!"; 

            echo " <button class='button'><a href='index.php'>voltar</a></button>";
        }

}        



if(isset($_POST['excluir'])){
    $id = $_POST['id'];
    $sql ="DELETE FROM Aluno WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o aluno
             $id foi excluido!!!"; 

            echo " <button class='button'><a href='listaalunos.php'>voltar</a></button>";
        }

}

        
?>
