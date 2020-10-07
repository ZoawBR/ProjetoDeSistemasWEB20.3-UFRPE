<?php

namespace gerenciadorMvc\app\model\dao;

require 'conexaoDB.php';

class UniversalSQL {

    function createEmpresa(EnderecoVO $enderecoVO, ContatoVO $contatoVO, EmpresaVO $empresaVO){
        $link = getConexao();

        $queryEndereco = "INSERT into tb_endereco (cep, endereco, numero, cidade, estado, pais) VALUE ('{$enderecoVO->getCep()}', '{$enderecoVO->getEndereco()}', '{$enderecoVO->getNumero()}', '{$enderecoVO->getCidade()}', '{$enderecoVO->getEstado()}', '{$enderecoVO->getPais()}')";
        $result = $link->query($queryEndereco);
        $last_id_endereco = $link->query('SELECT Max(id) from tb_endereco');

        $queryContato = "INSERT into tb_contato (celular, telefone, email) VALUE ('{$contatoVO->getCelular()}', '{$contatoVO->getTelefone()}', '{$contatoVO->getEmail()}')";
        $result = $link->query($queryContato);
        $last_id_contato = $link->query('SELECT Max(id) from tb_endereco');

        $queryEmpresa = "INSERT into tb_empresa (last_id_contato, last_id_endereco, cnpj, nome, usuario, senha, situacao, dataContrato, isAdm) VALUE ({$empresaVO->getId_contato()}, {$empresaVO->getId_endereco()}, '{$empresaVO->getCnpj()}', '{$empresaVO->getNome()}', '{$empresaVO->getUsuario()}', '{$empresaVO->getSenha()}', {$empresaVO->getSituacao()}, DATE('2017-06-15'), {$empresaVO->getIsAdm()}')";
        $result = $link->query($queryEmpresa);

        $link->close();
    }
  
}