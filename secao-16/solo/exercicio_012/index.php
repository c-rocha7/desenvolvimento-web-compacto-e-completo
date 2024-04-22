<?php
$array = [
    'nome'      => 'João',
    'idade'     => 20,
    'altura'    => 1.80,
    'peso'      => 80,
    'profissão' => 'Programador',
];
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercício 012</title>
	</head>
	<body>
		<?php foreach ($array as $key => $value) {
		    echo ucfirst($key).' = '.$value.'<br>';
		} ?>
	</body>
</html>
