<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TasksModel;
use App\Models\UsuariosModel;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        // index
    }

    public function login()
    {
        return view('login_frm');
    }

    public function login_submit()
    {
        $usuario = $this->request->getPost('text_usuario');
        $senha = $this->request->getPost('text_senha');

        if (empty($usuario) || empty($senha)) {
            return redirect()->to('login')->withInput()->with('error', 'Usuário e senha obrigatórios.');
        }

        echo 'Usuário: ' . $usuario . '<br>';
        echo 'Senha: ' . $senha . '<br>';

        // como fazemos para validar o usuário e senha?
    }
}
