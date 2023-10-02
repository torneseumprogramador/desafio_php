<?php

function mensagemComEsperaVermelho($mensagem){
    limpaTela();
    echo vermelho($mensagem . "\n");
    espera(3);
}

function continuar(){
    return readline(amarelo("Deseja continuar ? s/n\n"));
}

function mensagemComEspera($mensagem){
    limpaTela();
    echo verde($mensagem . "\n");
    espera(3);
}
