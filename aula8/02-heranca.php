<?php

class Pessoa {
    public $nome;
    public $cpf;
    
    public function respirar() {
        echo "Sou a pessoa {$this->nome} com cpf {$this->cpf} e estou respirando\n";
    }
}

// $item = new Pessoa();
// $item->nome = "Cleyson";
// $item->cpf = "4323232223";
// $item->respirar();

class PessoaCorPreta extends Pessoa {
    public $cor = "preta";

    // public function respirar() { // polimorfismo
    //     echo "sou a pessoa {$this->nome} com cpf {$this->cpf} da cor {$this->cor} e estou respirando\n";
    // }

    public function respirar() { // polimorfismo parcial
        echo parent::respirar() . "E tenho a cor {$this->cor}\n";
    }
}

$item = new PessoaCorPreta();
$item->nome = "Cleyson";
$item->cpf = "4323232223";
$item->respirar();
