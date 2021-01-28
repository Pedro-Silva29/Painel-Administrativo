<?php

include_once 'painel/helper/funcoes.php';
include_once 'painel/bd/conexao.php';

$pg = isset($_GET['pg']);

if ($pg) {
    //existe

    switch ($_GET['pg']) {

        case 'Inicio':
            include_once 'site/inicio.php';
            break;

        case 'pulu':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'produtos':
            //Fazer uma consulta no banco e disponibilizar o resultado
            //$pessoa = new Pessoa

            $resultDados = new conexao();
            $dados = $resultDados->selecionaDados('SELECT * FROM produtos');

            //include_once 'painel/paginas/includes/header.php';
            //include_once 'painel/paginas/includes/menus.php';
            //include_once 'painel/paginas/produtos.php';
            //include_once 'painel/paginas/includes/footer.php';
            break;

        case 'produtos-item':            
            
            $i = $_GET['id'];            
            $resultDados = new conexao();
            $dados = $resultDados->selecionaDados('SELECT * FROM produtos WHERE id ='.$id);
            
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtos-item.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'serviços':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/serviços.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'Contato':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/Contato.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'login1':
            include_once 'painel/paginas/acesso/login.php';
            break;

        case 'dashboard':
            //Página inicial do Painel Adm            
            if (verificaLogin()) {
                include_once 'painel/paginas/dashboard.php';
            } else {
                echo 'Lofgdfkdkg';
            }
            break;

        default:
            //include_once 'painel/paginas/includes/header.php';
            //include_once 'painel/paginas/includes/menus.php';
           // include_once './painel/paginas/dashboard.php';
           // include_once 'painel/paginas/includes/footer.php';
            break;
    }
} else {
    //não existe
    //include_once 'painel/paginas/includes/header.php';
    //include_once 'painel/paginas/includes/menus.php';
    //include_once './painel/paginas/dashboard.php';
    //include_once 'painel/paginas/includes/footer.php';
}

   