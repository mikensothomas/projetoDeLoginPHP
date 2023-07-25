<?php
session_start();
if (!isset($_SESSION['email']) == true and !isset($_SESSION['senah']) == true) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);

    header('Location: login.php');
} else {
    $logado = $_SESSION['email'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acesso.css">
    <title>Document</title>
</head>

<body>
    <h1>Bem vindo à nossa página</h1>
    <h3>Agora voce está na página de acesso</h3>
    <p><a href="cadastro.php">Clique aqui</a> para voltar na página de cadastro</p>
</body>

</html>