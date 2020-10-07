<?php

namespace  gerenciadorMvc\app\model\vo;

class ClienteVO{
    private $id;
    private $id_contato;
    private $id_endereco;
    private $id_empresa;
    private $cnpj_cpf;
    private $nome;


    public function __construct($id, $id_contato, $id_endereco, $id_empresa, $cnpj_cpf, $nome){
        $this->id = $id;
        $this->id_contato = $id_contato;
        $this->id_endereco = $id_endereco;
        $this->id_empresa = $id_empresa;
        $this->cnpj_cpf = $cnpj_cpf;
        $this->nome = $nome;
    }

    public function getId(){return $this->id;}
	public function setId($id){$this->id = $id;}
	public function getId_contato(){return $this->id_contato;}
	public function setId_contato($id_contato){$this->id_contato = $id_contato;}
	public function getId_endereco(){return $this->id_endereco;}
	public function setId_endereco($id_endereco){$this->id_endereco = $id_endereco;}
	public function getId_empresa(){return $this->id_empresa;}
	public function setId_empresa($id_empresa){$this->id_empresa = $id_empresa;}
	public function getCnpj_cpf(){return $this->cnpj_cpf;}
	public function setCnpj_cpf($cnpj_cpf){$this->cnpj_cpf = $cnpj_cpf;}
	public function getNome(){return $this->nome;}
	public function setNome($nome){$this->nome = $nome;}
}