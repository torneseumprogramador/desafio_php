<?php
namespace Entities;

class Carro {
    public $id;
    public $nome;
    public $cor;

    public function __construct($id=0, $nome="", $cor="") {
        $this->id = $id;
        $this->nome = $nome;
        $this->cor = $cor;
    }
}