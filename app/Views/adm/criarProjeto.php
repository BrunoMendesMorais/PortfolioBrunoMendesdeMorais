<?= $this->extend('partials/adm') ?>

<?= $this->section('head') ?>

<link rel="stylesheet" href="/css/adm/projetosAdm.css">

<?= $this->endsection(); ?>

<?= $this->section('conteudo') ?>

<main>
    <form id="formulario" action="">

        <label for="img_capa">
            <img id="capa" class="inputImg add" src="/img/imagensSite/plus.svg" alt="">
        </label>
        <input type="file" name="img_capa" id="img_capa">

        <label for="titulo">titulo</label>
        <input type="text" name="img_capa" id="img_capa">

        <label for="sub_titulo">sub-titulo</label>
        <input type="text" name="sub_titulo" id="sub_titulo">

        <label for="descricao_projeto">descricao projeto</label>
        <textarea name="descricao_projeto" id="descricao_projeto"></textarea>

        <label for="img_destaque">
            <img id="destaque" class="inputImg add" src="/img/imagensSite/plus.svg" alt="">
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



        <div>

            <label class="checkbox-option">
                <input type="checkbox" name="opcoes[]" value="opcao1">
                <img src="/img/tecnologias/react.svg" alt="">
            </label>
            <label class="checkbox-option">
                <input type="checkbox" name="opcoes[]" value="opcao2">
                <img src="/img/tecnologias/react.svg" alt="">
            </label>
            <label class="checkbox-option">
                <input type="checkbox" name="opcoes[]" value="opcao3">
                <img src="/img/tecnologias/react.svg" alt="">
            </label>
            <label class="checkbox-option">
                <input type="checkbox" name="opcoes[]" value="opcao4">
                <img src="/img/tecnologias/react.svg" alt="">
            </label>
            <label class="checkbox-option">
                <input type="checkbox" name="opcoes[]" value="opcao5">
                <img src="/img/tecnologias/react.svg" alt="">
            </label>

        </div>

        <section id="upload-area">
            <label class="label-upload">
                <img class="inputImg add" src="/img/imagensSite/plus.svg" alt="">
                <input type="file" accept="image/*" onchange="adicionarImagem(this)">
            </label>
        </section>

        <section id="lista-imagens"></section>

        <button class="botao">finalizar</button>

    </form>
</main>

<script>
    document.addEventListener("input", function(event) {
        if (event.target.tagName.toLowerCase() !== "textarea") return;

        event.target.style.height = "auto";
        event.target.style.height = (event.target.scrollHeight) + "px";
    });

    const input = document.getElementById('img_capa');
    const imgPreview = document.getElementById('capa');

    input.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();

            reader.addEventListener('load', function() {
                imgPreview.src = reader.result;
            });

            reader.readAsDataURL(file);
            imgPreview.classList.remove("add");
        }
    });

    const input2 = document.getElementById('img_destaque');
    const imgPreview2 = document.getElementById('destaque');

    input2.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();

            reader.addEventListener('load', function() {
                imgPreview2.src = reader.result;
            });

            reader.readAsDataURL(file);
            imgPreview2.classList.remove("add");
        }
    });

    function adicionarImagem(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                // Cria container da imagem
                const container = document.createElement("div");
                container.classList.add("imagem-item");

                // Cria imagem
                const img = document.createElement("img");
                img.src = e.target.result;
                img.classList.add("preview");

                // Cria botão de remover
                const btnRemover = document.createElement("button");
                btnRemover.innerHTML = "×";
                btnRemover.classList.add("btn-remover");
                btnRemover.onclick = function() {
                    container.remove();
                    hiddenInput.remove();
                };

                // Cria input oculto para enviar no formulário
                const hiddenInput = document.createElement("input");
                hiddenInput.type = "hidden";
                hiddenInput.name = "imagens_base64[]";
                hiddenInput.value = e.target.result;

                // Monta o item
                container.appendChild(img);
                container.appendChild(btnRemover);
                document.getElementById("lista-imagens").appendChild(container);
                document.getElementById("formulario").appendChild(hiddenInput);

                // Limpa o campo de upload e recria para novo upload
                input.value = "";
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>



<?= $this->endsection(); ?>