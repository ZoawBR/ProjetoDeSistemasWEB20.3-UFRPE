<?php

namespace  gerenciadorMvc\app\model\vo;

class EmpresaVO{
    private $id;
    private $id_contato ;
    private $id_endereco;
    private $cnpj;
    private $nome;
    private $usuario;
    private $senha;
    private $situacao;
    private $data_contrato;
	private $isAdm = 0;
	private $isEmpresa = 1;


    public function __construct($id, $id_contato, $id_endereco, $cnpj, $nome, $usuario, $senha, $situacao, $data_contrato, $isAdm){
		$this->id = $id;
        $this->id_contato = $id_contato;
        $this->id_endereco = $id_endereco;
        $this->cnpj = $cnpj;
        $this->nome = $nome;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->situacao = $situacao;
        $this->data_contrato = $data_contrato;
        $this->isAdm = $isAdm;
	}
	
	
	function setId($id) { $this->id = $id; }
	function getId() { return $this->id; }
	function setId_contato($id_contato) { $this->id_contato = $id_contato; }
	function getId_contato() { return $this->id_contato; }
	function setId_endereco($id_endereco) { $this->id_endereco = $id_endereco; }
	function getId_endereco() { return $this->id_endereco; }
	function setCnpj($cnpj) { $this->cnpj = $cnpj; }
	function getCnpj() { return $this->cnpj; }
	function setNome($nome) { $this->nome = $nome; }
	function getNome() { return $this->nome; }
	function setUsuario($usuario) { $this->usuario = $usuario; }
	function getUsuario() { return $this->usuario; }
	function setSenha($senha) { $this->senha = $senha; }
	function getSenha() { return $this->senha; }
	function setSituacao($situacao) { $this->situacao = $situacao; }
	function getSituacao() { return $this->situacao; }
	function setData_contrato($data_contrato) { $this->data_contrato = $data_contrato; }
	function getData_contrato() { return $this->data_contrato; }
	function setIsAdm($isAdm) { $this->isAdm = $isAdm; }
	function getIsAdm() { return $this->isAdm; }
	function setIsEmpresa($isEmpresa) { $this->isEmpresa = $isEmpresa; }
	function getIsEmpresa() { return $this->isEmpresa; }

}