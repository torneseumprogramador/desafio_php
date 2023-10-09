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
    <title>Desafio PHP - Incluir Clientes</title>
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
            <div class="form-group">
                <label class="col-form-label mt-4" for="nome">Nome:</label>
                <input type="text" class="form-control" placeholder="Digite o nome do cliente" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="telefone">Telefone:</label>
                <input type="text" class="form-control" placeholder="Digite o telefone do cliente" id="telefone" name="telefone">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="email">Email:</label>
                <input type="email" class="form-control" placeholder="Digite o email do cliente" id="email" name="email">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="endereco">Endereco:</label>
                <input type="text" class="form-control" placeholder="Digite o endereço do cliente" id="endereco" name="endereco">
            </div>
            <hr>
            <button class="btn btn-primary" type="submit">Salvar</button>
        </form>
    <div>
    <br>
    <br>
    <?php include '../comuns/scripts.php' ?>
  </body>
</html>
