<?php
session_start();
if (!isset($_SESSION['email']) == true and !isset($_SESSION['senah']) == true) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);

    header('Location: login.php');
} else {
    $logado = $_SESSION['email'];
}
/*gdouivcuwhdçiuweqgdusbduhdbdsdhiHBDUÇbduçsgdsabdçadbUÇDSBDçadvui*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Bem vindo à nossa página</h1>
    <h3>Agora voce está na página de acesso</h3>
</body>

</html>