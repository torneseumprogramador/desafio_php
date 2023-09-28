<?php

$soma_das_frutas = 0;
$nomes_frutas = "";
$quantidade = 2;

for($i=1; $i <= $quantidade; $i++){
    echo "Digite o nome da fruta $i \n";
    $nome_fruta = fgets(STDIN);
    echo "Digite o valor da fruta $nome_fruta \n";
    $valor_fruta = floatval(trim(fgets(STDIN)));

    $soma_das_frutas += $valor_fruta;
    $nomes_frutas .= "$nome_fruta, ";
}

$media = $soma_das_frutas / $quantidade;

$nomes_frutas = str_replace("\n", "", $nomes_frutas);
$nomes_frutas = preg_replace('/, $/', '', $nomes_frutas);
echo "O resultado da média frutas ( $nomes_frutas ) é de : $media \n";

