<?php

$file = fopen('dados.txt', 'w');

for($i = 0; $i < 1000; $i++){
	if($i != 999){
		fputs($file, uniqid() . PHP_EOL);
	} else {
		fputs($file, uniqid());
	}
}

fclose($file);
