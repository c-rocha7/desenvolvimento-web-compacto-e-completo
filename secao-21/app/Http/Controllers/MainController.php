<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function users()
    {
        // get users with raw sql
        // $users = DB::select('SELECT * FROM users_tasks');
        // dd($users);

        // with query builder
        // $users = DB::table('users_tasks')->get();
        // dd($users);

        // with query builder - return in array
        // $users = DB::table('users_tasks')->get()->toArray();
        // dd($users);

        // echo '<pre>';
        // print_r($users);
    }
}
