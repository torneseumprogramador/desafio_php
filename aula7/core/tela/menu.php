<?php

function init(){
    $estoque = [];
    while (true) {
        limpaTela();
        echo "Menu:\n";
        echo verde("1. Adicionar produto\n");
        echo amarelo("2. Realizar saída do estoque\n");
        echo azul("3. Listar produtos\n");
        echo vermelho("4. Sair\n");
        $opcao = readline("Escolha uma opção: ");

        switch ($opcao) {
            case 1:
                adicionarProduto($estoque);
                break;
            case 2:
                realizarSaida($estoque);
                break;
            case 3:
                listarProdutos($estoque);
                break;
            case 4:
                exit(0);
            default:
                echo "Opção inválida.\n";
        }
    }
}