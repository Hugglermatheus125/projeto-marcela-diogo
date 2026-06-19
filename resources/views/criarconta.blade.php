<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login | Recomeço</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- CSS -->

</head>

<body class="bg-dark text-light">

  <div class="container py-5">

    <!-- HEADER -->
    <div class="text-center mb-5">
      <h1 class="fw-bold display-4">
        <i class="bi bi-heart-pulse-fill text-danger"></i> Recomeço
      </h1>
      <p class="text-secondary">
        Entre ou crie sua conta para continuar
      </p>
    </div>

    <div class="row g-4 justify-content-center">

      <!-- LOGIN -->
      <div class="col-lg-5">

        <div class="card bg-black border-secondary shadow-lg rounded-4">

          <div class="card-body p-4">

            <h3 class="fw-bold mb-4 text-center">
              Login
            </h3>

            <form id="loginForm">

              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Digite seu email" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control" placeholder="Digite sua senha" required>
              </div>

              <button type="submit" class="btn btn-danger w-100">
                Entrar
              </button>

            </form>

          </div>

        </div>

      </div>

      <!-- DIVISOR -->
      <div class="col-lg-1 d-flex align-items-center justify-content-center">
        <div class="text-secondary fw-bold">OU</div>
      </div>

      <!-- CADASTRO -->
      <div class="col-lg-5">

        <div class="card bg-black border-secondary shadow-lg rounded-4">

          <div class="card-body p-4">

            <h3 class="fw-bold mb-4 text-center">
              Criar Conta
            </h3>

            <form id="registerForm">

              <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" placeholder="Seu nome" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Seu email" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control" placeholder="Crie uma senha" required>
              </div>

              <button type="submit" class="btn btn-outline-light w-100">
                Criar Conta
              </button>

            </form>

          </div>

        </div>

      </div>

    </div>

    <!-- FOOTER -->
    <div class="text-center mt-5 text-secondary">
      <small>
        Ao continuar você aceita os termos do Recomeço
      </small>
    </div>

  </div>

  <!-- SCRIPT GLOBAL -->
  <script src="script.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>