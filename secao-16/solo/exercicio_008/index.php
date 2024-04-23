<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercício 008</title>
	</head>
	<body>
		<?php
            for ($i = 2; $i <= 6; ++$i) {
                for ($j = 1; $j <= 10; ++$j) {
                    echo "$i x $j = ".$i * $j.'<br>';
                }
                if ($i < 6) {
                    echo '<hr>';
                }
            }
		?>
	</body>
</html>
