<?php

include_once './painel/helper/funcoes.php';

$pg = isset($_GET['pg']);

if ($pg) {
    //existe
    switch ($_GET ['pg']) {

        case 'login':
            include_once 'painel/paginas/acesso/login.php';
            break;

        case 'inicio':
            include_once 'site/inicio.php';
            break;

        case 'dashboard':
            //pagina inicial do painel adm
            if (verificalogin()) {
                include_once './painel/paginas/';                
            }else {
                
            }
            break;


        case 'dashboard': //pagina inicial do painel adm
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/dashboard.php';
            break;

        default :
            include_once 'painel/paginas/dashboard.php';
            break;
    }
} else {
    //não existe
    include_once 'painel/paginas/dashboard.php';
}
       
        