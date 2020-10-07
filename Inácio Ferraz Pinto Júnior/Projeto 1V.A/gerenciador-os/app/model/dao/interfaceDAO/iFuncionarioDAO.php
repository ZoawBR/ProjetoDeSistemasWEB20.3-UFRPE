<?php

namespace  gerenciadorMvc\app\model\dao\interfaceDAO;

use gerenciadorMvc\app\model\vo\FuncionarioVO;


interface iFuncionarioDAO{
    function findAll();
    function findById($id);
    function create(FuncionarioVO $funcionarioVO);
    function update($id, FuncionarioVO $funcionarioVO);
    function delete($id);
    function verificarUsuarioSenha($usuario, $senha);

}