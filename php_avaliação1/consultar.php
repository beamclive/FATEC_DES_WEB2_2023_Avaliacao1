<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <title>Lista de aluno</title>

</head>

<body> 

    <div class="container"> 

    <h1 class="text-center"> Lista de alunos cadastrados </h1>

    <?php

    // função validação de usuário
    require 'validarAcesso.php';
    ValidarAcesso();
    // variavel que recebe arquivo 
    $registrar = 'alunoscadastrados.txt'; 

    // valida se existe registro no arquivo 
    if (!file_exists($registrar)){

        echo "Nenhum aluno cadastrado!"; 
        exit;

    } else {
        $arquivo = fopen($registrar, 'r');
        while (!feof ($arquivo)) {
            $linha = fgets ($arquivo); 
            echo $linha . '<br>'; 
        }
    }

    ?> 

<a href="home.php" class="btn btn-danger">Voltar</a>
</div> 



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>