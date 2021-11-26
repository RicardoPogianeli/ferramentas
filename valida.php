<?php
    session_start();
    include_once("conexao.php");

    if((isset($_POST['email'])) && (isset($_POST))){
        $usuario = mysqli_real_escape_string($conn, $_POST['email']);
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);

        //$senha=md5($senha);

        $sql ="SELECT * FROM users WHERE email = '$usuario' && senha = '$senha' ";
        $result = mysqli_query($conn, $sql);
        $resultado = mysqli_fetch_assoc($result);


        if(empty($resultado)){
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: index.php");
        }elseif (!empty($resultado)){
            header("Location: dashboard.php");

        }else{
            $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: cadastro.php");
        }
        

    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: cadastro.php");
    }

?>