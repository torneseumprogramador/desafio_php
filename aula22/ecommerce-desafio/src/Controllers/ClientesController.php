<?php
namespace Danilo\EcommerceDesafio\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Danilo\EcommerceDesafio\Models\Cliente;
use Danilo\EcommerceDesafio\Views\RenderView;

class ClientesController{
    public static function index(Request $request, Response $response) {
        $cliente = new Cliente();
        $cliente->nome = "Alexandro Abade"; // Este é apenas um exemplo. Aqui, você irá buscar os dados do cliente como achar adequado.
    
        return RenderView::render($response, $cliente, 'Clientes', 'Index');
    }
}