<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sobre | Recomeço</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])

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

            <div class="row align-items-center">

                <div class="col-lg-6">

                    <span class="badge bg-danger p-2 mb-3">
                        Sobre a plataforma
                    </span>

                    <h1 class="display-3 fw-bold mb-4">
                        Tecnologia para transformar hábitos.
                    </h1>

                    <p class="lead text-secondary mb-4">
                        O Recomeço foi criado para ajudar pessoas que desejam recuperar o controle da própria vida
                        através de acompanhamento diário, metas e apoio emocional.
                    </p>

                    <button class="btn btn-danger btn-lg px-4">
                        Começar Agora
                    </button>

                </div>

                <div class="col-lg-6 text-center mt-5 mt-lg-0">

                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1200&auto=format&fit=crop"
                        class="img-fluid rounded-4 shadow-lg" alt="Sobre Recomeço">

                </div>

            </div>

        </div>
    </section>

    <!-- MISSÃO -->
    <section class="py-5 bg-black">
        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold display-5">
                    Nossa missão
                </h2>

                <p class="text-secondary">
                    Ajudar pessoas a criarem uma nova rotina.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-md-4">

                    <div class="card bg-dark border-secondary text-light h-100 shadow">

                        <div class="card-body text-center p-4">

                            <i class="bi bi-heart display-3 text-danger"></i>

                            <h3 class="mt-4">
                                Apoio
                            </h3>

                            <p class="text-secondary">
                                Incentivar usuários nos momentos mais difíceis da mudança.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card bg-dark border-secondary text-light h-100 shadow">

                        <div class="card-body text-center p-4">

                            <i class="bi bi-bar-chart-line display-3 text-success"></i>

                            <h3 class="mt-4">
                                Evolução
                            </h3>

                            <p class="text-secondary">
                                Mostrar o progresso diário através de gráficos e metas.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card bg-dark border-secondary text-light h-100 shadow">

                        <div class="card-body text-center p-4">

                            <i class="bi bi-shield-check display-3 text-info"></i>

                            <h3 class="mt-4">
                                Controle
                            </h3>

                            <p class="text-secondary">
                                Ajudar pessoas a retomarem o controle dos próprios hábitos.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- COMO FUNCIONA -->
    <section class="py-5">
        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold display-5">
                    Como funciona
                </h2>

                <p class="text-secondary">
                    Simples, rápido e acessível.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-4">

                    <div class="p-4 border border-secondary rounded-4 h-100 bg-black">

                        <h1 class="display-3 fw-bold text-danger">
                            01
                        </h1>

                        <h3 class="fw-bold mt-3">
                            Crie sua conta
                        </h3>

                        <p class="text-secondary">
                            Faça um cadastro rápido e personalize suas metas.
                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="p-4 border border-secondary rounded-4 h-100 bg-black">

                        <h1 class="display-3 fw-bold text-danger">
                            02
                        </h1>

                        <h3 class="fw-bold mt-3">
                            Registre hábitos
                        </h3>

                        <p class="text-secondary">
                            Marque diariamente seus avanços e dificuldades.
                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="p-4 border border-secondary rounded-4 h-100 bg-black">

                        <h1 class="display-3 fw-bold text-danger">
                            03
                        </h1>

                        <h3 class="fw-bold mt-3">
                            Veja sua evolução
                        </h3>

                        <p class="text-secondary">
                            Acompanhe metas, economia e progresso pessoal.
                        </p>

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
                    Seu recomeço pode começar hoje.
                </h2>

                <p class="lead mb-4">
                    Pequenas mudanças diárias criam grandes resultados.
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