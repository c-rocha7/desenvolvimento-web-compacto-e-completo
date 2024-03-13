<?php

namespace bng\Controllers;

class Main extends BaseController
{
    public function index()
    {
        $data['nome']    = 'Cauã';
        $data['apelido'] = 'Rocha';

        $this->view('layouts/html_header');
        $this->view('home', $data);
        $this->view('layouts/html_footer');
    }
}
