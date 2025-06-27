<?= $this->extend('partials/user') ?>

<?= $this->section('head') ?>

<link rel="stylesheet" href="css/DetalhesDoSite.css">
<?= $this->endsection('head') ?>


<?= $this->section('conteudo') ?>

<main>
    <section id="informacaoProjeto">
        <img src="img/projetos/projeto1.png" alt="">
        <h2>PORTIFOLIO DE BRUNO MENDES DE MORAIS</h2>
        <p>ESTE PROJETO FOI DESENVOLVIDO PARA FACILITAR A DIVULGAÇÃO DE MEUS PROJETOS</p>
        <nav id="Ver">
            VER MAIS:
            <div>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <rect width="256" height="256" fill="none" />
                        <path d="M119.83,56A52,52,0,0,0,76,32a51.92,51.92,0,0,0-3.49,44.7A49.28,49.28,0,0,0,64,104v8a48,48,0,0,0,48,48h48a48,48,0,0,0,48-48v-8a49.28,49.28,0,0,0-8.51-27.3A51.92,51.92,0,0,0,196,32a52,52,0,0,0-43.83,24Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <path d="M104,232V192a32,32,0,0,1,32-32h0a32,32,0,0,1,32,32v40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <path d="M104,208H72a32,32,0,0,1-32-32A32,32,0,0,0,8,144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    </svg>
                    GIT HUB
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <rect width="256" height="256" fill="none" />
                        <rect x="32" y="48" width="192" height="160" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <line x1="32" y1="96" x2="224" y2="96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    </svg>
                    SITE
                </a>
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <rect width="256" height="256" fill="none" />
                        <circle cx="168" cy="128" r="32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <path d="M136,96h32a32,32,0,0,0,0-64H136" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <path d="M136,32H96a32,32,0,0,0,0,64h40Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <path d="M136,96H96a32,32,0,0,0,0,64h40Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <path d="M136,160H100a36,36,0,1,0,36,36Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    </svg> FIGMA</a>
            </div>
        </nav>
        <section>
            <h3>Oque foi usado</h3>
            <div>
                <article>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                        <path fill="#EE4323" d="M89.708 48.868l-.758-.414c.399.964.529 1.786.515 2.521a8.627 8.627 0 00.248-1.847 8.22 8.22 0 01-.273 2.231l.025-.385a8.52 8.52 0 01-1.074 2.558l.235-.25c-2.88 4.819-10.737 5.872-14.612.895-6.22-7.99.128-16.604 1.017-25.065 1.111-10.604-5.538-20.899-13.783-27.06 4.541 7.346-1.442 17.066-6.229 22.498-4.642 5.269-10.286 9.667-15.41 14.451-5.503 5.143-10.797 10.555-15.319 16.588-9.049 12.074-14.59 27.26-10.518 42.325 4.068 15.056 17.108 24.639 31.834 28.027-7.429-3.212-14.381-11.373-14.397-19.723-.019-9.106 5.75-16.835 12.927-21.914-.863 3.259-1.334 6.24.803 9.155 1.988 2.711 5.468 4.027 8.753 3.312 7.679-1.679 8.03-10.12 3.479-15.038-4.501-4.868-8.855-10.371-7.143-17.433.858-3.54 3.032-6.854 5.787-9.226-2.118 5.563 3.897 11.049 7.859 13.779 6.876 4.741 14.416 8.325 20.738 13.881 6.648 5.84 11.559 13.736 10.567 22.896-1.076 9.927-8.964 16.832-17.811 20.317 18.696-4.128 38.018-18.639 38.411-39.376.329-17.058-11.373-30.187-25.871-37.703z" />
                    </svg>
                    codeigniter
                </article>
                <article>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                        <path fill="#EE4323" d="M89.708 48.868l-.758-.414c.399.964.529 1.786.515 2.521a8.627 8.627 0 00.248-1.847 8.22 8.22 0 01-.273 2.231l.025-.385a8.52 8.52 0 01-1.074 2.558l.235-.25c-2.88 4.819-10.737 5.872-14.612.895-6.22-7.99.128-16.604 1.017-25.065 1.111-10.604-5.538-20.899-13.783-27.06 4.541 7.346-1.442 17.066-6.229 22.498-4.642 5.269-10.286 9.667-15.41 14.451-5.503 5.143-10.797 10.555-15.319 16.588-9.049 12.074-14.59 27.26-10.518 42.325 4.068 15.056 17.108 24.639 31.834 28.027-7.429-3.212-14.381-11.373-14.397-19.723-.019-9.106 5.75-16.835 12.927-21.914-.863 3.259-1.334 6.24.803 9.155 1.988 2.711 5.468 4.027 8.753 3.312 7.679-1.679 8.03-10.12 3.479-15.038-4.501-4.868-8.855-10.371-7.143-17.433.858-3.54 3.032-6.854 5.787-9.226-2.118 5.563 3.897 11.049 7.859 13.779 6.876 4.741 14.416 8.325 20.738 13.881 6.648 5.84 11.559 13.736 10.567 22.896-1.076 9.927-8.964 16.832-17.811 20.317 18.696-4.128 38.018-18.639 38.411-39.376.329-17.058-11.373-30.187-25.871-37.703z" />
                    </svg>
                    codeigniter
                </article>
                <article>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                        <path fill="#EE4323" d="M89.708 48.868l-.758-.414c.399.964.529 1.786.515 2.521a8.627 8.627 0 00.248-1.847 8.22 8.22 0 01-.273 2.231l.025-.385a8.52 8.52 0 01-1.074 2.558l.235-.25c-2.88 4.819-10.737 5.872-14.612.895-6.22-7.99.128-16.604 1.017-25.065 1.111-10.604-5.538-20.899-13.783-27.06 4.541 7.346-1.442 17.066-6.229 22.498-4.642 5.269-10.286 9.667-15.41 14.451-5.503 5.143-10.797 10.555-15.319 16.588-9.049 12.074-14.59 27.26-10.518 42.325 4.068 15.056 17.108 24.639 31.834 28.027-7.429-3.212-14.381-11.373-14.397-19.723-.019-9.106 5.75-16.835 12.927-21.914-.863 3.259-1.334 6.24.803 9.155 1.988 2.711 5.468 4.027 8.753 3.312 7.679-1.679 8.03-10.12 3.479-15.038-4.501-4.868-8.855-10.371-7.143-17.433.858-3.54 3.032-6.854 5.787-9.226-2.118 5.563 3.897 11.049 7.859 13.779 6.876 4.741 14.416 8.325 20.738 13.881 6.648 5.84 11.559 13.736 10.567 22.896-1.076 9.927-8.964 16.832-17.811 20.317 18.696-4.128 38.018-18.639 38.411-39.376.329-17.058-11.373-30.187-25.871-37.703z" />
                    </svg>
                    codeigniter
                </article>
                <article>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                        <path fill="#EE4323" d="M89.708 48.868l-.758-.414c.399.964.529 1.786.515 2.521a8.627 8.627 0 00.248-1.847 8.22 8.22 0 01-.273 2.231l.025-.385a8.52 8.52 0 01-1.074 2.558l.235-.25c-2.88 4.819-10.737 5.872-14.612.895-6.22-7.99.128-16.604 1.017-25.065 1.111-10.604-5.538-20.899-13.783-27.06 4.541 7.346-1.442 17.066-6.229 22.498-4.642 5.269-10.286 9.667-15.41 14.451-5.503 5.143-10.797 10.555-15.319 16.588-9.049 12.074-14.59 27.26-10.518 42.325 4.068 15.056 17.108 24.639 31.834 28.027-7.429-3.212-14.381-11.373-14.397-19.723-.019-9.106 5.75-16.835 12.927-21.914-.863 3.259-1.334 6.24.803 9.155 1.988 2.711 5.468 4.027 8.753 3.312 7.679-1.679 8.03-10.12 3.479-15.038-4.501-4.868-8.855-10.371-7.143-17.433.858-3.54 3.032-6.854 5.787-9.226-2.118 5.563 3.897 11.049 7.859 13.779 6.876 4.741 14.416 8.325 20.738 13.881 6.648 5.84 11.559 13.736 10.567 22.896-1.076 9.927-8.964 16.832-17.811 20.317 18.696-4.128 38.018-18.639 38.411-39.376.329-17.058-11.373-30.187-25.871-37.703z" />
                    </svg>
                    codeigniter
                </article>
            </div>
        </section>
        <nav id="linkVideo">
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#FF0033" viewBox="0 0 256 256">
                    <path d="M234.33,69.52a24,24,0,0,0-14.49-16.4C185.56,39.88,131,40,128,40s-57.56-.12-91.84,13.12a24,24,0,0,0-14.49,16.4C19.08,79.5,16,97.74,16,128s3.08,48.5,5.67,58.48a24,24,0,0,0,14.49,16.41C69,215.56,120.4,216,127.34,216h1.32c6.94,0,58.37-.44,91.18-13.11a24,24,0,0,0,14.49-16.41c2.59-10,5.67-28.22,5.67-58.48S236.92,79.5,234.33,69.52Zm-73.74,65-40,28A8,8,0,0,1,108,156V100a8,8,0,0,1,12.59-6.55l40,28a8,8,0,0,1,0,13.1Z"></path>
                </svg>
                APRESENTAÇÃO RAPIDA
            </a>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#FF0033" viewBox="0 0 256 256">
                    <path d="M234.33,69.52a24,24,0,0,0-14.49-16.4C185.56,39.88,131,40,128,40s-57.56-.12-91.84,13.12a24,24,0,0,0-14.49,16.4C19.08,79.5,16,97.74,16,128s3.08,48.5,5.67,58.48a24,24,0,0,0,14.49,16.41C69,215.56,120.4,216,127.34,216h1.32c6.94,0,58.37-.44,91.18-13.11a24,24,0,0,0,14.49-16.41c2.59-10,5.67-28.22,5.67-58.48S236.92,79.5,234.33,69.52Zm-73.74,65-40,28A8,8,0,0,1,108,156V100a8,8,0,0,1,12.59-6.55l40,28a8,8,0,0,1,0,13.1Z"></path>
                </svg>
                EXPLICAÇÃO</a>
        </nav>
    </section>
    <section id="descricaoEscrita">
        <h2>SOBRE O PROJETO</h2>
        <p>Este projeto consiste em um portfólio digital desenvolvido com a biblioteca React, com o objetivo de apresentar informações profissionais, habilidades técnicas, projetos realizados e formas de contato de maneira moderna e responsiva.
            O portfólio possui uma interface limpa e intuitiva, dividida em seções como "Sobre Mim", "Habilidades", "Projetos", "Experiência Profissional" e "Contato". A navegação entre as seções é feita de forma suave por meio de rotas e ancoragens, oferecendo uma boa experiência ao usuário.
            Para o estilo visual, foram utilizadas bibliotecas como Tailwind CSS (ou Styled Components, dependendo do caso), garantindo um design responsivo e adaptável a diferentes tamanhos de tela. Animações leves foram aplicadas com bibliotecas como Framer Motion, tornando a navegação mais dinâmica.
            Além disso, o portfólio é totalmente personalizável, com fácil manutenção e possibilidade de expansão para incluir um blog, área de downloads ou integração com APIs externas (como GitHub ou LinkedIn).
            O projeto demonstra domínio das boas práticas de desenvolvimento com React, organização de componentes reutilizáveis, uso de hooks (como useState e useEffect) e estrutura modular.</p>
    </section>

    <section id="img">
        <h2>IMAGEMS DO PROJETO</h2>
    </section>
</main>
<?= $this->endsection('conteudo') ?>