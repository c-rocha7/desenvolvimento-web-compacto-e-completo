<?php

if (isset($argv[1]) && is_numeric($argv[1])) {
    $file   = fopen('tabuada.txt', 'w');
    $numero = $argv[1];
    for ($i = 1; $i <= 1000; ++$i) {
        $string = "$numero x $i = ".$numero * $i.PHP_EOL;
        fwrite($file, $string);
        if (0 === $i % 100) {
            $separador = '----------';
            fwrite($file, $separador.PHP_EOL);
        }
    }

    fclose($file);
} else {
    echo 'Parâmetro inválido!'.PHP_EOL;
}
