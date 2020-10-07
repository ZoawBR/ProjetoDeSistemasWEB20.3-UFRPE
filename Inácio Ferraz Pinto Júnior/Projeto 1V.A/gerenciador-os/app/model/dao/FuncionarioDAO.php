<?php

namespace gerenciadorMvc\app\model\dao;
include_once 'conexaoDB.php';

use gerenciadorMvc\app\model\dao\interfaceDAO\iFuncionarioDAO;
use gerenciadorMvc\app\model\vo\FuncionarioVO;

class FuncionarioDAO {

    function findAll(){
        $link = getConexao();
        $lista = [];

        $query = 'SELECT * FROM tb_funcionario WHERE 1';
        if($result = $link->query($query)){
            while ($dado = $result->fetch_row()){
                $obj = new FuncionarioVO($dado[0], $dado[1], $dado[2], $dado[3], $dado[4],$dado[5], $dado[6], $dado[7]);
                array_push($lista, $obj);
            }
        }
        $link->close();
        return $lista;
    }

    function findById($id){
        $link = getConexao();

        $query = 'SELECT * FROM tb_funcionario WHERE id='.$id;
        if($result = $link->query($query)){
            while ($dado = $result->fetch_row()){
                return new FuncionarioVO($dado[0], $dado[1], $dado[2], $dado[3], $dado[4],$dado[5], $dado[6],$dado[7]);
        }
        $link->close();
        return null;
    }

    function create(FuncionarioVO $funcionarioVO){
        $link = getConexao();
        $query = "INSERT into tb_funcionario (id_empresa, id_endereco, id_contato , nome, cpf, usuario, senha, situacao) VALUE ({$funcionarioVO->getId_empresa()},{$funcionarioVO->getId_endereco()},{$funcionarioVO->getId_contato()}, '{$funcionarioVO->getNome()}', '{$funcionarioVO->getCpf()}', '{$funcionarioVO->getUsuario()}','{$funcionarioVO->getSenha()}', 1)";

        $result = $link->query($query);
        $link->close();
    }

    function update($id, FuncionarioVO $funcionarioVO){}

    function delete($id){}

    function verificarUsuarioSenha($usuario, $senha){
        $funcionario = new FuncionarioVO(3, 3, 3,'000.000.000-03', 'TESTANDO 3', 'teste3', '123', 1); 
        return $funcionario;
    }
}
}