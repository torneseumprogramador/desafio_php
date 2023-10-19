<?php
namespace Danilo\EcommerceDesafio\Repositorios\Infraestrutura;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Query\Builder as QueryBuilder;

class IlluminateRepositorio {
    private $capsule;

    private static $instancia;

    private function __construct() {
        $this->capsule = new Capsule();

        $this->capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => getenv('HOST_MYSQL') ? getenv('HOST_MYSQL') : 'localhost',
            'database'  => getenv('DB_NAME') ? getenv('DB_NAME') : 'desafio_php_clientes',
            'username'  => getenv('DB_USER') ? getenv('DB_USER') : 'root',
            'password'  => getenv('DB_PASSWORD') ? getenv('DB_PASSWORD') : 'root',
            'charset'   => getenv('DB_CHARSET') ? getenv('DB_CHARSET') : 'utf8',
            'collation' => getenv('DB_COLLATION') ? getenv('DB_COLLATION') : 'utf8_unicode_ci',
            'port'      => getenv('DB_PORT') ? getenv('DB_PORT') : 3306,
            'prefix'    => '',
        ]);

        $this->capsule->setAsGlobal();
        $this->capsule->bootEloquent();
    }

    public static function instancia() {
        if (self::$instancia === null) {
            self::$instancia = new IlluminateRepositorio();
        }

        return self::$instancia->capsule;
    }
}
