<?php include 'alterar.code.php'; ?>
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
                <h1><center>Alterar cliente - <?php echo $cliente->nome ?></center></h1>
            </div>
        </div>

        <form id="formCliente" action="alterar.php?id=<?php echo $_GET["id"] ?>" method="post">
            <?php include "form.php" ?>
        </form>
    <div>
    <br>
    <br>
    <?php include '../comuns/scripts.php' ?>
    <script src="/desafio-php/assets/js/validacao.js" data-manual></script>
  </body>
</html>
