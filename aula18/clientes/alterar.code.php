<?php
include __DIR__ . '/../dominio/servicos/clientesServico.php';
include __DIR__ . '/../comuns/mensagemFlash.code.php';


use Dominio\Entidades\Cliente;
use Dominio\Servicos\ClientesServico;
use Dominio\ClassesDeValidacoes\VazioException;
use Dominio\ClassesDeValidacoes\EmailException;

if(isset($_GET["id"]) && isset($_POST["nome"])){
    $cliente = new Cliente(
        $_GET['id'],
        $_POST['nome'],
        $_POST['telefone'],
        $_POST['email'],
        $_POST['endereco']
    );

    $clientesServico = new ClientesServico();
    try{
        $clientes = $clientesServico->salvar($cliente);
      }
      catch(VazioException $erro){
        mensagemFlash("vazioValidador", $erro->getMessage());
        header("Location: alterar.php?id=$cliente->id");
        die;
      }
      catch(EmailException $erro){
        mensagemFlash("emailValidador", $erro->getMessage());
        header("Location: alterar.php?id=$cliente->id");
        die;
      }
      catch(Exception $erro){
        mensagemFlash("erroGenerico", $erro->getMessage());
        header("Location: alterar.php?id=$cliente->id");
        die;
      }
    
    header("Location: index.php");
    exit();
}
else if(isset($_GET["id"])){
    $clientesServico = new ClientesServico();
    $clientes = $clientesServico->buscar(["id" => $_GET["id"]]);
    
    if(count($clientes) < 1){
        header("Location: index.php");
        exit();
    }
    
    $cliente = $clientes[0];
}