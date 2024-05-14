<?php echo $this->extend('layouts/main_layout'); ?>
<?php echo $this->section('content'); ?>

<div class="container mt-5">
	<div class="row">
		<div class="col">

			<!-- search bar -->
			<?php echo form_open(); ?>
				<div class="mb-3 d-flex">
					<input type="text" name="text_search" class="form-control w-50 me-3">
					<button class="btn btn-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
				</div>
			<?php echo form_close(); ?>

			<!-- status filter -->
			
		</div>

		<div class="col text-end">
			<!-- new task button -->
			[new task]
		</div>
	</div>
</div>

<?php echo $this->endSection(); ?>
