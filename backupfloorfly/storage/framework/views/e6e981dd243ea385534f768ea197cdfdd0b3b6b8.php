<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <div id="main">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Edit post: <?php echo e($blog->title); ?></h2>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('blog.update',['id'=>$blog->id])); ?>" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

<?php if($blog->check==0): ?>
                <div class="form-group">
                    <label for="formGroupExampleInput">Title</label>
                    <input type="text" class="form-control" name="title" value="<?php echo e($blog->title); ?>" id="formGroupExampleInput" placeholder="Example input">
                </div>


                <div class="form-group">
                    <label for="formGroupExampleInput">Featured Image</label>
                    <input type="file" class="form-control" name="feature"  value="<?php echo e($blog->feature); ?>" id="formGroupExampleInput" placeholder="Example input">
                    <img src="<?php echo e(asset($blog->feature)); ?>" width="100">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput">Select a Category</label>

                    <select class="form-control" id="blogcategory_id" name="blogcategory_id">
                        <?php $__currentLoopData = $blogcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"
                                    <?php if($blog->blogcategory->id == $category->id): ?>
                                    selected
                                    <?php endif; ?>;

                            ><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

              

                <div class="form-group">
                    <label for="formGroupExampleInput2">description</label>
                    <textarea class="form-control" id="p-desc" name="description"  value="<?php echo e($blog->description); ?>"><?php echo e($blog->description); ?></textarea>
                    
                   
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Author Image</label>
                    <input type="file" class="form-control" name="image"  value="<?php echo e($blog->image); ?>" id="formGroupExampleInput" placeholder="Example input">
                    <img src="<?php echo e(asset($blog->image)); ?>" width="100">
                    
                   
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Author name</label>
                    <textarea class="form-control" id="p-desc" name="name"  value="<?php echo e($blog->name); ?>"><?php echo e($blog->name); ?></textarea>
                    
                   
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Designation</label>
                    <textarea class="form-control" id="p-desc" name="designation"  value="<?php echo e($blog->designation); ?>"><?php echo e($blog->designation); ?></textarea>
                    
                   
                </div>
                

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="update" id="formGroupExampleInput2" placeholder="Another input">
                </div>
<?php else: ?>
       <div class="form-group">
                    <label for="formGroupExampleInput">Title</label>
                    <input type="text" class="form-control" name="title" value="<?php echo e($blog->title); ?>" id="formGroupExampleInput" placeholder="Example input">
                </div>


                <div class="form-group">
                    <label for="formGroupExampleInput">Featured Image</label>
                    <input type="file" class="form-control" name="feature"  value="<?php echo e($blog->feature); ?>" id="formGroupExampleInput" placeholder="Example input">
                    <img src="<?php echo e(asset($blog->feature)); ?>" width="100">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput">Select a Category</label>

                    <select class="form-control" id="blogcategory_id" name="blogcategory_id">
                        <?php $__currentLoopData = $blogcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"
                                    <?php if($blog->blogcategory->id == $category->id): ?>
                                    selected
                                    <?php endif; ?>;

                            ><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

              

                <div class="form-group">
                    <label for="formGroupExampleInput2">description</label>
                    <textarea class="form-control" id="p-desc" name="description"  value="<?php echo e($blog->description); ?>"><?php echo e($blog->description); ?></textarea>
</div>


<div class="form-group">
                    <input type="submit" class="btn btn-success" value="update" id="formGroupExampleInput2" placeholder="Another input">
                </div>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>

 
<script type="text/javascript" src="<?php echo e(URL::asset('site_assets/ckeditor/ckeditor.js')); ?>"></script>
<script>CKEDITOR.replace( 'p-desc' );</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.admin_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\backupfloorfly\resources\views/admin/blogs/edit.blade.php ENDPATH**/ ?>