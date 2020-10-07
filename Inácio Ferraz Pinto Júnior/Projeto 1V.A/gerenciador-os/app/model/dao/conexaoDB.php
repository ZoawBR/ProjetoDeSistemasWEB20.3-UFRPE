<?php

function getConexao(){
    $conexao = new mysqli('127.0.0.1', 'root', '', 'facility');

    if($conexao ->connect_error){
        echo 'ERRO de conexão com o DB';
    }else{
        return $conexao;
    }
}
