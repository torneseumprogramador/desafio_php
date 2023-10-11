<?php
namespace Danilo\CadastroProduto\Database\Repositorios;

use Danilo\CadastroProduto\Database\Interfaces\IDado;
use Medoo\Medoo;

class MysqlRepositorio implements IDado {

    public function __construct() {
        $host = getenv('HOST_MYSQL') ? getenv('HOST_MYSQL') : 'localhost';
        $db = getenv('DB_NAME') ? getenv('DB_NAME') : 'estoque';
        $user = getenv('DB_USER') ? getenv('DB_USER') : 'root';
        $pass = getenv('DB_PASSWORD') ? getenv('DB_PASSWORD') : 'root';

        $this->database = new Medoo([
            'database_type' => 'mysql',
            'database_name' => $db,
            'server' => $host,
            'username' => $user,
            'password' => $pass
        ]);
    }
    
    private $database;

    public function salvar($script_sql){
        $this->database->query($script_sql);
    }

    public function todos($query){
        return $this->database->query($query)->fetchAll();
    }
}