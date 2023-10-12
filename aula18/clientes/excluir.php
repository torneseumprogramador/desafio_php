<?php
include '../dominio/servicos/clientesServico.php';

use Dominio\Servicos\ClientesServico;

if(isset($_GET["id"])){
    $clientesServico = new ClientesServico();
    $clientesServico->excluirPorId($_GET["id"]);
}

header("Location: index.php");
exit();
