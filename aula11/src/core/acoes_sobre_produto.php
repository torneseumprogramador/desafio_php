<?php
use Core\Modelos\Produto;

function adicionarProduto() {
    limpaTela();
    $produto = new Produto();
    $produto->nome = readline(verde("Nome do produto: "));
    $produto->descricao = readline(amarelo("Descrição do produto: "));
    $produto->quantidade = readline(azul("Quantidade em estoque: "));
    $produto->adicionar();
    mensagemComEspera("Produto adicionado com sucesso!\n");
}

function realizarSaida($produto = null, $inicio = true) {
    limpaTela();

    if($inicio){
        $codigo = readline("Código do produto para saída: ");
        $produto = Produto::buscaPorCodigo($codigo);
    }

    if(isset($produto)){
        $quantidadeSaida = readline("Quantidade a ser retirada do produto ($produto->nome): ");

        if (filter_var($quantidadeSaida, FILTER_VALIDATE_INT) !== false) {
            $quantidadeSaida = intval($quantidadeSaida);
        }
        else{
            mensagemComEsperaVermelho("Quantidade digitada de forma incorreta\n");
            $opcao = continuar();
            if($opcao == "s") realizarSaida($produto, false);
            return;
        }

        if ($produto->quantidade >= $quantidadeSaida) {
            $produto->quantidade -= $quantidadeSaida;
            mensagemComEspera("Saída realizada com sucesso.");
        } else {
            mensagemComEsperaAmarelo("Produto: $produto->nome.\n");
            mensagemComEsperaAmarelo("Estoque atual tem a quantidade de: ($produto->quantidade).\n");
            mensagemComEsperaVermelho("Estoque insuficiente.\n");

            $opcao = continuar();
            if($opcao == "s") realizarSaida($produto, false);
        }
    }
    else{
        mensagemComEsperaVermelho("Produto não encontrado!\n");
        $opcao = continuar();
        if($opcao == "s") realizarSaida();
    }
}

function listarProdutos() {
    limpaTela();
    echo verde(str_pad("Código", 6) . " | " . str_pad("Nome", 18) . " | " . str_pad("Descrição", 20). " | Estoque\n");
    foreach (Produto::lista() as $produto) {
        echo str_pad($produto->codigo, 6) . ' | ' . str_pad($produto->nome, 19) . ' | ' . str_pad($produto->descricao, 18) . ' | ' . $produto->quantidade . "\n";
    }
    echo "Digite enter para sair";
    readline();
}