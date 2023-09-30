<?php
function operacaoMatematica($n, $n2){
    return $n - $n2;
}

function vermelho($texto){
    return "\033[31m{$texto}\033[0m";
}

function verde($texto){
    return "\033[32m{$texto}\033[0m";
}

function amarelo($texto){
    return "\033[33m{$texto}\033[0m";
}

function azul($texto){
    return "\033[34m{$texto}\033[0m";
}

// Capturando informações
echo verde("Digite o nome do cliente: ");
$nomeCliente = trim(fgets(STDIN));

echo amarelo("Digite o nome do produto: ");
$nomeProduto = trim(fgets(STDIN));

echo azul("Digite o valor do produto (use ponto para decimais): ");
$valorProduto = floatval(trim(fgets(STDIN)));

echo amarelo("Digite a quantidade do produto: ");
$quantidade = intval(trim(fgets(STDIN)));

// Calculando o total da compra
$totalCompra = $valorProduto * $quantidade;

echo verde("Total da compra: R$" . number_format($totalCompra, 2) . "\n");

// Solicitando pagamento
echo azul("Informe o valor pago pelo cliente: ");
$valorPago = floatval(trim(fgets(STDIN)));

// Verificando o valor pago
if ($valorPago > $totalCompra) {
    $troco = operacaoMatematica($valorPago, $totalCompra);
    echo verde("Está aqui o seu troco: R$" . number_format($troco, 2) . "\n");
} elseif ($valorPago < $totalCompra) {
    $falta = operacaoMatematica($valorPago, $totalCompra);
    echo vermelho("Está faltando dinheiro. Falta R$" . number_format($falta, 2) . "\n");
} else {
    echo verde("Tudo certo por aqui!\n");
}

?>
