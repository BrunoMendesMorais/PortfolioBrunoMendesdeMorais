<?= $this->extend('partials/user') ?>

<?= $this->section('head') ?>

<link rel="stylesheet" href="/css/DetalhesDoSite.css">
<?= $this->endsection('head') ?>


<?= $this->section('conteudo') ?>

<main>


    <section id="topo">

        <div>


            <nav id="linksProjeto">
                <?php if (!empty($projeto['link_github'])): ?>
                    <a href="<?= $projeto['link_github']; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none" />
                            <path fill="currentColor" d="M216,104v8a56.06,56.06,0,0,1-48.44,55.47A39.8,39.8,0,0,1,176,192v40a8,8,0,0,1-8,8H104a8,8,0,0,1-8-8V216H72a40,40,0,0,1-40-40A24,24,0,0,0,8,152a8,8,0,0,1,0-16,40,40,0,0,1,40,40,24,24,0,0,0,24,24H96v-8a39.8,39.8,0,0,1,8.44-24.53A56.06,56.06,0,0,1,56,112v-8a58.14,58.14,0,0,1,7.69-28.32A59.78,59.78,0,0,1,69.07,28,8,8,0,0,1,76,24a59.75,59.75,0,0,1,48,24h24a59.75,59.75,0,0,1,48-24,8,8,0,0,1,6.93,4,59.74,59.74,0,0,1,5.37,47.68A58,58,0,0,1,216,104Z" />
                        </svg>
                        GIT HUB
                    </a>
                <?php endif; ?>
                <?php if (!empty($projeto['link_demo'])): ?>
                    <a href="<?= $projeto['link_demo']; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                            <path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,16V88H40V56Zm0,144H40V104H216v96Z"></path>
                        </svg>
                        SITE
                    </a>
                <?php endif; ?>
                <?php if (!empty($projeto['link_figma'])): ?>
                    <a href="<?= $projeto['link_figma']; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none" />
                            <circle cx="168" cy="128" r="32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                            <path d="M136,96h32a32,32,0,0,0,0-64H136" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                            <path d="M136,32H96a32,32,0,0,0,0,64h40Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                            <path d="M136,96H96a32,32,0,0,0,0,64h40Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                            <path d="M136,160H100a36,36,0,1,0,36,36Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        </svg>
                        FIGMA
                    </a>
                <?php endif; ?>
            </nav>
            <nav id="linksVideo">
                <?php if (!empty($projeto['link_video_e'])): ?>
                    <a href="<?= $projeto['link_video_e'] ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none" />
                            <path fill="red" d="M234.33,69.52a24,24,0,0,0-14.49-16.4C185.56,39.88,131,40,128,40s-57.56-.12-91.84,13.12a24,24,0,0,0-14.49,16.4C19.08,79.5,16,97.74,16,128s3.08,48.5,5.67,58.48a24,24,0,0,0,14.49,16.41C69,215.56,120.4,216,127.34,216h1.32c6.94,0,58.37-.44,91.18-13.11a24,24,0,0,0,14.49-16.41c2.59-10,5.67-28.22,5.67-58.48S236.92,79.5,234.33,69.52Zm-73.74,65-40,28A8,8,0,0,1,108,156V100a8,8,0,0,1,12.59-6.55l40,28a8,8,0,0,1,0,13.1Z" />
                        </svg>
                        APRESENTAÇÃO RAPIDA
                    </a>
                <?php endif; ?>
                <?php if (!empty($projeto['link_video_c'])): ?>
                    <a href="<?= $projeto['link_video_c'] ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none" />
                            <path fill="red" d="M234.33,69.52a24,24,0,0,0-14.49-16.4C185.56,39.88,131,40,128,40s-57.56-.12-91.84,13.12a24,24,0,0,0-14.49,16.4C19.08,79.5,16,97.74,16,128s3.08,48.5,5.67,58.48a24,24,0,0,0,14.49,16.41C69,215.56,120.4,216,127.34,216h1.32c6.94,0,58.37-.44,91.18-13.11a24,24,0,0,0,14.49-16.41c2.59-10,5.67-28.22,5.67-58.48S236.92,79.5,234.33,69.52Zm-73.74,65-40,28A8,8,0,0,1,108,156V100a8,8,0,0,1,12.59-6.55l40,28a8,8,0,0,1,0,13.1Z" />
                        </svg>
                        EXPLICAÇÃO
                    </a>
                <?php endif; ?>
            </nav>
        </div>
        <img src="/img/projetos/imagemCapa/<?= $projeto['img_capa']; ?>" alt="">
    </section>
    <section id="rotuloProjeto">
        <h1><?= $projeto['titulo']; ?></h1>
        <p><?= $projeto['sub_titulo']; ?></p>
    </section>

    <section class="containerTecnologia">
        <?php foreach ($tecnologia as $itens): ?>
            <figure class="tecnologia">
                <img src="/img/tecnologias/<?= $itens['img_tecnologia'] ?>" alt="<?= $itens['nome_tecnologia'] ?>">
                <figcaption><?= $itens['nome_tecnologia'] ?></figcaption>
            </figure>
        <?php endforeach; ?>
    </section>

    <section id="sobreProjeto">
        <h1>SOBRE O PROJETO</h1>
        <img src="/img/projetos/destaque/<?= $projeto['img_destaque']; ?>" alt="">
        <pre>
<?= $projeto['descricao_projeto']; ?>
</pre>
    </section>
    <?php if (!empty($projeto['link_video_c']) or !empty($projeto['link_video_e'])): ?>
        <section id="videos">
            <h1>VIDEOS</h1>
            <?php if (!empty($projeto['link_video_e'])): ?>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $projeto['link_video_e'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <?php endif; ?>
            <?php if (!empty($projeto['link_video_c'])): ?>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $projeto['link_video_c'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <?php endif; ?>
        </section>
    <?php endif; ?>
    <?php if (!empty($imagens)): ?>
        <section id="imagens">
            <h1>IMAGENS DO PROJETO</h1>
            <div>
                <?php foreach ($imagens as $itens): ?>
                    <img src="/img/projetos/imagens/<?= $itens['img_projeto'] ?>" alt="<?= $itens['alt_text'] ?>">
                <?php endforeach ?>
            </div>
        </section>
    <?php endif; ?>

</main>

<?= $this->endsection('conteudo') ?>