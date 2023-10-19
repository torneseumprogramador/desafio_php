<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Desafio PHP</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/assets/css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Desafio de PHP com Slim</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="/pedidos">Pedidos</a></li>
                            <li class="nav-item"><a class="nav-link" href="/clientes">Clientes</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </main>

        <?php echo $conteudo ?>

        <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Sobre o projeto</span></h2>
                                <p class="text-muted">
                                    Este software foi desenvolvido ao vivo, em colaboração direta com os alunos dedicados da comunidade <strong>"Torne-se um Programador"</strong>. Foi uma experiência incrível de aprendizado coletivo e interação em tempo real.
                                </p>
                                <p class="text-muted">
                                    Se você perdeu a sessão ao vivo ou deseja revisitar o treinamento, pode <a href="https://www.torneseumprogramador.com.br/cursos/desafio_php/aulas" target="_blank" rel="noopener noreferrer">assistir à gravação do treinamento aqui</a>.
                                </p>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                    <a class="text-gradient" href="https://twitter.com/didox" target="_blank"><i class="bi bi-twitter"></i></a>
                                    <a class="text-gradient" href="https://www.linkedin.com/in/danilo-aparecido-dos-santos-03101034/" target="_blank"><i class="bi bi-linkedin"></i></a>
                                    <a class="text-gradient" href="https://github.com/torneseumprogramador/desafio_php" target="_blank"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Torne-se um programador 2023</div></div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/assets/js/scripts.js"></script>
    </body>
</html>
