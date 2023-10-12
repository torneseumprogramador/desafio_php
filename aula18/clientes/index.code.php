<?php
include '../dominio/servicos/clientesServico.php';

use Dominio\Servicos\ClientesServico;

$pagina = max(1, isset($_GET["pagina"]) ? intval($_GET["pagina"]) : 1);
$totalPagina = 3;

$params = [];
if(isset($_GET["nome"])){
    $params["nome"] = $_GET["nome"]; 
}

$clientesServico = new ClientesServico();
$clientes = $clientesServico->buscar($params, $pagina, $totalPagina);