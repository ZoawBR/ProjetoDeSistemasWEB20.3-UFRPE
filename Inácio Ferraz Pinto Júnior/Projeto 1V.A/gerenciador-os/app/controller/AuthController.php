<?php

namespace gerenciadorMvc\app\controller;

use gerenciadorMvc\app\model\dao\EmpresaDAO;


class AuthController {

    
    public function login(){
        require __DIR__ . '/../view/auth/login.php';
    }

    public function sair(){
        unset($_SESSION['usuario']);
        unset($_SESSION['isAdm']);
        unset($_SESSION['isEmpresa']);
        unset($_SESSION['empresa']);
        unset($_SESSION['id_empresa']);
        header('Location: /');
    }

    public function dashboard(){
        require __DIR__ . '/../view/auth/dashboard.php';
    }

    public function validarUsuarioESenha(){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $empresaDao = new EmpresaDAO();
        
        $validacao = $empresaDao->verificarUsuarioSenha($usuario, $senha);
        if($validacao != null){
            
            $_SESSION['usuario'] = $validacao->getNome();
            $_SESSION['isAdm'] = $validacao->getIsAdm();
            $_SESSION['isEmpresa'] = $validacao->getIsEmpresa();

            $_SESSION['id_empresa'] = $validacao->getId();
            if($_SESSION['isEmpresa'] == 0){
                $_SESSION['id_empresa'] = $validacao->getId_empresa();
            }
            
            header('Location: /');
        }
    }
}