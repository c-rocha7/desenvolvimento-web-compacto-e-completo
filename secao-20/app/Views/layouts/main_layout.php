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

		<!-- Datatables -->
		<?php if (!empty($datatables)) { ?>
			<link rel="stylesheet" href="<?php echo base_url('assets/datatables/datatables.min.css'); ?>">
			<script src="<?php echo base_url('assets/datatables/jQuery-3.7.0/jquery-3.7.0.min.js'); ?>"></script>
		<?php } ?>

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

		<!-- Datatables -->
		<?php if (!empty($datatables)) { ?>
			<script src="<?php echo base_url('assets/datatables/datatables.min.js'); ?>"></script>
		<?php } ?>

	</body>
</html>
