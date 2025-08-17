<?= $this->extend('partials/adm') ?>

<?= $this->section('head') ?>

<link rel="stylesheet" href="/css/adm/projetosAdm.css">

<?= $this->endsection(); ?>

<?= $this->section('conteudo') ?>

<main>
    <form id="formulario" method="post" action="/adm/criar/projeto"  enctype="multipart/form-data">

        <label for="img_capa">
            <img id="capa" class="inputImg add" src="/img/imagensSite/plus.svg" alt="">
        </label>
        <input type="file" name="img_capa" require id="img_capa">

        <label for="titulo">titulo</label>
        <input type="text" name="titulo" require id="titulo">

        <label for="sub_titulo">sub-titulo</label>
        <input type="text" name="sub_titulo" require id="sub_titulo">

        <label for="descricao_projeto">descricao projeto</label>
        <textarea name="descricao_projeto" require id="descricao_projeto"></textarea>

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

            <?php foreach ($tecnologia as $itens): ?>
                <label class="checkbox-option">
                    <input type="checkbox" name="opcoes[]" value="<?= $itens['id_tecnologia'] ?>">
                    <img src="/img/tecnologias/<?= $itens['img_tecnologia'] ?>" width="60px" alt="">
                </label>
            <?php endforeach ?>
        </div>

        <section id="upload-area">
            <label class="label-upload">
                <img class="inputImg add" src="/img/imagensSite/plus.svg" alt="">
                <input type="file" name="img[]" accept="image/*" onchange="adicionarImagem(this)">
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
            const file = input.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                // Cria container da imagem
                const container = document.createElement("div");
                container.classList.add("imagem-item");

                // Cria imagem de pré-visualização
                const img = document.createElement("img");
                img.src = e.target.result; // Apenas para pré-visualizar
                img.classList.add("preview");

                // Cria botão de remover
                const btnRemover = document.createElement("button");
                btnRemover.innerHTML = "×";
                btnRemover.classList.add("btn-remover");
                btnRemover.onclick = function() {
                    container.remove();
                    input.remove(); // Remove o input file real
                };

                // Adiciona imagem e botão ao container
                container.appendChild(img);
                container.appendChild(btnRemover);
                document.getElementById("lista-imagens").appendChild(container);
            };

            // Lê a imagem para mostrar na tela, mas não converte para envio
            reader.readAsDataURL(file);

            // Mantém o input original no formulário para envio normal
            // Cria um clone para permitir novos uploads sem perder o anterior
            const novoInput = input.cloneNode();
            novoInput.value = "";
            novoInput.onchange = function() {
                adicionarImagem(this);
            };
            input.parentNode.insertBefore(novoInput, input);
            input.style.display = "none"; // Esconde o input antigo mas mantém no   
        }
    }
    
</script>



<?= $this->endsection(); ?>