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
            <h3>VER MAIS</h3>
            <div>
                <a href=""> GIT HUB</a>
                <a href=""> SITE</a>
                <a href=""> FIGMA</a>
            </div>
        </nav>
        <section></section>
        <nav id="linkVideo"></nav>
    </section>
</main>
<?= $this->endsection('conteudo') ?>