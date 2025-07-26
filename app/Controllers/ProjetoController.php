<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ImagemModel;
use App\Models\ImagemProjeto;
use App\Models\ProjetoModel;
use App\Models\TecnologiaModel;
use CodeIgniter\HTTP\ResponseInterface;

class ProjetoController extends BaseController
{
    public function index()
    {
        $dados = array();
        $TecnologiaModel = new TecnologiaModel();
        $ProjetoModel = new ProjetoModel();
        $dados["projeto"] = $ProjetoModel->select('titulo, img_capa, id_projeto',)->findAll();
        $dados["tecnologia"] = $TecnologiaModel->select()->findAll();
        return view("main/Projetos", $dados);
    }

    public function DetalheDoProjeto($id)
    {
        $dados = array();
        $a = array();
        $ProjetoModel = new ProjetoModel();
        $ImagemProjetoModel = new ImagemProjeto();
        $ImagemModel = new ImagemModel();

        $a = $ImagemProjetoModel->where('projeto_id', $id)->findAll();
        $c = array();

        foreach ($a as $itens) {
            $img = $ImagemModel->where('id_imagem', $itens['imagem_id'])->first();
            array_push($c, $img);
        }

        $dados['imagens'] = $c;
        $dados['projeto'] = $ProjetoModel->find($id);
        return view("main/DetalheDoProjeto", $dados);
    }
}
