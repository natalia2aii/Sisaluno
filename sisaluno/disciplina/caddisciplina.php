<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadisciplina</title>
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
    justify-content: space-between;
}
.bnt a{
    text-decoration: none;
    color: white;
 
}
#submit{
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
    <div class="box">

        <form  method="GET" action="cruddisciplina.php">
            <fieldset>
                <legend><b>Formulário de cadastro de disciplina</b></legend><br>
                <div class="imputBox">
                    <input type="text" name="nomedisciplina"  class="inputUser" required>
                    <label for="nomedisciplina" class="labelInput" maxlength="100">Disciplina</label>
                </div><br><br>
                <div class="imputBox">
                    <input type="number" name="ch"  class="inputUser" required> 
                    <label for="ch" class="labelInput" >Carga Horária</label>
                </div><br><br>
                <div class="imputBox">
                    <input type="text" name="semestre"  class="inputUser" required>
                    <label for="semestre" class="labelInput">Semestre</label>
                </div><br><br>
                 <div class="imputBox">
                    <input type="text" name="idprofessor"  class="inputUser" required>
                    <label for="idprofessor" class="labelInput">Id do professor</label>
                </div><br><br>
               <div class="bnt">
                 <a id="submit" href="../index.php"><b>Voltar</b><a>
                 <input id="submit" type="submit" name="cadastrar" value="cadastrar">
            </div>
         
            </fieldset>
        </form>
    </div>
</body>
</html>