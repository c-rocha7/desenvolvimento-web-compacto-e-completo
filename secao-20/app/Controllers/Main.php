<?php

namespace App\Controllers;

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

        $usuario = $this->request->getPost('text_usuario');
        $senha   = $this->request->getPost('text_senha');

        dd([$usuario, $senha]);
    }
}
