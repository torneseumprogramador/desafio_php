<?php
namespace Services;

use Entities\Carro;

class CarroServiceSemAcoplamento {

    public function __construct($repo) {
        $this->repo = $repo;
    }

    private $repo;

    public function salvar(Carro $carro){
        $this->repo->salvar($carro);
    }

    public function todos() : array {
        $dados = $this->repo->todos();

        $carros = [];
        foreach ($dados as $item) {
            $carros[] = new Carro($item->id, $item->nome, $item->cor);
        }
        return $carros;
    }
}