<?php
include '../db/conexao.php';

if(isset($_GET["id"]) && isset($_POST["nome"])){
    
    $sql = "update clientes set nome = :nome, telefone = :telefone, email = :email, endereco = :endereco where id = :id ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->bindParam(':nome', $_POST['nome']);
    $stmt->bindParam(':telefone', $_POST['telefone']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':endereco', $_POST['endereco']);
    $stmt->execute();

    header("Location: index.php");
    exit();
}
else if(isset($_GET["id"])){
    $stmt = $pdo->prepare('SELECT * FROM clientes where id=:id order by id desc');
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    $clientes = $stmt->fetchAll();

    if(count($clientes) < 1){
        header("Location: index.php");
        exit();
    }
    
    $cliente = $clientes[0];
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Desafio PHP - Alterar Cliente</title>
    <?php include '../comuns/head-include.php' ?>
  </head>
  <body>
    <?php include '../comuns/nav.php' ?>

    <div class="container conteudo">
        <div class="card border-secondary mb-3">
            <div class="card-body">
                <h1><center>Alterar cliente NOMEDOCLIENTE</center></h1>
            </div>
        </div>

        <form action="alterar.php?id=<?php echo $_GET["id"] ?>" method="post">
            <?php include "form.php" ?>
        </form>
    <div>
    <br>
    <br>
    <?php include '../comuns/scripts.php' ?>
  </body>
</html>
