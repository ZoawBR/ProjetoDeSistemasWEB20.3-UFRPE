<?php

namespace gerenciadorMvc\app\model\dao;

require 'conexaoDB.php';

use gerenciadorMvc\app\model\dao\interfaceDAO\iClienteDAO;
use gerenciadorMvc\app\model\vo\ClienteVO;

class ClienteDAO implements iClienteDAO{

    function findAll(){
        $link = getConexao();
        $listar = [];

        $query = 'SELECT * FROM tb_cliente WHERE 1';
        if($result = $link->query($query)){
            while ($dado = $result->fetch_row()){
                $obj = new ClienteVO($dado[0], $dado[1], $dado[2], $dado[3], $dado[4],$dado[5]);
                array_push($listar, $obj);
            }
        }
        $link->close();
        return $listar;
    }

    function findById($id){
        $link = getConexao();

        $query = 'SELECT * FROM tb_cliente WHERE id='.$id;
        if($result = $link->query($query)){
            while ($dado = $result->fetch_row()){
                return new ClienteVO($dado[0], $dado[1], $dado[2], $dado[3], $dado[4],$dado[5]);
            }
        }
        $link->close();
        return null;
    }

    function create(ClienteVO $clienteVO){

    }

    function update($id, ClienteVO $clienteVO){

    }

    function delete($id){

    }

}