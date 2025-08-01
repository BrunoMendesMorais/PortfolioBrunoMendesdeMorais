<?= $this->extend('partials/adm') ?>

<?= $this->section('head') ?>

<link rel="stylesheet" href="/css/adm/homeAdm.css">

<?= $this->endsection(); ?>

<?= $this->section('conteudo') ?>
<main>
    <h1>Home</h1>
    <section id="home">
        <form id="formularioTexto" action="" method="post">
            <textarea name="resumo" id="resumo"><?= $home['mensagemCurta']?></textarea>
            <textarea name="aprofundamento" id="aprofundamento"><?= $home['mensagem']?></textarea>
            <button>Editar</button>
        </form>
        <form id="imagem" action="" method="post">
            <img src="<?= $home['img_site']?>" alt="">
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

    <h1>Projetos</h1>
    <section id="projetosProgramacao">
        <article id="novoProjeto">
            <img src="/img/imagensSite/plus.svg" alt="">
        </article>
        <article>
            <section>
                <img src="/img/tecnologias/ts.svg" alt="">
                <img src="/img/tecnologias/react.svg" alt="">
                <img src="/img/tecnologias/html.svg" alt="">
                <img src="/img/tecnologias/figma.svg" alt="">

            </section>
            <img class="img" src="/img/projetos/imagemCapa/projeto1.png" alt="">
            <h4>portifolio do bruno mendes de morais</h4>
            <a href="/DetalheDoProjeto/1">ver mais detalhes</a>
        </article>
        <article>
            <section>
                <img src="/img/tecnologias/ts.svg" alt="">
                <img src="/img/tecnologias/react.svg" alt="">
                <img src="/img/tecnologias/html.svg" alt="">
                <img src="/img/tecnologias/figma.svg" alt="">

            </section>
            <img class="img" src="/img/projetos/imagemCapa/projeto1.png" alt="">
            <h4>portifolio do bruno mendes de morais</h4>
            <a href="/DetalheDoProjeto/1">ver mais detalhes</a>
        </article>
        <article>
            <section>
                <img src="/img/tecnologias/ts.svg" alt="">
                <img src="/img/tecnologias/react.svg" alt="">
                <img src="/img/tecnologias/html.svg" alt="">
                <img src="/img/tecnologias/figma.svg" alt="">

            </section>
            <img class="img" src="/img/projetos/imagemCapa/projeto1.png" alt="">
            <h4>portifolio do bruno mendes de morais</h4>
            <a href="/DetalheDoProjeto/1">ver mais detalhes</a>
        </article>

    </section>
</main>

<script>
    document.addEventListener("input", function(event) {
        if (event.target.tagName.toLowerCase() !== "textarea") return;

        event.target.style.height = "auto";
        event.target.style.height = (event.target.scrollHeight) + "px";
    });
</script>
<?= var_dump($home)?>

<?= $this->endsection(); ?>