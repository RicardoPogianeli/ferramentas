<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=""https: //fonts.googleapis.com/css2? família = Oswald: peso @ 200; 300; 400; 500; 600; 700 & display = swap "rel =" stylesheet">"
    <link rel="stylesheet" type="text/css" href="./src/css/style.css">
    <title>Projeto Coisas Emprestadas</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Ferramentas Emprestadas</h1>

    </header>
    <main class="principal">
        <div class="cadastre-se">
            <h2>Acesse sua conta!</h2>
        </div>



        <div class="login">
        
            
            <form action="valida.php" method="post">
            
                

                <label>E-mail:</label><input class="campo_e-mail" type="text" name='email'><br>

               

                <label>Senha:</label><input class="campo_cidade" type="password" name="senha"><br><br>
                
                <button type="submit" class="btnCadastro">Entrar</button></a><br><br>
                <a href="cadastrar.php"> <button type="submit" class="btnCadastro" formaction="cadastrar.php">Cadastre-se</button></a>
            
            
            </form>

    
        </div>    
       
    </main>
    <footer class="rodape">
        Ferramentas & Emprestimo <?=date('Y');?>
    </footer>
    
</body>
</html>