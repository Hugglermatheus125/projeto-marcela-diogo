<!DOCTYPE html>
<html lang="pt-BR" style="height: 100%; margin: 0; padding: 0;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metas | Recomeço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-dark text-light" style="min-height: 100%; margin: 0; padding: 0; position: relative; padding-bottom: 96px;">

    <nav class="navbar navbar-expand-lg navbar-dark bg-black border-bottom border-secondary" style="backdrop-filter: blur(12px); background: rgba(0,0,0,0.9) !important; padding: 18px 0;">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3 text-white" href="{{ route('inicio') }}" style="letter-spacing: 1px;">
                <i class="bi bi-heart-pulse-fill text-danger"></i> Recomeço
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white-50" href="{{ route('inicio') }}">Início</a></li>
                    <li class="nav-item"><a class="nav-link text-white-50" href="{{ route('sobre') }}">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link active text-white fw-bold" href="{{ route('metas') }}">Metas</a></li>
                    <li class="nav-item"><a class="nav-link text-white-50" href="{{ route('contato') }}">Contato</a></li>
                    <li class="nav-item"><a class="nav-link text-white-50" href="{{ route('usuario') }}">Usuário</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge bg-danger p-2 mb-3" style="font-size: 14px; border-radius: 50px; letter-spacing: 1px;">Suas Metas</span>
                <h1 class="display-4 fw-bold text-white">Registrar Progresso</h1>
                <p class="text-secondary lead text-white-50">Selecione abaixo para registrar mais um período de vitória sobre seus vícios.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-3">
                    <div class="card bg-black border-secondary text-center p-4 h-100" style="background: rgba(20,20,20,0.85) !important; border: 1px solid rgba(255,255,255,0.08) !important; border-radius: 20px !important;">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <i class="bi bi-glass-trinket display-3 text-danger"></i>
                                <h3 class="mt-3 text-white fw-bold">Álcool</h3>
                                <p class="text-white-50 mt-2" style="font-size: 15px;">Registrar evolução diária.</p>
                            </div>
                            <button class="btn btn-danger mt-4 btn-registrar" data-vicio="alcool" style="border-radius: 12px; padding: 12px 28px; font-weight: 600;">+1 Dia Sem</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-black border-secondary text-center p-4 h-100" style="background: rgba(20,20,20,0.85) !important; border: 1px solid rgba(255,255,255,0.08) !important; border-radius: 20px !important;">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <i class="bi bi-capsule display-3 text-info"></i>
                                <h3 class="mt-3 text-white fw-bold">Cigarro</h3>
                                <p class="text-white-50 mt-2" style="font-size: 15px;">Registrar evolução diária.</p>
                            </div>
                            <button class="btn btn-info text-dark mt-4 btn-registrar" data-vicio="cigarro" style="border-radius: 12px; padding: 12px 28px; font-weight: 600;">+1 Dia Sem</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-black border-secondary text-center p-4 h-100" style="background: rgba(20,20,20,0.85) !important; border: 1px solid rgba(255,255,255,0.08) !important; border-radius: 20px !important;">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <i class="bi bi-dice-5 display-3 text-warning"></i>
                                <h3 class="mt-3 text-white fw-bold">Apostas</h3>
                                <p class="text-white-50 mt-2" style="font-size: 15px;">Registrar evolução diária.</p>
                            </div>
                            <button class="btn btn-warning text-dark mt-4 btn-registrar" data-vicio="jogo" style="border-radius: 12px; padding: 12px 28px; font-weight: 600;">+1 Dia Sem</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-black border-secondary text-center p-4 h-100" style="background: rgba(20,20,20,0.85) !important; border: 1px solid rgba(255,255,255,0.08) !important; border-radius: 20px !important;">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <i class="bi bi-music-note-beamed display-3 text-success"></i>
                                <h3 class="mt-3 text-white fw-bold">Casas Noturnas</h3>
                                <p class="text-white-50 mt-2" style="font-size: 15px;">Registrar evolução diária.</p>
                            </div>
                            <button class="btn btn-success text-dark mt-4 btn-registrar" data-vicio="balada" style="border-radius: 12px; padding: 12px 28px; font-weight: 600;">+1 Dia Sem</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <button class="btn btn-outline-light btn-sm" id="resetProgresso" style="border-radius: 12px;">Reiniciar Progresso Inicial</button>
            </div>
        </div>
    </section>

    <footer class="border-top border-secondary py-4" style="background: #000 !important; position: absolute; bottom: 0; left: 0; width: 100%; height: 96px;">
        <div class="container text-center">
            <h5 class="fw-bold text-white mb-1">
                <i class="bi bi-heart-pulse-fill text-danger"></i> Recomeço
            </h5>
            <p class="text-white-50 mb-0" style="font-size: 14px;">
                © 2026 - Plataforma de apoio e recuperação pessoal.
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>