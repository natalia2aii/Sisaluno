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
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-image:  url('img.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.main-login {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.left-login {
    width: 50vh;
    height: 50vh;
  text-align: top;
  /* Cor bonita - roxo */
}

.left-login h1 {
  font-size: 25px;
  margin-bottom: 20px;
  color: black; 
  font-family: 'Times New Roman';
  

}

.left-login-img {
  width: 200px;
}

.right-login {
  text-align: center;
}

.card-login {
  width: 200px;
  padding: 20px;
  background-color: #8a2be2; /* Cor bonita - roxo */
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

h1 {
  color: white;
  font-size: 24px;
  margin-bottom: 20px;
}

.textfield {
  display: flex;
  flex-direction: column;
}

.bnt-login {
  padding: 10px;
  margin: 5px;
  background-color: #630080; /* Cor bonita - roxo mais escuro */
  border: none;
  border-radius: 5px;
  color: white;
  font-size: 16px;
  text-decoration: none;
  cursor: pointer;
}

.bnt-login a {
  color: white;
  text-decoration: none;
}

.bnt-login:hover {
  background-color: #470059; /* Cor bonita - roxo ainda mais escuro */
}

    </style>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Controle Academico - Instituto Federal Guanambi <br><br></h1>
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>Bem Vindo!</h1>
                <div class="textfield">
                    <button class="bnt-login"> <a href="cadgeral.php">Cadastro</a></button>
                    <button class="bnt-login"><a href="cadgeral.php">Lista de cadastros</a></button>
                </div>
            </div>
        </div>
    
    </div>
</body>
</html>