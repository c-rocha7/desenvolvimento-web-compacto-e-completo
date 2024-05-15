<?php

echo $this->extend('layouts/main_layout'); ?>
<?php echo $this->section('content'); ?>

<section class="container mt-5">
	<div class="row">
		<div class="col">

			<!-- search bar -->
			<?php echo form_open('search'); ?>
				<div class="mb-3 d-flex align-items-center">
					<label class="me-3">Pesquisa: </label>
					<input type="text" name="text_search" class="form-control w-50 me-3">
					<button class="btn btn-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
				</div>
			<?php echo form_close(); ?>
		</div>

		<div class="col">
			<!-- status filter -->
			<?php echo form_open('filter'); ?>
				<div class="d-felx mb-3 align-items-center">
					<label class="me-3">Status:</label>
					<select name="select_status" class="form-select">
						<?php foreach (STATUS_LIST as $key => $value) { ?>
							<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
						<?php } ?>
					</select>
				</div>
			<?php echo form_close(); ?>
		</div>

		<div class="col text-end">
			<!-- new task button -->
			<a href="<?php echo site_url('new_task'); ?>" class="btn btn-primary"><i class="fa-solid fa-plus me-2"></i>Nova Tarefa</a>
		</div>
	</div>
</section>

<section class="container mt-3">
	<div class="row">
		<div class="col">
			<h3>Tarefas</h3>
		</div>
	</div>
</section>

<?php if (count($tasks) > 0) { ?>

	<section class="container mt-3">
		<div class="row">
			<div class="col">
				<h3>Tarefas</h3>
				<table class="table table-striped">
					<thead>
						<tr>
							<th width="50%">Tarefas</th>
							<th width="25%" class="text-center">Status</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($tasks as $task) { ?>
							<tr>
								<td><?php echo $task->task_name; ?></td>
								<td class="text-center"><?php echo STATUS_LIST[$task->task_status]; ?></td>
								<td class="text-end">
									<a href="<?php echo site_url('edit_task/'.$task->id); ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-edit"></i></a>
									<a href="<?php echo site_url('delete_task/'.$task->id); ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-trash"></i></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>

<?php } else { ?>

	<section class="container mt-3">
		<div class="row">
			<div class="col text-center">
				Não foram encontradas tarefas.
			</div>
		</div>
	</section>

<?php }?>

<?php echo $this->endSection(); ?>
