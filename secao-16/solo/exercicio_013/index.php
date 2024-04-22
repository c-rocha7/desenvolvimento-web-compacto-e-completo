<?php
$array = [
    'Programador',
    'Designer',
    'Engenheiro',
    'Médico',
    'Advogado',
    'Professor',
    'Bombeiro',
    'Policial',
    'Piloto',
    'Cientista',
];
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercício 013</title>
		<link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
		<script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
	</head>
	<body>
		<table class="table">
			<thead>
				<tr>
					<th>Profissão</th>
					<th>Profissão em maiúsculo</th>
					<th>Profissão em minúsculo</th>
					<th>4 primeiras letras</th>
					<th>Quantidade de letras</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array as $value) { ?>
					<tr>
						<td><?php echo $value; ?></td>
						<td><?php echo strtoupper($value); ?></td>
						<td><?php echo strtolower($value); ?></td>
						<td><?php echo substr($value, 0, 4); ?></td>
						<td><?php echo strlen($value); ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</body>
</html>
