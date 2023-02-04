<?php
if (count($_POST) > 0) {

    include("conexao.php");

    $erro = false;
    $nomeCompleto = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (empty($nomeCompleto)) {
        $erro = "Escreva teu nome completo no campo nome";
    }

    if (empty($email)) {
        $erro = "Escreva teu email";
    }

    if (empty($senha)) {
        $erro = "Escreva tua senha";
    }

    if ($erro) {
        echo "<p><b>ERRO:$erro</b></p>";
    } else {
        $sqli_code = "INSERT INTO login(nomeCompleto, email, senha)
        VALUES ('$nomeCompleto', '$email', '$senha')";
        $deu_certo = $mysqli->query($sqli_code) or die($mysqli->error);

        if (!$deu_certo) {
            echo "<p><b> Erro ao cadastra o cliente </b></p>";
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

<body>
    <form class="forme" action="login.php" method="POST">
        <h2 class="titulo">Página de cadastro</h2>
        <label class="nome">Nome completo</label><br>
        <input required class="input" type="text" name="nome" placeholder="Digite seu Nome completp"><br><br>
        <label class="nome">E-mail</label><br>
        <input required class="input" type="text" name="email" placeholder="Digite seu email"><br><br>
        <label class="nome">Senha</label><br>
        <input required class="input" type="text" name="senha" placeholder="Digite sua senha"><br><br>
        <button class="button" type="submit">Cadastra</button>
    </form>
</body>

</html>