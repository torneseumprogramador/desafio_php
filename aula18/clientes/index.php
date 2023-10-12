<?php include 'index.code.php'; ?>

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
                <a href="incluir.php" class="btn btn-success">Novo</a>
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
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($clientes as $cliente) { ?>
                    <tr>
                        <td><?php echo $cliente->id ?></td>
                        <td><?php echo $cliente->nome ?></td>
                        <td><?php echo $cliente->telefone ?></td>
                        <td><?php echo $cliente->email ?></td>
                        <td><?php echo $cliente->endereco ?></td>
                        <td>
                            <a href="alterar.php?id=<?php echo $cliente->id ?>" class="btn btn-warning">Alterar</a>
                        </td>
                        <td>
                            <a href="excluir.php?id=<?php echo $cliente->id ?>" onclick="return confirm('Confirma exclusão?')" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <div style="text-align:center">
            <a href="index.php?pagina=<?php echo $pagina - 1 ?>" class="btn btn-secondary <?php echo $pagina == 1 ? "disabled" : "" ?>">< Anterior</a>
            <a href="index.php?pagina=<?php echo $pagina + 1 ?>" class="btn btn-secondary <?php echo count($clientes) < $totalPagina ? "disabled" : "" ?>">Próximo ></a>
        </div>
        <br>
    <div>

    <?php include '../comuns/scripts.php' ?>
  </body>
</html>
