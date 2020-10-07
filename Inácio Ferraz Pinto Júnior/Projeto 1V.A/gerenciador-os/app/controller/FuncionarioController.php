<?php

namespace gerenciadorMvc\app\controller;

use gerenciadorMvc\app\model\dao\EmpresaDAO;
use gerenciadorMvc\app\model\dao\FuncionarioDAO;
use gerenciadorMvc\app\model\dao\EnderecoDAO;
use gerenciadorMvc\app\model\dao\ContatoDAO;
use gerenciadorMvc\app\model\vo\EmpresaVO;
use gerenciadorMvc\app\model\vo\ContatoVO;
use gerenciadorMvc\app\model\vo\EnderecoVO;
use gerenciadorMvc\app\model\vo\FuncionarioVO;

class FuncionarioController implements iController{

    
    function index(){
        $funcionarioDao = new FuncionarioDAO();
        $funcionario_dados = $funcionarioDao->findAll();

        $empresaDao = new EmpresaDAO();

        $enderecoDao = new EnderecoDAO();

        $contatoDao = new ContatoDAO();

        require __DIR__ . '/../view/funcionario/listar.php';
    }

    function view($id){
        $funcionarioDao = new FuncionarioDAO();
        $funcionario_dados = $funcionarioDao->findById($id);

        $enderecoDao = new EnderecoDAO();
        $endereco_dados = $enderecoDao->findById($funcionario_dados->getId_endereco());
        
        $empresaDao = new EmpresaDAO();
        $empresa_dados = $empresaDao->findById($funcionario_dados->getId_empresa());

        $contatoDao = new ContatoDAO();
        $contato_dados = $contatoDao->findById($funcionario_dados->getId_contato());

        require __DIR__ . '/../view/funcionario/visualizar.php';
    }

    function create(){
        require __DIR__ . '/../view/funcionario/cadastrar.php';
    }
    function edit($id){
        $funcionarioDao = new FuncionarioDAO();
        $funcionario_dados = $funcionarioDao->findById($id);

        $enderecoDao = new EnderecoDAO();
        $endereco_dados = $enderecoDao->findById($funcionario_dados->getId_endereco());
        
        $empresaDao = new EmpresaDAO();
        $empresa_dados = $empresaDao->findById($funcionario_dados->getId_empresa());

        $contatoDao = new ContatoDAO();
        $contato_dados = $contatoDao->findById($funcionario_dados->getId_contato());

        require __DIR__ . '/../view/funcionario/editar.php';

    }

    function store(){
        $enderecoVo = new EnderecoVO(null ,$_POST['cep'],$_POST['endereco'],$_POST['numero'], $_POST['cidade'],$_POST['estado'],$_POST['pais']);
        $enderecoDao = new EnderecoDAO();
        $id_endereco = $enderecoDao->create($enderecoVo);

        $contatoVo = new ContatoVO(null,$_POST['celular'],$_POST['telefone'],$_POST['email']);
        $contatoDao = new ContatoDAO();
        $id_contato = $contatoDao->create($contatoVo);

        $funcionarioVo = new FuncionarioVO(intval($id_contato), intval($id_endereco), intval($_SESSION['id_empresa']),$_POST['cpf'],$_POST['nome'], $_POST['usuario'], $_POST['senha'],1);
        $funciDao = new FuncionarioDAO();
        $id_contato = $funciDao->create($funcionarioVo);

        header('Location: /');
    }
    function update(){}
    function delete($id){}

}