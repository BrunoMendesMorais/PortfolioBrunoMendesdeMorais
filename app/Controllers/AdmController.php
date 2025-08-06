<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ConteudosModel;
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
}
