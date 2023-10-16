<?php
namespace Danilo\EcommerceDesafio\Config;

use Danilo\EcommerceDesafio\Controllers\ClientesController;

class Routes{
    public static function render($app){
        $app->get('/', [ClientesController::class, 'index']);
    }
}