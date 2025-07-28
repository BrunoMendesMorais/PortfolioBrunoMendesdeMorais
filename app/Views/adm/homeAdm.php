<?= $this->extend('partials/adm') ?>

<?= $this->section('head') ?>

<link rel="stylesheet" href="/css/adm/homeAdm.css">

<?= $this->endsection(); ?>

<?= $this->section('conteudo') ?>
<main>
    <h1>Home</h1>
    <section id="home">
        <form id="formularioTexto" action="" method="post">
            <textarea name="resumo" id="resumo"></textarea>
            <textarea name="aprofundamento" id="aprofundamento"></textarea>
            <button>Editar</button>
        </form>
        <form id="imagem" action="" method="post">
            <img src="/img/imagensSite/bruno.jpg" alt="">
            <label for="img">selecionar arquivo</label>
            <input type="file" name="img" id="img">
        </form>
    </section>
    <h1>Tecnologia</h1>
    <section id="tecnologia">
        <section id="tec">
            <img src="/img/tecnologias/ts.svg" alt="">
            <img src="/img/tecnologias/ts.svg" alt="">
            <img src="/img/tecnologias/ts.svg" alt="">
            <img src="/img/tecnologias/ts.svg" alt="">
            <img src="/img/tecnologias/ts.svg" alt="">
            <img src="/img/tecnologias/ts.svg" alt="">
            <img src="/img/tecnologias/ts.svg" alt="">
            <img src="/img/tecnologias/ts.svg" alt="">
            <img src="/img/tecnologias/ts.svg" alt="">
            <img src="/img/tecnologias/ts.svg" alt="">
            <img src="/img/tecnologias/ts.svg" alt="">
            <img src="/img/tecnologias/ts.svg" alt="">
            <img src="/img/tecnologias/ts.svg" alt="">
            <img src="/img/tecnologias/ts.svg" alt="">
            <img src="/img/tecnologias/ts.svg" alt="">
            <img src="/img/tecnologias/ts.svg" alt="">
            <img src="/img/tecnologias/ts.svg" alt="">
        </section>

        <form id="novaTec">
            <label for="imgTec"><img src="/img/imagensSite/plus.svg" alt=""></label>
            <inpt type="file" name="imgTec" id="imgTec">
            <input type="text" name="nomeTec" id="nomeTec">
            <button>Finalizar</button>
        </form>

    </section>
</main>

<script>
    document.addEventListener("input", function(event) {
        if (event.target.tagName.toLowerCase() !== "textarea") return;

        event.target.style.height = "auto";
        event.target.style.height = (event.target.scrollHeight) + "px";
    });
</script>


<?= $this->endsection(); ?>