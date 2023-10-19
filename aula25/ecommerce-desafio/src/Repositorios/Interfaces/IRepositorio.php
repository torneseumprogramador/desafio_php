<?php
namespace Danilo\EcommerceDesafio\Repositorios\Interfaces;

interface IRepositorio{
    public function salvar($obj);
    public function buscar($params=[], $pagina=1, $totalPagina=5) : array;
    public function buscarPorId($id);
    public function excluirPorId($id);
}