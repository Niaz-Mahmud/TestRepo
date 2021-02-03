

<?php $__env->startSection("content"); ?>
<div id="main">
	<div class="page-header">
		 
		<h2><?php echo e(trans('words.subscribers')); ?></h2>
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
	                <th><?php echo e(trans('words.email')); ?></th>
	                <th><?php echo e(trans('words.ip')); ?></th>
	                 
	                <th class="text-center width-100"><?php echo e(trans('words.action')); ?></th>
	            </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $subscriberlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $subscriber): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         	   <tr>
            	
                <td><?php echo e($subscriber->email); ?></td>
                <td><?php echo e($subscriber->ip); ?></td>
                <td class="text-center">
                	 
                    <a href="<?php echo e(url('admin/subscriber/delete/'.Crypt::encryptString($subscriber->id))); ?>" class="btn btn-icon waves-effect waves-light btn-danger m-b-5" onclick="return confirm('<?php echo e(trans('words.dlt_warning_text')); ?>')" data-toggle="tooltip" title="<?php echo e(trans('words.remove')); ?>"> <i class="fa fa-remove"></i> </a>
                
            </td>
                
            </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="8" class="text-center">
                        <?php echo $__env->make('admin.pagination', ['paginator' => $subscriberlist], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                         
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="clearfix"></div>
</div>

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/admin/pages/subscriber.blade.php ENDPATH**/ ?>