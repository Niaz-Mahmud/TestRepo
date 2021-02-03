<?php $__env->startSection("content"); ?>
<div id="main">
	<div class="page-header">
		<h2>Agent Interest For sale</h2>
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

   
         
        <table id="data-table"  class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
	            <tr>
                    <th>#</th>
	                <th>Agent Name</th>
	                <th>Property Name</th>
                    <th class="text-center"><?php echo e('status'); ?></th>
	                <th class="text-center width-100"><?php echo e(trans('words.action')); ?></th>
	            </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $interestlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $inquiries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         	   <tr>
            	<td><?php echo e($loop->iteration); ?></td>
                <td>
                   <p><?php echo e($inquiries->agent_name); ?> </p>
                   <p> <?php echo e($inquiries->agent_phone); ?></p>
                </td>

                <td>
                    <p><?php echo e($inquiries->property_name); ?> </p>
                
                </td>

                <td class="text-center">
						<?php if($inquiries->status==1): ?>
							<span class="icon-circle bg-green">
								<i class="md md-check"></i> 
							</span>
							Approved
						<?php else: ?>
							
                            Pending
						<?php endif; ?>
            	</td> 

                <td class="text-center">
					<div class="btn-group">
						<button type="button" class="btn btn-default-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<?php echo e(trans('words.action')); ?> <span class="caret"></span>
						</button>
						<ul class="dropdown-menu dropdown-menu-right" role="menu"> 
							
							<li>
								<?php if($inquiries->status==0): ?>                	
								<a href="<?php echo e(url('admin/agentinterest/status/'.Crypt::encryptString($inquiries->id))); ?>"><i class="md md-check"></i> Approved</a>
								<?php else: ?>
								<a href="<?php echo e(url('admin/agentinterest/status/'.Crypt::encryptString($inquiries->id))); ?>"><i class="md md-close"></i> Deactivated</a>
								<?php endif; ?>
							</li>
							<li><a href="<?php echo e(url('admin/agentinterest/delete/'.Crypt::encryptString($inquiries->id))); ?>" onclick="return confirm('<?php echo e(trans('words.dlt_warning_text')); ?>')"><i class="md md-delete"></i> <?php echo e(trans('words.remove')); ?></a></li>
						</ul>
					</div> 
          		  </td>
                
            </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="8" class="text-center">
                        <?php echo $__env->make('admin.pagination', ['paginator' => $interestlist], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                         
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="clearfix"></div>
</div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/admin/pages/interests.blade.php ENDPATH**/ ?>