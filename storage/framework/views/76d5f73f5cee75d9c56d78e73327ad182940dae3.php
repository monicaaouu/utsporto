

<?php $__env->startSection('konten'); ?>
    <p class="card-title">Education</p>
    <div class="pd-3"><a href="<?php echo e(route('education.create')); ?>" class="btn btn-primary">+ Add Education</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>University Name</th>
                    <th>Faculty Name</th>
                    <th>Program Study</th>
                    <th>GPA</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th class="col-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i); ?></td>
                    <td><?php echo e($item->judul); ?></td>
                    <td><?php echo e($item->info1); ?></td>
                    <td><?php echo e($item->info2); ?></td>
                    <td><?php echo e($item->info3); ?></td>
                    <td><?php echo e($item->tgl_mulai_indo); ?></td>
                    <td><?php echo e($item->tgl_akhir_indo); ?></td>
                    <td>
                        <a href="<?php echo e(route('education.edit', $item->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form onsubmit="return confirm('Do you sure want to delete data?')" action="<?php echo e(route('education.destroy',$item->id)); ?>" class="d-inline" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger" type="submit" name="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $i++ ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\portomonic\resources\views/dashboard/education/index.blade.php ENDPATH**/ ?>