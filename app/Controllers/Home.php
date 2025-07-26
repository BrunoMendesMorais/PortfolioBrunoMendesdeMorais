<?php

namespace App\Controllers;

use App\Models\ProjetoModel;
use App\Models\TecnologiaModel;

class Home extends BaseController
{
    public function index()
    {
        $dados = array();
        $TecnologiaModel = new TecnologiaModel();
        $ProjetoModel = new ProjetoModel();
        $dados["projeto"] = $ProjetoModel->select('titulo, img_capa, id_projeto',)->findAll();
        $dados["tecnologia"] = $TecnologiaModel->select()->findAll();
        return view('main/Home', $dados);
    }
}
