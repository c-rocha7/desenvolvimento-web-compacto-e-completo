<?php

$nomes = require 'nomes.php';

$ficheiro_a_m = fopen('nomes_a_m.txt', 'w');
$ficheiro_n_z = fopen('nomes_n_z.txt', 'w');

foreach ($nomes as $nome) {
	$primeira_letra = strtoupper($nome[0]);
	if ($primeira_letra >= 'A' && $primeira_letra <= 'M') {
		fwrite($ficheiro_a_m, $nome . PHP_EOL);
	} else {
		fwrite($ficheiro_n_z, $nome . PHP_EOL);
	}
}

fclose($ficheiro_a_m);
fclose($ficheiro_n_z);
