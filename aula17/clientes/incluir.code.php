<?php
include '../dominio/servicos/clientesServico.php';

use Dominio\Entidades\Cliente;
use Dominio\Servicos\ClientesServico;

if(isset($_POST["nome"])){
  $cliente = new Cliente(
    null,
    $_POST['nome'],
    $_POST['telefone'],
    $_POST['email'],
    $_POST['endereco']
  );

  $clientesServico = new ClientesServico();
  $clientes = $clientesServico->salvar($cliente);
}

header("Location: index.php");
exit();