<?= $this->extend('partials/adm') ?>

<?= $this->section('head') ?>

<link rel="stylesheet" href="/css/adm/projetosAdm.css">

<?= $this->endsection(); ?>

<?= $this->section('conteudo') ?>

<main>
    <form action="">

        <label for="img_capa">
            <img src="/img/imagensSite/plus.svg" alt="">
        </label>
        <input type="file" name="img_capa" id="img_capa">

        <label for="titulo">titulo</label>
        <input type="text" name="img_capa" id="img_capa">

        <label for="sub_titulo">sub-titulo</label>
        <input type="text" name="sub_titulo" id="sub_titulo">

        <label for="descricao_projeto">descricao projeto</label>
        <textarea name="descricao_projeto" id="descricao_projeto"></textarea>

        <label for="img_destaque">
            <img src="/img/imagensSite/plus.svg" alt="">
        </label>
        <input type="file" name="img_destaque" id="img_destaque">

        <label for="link_demo">link da demo</label>
        <input type="url" name="link_demo" id="link_demo">

        <label for="link_figma">link do figma</label>
        <input type="url" name="link_figma" id="link_figma">

        <label for="link_github">link do github</label>
        <input type="url" name="link_github" id="link_github">

        <label for="link_video_e">link video curto</label>
        <input type="url" name="link_video_e" id="link_video_e">

        <label for="link_video_c">link video completo</label>
        <input type="url" name="link_video_c" id="link_video_c">

    </form>

    <label class="checkbox-option">
        <input type="checkbox" name="opcoes[]" value="opcao1">
        Opção 1
    </label>
    <label class="checkbox-option">
        <input type="checkbox" name="opcoes[]" value="opcao2">
        Opção 2
    </label>
    <label class="checkbox-option">
        <input type="checkbox" name="opcoes[]" value="opcao3">
        Opção 3
    </label>
    <label class="checkbox-option">
        <input type="checkbox" name="opcoes[]" value="opcao4">
        Opção 4
    </label>
    <label class="checkbox-option">
        <input type="checkbox" name="opcoes[]" value="opcao5">
        Opção 5
    </label>


    <script>
        document.addEventListener("input", function(event) {
            if (event.target.tagName.toLowerCase() !== "textarea") return;

            event.target.style.height = "auto";
            event.target.style.height = (event.target.scrollHeight) + "px";
        });
    </script>
</main>

<?= $this->endsection(); ?>