<?php

function vermelho($texto){
    return "\033[31m{$texto}\033[0m";
}

function verde($texto){
    return "\033[32m{$texto}\033[0m";
}

function amarelo($texto){
    return "\033[33m{$texto}\033[0m";
}

function azul($texto){
    return "\033[34m{$texto}\033[0m";
}