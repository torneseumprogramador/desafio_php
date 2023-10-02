<?php

class Sample {
    public $publicVar = "Eu sou uma variável pública!";
    
    public function publicMethod() {
        echo "Eu sou um método público!\n";
        echo "Você digitou {$this->maiusculo($this->publicVar)} \n";
    }

    private function maiusculo(){
        return strtoupper($this->publicVar);
    }
}

$item = new Sample();
$item->publicVar = "caracteristica 1";
$item->publicMethod();

// $item->maiusculo(); //erro porque este método é privado

$item2 = new Sample();
$item2->publicVar = "caracteristica 2";
$item2->publicMethod();
