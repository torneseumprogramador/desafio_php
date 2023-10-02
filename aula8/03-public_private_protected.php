<?php

class Pessoa {
    public $nome;
    public $cpf;
    
    public function respirar() {
        echo "Sou a pessoa {$this->minusculo($this->nome)} com cpf {$this->cpf} e estou respirando\n";
    }

    protected function maiusculo($dado){
        return strtoupper($dado);
    }

    private function minusculo($dado){
        return strtolower($dado);
    }
}

class PessoaCorPreta extends Pessoa {
    public $cor = "preta";

    public function respirar() { // polimorfismo parcial
        echo parent::respirar() . "E tenho a cor {$this->maiusculo($this->cor)}\n";
    }
}

class PessoaCorBranca extends Pessoa {
    public $cor = "branca";

    public function respirar() { // polimorfismo parcial
        echo parent::respirar() . "E tenho a cor {$this->maiusculo($this->cor)}\n";
    }
}

class PessoaCorAmarela extends Pessoa {
    public $cor = "amarela";

    public function respirar() { // polimorfismo parcial
        echo parent::respirar() . "E tenho a cor {$this->maiusculo($this->cor)}\n";
    }
}

$item = new PessoaCorPreta();
$item->nome = "Cleyson";
$item->cpf = "4323232223";
$item->respirar();
// $item->maiusculo("sss"); // não dá acesso a método protegido
// $item->minusculo("sss"); // não dá acesso a método privado
