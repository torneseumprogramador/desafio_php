<?php
namespace Core\modelos;

class Produto {

    public function __construct($_nome = "", $_descricao = "", $_quantidade = "") {
        $this->nome = $_nome;
        $this->descricao = $_descricao;
        $this->quantidade = $_quantidade;
    }

    public $codigo;
    public $nome;
    public $descricao;
    public $quantidade;

    public function adicionar(){
        if(!isset($this->codigo))
            $this->codigo = count(self::$lista) + 1;

        self::$lista[] = $this;
    }

    public static function lista(){
        return self::$lista;
    }

    private static $lista = [];
}
