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
                <caption class="nometabela">Tabela Itens Já Emprestados</caption>
                <button class="btnCadastrarItens">Cadastar item</button>
                <button class="btnEmprestarItens">Emprestar Item</button>
                <tr classe="colunas">
                    <td>Item</td>
                    <td>Data Emprestimo</td>
                    <td>Previsão de entrega</td>
                    <td>Data Entrega</td>
                    <td>Status</td>
                </tr>
            </table>
        </div>
       
    </main>
    <footer class="rodape">
        Ferramentas & Emprestimo <?=date('Y');?>
    </footer>
    
</body>
</html>