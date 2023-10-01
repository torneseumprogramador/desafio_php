<?php

function adicionarProduto(&$estoque) {
    limpaTela();
    $codigo = readline(vermelho("Código do produto: "));
    $nome = readline(verde("Nome do produto: "));
    $descricao = readline(amarelo("Descrição do produto: "));
    $quantidade = readline(azul("Quantidade em estoque: "));
    $estoque[] = ['codigo' => $codigo, 'nome' => $nome, 'descricao' => $descricao, 'quantidade' => $quantidade];
    mensagemComEspera("Produto adicionado com sucesso!\n");
}

function realizarSaida(&$estoque) {
    limpaTela();
    $codigo = readline("Código do produto para saída: ");
    $quantidadeSaida = readline("Quantidade a ser retirada: ");
    foreach ($estoque as &$produto) {
        if ($produto['codigo'] == $codigo) {
            if ($produto['quantidade'] >= $quantidadeSaida) {
                $produto['quantidade'] -= $quantidadeSaida;
                mensagemComEspera("Saída realizada com sucesso.");
                return;
            } else {
                mensagemComEsperaVermelho("Estoque insuficiente.");

                $opcao = continuar();
                if($opcao == "s") realizarSaida($estoque);

                return;
            }
        }
    }
    mensagemComEsperaVermelho("Produto não encontrado!\n");
    $opcao = continuar();
    if($opcao == "s") realizarSaida($estoque);
}

function listarProdutos(&$estoque) {
    limpaTela();
    echo verde("Código | Nome               | Descrição            | Estoque\n");
    foreach ($estoque as $produto) {
        echo str_pad($produto['codigo'], 6) . ' | ' . str_pad($produto['nome'], 18) . ' | ' . str_pad($produto['descricao'], 20) . ' | ' . $produto['quantidade'] . "\n";
    }
    echo "Digite enter para sair";
    readline();
}