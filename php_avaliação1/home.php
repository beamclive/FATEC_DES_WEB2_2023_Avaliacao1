<?php

// função validação de usuário
require 'validarAcesso.php';
ValidarAcesso()

?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Estacionamento Fatec</title>

</head>

<body>

<body class="container">
    <div class="">
        <h2>Bem vindo!</h2>
    </div>
    <p>
        <h4> Selecione a opção desejada <h4>

        <a href="cadastrar.php" class="btn btn-custom btn-primary">Cadastrar novos alunos</a>
        <a href="consultar.php" class="btn btn-custom btn-primary">Consultar alunos</a>
        <a href="logout.php" class="btn btn-custom2 btn-danger">Sair da conta</a>
    </p>

</body>
</html>