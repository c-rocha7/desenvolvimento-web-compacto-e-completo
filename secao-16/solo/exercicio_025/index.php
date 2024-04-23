<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercício 025</title>
		<link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
		<script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
	</head>
	<body>
		<div class="container">
			<form action="" method="post">
				<div class="row">
					<div class="col-6">
						<label for="nome" class="form-label">Nome:</label>
						<input type="text" name="nome" class="form-control">
					</div>
					<div class="col-6">
						<label for="apelido" class="form-label">Apelido:</label>
						<input type="text" name="apelido" class="form-control">
					</div>
				</div>
				<div class="row mt-1">
					<div class="col-12">
						<button type="submit" class="btn btn-primary">Enviar</button>
					</div>
				</div>
			</form>
		</div>
		<?php
			if ($_POST) {
				$nome = $_POST['nome'];
				$apelido = $_POST['apelido'];
				echo "<h1>Bom dia, $nome $apelido</h1>";
			}
		?>
	</body>
</html>
