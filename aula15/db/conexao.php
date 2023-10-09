<?php 

// Fazer conexão com o banco de dados e retornar os clientes
// Configuração da conexão
$host = 'localhost'; // altere conforme sua configuração
$db = 'desafio_php_clientes';
$user = 'root'; // substitua pelo seu usuário do MySQL
$pass = 'root'; // substitua pela sua senha do MySQL
$charset = 'utf8mb4';
$port = 3306; // especificando a porta

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
