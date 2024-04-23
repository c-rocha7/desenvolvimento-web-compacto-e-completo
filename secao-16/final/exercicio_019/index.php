<?php

$file = fopen('dados.txt', 'w');

$total = rand(2000, 3000);

for ($i =0; $i < $total; $i++) {
	if($i != $total -1){
		fputs($file, uniqid() . PHP_EOL);
	} else {
		fputs($file, uniqid());
	}
}

fclose($file);
