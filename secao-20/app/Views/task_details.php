<?php echo $this->extend('layouts/main_layout'); ?>
<?php echo $this->section('content'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col card p-5">
            
            <div class="mb-4">
                <h4 class="text-info"><?php echo $task->task_name; ?></h4>
            </div>
            <hr>
            <div class="mb-4">
                <p class="opacity-50">Descrição:</p>
                <h4><?php echo $task->task_description; ?></h4>
            </div>
            <div class="mb-4">
                <p class="opacity-50">Status:</p>
                <h4><?php echo STATUS_LIST[$task->task_status]; ?></h4>
            </div>
            <div class="text-center">
                <a href="<?php echo site_url('/'); ?>" class="btn btn-primary px-5">Voltar</a>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>
