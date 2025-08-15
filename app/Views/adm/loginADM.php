<?= $this->extend('partials/adm') ?>

<?= $this->section('head') ?>

<link rel="stylesheet" href="/css/adm/login.css">

<?= $this->endsection(); ?>

<?= $this->section('conteudo') ?>

<main>
    <form method="post" action="admLogin">

        <label for="login">login</label>
        <input type="text" name="login" id="login">

        <label for="senha">senha</label>
        <input type="password" name="senha" id="senha">

        <button>ENTRAR</button>
    </form>
</main>

<?= $this->endsection(); ?>