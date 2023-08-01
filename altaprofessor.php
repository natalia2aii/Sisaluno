<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(to right, white, white);
}
.box{
    color: black;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
padding:  40px;
border-radius: 20px;
width: 20%;
box-shadow: 0px 10px 40px #00000089;
}
fieldset{
    border: 3px solid black;
}
legend{
    border : 1px solid black;
    padding: 10px;
    text-align: center;
    background-color: black;
    border-radius: 8px;
color:  white;
}
.inputBox{
    position: relative;
}
.inputUser{
    background: none;
    border: none;
    border-bottom: 1px solid black;
    color: black;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
}
.bnt{
    display: flex;
    flex-direction: row;
    justify-content: center;
}
.bnt a{
    text-decoration: none;
    color: white;
 
}
.submit{
    background-color: black;
    border-radius: 8px;
    border: 0.5px solid black;
    box-shadow: 0px 10px 40px #00000056;
    padding: 10px;
    color: white;
}

    
    </style>
</head>
<body>

<?php
    require_once('conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM professor where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nome = $array_retorno['nome'];
   $cpf = $array_retorno['cpf'];
   $idade = $array_retorno['idade'];
   $datanascimento = $array_retorno['datanascimento'];
   $endereco = $array_retorno['endereco'];
   $estatus = $array_retorno['estatus'];


?>

 <div class="box">
 <form method="POST" action="crudprofessor.php">
        
        <fieldset>
                      <legend><b>Formulário de cadastro docente</b></legend><br>
                      <div class="imputBox">
                          <input type="text" name="nome"  value=<?php echo $nome?> class="inputUser" required>
                          <label for="nome" class="labelInput" >Nome completo</label>
                      </div><br><br>
                      <div class="imputBox">
                          <input type="number" name="idade"  value=<?php echo $idade?> class="inputUser" required> 
                          <label for="idade" class="labelInput" >Idade</label>
                      </div><br><br>
                      <div class="imputBox">
                      <input type =" text " name ="cpf" value=<?php echo $cpf?> class="inputUser" required>
                       <label for=" cpf " class="labelInput">CPF</label>
                      </div><br><br>
                      <div class="imputBox">
                          <input type="date" name="datanascimento"  value=<?php echo $datanascimento?> class="inputUser">
                          <label for="datanascimento" class="labelInput" >Data de nascimento</label>
                      </div><br><br>
                      <div class="imputBox">
                          <input type="text" name="endereco"   value=<?php echo $endereco?> class="inputUser" required>
                          <label for="endereco" class="labelInput">Endereço</label>
                      </div><br><br>
                      <div class="imputBox">
                          <input type="text" name="estatus" value=<?php echo $estatus?> class="inputUser" required>
                          <label for="estatus" class="labelInput" >Estatus (1 ou 2):</label>
                      </div><br><br>
                     <div class="bnt centro">
                     <input type="hidden" name="id" id="" value=<?php echo $id ?> >
                     <input type="submit"  class="submit" name="update" value="Alterar">
                  </div>
               
                  </fieldset>
        </form>
 </div>
</body>
</html>