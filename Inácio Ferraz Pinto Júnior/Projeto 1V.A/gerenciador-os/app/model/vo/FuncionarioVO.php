<?php

namespace gerenciadorMvc\app\model\vo;

class FuncionarioVO{
    private $id;
    private $id_contato;
    private $id_endereco;
    private $id_empresa;
    private $cpf;
    private $nome;
    private $usuario;
    private $senha;
	private $situacao;
	private $isEmpresa = 0;


    public function __construct($id_contato, $id_endereco, $id_empresa, $cpf, $nome, $usuario, $senha, $situacao){
        $this->id_contato = $id_contato;
        $this->id_endereco = $id_endereco;
        $this->id_empresa = $id_empresa;
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->situacao = $situacao;
    }

    
	function setId($id) { $this->id = $id; }
	function getId() { return $this->id; }
	function setId_contato($id_contato) { $this->id_contato = $id_contato; }
	function getId_contato() { return $this->id_contato; }
	function setId_endereco($id_endereco) { $this->id_endereco = $id_endereco; }
	function getId_endereco() { return $this->id_endereco; }
	function setId_empresa($id_empresa) { $this->id_empresa = $id_empresa; }
	function getId_empresa() { return $this->id_empresa; }
	function setCpf($cpf) { $this->cpf = $cpf; }
	function getCpf() { return $this->cpf; }
	function setNome($nome) { $this->nome = $nome; }
	function getNome() { return $this->nome; }
	function setUsuario($usuario) { $this->usuario = $usuario; }
	function getUsuario() { return $this->usuario; }
	function setSenha($senha) { $this->senha = $senha; }
	function getSenha() { return $this->senha; }
	function setSituacao($situacao) { $this->situacao = $situacao; }
	function getSituacao() { return $this->situacao; }
	function setIsEmpresa($isEmpresa) { $this->isEmpresa = $isEmpresa; }
	function getIsEmpresa() { return $this->isEmpresa; }

}