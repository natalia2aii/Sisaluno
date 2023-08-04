<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabela</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 40vw;
            background-color: white;
        }

        .container {
            color: black;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 70%;
            background-color:  whit;
            padding: 2px 0;
            border-radius: 8px;
            -webkit-box-shadow: 3px 3px 3px rgb(43, 19, 75);
            border: 3px solid black;

        }

        .container table {
            width: 100%;
            max-width: 800px;
            border-collapse: collapse;

        }

        .container table tr th {
            height: 56px;
            font-size: 16px;
            font-weight: 700px;
            letter-spacing: .25px;
            text-align: center;
            padding: 8px;

        }

        td {
            border-left: black 1px solid;
            border-bottom: 1px solid black;
            text-align: center;

        }

        a {
            text-align: center;
            text-decoration: none;
            padding: 5px;
            color: black;

        }

        button {
            background-color: white;
            border-radius: 40px;
            border: 2px solid black;
            padding: 5px;
            margin: 5px;
        }
        .vol-alt{
            border-left: none;
            border-bottom: none;
        }
    </style>
</head>

<body>


    <?php
    
    require_once('../conexao.php');

    $retorno = $conexao->prepare('SELECT * FROM aluno');
    $retorno->execute();

    ?>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Data de nascimento</th>
                    <th>Endereço</th>
                    <th>Estatus</th>
                    <th>Voltar</th>
                    <th>Alterar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($retorno->fetchall() as $value) { ?>

                    <tr>
                        <td class="right">
                            <?php echo $value['id'] ?>
                        </td>
                        <td class="right">
                            <?php echo $value['nome'] ?>
                        </td>
                        <td class="right">
                            <?php echo $value['idade'] ?>
                        </td>
                        <td class="right">
                            <?php echo $value['datanascimento'] ?>
                        </td>
                        <td class="right">
                            <?php echo $value['endereco'] ?>
                        </td>
                        <td class="right">
                            <?php echo $value['estatus'] ?>
                        </td>

                        <td class="vol-alt"> <button style="background: #8EBBFF;" class='button button3'><a href='../index.php'>voltar</a></td>
                        <td  class="vol-alt">
                            <form method="POST" action="altaluno.php">
                                <input  name="id" type="hidden" value="<?php echo $value['id']; ?>" />
                                <button  style="background: #EF99ED;"  name="alterar" type="submit">Alterar</button>
                            </form>
                        </td>
                        <td  class="vol-alt">
                            <form method="GET" action="crudaluno.php">
                                <input name="id" type="hidden" value="<?php echo $value['id']; ?>" />
                                <button style="background: #FF69B4;" name="excluir" type="submit">Excluir</button>
                            </form>

                        </td>

                    </tr>

                <?php } ?>
                </tr>
            </tbody>
        </table>
        <?php

        ?>
    </div>
</body>

</html>