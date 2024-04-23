<?php
$nomes = [
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
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercício 007</title>
	</head>
	<body>
		<ul>
			<?php foreach ($nomes as $nome) { ?>
				<?php if (strlen($nome) <= 12) { ?>
					<li><?php echo $nome; ?></li>
				<?php } ?>
			<?php } ?>
		</ul>
	</body>
</html>
