<?php

// contar o número de registos de dados.txt
$total = 0;
$file = fopen('dados.txt', 'r');
while(!feof($file)){
	$line = fgets($file);
	$total++;
}
fclose($file);

$total_por_ficheiro = $total / 3;

$input = fopen('dados.txt', 'r');
$file_output_index = 1;
$line_count = 1;

while(!feof($input)){
	$line=fgets($input);
	if(empty($line)) continue;
	$output = fopen('output_'.$file_output_index.'.txt', 'a');
	fwrite($output, $line);
	fclose($output);
	if($line_count == $total_por_ficheiro){
		$file_output_index++;
		$line_count = 1;
	}
	$line_count++;
}

fclose($input);
