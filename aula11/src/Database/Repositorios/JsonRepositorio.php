<?php
namespace Danilo\CadastroProduto\Database\repositorios;

use Danilo\CadastroProduto\Database\Interfaces\IDado;

class JsonRepositorio implements IDado {

    public function __construct(string $_arquivo) {
        $this->arquivo = $_arquivo;
    }
    
    private $arquivo;

    public function salvar($obj){
        $objs = $this->todos();
        $objs[] = $obj;

        $json = json_encode($objs, JSON_PRETTY_PRINT);
        file_put_contents($this->arquivo, $json);
    }

    public function todos($query = null){
        if (!file_exists($this->arquivo)) {
            file_put_contents($this->arquivo, "[]");
        }

        $json = file_get_contents($this->arquivo);
        return json_decode($json);
    }
}