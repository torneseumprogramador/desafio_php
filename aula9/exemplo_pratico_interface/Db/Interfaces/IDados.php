<?php
namespace Db\Interfaces;

interface IDado{
    public function salvar($objeto);
    public function todos();
}