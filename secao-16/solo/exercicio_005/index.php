<?php
$frutos = [
    'Maçã',
    'Laranja',
    'Banana',
    'Pera',
    'Mamão',
    'Melancia',
    'Melão',
    'Abacaxi',
    'Limão',
    'Carambola',
];
sort($frutos);
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercício 005</title>
	</head>
	<body>
		<ul>
			<?php foreach ($frutos as $fruto) { ?>
				<li><?php echo $fruto; ?></li>
			<?php }?>
		</ul>
	</body>
</html>
