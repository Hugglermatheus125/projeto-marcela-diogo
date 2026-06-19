<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contato | Recomeço</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-dark text-light">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black border-bottom border-secondary">
        <div class="container">

            <a class="navbar-brand fw-bold fs-3" href="#">
                <i class="bi bi-heart-pulse-fill text-danger"></i> Recomeço
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Início</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="sobre.html">Sobre</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="metas.html">Metas</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contato.html">Contato</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="criarconta.html">Usuário</a>
                      </li>

                </ul>
            </div>

        </div>
    </nav>

    <!-- HERO -->
    <section class="py-5">
        <div class="container">

            <div class="text-center mb-5">

                <span class="badge bg-danger p-2 mb-3">
                    Entre em contato
                </span>

                <h1 class="display-3 fw-bold">
                    Estamos aqui para ajudar.
                </h1>

                <p class="lead text-secondary mt-3">
                    Tire dúvidas, envie sugestões ou converse com nossa equipe.
                </p>

            </div>

            <div class="row g-5 align-items-center">

                <!-- FORM -->
                <div class="col-lg-7">

                    <div class="card bg-black border-secondary shadow-lg rounded-4">

                        <div class="card-body p-5">

                            <h3 class="fw-bold mb-4">
                                Envie uma mensagem
                            </h3>

                            <form>

                                <div class="row">

                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">Nome</label>

                                        <input type="text" class="form-control bg-dark text-light border-secondary"
                                            placeholder="Seu nome">
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">Email</label>

                                        <input type="email" class="form-control bg-dark text-light border-secondary"
                                            placeholder="seuemail@gmail.com">
                                    </div>

                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Assunto</label>

                                    <input type="text" class="form-control bg-dark text-light border-secondary"
                                        placeholder="Digite o assunto">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Mensagem</label>

                                    <textarea rows="6" class="form-control bg-dark text-light border-secondary"
                                        placeholder="Digite sua mensagem..."></textarea>
                                </div>

                                <button class="btn btn-danger btn-lg px-5">
                                    Enviar Mensagem
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

                <!-- INFO -->
                <div class="col-lg-5">

                    <div class="p-4">

                        <h2 class="fw-bold mb-4">
                            Informações
                        </h2>

                        <div class="mb-4">

                            <h5>
                                <i class="bi bi-envelope-fill text-danger"></i>
                                Email
                            </h5>

                            <p class="text-secondary">
                                contato@recomeco.com
                            </p>

                        </div>

                        <div class="mb-4">

                            <h5>
                                <i class="bi bi-telephone-fill text-danger"></i>
                                Telefone
                            </h5>

                            <p class="text-secondary">
                                (11) 99999-9999
                            </p>

                        </div>

                        <div class="mb-4">

                            <h5>
                                <i class="bi bi-geo-alt-fill text-danger"></i>
                                Localização
                            </h5>

                            <p class="text-secondary">
                                São Paulo - Brasil
                            </p>

                        </div>

                        <div class="mt-5">

                            <h4 class="fw-bold mb-3">
                                Redes sociais
                            </h4>

                            <div class="d-flex gap-3">

                                <button class="btn btn-outline-light">
                                    <i class="bi bi-instagram"></i>
                                </button>

                                <button class="btn btn-outline-light">
                                    <i class="bi bi-facebook"></i>
                                </button>

                                <button class="btn btn-outline-light">
                                    <i class="bi bi-twitter-x"></i>
                                </button>

                                <button class="btn btn-outline-light">
                                    <i class="bi bi-whatsapp"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="py-5">
        <div class="container">

            <div class="bg-danger rounded-4 p-5 text-center shadow-lg">

                <h2 class="display-5 fw-bold mb-3">
                    Você não está sozinho.
                </h2>

                <p class="lead mb-4">
                    Cada passo conta na construção de uma nova vida.
                </p>

                <a href="criarconta.html" class="btn btn-light btn-lg px-5 fw-bold">
                    Criar Conta
                </a>

            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-black border-top border-secondary py-4">

        <div class="container text-center">

            <h5 class="fw-bold">
                <i class="bi bi-heart-pulse-fill text-danger"></i> Recomeço
            </h5>

            <p class="text-secondary mb-0">
                © 2026 - Plataforma de apoio e recuperação pessoal.
            </p>

        </div>

    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

</body>

</html>