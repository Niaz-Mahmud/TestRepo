

<?php $__env->startSection("content"); ?>
<div id="main">
	<div class="page-header">
         <div class="pull-right">
			<a href="<?php echo e(URL::to('admin/inquiries/addnew')); ?>" class="btn btn-primary" target="_blank"> Add New Lead <i class="fa fa-plus"></i></a>
		</div>
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
                
                <td><?php echo e($inquiries->name); ?></td>
                <td><?php echo e($inquiries->email); ?></td>
                <td><?php echo e($inquiries->phone); ?></td>
                <td><?php echo e($inquiries->message); ?></td>
                <td><?php echo e($inquiries->lead_type); ?></td>
                <td width="200">
				
					<div class="btn-group">
						<?php if( $inquiries->verify == 1): ?>
						<a href="Javascript::void();"class="btn btn-icon waves-effect waves-light btn-success" data-toggle="tooltip" title="Verified"> <i class="fa fa-check-circle-o"></i> Verified</a>
						<?php else: ?>
						<a href="<?php echo e(route('inquiries.edit',['id'=>$inquiries->id])); ?>"class="btn btn-icon waves-effect waves-light btn-primary" data-toggle="tooltip" title="Call Customer"> <i class="fa fa-phone"></i> Pending</a>
						<?php endif; ?>

						<button type="button" class="btn btn-default-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<?php echo e(trans('words.action')); ?> <span class="caret"></span>
						</button>
						<ul class="dropdown-menu dropdown-menu-right" role="menu"> 
							<li><a href="<?php echo e(route('inquiries.details',['id'=>$inquiries->id])); ?>"><i class="fa fa-eye"></i> <?php echo e('View Details'); ?></a></li>
							<li><a href="<?php echo e(route('inquiries.edit',['id'=>$inquiries->id])); ?>"><i class="fa fa-pencil-square-o"></i> <?php echo e('Update'); ?></a></li>

							<li><a href="<?php echo e(url('admin/inquiries/delete/'.Crypt::encryptString($inquiries->id))); ?>" onclick="return confirm('<?php echo e(trans('words.dlt_warning_text')); ?>')"><i class="md md-delete"></i> <?php echo e(trans('words.remove')); ?></a></li>
						</ul>
					</div> 

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



                <div class="modal fade" id="PropertyPlanModal" role="dialog" style="top: 100px;">
			    <div class="modal-dialog">
			       <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title"> <?php echo e(trans('words.property_plan')); ?></h4>
			        </div>
			        <div class="modal-body">
			        	<div class="panel-body">
			        <?php echo Form::open(array('url' => array('admin/properties/plan_update'),'class'=>'','name'=>'plan_form','id'=>'plan_form','role'=>'form','enctype' => 'multipart/form-data')); ?> 	

			        	<input type="hidden" name="property_id" value="{">

			        	<div class="form-group">
                    		<label class="col-sm-4 control-label"><?php echo e(trans('words.subscription_plan')); ?></label>
	                      <div class="col-sm-8">
	                            <select class="form-control" name="plan_id">                               
	                                                         
	                            </select>
	                      </div>
                  		</div><br/><br/>
                  		<div class="form-group">
		                    <label class="col-sm-4 control-label"><?php echo e(trans('words.expiry_date')); ?></label>
		                    <div class="col-sm-8">

		                      <div class="input-group"> 
		                        <input type="text" name="property_exp_date" value="" class="datepicker form-control" placeholder="mm/dd/yyyy">
		                        <div class="input-group-append">
		                            <span class="input-group-text"><i class="ti-calendar"></i></span>
		                        </div>
		                      </div>
							  
		                    </div>
		                 </div><br/><br/>
		                 <div class="form-group">
		                    <label class="col-sm-4 col-form-label"><?php echo e(trans('words.status')); ?></label>
		                      <div class="col-sm-8">
		                            <select class="form-control" name="status">                               
		                                <option value="1"><?php echo e(trans('words.active')); ?></option>
		                                <option value="0"><?php echo e(trans('words.inactive')); ?></option>                            
		                            </select>
		                      </div>
                		</div>
			          
			          </div>
			        </div>
			        <div class="modal-footer">
			          <button type="submit" class="btn btn-primary"><?php echo e(trans('words.save_changes')); ?></button>	
			          <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('words.close')); ?></button>
			        </div>
			        <?php echo Form::close(); ?> 
			      </div>      
			    </div>
              </div> <!--/.PropertyPlanModal-->
              
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/admin/pages/inquiries.blade.php ENDPATH**/ ?>