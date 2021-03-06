<?php $__env->startSection("content"); ?>

<div id="main">
	<div class="page-header">
		<h2> <?php echo e(isset($partners->name) ? trans('words.edit').': '. $partners->name : trans('words.add').' '.trans('words.partner')); ?></h2>
		
		<a href="<?php echo e(URL::to('admin/partners')); ?>" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
	  
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
                <?php echo Form::open(array('url' => array('admin/partners/addpartners'),'class'=>'form-horizontal padding-15','name'=>'addpartners_form','id'=>'addpartners_form','role'=>'form','enctype' => 'multipart/form-data')); ?> 
                <input type="hidden" name="id" value="<?php echo e(isset($partners->id) ? $partners->id : null); ?>">
                  
                
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.name')); ?></label>
                    <div class="col-sm-9">
                        <input type="text" name="name" value="<?php echo e(isset($partners->name) ? $partners->name : null); ?>" class="form-control">
                    </div>
                </div>
				<div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.url')); ?></label>
                    <div class="col-sm-9">
                        
						<input type="text" name="url" value="<?php echo e(isset($partners->url) ? $partners->url : null); ?>" class="form-control">
                    </div>
                </div>
				 
				<div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label"><?php echo e(trans('words.image')); ?></label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                <?php if(isset($partners->partner_image)): ?>
                                 
									<img src="<?php echo e(URL::asset('upload/partners/'.$partners->partner_image.'.jpg')); ?>" width="100" alt="logo">
								<?php endif; ?>
								                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="partner_image" class="filestyle"> 
                            </div>
                        </div>
	
                    </div>
                </div>
				
				  
                 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary"><?php echo e(isset($partners->name) ? trans('words.save_changes') : trans('words.submit')); ?></button>
                         
                    </div>
                </div>
                
                <?php echo Form::close(); ?> 
            </div>
        </div>
   
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/admin/pages/addpartners.blade.php ENDPATH**/ ?>