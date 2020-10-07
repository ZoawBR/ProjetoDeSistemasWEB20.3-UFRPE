<?php

namespace  gerenciadorMvc\app\model\vo;

class ContatoVO{
    private $id;
    private $telefone;
    private $celular;
    private $email;
    
    public function __construct($id, $celular = '', $telefone = '', $email = ''){
        $this->celular = $celular;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    
function setId($id) { $this->id = $id; }
function getId() { return $this->id; }
function setCelular($celular) { $this->celular = $celular; }
function getCelular() { return $this->celular; }
function setTelefone($telefone) { $this->telefone = $telefone; }
function getTelefone() { return $this->telefone; }
function setEmail($email) { $this->email = $email; }
function getEmail() { return $this->email; }


}