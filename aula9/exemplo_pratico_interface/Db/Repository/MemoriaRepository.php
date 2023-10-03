<?php
namespace Db\Repository;

use Db\Interfaces\IDado;

class MemoriaRepository implements IDado {
    
    public function salvar($obj){
        $this->lista[] = $obj;
    }

    public function todos(){
        return $this->lista;
    }

    private $lista = [];
}