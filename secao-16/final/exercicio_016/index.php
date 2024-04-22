<?php

echo PHP_EOL;

if ($argc != 3) {
	echo 'Erro!' . PHP_EOL;
	die(1);
}

if (!is_numeric($argv[1]) || !is_numeric($argv[2])) {
	echo 'Erro!' . PHP_EOL;
	die(1);
}

echo $argv[1] . " + " . $argv[2] . " = " . $argv[1] + $argv[2] . PHP_EOL;
