<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <h1>Lista de clientes</h1>
                <a href="/clientes/novo" class="btn btn-primary">Novo</a>
                <hr>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Endereço</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($clientes as $cliente) { ?>
                        <tr>
                            <th scope="row"><?= $cliente->id ?></th>
                            <td><?= $cliente->nome ?></td>
                            <td><?= $cliente->email ?></td>
                            <td><?= $cliente->telefone ?></td>
                            <td><?= $cliente->endereco ?></td>
                            <td style="width:10px">
                                <a href="/clientes/<?= $cliente->id ?>/editar" class="btn btn-warning">Alterar</a>
                            </td>
                            <td style="width:10px">
                                <a href="/clientes/<?= $cliente->id ?>/excluir" onclick="return confirm('Confirma?')" class="btn btn-danger">Excluir</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</header>