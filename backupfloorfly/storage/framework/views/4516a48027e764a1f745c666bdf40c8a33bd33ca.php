<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="main">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Create new post</h2>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('blog.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>


             
<div class="form-group">

<!-- <label for="formGroupExampleInput">Posted By</label><br> -->
<!-- <input type="checkbox" name="check" class="author_check" value="0">
 
  <label for="others"> Others</label>

  <input type="checkbox" name="check" class="author_check" value="1">
  <label for="admin"> Admin</label> -->
  </div>
                
                <div class="row">

               
              
<!-- <div id="dvPassport" style="display: none">
   
<div class="col-lg-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Author Name *</label>
                            <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Author Name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Designation *</label>
                            <input type="text" class="form-control" name="designation" id="formGroupExampleInput" placeholder="Designation">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Author Image *</label>
                            <div class="form-group user_prfile">
                                <input type="file" class="form-control" name="image">
                                
                            </div>
                        </div>
                    </div> 
                  
</div> -->

              

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Post Title *</label>
                            <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Post Title">
                        </div>
                    </div>
                    <div>
                    
   </div>
   
   




                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Blog Image *</label> <br>
                            <div class="form-group user_prfile">
                                <input type="file" class="form-control" name="feature">
                                
                            </div>
                        </div>
                    </div>

               <!-- </div> row -->

                <div class="col-lg-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">Select a Category *</label>

                    <select class="form-control" id="category_id" name="blogcategory_id">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
  </div>
  </div>
              
                <div class="form-group">
                    <label for="formGroupExampleInput2">Description * </label>
                    <textarea type="text" name="description" id="p-desc" class="form-control" placeholder="service description" row="10"></textarea>
                 
                     <!--<textarea class="summernote form-control" placeholder="type description" name="description"></textarea>-->
                </div>
                <label for="formGroupExampleInput">Posted By</label><br>
                <input type="checkbox" name="check" class="author_check" value="0" id="author">
 
  <label for="others"> Others</label>

  <input type="checkbox" name="check" class="author_check" value="1" id="admin">
  <label for="admin"> Admin</label>
<hr />
               


<div id="dvPassport" style="display: none">
   
<div class="col-lg-4">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Author Name *</label>
                            <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Author Name">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Designation *</label>
                            <input type="text" class="form-control" name="designation" id="formGroupExampleInput" placeholder="Designation">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Author Image *</label>
                            <div class="form-group user_prfile">
                                <input type="file" class="form-control" name="image">
                                
                            </div>
                        </div>
                    </div> 
                  
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




 
 
 
<script type="text/javascript" src="<?php echo e(URL::asset('site_assets/ckeditor/ckeditor.js')); ?>"></script>
<script>CKEDITOR.replace( 'p-desc' );</script>


<script type="text/javascript">
     //Near checkboxes
    $('.author_check').click(function() {
        $(this).siblings('input:checkbox').prop('checked', false);
    });
  </script>
   <script type="text/javascript">
    $(function () {
        $("#author").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport").show();
            } 
            else
            $("#dvPassport").hide();
            
        });
        
    });
    $(function () {
        $("#admin").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport").hide();
            } 
            
        });
    });

</script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.admin_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\backupfloorfly\resources\views/admin/blogs/blog-post.blade.php ENDPATH**/ ?>