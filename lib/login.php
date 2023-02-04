<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de cadastro</title>
</head>

<body>
    <form class="forme" action="" method="POST">
        <h2 class="titulo">Página de login</h2>
        <label class="nome">E-mail</label><br>
        <input required class="input" type="text" name="email" placeholder="Digite seu email"><br><br>
        <label class="nome">Senha</label><br>
        <input required class="input" type="text" name="senha" placeholder="Digite sua senha"><br><br>
        <button class="button" type="submit">Cadastra</button>
        <div class="esquecer">
            <a href="senha.php" class="senha">Esqueceu tua senha?</a>
        </div>
    </form>
</body>

</html>