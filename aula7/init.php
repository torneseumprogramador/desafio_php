<?php
require 'core/modelos/produto.php';
require 'tela/cores.php';
require 'tela/display.php';
require 'core/tela/mensagens.php';
require 'core/acoes_sobre_produto.php';
require 'core/tela/menu.php';

// init();

use Core\Modelos\Produto;

$maca = new Produto("Maça", "Maça da turma da monica", 10);
$maca->adicionar();

$melao = new Produto();
$melao->nome = "Melão";
$melao->descricao = "Da galera";
$melao->quantidade = 40;

$banana = new Produto();
$banana->nome = "Banana";
$banana->descricao = "nanica";
$banana->quantidade = 40;

$melao->adicionar();
$banana->adicionar();

$coco = new Produto();
$coco->codigo = 1000;
$coco->nome = "Coco";
$coco->descricao = "Legal";
$coco->quantidade = 40;
$coco->adicionar();

$produtos = Produto::lista();

foreach($produtos as $produto){
    echo str_repeat("=", 40) . "\n";
    echo "Codigo: {$produto->codigo}\n";
    echo "Nome: {$produto->nome}\n";
    echo "\n";
}
