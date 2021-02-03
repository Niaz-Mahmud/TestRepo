<?php $__env->startSection('head_title', trans('words.blog_title').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>


<?php $__env->startSection("content"); ?>
    <!--Breadcrumb Section-->
    <section class="breadcrumb-box" data-parallax="scroll" >
        <div class="inner-container container">
          
        </div>
    </section>
    <!--Breadcrumb Section-->
    <section class="main-container container">
    <aside class="col-sm-2">
  
    </aside>
    <div class="col-sm-10 ">
    <div id="main">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Create new post</h2>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('admin/blog.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>


                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Post Title</label>
                            <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Post Title">
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput"> Image</label> <br>
                            <div class="form-group user_prfile">
                                <input type="file" class="form-control" name="feature">
                                
                            </div>
                        </div>
                    </div>

                </div> <!--row-->

                <div class="form-group">
                    <label for="formGroupExampleInput">Select a Category</label>

                    <select class="form-control" id="category_id" name="blogcategory_id">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

              
                <div class="form-group">
                    <label for="formGroupExampleInput2">Description </label>
                    <textarea type="text" name="description" id="p-desc" class="form-control" placeholder="service description" row="10"></textarea>
                 
                     <!--<textarea class="summernote form-control" placeholder="type description" name="description"></textarea>-->
                </div>


                <div class="form-group">
                    <div class="google-ads" style="width: 100%; max-height: 100px;">

                    </div>
                    <div class="submit-btn">
                        <input type="submit"  class="btn btn-success" value="Click To Submit" id="formGroupExampleInput2" placeholder="Another input">
                    </div>
                </div>

            </form>
        </div>
    </div>
 </div>
 </div>
 </section>
 
 
<script type="text/javascript" src="<?php echo e(URL::asset('site_assets/ckeditor/ckeditor.js')); ?>"></script>
<script>CKEDITOR.replace( 'p-desc' );</script>
  
 
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\backupfloorfly\resources\views/blogs/blog-create.blade.php ENDPATH**/ ?>