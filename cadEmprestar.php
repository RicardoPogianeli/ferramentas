<?php

include_once("conexao.php");

$item= filter_input(INPUT_POST, 'nomeItem',FILTER_SANITIZE_STRING);
$fornecedor= filter_input(INPUT_POST, 'nomeFornecedor',FILTER_SANITIZE_EMAIL);
$receptor= filter_input(INPUT_POST, 'nomeReceptor',FILTER_SANITIZE_EMAIL);
$dtEmprestimo= filter_input(INPUT_POST, 'dataEmprestimo',FILTER_SANITIZE_STRING);
$dtDevolucao= filter_input(INPUT_POST, 'dataDevolucao',FILTER_SANITIZE_STRING);

$result_usuarios = "INSERT INTO controleemprestimo (nomeItem, nomeFornecedor, nomeReceptor, dataEmprestimo, dataDevolucao) VALUES ('$item', '$fornecedor', '$receptor', '$dtEmprestimo', '$dtDevolucao')";
$resultado_usuario = mysqli_query($conn, $result_usuarios);

if(mysqli_insert_id($conn)){
    header("Location: dashboard.php");

}else{
    header("Location: emprestar.php");
}
