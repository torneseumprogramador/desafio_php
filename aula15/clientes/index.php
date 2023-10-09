<?php
include '../db/conexao.php';

// Consulta para obter todos os clientes
$stmt = $pdo->query('SELECT * FROM clientes order by id desc');
$clientes = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Desafio PHP - Clientes</title>
    <?php include '../comuns/head-include.php' ?>
  </head>
  <body>
    <?php include '../comuns/nav.php' ?>

    <div class="container conteudo">
        <div class="card border-secondary mb-3">
            <div class="card-body">
                <h1><center>Lista de clientes</center></h1>
            </div>
        </div>

        <table class="table table-hover">
            <thead>
                <tr class="table-info">
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Endereço</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($clientes as $cliente) { ?>
                    <tr>
                        <td><?php echo $cliente["id"] ?></td>
                        <td><?php echo $cliente["nome"] ?></td>
                        <td><?php echo $cliente["telefone"] ?></td>
                        <td><?php echo $cliente["email"] ?></td>
                        <td><?php echo $cliente["endereco"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    <div>

    <?php include '../comuns/scripts.php' ?>
  </body>
</html>
