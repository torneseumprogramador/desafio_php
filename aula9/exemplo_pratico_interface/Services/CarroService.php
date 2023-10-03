<?php
namespace Services;

use Entities\Carro;
use Db\Repository\JsonRepository;
use Db\Repository\MemoriaRepository;

class CarroService {
    const ARQUIVO = "carros.json";

    private static function repo(){
        // return new JsonRepository(CarroService::ARQUIVO);
        if(!isset(self::$repoMemmoria)) self::$repoMemmoria = new MemoriaRepository();
        return self::$repoMemmoria;
    }

    private static $repoMemmoria;

    public static function salvar(Carro $carro){
        self::repo()->salvar($carro);
    }

    public static function todos() : array {
        $dados = self::repo()->todos();

        $carros = [];
        foreach ($dados as $item) {
            $carros[] = new Carro($item->id, $item->nome, $item->cor);
        }
        return $carros;
    }
}