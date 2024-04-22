<?php
$nomes_completos = [
    'João Oliveira',
    'Maria Teixeira',
    'José Silva',
    'Ana Santos',
    'Pedro Rodrigues',
    'Paulo Castro',
    'Lucas Dinis',
    'Luiz Matias',
    'Luiza Oliveira',
    'Paula Cardoso',
    'Paulina Fernandes',
];
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
			<?php foreach($nomes_completos as $nome_completo): ?>

				<?php if (strlen($nome_completo) > 12): ?>
					<?php continue; ?>
				<?php endif; ?>
				<li><?= $nome_completo ?></li>

			<?php endforeach; ?>
		</ul>
	</body>
</html>
