<?php
if (isset($_POST['submit'])) {
    session_start();

    include('conexao.php');

    $erro = " ";
    $erroLogin = " ";

    $erro = false;
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (empty($_POST['email'])) {
        $erro = "<span style='color: red;'>Preencha o campo email</span>";
    }

    if (empty($_POST['senha'])) {
        $erro = "<span style='color: red;'>Preencha o campo senha</span>";
    }

    if (empty($_POST['email']) && empty($_POST['senha'])) {
        $erro = "<span style='color: red;'>Preencha todos os campos </span>";
    }

    if (!$erro) {

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $resultado = $mysqli->query($sql);

        if (mysqli_num_rows($resultado) < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            $erroLogin = "<span style='color: red;'>email ou senha inválido</span>";
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: acesso.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de cadastro</title>
    <style>
    .head {
        padding: 10px;
        background-color: blanchedalmond;
    }

    .sair {
        position: absolute;
        right: 1%;
    }
    </style>
</head>

<body>
    <div class="head">
        <a href="clientes.php" class="clientes">Lista dos clientes</a>
        <a href="cadastro.php" class="sair">Página de cadastro</a>
    </div>
    <form class="forme" action="" method="POST">
        <h2 class="titulo">Página de login</h2>

        <?php
        if (isset($_POST['submit'])) {
            echo $erroLogin;
            echo $erro;
        }
        ?>

        <br>
        <br>
        <label class="nome">E-mail</label><br>
        <input class="input" type="text" name="email" placeholder="Digite seu email"><br><br>
        <label class="nome">Senha</label><br>
        <input class="input" type="text" name="senha" placeholder="Digite sua senha"><br><br>
        <button class="button" type="submit" name="submit">Enviar</button>
        <div class="esquecer">
            <a href="senha.php" class="senha">Esqueceu tua senha?</a>
        </div>
    </form>
</body>

</html>