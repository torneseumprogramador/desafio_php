<?php
namespace Danilo\EcommerceDesafio\Config;

use Slim\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Exception\HttpNotFoundException;
use Danilo\EcommerceDesafio\Controllers\ClientesController;
use Danilo\EcommerceDesafio\Controllers\HomeController;

class Routes{
    public static function render($app){
        $app->get('/', [HomeController::class, 'index']);
        $app->get('/clientes', [ClientesController::class, 'index']);

        // meus arquivos de assets oficiais
        $app->get('/assets/{path:.*}', function ($request, $response, $args) {
            $file = __DIR__ . '/../Assets/' . $args['path'];
        
            if (!file_exists($file)) {
                return $response->withStatus(404);
            }

            $extensionMimeTypes = [
                'css' => 'text/css',
                'js'  => 'application/javascript',
            ];

            $extension = pathinfo($file, PATHINFO_EXTENSION);
            $mime = $extensionMimeTypes[$extension] ?? mime_content_type($file);

            $stream = new \Slim\Psr7\Stream(fopen($file, 'r'));

            return $response->withHeader('Content-Type', $mime)->withBody($stream);
        });

        $errorMiddleware = $app->addErrorMiddleware(true, true, true);

        $errorMiddleware->setErrorHandler(
            HttpNotFoundException::class,
            function (ServerRequestInterface $request, \Throwable $exception, bool $displayErrorDetails) {
                $response = new Response();
                $response->getBody()->write('Página não encontrada.');
                return $response->withStatus(404);
            }
        );
    }
}