<?php

$host = "localhost";
$user = "id20317871_usuários";
$pass = "p3Bl0XoIGB@l)(";
$bd = "id20317871_projeto_login";

$mysqli = new mysqli($host, $user, $pass, $bd);

/* check connection */
if ($mysqli->connect_errno) {
    echo "Connect failed: " . $mysqli->connect_error;
}