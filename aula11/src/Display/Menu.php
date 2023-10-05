<?php

namespace Danilo\CadastroProduto\Display;

use Danilo\CadastroProduto\Display\Usabilidade;
use Danilo\CadastroProduto\Display\AcoesSobreProduto;

class Menu{
    public static function init(){
        while (true) {
            Usabilidade::limpaTela();
            echo "Menu:\n";
            echo Usabilidade::verde("1. Adicionar produto\n");
            echo Usabilidade::amarelo("2. Realizar saída do estoque\n");
            echo Usabilidade::azul("3. Listar produtos\n");
            echo Usabilidade::vermelho("4. Sair\n");
            $opcao = readline("Escolha uma opção: ");

            switch ($opcao) {
                case 1:
                    AcoesSobreProduto::adicionarProduto();
                    break;
                case 2:
                    AcoesSobreProduto::realizarSaida();
                    break;
                case 3:
                    AcoesSobreProduto::listarProdutos();
                    break;
                case 4:
                    exit(0);
                default:
                    echo "Opção inválida.\n";
            }
        }
    }
}