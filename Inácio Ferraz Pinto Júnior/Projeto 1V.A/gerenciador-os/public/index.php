<?php
session_start();

require __DIR__ . './../autoload.php';

use gerenciadorMvc\app\controller\AuthController;
use gerenciadorMvc\app\controller\EmpresaController;
use gerenciadorMvc\app\controller\FuncionarioController;
use gerenciadorMvc\app\controller\ClienteController;
use gerenciadorMvc\app\controller\OsController;

$authController = new AuthController();
$empresaController = new EmpresaController();
$funcionarioController = new FuncionarioController();
$clienteController = new ClienteController();
$osController = new OsController();

$path = '';

if(isset($_SERVER['PATH_INFO'])){
    $path = $_SERVER['PATH_INFO'];
}else{

}

$method = $_SERVER['REQUEST_METHOD'];

switch($path){
    case '/auth':
        if($method == 'POST'){
            $authController->validarUsuarioESenha();
        }else{
            header('Location: /');
        }
        break;
    
    case '/sair':
        if($method == 'POST'){
            $authController->sair();
        }else{
            header('Location: /');
        }
        break;
    
    
    default:
        if(isset($_SESSION['usuario'])){
            switch($path){
                case '/empresa':
                    routes($empresaController);
                    break;
                
                case '/funcionario':
                    routes($funcionarioController);
                    break;

                case '/cliente':
                    routes($clienteController);
                    break;
                
                case '/os':
                    routes($osController);
                    break;
                    
                default:
                    $authController->dashboard();
                    break;
            }
        }else{
            $authController->login();
        }
        break;
}

function routes($controller){
    $queryString = '';
    $id = null;

    if(isset($_SERVER['QUERY_STRING'])){
        $queryString = explode('&', $_SERVER['QUERY_STRING']);
        
        if(isset($queryString[1])){
            $data_array = explode('=', $queryString[1]);
            $id = $data_array[1];
        }
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($queryString !== ''){
            if($queryString[0] == 'criar'){
                $controller->create();
            }elseif($queryString[0] == 'editar'){
                $controller->edit($id);
            }elseif($queryString[0] == 'visualizar'){
                $controller->view($id);
            }elseif($queryString[0] == 'cadastrar'){
                $controller->store();
            }elseif($queryString[0] == 'atualizar'){
                $controller->update();
            }
            
        }else{
            $controller->index();
        }
    }

}


