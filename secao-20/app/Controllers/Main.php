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
        $data = [];

        // check for validation errors
        $validation_errors = session()->getFlashdata('validation_errors');
        if ($validation_errors) {
            $data['validation_errors'] = $validation_errors;
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

        $usuario = $this->request->getPost('text_usuario');
        $senha   = $this->request->getPost('text_senha');

        dd([$usuario, $senha]);
    }
}
