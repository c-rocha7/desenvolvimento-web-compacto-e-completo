<?php

function gerarHashUnico()
{
    return md5(uniqid(rand(), true));
}

$hashes = [];

for ($i = 0; $i < 1000; ++$i) {
    $hash = gerarHashUnico();

    while (in_array($hash, $hashes)) {
        $hash = gerarHashUnico();
    }

    $hashes[] = $hash;
}

$arquivo = fopen('dados.txt', 'w');

foreach ($hashes as $hash) {
    fwrite($arquivo, $hash.PHP_EOL);
}

fclose($arquivo);

echo "Arquivo 'dados.txt' criado com sucesso.\n";
