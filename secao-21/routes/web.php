<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    try {
        DB::connection()->getPdo();
        echo "Conexão efetuada com sucesso. " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        die('Não foi possível ligar à base de dados. Erro:' . $e->getMessage());
    }

});
