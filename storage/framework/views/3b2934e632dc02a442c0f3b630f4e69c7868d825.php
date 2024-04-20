

<?php $__env->startSection('konten'); ?>
    <div class="pb-3"><a href="<?php echo e(route('halaman.index')); ?>" class="btn btn-secondary"><< Back</a></div>
    <form action="<?php echo e(route('halaman.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="tittle" class="form-label">Tittle</label>
            <input
                type="text"
                class="form-control"
                name="tittle"
                id="tittle"
                aria-describedby="helpId"
                placeholder="Tittle"
                value="<?php echo e(Session::get('judul')); ?>"
            />
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control summernote" id="content" rows="5" name="content" value="<?php echo e(Session::get('isi')); ?>">
            </textarea>
        </div>
        <button class="btn btn-primary" name="submit" type="submit">Submit</button>
        
    </form>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\portomonic\resources\views/dashboard/halaman/create.blade.php ENDPATH**/ ?>