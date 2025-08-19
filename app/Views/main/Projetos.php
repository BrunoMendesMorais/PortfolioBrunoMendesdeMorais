<?= $this->extend('partials/user') ?>

<?= $this->section('head') ?>

<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/projeto.css">
<script src="js/main/Home.js" defer></script>
<?= $this->endsection('head') ?>

<?= $this->section('conteudo') ?>
<main>
    <section id="projetos">
        <h3>PROJETOS</h3>
        <div>
            <!-- <form action="/" method="#" style="width: 100%;">
                <input name="Pesquisa" autocomplete="off" id="Pesquisa" placeholder="procure por tecnologia ou projeto..." type="search">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <rect width="256" height="256" fill="none" />
                        <circle cx="112" cy="112" r="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12" />
                        <line x1="168.57" y1="168.57" x2="224" y2="224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12" />
                    </svg>
                </button>
            </form> -->
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
</main>

<?= $this->endsection('conteudo') ?>