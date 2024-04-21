

<?php $__env->startSection('konten'); ?>
    <div class="pb-3"><a href="<?php echo e(route('experience.index')); ?>" class="btn btn-secondary"><< Back</a></div>
    <form action="<?php echo e(route('experience.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="tittle" class="form-label">Position</label>
            <input
                type="text"
                class="form-control"
                name="tittle"
                id="tittle"
                aria-describedby="helpId"
                placeholder="Position"
                value="<?php echo e(Session::get('judul')); ?>"
            />
        </div>
        <div class="mb-4">
            <label for="tittle" class="form-label">Company Name</label>
            <input
                type="text"
                class="form-control"
                name="info1"
                id="info1"
                aria-describedby="helpId"
                placeholder="Company Name"
                value="<?php echo e(Session::get('info1')); ?>"
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
                    value="<?php echo e(Session::get('tgl_mulai')); ?>">
                </div>
                <div class="col-auto">Date End</div>
                <div class="col-auto">
                    <input type="date"
                    class="form-control form-control-sm"
                    name="tgl_akhir"
                    placeholder="dd/mm/yyyy"
                    value="<?php echo e(Session::get('tgl_akhir')); ?>">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control summernote" id="content" rows="5" name="content" value="<?php echo e(Session::get('isi')); ?>">
            </textarea>
        </div>
        <button class="btn btn-primary" name="submit" type="submit">Submit</button>
        
    </form>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\utsporto\resources\views/dashboard/experience/create.blade.php ENDPATH**/ ?>