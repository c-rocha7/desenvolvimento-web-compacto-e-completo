<?php

/* 
Vamos a um pequeno exercício prático onde vamos
implementar várias matérias estudadas até ao momento.
Vamos guardar dentro de um ficheiro de texto
a tabuada dos 3 até à multiplicação por 1000.
3 x 1 = 3 ... 3 x 1000 = 3000
*/

$multiplicador = 1;

while ($multiplicador <= 1000) {
	file_put_contents('tabuada.txt', '3 x ' . $multiplicador . ' = ' . $multiplicador * 3 . PHP_EOL, FILE_APPEND);
	$multiplicador++;
}
