<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Olá Laravel 11!',
            'description' => 'Aprendendo Laravel 11'
        ];

        return view('main', $data);
    }
}
