<?= $this->extend('partials/user') ?>

<?= $this->section('head') ?>

<link rel="stylesheet" href="css/home.css">
<script src="js/main/Home.js" defer></script>
<?= $this->endsection('head') ?>

<?= $this->section('conteudo') ?>

<main>
    <section id="inicial">
        <section id="presentacao">
            <h1>DESENVOLVEDOR</h1>
            <h2>FULL-STACK</h2>
            <img src="<?= $home['img_site'] ?>" alt="">
        </section>

        <section id="sobreMim">
            <h3>SOBRE MIM</h3>
            <p><?= $home['mensagemCurta'] ?></p>
            <section id="maisSobreMim">

            </section>
            <a id="verMaisSobreMim">VER MAIS</a>
        </section>
    </section>
    <section id="projetos">
        <h3>PROJETOS</h3>
        <div>
            <form action="/" method="#">
                <input name="Pesquisa" autocomplete="off" id="Pesquisa" placeholder="procure por tecnologia ou projeto..." type="search">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <rect width="256" height="256" fill="none" />
                        <circle cx="112" cy="112" r="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12" />
                        <line x1="168.57" y1="168.57" x2="224" y2="224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12" />
                    </svg>
                </button>
            </form>
            <a href="/Projetos">VER TODOS</a>
        </div>
        <section id="projetosProgramacao">
            <?php foreach ($projeto as $itens): ?>
                <article>
                    <section>
                        <?php foreach ($itens['tecnologias'] as $usado): ?>
                            <img src="img/tecnologias/<?= $usado['img_tecnologia'] ?>" alt="">
                        <?php endforeach ?>

                    </section>
                    <img class="img" src="img/projetos/imagemCapa/<?= $itens['img_capa'] ?>" alt="">
                    <h4><?= $itens['titulo'] ?></h4>
                    <a href="/DetalheDoProjeto/<?= $itens['id_projeto'] ?>">ver mais detalhes</a>
                    <?php if ($itens['quantidade'] > 0): ?>
                        <div>+<?= $itens['quantidade'] ?></div>
                    <?php endif ?>
                </article>
            <?php endforeach ?>
        </section>
    </section>

    <section id="conhecimento">
        <h3>CONHECIMENTOS</h3>
        <section>

            <?php foreach ($tecnologia as $itens): ?>
                <img src=" img/tecnologias/<?= $itens['img_tecnologia'] ?>" alt="">
            <?php endforeach ?>

        </section>
    </section>

    <section id="contato">
        <h3>CONTATO</h3>
        <address>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                <rect width="256" height="256" fill="none" />
                <path d="M32,56H224a0,0,0,0,1,0,0V192a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V56A0,0,0,0,1,32,56Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                <polyline points="224 56 128 144 32 56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
            </svg>
            <p>mendesdemoraisbruno@gmail.com</p>
            <a href="">Copiar</a>
        </address>
        <address>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                <rect fill="none" />
                <rect x="32" y="32" width="192" height="192" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                <line x1="120" y1="112" x2="120" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                <line x1="88" y1="112" x2="88" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                <path d="M120,140a28,28,0,0,1,56,0v36" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                <circle fill="currentColor" cx="88" cy="84" r="12" />
            </svg>
            <p>www.linkedin.com/in/bruno-mendes-de-morais</p>
            <a href="">Ir para</a>
        </address>
    </section><?= $home['mensagemCurta'] ?>
</main>

<script>
    const verMaisSobreMim = document.getElementById("verMaisSobreMim");
    const maisSobreMim = document.getElementById("maisSobreMim")

    verMaisSobreMim.addEventListener("click", mostraMaisSobreMim);

    function mostraMaisSobreMim() {
        if (maisSobreMim.textContent.trim() == '') {
            maisSobreMim.innerHTML = `
    <?= $home['mensagem'] ?>
    `
            verMaisSobreMim.innerHTML = 'VER MENOS';
        } else {
            maisSobreMim.innerHTML = '';
            verMaisSobreMim.innerHTML = 'VER MAIS';
        }

    }
</script>

<?= $this->endsection('conteudo') ?>