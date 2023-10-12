<?php
include __DIR__ . '/../dominio/servicos/clientesServico.php';
include __DIR__ . '/../comuns/mensagemFlash.code.php';

use Dominio\Entidades\Cliente;
use Dominio\Servicos\ClientesServico;
use Dominio\ClassesDeValidacoes\VazioException;
use Dominio\ClassesDeValidacoes\EmailException;

if(isset($_POST["nome"])){
  $cliente = new Cliente(
    null,
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
    header("Location: incluir.php");
    die;
  }
  catch(EmailException $erro){
    mensagemFlash("emailValidador", $erro->getMessage());
    header("Location: incluir.php");
    die;
  }
  catch(Exception $erro){
    mensagemFlash("erroGenerico", $erro->getMessage());
    header("Location: incluir.php");
    die;
  }
}

header("Location: index.php");
exit();