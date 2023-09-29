<?php

$profissionais = [];

while (true) {
    // Menu principal
    echo "1. Cadastrar Profissional\n";
    echo "2. Listar Profissionais\n";
    echo "3. Sair\n";
    echo "Digite sua opção: ";
    
    $opcao = trim(fgets(STDIN));

    switch ($opcao) {
        case 1:
            // Solicitar informações do profissional
            echo "Digite o nome do profissional: ";
            $nome = trim(fgets(STDIN));

            echo "Digite o cargo do profissional: ";
            $cargo = trim(fgets(STDIN));

            echo "Digite o valor desejado pelo profissional (Exemplo: 10500.00): R$ ";
            $valor = floatval(trim(fgets(STDIN)));
            
            // Armazenar o profissional no array
            $profissionais[] = [
                'nome' => $nome,
                'cargo' => $cargo,
                'valor' => $valor
            ];
            echo "Profissional cadastrado com sucesso!\n";
            break;
        
        case 2:
            // Listar profissionais
            echo str_repeat("=", 40) . "\n";
            echo str_pad("nome", 10) . str_pad("cargo", 15) . "valor\n";
            echo str_repeat("=", 40) . "\n";

            foreach ($profissionais as $profissional) {
                echo str_pad($profissional['nome'], 10) . 
                     str_pad($profissional['cargo'], 15) . 
                     "R$ " . number_format($profissional['valor'], 2, ',', '.') . "\n";
            }

            echo str_repeat("=", 40) . "\n";
            break;

        case 3:
            exit("Obrigado por usar o programa!\n");
        
        default:
            echo "Opção inválida.\n";
    }
}
