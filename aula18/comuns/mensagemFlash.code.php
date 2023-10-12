<?php
function mensagemFlash($nomeCookie, $valorCookie){
    $tempoExpiracao = time() + 5; // 5 segundos a partir do momento atual
    setcookie($nomeCookie, $valorCookie, $tempoExpiracao);
}
