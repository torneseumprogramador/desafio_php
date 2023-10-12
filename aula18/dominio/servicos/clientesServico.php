<?php
namespace Dominio\Servicos;

include __DIR__ . '/../../infraestrutura/db.php';
include __DIR__ . '/../../dominio/entidades/cliente.php';
include __DIR__ . '/../../dominio/classesDeValidacoes/vazioException.php';
include __DIR__ . '/../../dominio/classesDeValidacoes/emailException.php';

use Infraestrutura\Db;
use Dominio\Entidades\Cliente;
use Dominio\ClassesDeValidacoes\VazioException;
use Dominio\ClassesDeValidacoes\EmailException;

class ClientesServico {
    public function __construct() {
        $this->repo = Db::instancia();
    }

    private $repo;

    public function salvar($cliente){
        if(!isset($cliente->nome) || $cliente->nome == ""){
            throw new VazioException("O campo nome não pode ser vazio");
        }

        $padrao_email = '/^[A-Za-z0-9+_.-]+@(.+)$/';
        if(isset($cliente->email) && $cliente->email != "" && !preg_match($padrao_email, $cliente->email)){
            throw new EmailException("O email digitado ($cliente->email) é inválido");
        }

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

    public function buscar($params=[], $pagina=1, $totalPagina=3){
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

    public function buscaClientePorId($id){
        $dados = $this->busca(["id" => $id]);
        
        if(count($dados) > 0){
            $dado = $dados[0];

            return new Cliente(
                $dado["id"],
                $dado["nome"],
                $dado["telefone"],
                $dado["email"],
                $dado["endereco"]
            );
        }

        return null;
    }

    public function excluirPorId($id){
        $sql = "delete from clientes where id = :id";
        $this->repo->execute($sql, ['id' => $id]);
    }
}