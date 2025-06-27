<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProjetoController extends BaseController
{
    public function index()
    {
        return view("main/Projetos");
    }
    public function DetalheDoProjeto()
    {
        return view("main/DetalheDoProjeto");
    }
}
