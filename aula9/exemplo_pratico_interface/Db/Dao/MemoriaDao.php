<?php
namespace Db\Dao;

use Db\Interfaces\IDado;

class MemoriaDao implements IDado {
    
    public function salvar($obj){
        $this->lista[] = $obj;
    }

    public function todos(){
        return $this->lista;
    }

    private $lista = [];
}