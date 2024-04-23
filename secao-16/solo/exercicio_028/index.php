<?php

if ('POST' == $_SERVER['REQUEST_METHOD']) {
    if (!empty($_POST['text_nome'])) {
        $nome = $_POST['text_nome'];
    } else {
        $error_nome = 'Por favor preencha o campo nome';
    }

    if (!empty($_POST['text_apelido'])) {
        $apelido = $_POST['text_apelido'];
    } else {
        $error_apelido = 'Por favor preencha o campo apelido';
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercício 028</title>
		<link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
	</head>

	<body>
		<div class="container mt-5">
			<div class="row justify-content-center">
				<div class="col-sm-4">
					<form action="index.php" method="post">
						<div class="mb-3">
							<input type="text" name="text_nome" class="form-control" placeholder="Nome">
							<?php if (!empty($error_nome)) { ?>
								<p class="text-danger"><?php echo $error_nome; ?></p>
							<?php } ?>
						</div>
						<div class="mb-3">
							<input type="text" name="text_apelido" class="form-control" placeholder="Apelido">
							<?php if (!empty($error_apelido)) { ?>
								<p class="text-danger"><?php echo $error_apelido; ?></p>
							<?php } ?>
						</div>
						<div class="mb-3 text-center">
							<input type="submit" value="Enviar" class="btn btn-secondary">
						</div>
					</form>
				</div>
			</div>
		</div>

		<script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
	</body>

</html>
