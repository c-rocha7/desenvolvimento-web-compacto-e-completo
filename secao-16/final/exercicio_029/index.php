<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if (!empty($_POST['text_nome'])) {
		$nome = $_POST['text_nome'];
	}

	if (!empty($_POST['text_apelido'])) {
		$apelido = $_POST['text_apelido'];
	}

	if (!empty($nome) && !empty($apelido)) {
		$frase_completa = "Olá, $nome $apelido";
	}
}

?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercício 029</title>
		<link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
	</head>

	<body>
		<div class="container mt-5">
			<div class="row justify-content-center">
				<div class="col-sm-4">
					<form action="index.php" method="post">
						<div class="mb-3">
							<input type="text" name="text_nome" class="form-control" placeholder="Nome" value="<?= !empty($nome) ? $nome : ''; ?>">
						</div>
						<div class="mb-3">
							<input type="text" name="text_apelido" class="form-control" placeholder="Apelido" value="<?= !empty($apelido) ? $apelido : ''; ?>">
						</div>
						<div class="mb-3 text-center">
							<input type="submit" value="Enviar" class="btn btn-secondary">
						</div>
					</form>
				</div>

				<?php if(!empty($frase_completa)) : ?>
					<h3><?= $frase_completa ?></h3>
				<?php endif; ?>
			</div>
		</div>

		<script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
	</body>

</html>
