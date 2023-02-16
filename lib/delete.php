<?php
if (isset($_POST['confirmar'])) {

    include("conexao.php");
    $id = ($_GET['id']);
    $sql_code = "DELETE FROM usuarios WHERE id = '$id'";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    if ($sql_query) { ?>
<h1 style="text-align: center;">Cliente deletado com sucesso!</h1>
<p style="text-align: center;"><a href="clientes.php">Clique aqui</a> para voltar para a lista de clientes.</p>
<?php
        die();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Cliente</title>
    <style>
    body {
        background-image: url('fundo.jpg');
        text-align: center;
    }

    .nao {
        position: absolute;
        top: 20%;
        right: 60%;
        padding: 10px;
        cursor: pointer;
    }

    .sim {
        position: absolute;
        top: 20%;
        right: 40%;
        padding: 10px;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <h1>Tem certeza que deseja deletar este cliente?</h1>

    <form action="" method="POST">
        <button class="nao"><a href="clientes.php">Não</a></button>
        <button class="sim" name="confirmar" value="1" type="submit">Sim</button>
    </form>
</body>

</html>