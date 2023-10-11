<?php
include '../dominio/servicos/clientesServico.php';

use Dominio\Entidades\Cliente;
use Dominio\Servicos\ClientesServico;

if(isset($_GET["id"]) && isset($_POST["nome"])){
    $cliente = new Cliente(
        $_GET['id'],
        $_POST['nome'],
        $_POST['telefone'],
        $_POST['email'],
        $_POST['endereco']
    );

    $clientesServico = new ClientesServico();
    $clientes = $clientesServico->salvar($cliente);
    
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