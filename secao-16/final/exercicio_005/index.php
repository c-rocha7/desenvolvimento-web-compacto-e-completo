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
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<ul>
			<?php foreach ($frutos as $fruto) : ?>
				<li><?= $fruto ?></li>
			<?php endforeach; ?>
		</ul>
	</body>
</html>
