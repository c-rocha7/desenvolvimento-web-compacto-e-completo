<?php
$valores           = [];
$valores_proibidos = ['10', '20', '30', '40', '50', '60', '70', '80', '90'];
while (count($valores) < 20) {
    $valor = rand(1, 100);
    if (!in_array($valor, $valores) && !in_array($valor, $valores_proibidos)) {
        $valores[] = $valor;
    }
}
sort($valores);
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercício 011</title>
	</head>
	<body>
		<?php foreach ($valores as $valor) { ?>
			<?php echo $valor; ?><br>
		<?php } ?>
	</body>
</html>
