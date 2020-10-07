<?php

namespace  gerenciadorMvc\app\model\dao\interfaceDAO;

use gerenciadorMvc\app\model\vo\OsVO;


interface iOsDAO{
    function findAll();
    function findById($id);
    function create(OsVO $osVO);
    function update($id, OsVO $osVO);
    function delete($id);
}