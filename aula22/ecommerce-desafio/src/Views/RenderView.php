<?php
namespace Danilo\EcommerceDesafio\Views;

class RenderView{
    public static function render($response, $cliente, $controller, $action){

        ob_start();
        include __DIR__ . "/../Views/$controller/$action.html.php";
        $htmlOutput = ob_get_clean();
    
        $response->getBody()->write($htmlOutput);

        return $response;
    }
}
