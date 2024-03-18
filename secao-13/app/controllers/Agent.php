<?php

namespace bng\Controllers;

use bng\Models\Agents;

class Agent extends BaseController
{
    // =======================================================
    public function my_clients()
    {
        if (!check_session() || 'agent' != $_SESSION['user']->profile) {
            header('Location: index.php');
        }

        // get all agent clients
        $id_agent = $_SESSION['user']->id;
        $model    = new Agents();
        $results  = $model->get_agent_clients($id_agent);

        $data['user']    = $_SESSION['user'];
        $data['clients'] = $results['data'];

        $this->view('layouts/html_header');
        $this->view('navbar', $data);
        $this->view('agent_clients', $data);
        $this->view('footer');
        $this->view('layouts/html_footer');
    }

    // =======================================================
    public function new_client_frm()
    {
        if (!check_session() || 'agent' != $_SESSION['user']->profile) {
            header('Location: index.php');
        }

        $data['user']      = $_SESSION['user'];
        $data['flatpickr'] = true;

        $this->view('layouts/html_header', $data);
        $this->view('navbar', $data);
        $this->view('insert_client_frm');
        $this->view('footer');
        $this->view('layouts/html_footer');
    }

    // =======================================================
    public function new_client_submit()
    {
        if (!check_session() || 'agent' != $_SESSION['user']->profile || 'POST' != $_SERVER['REQUEST_METHOD']) {
            header('Location: index.php');
        }

        printData($_POST);
    }

    // =======================================================
    public function edit_client($id)
    {
        echo "editar $id";
    }

    // =======================================================
    public function delete_client($id)
    {
        echo "eliminar $id";
    }
}
