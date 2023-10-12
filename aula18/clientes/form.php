<div class="alert alert-dismissible alert-primary" style="display: <?php echo isset($_COOKIE["vazioValidador"]) || isset($_COOKIE["emailValidador"]) || isset($_COOKIE["erroGenerico"]) ? "block" : "none"; ?>">
    <?php if(isset($_COOKIE["erroGenerico"])){ ?>
        <?php echo $_COOKIE["erroGenerico"] ?>
    <?php } else { ?>
        Confira os erros abaixo:
    <?php } ?>
</div>

<div class="form-group <?php echo isset($_COOKIE["vazioValidador"]) ? "has-danger" : ""; ?>">
    <label class="col-form-label mt-4" for="nome">Nome:</label>
    <input type="text" class="form-control <?php echo isset($_COOKIE["vazioValidador"]) ? "is-invalid" : ""; ?>" value="<?php echo isset($cliente) ? $cliente->nome : "" ?>" placeholder="Digite o nome do cliente" id="nome" name="nome">
    <div class="invalid-feedback" ><?php echo isset($_COOKIE["vazioValidador"]) ? $_COOKIE["vazioValidador"] : "" ?></div>
</div>

<div class="form-group">
    <label class="col-form-label mt-4" for="telefone">Telefone:</label>
    <input type="text" class="form-control" value="<?php echo isset($cliente) ? $cliente->telefone : "" ?>" placeholder="Digite o telefone do cliente" id="telefone" name="telefone">
</div>
<div class="form-group <?php echo isset($_COOKIE["emailValidador"]) ? "has-danger" : ""; ?>">
    <label class="col-form-label mt-4" for="email">Email:</label>
    <input type="text" class="form-control <?php echo isset($_COOKIE["emailValidador"]) ? "is-invalid" : ""; ?>" value="<?php echo isset($cliente) ? $cliente->email : "" ?>" placeholder="Digite o email do cliente" id="email" name="email">
    <div class="invalid-feedback" ><?php echo isset($_COOKIE["emailValidador"]) ? $_COOKIE["emailValidador"] : "" ?></div>
</div>

<div class="form-group">
    <label class="col-form-label mt-4" for="cargo">Cargo:</label>
    <select class="form-select" id="cargo" name="cargo">
        <option value="">[Selecione]</option>
        <option value="1">Administrador</option>
        <option value="2">Programador</option>
        <option value="3">Encanador</option>
        <option value="4">Faxineira</option>
    </select>
</div>


<div class="form-group">
    <label class="col-form-label mt-4" for="endereco">Endereco:</label>
    <input type="text" class="form-control" value="<?php echo isset($cliente) ? $cliente->endereco : "" ?>" placeholder="Digite o endereço do cliente" id="endereco" name="endereco">
</div>
<hr>
<button class="btn btn-primary" type="submit">Salvar</button>