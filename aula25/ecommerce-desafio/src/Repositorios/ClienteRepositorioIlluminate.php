<?php 
namespace Danilo\EcommerceDesafio\Repositorios;

use Danilo\EcommerceDesafio\Repositorios\Infraestrutura\IlluminateRepositorio;
use Danilo\EcommerceDesafio\Repositorios\Interfaces\IRepositorio;
use Danilo\EcommerceDesafio\Models\Cliente;

class ClienteRepositorioIlluminate implements IRepositorio {
    public function __construct() {
        $this->repo = IlluminateRepositorio::instancia();
    }

    private $repo;

    public function salvar($obj){
        if (isset($obj->id)) {
            return $this->repo->table('clientes')
                ->where('id', $obj->id)
                ->update([
                    'nome'     => $obj->nome,
                    'telefone' => $obj->telefone,
                    'email'    => $obj->email,
                    'endereco' => $obj->endereco
                ]);
        }
        
        // Caso contrário, inserimos um novo registro e retornamos o ID inserido
        return $this->repo->table('clientes')->insertGetId([
            'nome'     => $obj->nome,
            'telefone' => $obj->telefone,
            'email'    => $obj->email,
            'endereco' => $obj->endereco
        ]);
    }

    public function buscar($params=[], $pagina=1, $totalPagina=5) : array {
        // Iniciamos a consulta na tabela 'clientes'
        $query = $this->repo->table('clientes');
    
        // Aplicamos os filtros baseados nos parâmetros fornecidos
        foreach ($params as $key => $value) {
            $query = $query->where($key, 'like', '%' . $value . '%');
        }
    
        // calculo da paginação
        $pagina = max(1, isset($pagina) ? intval($pagina) : 1);
        $offset = ($pagina - 1) * $totalPagina;
    
        // Aplicamos a limitação e o offset para a paginação
        $query = $query->limit($totalPagina)->offset($offset);

        $query = $query->orderBy('id', 'desc');
    
        // Executamos a consulta e retornamos os resultados

        $dados = $query->get();

        $clientes = [];
        foreach($dados as $dado){
            $clientes[] = new Cliente(
                $dado->id,
                $dado->nome,
                $dado->telefone,
                $dado->email,
                $dado->endereco
            );
        }

        return $clientes;
    }

    public function buscarPorId($id) : Cliente{
        $dado = $this->repo->table('clientes')->where('id', $id)->first();

        return new Cliente(
            $dado->id,
            $dado->nome,
            $dado->telefone,
            $dado->email,
            $dado->endereco
        );
    }

    public function excluirPorId($id){
        return $this->repo->table('clientes')->where('id', $id)->delete();
    }
}