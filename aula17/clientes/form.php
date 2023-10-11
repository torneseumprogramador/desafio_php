<div class="form-group">
    <label class="col-form-label mt-4" for="nome">Nome:</label>
    <input type="text" class="form-control" value="<?php echo isset($cliente) ? $cliente->nome : "" ?>" placeholder="Digite o nome do cliente" id="nome" name="nome" required>
</div>
<div class="form-group">
    <label class="col-form-label mt-4" for="telefone">Telefone:</label>
    <input type="text" class="form-control" value="<?php echo isset($cliente) ? $cliente->telefone : "" ?>" placeholder="Digite o telefone do cliente" id="telefone" name="telefone">
</div>
<div class="form-group">
    <label class="col-form-label mt-4" for="email">Email:</label>
    <input type="email" class="form-control" value="<?php echo isset($cliente) ? $cliente->email : "" ?>" placeholder="Digite o email do cliente" id="email" name="email">
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