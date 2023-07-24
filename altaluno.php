<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    require_once('conexao.php');

   $id= $_POST['id'];

   $sql = "SELECT * FROM Aluno where id= :id";
   
   
   $retorno = $conexao->prepare($sql);

   
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   $retorno->execute();

   $array_retorno=$retorno->fetch();
   
   $nome = $array_retorno['nome'];
   $idade = $array_retorno['idade'];
   $cpf = $array_retorno['cpf'];
   $datanascimento = $array_retorno['datanascimento'];
   $endereco = $array_retorno['endereco'];
   $estatus= $array_retorno['estatus'];

?>

  <form method="POST" action="crudaluno.php">
        <input type="text" name="nome" id="" value=<?php echo $nome?> >
                                                
        <input type="text" name="idade" id="" value=<?php echo $idade ?> >
      
        <input type="text" name="cpf" id="" value=<?php echo $cpf ?> >

        <input type="text" name="datanascimento" id="" value=<?php echo $datanascimento ?> >

        <input type="text" name="endereco" id="" value=<?php echo $endereco ?> >

        <input type="text" name="status" id="" value=<?php echo $estatus ?> >

        <input type="hidden" name="id" id="" value=<?php echo $id ?> >
        



        
        <input type="submit" name="update" value="Alterar">
  </form>
  <div class="rodape">
           2023 Meu Site. Todos os direitos reservados.
        </div>
</body>
</html>