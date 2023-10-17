<?php
require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use Danilo\EcommerceDesafio\Config\Routes;

$app = AppFactory::create();

Routes::render($app);

$app->run();
