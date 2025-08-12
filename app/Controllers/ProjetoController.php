<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ImagemModel;
use App\Models\ImagemProjeto;
use App\Models\ProjetoModel;
use App\Models\ProjetoTecnologiaModel;
use App\Models\TecnologiaModel;
use CodeIgniter\HTTP\ResponseInterface;

class ProjetoController extends BaseController
{
    public function index()
    {
        $dados = array();
        $itens['tecnologia'] = array();
        $a = array();
        $TecnologiaModel = new TecnologiaModel();
        $ProjetoModel = new ProjetoModel();
        $ProjetoTecnologiaModel = new ProjetoTecnologiaModel();
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
        return view("main/Projetos", $dados);
    }

    public function DetalheDoProjeto($id)
    {
        $dados = array();
        $a = array();
        $e = array();
        $ProjetoTecnologiaModel = new ProjetoTecnologiaModel();
        $TecnologiaModel = new TecnologiaModel();
        $ProjetoModel = new ProjetoModel();
        $ImagemProjetoModel = new ImagemProjeto();
        $ImagemModel = new ImagemModel();

        $d = $ProjetoTecnologiaModel->where('projeto_id', $id)->find();
        foreach($d as $itens){
            $filtro = $TecnologiaModel->where('id_tecnologia',$itens['tecnologia_id'])->first();
             array_push($e, $filtro);
        }

        $a = $ImagemProjetoModel->where('projeto_id', $id)->findAll();
        $c = array();

        foreach ($a as $itens) {
            $img = $ImagemModel->where('id_imagem', $itens['imagem_id'])->first();
            array_push($c, $img);
        }
        
        $dados['tecnologia'] = $e;  
        $dados['imagens'] = $c;
        $dados['projeto'] = $ProjetoModel->find($id);
        return view("main/DetalheDoProjeto", $dados);
    }
}
