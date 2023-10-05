<?php
namespace Danilo\CadastroProduto\Database\Repositorios;

use Danilo\CadastroProduto\Database\Interfaces\IDado;
use Medoo\Medoo;

class MysqlRepositorio implements IDado {

    public function __construct() {
        $this->database = new Medoo([
            'database_type' => 'mysql',
            'database_name' => 'estoque',
            'server' => 'localhost',
            'username' => 'root',
            'password' => 'root'
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