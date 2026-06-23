<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login | Recomeço</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-dark text-light">

  <div class="container py-5">

    <div class="text-center mb-5">
      <a href="{{ route('inicio') }}" class="text-decoration-none">
        <h1 class="fw-bold display-4 text-light">
          <i class="bi bi-heart-pulse-fill text-danger"></i> Recomeço
        </h1>
      </a>
      <p class="text-secondary">
        Entre ou crie sua conta para continuar
      </p>
    </div>

    <div class="row g-4 justify-content-center">

      <div class="col-lg-5">

        <div class="card bg-black border-secondary shadow-lg rounded-4 h-100">

          <div class="card-body p-4">

            <h3 class="fw-bold mb-4 text-center">
              Login
            </h3>

            <form action="{{ route('criarconta') }}" method="POST">
              @csrf
              
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control bg-dark text-light border-secondary" placeholder="Digite seu email" name="email" required>
              </div>

              <div class="mb-4">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control bg-dark text-light border-secondary" placeholder="Digite sua senha" name="senha" required>
              </div>

              <button type="submit" class="btn btn-danger w-100">
                Entrar
              </button>

            </form>

          </div>

        </div>

      </div>

      <div class="col-lg-1 d-flex align-items-center justify-content-center py-4 py-lg-0">
        <div class="text-secondary fw-bold">OU</div>
      </div>

      <div class="col-lg-5">

        <div class="card bg-black border-secondary shadow-lg rounded-4 h-100">

          <div class="card-body p-4">

            <h3 class="fw-bold mb-4 text-center">
              Criar Conta
            </h3>

            <form action="{{ route('criarconta') }}" method="POST">
              @csrf
              
              <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control bg-dark text-light border-secondary" placeholder="Seu nome" name="nome" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control bg-dark text-light border-secondary" placeholder="Seu email" name="email" required>
              </div>

              <div class="mb-4">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control bg-dark text-light border-secondary" placeholder="Crie uma senha" name="senha" required>
              </div>

              <button type="submit" class="btn btn-outline-light w-100">
                Criar Conta
              </button>

            </form>

          </div>

        </div>

      </div>

    </div>

    <div class="text-center mt-5 text-secondary">
      <small>
        Ao continuar você aceita os termos do Recomeço
      </small>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>