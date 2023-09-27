<?php
echo("Digite seu nome: ");
$nome = fgets(STDIN);

echo("Digite seu produto: ");
$produto = fgets(STDIN);

echo("Digite a quantidade: ");
$quantidade = fgets(STDIN);

echo("Digite o valor R$: ");
$valor = fgets(STDIN);

$valorfinal = $quantidade * $valor;

# concatenação 1
// echo "Olá Sr(a) " . $nome . ". Seu produto é " . $produto . " E irá levar " . $quantidade . " Portanto você tem R$" . $valorfinal . " a pagar.";
# concatenação 2
// echo "=============================\n";
// echo "Olá Sr(a) $nome \nSeu produto é $produto \nE irá levar $quantidade \nPortanto você tem R$ $valorfinal a pagar \n";

$vermelho = "\033[31m";
$branco = "\033[0m";
$amarelo = "\033[33m";
$verde = "\033[32m";

echo "=============================\n";
echo "Olá Sr(a) {$amarelo}{$nome}{$branco}\n";
echo "{$verde}Seu produto é {$produto} {$branco}\n";
echo "E irá levar {$quantidade} \n";
echo "Portanto você tem {$vermelho} R$ {$valorfinal} {$branco} a pagar \n";
