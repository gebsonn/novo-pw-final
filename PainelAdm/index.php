<?php

include_once 'painel/helper/funcoes.php';

$pg = isset($_GET['pg']);

if ($pg) {
    //existe
    switch ($_GET ['pg']) {

        case 'login':
            include_once 'painel/paginas/acesso/login.php';
            break;

        case 'inicio':
            include_once 'painel/inicio.php';
            break;

        case 'produtos':
            include_once 'painel/produtos.php';
            break;

        case 'contato':
            include_once 'painel/contato.php';
            break;

        case 'servicos':
            include_once 'painel/servicos.php';
            break;

        case 'dashboard':
            //pagina inicial do painel adm
            if (verificalogin()) {
                include_once 'painel/paginas/includes/header.php';
                include_once 'painel/paginas/includes/menus.php';
                include_once 'painel/paginas/dashboard.php';
                include_once 'painel/paginas/includes/footer.php';
            } else {
                
            }
            break;


        case 'dashboard': //pagina inicial do painel adm
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/dashboard.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        default :
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/dashboard.php';
            include_once 'painel/paginas/includes/footer.php';
            break;
    }
} else {
    //não existe
    include_once 'painel/paginas/includes/header.php';
    include_once 'painel/paginas/includes/menus.php';
    include_once 'painel/paginas/dashboard.php';
    include_once 'painel/paginas/includes/footer.php';
}
       
        