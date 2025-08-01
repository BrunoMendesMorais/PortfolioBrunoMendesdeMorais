<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ConteudosModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdmController extends BaseController
{
    public function home()
    {
        $ContudosModel = new ConteudosModel();
        $dados = array();
        $dados['home'] = $ContudosModel->first();
        return view('adm/homeAdm',$dados);
    }
}
