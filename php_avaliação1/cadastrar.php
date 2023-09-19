<?php

// função validação de usuário
require 'validarAcesso.php';
ValidarAcesso();

    // valida dados enviados p chamar a função de cadastro 
    if(isset($_POST['cadastrar'])){
        Cadastrar();
    }

// função de cadastro 
function Cadastrar(){

    $aluno = $_POST['aluno'];
    $ra = $_POST['ra'];
    $placa = $_POST['placa'];

    $registrar = fopen("alunoscadastrados.txt", "a+");
    fwrite($registrar, $aluno . "|" . $ra . "|" . $placa . "\n");
    fflush($registrar);
    fclose($registrar); 
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
    
    <title>Cadastro de aluno</title>

</head>

<body>
    <div class="container">
        <h1> Cadastre novo aluno </h1>

        <form method="post">
            <label for="inputaluno">Digite o nome do aluno</label><br>
            <input type="text" id="inputaluno" name="aluno" require><br><br>

            <label for="inputra">Digite o RA</label><br>
            <input type="text" id="inputra" name="ra" /><br><br>

            <label for="inputplaca">Placa do veículo</label><br>
            <input type="text" id="inputplaca" name="placa"/><br><br>

            <a href="home.php" class="btn btn-danger">Voltar</a>
            <input type="submit" value="Cadastrar" name="cadastrar" class="btn btn-primary"></a>
    
        </form>    
    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>