<?php

namespace gerenciadorMvc\app\model\dao;

include_once 'conexaoDB.php';

use gerenciadorMvc\app\model\dao\interfaceDAO\iEmpresaDAO;
use gerenciadorMvc\app\model\vo\EmpresaVO;

class EmpresaDAO implements iEmpresaDAO{

    function findAll(){
        $link = getConexao();
        $listaEmpresa = [];

        $query = 'SELECT * FROM tb_empresa WHERE 1';
        if($result = $link->query($query)){
            while ($dado = $result->fetch_row()){
                $obj = new EmpresaVO($dado[0], $dado[1], $dado[2], $dado[3], $dado[4],$dado[5], $dado[6], $dado[7], $dado[8], $dado[9]);
                array_push($listaEmpresa, $obj);
            }
        }
        $link->close();
        return $listaEmpresa;
    }

    function findById($id){
        $link = getConexao();

        $query = 'SELECT * FROM tb_empresa WHERE id='.$id;
        if($result = $link->query($query)){
            while ($dado = $result->fetch_row()){
                return new EmpresaVO($dado[0], $dado[1], $dado[2], $dado[3], $dado[4],$dado[5], $dado[6], $dado[7], $dado[8], $dado[9]);
            }
        }
        $link->close();
        return null;
    }

    function create(EmpresaVO $empresaVO){
        $link = getConexao();
        $queryEmpresa = "INSERT into tb_empresa (id_contato, id_endereco, cnpj, nome, usuario, senha, situacao, dataContrato, isAdm) VALUE ({$empresaVO->getId_contato()}, {$empresaVO->getId_endereco()}, '{$empresaVO->getCnpj()}', '{$empresaVO->getNome()}', '{$empresaVO->getUsuario()}', '{$empresaVO->getSenha()}', 1, '{$empresaVO->getData_contrato()}', 0)";
        $result = $link->query($queryEmpresa);
        $link->close();
    }

    function update($id, EmpresaVO $empresaVO){

    }

    function delete($id){

    }

    function verificarUsuarioSenha($usuario, $senha){
        //FALTA CONTATO E ENDERECO
        $empresa = new EmpresaVO(1, 1, 1,'00.000.000/0000-00', 'TESTANDO', 'teste', '123', 1, '2020-02-20', 1);
        return $empresa;
    }


}