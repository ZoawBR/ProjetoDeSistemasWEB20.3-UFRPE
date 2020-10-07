<?php

namespace  gerenciadorMvc\app\model\dao\interfaceDAO;

use gerenciadorMvc\app\model\vo\EnderecoVO;


interface iEnderecoDAO{
    function findAll();
    function findById($id);
    function create(EnderecoVO $enderecoVO);
    function update($id, EnderecoVO $enderecoVO);
    function delete($id);
}