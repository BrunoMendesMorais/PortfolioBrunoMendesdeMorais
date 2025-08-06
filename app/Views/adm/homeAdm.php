<?= $this->extend('partials/adm') ?>

<?= $this->section('head') ?>

<link rel="stylesheet" href="/css/adm/homeAdm.css">

<?= $this->endsection(); ?>

<?= $this->section('conteudo') ?>
<main>
    <h1>Home</h1>
    <section id="home">
        <form id="formularioTexto" action="edit/homeTxt" method="post">
            <textarea name="resumo" id="resumo"><?= $home['mensagemCurta'] ?></textarea>
            <textarea name="aprofundamento" id="aprofundamento"><?= $home['mensagem'] ?></textarea>
            <button>Editar</button>
        </form>
        <form id="imagem" action="/adm/edit/homeImg" method="post" enctype="multipart/form-data">
            <img src="<?= $home['img_site'] ?>" alt="">
            <label for="img">selecionar arquivo</label>
            <input type="file" name="img" id="img">
            <button>aaaaaaaaaaaaaa</button>
        </form>
    </section>
    <h1>Tecnologia</h1>
    <section id="tecnologia">
        <section id="tec">
            <?php foreach ($tecnologia as $itens): ?>
                <img src="/img/tecnologias/<?= $itens['img_tecnologia'] ?>" width="60px" alt="">
            <?php endforeach ?>
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
        <section id="projetosProgramacao">
            <?php foreach ($projeto as $itens): ?>
                <article>
                    <section>
                        <?php foreach ($itens['tecnologias'] as $usado): ?>
                            <img src="/img/tecnologias/<?= $usado['img_tecnologia'] ?>" alt="">
                        <?php endforeach ?>

                    </section>
                    <img class="img" src="/img/projetos/imagemCapa/<?= $itens['img_capa'] ?>" alt="">
                    <h4><?= $itens['titulo'] ?></h4>
                    <a href="/DetalheDoProjeto/<?= $itens['id_projeto'] ?>">ver mais detalhes</a>
                    <?php if ($itens['quantidade'] > 0): ?>
                        <div>+<?= $itens['quantidade'] ?></div>
                    <?php endif ?>
                </article>
            <?php endforeach ?>
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