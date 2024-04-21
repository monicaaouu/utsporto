

<?php $__env->startSection('konten'); ?>
<div class="pb-3"><a href="<?php echo e(route('education.index')); ?>" class="btn btn-secondary"><< Back</a></div>
<form action="<?php echo e(route('education.update', $data->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div class="mb-3">
        <label for="tittle" class="form-label">University Name</label>
        <input
            type="text"
            class="form-control"
            name="tittle"
            id="tittle"
            aria-describedby="helpId"
            placeholder="University Name"
            value="<?php echo e($data->judul); ?>"
        />
    </div>
    <div class="mb-4">
        <label for="tittle" class="form-label">Faculty Name</label>
        <input
            type="text"
            class="form-control"
            name="info1"
            id="info1"
            aria-describedby="helpId"
            placeholder="Faculty Name"
            value="<?php echo e($data->info1); ?>"
        />
    </div>
    <div class="mb-4">
        <label for="tittle" class="form-label">Study Program</label>
        <input
            type="text"
            class="form-control"
            name="info2"
            id="info2"
            aria-describedby="helpId"
            placeholder="Study Program"
            value="<?php echo e($data->info2); ?>"
        />
    </div>
    <div class="mb-4">
        <div class="row">
            <div class="col-auto">Date Start</div>
            <div class="col-auto">
                <input type="date"
                class="form-control form-control-sm"
                name="tgl_mulai"
                placeholder="dd/mm/yyyy"
                value="<?php echo e($data->tgl_mulai); ?>">
            </div>
            <div class="col-auto">Date End</div>
            <div class="col-auto">
                <input type="date"
                class="form-control form-control-sm"
                name="tgl_akhir"
                placeholder="dd/mm/yyyy"
                value="<?php echo e($data->tgl_akhir); ?>">
            </div>
        </div>
    </div>
    <button class="btn btn-primary" name="submit" type="submit">Submit</button>
    
</form>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\utsporto\resources\views/dashboard/education/edit.blade.php ENDPATH**/ ?>