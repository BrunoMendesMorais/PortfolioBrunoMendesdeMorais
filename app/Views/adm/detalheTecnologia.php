<?= $this->extend('partials/adm') ?>

<?= $this->section('head') ?>

<link rel="stylesheet" href="/css/adm/tecnologiaAdm.css">

<?= $this->endsection(); ?>

<?= $this->section('conteudo') ?>

<main>
    <img src="/img/tecnologias/<?= $tecnologia['img_tecnologia']?>" alt="<?= $tecnologia['nome_tecnologia']?>">
    <h2><?= $tecnologia['nome_tecnologia']?></h2>
</main>

 <section>
        <a style="background-color: green;" href="/adm/home">cancelar</a>
        <a style="background-color: red;" href="/adm/exluir/tecnologia/<?= $tecnologia['id_tecnologia']?>">Excluir</a>
    </section>

<?= $this->endsection(); ?>