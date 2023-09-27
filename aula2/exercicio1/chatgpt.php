<?php

// Lendo o nome do usuário
echo "Digite o seu nome: ";
$nome = trim(fgets(STDIN));

// Lendo o nome do produto
echo "Digite o nome do produto: ";
$produto = trim(fgets(STDIN));

// Lendo o valor do produto
echo "Digite o valor do produto: ";
$valor = floatval(trim(fgets(STDIN)));

// Lendo a quantidade de itens
echo "Digite a quantidade de itens: ";
$quantidade = intval(trim(fgets(STDIN)));

// Calculando o total do pedido
$total = $valor * $quantidade;

// Mostrando os detalhes na tela
echo "\n---- Resumo do Pedido ----\n";
echo "Nome do Cliente: $nome\n";
echo "Produto Adquirido: $produto\n";
echo "Valor Unitário: R$ " . number_format($valor, 2, ',', '.') . "\n";
echo "Quantidade: $quantidade\n";
echo "Total a Pagar: R$ " . number_format($total, 2, ',', '.') . "\n";

?>
