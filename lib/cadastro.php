<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Página de cadastro</title>
    <style>
    * {
        margin: 0;
    }

    body {
        background-image: url('fundo.jpg');
    }

    .forme {
        position: absolute;
        right: 41%;
        top: 20%;
        padding: 50pt;
        background-color: rgb(252, 250, 250);
        border-radius: 3%;
    }

    .titulo {
        position: absolute;
        top: 5%;
    }

    .input {
        padding: 5%;
        outline: none;
    }

    .button {
        width: 60%;
        padding: 16px 0px;
        margin: 25px;
        border: none;
        text-transform: uppercase;
        font-weight: 800;
        letter-spacing: 3px;
        cursor: pointer;
        position: absolute;
        right: 9%;
        top: 74%;
        background-color: rgb(183, 183, 218);
        border-radius: 15%;
    }

    .nome {
        font-weight: 600;
    }
    </style>
</head>

<body>
    <form class="forme" action="login.php" method="POST">
        <h2 class="titulo">Página de cadastro</h2>
        <label class="nome">Nome completo</label><br>
        <input class="input" type="text" name="nome" required placeholder="Digite seu Nome completp"><br><br>
        <label class="nome">E-mail</label><br>
        <input class="input" required type="text" name="email" placeholder="Digite seu email"><br><br>
        <label class="nome">Senha</label><br>
        <input class="input" required type="text" name="senha" placeholder="Digite sua senha"><br><br>
        <button class="button" type="submit">Cadastra</button>
    </form>
</body>

</html>