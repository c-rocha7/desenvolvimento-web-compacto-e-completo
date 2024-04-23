<?php

$nomes = require 'nomes.php';

foreach($nomes as $nome){
	$primeira_letra = strtoupper($nome[0]);
	if($primeira_letra >= 'A' && $primeira_letra <= 'M'){
		echo $nome . PHP_EOL;
	}
}
