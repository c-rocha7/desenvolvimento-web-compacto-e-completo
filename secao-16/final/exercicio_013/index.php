<?php
$profissoes = [
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
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
</head>
<body>
	<table class="table table-striped table-bordered">
		<thead class="table-dark">
			<tr>
				<th>Profissão</th>
				<th>Profissão em maiúsculo</th>
				<th>Profissão em minúsculo</th>
				<th>4 primeiras letras</th>
				<th>Quantidade de letras</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($profissoes as $profissao): ?>
				<tr>
					<td><?= $profissao; ?></td>
					<td><?= mb_strtoupper($profissao); ?></td>
					<td><?= mb_strtolower($profissao); ?></td>
					<td><?= substr($profissao, 0, 4); ?></td>
					<td><?= strlen($profissao); ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>
