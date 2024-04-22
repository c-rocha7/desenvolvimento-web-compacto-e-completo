<?php
$nomes = [
    'João',
    'Maria',
    'José',
];
$apelidos = [
    'Silva',
    'Teixeira',
    'Oliveira',
];
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercício 006</title>
	</head>
	<body>
		<ul>
			<?php for ($i = 0; $i < count($nomes); ++$i) {?>
				<li><?php echo $nomes[$i].' '.$apelidos[$i]; ?></li>
			<?php } ?>
		</ul>
	</body>
</html>
