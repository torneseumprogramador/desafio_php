
<?php $currentPage = $_SERVER['REQUEST_URI']; ?>

            
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Desafio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link <?php echo ($currentPage == '/index.php' || $currentPage == '/') ? "active" : ""; ?>" href="/">Home
                    <span class="visually-hidden">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($currentPage == '/sobre.php') ? "active" : "" ?>" href="/sobre.php">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/bootstrap.php">Exemplo de template</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php echo (strpos($currentPage, '/clientes/') !== false) ? "active" : ""; ?>" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Clientes</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item <?php echo ($currentPage == '/clientes/' || $currentPage == '/clientes/index.php') ? "active" : ""; ?>" href="/clientes">Listar</a>
                    <a class="dropdown-item  <?php echo ($currentPage == '/clientes/incluir.php') ? "active" : ""; ?>" href="/clientes/incluir.php">Incluir</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Buscar</a>
                </div>
            </li>
        </ul>
        <form action="index.php" method="get" class="d-flex">
            <input class="form-control me-sm-2" type="search" name="nome" value="<?php echo isset($_GET["nome"]) ? $_GET["nome"] : "" ?>"  placeholder="Digite o cliente ...">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        </div>
    </div>
</nav>