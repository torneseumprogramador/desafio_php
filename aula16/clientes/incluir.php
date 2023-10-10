<?php

if(isset($_POST["nome"])){
    include '../db/conexao.php';
    
    // Preparando a consulta para inserir os dados
    $sql = "INSERT INTO clientes (nome, telefone, email, endereco) VALUES (:nome, :telefone, :email, :endereco)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $_POST['nome']);
    $stmt->bindParam(':telefone', $_POST['telefone']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':endereco', $_POST['endereco']);
    $stmt->execute();

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Desafio PHP - Incluir Cliente</title>
    <?php include '../comuns/head-include.php' ?>
  </head>
  <body>
    <?php include '../comuns/nav.php' ?>

    <div class="container conteudo">
        <div class="card border-secondary mb-3">
            <div class="card-body">
                <h1><center>Novo cliente</center></h1>
            </div>
        </div>

        <form action="incluir.php" method="post">
            <?php include "form.php" ?>
        </form>
    <div>
    <br>
    <br>
    <?php include '../comuns/scripts.php' ?>
  </body>
</html>
