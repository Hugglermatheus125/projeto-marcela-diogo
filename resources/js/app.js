import './bootstrap';

document.addEventListener("DOMContentLoaded", () => {

    // =========================
    // 🧠 FUNÇÕES BASE
    // =========================
    function getUser() {
        return JSON.parse(localStorage.getItem("user"));
    }

    function saveUser(user) {
        localStorage.setItem("user", JSON.stringify(user));
    }

    // =========================
    // 🔐 CONTROLE DE SESSÃO
    // =========================
    const currentPage = window.location.pathname.split("/").pop();
    const logado = localStorage.getItem("logado");

    const protectedPages = [
        "perfil.html",
        "metas.html",
        "sobre.html",
        "contato.html",
        "usuario.html"
    ];

    // 🔴 bloqueia páginas protegidas sem login
    if (protectedPages.includes(currentPage)) {
        if (logado !== "true") {
            window.location.href = "criarconta.html";
        }
    }

    // 🟢 impede voltar para login/criar conta se já logado
    if (logado === "true" && (currentPage === "criarconta.html" || currentPage === "auth.html")) {
        window.location.href = "perfil.html";
    }

    // =========================
    // 📝 CRIAR CONTA
    // =========================
    const registerForm = document.getElementById("registerForm");

    if (registerForm) {
        registerForm.addEventListener("submit", (e) => {
            e.preventDefault();

            const inputs = registerForm.querySelectorAll("input");

            const nome = inputs[0].value;
            const email = inputs[1].value;
            const senha = inputs[2].value;

            const user = {
                nome,
                email,
                senha,

                // 🎯 metas iniciais (Começam em 0% para o novo usuário)
                metas: {
                    alcool: 0,
                    cigarro: 0,
                    jogo: 0,
                    balada: 0
                }
            };

            saveUser(user);

            alert("Conta criada com sucesso! Faça login para continuar.");

            window.location.href = "criarconta.html";
        });
    }

    // =========================
    // 🔑 LOGIN
    // =========================
    const loginForm = document.getElementById("loginForm");

    if (loginForm) {
        loginForm.addEventListener("submit", (e) => {
            e.preventDefault();

            const inputs = loginForm.querySelectorAll("input");

            const email = inputs[0].value;
            const senha = inputs[1].value;

            const user = getUser();

            if (!user) {
                alert("Nenhuma conta encontrada. Crie uma conta primeiro.");
                return;
            }

            if (email === user.email && senha === user.senha) {

                localStorage.setItem("logado", "true");

                alert("Login realizado com sucesso!");

                window.location.href = "perfil.html";

            } else {
                alert("Email ou senha incorretos.");
            }
        });
    }

    // =========================
    // 🚪 LOGOUT
    // =========================
    const logoutBtn = document.getElementById("logoutBtn");

    if (logoutBtn) {
        logoutBtn.addEventListener("click", () => {

            localStorage.removeItem("logado");

            alert("Você saiu da conta.");

            window.location.href = "criarconta.html";
        });
    }

    // =========================
    // 📊 METAS DINÂMICAS & CLIQUES (metas.html)
    // =========================
    const user = getUser();

    if (user && currentPage === "metas.html") {

        // Captura todos os botões de "+1 Dia Sem" na página de metas
        const botoesRegistrar = document.querySelectorAll(".btn-registrar");
        
        if (botoesRegistrar.length > 0) {
            botoesRegistrar.forEach(botao => {
                botao.addEventListener("click", (e) => {
                    // Descobre qual vício o botão clicado representa
                    const vicio = e.target.getAttribute("data-vicio");
                    
                    if (user.metas[vicio] !== undefined) {
                        if (user.metas[vicio] < 100) {
                            // Incrementa 5% a cada clique até o limite de 100%
                            user.metas[vicio] = Math.min(user.metas[vicio] + 5, 100);
                            saveUser(user);
                            alert(`Progresso em "${vicio.toUpperCase()}" atualizado! Novo valor: ${user.metas[vicio]}%`);
                        } else {
                            alert("Você já atingiu o progresso máximo (100%) para esta meta!");
                        }
                    }
                });
            });
        }

        // Botão opcional para limpar dados de progresso e voltar ao zero
        const btnReset = document.getElementById("resetProgresso");
        if (btnReset) {
            btnReset.addEventListener("click", () => {
                if (confirm("Deseja redefinir todo o seu progresso atual para 0%?")) {
                    user.metas = { alcool: 0, cigarro: 0, jogo: 0, balada: 0 };
                    saveUser(user);
                    location.reload();
                }
            });
        }
    }

    // =========================
    // 👤 PERFIL (perfil.html)
    // =========================
    if (user && currentPage === "perfil.html") {

        const nameEl = document.getElementById("userName");
        const emailEl = document.getElementById("userEmail");

        if (nameEl) nameEl.innerText = user.nome;
        if (emailEl) emailEl.innerText = user.email;
    }

    // =========================
    // ✏️ EDIÇÃO USUÁRIO & PROGRESSO (usuario.html)
    // =========================
    if (user && currentPage === "usuario.html") {

        // Renderiza os dados cadastrais nos inputs
        const nomeInput = document.getElementById("nome");
        const emailInput = document.getElementById("email");

        if (nomeInput) nomeInput.value = user.nome;
        if (emailInput) emailInput.value = user.email;

        // Renderiza dinamicamente as barras de progresso do usuário logado
        const atualizarBarrasDeProgresso = () => {
            const chavesMetas = {
                alcool: "bar-alcool",
                cigarro: "bar-cigarro",
                jogo: "bar-apostas",      // mapeia chave interna 'jogo' para o id 'bar-apostas' do HTML
                balada: "bar-casas_noturnas" // mapeia chave interna 'balada' para o id 'bar-casas_noturnas'
            };

            Object.keys(chavesMetas).forEach(chave => {
                const idElemento = chavesMetas[chave];
                const barra = document.getElementById(idElemento);
                
                if (barra && user.metas && user.metas[chave] !== undefined) {
                    const valorProgresso = user.metas[chave];
                    barra.style.width = `${valorProgresso}%`;
                    barra.setAttribute("aria-valuenow", valorProgresso);
                    barra.innerText = `${valorProgresso}%`;
                }
            });
        };

        // Executa a atualização visual das barras ao abrir a tela de usuário
        atualizarBarrasDeProgresso();

        window.salvarDados = function () {

            user.nome = nomeInput.value;
            user.email = emailInput.value;

            saveUser(user);

            alert("Dados atualizados com sucesso!");
        };
    }

    // =========================
    // 🔁 BLOQUEIO DE LINK LOGIN SE LOGADO
    // =========================
    const authLinks = document.querySelectorAll('a[href="auth.html"], a[href="criarconta.html"]');

    authLinks.forEach(link => {
        link.addEventListener("click", (e) => {

            if (localStorage.getItem("logado") === "true") {
                e.preventDefault();
                window.location.href = "perfil.html";
            }

        });
    });

});