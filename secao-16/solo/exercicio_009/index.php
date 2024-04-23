<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercício 009</title>
	</head>
	<body>
		<?php
            for ($i = 1; $i <= 20; ++$i) {
                $num_random = random_int(1, 100);
                echo "$num_random x 3 = ".$num_random * 3 .'<br>';
            }
		?>
	</body>
</html>
