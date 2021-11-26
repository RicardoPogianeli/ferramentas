<?php
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select id_users, email, from users where email = '{$usuario}' and senha = '{$senha}'";

echo $query;exit;

