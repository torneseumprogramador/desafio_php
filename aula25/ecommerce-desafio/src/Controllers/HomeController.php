<?php
namespace Danilo\EcommerceDesafio\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Danilo\EcommerceDesafio\Models\Cliente;
use Danilo\EcommerceDesafio\Views\RenderView;

class HomeController{
    public static function index(Request $request, Response $response) {
        $cliente = new Cliente();
        $cliente->nome = "Alexandro Abade";
    
        return RenderView::render($response, ['cliente' => $cliente]);
    }
}