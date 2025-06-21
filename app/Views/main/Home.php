<?= $this->extend('partials/user') ?>

<?= $this->section('head') ?>

<link rel="stylesheet" href="css/home.css">

<?= $this->endsection('head') ?>

<?= $this->section('conteudo') ?>

<main>
    <section id="presentacao">
        <h1>DESENVOLVEDOR</h1>
        <h2>FULL-STACK</h2>
        <img src="imagensSite/Bruno.jpg" alt="">
    </section>

    <section id="sobreMim">
        <h3>SOBRE MIM</h3>
        <p>Sou um desenvolvedor de software focado na area da web tenho habilidades tanto no frontend quanto no backend</p>
    </section>

    <section id="projetos">
        <h3>PROJETOS</h3>
    </section>

    <section id="conhecimento">
        <h3>CONHECIMENTOS EM</h3>
    </section>

    <section id="contato">
        <h3>CONTATO<h3>
    </section>
</main>

<?= $this->endsection('conteudo') ?>
