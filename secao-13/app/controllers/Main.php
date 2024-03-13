<?php

namespace bng\Controllers;

use bng\Models\Agents;

class Main extends BaseController
{
    public function index()
    {
        $model   = new Agents();
        $results = $model->get_total_agents();
        printData($results);

        $data['nome']    = 'Cauã';
        $data['apelido'] = 'Rocha';

        $this->view('layouts/html_header');
        $this->view('home', $data);
        $this->view('layouts/html_footer');
    }
}
