<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

require_once('../conexao.php');

if(isset($_GET['cadastrar'])){
        $nome = $_GET["nomeprofessor"];
        $cpf = $_GET["cpf"];
        $idade = $_GET["idade"];
        $datanascimento = $_GET["datanascimento"];
        $endereco = $_GET["endereco"];
        $estatus = $_GET["estatus"];
        $siape = $_GET["siape"];


        $sql = "INSERT INTO professor(nome,idade,cpf,datanascimento,endereco,estatus,siape) 
                VALUES('$nome','$idade','$cpf','$datanascimento','$endereco', '$estatus', '$siape')";

 
        $sqlcombanco = $conexao->prepare($sql);

   
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> o aluno
                $nome foi Incluido com sucesso!!!";         
                echo " <button class='button'><a href='listaprofessor.php'>voltar</a></button>";
            }
        }

if(isset($_POST['update'])){

   
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $idade = $_POST["idade"];
    $datanascimento = $_POST["datanascimento"];
    $endereco = $_POST["endereco"];
    $estatus = $_POST["estatus"];
    $siape = $_POST["siape"];
    $id = $_POST["id"];
  

   
    $sql = "UPDATE  professor SET nome= :nome, idade= :idade, cpf= :cpf, datanascimento= :datanascimento, endereco=:endereco, estatus= :estatus, siape= :siape WHERE id= :id ";
   
   
    $stmt = $conexao->prepare($sql);

   
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':cpf',$cpf, PDO::PARAM_STR);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':datanascimento',$datanascimento, PDO::PARAM_STR);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
    $stmt->bindParam(':estatus',$estatus, PDO::PARAM_STR);
    $stmt->bindParam(':siape',$siape, PDO::PARAM_STR);

    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o professor
             $nome foi Alterado com sucesso!!!"; 

            echo " <button class='button'><a href='listaprofessor.php'>voltar</a></button>";
          
        }
}        



if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `professor` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o professor
             $id foi excluido!!!"; 

            echo " <button class='button'><a href='listaprofessor.php'>voltar</a></button>";
        }

}

        
?>

</body>
</html>