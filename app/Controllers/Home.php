<?php

namespace App\Controllers;

use App\Models\ConteudosModel;
use App\Models\ProjetoModel;
use App\Models\ProjetoTecnologiaModel;
use App\Models\TecnologiaModel;

class Home extends BaseController
{
    public function index()
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
        return view('main/Home', $dados);
    }
}
