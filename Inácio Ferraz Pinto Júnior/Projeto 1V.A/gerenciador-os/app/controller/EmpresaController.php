<?php

namespace gerenciadorMvc\app\controller;

use gerenciadorMvc\app\model\dao\EmpresaDAO;
use gerenciadorMvc\app\model\dao\EnderecoDAO;
use gerenciadorMvc\app\model\dao\ContatoDAO;

use gerenciadorMvc\app\model\vo\EmpresaVO;
use gerenciadorMvc\app\model\vo\ContatoVO;
use gerenciadorMvc\app\model\vo\EnderecoVO;

class EmpresaController implements iController{
    
    function index(){
        $empresaDao = new EmpresaDAO();
        $empresa_dados = $empresaDao->findAll();

        $enderecoDao = new EnderecoDAO();

        $contatoDao = new ContatoDAO();

        require __DIR__ . '/../view/empresa/listar.php';
    }

    function view($id){
        $empresaDao = new EmpresaDAO();
        $empresa_dados = $empresaDao->findById($id);

        $enderecoDao = new EnderecoDAO();
        $endereco_dados = $enderecoDao->findById($empresa_dados->getId_endereco());

        $contatoDao = new ContatoDAO();
        $contato_dados = $contatoDao->findById($empresa_dados->getId_contato());

        require __DIR__ . '/../view/empresa/visualizar.php';
    }

    function create(){

        require __DIR__ . '/../view/empresa/cadastrar.php';
    }
    function edit($id){
        $empresaDao = new EmpresaDAO();
        $empresa_dados = $empresaDao->findById($id);

        $enderecoDao = new EnderecoDAO();
        $endereco_dados = $enderecoDao->findById($empresa_dados->getId_endereco());

        $contatoDao = new ContatoDAO();
        $contato_dados = $contatoDao->findById($empresa_dados->getId_contato());
        
        require __DIR__ . '/../view/empresa/editar.php';

    }
    function store(){
        $enderecoVo = new EnderecoVO(null ,$_POST['cep'],$_POST['endereco'],$_POST['numero'], $_POST['cidade'],$_POST['estado'],$_POST['pais']);
        $enderecoDao = new EnderecoDAO();
        $id_endereco = $enderecoDao->create($enderecoVo);

        $contatoVo = new ContatoVO(null,$_POST['celular'],$_POST['telefone'],$_POST['email']);
        $contatoDao = new ContatoDAO();
        $id_contato = $contatoDao->create($contatoVo);

        $empresaVo = new EmpresaVO(null, intval($id_contato), intval($id_endereco), $_POST['cnpj'],$_POST['nome'], $_POST['usuario'], $_POST['senha'],1, date('Y-m-d') , 0);
        $empresaDao = new EmpresaDAO();
        $empresaDao->create($empresaVo);
        header('Location: /');

    }
    function update(){
    }
    function delete($id){}

}