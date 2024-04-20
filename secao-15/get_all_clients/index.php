<?php

// returns all clients

require_once '../_inc/init.php';

// check if request method is valid
check_request_method($request_method, 'GET');

$results = $db->execute_query('SELECT * FROM clientes');

// integration key
check_integration_key_get();

$res->set_status('success');
$res->set_response_data($results->results);

// adicional field
$res->set_adicional_field('total_clients', $results->affected_rows);

$res->response();
