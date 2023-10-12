<?php
namespace Dominio\ClassesDeValidacoes;

class VazioException extends \Exception {
    public function __construct($mensagem = "Não pode ser vazio.", $codigo = 0, Throwable $anterior = null) {
        parent::__construct($mensagem, $codigo, $anterior);
    }
}