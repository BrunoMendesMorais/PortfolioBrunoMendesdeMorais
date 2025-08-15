<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ConteudosModel;
use App\Models\ImagemModel;
use App\Models\ImagemProjeto;
use App\Models\ProjetoModel;
use App\Models\ProjetoTecnologiaModel;
use App\Models\TecnologiaModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdmController extends BaseController
{
    public function home()
    {
        $dados = array();
        $itens['tecnologia'] = array();
        $a = array();
        $TecnologiaModel = new TecnologiaModel();
        $ProjetoModel = new ProjetoModel();
        $ProjetoTecnologiaModel = new ProjetoTecnologiaModel();
        $ContudosModel = new ConteudosModel();
        $dados["projeto"] = $ProjetoModel->select('titulo, img_capa, id_projeto',)->findAll();

        foreach ($dados['projeto'] as $itens) {
            $filtro = $ProjetoTecnologiaModel->where('projeto_id', $itens['id_projeto'])->find();
            $b['tecnologias'] = array();
            $contador = -4;
            foreach ($filtro as $item) {
                $contador += 1;
                if ($contador <= 0) {
                    $selecionado = $TecnologiaModel->where('id_tecnologia', $item['tecnologia_id'])->select('img_tecnologia')->first();
                    array_push($b['tecnologias'], $selecionado);
                }
            }
            $b['quantidade'] = $contador;
            $unido = array_merge($itens, $b);
            array_push($a, $unido);
        }
        $dados["projeto"] = $a;
        $dados["tecnologia"] = $TecnologiaModel->findAll();
        $dados['home'] = $ContudosModel->first();
        return view('adm/homeAdm', $dados);
    }
    public function editTxtHome()
    {
        $ContudosModel = new ConteudosModel();
        $resumo = $this->request->getPost('resumo');
        $aprofundamento = $this->request->getPost('aprofundamento');

        $dados = [
            'mensagemCurta' => $resumo,
            'mensagem' => $aprofundamento,
        ];

        $ContudosModel->update(1, $dados);
        return redirect()->to('adm/home');
    }
    public function editImgHome()
    {
        $ContudosModel = new ConteudosModel();

        $file = $this->request->getFile('img');

        $conteudo = $ContudosModel->find(1);
        $novoNome = $file->getRandomName();

        if ($file->isValid() && ! $file->hasMoved()) {
            $novoNome = $file->getRandomName();
            $caminho = 'img/imagensSite/perfil/';
            $caminhoCompleto = FCPATH . $caminho;
        }
        $data = [
            'img_site' => ('/img/imagensSite/perfil/' . $novoNome),
        ];

        $file->move($caminhoCompleto, $novoNome);

        if (!empty($conteudo['img_site'])) {
            $imagemAntiga = FCPATH . $conteudo['img_site'];

            if (file_exists($imagemAntiga)) {
                unlink($imagemAntiga);
            }
        }

        $ContudosModel->update(1, $data);
        return redirect()->to('/adm/home');
    }

    public function addTecnologia()
    {
        $TecnologiaModel = new TecnologiaModel();

        $file = $this->request->getFile('imgTec');

        if ($file->isValid() && ! $file->hasMoved()) {
            $novoNome = $file->getRandomName();
            $caminho = 'img/tecnologias/';
            $caminhoCompleto = FCPATH . $caminho;
        }

        $nomeTec = $this->request->getPost('nomeTec');

        $data = [
            'img_tecnologia' => ($novoNome),
            'nome_tecnologia' => $nomeTec,
        ];

        $file->move($caminhoCompleto, $novoNome);



        $TecnologiaModel->save($data);
        return redirect()->to('/adm/home');
    }

    public function detalheTecnologia($id)
    {
        $TecnologiaModel = new TecnologiaModel();
        $dados = array();

        $dados['tecnologia'] = $TecnologiaModel->find($id);

        return view('adm/detalheTecnologia', $dados);
    }

    public function excluirTecnologia($id)
    {

        $tecnologiaModel = new TecnologiaModel();

        $tecnologia = $tecnologiaModel->find($id);

        if ($tecnologia) {
            // Caminho do arquivo da imagem
            $imagemCaminho = FCPATH . $tecnologia['img_tecnologia']; // Ex: 'uploads/imagens/arquivo.jpg'

            // Exclui a imagem se o arquivo existir
            if (is_file($imagemCaminho)) {
                unlink($imagemCaminho);
            }

            // Exclui o item do banco de dados
            $tecnologiaModel->delete($id);
        }

        return redirect()->to('adm/home');
    }

    public function criarProjeto()
    {

        $dados = array();

        $TecnologiaModel = new TecnologiaModel();
        $dados['tecnologia'] = $TecnologiaModel->findAll();

        return view('adm/criarProjeto', $dados);
    }

    public function finalizarProjeto()
    {
        $projetosModel = new ProjetoModel();
        $imagensModel = new ImagemModel();
        $projetoImagem = new ImagemProjeto();

        $ProjetoTecnologiaModel = new ProjetoTecnologiaModel();

        $dados = [];
        $dados['titulo']            = $this->request->getPost('titulo') ?? 'semTitulo';
        $dados['sub_titulo']        = $this->request->getPost('sub_titulo') ?? 'semDescrição';
        $dados['descricao_projeto'] = $this->request->getPost('descricao_projeto') ?? 'semDetalhes';
        $dados['link_demo']         = $this->request->getPost('link_demo');
        $dados['link_figma']        = $this->request->getPost('link_figma');
        $dados['link_github']       = $this->request->getPost('link_github');
        $dados['link_video_e']      = $this->request->getPost('link_video_e');
        $dados['link_video_c']      = $this->request->getPost('link_video_c');

        $uploadPathDestaque = FCPATH . 'img/projetos/destaque/';
        $uploadPathCapa     = FCPATH . 'img/projetos/imagemCapa/';

        if (!is_dir($uploadPathDestaque)) {
            mkdir($uploadPathDestaque, 0777, true);
        }
        if (!is_dir($uploadPathCapa)) {
            mkdir($uploadPathCapa, 0777, true);
        }

        $fileDestaque = $this->request->getFile('img_destaque');
        if ($fileDestaque && $fileDestaque->isValid() && !$fileDestaque->hasMoved()) {
            $nomeDestaque = $fileDestaque->getRandomName();
            $fileDestaque->move($uploadPathDestaque, $nomeDestaque);
            $dados['img_destaque'] = $nomeDestaque;
        } else {
            $dados['img_destaque'] = 'semImagem'; // ou valor padrão
        }

        $fileCapa = $this->request->getFile('img_capa');
        if ($fileCapa && $fileCapa->isValid() && !$fileCapa->hasMoved()) {
            $nomeCapa = $fileCapa->getRandomName();
            $fileCapa->move($uploadPathCapa, $nomeCapa);
            $dados['img_capa'] = $nomeCapa;
        } else {
            $dados['img_capa'] = 'SemImagem';
        }

        $projetosModel->insert($dados);

        $id = $projetosModel->insertID();

        $tecnologias = $this->request->getPost('opcoes') ?? [];

        foreach ($tecnologias as $itens) {

            $tecnologia = [
                'projeto_id' => $id,
                'tecnologia_id' => $itens,
            ];

            $ProjetoTecnologiaModel->insert($tecnologia);
        }

        $imagens = $this->request->getFiles('img');

        foreach ($imagens['img'] as $imagem) {

            if ($imagem && $imagem->isValid() && !$imagem->hasMoved()) {

                $nomeImg = $imagem->getRandomName();
                $imagem->move('img/projetos/imagens/', $nomeImg);
                $i['img_projeto'] = $nomeImg;
                $i['alt_text'] = 'foto do projeto';

                $imagensModel->insert($i);

                $idImg = $imagensModel->insertID();

                $ir = [
                    'imagem_id' => $idImg,
                    'projeto_id' => $id,
                ];

                $projetoImagem->insert($ir);
            }
        }
        return redirect()->to('adm/home');
    }

    public function editarProjeto($id)
    {

        $dados = array();

        $TecnologiaModel = new TecnologiaModel();
        $projetosModel = new ProjetoModel();
        $ProjetoTecnologiaModel = new ProjetoTecnologiaModel();

        $ImagemModel = new ImagemModel();
        $ImagemProjetoModel = new ImagemProjeto();

        $a = $ImagemProjetoModel->where('projeto_id', $id)->findAll();
        $c = array();

        foreach ($a as $itens) {
            $img = $ImagemModel->where('id_imagem', $itens['imagem_id'])->first();
            array_push($c, $img);
        }


        $dados['imagens'] = $c;
        $dados['tecnologia'] = $TecnologiaModel->findAll();
        $dados['projeto'] = $projetosModel->find($id);
        $dados['tecnologiaSelecionadas'] = $ProjetoTecnologiaModel->where('projeto_id', $id)->findAll();

        return view('adm/editarProjeto', $dados);
    }

    public function finalizarEdicaoProjeto($id)
    {
        $projetosModel = new ProjetoModel();
        $imagensModel = new ImagemModel();
        $projetoImagem = new ImagemProjeto();

        $projeto = $projetosModel->find($id);

        $ProjetoTecnologiaModel = new ProjetoTecnologiaModel();

        $dados = [];
        $dados['titulo']            = $this->request->getPost('titulo') ?? 'semTitulo';
        $dados['sub_titulo']        = $this->request->getPost('sub_titulo') ?? 'semDescrição';
        $dados['descricao_projeto'] = $this->request->getPost('descricao_projeto') ?? 'semDetalhes';
        $dados['link_demo']         = $this->request->getPost('link_demo');
        $dados['link_figma']        = $this->request->getPost('link_figma');
        $dados['link_github']       = $this->request->getPost('link_github');
        $dados['link_video_e']      = $this->request->getPost('link_video_e');
        $dados['link_video_c']      = $this->request->getPost('link_video_c');

        $uploadPathDestaque = FCPATH . 'img/projetos/destaque/';
        $uploadPathCapa     = FCPATH . 'img/projetos/imagemCapa/';

        if (!is_dir($uploadPathDestaque)) {
            mkdir($uploadPathDestaque, 0777, true);
        }
        if (!is_dir($uploadPathCapa)) {
            mkdir($uploadPathCapa, 0777, true);
        }

        $fileDestaque = $this->request->getFile('img_destaque');
        if ($fileDestaque && $fileDestaque->isValid() && !$fileDestaque->hasMoved()) {
            $nomeDestaque = $fileDestaque->getRandomName();
            $fileDestaque->move($uploadPathDestaque, $nomeDestaque);
            $dados['img_destaque'] = $nomeDestaque;
            unlink($uploadPathDestaque . $projeto['img_destaque']);
        }

        $fileCapa = $this->request->getFile('img_capa');
        if ($fileCapa && $fileCapa->isValid() && !$fileCapa->hasMoved()) {
            $nomeCapa = $fileCapa->getRandomName();
            $fileCapa->move($uploadPathCapa, $nomeCapa);
            $dados['img_capa'] = $nomeCapa;
            unlink($uploadPathCapa . $projeto['img_capa']);
        }

        $projetosModel->update($id, $dados);

        $ProjetoTecnologiaModel->where('projeto_id', $id)->delete();

        $tecnologias = $this->request->getPost('opcoes') ?? [];

        foreach ($tecnologias as $itens) {

            $tecnologia = [
                'projeto_id' => $id,
                'tecnologia_id' => $itens,
            ];

            $ProjetoTecnologiaModel->insert($tecnologia);
        }

        $imagens = $this->request->getFiles('img');

        foreach ($imagens['img'] as $imagem) {

            if ($imagem && $imagem->isValid() && !$imagem->hasMoved()) {

                $nomeImg = $imagem->getRandomName();
                $imagem->move('img/projetos/imagens/', $nomeImg);
                $i['img_projeto'] = $nomeImg;
                $i['alt_text'] = 'foto do projeto';

                $imagensModel->insert($i);

                $idImg = $imagensModel->insertID();

                $ir = [
                    'imagem_id' => $idImg,
                    'projeto_id' => $id,
                ];

                $projetoImagem->insert($ir);
            }
        }
        $imagensDelete = $this->request->getPost('excluir');

        if (isset($imagensDelete)) {
            foreach ($imagensDelete as $itens) {
                $i = $imagensModel->find($itens);

                var_dump($i['img_projeto']);
                $imagensModel->delete($itens);

                $caminhoImagem = FCPATH . 'img/projetos/imagens/' . $i['img_projeto'];

                unlink($caminhoImagem);
                $projetoImagem->where('imagem_id', $itens)->delete();
            }
        }
        return redirect()->to('adm/home');
    }

    public function adm(){
        return view('adm/loginADM');
    }

}
