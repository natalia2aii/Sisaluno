<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>altdisciplina</title>
    <style>
        body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(to right, white, white);
}
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.box {
    color: black;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #e6e6ff; /* Tom de roxo */
    padding: 40px;
    border-radius: 20px;
    width: 20%;
    box-shadow: 0px 10px 40px #00000089;
}

fieldset {
    border: 3px solid black;
    padding: 10px;
}

legend {
    border: 1px solid black;
    padding: 10px;
    text-align: center;
    background-color: black;
    border-radius: 8px;
    color: white;
}

.inputBox {
    position: relative;
    margin-bottom: 20px;
}

.inputUser {
    background: none;
    border: none;
    border-bottom: 1px solid black;
    color: black;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
}

.bnt {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin-top: 20px;
}

.bnt a {
    text-decoration: none;
    color: white;
}

#submit {
    background-color: #800080; /* Tom de roxo mais escuro */
    border-radius: 8px;
    border: none;
    box-shadow: 0px 10px 40px #00000056;
    padding: 10px;
    color: white;
    cursor: pointer;
}

.button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #800080; /* Tom de roxo mais escuro */
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

.button a {
    color: white;
    text-decoration: none;
}
    
    </style>
    
    </style>
</head>
<body>

<?php
    require_once('../conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM disciplina where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nomedisciplina = $array_retorno['nomedisciplina'];
   $ch = $array_retorno['ch'];
   $semestre = $array_retorno['semestre'];
   $idprofessor = $array_retorno['idprofessor'];
  



?>

  <div class="box">
  <form method="POST" action="cruddisciplina.php">
       <fieldset>
                <legend><b>Formulário de cadastro de disciplina</b></legend><br>
                <div class="imputBox">
                    <input type="text" name="nomedisciplina"  class="inputUser" required  value="<?php echo $nomedisciplina; ?>">
                    <label for="nomedisciplina" class="labelInput" maxlength="100">Disciplina</label>
                </div><br><br>
                <div class="imputBox">
                    <input type="number" name="ch"  class="inputUser" required value="<?php echo $ch; ?>"> 
                    <label for="ch" class="labelInput" >Carga Horária</label>
                </div><br><br>
                <div class="imputBox">
                    <input type="text" name="semestre"  class="inputUser" required  value="<?php echo $semestre; ?>">
                    <label for="semestre" class="labelInput">Semestre</label>
                </div><br><br>
                 <div class="imputBox">
                    <input type="text" name="idprofessor"  class="inputUser" required value="<?php echo $idprofessor; ?>">
                    <label for="idprofessor" class="labelInput">Id do professor</label>
                </div><br><br>
               <div class="bnt">
                 <a id="submit" href="listadisciplina.php"><b>Voltar</b><a>
                 <input id="submit" type="submit" name="alterar" value="alterar">
            </div>
         
            </fieldset>
  </form>
  </div>
</body>
</html>