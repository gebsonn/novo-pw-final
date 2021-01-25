<?php

function verificaLogin() {
//No futuro as informações sãp
//trazidos do banco de dados

    $usuario = 'Geb';
    $senha = '123';

//Verificar se as informações passadas
//pelo usuário é igual a que estão no banco
    if ($_POST) {
        if ($_POST['usuario'] == $usuario &&
                $_POST['senha'] == $senha) {
//cria dados na SESSION
            $_session['usuario'] = $usuario;
            return TRUE;
        } else {
            return FALSE;
        }
    } else {
        if (isset($_SESSION['usuario'])) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
