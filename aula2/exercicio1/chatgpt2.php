<?php

// Funções para adicionar cores ao texto
function color($text, $colorCode) {
    return "\033[" . $colorCode . "m" . $text . "\033[0m";
}

$blue = "34";
$green = "32";
$yellow = "33";
$magenta = "35";
$cyan = "36";

// Lendo o nome do usuário
echo color("Digite o seu nome: ", $cyan);
$nome = trim(fgets(STDIN));

// Lendo o nome do produto
echo color("Digite o nome do produto: ", $cyan);
$produto = trim(fgets(STDIN));

// Lendo o valor do produto
echo color("Digite o valor do produto (R$): ", $cyan);
$valor = floatval(trim(fgets(STDIN)));

// Lendo a quantidade de itens
echo color("Digite a quantidade de itens: ", $cyan);
$quantidade = intval(trim(fgets(STDIN)));

// Calculando o total do pedido
$total = $valor * $quantidade;

// Mostrando os detalhes na tela
echo "\n" . color("---- Resumo do Pedido ----", $magenta) . "\n";
echo color("Nome do Cliente: ", $blue) . color($nome, $green) . "\n";
echo color("Produto Adquirido: ", $blue) . color($produto, $green) . "\n";
echo color("Valor Unitário: ", $blue) . "R$ " . color(number_format($valor, 2, ',', '.'), $yellow) . "\n";
echo color("Quantidade: ", $blue) . color($quantidade, $yellow) . "\n";
echo color("Total a Pagar: ", $blue) . "R$ " . color(number_format($total, 2, ',', '.'), $yellow) . "\n";

?>
