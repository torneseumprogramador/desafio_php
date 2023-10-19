<?php 
namespace Danilo\EcommerceDesafio\Models;

class Cliente{
    public function __construct($_id=0, $_nome="", $_telefone="", $_email="", $_endereco="") {
        $this->id = $_id;
        $this->nome = $_nome;
        $this->telefone = $_telefone;
        $this->email = $_email;
        $this->endereco = $_endereco;
    }

    public $id;
    public $nome;
    public $email;
    public $telefone;
    public $endereco;
}