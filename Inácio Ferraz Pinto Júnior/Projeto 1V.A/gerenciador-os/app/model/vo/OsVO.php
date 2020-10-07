<?php

namespace  gerenciadorMvc\app\model\vo;

class OsVO{
    private $id;
    private $num_os;
    private $id_cliente;
    private $id_funcionario;
    private $id_empresa;
    private $data_inicio;
    private $data_fim;
    private $valor_total;
    private $situacao;


    public function __construct($id, $num_os ,$id_cliente, $id_funcionario, $id_empresa, $data_inicio, $data_fim, $valor_total, $situacao){
        $this->id = $id;
        $this->num_os = $num_os;
        $this->id_cliente = $id_cliente;
        $this->id_funcionario = $id_funcionario;
        $this->id_empresa = $id_empresa;
        $this->data_inicio = $data_inicio;
        $this->data_fim = $data_fim;
        $this->valor_total = $valor_total;
        $this->situacao = $situacao;
    }

    function setId($id) { $this->id = $id; }
    function getId() { return $this->id; }
    function setNum_os($num_os) { $this->num_os = $num_os; }
    function getNum_os() { return $this->num_os; }
    function setId_cliente($id_cliente) { $this->id_cliente = $id_cliente; }
    function getId_cliente() { return $this->id_cliente; }
    function setId_funcionario($id_funcionario) { $this->id_funcionario = $id_funcionario; }
    function getId_funcionario() { return $this->id_funcionario; }
    function setId_empresa($id_empresa) { $this->id_empresa = $id_empresa; }
    function getId_empresa() { return $this->id_empresa; }
    function setData_inicio($data_inicio) { $this->data_inicio = $data_inicio; }
    function getData_inicio() { return $this->data_inicio; }
    function setData_fim($data_fim) { $this->data_fim = $data_fim; }
    function getData_fim() { return $this->data_fim; }
    function setValor_total($valor_total) { $this->valor_total = $valor_total; }
    function getValor_total() { return $this->valor_total; }
    function setSituacao($situacao) { $this->situacao = $situacao; }
    function getSituacao() { return $this->situacao; }
}