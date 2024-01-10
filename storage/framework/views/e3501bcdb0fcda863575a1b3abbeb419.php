
<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo e($data->title); ?> Department
            <a href="<?php echo e(url('admin/department')); ?>" class="float-right btn btn-success btn-sm">View All</a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>Title</th>
                    <td><?php echo e($data->title); ?></td>
                </tr>
                <tr>
                    <th>Detail</th>
                    <td><?php echo e($data->detali); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\resortproject\resources\views/department/show.blade.php ENDPATH**/ ?>