
<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Update Customer Information
            <a href="<?php echo e(url('admin/customer')); ?>" class="float-right btn btn-success btn-sm">View All</a>
        </h6>
    </div>
    <div class="card-body">

        <?php if(Session::has('success')): ?>
        <p class="text-success"><?php echo e(session('success')); ?></p>
        <?php endif; ?>
        <div class="table-responsive">
            <form method="post" enctype="multipart/form-data" action="<?php echo e(url('admin/customer/'.$data->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <table class="table table-bordered">
                    <tr>
                        <th>Full Name <span class="text-danger">*</span></th>
                        <td><input value="<?php echo e($data->full_name); ?>" name="full_name" type="text" class="form-control" /></td>
                    </tr>
                    <tr>
                        <th>Email <span class="text-danger">*</span></th>
                        <td><input value="<?php echo e($data->email); ?>" name="email" type="email" class="form-control" /></td>
                    </tr>
                    <tr>
                        <th>Mobile <span class="text-danger">*</span></th>
                        <td><input value="<?php echo e($data->mobile); ?>" name="mobile" type="text" class="form-control" /></td>
                    </tr>
                    <tr>
                        <th>Photo</th>
                        <td>
                            <input name="photo" type="file" />
                            <input type="hidden" name="prev_photo" value="<?php echo e($data->photo); ?>" />
                            <img width="100" src="<?php echo e(asset('storage/app/'.$data->photo)); ?>" />
                        </td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><textarea name="address" class="form-control"><?php echo e($data->address); ?></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn btn-primary" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\resortproject\resources\views/customer/edit.blade.php ENDPATH**/ ?>