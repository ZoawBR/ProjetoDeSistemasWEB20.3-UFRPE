<?php

namespace gerenciadorMvc\app\model\dao;

use gerenciadorMvc\app\model\dao\interfaceDAO\iServicoDAO;
use gerenciadorMvc\app\model\vo\ServicoVO;

class ServicoDAO implements iServicoDAO{

    function findAll(){
        $listaservico = [];

        $dado1 = new ServicoVO(1, 1, 'SERVICO 1', '300'); 
        $dado2 = new ServicoVO(2, 1, 'SERVICO 2', '400'); 
        $dado3 = new ServicoVO(3, 2, 'SERVICO 3', '500'); 
        array_push($listaservico, $dado1);
        array_push($listaservico, $dado2);
        array_push($listaservico, $dado3);
        return $listaservico;
    }

    function findById($id){
        $data = $this->findAll();
        return $data[$id-1];
    }

    function create(ServicoVO $servicoVO){

    }

    function update($id, ServicoVO $servicoVO){

    }

    function delete($id){

    }

}