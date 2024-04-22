<?php

if (isset($argv[1]) && is_numeric($argv[1])) {

	$numero = $argv[1];
	$file = fopen("tabuada_$numero.txt", 'w');
	for ($i = 1; $i <= 1000; $i++) {
		$resultado = $numero * $i;
		fwrite($file, "$numero x $i = $resultado" . PHP_EOL);
		if ($i % 100 == 0) {
			fwrite($file, str_repeat('-', 10) . PHP_EOL);
		}
	}
	fclose($file);
} else {
	echo 'Parâmetro inválido!' . PHP_EOL;
}
