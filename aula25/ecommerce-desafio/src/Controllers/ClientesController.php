<?php
namespace Danilo\EcommerceDesafio\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Danilo\EcommerceDesafio\Models\Cliente;
use Danilo\EcommerceDesafio\Views\RenderView;
use Danilo\EcommerceDesafio\Servicos\ClienteServico;
use Danilo\EcommerceDesafio\Repositorios\ClienteRepositorioMysql;
use Danilo\EcommerceDesafio\Repositorios\ClienteRepositorioIlluminate;

class ClientesController{
    private static $service;

    private static function service() {
        if(!isset($service)) $service = new ClienteServico(new ClienteRepositorioIlluminate());
        // if(!isset($service)) $service = new ClienteServico(new ClienteRepositorioMysql());
        return $service;
    }

    public static function index(Request $request, Response $response) {
        $clientes = self::service()->buscar();
        return RenderView::render($response, ['clientes' => $clientes]);
    }

    public static function novo(Request $request, Response $response) {
        return RenderView::render($response, [], "Form");
    }

    public static function criar(Request $request, Response $response) {
        $cliente = new Cliente();
        
        $data = $request->getParsedBody();

        $cliente = new Cliente(
            null,
            $data['nome'] ?? "",
            $data['telefone'] ?? "",
            $data['email'] ?? "",
            $data['endereco'] ?? ""
        );
        
        self::service()->salvar($cliente);
        return $response->withStatus(302)->withHeader('Location', '/clientes');
    }

    public static function editar(Request $request, Response $response) {
        $id = $request->getAttribute('id');
        $cliente = self::service()->buscarPorId($id);

        if(!isset($cliente))
            return $response->withStatus(302)->withHeader('Location', '/clientes');
        
        return RenderView::render($response, ['cliente' => $cliente], "Form");
    }

    public static function atualizar(Request $request, Response $response) {
        $id = $request->getAttribute('id');
        $cliente = self::service()->buscarPorId($id);

        if(!isset($cliente))
            return $response->withStatus(302)->withHeader('Location', '/clientes');

        $data = $request->getParsedBody();

        $cliente->nome = $data['nome'];
        $cliente->email = $data['email'];
        $cliente->telefone = $data['telefone'];
        $cliente->endereco = $data['endereco'];

        self::service()->salvar($cliente);
        
        return $response->withStatus(302)->withHeader('Location', '/clientes');
    }

    public static function excluir(Request $request, Response $response) {
        $id = $request->getAttribute('id');
        self::service()->excluirPorId($id);
        
        return $response->withStatus(302)->withHeader('Location', '/clientes');
    }
}