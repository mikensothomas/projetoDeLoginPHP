<?php
include('conexao.php');
$sql = "SELECT * FROM usuarios ORDER BY id";
$resultado = $mysqli->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url('fundo.jpg');
            position: absolute;
            right: 33%;
        }
    </style>
</head>

<body>
    <table class="table" border="2">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome Completo</th>
                <th>E-mail</th>
                <th>Senha</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($dados = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $dados['id'] . "</td>";
                echo "<td>" . $dados['nome'] . "</td>";
                echo "<td>" . $dados['email'] . "</td>";
                echo "<td>" . $dados['senha'] . "</td>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>