<?php

namespace gerenciadorMvc\app\model\dao;

include_once 'conexaoDB.php';

use gerenciadorMvc\app\model\dao\interfaceDAO\iEnderecoDAO;
use gerenciadorMvc\app\model\vo\EnderecoVO;

class EnderecoDAO implements iEnderecoDAO{

    function findAll(){
        $link = getConexao();
        $listar = [];

        $query = 'SELECT * FROM tb_endereco WHERE 1';
        if($result = $link->query($query)){
            while ($dado = $result->fetch_row()){
                $obj = new EnderecoVO($dado[0], $dado[1], $dado[2], $dado[3], $dado[4],$dado[5], $dado[6]);
                array_push($listar, $obj);
            }
        }
        $link->close();
        return $listar;
    }

    function findById($id){
        $link = getConexao();

        $query = 'SELECT * FROM tb_endereco WHERE id='.$id;
        if($result = $link->query($query)){
            while ($dado = $result->fetch_row()){
                return new EnderecoVO($dado[0], $dado[1], $dado[2], $dado[3], $dado[4],$dado[5], $dado[6]);
            }
        }
        $link->close();
        return null;
    }

    function create(EnderecoVO $enderecoVO){
        $link = getConexao();
        $queryEndereco = "INSERT into tb_endereco (cep, endereco, numero, cidade, estado, pais) VALUE ('{$enderecoVO->getCep()}', '{$enderecoVO->getEndereco()}', '{$enderecoVO->getNumero()}', '{$enderecoVO->getCidade()}', '{$enderecoVO->getEstado()}', '{$enderecoVO->getPais()}')";
        $result = $link->query($queryEndereco);
        $row = $link->query('SELECT COUNT(*) as total from tb_endereco');
        $nextid= mysqli_fetch_assoc($row);
        $link->close();
        return $nextid['total'];
    }

    function update($id, EnderecoVO $enderecoVO){

    }

    function delete($id){

    }

}