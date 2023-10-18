<?php 
namespace Danilo\EcommerceDesafio\Servicos;

use Danilo\EcommerceDesafio\Respositorios\MysqlRepositorio;
use Danilo\EcommerceDesafio\Models\Cliente;

class ClienteServico {
    public function __construct() {
        $this->repo = MysqlRepositorio::instancia();
    }

    private $repo;

    public function salvar($cliente){
        $params = [
            "nome" => $cliente->nome,
            "telefone" => $cliente->telefone,
            "email" => $cliente->email,
            "endereco" => $cliente->endereco,
        ];

        if(isset($cliente->id)){
            $params["id"] = $cliente->id;
            $sql = "update clientes set nome = :nome, telefone = :telefone, email = :email, endereco = :endereco where id = :id ";
        }
        else{
            $sql = "INSERT INTO clientes (nome, telefone, email, endereco) VALUES (:nome, :telefone, :email, :endereco)";
        }

        $this->repo->execute($sql, $params);
    }

    public function buscar($params=[], $pagina=1, $totalPagina=5){
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

    public function buscarPorId($id){
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