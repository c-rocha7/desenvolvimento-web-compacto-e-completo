<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        echo 'Gestor de Tarefas';
    }

    public function login()
    {
        $data = [
            'title' => 'Login',
        ];

        return view('login_frm', $data);
    }

    public function login_submit()
    {
        // fake login
        session()->put('username', 'admin');
        echo 'Logado';
    }

    // main page
    public function main()
    {
        $data = [
            'title' => 'Main',
        ];

        return view('main', $data);
    }

    // logout
    public function logout()
    {
        session()->forget('username');
        return redirect()->route('login');
    }
}
