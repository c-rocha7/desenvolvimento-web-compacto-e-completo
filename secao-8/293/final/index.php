<?php

/* 
Vamos a um pequeno exercício prático onde vamos
implementar várias matérias estudadas até ao momento.
Vamos guardar dentro de um ficheiro de texto
a tabuada dos 3 até à multiplicação por 1000.
3 x 1 = 3 ... 3 x 1000 = 3000
*/

// criar ou truncar o ficheiro
file_put_contents('tabuada.txt', '');

for ($i = 1; $i <= 1000; $i++) {
	$resultado = "3 x $i = " . (3 * $i) . PHP_EOL;
	file_put_contents('tabuada.txt', $resultado, FILE_APPEND);
}

echo 'terminado';
