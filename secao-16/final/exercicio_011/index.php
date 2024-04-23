<?php
$valores = [];
while(count($valores) < 20) {
	$valor = rand(1, 100);
	if(!in_array($valor, $valores) && $valor % 10 != 0) {
		$valores[] = $valor;
	}
}
sort($valores);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php foreach($valores as $valor): ?>
		<?= $valor ?><br>
	<?php endforeach; ?>
</body>
</html>
