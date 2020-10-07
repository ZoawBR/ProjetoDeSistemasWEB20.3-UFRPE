<?php

namespace gerenciadorMvc\app\controller;

use gerenciadorMvc\app\model\dao\EmpresaDAO;
use gerenciadorMvc\app\model\dao\EnderecoDAO;
use gerenciadorMvc\app\model\dao\ContatoDAO;
use gerenciadorMvc\app\model\dao\ClienteDAO;

class ClienteController implements iController{

    
    function index(){
        $clienteDao = new ClienteDAO();
        $cliente_dados = $clienteDao->findAll();

        $empresaDao = new EmpresaDAO();

        $enderecoDao = new EnderecoDAO();

        $contatoDao = new ContatoDAO();

        require __DIR__ . '/../view/cliente/listar.php';
    }
    function view($id){
        $clienteDao = new ClienteDAO();
        $cliente_dados = $clienteDao->findById($id);

        $empresaDao = new EmpresaDAO();
        $empresa_dados = $empresaDao->findById($id);

        $enderecoDao = new EnderecoDAO();
        $endereco_dados = $enderecoDao->findById($empresa_dados->getId_endereco());

        $contatoDao = new ContatoDAO();
        $contato_dados = $contatoDao->findById($empresa_dados->getId_contato());

        require __DIR__ . '/../view/cliente/visualizar.php';
    }
    function create(){
        require __DIR__ . '/../view/cliente/cadastrar.php';
    }
    function edit($id){
        $clienteDao = new ClienteDAO();
        $cliente_dados = $clienteDao->findById($id);

        $empresaDao = new EmpresaDAO();
        $empresa_dados = $empresaDao->findById($id);

        $enderecoDao = new EnderecoDAO();
        $endereco_dados = $enderecoDao->findById($empresa_dados->getId_endereco());

        $contatoDao = new ContatoDAO();
        $contato_dados = $contatoDao->findById($empresa_dados->getId_contato());

        require __DIR__ . '/../view/cliente/editar.php';
    }
    function store(){
        echo "CADASTRAR";

    }
    function update(){
        echo "ATUALIZAR";
    }
    function delete($id){}

}