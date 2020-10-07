<?php

namespace  gerenciadorMvc\app\model\dao\interfaceDAO;

use gerenciadorMvc\app\model\vo\ClienteVO;


interface iClienteDAO{
    function findAll();
    function findById($id);
    function create(ClienteVO $clienteVO);
    function update($id, ClienteVO $clienteVO);
    function delete($id);
}