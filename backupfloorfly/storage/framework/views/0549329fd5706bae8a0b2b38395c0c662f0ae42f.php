

<?php $__env->startSection("content"); ?>

<div id="main">
	<div class="page-header">
		<h2> <?php echo e(isset($type->types) ? trans('words.edit').': '. $type->types : trans('words.add').' '.'Update Child category'); ?></h2>
		
		<a href="<?php echo e(route('subcategory.index')); ?>" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> <?php echo e(trans('words.back')); ?></a>
	  
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
                <form action="<?php echo e(route('childcategory.update',['id'=>$childcategory->id])); ?>" method="post" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 control-label"><?php echo e('Service Child Category'); ?></label>
                        <div class="col-sm-9">
                            <input type="text" name="name" value="<?php echo e(isset($childcategory->name) ? $childcategory->name : null); ?>" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 control-label"><?php echo e('Select Parent Category'); ?></label>
                        <div class="col-sm-9">
                           <select class="form-control" name="service_subcategory_id">
                                <?php $__currentLoopData = $sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option  value="<?php echo e($row->id); ?>" 
                                        <?php if( $childcategory->service_subcategory_id == $row->id): ?> selected
                                        <?php endif; ?>
                                    ><?php echo e($row->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>    
                        </div>
                    </div>
                    
                    
                    <div class="form-group row">
                        <div class="col-md-offset-3 col-sm-9 ">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                
                </form>
            </div>
        </div>
   
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/admin/pages/service-childcategories/edit.blade.php ENDPATH**/ ?>