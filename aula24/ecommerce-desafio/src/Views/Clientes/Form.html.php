<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <h1><?= isset($cliente) ? "Edição do $cliente->nome" : "Novo cliente" ?></h1>
                <hr>

                <form action="<?= isset($cliente) ? "/clientes/$cliente->id" : "/clientes" ?>" method="post" >
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?= isset($cliente) ? $cliente->nome : "" ?>" placeholder="Seu nome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= isset($cliente) ? $cliente->email : "" ?>" placeholder="Seu email">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="tel" class="form-control" id="telefone" name="telefone" value="<?= isset($cliente) ? $cliente->telefone : "" ?>" placeholder="Seu telefone">
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" value="<?= isset($cliente) ? $cliente->endereco : "" ?>" placeholder="Seu endereço">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a href="/clientes" class="btn btn-default">Lista de clientes</a>
                </form>
            </div>
        </div>
    </div>
</header>