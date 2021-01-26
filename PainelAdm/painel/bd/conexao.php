<?php

class Conexao {

    private $db__server = 'localhost';
    private $db__name = 'paineladm';
    private $db__charset = 'utf8';
    private $db__username = 'root';
    private $db__passeword = '';

    public function selecionarDados($consulta, $parametros = null, $debug = true, $close_connection = true) {
        
        $result = null;
        
        $connection = new PDO (
                );
        
    }

}
