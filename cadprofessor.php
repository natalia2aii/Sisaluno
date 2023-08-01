<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadaluno</title>
    <style>
body {
  background-color: #f0f5ff;
  font-family: Arial, sans-serif;
}

.box {
  width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #cce0ff; /* Tom de azul claro */
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

legend {
  color: #0039a6; /* Tom mais escuro para o texto do cabeçalho */
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 20px;
}

.imputBox {
  position: relative;
  margin-bottom: 20px;
}

.inputUser {
  width: 100%;
  padding: 10px 5px;
  font-size: 16px;
  color: #0039a6; /* Tom mais escuro para o texto do campo */
  border: none;
  border-bottom: 2px solid #0039a6; /* Tom mais escuro para a borda do campo */
  background-color: transparent;
}

.labelInput {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 5px;
  font-size: 16px;
  color: #3399ff; /* Tom mais escuro para o texto da etiqueta */
  pointer-events: none;
  transition: 0.2s ease-out;
}

.inputUser:focus + .labelInput,
.inputUser:valid + .labelInput {
  top: -20px;
  left: 0;
  font-size: 12px;
  color: #3399ff; /* Tom mais escuro para o texto da etiqueta ao ganhar foco */
}

.bnt {
  text-align: center;
  margin-top: 20px;
}

#submit {
  padding: 10px 20px;
  background-color: #3399ff; /* Tom mais escuro para o botão */
  border: none;
  border-radius: 5px;
  color: white;
  font-size: 16px;
  text-decoration: none;
  cursor: pointer;
}

#submit:hover {
  background-color: #005ce6; /* Tom mais escuro para o botão ao passar o mouse */
}
    </style>
</head>
<body>
    <div class="box">

        <form  method="GET" action="crudprofessor.php">
            <fieldset>
                <legend><b>Formulário de cadastro Professor</b></legend><br>
                <div class="imputBox">
                    <input type="text" name="nomeprofessor"  class="inputUser" required>
                    <label for="nomeprofessor" class="labelInput"  >Nome completo</label>
                </div><br><br>
                <div class="imputBox">
                    <input type="number" name="idade"  class="inputUser" required> 
                    <label for="idade" class="labelInput" >Idade</label>
                </div><br><br>
                <div class="imputBox">
                <input type =" text " name ="cpf" 
            
                
                class="inputUser" required>
                 <label for="cpf" class="labelInput"  >CPF</label>
                </div><br><br>
                <div class="imputBox">
                    <input type="date" name="datanascimento"  class="inputUser">
                    <label for="datanascimento" class="labelInput">Data de nascimento</label>
                </div><br><br>
                <div class="imputBox">
                    <input type="text" name="endereco"  class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div><br><br>
                <div class="imputBox">
                    <input type="text" name="estatus"  class="inputUser" required>
                    <label for="estatus" class="labelInput">Estatus (1 ou 0):</label>
                </div><br><br>
               <div class="bnt">
                 <a id="submit" href="index.php"><b>Voltar</b><a>
                 <input id="submit" type="submit" name="cadastrar" value="cadastrar">
            </div>
         
            </fieldset>
        </form>
    </div>
</body>
</html>