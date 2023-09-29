<?php

// Usando a função array
$array_vazio1 = array();

// Usando colchetes
$array_vazio2 = [];

// Usando a função array
$array1 = array("maçã", "banana", "cereja");

// Usando colchetes
$array2 = ["maçã", "banana", "cereja"];

// echo $array1[2];

// array associativo
$array_associativo = array(
    "nome" => "João",
    "idade" => 25,
    "cidade" => "Lisboa"
);

// echo $array_associativo["cidade"];


$array = ["maçã", "banana"];
$array[] = "cereja"; // Agora, $array contém ["maçã", "banana", "cereja"]
$array[3] = "uva"; // Acrescentando por indice
$array[5] = "pera"; // Acrescentando por indice inválido na sequencia

// echo "\n============\n";
// // echo var_dump($array);
// echo "\n============\n";
// echo var_dump($array[5]);
// echo "\n============\n";


// // matriz
// $pessoas = array(
//     array("João", 25, "Lisboa"),
//     array("Maria", 30, "Porto")
// );

// echo "\n============\n";
// echo $pessoas[0][0]; // Exibe "João"
// echo "\n============\n";
// echo $pessoas[1][2]; // Exibe "Porto"
// echo "\n============\n";
// echo $pessoas[1][1]; // Exibe "30"
// echo "\n============\n";


// array de objetos
$pessoas = array(
    array(
        "nome" => "João",
        "idade" => 25, 
        "cidade" => "Lisboa"
    ),
    array(
        "nome" =>"Maria",
        "idade" =>30,
        "cidade" =>"Porto"
    )
);

// echo "\n============\n";
// echo $pessoas[0]["nome"]; // Exibe "João"
// echo "\n============\n";
// echo $pessoas[1]["cidade"]; // Exibe "Porto"
// echo "\n============\n";
// echo $pessoas[1]["idade"]; // Exibe "30"
// echo "\n============\n";


$array = ["maçã", "banana", "cereja"];

echo "\n============\n";

foreach ($array as $fruta) {
    echo "foreach valor: $fruta \n";
}

echo "\n============\n";

$qtd = count($array);
for ($i=0; $i < $qtd; $i++) {
    echo "for valor: $array[$i] \n";
}

echo "\n============\n";

$i = 0;
$qtd = count($array);
while ($i < $qtd) {
    echo "while valor: $array[$i] \n";
    $i++;
}



$pessoas_array = [
    array(
        "nome" => "João",
        "idade" => 25, 
        "cidade" => "Lisboa"
    ),
    array(
        "nome" =>"Maria",
        "idade" =>30,
        "cidade" =>"Porto"
    )
];


// $pessoas_array = array(
//     array(
//         "nome" => "João",
//         "idade" => 25, 
//         "cidade" => "Lisboa"
//     ),
//     array(
//         "nome" =>"Maria",
//         "idade" =>30,
//         "cidade" =>"Porto"
//     )
// );


// $pessoas_array = [
//     [
//         "nome" => "João",
//         "idade" => 25, 
//         "cidade" => "Lisboa"
//     ],
//     [
//         "nome" =>"Maria",
//         "idade" =>30,
//         "cidade" =>"Porto"
//     ]
// ];

echo "\n============\n";

foreach ($pessoas_array as $pessoa) {
    echo "=== foreach valor === \n";
    echo "Nome: {$pessoa["nome"]} \n";
    echo "Idade: {$pessoa["idade"]} \n";
    echo "Cidade: {$pessoa["cidade"]} \n";
}