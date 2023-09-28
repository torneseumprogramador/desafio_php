<?php

echo "Digite o nome da fruta 1 \n";
$nome_fruta1 = fgets(STDIN);
echo "Digite o valor da fruta $nome_fruta1 \n";
$valor_fruta1 = floatval(trim(fgets(STDIN)));

echo "Digite o nome da fruta 2 \n";
$nome_fruta2 = fgets(STDIN);
echo "Digite o valor da fruta $nome_fruta2 \n";
$valor_fruta2 = floatval(trim(fgets(STDIN)));

echo "Digite o nome da fruta 3 \n";
$nome_fruta3 = fgets(STDIN);
echo "Digite o valor da fruta $nome_fruta3 \n";
$valor_fruta3 = floatval(trim(fgets(STDIN)));

echo "Digite o nome da fruta 4 \n";
$nome_fruta4 = fgets(STDIN);
echo "Digite o valor da fruta $nome_fruta4 \n";
$valor_fruta4 = floatval(trim(fgets(STDIN)));

$soma_das_frutas = $valor_fruta1 + $valor_fruta2 + $valor_fruta3 + $valor_fruta4;
$media = $soma_das_frutas / 4;

echo "O resultado da média frutas ($valor_fruta1, $valor_fruta2, $valor_fruta3, $valor_fruta4) é de : $media";

