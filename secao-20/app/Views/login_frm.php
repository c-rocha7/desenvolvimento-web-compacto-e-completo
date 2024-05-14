<?php echo $this->extend('layouts/main_layout'); ?>
<?php echo $this->section('content'); ?>
	
<!-- login form with bootstrap -->
<div class="d-flex align-items-center" style="height: 100vh;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-4 col-sm-6 col-10">
				<div class="card bg-light text-dark rounded-3 p-5">

					<?php echo form_open('login_submit', ['novalidate' => true]); ?>

						<h3 class="text-center">Login</h3>
						<hr>
						<div class="mb-3">
							<input type="text" class="form-control" name="text_usuario" placeholder="Usuário" required value="<?php echo old('text_usuario', ''); ?>">
							<?php echo !empty($validation_errors['text_usuario']) ? '<p class="text-danger">'.$validation_errors['text_usuario'].'</p>' : ''; ?>
						</div>
						<div class="mb-3">
							<input type="password" class="form-control" name="text_senha"  placeholder="Senha" required value="<?php echo old('text_senha', ''); ?>">
							<?php echo !empty($validation_errors['text_senha']) ? '<p class="text-danger">'.$validation_errors['text_senha'].'</p>' : ''; ?>
						</div>
						<div class="mb-3">
							<button class="btn btn-primary w-100">Entrar</button>
						</div>

					<?php echo form_close(); ?>

					<?php if (!empty($login_error)) { ?>
						<div class="alert alert-danger text-center p-1">
							<?php echo $login_error; ?>
						</div>
					<?php } ?>

				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $this->endSection(); ?>
