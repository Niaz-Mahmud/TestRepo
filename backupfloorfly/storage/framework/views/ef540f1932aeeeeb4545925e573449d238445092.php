<?php $__env->startSection("content"); ?>
<div id="main">
	<div class="page-header">
		 
		<h2><?php echo e(trans('words.inquiries')); ?></h2>
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
         
        <table class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
	            <tr>
	                <th><?php echo e('Lead Name'); ?></th>
	                <th><?php echo e(trans('words.name')); ?></th>
	                <th><?php echo e(trans('words.email')); ?></th>
	                <th><?php echo e(trans('words.phone')); ?></th>
                    <th><?php echo e(trans('words.message')); ?></th>
                    <th><?php echo e('Lead Type'); ?></th>
	                 
	                <th class="text-center width-100"><?php echo e(trans('words.action')); ?></th>
	            </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $inquirieslist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $inquiries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         	   <tr>
            	
                <td><?php echo e($inquiries->lead_name); ?></td>
                <td><?php echo e($inquiries->name); ?></td>
                <td><?php echo e($inquiries->email); ?></td>
                <td><?php echo e($inquiries->phone); ?></td>
                <td><?php echo e($inquiries->message); ?></td>
                <td><?php echo e($inquiries->lead_type); ?></td>
                <td class="text-center">
                	 
                    <a href="<?php echo e(url('admin/inquiries/delete/'.Crypt::encryptString($inquiries->id))); ?>" class="btn btn-icon waves-effect waves-light btn-danger m-b-5" onclick="return confirm('<?php echo e(trans('words.dlt_warning_text')); ?>')" data-toggle="tooltip" title="<?php echo e(trans('words.remove')); ?>"> <i class="fa fa-remove"></i> </a>
                
            </td>
                
            </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="8" class="text-center">
                        <?php echo $__env->make('admin.pagination', ['paginator' => $inquirieslist], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                         
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="clearfix"></div>
</div>

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/admin/pages/inquiries.blade.php ENDPATH**/ ?>