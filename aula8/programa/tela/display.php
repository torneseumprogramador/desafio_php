<?php

function espera($segundos){
    sleep($segundos);
}

function limpaTela() {
    // Detecta o sistema operacional
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        // Windows
        system('cls');
    } else {
        // Linux/Unix/Mac
        system('clear');
    }
}
