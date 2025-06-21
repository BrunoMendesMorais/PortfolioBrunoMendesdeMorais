const seletor = document.getElementById('seletor');
const modo = document.getElementById('modo');
const body = document.getElementById('body');
const sol = document.getElementById('sol');
const lua = document.getElementById('lua');

const tema = verificarOuDefinirTema();
document.body.classList.add(tema);

modo.addEventListener('click', mudarModo);

function mudarModo() {
    if (body.classList == 'escuro') {
        body.classList.remove('escuro');
        body.classList.add('claro');
        localStorage.setItem('tema', 'claro');
    }
    else {
        body.classList.remove('claro');
        body.classList.add('escuro');
         localStorage.setItem('tema', 'escuro');
    }
}

const list = document.getElementById("list");
const cortina = document.getElementById("cortina");
const navegacaoLateral = document.getElementById("navegacaoLateral");

list.addEventListener("click", listar);

function listar() {
    if (list.classList == 'list') {
        list.classList.remove('list');
        list.classList.add('x');
        cortina.classList.add("cortina");
        navegacaoLateral.style.transform = "translateX(0%)";
    }
    else {
        list.classList.remove('x');
        list.classList.add('list');
        cortina.classList.remove("cortina");
        navegacaoLateral.style.transform = "translateX(-100%)";

    }
}

function verificarOuDefinirTema() {
    const temaSalvo = localStorage.getItem('tema');

    if (temaSalvo) {
        return temaSalvo;
    }
    const temaDetectado = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'escuro' : 'claro';
    localStorage.setItem('tema', temaDetectado);
    return temaDetectado;
}

window.addEventListener('load', () => {
    document.body.classList.remove('sem-transicao');
});