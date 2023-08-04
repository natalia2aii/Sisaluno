<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>tela</title>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Symbols:wght@100&display=swap');

  body {
  background-color: pink ;
  font-family: Arial, sans-serif;
}

.main-login {
  display: flex;
  justify-content: space-around;
  align-items: center;
  height: 100vh;
}

.right-professor {
  text-align: center;
}

.card-professor {
  width: 200px;
  padding: 20px;
  background-color: #f8e6ff; /* Cor bonita - lilás claro */
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h1 {
  color: #8a2be2; /* Cor bonita - roxo */
  font-size: 24px;
  margin-bottom: 20px;
}

.textfield {
  display: flex;
  flex-direction: column;
}

.bnt-cad {
  padding: 10px;
  margin: 5px;
  background-color: #8a2be2; /* Cor bonita - roxo */
  border: none;
  border-radius: 5px;
  color: white;
  font-size: 16px;
  text-decoration: none;
  cursor: pointer;
}

.bnt-cad a {
  color: white;
  text-decoration: none;
}

.bnt-cad:hover {
  background-color: #630080; /* Cor bonita - roxo mais escuro */
}body {
  background-color: #f0f0f0;
  font-family: Arial, sans-serif;
}

.main-login {
  display: flex;
  justify-content: space-around;
  align-items: center;
  height: 100vh;
}

.right-professor {
  text-align: center;
}

.card-professor {
  width: 200px;
  padding: 20px;
  background-color: #f8e6ff; /* Cor bonita - lilás claro */
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h1 {
  color: #8a2be2; /* Cor bonita - roxo */
  font-size: 24px;
  margin-bottom: 20px;
}

.textfield {
  display: flex;
  flex-direction: column;
}

.bnt-cad {
  padding: 10px;
  margin: 5px;
  background-color: #8a2be2; /* Cor bonita - roxo */
  border: none;
  border-radius: 5px;
  color: white;
  font-size: 16px;
  text-decoration: none;
  cursor: pointer;
}

.bnt-cad a {
  color: white;
  text-decoration: none;
}

.bnt-cad:hover {
  background-color: #630080; /* Cor bonita - roxo mais escuro */
}

    </style>
</head>
<body>
    <div class="main-login">
        <div class="right-professor">
            <div class="card-professor">
                <h1>PROFESSOR</h1>
                <div class="textfield">
                    <button class="bnt-cad"> <a href="./professor/cadprofessor.php">Cadastro</a></button>
                    <button class="bnt-cad"><a href="./professor/listaprofessor.php">Lista de Professores</a></button>
                </div>
            </div>
        </div>
        <div class="right-professor">
            <div class="card-professor">
                <h1>ALUNO</h1>
                <div class="textfield">
                    <button class="bnt-cad"> <a href="./aluno/cadaluno.php">Cadastro</a></button>
                    <button class="bnt-cad"><a href="./aluno/listaluno.php">Lista de alunos</a></button>
                </div>
            </div>
        </div>
        <div class="right-professor">
            <div class="card-professor">
                <h1>DISCIPLINA</h1>
                <div class="textfield">
                    <button class="bnt-cad"> <a href="./disciplina/caddisciplina.php">Cadastro</a></button>
                    <button class="bnt-cad"><a href="./disciplina/listadisciplina.php">Lista de disciplinas</a></button>
                </div>
            </div>
        </div>
    
    </div>
</body>
</html>