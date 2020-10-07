<?php

namespace gerenciadorMvc\app\controller;

use gerenciadorMvc\app\model\dao\EmpresaDAO;
use gerenciadorMvc\app\model\dao\ClienteDAO;
use gerenciadorMvc\app\model\dao\FuncionarioDAO;
use gerenciadorMvc\app\model\dao\ServicoDAO;
use gerenciadorMvc\app\model\dao\OsDAO;

use gerenciadorMvc\app\model\vo\OsVO;
use gerenciadorMvc\app\model\vo\ServicoVO;


class OsController implements iController{

    
    function index(){
        $osDao = new OsDAO();

        $clienteDao = new ClienteDAO();

        $funcionarioDao = new FuncionarioDAO();

        $empresaDao = new EmpresaDAO();

        require __DIR__ . '/../view/os/listar.php';

    }

    function view($id){
        $osDao = new OsDAO();
        $os_dados = $osDao->findById($id);

        $clienteDao = new ClienteDAO();
        $cliente_dados = $clienteDao->findById($id);

        $funcionarioDao = new FuncionarioDAO();
        $funcionario_dados = $funcionarioDao->findById($id);
  
        $empresaDao = new EmpresaDAO();
        $empresa_dados = $empresaDao->findById($funcionario_dados->getId_empresa());

        require __DIR__ . '/../view/os/visualizar.php';
    }

    function create(){
        $clienteDao = new ClienteDAO();
        $cliente_dados = $clienteDao->findAll();
        require __DIR__ . '/../view/os/cadastrar.php';
        echo 'ENTROU, MAS N ENTROU';
    }

    function edit($id){
        $osDao = new OsDAO();
        $os_dados = $osDao->findById($id);

        $clienteDao = new ClienteDAO();
        $cliente_dados = $clienteDao->findById($id);

        $funcionarioDao = new FuncionarioDAO();
        $funcionario_dados = $funcionarioDao->findById($id);

        $enderecoDao = new EnderecoDAO();
        $endereco_dados = $enderecoDao->findById($funcionario_dados->getId_endereco());
        
        require __DIR__ . '/../view/os/editar.php';

    }

    function store(){
        $osDao = new OsDAO();

        $os = new OsVO(1, 1, 1, '', 1, $_POST['data_inicio'], $_POST['data_fim'], $_POST['valorTotal'], 0);
        $osDao->create($os);

        $servDao = new ServicoDAO();
        $serv = new ServicoVO(4, 1, $_POST['descricao'], $_POST['valorTotal']);
        $servDao->create($serv);
        header('Location: /');
    }

    function update(){}
    function delete($id){}

}