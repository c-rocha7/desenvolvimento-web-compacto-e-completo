<header class="container-fluid">
	<div class="row align-items-center bg-secondary text-white">
		<div class="col p-4">
			<h3><?php echo APP_NAME; ?></h3>
		</div>
		<div class="col p-4 text-end">
			<i class="fa-regular fa-user me-2"></i><?php echo session()->usuario(); ?>
			<span class="opacity-50 mx-3">|</span>
			<a href="<?php echo site_url('logout'); ?>" class="btn btn-sm btn-outline-primary"><i class="fa-solid fa-arrow-right-from-bracket"></i>Sair</a>
		</div>
	</div>
</header>
