<?php

// ===== funções sem parametros =======

function quebraLinha() { // função que retorna uma string
    return "\n";
}

function escreveAlgo() { // função void (sem retorno)
    echo "escreve na tela e não tem retorno \n";
}

function retornaInteiro() { // função que retorna um inteiro
    return 1;
}

function retornaFloat() { // função que retorna um float
    return 1.1;
}

function retornaBoolean() { // função que retorna um boolean
    return 1 == 1;
}

// echo "Olá turma estou testando a função " . quebraLinha();

// ===== funções com parametros =======

function saudacao($nome) {
    echo "Olá, $nome!\n";
}

function saudacaoRetorno($nome) {
    return "Olá, $nome!\n";
}

function soma($x, $y) {
    $resultado = $x + $y;
    echo "Resultado da soma: $resultado\n";
}

// echo " --- " . saudacaoRetorno("Enzo") ." --- ";

// $numero1 = fgets(STDIN);
// $numero2 = fgets(STDIN);
// soma($numero1, $numero2);

function saudacaoParametro($nome = "Visitante") {
    echo "Olá, $nome!\n";
}

// saudacaoParametro();  // Saída: Olá, Visitante!
// saudacaoParametro("Ana");  // Saída: Olá, Ana!


function somaTudo(...$numeros) {
    return array_sum($numeros);
}

// echo somaTudo(1, 2, 3, 4);  // Saída: 10


function somaStrings(...$strings) {
    return join(", ", $strings);
}

// echo somaStrings("Danilo", "Liah", "Lana");  // Saída: 10

function somaComTipo(float $a, float $b): float {
    return $a + $b;
}

// echo somaComTipo("10", "6");