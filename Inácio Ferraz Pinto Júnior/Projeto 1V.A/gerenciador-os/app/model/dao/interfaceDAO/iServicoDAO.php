<?php

namespace  gerenciadorMvc\app\model\dao\interfaceDAO;

use gerenciadorMvc\app\model\vo\ServicoVO;


interface iServicoDAO{
    function findAll();
    function findById($id);
    function create(ServicoVO $servicoVO);
    function update($id, ServicoVO $servicoVO);
    function delete($id);
}