<?php 
namespace Danilo\EcommerceDesafio\Repositorios\Infraestrutura;

class MysqlRepositorio{
    private function __construct() {
        $this->host = getenv('HOST_MYSQL') ? getenv('HOST_MYSQL') : 'localhost';
        $this->db = getenv('DB_NAME') ? getenv('DB_NAME') : 'desafio_php_clientes';
        $this->user = getenv('DB_USER') ? getenv('DB_USER') : 'root';
        $this->pass = getenv('DB_PASSWORD') ? getenv('DB_PASSWORD') : 'root';
        $this->charset = getenv('DB_CHARSET') ? getenv('DB_CHARSET') : 'utf8mb4';
        $this->port = getenv('DB_PORT') ? getenv('DB_PORT') : 3306;

        $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->db};charset={$this->charset}";
        $options = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ];
    
        try {
            $this->pdo = new \PDO($dsn, $this->user, $this->pass, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    private $host;
    private $db;
    private $user;
    private $pass;
    private $charset;
    private $port;
    private $pdo;
    private static $instancia;

    public static function instancia(){
        if (self::$instancia === null) {
            self::$instancia = new MysqlRepositorio();
        }

        return self::$instancia;
    }

    public function execute($sql, $params=[]){
        $stmt = $this->pdo->prepare($sql);
        
        foreach ($params as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }

        $stmt->execute();

        return $stmt;
    }

    public function buscar($sql, $params=[]){
        $stmt = $this->execute($sql, $params);
        return $stmt->fetchAll();
    }
}
