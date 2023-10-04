<?php

abstract class Pessoa {
    abstract public function getNome();
    
    public function getDocumento(){
        $documento = "";

        if( method_exists($this, 'getCPF') )
            $documento .= $this->getCPF();
        if( method_exists($this, 'getCNPJ') )
            $documento .= $this->getCNPJ();
        
        return $documento;
    }
}

interface PessoaFisica {
    public function getCPF();
}

interface PessoaJuridica {
    public function getCNPJ();
}

class Jorel extends Pessoa implements PessoaFisica  {
    public function getNome() { /* ... */ }
    public function getCPF() { return "CPF do Jorel\n"; }
}

$jorel = new Jorel();
echo $jorel->getDocumento();

class Jorelma extends Pessoa implements PessoaFisica, PessoaJuridica {
    public function getNome() { /* ... */ }
    public function getCPF() { return "CNF da Jorelma\n"; }
    public function getCNPJ() { return "CNPJ da Jorelma\n"; }
}

$jorelma = new Jorelma();
echo $jorelma->getDocumento();
