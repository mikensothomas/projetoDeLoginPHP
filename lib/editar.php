<?php

if (!empty($_GET['id'])) {

    include('conexao.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $sql_conect = $mysqli->query($sql);

    if ($sql_conect->num_rows > 0) {
        while ($dados = mysqli_fetch_assoc($sql_conect)) {
            $nome = $dados['nome'];
            $email = $dados['email'];
            $senha = $dados['senha'];
        }
    } else {
        header('cadastro.php');
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
    <link rel="stylesheet" href="editar.css">
    <title>Página de cadastro</title>
</head>

<body>
    <form class="forme" action="save_edit.php" method="POST">
        <h2 class="titulo">Editar clientes</h2>
        <label class="nome">Nome completo</label><br>
        <input class="input" type="text" name="nome" placeholder="Digite seu Nome completo"
            value="<?php echo $nome ?>"><br><br>
        <label class="nome">E-mail</label><br>
        <input class="input" type="text" name="email" placeholder="Digite seu email"
            value="<?php echo $email ?>"><br><br>
        <label class="nome">Senha</label><br>
        <input class="input" type="text" name="senha" placeholder="Digite sua senha"
            value="<?php echo $senha ?>"><br><br>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <button class="button" type="submit" id="enviar" name="enviar">Enviar</button>
    </form>
</body>

</html>