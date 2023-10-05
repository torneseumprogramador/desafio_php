<?php
namespace Danilo\CadastroProduto\Display;

class Usabilidade{
    public static function mensagemComEsperaVermelho($mensagem){
        Usabilidade::limpaTela();
        echo Usabilidade::vermelho($mensagem . "\n");
        Usabilidade::espera(3);
    }

    public static function continuar(){
        return readline(Usabilidade::amarelo("Deseja continuar ? s/n\n"));
    }

    public static function mensagemComEspera($mensagem){
        Usabilidade::limpaTela();
        echo Usabilidade::verde($mensagem . "\n");
        Usabilidade::espera(3);
    }

    public static function vermelho($texto){
        return "\033[31m{$texto}\033[0m";
    }

    public static function verde($texto){
        return "\033[32m{$texto}\033[0m";
    }

    public static function amarelo($texto){
        return "\033[33m{$texto}\033[0m";
    }

    public static function azul($texto){
        return "\033[34m{$texto}\033[0m";
    }

    public static function espera($segundos){
        sleep($segundos);
    }

    public static function limpaTela() {
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            system('cls');
        } else {
            system('clear');
        }
    }
}