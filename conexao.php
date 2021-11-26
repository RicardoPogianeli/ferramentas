
<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "ferramentas";

//Criar a conexao

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname) or die ("Erro de conexão com banco de dados");

