<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>Recomeço</title>

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
      <div class="row align-items-center min-vh-75">

        <div class="col-lg-6">
          <span class="badge bg-danger mb-3 p-2">
            Plataforma de recuperação pessoal
          </span>

          <h1 class="display-3 fw-bold mb-4">
            Um novo começo começa hoje.
          </h1>

          <p class="lead text-secondary mb-4">
            Controle hábitos, acompanhe sua evolução e reconstrua sua rotina com ajuda da tecnologia.
          </p>

          <div class="d-flex gap-3">
            <a href="sobre.html" class="btn btn-danger">
              Sobre
            </a>

            <a href="criarconta.html" class="btn btn-light">
              Começar Agora
            </a>

          </div>
        </div>

        <div class="col-lg-6 text-center mt-5 mt-lg-0">
          <img 
            src="https://images.unsplash.com/photo-1516302752625-fcc3c50ae61f?q=80&w=1200&auto=format&fit=crop"
            class="img-fluid rounded-4 shadow-lg"
            alt="Recomeço"
          >
        </div>

      </div>
    </div>
  </section>

  <!-- CARDS -->
  <section class="py-5">
    <div class="container">

      <div class="text-center mb-5">
        <h2 class="fw-bold">Como o site ajuda você</h2>
        <p class="text-secondary">
          Ferramentas simples para evolução diária.
        </p>
      </div>

      <div class="row g-4">

        <div class="col-md-3">
          <div class="card bg-black text-light border-secondary h-100 shadow">
            <div class="card-body text-center">
              <i class="bi bi-graph-up-arrow display-4 text-danger"></i>

              <h4 class="mt-3">Progresso</h4>

              <p class="text-secondary">
                Veja sua evolução diariamente.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card bg-black text-light border-secondary h-100 shadow">
            <div class="card-body text-center">
              <i class="bi bi-piggy-bank display-4 text-success"></i>

              <h4 class="mt-3">Economia</h4>

              <p class="text-secondary">
                Descubra quanto dinheiro foi economizado.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card bg-black text-light border-secondary h-100 shadow">
            <div class="card-body text-center">
              <i class="bi bi-bullseye display-4 text-warning"></i>

              <h4 class="mt-3">Metas</h4>

              <p class="text-secondary">
                Crie desafios e acompanhe resultados.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card bg-black text-light border-secondary h-100 shadow">
            <div class="card-body text-center">
              <i class="bi bi-shield-heart display-4 text-info"></i>

              <h4 class="mt-3">Apoio</h4>

              <p class="text-secondary">
                Receba incentivo nos momentos difíceis.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- CALL TO ACTION -->
  <section class="py-5">
    <div class="container">

      <div class="bg-danger rounded-4 p-5 text-center shadow-lg">

        <h2 class="fw-bold display-5 mb-3">
          Você não precisa mudar sozinho.
        </h2>

        <p class="lead mb-4">
          Comece hoje a construir uma rotina melhor.
        </p>

        <a href="criarconta.html" class="btn btn-light btn-lg px-5 fw-bold">
          Criar Conta
        </a>

      </div>

    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-black border-top border-secondary py-4 mt-5">
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