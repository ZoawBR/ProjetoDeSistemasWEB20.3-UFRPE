<?php

namespace gerenciadorMvc\app\model\dao;

use gerenciadorMvc\app\model\dao\interfaceDAO\iOsDAO;
use gerenciadorMvc\app\model\vo\OsVO;

class OsDAO implements iOsDAO{

    function findAll(){
        $listaos = [];

        $dado1 = new OsVO(1 ,1, 1, 1, 1, '2020-02-20', '2020-02-20', '300', 1); 
        $dado2 = new OsVO(2, 2, 1, 1, 1, '2020-02-24', '2020-02-24', '400', 1); 
        $dado3 = new OsVO(3, 3, 2, 2, 2, '2020-02-24', '2020-02-24', '500', 0); 
        array_push($listaos, $dado1);
        array_push($listaos, $dado2);
        array_push($listaos, $dado3);
        return $listaos;
    }

    function findById($id){
        $data = $this->findAll();
        return $data[$id-1];
    }

    function create(OsVO $osVO){

    }

    function update($id, OsVO $osVO){

    }

    function delete($id){

    }

}