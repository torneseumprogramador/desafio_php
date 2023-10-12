<?php
namespace Dominio\ClassesDeValidacoes;

class EmailException extends \Exception {
    public function __construct($mensagem = "Email inválido.", $codigo = 0, Throwable $anterior = null) {
        parent::__construct($mensagem, $codigo, $anterior);
    }
}