<?php
interface IPessoa {
    public function respirar();
}

class Pessoa implements IPessoa {
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

class PessoaCorPreta implements IPessoa {
    public $nome;
    public $cpf;

    public $cor = "preta";

    public function respirar() { // polimorfismo parcial
        echo "Pessoa com a cor: {$this->cor}\n";
    }
}

class PessoaCorBranca implements IPessoa {
    public $nome;
    public $cpf;
    
    public $cor = "branca";

    public function respirar() { // polimorfismo parcial
        echo "Pessoa com a cor: {$this->cor}\n";
    }
}

class PessoaCorAmarela implements IPessoa {
    public $nome;
    public $cpf;
    
    public $cor = "amarela";

    public function respirar() { // polimorfismo parcial
        echo "Pessoa com a cor: {$this->cor}\n";
    }
}

$item = new PessoaCorAmarela();
$item->nome = "Cleyson";
$item->cpf = "4323232223";
$item->respirar();
// $item->maiusculo("sss"); // não dá acesso a método protegido
// $item->minusculo("sss"); // não dá acesso a método privado
