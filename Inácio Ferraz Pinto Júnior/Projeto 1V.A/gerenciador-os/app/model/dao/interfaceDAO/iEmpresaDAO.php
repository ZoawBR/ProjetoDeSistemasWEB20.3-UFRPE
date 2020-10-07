<?php

namespace  gerenciadorMvc\app\model\dao\interfaceDAO;

use gerenciadorMvc\app\model\vo\EmpresaVO;


interface iEmpresaDAO{
    function findAll();
    function findById($id);
    function create(EmpresaVO $empresaVO);
    function update($id, EmpresaVO $empresaVO);
    function delete($id);
    function verificarUsuarioSenha($usuario, $senha);

}