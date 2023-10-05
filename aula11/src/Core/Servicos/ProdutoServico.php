<?php
namespace Danilo\CadastroProduto\Core\Servicos;

use Danilo\CadastroProduto\Core\Entidades\Produto;
use Danilo\CadastroProduto\Database\Repositorios\MysqlRepositorio;

class ProdutoServico {

    public function __construct() {
        $this->repo = new MysqlRepositorio();
    }

    private $repo;
    
    public function salvar(Produto $produto){
        if (isset($produto->id)) {
            $query = "
                UPDATE produtos 
                SET 
                    nome = '{$this->removeAspasSimples($produto->nome)}',
                    descricao = '{$this->removeAspasSimples($produto->descricao)}',
                    preco = {$this->removeAspasSimples($produto->preco)},
                    quantidade = {$this->removeAspasSimples($produto->quantidade)}
                WHERE id = $produto->id
            ";
        } else {
            $query = "
                INSERT INTO produtos (nome, descricao, preco, quantidade) 
                VALUES (
                    '{$this->removeAspasSimples($produto->nome)}', 
                    '{$this->removeAspasSimples($produto->descricao)}', 
                    {$this->removeAspasSimples($produto->preco)}, 
                    {$this->removeAspasSimples($produto->quantidade)}
                )
            ";
        }
        $this->repo->salvar($query);
    }
    

    public function todos() : array {
        $query = "select * from produtos";
        $dados = $this->repo->todos($query);

        $produtos = [];
        foreach($dados as $dado){
            $produtos[] = new Produto($dado["id"], $dado["nome"], $dado["descricao"], $dado["preco"], $dado["quantidade"]);
        }

        return $produtos;
    }

    public function buscaPorId(int $id) : Produto {
        $query = "select * from produtos where id = " . $id;
        $dados = $this->repo->todos($query);

        if( count($dados) < 1 ) return null;

        $dado = $dados[0];
        return new Produto($dado["id"], $dado["nome"], $dado["descricao"], $dado["preco"], $dado["quantidade"]);
    }

    private function removeAspasSimples($input) {
        return str_replace("'", "", strval($input));
    }
}