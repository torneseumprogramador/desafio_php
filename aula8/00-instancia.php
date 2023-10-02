<?php

class Sample {
    public $publicVar = "Eu sou uma variável pública!";
    
    public function publicMethod() {
        echo "Eu sou um método público!\n";
    }
}

$item = new Sample();
$item->publicVar = "caracteristica 1";
$item->publicMethod();