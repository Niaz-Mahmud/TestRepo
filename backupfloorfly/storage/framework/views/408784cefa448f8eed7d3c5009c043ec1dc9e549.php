

<?php $__env->startSection("content"); ?>
<div id="main">
	<div class="page-header">
		
		<div class="pull-right">
			<a href="<?php echo e(URL::to('admin/slider/addslide')); ?>" class="btn btn-primary"><?php echo e(trans('words.add').' '.trans('words.slide')); ?> <i class="fa fa-plus"></i></a>
		</div>
		<h2><?php echo e(trans('words.home_slider')); ?></h2>
	</div>
	<?php if(Session::has('flash_message')): ?>
				    <div class="alert alert-success">
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
				        <?php echo e(Session::get('flash_message')); ?>

				    </div>
	<?php endif; ?>
     
<div class="panel panel-default panel-shadow">
    <div class="panel-body">
         
        <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
	            <tr>
	                <th><?php echo e(trans('words.image')); ?></th>
	                <th><?php echo e(trans('words.slider_name')); ?></th>
	                 
	                <th class="text-center width-100"><?php echo e(trans('words.action')); ?></th>
	            </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $allslider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         	   <tr>
            	<td> <?php if($slide->image_name): ?>
                                 
									<img src="<?php echo e(URL::asset('upload/slides/'.$slide->image_name.'.jpg')); ?>" width="100" alt="">
					<?php endif; ?></td>
                <td><?php echo e($slide->slider_title); ?></td>
                
                <td class="text-center">

                	<a href="<?php echo e(url('admin/slider/addslide/'.Crypt::encryptString($slide->id))); ?>" class="btn btn-icon waves-effect waves-light btn-success m-b-5 m-r-5" data-toggle="tooltip" title="<?php echo e(trans('words.edit')); ?>"> <i class="fa fa-edit"></i> </a>
                 	<a href="<?php echo e(url('admin/slider/delete/'.Crypt::encryptString($slide->id))); ?>" class="btn btn-icon waves-effect waves-light btn-danger m-b-5" onclick="return confirm('<?php echo e(trans('words.dlt_warning_text')); ?>')" data-toggle="tooltip" title="<?php echo e(trans('words.remove')); ?>"> <i class="fa fa-remove"></i> </a>

               
                
            </td>
                
            </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
            </tbody>
        </table>
    </div>
    <div class="clearfix"></div>
</div>

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crafyvzz/public_html/floorfly.com/resources/views/admin/pages/slider.blade.php ENDPATH**/ ?>