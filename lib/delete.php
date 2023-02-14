<?php

if (isset($_GET['id'])) {

    include('conexao.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios WHERE id = $id";

    $sqlimp = $mysqli->query($sql);

    if ($sqlimp->num_rows > 0) {
        $sqldelete = "DELETE FROM usuarios WHERE id = $id";
        $sqlveri = $mysqli->query($sqldelete);
    }
}