<?php

namespace  gerenciadorMvc\app\model\vo;

class ServicoVO{
    private $id;
    private $id_ordem_servico;
    private $descricao;
    private $valorTotal;


    public function __construct($id, $id_ordem_servico, $descricao, $valorTotal){
        $this->id = $id; 
        $this->id_ordem_servico = $id_ordem_servico; 
        $this->descricao = $descricao; 
        $this->valorTotal = $valorTotal; 
    }

    
    function setId($id) { $this->id = $id; }
    function getId() { return $this->id; }
    function setId_ordem_servico($id_ordem_servico) { $this->id_ordem_servico = $id_ordem_servico; }
    function getId_ordem_servico() { return $this->id_ordem_servico; }
    function setDescricao($descricao) { $this->descricao = $descricao; }
    function getDescricao() { return $this->descricao; }
    function setValorTotal($valorTotal) { $this->valorTotal = $valorTotal; }
    function getValorTotal() { return $this->valorTotal; }


}