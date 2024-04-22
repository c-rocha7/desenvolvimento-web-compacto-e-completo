<?php
$frutas = ['Maçã', 'Laranja', 'Banana', 'Pera', 'Mamão', 'Melancia', 'Melão'];
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercício 004</title>
	</head>
	<body>
		<ul>
			<?php foreach ($frutas as $fruta) { ?>
				<li><?php echo $fruta; ?></li>
			<?php } ?>
		</ul>
	</body>
</html>
