<?php
namespace Danilo\CadastroProduto\Core\Entidades;

class Produto {
    public function __construct($_id = 0, $_nome = "", $_descricao = "", $_preco = 0, $_quantidade = 0) {
        $this->id = $_id;
        $this->nome = $_nome;
        $this->descricao = $_descricao;
        $this->preco = $_preco;
        $this->quantidade = $_quantidade;
    }

    public $id;
    public $nome;
    public $descricao;
    public $preco;
    public $quantidade;
}
