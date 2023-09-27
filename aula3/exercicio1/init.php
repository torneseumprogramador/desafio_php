<?php

// Definindo códigos de cores
$red = "\033[31m";
$green = "\033[32m";
$yellow = "\033[33m";
$blue = "\033[34m";
$reset = "\033[0m";

// Capturando informações
echo $green . "Digite o nome do cliente: " . $reset;
$nomeCliente = trim(fgets(STDIN));

echo $yellow . "Digite o nome do produto: " . $reset;
$nomeProduto = trim(fgets(STDIN));

echo $blue . "Digite o valor do produto (use ponto para decimais): " . $reset;
$valorProduto = floatval(trim(fgets(STDIN)));

echo $yellow . "Digite a quantidade do produto: " . $reset;
$quantidade = intval(trim(fgets(STDIN)));

// Calculando o total da compra
$totalCompra = $valorProduto * $quantidade;

echo $green . "Total da compra: R$" . number_format($totalCompra, 2) . "\n" . $reset;

// Solicitando pagamento
echo $blue . "Informe o valor pago pelo cliente: " . $reset;
$valorPago = floatval(trim(fgets(STDIN)));

// Verificando o valor pago
if ($valorPago > $totalCompra) {
    $troco = $valorPago - $totalCompra;
    echo $green . "Está aqui o seu troco: R$" . number_format($troco, 2) . "\n" . $reset;
} elseif ($valorPago < $totalCompra) {
    $falta = $totalCompra - $valorPago;
    echo $red . "Está faltando dinheiro. Falta R$" . number_format($falta, 2) . "\n" . $reset;
} else {
    echo $green . "Tudo certo por aqui!\n" . $reset;
}

?>
