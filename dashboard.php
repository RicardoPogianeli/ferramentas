<?php
include("conexao.php");

$consulta = "SELECT * FROM controleemprestimo";
$consult_emprestimo = mysqli_query($conn, $consulta);
//$resultado_usuario = mysqli_query($conn, $result_usuarios);


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
        <div class="painel">
            <h2>Painel de Controle de Emprestimos</h2>
        </div>

        <div>
            <button class="btnInicio">Início</button> <br>
            <button>Login <link rel="stylesheet" href="login.html"></button><br>
            <button>Cadastrar</button>
        </div>
        <div class="tabela">
            <table border="1">
                <caption class="nometabela">Tabela de Controle</caption>
                <a href="emprestar.php"><button class="btnCadastrarItens">Cadastar Novo Item</button></a>
                <tr classe="colunas">
                    <td>Id</td>
                    <td>Nome do Item</td>
                    <td>Nome do Fornecedor</td>
                    <td>Nome do Receptor</td>
                    <td>Data do Emprestimo</td>
                    <td>Data da Davolção</td>
                </tr>

                <?php while($dado = $consult_emprestimo ->fetch_array()){ ?>

                <tr>
                    <td> <?php echo $dado["numEmprestimo"];?></td>
                    <td> <?php echo $dado["nomeItem"];?></td>
                    <td> <?php echo $dado["nomeFornecedor"];?></td>
                    <td> <?php echo $dado["nomeReceptor"];?></td>
                    <td> <?php echo $dado["dataEmprestimo"];?></td>
                    <td> <?php echo $dado["dataDevolucao"];?></td>
                </tr>

                <?php }?>

            </table>
        </div>
       
    </main>
    <footer class="rodape">
        Ferramentas & Emprestimo <br><?=date('D/M/Y')?>;
    </footer>
    
</body>
</html>