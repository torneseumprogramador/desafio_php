
<?php $currentPage = $_SERVER['REQUEST_URI']; ?>

            
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/desafio-php/">Desafio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link <?php echo ($currentPage == '/desafio-php/index.php' || $currentPage == '/desafio-php/') ? "active" : ""; ?>" href="/desafio-php/">Home
                    <span class="visually-hidden">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($currentPage == '/desafio-php/sobre.php') ? "active" : "" ?>" href="/desafio-php/sobre.php">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/desafio-php/bootstrap.php">Exemplo de template</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php echo (strpos($currentPage, '/clientes/') !== false) ? "active" : ""; ?>" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Clientes</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item <?php echo ($currentPage == '/desafio-php/clientes/' || $currentPage == '/desafio-php/clientes/index.php') ? "active" : ""; ?>" href="/desafio-php/clientes">Listar</a>
                    <a class="dropdown-item  <?php echo ($currentPage == '/desafio-php/clientes/incluir.php') ? "active" : ""; ?>" href="/desafio-php/clientes/incluir.php">Incluir</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Buscar</a>
                </div>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-sm-2" type="search" placeholder="Digite algo ...">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        </div>
    </div>
</nav>