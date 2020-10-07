<?php

namespace  gerenciadorMvc\app\model\vo;

class EnderecoVO{
    private $id;
    private $cep;
    private $endereco;
    private $numero;
    private $cidade;
    private $estado;
    private $pais;
    
    public function __construct($id, $cep , $endereco, $numero , $cidade, $estado, $pais){
        $this->id = $id;
        $this->cep = $cep;
        $this->endereco = $endereco;
        $this->numero = $numero;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->pais = $pais;
    }

    
    function setId($id) { $this->id = $id; }
    function getId() { return $this->id; }
    function setCep($cep) { $this->cep = $cep; }
    function getCep() { return $this->cep; }
    function setEndereco($endereco) { $this->endereco = $endereco; }
    function getEndereco() { return $this->endereco; }
    function setNumero($numero) { $this->numero = $numero; }
    function getNumero() { return $this->numero; }
    function setCidade($cidade) { $this->cidade = $cidade; }
    function getCidade() { return $this->cidade; }
    function setEstado($estado) { $this->estado = $estado; }
    function getEstado() { return $this->estado; }
    function setPais($pais) { $this->pais = $pais; }
    function getPais() { return $this->pais; }

}