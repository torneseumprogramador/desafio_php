<?php 
namespace Danilo\EcommerceDesafio\Repositorios;

use Danilo\EcommerceDesafio\Repositorios\Infraestrutura\MysqlRepositorio;
use Danilo\EcommerceDesafio\Repositorios\Interfaces\IRepositorio;
use Danilo\EcommerceDesafio\Models\Cliente;

class ClienteRepositorioMysql implements IRepositorio {
    public function __construct() {
        $this->repo = MysqlRepositorio::instancia();
    }

    private $repo;

    public function salvar($obj){
        $params = [
            "nome" => $obj->nome,
            "telefone" => $obj->telefone,
            "email" => $obj->email,
            "endereco" => $obj->endereco,
        ];

        if(isset($obj->id)){
            $params["id"] = $obj->id;
            $sql = "update clientes set nome = :nome, telefone = :telefone, email = :email, endereco = :endereco where id = :id ";
        }
        else{
            $sql = "INSERT INTO clientes (nome, telefone, email, endereco) VALUES (:nome, :telefone, :email, :endereco)";
        }

        $this->repo->execute($sql, $params);
    }

    public function buscar($params=[], $pagina=1, $totalPagina=5) : array{
        $pagina = max(1, isset($pagina) ? intval($pagina) : 1);
        $offset = ($pagina - 1) * $totalPagina;

        $where = " WHERE 1 = 1 ";

        foreach ($params as $key => $value) {
            if($key == "nome"){
                $where .= " AND nome LIKE :nome ";
                $params["nome"] = '%' . $params["nome"] . '%';
            }
            else{
                $where .= " AND $key = :$key ";
            }
        }

        $query = "SELECT * FROM clientes $where ORDER BY id DESC LIMIT $totalPagina OFFSET $offset";

        $dados = $this->repo->buscar($query, $params);

        $clientes = [];
        foreach($dados as $dado){
            $clientes[] = new Cliente(
                $dado["id"],
                $dado["nome"],
                $dado["telefone"],
                $dado["email"],
                $dado["endereco"]
            );
        }

        return $clientes;
    }

    public function buscarPorId($id) : Cliente {
        $dados = $this->buscar(["id" => $id]);
        
        if(count($dados) > 0){
            return $dados[0];
        }

        return null;
    }

    public function excluirPorId($id){
        $sql = "delete from clientes where id = :id";
        $this->repo->execute($sql, ['id' => $id]);
    }
}