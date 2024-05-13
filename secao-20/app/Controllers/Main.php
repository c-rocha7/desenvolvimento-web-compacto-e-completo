<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuariosModel;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        // echo 'Hello World!';

        $model = new UsuariosModel();
        $usuarios = $model->findAll();

        // dd($usuarios);
        // ou
        echo '<pre>';
        print_r($usuarios);
        echo '</pre>';
    }
}
