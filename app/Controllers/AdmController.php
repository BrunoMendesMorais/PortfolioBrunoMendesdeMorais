<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdmController extends BaseController
{
    public function home()
    {
        return view('adm/homeAdm');
    }
}
