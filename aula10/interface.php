<?php

interface Veiculo {
    public function acelerar();
    public function frenar();
}

class Carro implements Veiculo {
    public function acelerar() {
        echo "O carro está acelerando!";
    }
    
    public function frenar() {
        echo "O carro está frenando!";
    }
}

interface Pessoa {
    public function getNome();
    public function getDocumento();
}

interface PessoaFisica {
    public function getCPF();
}

interface PessoaJuridica {
    public function getCNPJ();
}

class Jorel implements Pessoa, PessoaFisica {
    public function getNome() { /* ... */ }
    public function getDocumento() { /* ... */ }
    public function getCPF() { /* ... */ }
}


class Jorelma implements Pessoa, PessoaFisica, PessoaJuridica {
public function getNome() { /* ... */ }
public function getDocumento() { /* ... */ }
public function getCPF() { /* ... */ }
public function getCNPJ() { /* ... */ }
}

