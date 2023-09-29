<?php

$profissionais = [];

while (true) {
    echo "Cadastro de Profissional:\n";

    echo "Nome: ";
    $nome = trim(fgets(STDIN));

    echo "Cargo: ";
    $cargo = trim(fgets(STDIN));

    echo "Salário: ";
    $salario = floatval(trim(fgets(STDIN)));

    $profissional = [
        "nome" => $nome,
        "cargo" => $cargo,
        "salario" => $salario
    ];

    $profissionais[] = $profissional;

    echo "Deseja cadastrar outro profissional? (s/n): ";
    $continuar = trim(fgets(STDIN));

    if (strtolower($continuar) !== 's') {
        break;
    }
}

echo "====================================\n";
echo "Nome      |Cargo         |Salário\n";
echo "====================================\n";

foreach ($profissionais as $profissional) {
    echo $profissional["nome"] . " | ";
    echo $profissional["cargo"] . " | ";
    echo "R$ " . number_format($profissional["salario"], 2, ',', '.') . "\n";
}
?>