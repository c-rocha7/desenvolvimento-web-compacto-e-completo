<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$error[0] = '';
	if(empty($_POST['text_nome'])){
		$error[0] = 'O campo Nome é obrigatório';
	}

	$error[1] = '';
	if(empty($_POST['text_apelido'])){
		$error[1] = 'O campo Apelido é obrigatório';
	}

	if(empty($error[0]) && empty($error[1])){
		$frase_completa = "Olá, " . $_POST['text_nome'] . " " . $_POST['text_apelido'];
	}
}

?>
<!DOCTYPE html>
<html lang="pt">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
	</head>

	<body>
		<div class="container mt-5">
			<div class="row justify-content-center">
				<div class="col-sm-4">
					<form action="index.php" method="post">
						<div class="mb-3">
							<input type="text" name="text_nome" class="form-control" placeholder="Nome">
							<?php if(!empty($error[0])): ?>
								<div class="text-danger"><?= $error[0] ?></div>
							<?php endif; ?>
						</div>
						<div class="mb-3">
							<input type="text" name="text_apelido" class="form-control" placeholder="Apelido">
							<?php if(!empty($error[1])): ?>
								<div class="text-danger"><?= $error[1] ?></div>
							<?php endif; ?>
						</div>
						<div class="mb-3 text-center">
							<input type="submit" value="Enviar" class="btn btn-secondary">
						</div>
					</form>

					<?php if (!empty($frase_completa)) : ?>
						<h3><?= $frase_completa ?></h3>
					<?php endif; ?>

				</div>
			</div>
		</div>

		<script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
	</body>

</html>
