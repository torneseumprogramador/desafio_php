<?php

require "Entities/Carro.php";
require "Db/Interfaces/IDados.php";
require "Db/Dao/MemoriaDao.php";
require "Db/Repository/MemoriaRepository.php";
require "Db/Repository/JsonRepository.php";
require "Services/CarroService.php";
require "Services/CarroServiceSemAcoplamento.php";

// use Db\Dao\MemoriaDao;
use Db\Repository\JsonRepository;
// use Db\Repository\MemoriaRepository;
use Services\CarroService;
use Services\CarroServiceSemAcoplamento;
use Entities\Carro;

$ecosporte = new Carro();
$ecosporte->nome = "Ecoesporte do chaves";
$ecosporte->cor = "vermelho";

$uno = new Carro();
$uno->nome = "Uno no kiko";
$uno->cor = "verde";

// // ==== arquitetura like Java ====
// $dado = new MemoriaDao();
// $dado->salvar($ecosporte);
// $dado->salvar($uno);

// ==== arquitetura like C# ====
// $dado = new MemoriaRepository();
// $dado = new JsonRepository("carros.json");
// $dado->salvar($ecosporte);
// $dado->salvar($uno);

// CarroService::salvar($ecosporte);
// CarroService::salvar($uno);

// foreach(CarroService::todos() as $carro){
//     echo "Carro: $carro->nome \n";
// }

// $service = new CarroServiceSemAcoplamento(new MemoriaRepository());
$service = new CarroServiceSemAcoplamento(new JsonRepository("carros.json")); // injeção de dependencia
$service->salvar($ecosporte);
$service->salvar($uno);

foreach($service->todos() as $carro){
    echo "Carro: $carro->nome \n";
}
