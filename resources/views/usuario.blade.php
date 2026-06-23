<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Meu Perfil | Recomeço</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  </head>

<body class="bg-dark text-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-black border-bottom border-secondary">
  <div class="container">

    <a class="navbar-brand fw-bold fs-3" href="{{ route('inicio') }}">
      <i class="bi bi-heart-pulse-fill text-danger"></i> Recomeço
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link" href="{{ route('inicio') }}">Início</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('sobre') }}">Sobre</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('metas') }}">Metas</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('contato') }}">Contato</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" href="{{ route('usuario') }}">Usuário</a>
        </li>

        <li class="nav-item">
          <button id="logoutBtn" class="btn btn-outline-light btn-sm ms-3 mt-1">
            Sair
          </button>
        </li>

      </ul>
    </div>

  </div>
</nav>

<section class="py-5">
  <div class="container">

    <div class="text-center mb-5">

      <h1 class="display-4 fw-bold">
        <i class="bi bi-person-circle text-danger"></i> Meu Perfil
      </h1>

      <p class="text-secondary">
        Aqui está o resumo da sua jornada de transformação
      </p>

    </div>

    <div class="row g-4">

      <div class="col-lg-4">

        <div class="card bg-black border-secondary shadow-lg rounded-4 h-100">

          <div class="card-body text-center d-flex flex-column justify-content-center">

            <i class="bi bi-person-badge display-1 text-danger"></i>

            <h3 class="mt-3" id="userName">
              Usuário
            </h3>

            <p class="text-secondary" id="userEmail">
              email@exemplo.com
            </p>

            <hr class="border-secondary">

            <p class="text-secondary mb-1">
              Status: <span class="text-success fw-bold">Ativo</span>
            </p>

            <p class="text-secondary mb-0">
              Membro desde: <span class="text-light">Hoje</span>
            </p>

          </div>

        </div>

      </div>

      <div class="col-lg-8">

        <div class="card bg-black border-secondary shadow-lg rounded-4 h-100">

          <div class="card-body">

            <h3 class="fw-bold mb-4">
              Seu Progresso Geral
            </h3>

            <p class="text-secondary mb-1">Álcool</p>
            <div class="progress mb-3 bg-dark">
              <div id="bar-alcool" class="progress-bar bg-danger" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
            </div>

            <p class="text-secondary mb-1">Cigarro</p>
            <div class="progress mb-3 bg-dark">
              <div id="bar-cigarro" class="progress-bar bg-info text-dark fw-bold" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
            </div>

            <p class="text-secondary mb-1">Apostas</p>
            <div class="progress mb-3 bg-dark">
              <div id="bar-apostas" class="progress-bar bg-warning text-dark fw-bold" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
            </div>

            <p class="text-secondary mb-1">Casas Noturnas</p>
            <div class="progress bg-dark">
              <div id="bar-casas_noturnas" class="progress-bar bg-success text-dark fw-bold" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="row g-4 mt-2">

      <div class="col-lg-6">

        <div class="card bg-black border-secondary shadow-lg rounded-4 h-100">

          <div class="card-body">

            <h3 class="fw-bold mb-4">
              <i class="bi bi-trophy-fill text-warning"></i> Conquistas
            </h3>

            <ul class="list-unstyled text-secondary">

              <li class="mb-3">
                🏆 7 dias sem álcool
              </li>

              <li class="mb-3">
                🏆 Primeira meta concluída
              </li>

              <li class="mb-3">
                🏆 100 reais economizados
              </li>

              <li class="mb-3">
                🏆 Controle inicial conquistado
              </li>

            </ul>

          </div>

        </div>

      </div>

      <div class="col-lg-6">

        <div class="card bg-black border-secondary shadow-lg rounded-4 h-100">

          <div class="card-body">

            <h3 class="fw-bold mb-4">
              <i class="bi bi-bullseye text-danger"></i> Próximos Objetivos
            </h3>

            <ul class="list-unstyled text-secondary">

              <li class="mb-3">
                🔥 15 dias sem cigarro
              </li>

              <li class="mb-3">
                🔥 Reduzir gastos com apostas
              </li>

              <li class="mb-3">
                🔥 30 dias sem álcool
              </li>

              <li class="mb-3">
                🔥 Manter rotina estável
              </li>

            </ul>

          </div>

        </div>

      </div>

    </div>

  </div>
</section>

<section class="py-5">
  <div class="container">

    <div class="bg-danger rounded-4 p-5 text-center shadow-lg">

      <h2 class="fw-bold mb-3">
        Continue evoluindo, um dia de cada vez.
      </h2>

      <p class="lead mb-4">
        Sua jornada ainda está no começo.
      </h2>

      <a href="{{ route('metas') }}" class="btn btn-light btn-lg fw-bold px-5">
        Ver Metas
      </a>

    </div>

  </div>
</section>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>