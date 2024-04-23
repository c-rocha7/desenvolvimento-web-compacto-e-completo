<?php

if (isset($argv[1]) && is_numeric($argv[1])) {

	$numero = $argv[1];
	for ($i = 1; $i <= 10; ++$i) {
		echo "$numero x $i = " . $numero * $i . PHP_EOL;
	}
} else {
	echo 'Parâmetro inválido!' . PHP_EOL;
}
