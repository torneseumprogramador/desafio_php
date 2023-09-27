<?php

echo "Digite um número: ";
$numero = fgets(STDIN);

// $resultado = (int)$numero === 10;
// $resultado = $numero == 10 || $numero == 11;
// $resultado = $numero == 10 && $numero == "10";
// $resultado = $numero >= 10 && $numero <= 20; // entre 10 e 20
$resultado = !($numero >= 10 && $numero <= 20); // não é entre 10 e 20

echo "tipo da variável: " . gettype($resultado) . "\n";
echo "Resultado: " . ($resultado ? "true" : "false") . "\n";


// // # sintaxe if

// echo (1 == 1 ? "true" : "false"); // ternário


// if ($resultado) {
//     echo "entrei no if \n";
//     echo "entrei no if \n";
//     echo "entrei no if \n";
//     echo "entrei no if \n";
//     echo "entrei no if \n";
//     echo "entrei no if \n";
// }

// if ($resultado) {
//     echo "entrei no if com else \n";
//     echo "entrei no if com else \n";
//     echo "entrei no if com else \n";
//     echo "entrei no if com else \n";
//     echo "entrei no if com else \n";
//     echo "entrei no if com else \n";
// }


// if ( 1 == 2 ) {
//     echo "Entrou no if 1 == 2";
// }
// else{
//     echo "Entrou no else";
// }


// if ( 1 == 2 ) {
//     echo "Entrou no if 1 == 2";
// }
// else if( 1 == 1 ){
//     echo "Entrou no if 1 == 1";
// }
// else{
//     echo "Entrou no else";
// }

// echo "Digite um número: ";
// $resultado = fgets(STDIN);

// switch ($resultado) {
//     case 1:
//         echo  "foi digitado o numero 1";
//         break;
//     case 2:
//         echo  "foi digitado o numero 2";
//         break;
//     default:
//         echo  "Não foi nem o 1 nem o 2";
// }
