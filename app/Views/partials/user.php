<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portfólio de Bruno Mendes de Morais, desenvolvedor full stack especializado em front-end e bak-cend. Projetos em PHP, CodeIgniter, e mais.">
    <meta name="keywords" content="Desenvolvedor full stack, portfólio, PHP, JavaScript, HTML, CodeIgniter, desenvolvimento web">
    <meta name="author" content="Bruno Mendes de Morais">

    <!-- <meta name="robots" content="index, follow"> -->

    <!-- Open Graph (para redes sociais) -->
    <meta property="og:title" content="Portfólio de Bruno Mendes de Morais - Desenvolvedor Full Stack">
    <meta property="og:description" content="Confira meus projetos e habilidades em desenvolvimento full stack.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mendesmoraisbruno.com">
    <meta property="og:image" content="https://mendesmoraisbruno.com/imagem-de-capa.png">

    <!-- Twitter Card -->
    <meta name="twitter:title" content="Portfólio de Seu Nome - Desenvolvedor Full Stack">
    <meta name="twitter:description" content="Confira meus projetos e habilidades em desenvolvimento full stack.">
    <meta name="twitter:image" content="https://mendesmoraisbruno.com/imagem-de-capa.png">

    <link rel="stylesheet" href="css/partials/user.css">
    <script src="js/partials/user.js" defer></script>

    <?= $this->renderSection('head') ?>
</head>

<body id="body" class="sem-transicao">
    <header id="header">
        <div id="list" class="list">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <h1>Bruno Mendes de Morais</h1>
        <nav id="navegacaoHeader">
            <a href="/">Home</a>
            <a href="/Projetos">Projetos</a>
            <a href="/#contato">Contato</a>
        </nav>
        <div id="modo" class="esquerda">
            <div id="lua">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <rect fill="none" />
                    <path d="M108.11,28.11A96.09,96.09,0,0,0,227.89,147.89,96,96,0,1,1,108.11,28.11Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                </svg>
            </div>
            <div id="sol">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <rect fill="none" />
                    <line x1="128" y1="40" x2="128" y2="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    <circle cx="128" cy="128" r="56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    <line x1="64" y1="64" x2="48" y2="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    <line x1="64" y1="192" x2="48" y2="208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    <line x1="192" y1="64" x2="208" y2="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    <line x1="192" y1="192" x2="208" y2="208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    <line x1="40" y1="128" x2="16" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    <line x1="128" y1="216" x2="128" y2="240" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    <line x1="216" y1="128" x2="240" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                </svg>
            </div>
            <div id="seletor">
            </div>
        </div>
    </header>
    <div id="cortina"></div>
    <nav id="navegacaoLateral">
        <div>
            <section class="topcosNav">
                <a href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <rect fill="none" />
                        <circle cx="128" cy="96" r="64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <path d="M32,216c19.37-33.47,54.55-56,96-56s76.63,22.53,96,56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    </svg>
                    <h2>HOME</h2>
                    <ul>
                    </ul>
                </a>
            </section>
            <section class="topcosNav">
                <a href="/#projetos">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <rect fill="none" />
                        <line x1="104" y1="104" x2="104" y2="208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <line x1="32" y1="104" x2="224" y2="104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <rect x="32" y="48" width="192" height="160" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    </svg>
                    <h2>PROJETOS</h2>
                    <ul>
                        <li><a href="/#projetos">Portifolio de bruno mendes de morais</a></li>
                        <li><a href="/#projetos">Portifolio de bruno mendes de morais</a></li>
                        <li><a href="/#projetos">Portifolio de bruno mendes de morais</a></li>
                    </ul>
                </a>
            </section>
            <section class="topcosNav">
                <a href="/#contato">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <rect fill="none" />
                        <circle cx="136" cy="112" r="32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <line x1="32" y1="72" x2="56" y2="72" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <line x1="32" y1="128" x2="56" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <line x1="32" y1="184" x2="56" y2="184" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <path d="M88,168a60,60,0,0,1,96,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <rect x="40" y="48" width="192" height="160" rx="8" transform="translate(264 -8) rotate(90)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    </svg>
                    <h2>CONTATO</h2>
                </a>
                <ul>
                    <li><a href="/#contato">E-mail</a></li>
                </ul>
            </section>
        </div>
        <address>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none" />
                    <circle cx="128" cy="128" r="40" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="16" />
                    <rect x="32" y="32" width="192" height="192" rx="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    <circle fill="currentColor" cx="180" cy="76" r="12" />
                </svg></a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none" />
                    <circle cx="128" cy="128" r="96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    <path d="M168,88H152a24,24,0,0,0-24,24V224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    <line x1="96" y1="144" x2="160" y2="144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                </svg></a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none" />
                    <polygon points="160 128 112 96 112 160 160 128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    <path d="M24,128c0,29.91,3.07,47.45,5.41,56.47A16,16,0,0,0,39,195.42C72.52,208.35,128,208,128,208s55.48.35,89-12.58a16,16,0,0,0,9.63-10.95c2.34-9,5.41-26.56,5.41-56.47s-3.07-47.45-5.41-56.47a16,16,0,0,0-9.63-11C183.48,47.65,128,48,128,48s-55.48-.35-89,12.58a16,16,0,0,0-9.63,11C27.07,80.54,24,98.09,24,128Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                </svg></a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none" />
                    <path d="M119.83,56A52,52,0,0,0,76,32a51.92,51.92,0,0,0-3.49,44.7A49.28,49.28,0,0,0,64,104v8a48,48,0,0,0,48,48h48a48,48,0,0,0,48-48v-8a49.28,49.28,0,0,0-8.51-27.3A51.92,51.92,0,0,0,196,32a52,52,0,0,0-43.83,24Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    <path d="M104,232V192a32,32,0,0,1,32-32h0a32,32,0,0,1,32,32v40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    <path d="M104,208H72a32,32,0,0,1-32-32A32,32,0,0,0,8,144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                </svg></a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none" />
                    <rect x="32" y="32" width="192" height="192" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    <line x1="120" y1="112" x2="120" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    <line x1="88" y1="112" x2="88" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    <path d="M120,140a28,28,0,0,1,56,0v36" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                    <circle fill="currentColor" cx="88" cy="84" r="12" />
                </svg></a>
        </address>
    </nav>
    <?= $this->renderSection('conteudo') ?>

    <footer id="footer">
        <p>Caso tenha gostado dos projetos sinta-se a vontade de acompanhar por outro angulo por essas redes :)</p>
        <address>
            <a href="">
                <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none" />
                    <path fill="currentColor" d="M216,104v8a56.06,56.06,0,0,1-48.44,55.47A39.8,39.8,0,0,1,176,192v40a8,8,0,0,1-8,8H104a8,8,0,0,1-8-8V216H72a40,40,0,0,1-40-40A24,24,0,0,0,8,152a8,8,0,0,1,0-16,40,40,0,0,1,40,40,24,24,0,0,0,24,24H96v-8a39.8,39.8,0,0,1,8.44-24.53A56.06,56.06,0,0,1,56,112v-8a58.14,58.14,0,0,1,7.69-28.32A59.78,59.78,0,0,1,69.07,28,8,8,0,0,1,76,24a59.75,59.75,0,0,1,48,24h24a59.75,59.75,0,0,1,48-24,8,8,0,0,1,6.93,4,59.74,59.74,0,0,1,5.37,47.68A58,58,0,0,1,216,104Z" />
                </svg>
                <span>BrunoMendesMorais</span>
            </a>
            <a href="">
                <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <path fill="currentColor" d="M216,24H40A16,16,0,0,0,24,40V216a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V40A16,16,0,0,0,216,24ZM96,176a8,8,0,0,1-16,0V112a8,8,0,0,1,16,0ZM88,96a12,12,0,1,1,12-12A12,12,0,0,1,88,96Zm96,80a8,8,0,0,1-16,0V140a20,20,0,0,0-40,0v36a8,8,0,0,1-16,0V112a8,8,0,0,1,15.79-1.78A36,36,0,0,1,184,140Z"></path>
                </svg>
                <span>bruno-mendes-de-morais</span>
            </a>
            <a href="">
                <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none" />
                    <path fill="currentColor" d="M234.33,69.52a24,24,0,0,0-14.49-16.4C185.56,39.88,131,40,128,40s-57.56-.12-91.84,13.12a24,24,0,0,0-14.49,16.4C19.08,79.5,16,97.74,16,128s3.08,48.5,5.67,58.48a24,24,0,0,0,14.49,16.41C69,215.56,120.4,216,127.34,216h1.32c6.94,0,58.37-.44,91.18-13.11a24,24,0,0,0,14.49-16.41c2.59-10,5.67-28.22,5.67-58.48S236.92,79.5,234.33,69.52Zm-73.74,65-40,28A8,8,0,0,1,108,156V100a8,8,0,0,1,12.59-6.55l40,28a8,8,0,0,1,0,13.1Z" />
                </svg>
                <span>bruno-mendes-de-morais</span>
            </a>
            <a href="">
                <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none" />
                    <path fill="currentColor" d="M160,128a32,32,0,1,1-32-32A32,32,0,0,1,160,128Zm72-48v96a56.06,56.06,0,0,1-56,56H80a56.06,56.06,0,0,1-56-56V80A56.06,56.06,0,0,1,80,24h96A56.06,56.06,0,0,1,232,80Zm-56,48a48,48,0,1,0-48,48A48.05,48.05,0,0,0,176,128Zm24-60a12,12,0,1,0-12,12A12,12,0,0,0,200,68Z" />
                </svg>
                <span>bruno-mendes-de-morais</span>
            </a>
            <a href="">
                <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none" />
                    <path fill="currentColor" d="M232,128a104.16,104.16,0,0,1-91.55,103.26,4,4,0,0,1-4.45-4V152h24a8,8,0,0,0,8-8.53,8.17,8.17,0,0,0-8.25-7.47H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,8-8.53A8.17,8.17,0,0,0,167.73,80H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0-8,8.53A8.17,8.17,0,0,0,96.27,152H120v75.28a4,4,0,0,1-4.44,4A104.15,104.15,0,0,1,24.07,124.09c2-54,45.74-97.9,99.78-100A104.12,104.12,0,0,1,232,128Z" />
                </svg>
                <span>bruno-mendes-de-morais</span>
            </a>
        </address>
    </footer>
</body>

</html>