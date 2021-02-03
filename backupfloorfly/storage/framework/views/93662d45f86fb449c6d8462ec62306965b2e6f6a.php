

<?php $__env->startSection("content"); ?>

<div id="main">

	<div class="page-header">
		<h2> <?php echo e('Update Service'); ?></h2>		
		<a href="<?php echo e(route('services')); ?>" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> <?php echo e(trans('words.back')); ?></a>	  
	</div>

	<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
	<?php endif; ?>

	 <?php if(Session::has('flash_message')): ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?php echo e(Session::get('flash_message')); ?>

        </div>
	<?php endif; ?>
   
    <div class="panel panel-default">
        <div class="panel-body">
        
            <form action="<?php echo e(route('service.update',['id'=>$service->id])); ?>" method="post" enctype="multipart/form-data">

                <?php echo e(csrf_field()); ?>


                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Service Name'); ?></label>
                    <div class="col-sm-9">
                        <input type="text" name="service_name" class="form-control" value="<?php echo e($service->service_name); ?>">
                    </div>
                </div>

               

                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Service Cost (৳)'); ?></label>
                    <div class="col-sm-9">
                        <input type="number" name="service_cost" class="form-control" value="<?php echo e($service->service_cost); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Service Phone'); ?></label>
                    <div class="col-sm-9">
                        <input type="number" name="service_phone" class="form-control" value="<?php echo e($service->service_phone); ?>">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Service Category'); ?></label>
                    <div class="col-sm-9">
                  
                        <select name="category_id" id="pcategory" class="form-control input-lg dynamic">
                            <option value="">Select Country</option>
                            <?php $__currentLoopData = $scategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>" 
                            <?php if( $service->service_category_id == $category->id): ?> selected <?php endif; ?>>
                            <?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Service Sub Category'); ?></label>
                    <div class="col-sm-9">
                        <select name="subcategory_id" id="subcategory" class="form-control">
                         <option>Select Subcategory</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Service Child Category'); ?></label>
                    <div class="col-sm-9">

                        <select name="childcategory_id" id="childcategory" class="form-control input-lg">
                         <option>Select Childcategory</option> 
                        </select>

                    </div>
                </div>

                


                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Service Image'); ?></label>
                    <div class="col-sm-9">
                    
                    <div style="width:10%; float:left">
                        <img src="<?php echo e(url($service->service_image)); ?>" style="max-width:95%"/>
                    </div>
                    <div style="width:90%; float:left">

                        <input type="file" name="service_image" class="form-control" >
                    </div>    
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Service Description'); ?></label>
                    <div class="col-sm-9">
                        <textarea type="text" id="p-desc" name="service_description" class="form-control" row="10"><?php echo e($service->service_description); ?></textarea>
                    </div>
                </div>

                
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary"><?php echo e(isset($type->id) ? trans('words.save_changes') : trans('words.submit')); ?></button>                        
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</div>

<script type="text/javascript" src="<?php echo e(URL::asset('site_assets/ckeditor/ckeditor.js')); ?>"></script>
<script>CKEDITOR.replace( 'p-desc' );</script>
<script>
$(document).ready(function(){

    $("#pcategory").on('change', function(){
       var cat_id = $("#pcategory").val();
       $.ajax({
        type: "GET",
            type:"GET",
            url:"<?php echo e(route('get.subcategory')); ?>",
            data: {cat_id:cat_id},
            success:function(data){
                $("#subcategory").html(data.html5);
            }
       });
    });

    $("#subcategory").on('change', function(){
       var sub_cat_id = $("#subcategory").val();
       $.ajax({
            type:"GET",
            url:"<?php echo e(route('get.child.subcategory')); ?>",
            data: {sub_cat_id:sub_cat_id},
            success:function(data){
                $("#childcategory").html(data.html6);
            }
       });
    });

});

</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crafyvzz/public_html/floorfly.com/resources/views/admin/pages/services/edit.blade.php ENDPATH**/ ?>