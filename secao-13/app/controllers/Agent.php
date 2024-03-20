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

        // check if there are validation errors
        if (!empty($_SESSION['validation_errors'])) {
            $data['validation_errors'] = $_SESSION['validation_errors'];
            unset($_SESSION['validation_errors']);
        }

        // check if there is a server error
        if (!empty($_SESSION['server_error'])) {
            $data['server_error'] = $_SESSION['server_error'];
            unset($_SESSION['server_error']);
        }

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

        // form validation
        $validation_erros = [];

        // text_name
        if (empty($_POST['text_name'])) {
            $validation_erros[] = 'Nome é de preenchimento obrigatório.';
        } else {
            if (strlen($_POST['text_name']) < 3 || strlen($_POST['text_name']) > 50) {
                $validation_erros[] = 'O nome deve ter entre 3 e 50 caracteres.';
            }
        }

        // gender
        if (empty($_POST['radio_gender'])) {
            $validation_erros[] = 'É obrigatório definir o género.';
        }

        // text_birthdate
        if (empty($_POST['text_birthdate'])) {
            $validation_erros[] = 'Data de nascimento é obrigatório.';
        } else {
            // check if birthdate is valid and is older than today
            $birthdate = \DateTime::createFromFormat('d-m-Y', $_POST['text_birthdate']);
            if (!$birthdate) {
                $validation_erros[] = 'A data de nascimento não está no formato correto.';
            } else {
                $today = new \DateTime();
                if ($birthdate >= $today) {
                    $validation_erros[] = 'A data de nascimento tem que esr anterior ao dia atual';
                }
            }
        }

        // email
        if (empty($_POST['text_email'])) {
            $validation_erros[] = 'Email é de preenchimento obrigatório.';
        } else {
            if (!filter_var($_POST['text_email'], FILTER_VALIDATE_EMAIL)) {
                $validation_erros[] = 'Email não é válido.';
            }
        }

        // phone
        if (empty($_POST['text_phone'])) {
            $validation_erros[] = 'Telefone é de preenchimento obrigatório.';
        } else {
            if (!preg_match("/^9{1}\d{8}$/", $_POST['text_phone'])) {
                $validation_erros[] = 'O telefone deve começar por 9 e ter 9 algarismos no total.';
            }
        }

        // check if there are validation errors to return to the from
        if (!empty($validation_erros)) {
            $_SESSION['validation_errors'] = $validation_erros;
            $this->new_client_frm();

            return;
        }

        // check if the client already exists with the same name
        $model   = new Agents();
        $results = $model->check_if_clients_exists($_POST);

        if ($results['status']) {
            // a person with the same name exists for this agent. Returns a server error
            $_SESSION['server_error'] = 'Já existe um cliente com esse nome.';
            $this->new_client_frm();

            return;
        }

        // add new client to the database
        $model->add_new_client_to_database($_POST);

        // return to the main clients page
        $this->my_clients();
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
