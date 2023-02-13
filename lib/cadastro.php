<?php
if (isset($_POST['submit'])) {
    include('conexao.php');

    if (!isset($_SESSION));
    session_start();

    $erro = false;
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (empty($_POST['nome'])) {
        $erro = 'Preencha o campo nome';
    }

    if (empty($_POST['email'])) {
        $erro = 'Preencha o campo email';
    }

    if (empty($_POST['senha'])) {
        $erro = 'Preencha o campo senha';
    }

    if ($erro) {
        echo "<p><b>ERRO: $erro</b></P>";
    } else {
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        $certo = $mysqli->query($sql) or die($mysql->error);

        if ($certo) {
            header('Location: login.php');
        } else {
            echo "<b>Erro ao cadastrar o cliente</b>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Página de cadastro</title>
</head>
<style>
.ja {
    position: absolute;
    top: 94%;
    right: 29%;
}
</style>

<body>
    <form class="forme" action="" method="POST">
        <h2 class="titulo">Página de cadastro</h2>
        <label class="nome">Nome completo</label><br>
        <input class="input" type="text" name="nome" placeholder="Digite seu Nome completo"><br><br>
        <label class="nome">E-mail</label><br>
        <input class="input" type="text" name="email" placeholder="Digite seu email"><br><br>
        <label class="nome">Senha</label><br>
        <input class="input" type="text" name="senha" placeholder="Digite sua senha"><br><br>
        <button class="button" type="submit" name="submit">Cadastra</button>
        <a class="ja" href="login.php">Já fiz o cadastro</a>
    </form>
</body>

</html>