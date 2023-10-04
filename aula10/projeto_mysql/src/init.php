<?php
// Certifique-se de incluir o autoloader do Composer
require 'vendor/autoload.php';

use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\DriverManager;

// Parâmetros de conexão
$connectionParams = [
    'dbname'   => 'petshop',
    'user'     => 'root',
    'password' => 'root',
    'host'     => 'localhost',
    'driver'   => 'pdo_mysql',
];

// Crie uma conexão
$config = new Configuration();
$connection = DriverManager::getConnection($connectionParams, $config);

// Teste a conexão, por exemplo, buscando todos os registros de uma tabela "exemplo"
$query = $connection->executeQuery('SELECT * FROM cliente');
$clientes = $query->fetchAllAssociative();

// print_r($clientes);

foreach($clientes as $cliente){
    echo "-----------------------------\n";
    echo "Id: {$cliente["id"]}\n";
    echo "Nome: {$cliente["nome"]}\n";
    echo "Telefone: {$cliente["telefone"]}\n";
}
