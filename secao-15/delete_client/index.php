<?php

// delete client

require_once '../_inc/init.php';

// get JSON data
$data = json_decode(file_get_contents('php://input'), true);

// check if request method is valid
check_request_method($request_method, 'DELETE');

// check for required fields
$required_fields = ['id'];
if (!check_required_fields_in_json($data, $required_fields)) {
    $res->set_status('error');
    $res->set_error_message('Missing fields.');
    check_integration_key_json($data);
    $res->response();
}

// integration key
check_integration_key_json($data);

// params
$params = [
    ':id'   => $data['id'],
];

$db->execute_non_query('DELETE FROM clientes WHERE id = :id', $params);

$res->response();
