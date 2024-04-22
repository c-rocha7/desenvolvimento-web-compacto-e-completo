<?php

$nomes = require 'nomes.php';

$file_a_m = fopen('nomes_a_m.txt', 'w');
$file_n_z = fopen('nomes_n_z.txt', 'w');

foreach ($nomes as $nome) {
	$primeira_letra = strtoupper($nome[0]);
	if ($primeira_letra >= 'A' && $primeira_letra <= 'M') {
		fwrite($file_a_m, $nome . PHP_EOL);
	} else {
		fwrite($file_n_z, $nome . PHP_EOL);
	}
}

fclose($file_a_m);
fclose($file_n_z);
