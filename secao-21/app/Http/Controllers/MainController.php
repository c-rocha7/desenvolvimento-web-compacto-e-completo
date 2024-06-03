<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    // =========================================================================
    // main
    // =========================================================================
    public function index()
    {
        $data = [
            'title' => 'Gestor de Tarefas',
        ];

        return view('main', $data);
    }

    // =========================================================================
    // login
    // =========================================================================
    public function login()
    {
        $data = [
            'title' => 'Login',
        ];

        return view('login_frm', $data);
    }

    public function login_submit()
    {
        // ...
    }

    // =========================================================================
    // logout
    // =========================================================================
    public function logout()
    {
        session()->forget('username');
        return redirect()->route('login');
    }
}
