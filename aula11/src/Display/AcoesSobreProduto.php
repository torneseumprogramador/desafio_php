<?php
namespace Danilo\CadastroProduto\Display;

use Danilo\CadastroProduto\Core\Entidades\Produto;
use Danilo\CadastroProduto\Display\Usabilidade;
use Danilo\CadastroProduto\Core\Servicos\ProdutoServico;

use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Output\ConsoleOutput;

class AcoesSobreProduto{

    public static function adicionarProduto() {
        Usabilidade::limpaTela();

        $produto = new Produto();
        $produto->nome = readline(Usabilidade::verde("Nome do produto: "));
        $produto->descricao = readline(Usabilidade::amarelo("Descrição do produto: "));
        $produto->preco = readline(Usabilidade::amarelo("Preço do produto: "));
        $produto->quantidade = readline(Usabilidade::azul("Quantidade em estoque: "));
        
        $servico = new ProdutoServico();
        $servico->salvar($produto);

        Usabilidade::mensagemComEspera("Produto adicionado com sucesso!\n");
    }

    public static function realizarSaida($produto = null, $inicio = true) {
        Usabilidade::limpaTela();

        if($inicio){
            $id = readline("Código do produto para saída: ");
            $servico = new ProdutoServico();
            $produto = $servico->buscaPorId($id);
        }

        if(isset($produto)){
            $quantidadeSaida = readline("Quantidade a ser retirada do produto ($produto->nome): ");

            if (filter_var($quantidadeSaida, FILTER_VALIDATE_INT) !== false) {
                $quantidadeSaida = intval($quantidadeSaida);
            }
            else{
                Usabilidade::mensagemComEsperaVermelho("Quantidade digitada de forma incorreta\n");
                $opcao = Usabilidade::continuar();
                if($opcao == "s") realizarSaida($produto, false);
                return;
            }

            if ($produto->quantidade >= $quantidadeSaida) {
                $produto->quantidade -= $quantidadeSaida;

                $servico = new ProdutoServico();
                $servico->salvar($produto);
                
                Usabilidade::mensagemComEspera("Saída realizada com sucesso.");
            } else {
                Usabilidade::mensagemComEsperaAmarelo("Produto: $produto->nome.\n");
                Usabilidade::mensagemComEsperaAmarelo("Estoque atual tem a quantidade de: ($produto->quantidade).\n");
                Usabilidade::mensagemComEsperaVermelho("Estoque insuficiente.\n");

                $opcao = Usabilidade::continuar();
                if($opcao == "s") realizarSaida($produto, false);
            }
        }
        else{
            Usabilidade::mensagemComEsperaVermelho("Produto não encontrado!\n");
            $opcao = Usabilidade::continuar();
            if($opcao == "s") realizarSaida();
        }
    }

    public static function convertToObjectArray($produto) {
        return [
            'id' => $produto->id,
            'nome' => $produto->nome,
            'descricao' => $produto->descricao,
            'preco' => $produto->preco,
            'quantidade' => $produto->quantidade
        ];
    }

    public static function listarProdutos() {        
        Usabilidade::limpaTela();

        $servico = new ProdutoServico();
        $produtos = $servico->todos();

        $produtosArray = array_map(function($produto) {
            return AcoesSobreProduto::convertToObjectArray($produto);
        }, $produtos);
        
        $output = new ConsoleOutput();
        $table = new Table($output);

        $table->setHeaders(['ID', 'Nome', 'Descrição', 'Preço', 'Quantidade']);
        $table->setRows($produtosArray);

        $table->render();

        echo "Digite enter para sair";
        readline();
    }
}