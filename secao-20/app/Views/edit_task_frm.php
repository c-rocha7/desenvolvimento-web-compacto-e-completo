<?php echo $this->extend('layouts/main_layout'); ?>
<?php echo $this->section('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h3>Editar Tarefa</h3>
            <hr>
            <?php echo form_open('edit_task_submit'); ?>

            <!-- task id encrypted -->
            <input type="hidden" name="hidden_id" value="<?php echo encrypt($task->id); ?>">

            <div class="mb-3">
                <label class="form-label">Nome da tarefa</label>
                <input type="text" name="text_tarefa" class="form-control" placeholder="Nome da tarefa" required value="<?php echo old('text_tarefa', $task->task_name); ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Descrição da tarefa</label>
                <textarea name="text_descricao" class="form-control" rows="3"><?php echo old('text_descricao', $task->task_description); ?></textarea>
            </div>

            <!-- task status -->
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select class="form-select w-25" name="select_status">
                    <?php foreach (STATUS_LIST as $key => $value) { ?>
                        <option value="<?php echo $key; ?>" <?php echo check_status($key, $task->task_status); ?>><?php echo $value; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="text-center">
                <a href="<?php echo site_url('/'); ?>" class="btn btn-primary px-5">Cancelar</a>
                <button type="submit" class="btn btn-secondary px-5">Guardar</button>
            </div>

            <?php echo form_close(); ?>

            <?php if (!empty($validation_errors)) { ?>
                <div class="alert alert-danger mt-3">
                    <?php foreach ($validation_errors as $error) { ?>
                        <?php echo $error; ?>
                    <?php } ?>
                </div>
            <?php } ?>

        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>
