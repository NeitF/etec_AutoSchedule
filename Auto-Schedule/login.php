<?php
session_start();
include('conexao.php');

if(empty($_POST['instituicao']) || empty($_POST['codUsuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$instituicao = mysqli_real_escape_string($conexao, $_POST['instituicao']);
$codUsuario = mysqli_real_escape_string($conexao, $_POST['codUsuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "Select * from usuario where cod_instituicao = '{$instituicao}' and cod_usuario = '{$codUsuario}' and senha = '{$senha}'";
$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $registro = mysqli_fetch_array($result);
    $nome = $registro["nome_usuario"];
    $cargo = $registro["cargo"];
    $_SESSION['nome_usuario'] = $nome;
    $_SESSION['cargo'] = $cargo;
    header('Location: tabela.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}

?>