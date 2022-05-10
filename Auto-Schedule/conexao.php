<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "bdautoschedule";
$conexao = mysqli_connect($hostname, $user, $password, $database);

if(!$conexao){
    echo "Falha na conexão com o banco de dados";
}

?>