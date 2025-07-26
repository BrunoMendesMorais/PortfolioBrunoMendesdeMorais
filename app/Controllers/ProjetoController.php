<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ImagemModel;
use App\Models\ImagemProjeto;
use App\Models\ProjetoModel;
use CodeIgniter\HTTP\ResponseInterface;

class ProjetoController extends BaseController
{
    public function index()
    {
        return view("main/Projetos");
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

        foreach ($a as $tomate) {
            $img = $ImagemModel->where('id_imagem', $tomate['imagem_id'])->first();
            array_push($c,$img);
        }
        
        $dados['imagens'] = $c;
        $dados['projeto'] = $ProjetoModel->find($id);
        return view("main/DetalheDoProjeto", $dados);
    }
}
