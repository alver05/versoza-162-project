
<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Customer
            <a href="<?php echo e(url('admin/customer')); ?>" class="float-right btn btn-success btn-sm">View All</a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>FullName</th>
                    <td><?php echo e($data->full_name); ?></td>
                </tr>
                <tr>
                    <th>Photo</th>
                    <td><img width="100" src="<?php echo e(asset('storage/app/'.$data->photo)); ?>" /></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo e($data->email); ?></td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td><?php echo e($data->mobile); ?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><?php echo e($data->address); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\resortproject\resources\views/customer/show.blade.php ENDPATH**/ ?>