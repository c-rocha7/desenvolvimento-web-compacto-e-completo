<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo APP_NAME; ?></title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/bootstrap.min.css'); ?>">

		<!-- Fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.min.css'); ?>">

	</head>
	<body>
		
		<!-- render top bar when logged in -->
		<?php if (session()->has('id')) { ?>
			<?php echo $this->include('layouts/top_bar'); ?>
		<?php } ?>

		<!-- render section -->
		<?php echo $this->renderSection('content'); ?>

		<!-- Bootstrap JS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/bootstrap.bundle.min.css'); ?>">

	</body>
</html>
