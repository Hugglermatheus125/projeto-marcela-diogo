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

                // 🎯 metas iniciais
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
    // 📊 METAS DINÂMICAS (metas.html)
    // =========================
    const user = getUser();

    if (user && currentPage === "metas.html") {

        const set = (id, value) => {
            const el = document.getElementById(id);
            if (el) el.innerText = value + "%";
        };

        set("alcool", user.metas.alcool);
        set("cigarro", user.metas.cigarro);
        set("jogo", user.metas.jogo);
        set("balada", user.metas.balada);
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
    // ✏️ EDIÇÃO USUÁRIO (usuario.html)
    // =========================
    if (user && currentPage === "usuario.html") {

        const nomeInput = document.getElementById("nome");
        const emailInput = document.getElementById("email");

        if (nomeInput) nomeInput.value = user.nome;
        if (emailInput) emailInput.value = user.email;

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