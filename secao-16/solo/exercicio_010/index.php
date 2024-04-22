<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercício 010</title>
	</head>
	<body>
		<?php
			$array = [];
			$contador = 0;
			while ($contador <= 20) {
				$num = rand(1, 100);
				if (in_array($num, $array)) {
					continue;
				}
				$array[] = $num;
				$contador++;
			}
			sort($array);

			foreach ($array as $value) {
				echo $value . "<br>";
			}
		?>
	</body>
</html>
