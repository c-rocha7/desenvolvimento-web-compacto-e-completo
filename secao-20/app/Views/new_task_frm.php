<?php echo $this->extend('layouts/main_layout'); ?>
<?php echo $this->section('content'); ?>
	
<div class="container mt-5">
	<div class="row">
		<div class="col">
			<h3>Nova Tarefa</h3>
			<hr>
			<?php echo form_open('new_task_submit', ['novalidate' => true]); ?>
				<div class="mb-3">
					<label class="form-label">Nome da tarefa</label>
					<input type="text" name="text_tarefa" class="form-control" placeholder="Nome da tarefa" required value="<?php old('text_tarefa', ''); ?>">
				</div>
				<div class="mb-3">
					<label class="form-label">Descrição da tarefa</label>
					<textarea name="text_descricao" class="form-control" rows="3"><?php old('text_descricao', ''); ?></textarea>
				</div>

				<div class="text-center">
					<a href="<?php echo site_url('/'); ?>" class="btn btn-primary px5">Cancelar</a>
					<button type="submit" class="btn btn-secondary px-5">Guardar</button>
				</div>
				
			<?php echo form_close(); ?>

			<?php if (!empty($validation_errors)) { ?>
				<div class="alert alert-danger mt-3">
					<ul>
						<?php foreach ($validation_errors as $error) { ?>
							<li><?php echo $error; ?></li>
						<?php } ?>
					</ul>
				</div>
			<?php } ?>
			

		</div>
	</div>
</div>

<?php echo $this->endSection(); ?>
