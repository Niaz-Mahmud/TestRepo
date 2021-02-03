<?php $__env->startSection("content"); ?>

<div id="main">
	<div class="page-header">
		<h2> <?php echo e(isset($type->types) ? trans('words.edit').': '. $type->types : trans('words.add').' '.' New Child Category'); ?></h2>
		
		<a href="<?php echo e(route('childcategory.index')); ?>" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> <?php echo e(trans('words.back')); ?></a>
	  
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
                
                <form action="<?php echo e(route('childcategory.store')); ?>" method="post" enctype="multipart/form-data">

                    <?php echo e(csrf_field()); ?>



                    <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Service Category'); ?></label>
                        <div class="col-sm-9">
                    
                            <select id="pcategory" class="form-control">
                                <option value="">Select Country</option>
                                <?php $__currentLoopData = $pcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 control-label"><?php echo e('Service Sub Category'); ?></label>
                        <div class="col-sm-9">
                        <select name="service_subcategory_id" id="subcategory" class="form-control">
                            <option value="">Select Subcategory</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="" class="col-sm-3 control-label"><?php echo e('Sub Category Name'); ?></label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" placeholder="sub cat name">
                        </div>
                    </div> 

                    
                    
                    <hr>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-sm-9 ">
                            <button type="submit" class="btn btn-primary">Submit Now</button>
                            
                        </div>
                    </div>
                
                </form>
            </div>
        </div>
   
    
</div>
<script>
$(document).ready(function(){

    $("#pcategory").on('change', function(){
       var cat_id = $("#pcategory").val();
       $.ajax({
        type: "GET",
            type:"GET",
            url:"<?php echo e(route('catget.subcategory')); ?>",
            data: {cat_id:cat_id},
            success:function(data){
                $("#subcategory").html(data.html5);
            }
       });
    });

});


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/admin/pages/service-childcategories/create.blade.php ENDPATH**/ ?>