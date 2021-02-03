

<?php $__env->startSection("content"); ?>

<div id="main">

	<div class="page-header">
		<h2> <?php echo e(isset($type->types) ? trans('words.edit').': '. $type->types : trans('words.add').' '.' New Service'); ?></h2>		
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
            <form action="<?php echo e(route('service.store')); ?>" method="post" enctype="multipart/form-data">

                <?php echo e(csrf_field()); ?>


                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Service Name'); ?></label>
                    <div class="col-sm-9">
                        <input type="text" name="service_name" class="form-control" placeholder="service name">
                    </div>
                </div>

               

                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Service Cost (৳)'); ?></label>
                    <div class="col-sm-9">
                        <input type="number" name="service_cost" class="form-control" placeholder="service cost">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Service Phone'); ?></label>
                    <div class="col-sm-9">
                        <input type="number" name="service_phone" class="form-control" placeholder="service phone">
                    </div>
                </div>
                

                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Service Category'); ?></label>
                    <div class="col-sm-9">
                  
                        <select name="category_id" id="pcategory" class="form-control input-lg dynamic">
                            <option value="">Select Country</option>
                            <?php $__currentLoopData = $category_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
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
                        <input type="file" name="service_image" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Service Description'); ?></label>
                    <div class="col-sm-9">
                        <textarea type="text" name="service_description" id="p-desc" class="form-control" placeholder="service description" row="10"></textarea>
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
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/admin/pages/services/create.blade.php ENDPATH**/ ?>