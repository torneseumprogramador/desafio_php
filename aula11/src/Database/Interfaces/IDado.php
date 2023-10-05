<?php
namespace Danilo\CadastroProduto\Database\Interfaces;

interface IDado{
    public function salvar($script_sql);
    public function todos($query);
}