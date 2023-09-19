<?php

// session
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['user'] == 'portaria' and $_POST['senha'] == 'FatecAraras'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["user"] = 'portaria';
         header("location: home.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
        echo "Senha inválida!"; 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Fatec Araras</title>

</head>
<body>

<div class="container"> 
  <h2> Seja bem vindo! </h2> 

  <h3> Essa é uma área de acesso restrita aos colaboradores da portaria da Fatec Araras. </h3> 
    <p> Para realizar cadastros de novos alunos e consultar alunos já cadastrados no estacionamento, realize o login abaixo. <p> 

  <div class="card mb-3">
    <form method="post">
      <div class="mb-3">
        <label for="user" class="form-label">Usuário</label>
        <input type="text" class="form-control" name="user" value="portaria">
      </div>
      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" name="senha" value="FatecAraras"></input>

        <input type="submit" class="btn btn-primary" value="Entrar">
      </div>
    </form> 
  </div> 

</div> 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>