<?php

namespace App\Controllers;

use App\Models\UsuariosModel;

class Main extends BaseController
{
    public function index()
    {
        if (session()->has('id')) {
            echo 'Logado';
        } else {
            echo 'Não logado';
        }
    }

    public function login()
    {
        $data = [];

        // check for validation errors
        $validation_errors = session()->getFlashdata('validation_errors');
        if ($validation_errors) {
            $data['validation_errors'] = $validation_errors;
        }

        // check for login errors
        $login_error = session()->getFlashdata('login_error');
        if ($login_error) {
            $data['login_error'] = $login_error;
        }

        return view('login_frm', $data);
    }

    public function login_submit()
    {
        // form validation
        $validation = $this->validate(
            // validation rules
            [
                'text_usuario' => 'required',
                'text_senha'   => 'required',
            ],
            // validation errors
            [
                'text_usuario' => [
                    'required' => 'O campo usuário é obrigatório',
                ],
                'text_senha' => [
                    'required' => 'O campo senha é obrigatório',
                ],
            ]
        );

        if (!$validation) {
            return redirect()->to('login')->withInput()->with('validation_errors', $this->validator->getErrors());
        }

        // check if login is valid
        $usuario = $this->request->getPost('text_usuario');
        $senha   = $this->request->getPost('text_senha');

        $usuarios_model = new UsuariosModel();
        $usuario_data   = $usuarios_model->where('usuario', $usuario)->first();

        // if usuario is not found
        if (!$usuario_data) {
            return redirect()->to('login')->withInput()->with('login_error', 'Usuário ou senha inválidos.');
        }

        // if senha is not valid
        if (!password_verify($senha, $usuario_data->senha)) {
            return redirect()->to('login')->withInput()->with('login_error', 'Usuário ou senha inválidos.');
        }

        // login is valid
        $session_data = [
            'id'      => $usuario_data->id,
            'usuario' => $usuario_data->usuario,
        ];
        session()->set($session_data);

        // redirect to home page
        return redirect()->to('/');
    }
}
