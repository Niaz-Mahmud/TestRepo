<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Update Category: <?php echo e($blogcategory->name); ?></h2>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('blogcategory.update',['id'=>$blogcategory->id])); ?>" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>


                <div class="form-group">
                    <label for="formGroupExampleInput">Cate name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo e($blogcategory->name); ?>" id="formGroupExampleInput" placeholder="Example input">
                </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Update category" id="formGroupExampleInput2" placeholder="Another input">
                </div>

            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/admin/blogcats/edit.blade.php ENDPATH**/ ?>