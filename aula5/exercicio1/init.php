<?php
echo "================================================" . "\n";
echo "==========  CADASTRO DE PROFISSIONAIS  =========" . "\n";
 "\n";
 "\n";
echo "Digite o nome do profissional:" . "\n";
$nomeProfissional = fgets(STDIN);
echo "Digite o Cargo do Profissional: ". "\n";
$cargoProfissional = fgets(STDIN);
echo "Digite o Valor do Profissional: ". "\n";
$valorProfissional = fgets(STDIN);

$profissional = [
    array(
    "nome" => $nomeProfissional,
    "cargo" => $cargoProfissional,
    "valor" => $valorProfissional
    ),
];

foreach ($profissional as $profissionais){
    echo "=== DADOS DOS PROFISSIONAIS === \n";
    "\n";
    echo "Nome: {$profissionais["nome"]} \n";
    echo "Cargo: {$profissionais["cargo"]} \n";
    echo "Valor: {$profissionais["valor"]} \n";
}