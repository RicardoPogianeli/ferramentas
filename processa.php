<?php

include_once("conexao.php");

$nome= filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$email= filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
$telefone= filter_input(INPUT_POST, 'telefone',FILTER_SANITIZE_STRING);
$senha= filter_input(INPUT_POST, 'senha',FILTER_SANITIZE_STRING);

$result_usuarios = "INSERT INTO users (nome, email, telefone, senha) VALUES ('$nome', '$email', '$telefone', '$senha')";
$resultado_usuario = mysqli_query($conn, $result_usuarios);

if(mysqli_insert_id($conn)){
    header("Location: index.php");

}else{
    header("Location: cadastrar.php");
}
