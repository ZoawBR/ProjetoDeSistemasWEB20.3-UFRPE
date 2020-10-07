<?php

namespace  gerenciadorMvc\app\model\dao\interfaceDAO;

use gerenciadorMvc\app\model\vo\ContatoVO;


interface iContatoDAO{
    function findAll();
    function findById($id);
    function create(ContatoVO $contatoVO);
    function update($id, ContatoVO $contatoVO);
    function delete($id);
}