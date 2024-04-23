<?php

	$error = "";
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(!empty($_POST['text_nome']) && !empty($_POST['text_apelido'])){
			$nome = $_POST['text_nome'];
			$apelido = $_POST['text_apelido'];
			$frase_completa = "Bom dia, $nome $apelido";
		} else {
			$error = "Aconteceu um erro no preenchimento do formulário.";
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
					</div>
					<div class="mb-3">
						<input type="text" name="text_apelido" class="form-control" placeholder="Apelido">
					</div>
					<div class="mb-3 text-center">
						<input type="submit" value="Enviar" class="btn btn-secondary">
					</div>
				</form>

				<?php if(!empty($frase_completa)):?>
					<h3><?= $frase_completa ?></h3>
				<?php elseif(!empty($error)):?>
					<p class="text-center text-danger"><?= $error ?></p>
				<?php endif; ?>

			</div>
		</div>
	</div>

	<script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
	
</body>

</html>
