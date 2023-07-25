<?php
// isset -> serve para saber se uma variável está definida
include('conexao.php');
if (isset($_POST['enviar'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sqlUp = "UPDATE usuarios 
        SET nome='$nome',email='$email', senha='$senha' WHERE id='$id'";
    $result = $mysqli->query($sqlUp);
}
header('Location: clientes.php');
