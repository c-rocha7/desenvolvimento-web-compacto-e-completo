<?php

namespace bng\Controllers;

use bng\Models\AdminModel;

class Admin extends BaseController
{
    // =======================================================
    public function all_clients()
    {
        // check if session has a user with admin profile
        if (!check_session() || 'admin' != $_SESSION['user']->profile) {
            header('Location: index.php?ct=main&mt=index');
        }

        // get all clients from all agents
        $model   = new AdminModel();
        $results = $model->get_all_clients();

        $data['user']    = $_SESSION['user'];
        $data['clients'] = $results->results;

        $this->view('layout/html_header');
        $this->view('navbar', $data);
        $this->view('global_clients', $data);
        $this->view('footer');
        $this->view('layout/html_footer');
    }

    // =======================================================
    public function export_clients_xlsx()
    {
        // check if session has a user with admin profile
        if (!check_session() || 'admin' != $_SESSION['user']->profile) {
            header('Location: index.php?ct=main&mt=index');
        }

        // get all clients from all agents
        $model   = new AdminModel();
        $results = $model->get_all_clients();
        $results = $results->results;

        // add header to collection
        $data[] = ['name', 'gender', 'birthdate', 'email', 'phone', 'interests', 'created_at'];

        // place all clients in the $data collection
        foreach ($results as $client) {
            // remove the first property (id)
            unset($client->id);

            // add data as array (original $client is a stdClass object)
            $data[] = (array) $client;
        }

        // store the data into the XLSX file
        $filename    = 'output_'.time().'.xlsx';
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $spreadsheet->removeSheetByIndex(0);
        $worksheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'dados');
        $spreadsheet->addSheet($worksheet);
        $worksheet->fromArray($data);

        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.urlencode($filename).'"');
        $writer->save('php://output');

        // logger
        logger(get_active_user_name().' - fez download da lista de clients para o ficheiro: '.$_FILES['client_file']['name'].' | total: '.count($data) - 1 .' registros');
    }

    // =======================================================
    public function stats()
    {
        // check if session has a user with admin profile
        if (!check_session() || 'admin' != $_SESSION['user']->profile) {
            header('Location: index.php');
        }

        // get all clients from all agents
        $model          = new AdminModel();
        $data['agents'] = $model->get_agents_clients_stats();

        // display the stats page
        $data['user'] = $_SESSION['user'];

        // prepare data to chartjs
        if (0 != count($data['agents'])) {
            $labels_tmp = [];
            $totals_tmp = [];
            foreach ($data['agents'] as $agent) {
                $labels_tmp[] = $agent->agente;
                $totals_tmp[] = $agent->total_clientes;
            }
            $data['chart_labels'] = '["'.implode('","', $labels_tmp).'"]';
            $data['chart_totals'] = '['.implode(',', $totals_tmp).']';
            $data['chart_js']     = true;
        }

        // get global stats
        $data['global_stats'] = $model->get_global_stats();

        $this->view('layout/html_header', $data);
        $this->view('navbar', $data);
        $this->view('stats', $data);
        $this->view('footer');
        $this->view('layout/html_footer');
    }
}
