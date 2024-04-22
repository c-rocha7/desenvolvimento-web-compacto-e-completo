<?php

function generateUniqueHash()
{
    return md5(uniqid(rand(), true));
}

$total_hashes = rand(2000, 3000);

$file = fopen('dados.txt', 'w');

for ($i = 0; $i < $total_hashes; ++$i) {
    fwrite($file, generateUniqueHash()."\n");
}

fclose($file);

echo "O arquivo 'dados.txt' foi criado com sucesso com $total_hashes hashes únicos.\n";
