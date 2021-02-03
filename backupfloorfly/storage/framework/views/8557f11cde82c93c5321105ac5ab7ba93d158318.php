<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('admin.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Create new Category</h2>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('blogcategory.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>


                <div class="form-group">
                    <label for="formGroupExampleInput">Cate name</label>
                    <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="cat name">
                </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="store category" id="formGroupExampleInput2" placeholder="Another input">
                </div>

            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\backupfloorfly\resources\views/admin/blogcats/create.blade.php ENDPATH**/ ?>