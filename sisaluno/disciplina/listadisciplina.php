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
            min-height: 100vw;
            background-color: white;
        }

        .container {
            color: black;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 70%;
            background-color:  white;
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
    /*
     * Melhor prática usando Prepared Statements
     * 
     */
    require_once('../conexao.php');

    $retorno = $conexao->prepare('SELECT * FROM disciplina');
    $retorno->execute();

    ?>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CH</th>
                    <th>Semestre</th>
                    <th>Id professor</th>
                   
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
                            <?php echo $value['nomedisciplina'] ?>
                        </td>
                        <td class="right">
                            <?php echo $value['ch'] ?>
                        </td>
                        <td class="right">
                            <?php echo $value['semestre'] ?>
                        </td>
                        <td class="right">
                            <?php echo $value['idprofessor'] ?>
                        </td>
                     


                        <td class="vol-alt"> <button style="background: #C992D7;" class='button button3'><a href='../index.php'>voltar</a></td>
                        <td  class="vol-alt">
                            <form method="POST" action="altdisciplina.php">
                                <input  name="id" type="hidden" value="<?php echo $value['id']; ?>" />
                                <button  style="background: #9BC6CE;"  name="alterar" type="submit">Alterar</button>
                            </form>
                        </td>
                        <td  class="vol-alt">
                            <form method="GET" action="cruddisciplina.php">
                                <input name="id" type="hidden" value="<?php echo $value['id']; ?>" />
                                <button style="background: red;" name="excluir" type="submit">Excluir</button>
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