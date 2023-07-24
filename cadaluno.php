<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesaluno.css">
</head>
<body>
  <div class="container">
<div class="topo">
  <h2> Olá, seja bem vindo!!</h2>
</div>
  
  <form method="POST" action="crudaluno.php">
    
<div class="meio">

    <p class="box">NOME DO ALUNO:<br></p>
    <p><input type="text" name= "nome" class="id" /></p>

    <p class="box">IDADE:<br></p>
    <p><input type="number" name= "idade" class="id"/> </p>

    <p class="box">cpf:<br></p>
    <p><input type="text" name= "cpf" class="id"/> </p>

    <p class="box">DATA  NASCIMENTO:<br></p>
    <p><input type="date" name= "datanascimento" class="id"/> </p>

    <p class="box">ENDEREÇO:<br></p>
    <p><input type="tex" name= "endereco" class="id"/> </p>

    <p class="box">ESTATUS:<br></p>
    <select name="estatus" class="id" required>

          <option value="AP">Aprovado</option>
          <option value="RP">Reprovado</option>
        </select>
    

    <input type="submit" name="cadastrar" class="botao" value="cadastrar">
</form>

     <button class="button"><a href="index.php">voltar</a></button>
     </div>
     
</div>
</body>
</html>