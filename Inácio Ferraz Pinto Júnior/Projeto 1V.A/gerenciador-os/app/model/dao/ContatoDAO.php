<?php

namespace gerenciadorMvc\app\model\dao;

include_once 'conexaoDB.php';

use gerenciadorMvc\app\model\dao\interfaceDAO\iContatoDAO;
use gerenciadorMvc\app\model\vo\ContatoVO;

class ContatoDAO implements iContatoDAO{

    function findAll(){
        $link = getConexao();
        $listar = [];

        $query = 'SELECT * FROM tb_contato WHERE 1';
        if($result = $link->query($query)){
            while ($dado = $result->fetch_row()){
                $obj = new ContatoVO($dado[0], $dado[1], $dado[2], $dado[3]);
                array_push($listar, $obj);
            }
        }
        $link->close();
        return $listar;
    }

    function findById($id){
        $link = getConexao();

        $query = 'SELECT * FROM tb_contato WHERE id='.$id;
        if($result = $link->query($query)){
            while ($dado = $result->fetch_row()){
                return new ContatoVO($dado[0], $dado[1], $dado[2], $dado[3]);
            }
        }
        $link->close();
        return null;
    }

    function create(ContatoVO $contatoVO){
        $link = getConexao();
        $queryContato = "INSERT into tb_contato (celular, telefone, email) VALUE ('{$contatoVO->getCelular()}', '{$contatoVO->getTelefone()}', '{$contatoVO->getCelular()}')";
        $result = $link->query($queryContato);
        $row = $link->query('SELECT COUNT(*) as total from tb_contato');
        $nextid= mysqli_fetch_assoc($row);
        $link->close();
        return $nextid['total'];
    }

    function update($id, ContatoVO $contatoVO){

    }

    function delete($id){

    }

}