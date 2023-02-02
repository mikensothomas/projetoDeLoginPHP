<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        padding: 80pt;
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
        width: 55%;
        padding: 16px 0px;
        margin: 25px;
        border: none;
        text-transform: uppercase;
        font-weight: 800;
        letter-spacing: 3px;
        cursor: pointer;
        position: absolute;
        right: 13%;
        top: 65%;
        background-color: rgb(183, 183, 218);
        border-radius: 15%;
    }

    .nome {
        font-weight: 600;
    }

    .senha {
        position: absolute;
        top: 90%;
        right: 33%;
    }
    </style>
</head>

<body>
    <form class="forme" action="" method="POST">
        <h2 class="titulo">Página de login</h2>
        <label class="nome">E-mail</label><br>
        <input class="input" required type="text" name="email" placeholder="Digite seu email"><br><br>
        <label class="nome">Senha</label><br>
        <input class="input" required type="text" name="senha" placeholder="Digite sua senha"><br><br>
        <button class="button" type="submit">Cadastra</button>
        <div class="esquecer">
            <a href="senha.php" class="senha">Esqueceu tua senha?</a>
        </div>
    </form>
</body>

</html>