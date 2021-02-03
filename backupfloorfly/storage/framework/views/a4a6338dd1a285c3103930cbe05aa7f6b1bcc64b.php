<?php $__env->startSection("content"); ?>
<div id="main">
	<div class="page-header">
		
		 
		<h2><?php echo e(trans('words.featured_properties')); ?></h2>
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
	                <th><?php echo e(trans('words.property_id')); ?></th>
	                <th><?php echo e(trans('words.user_name')); ?></th>
	                <th><?php echo e(trans('words.property_name')); ?></th>
					<th><?php echo e(trans('words.type')); ?></th>
					<th><?php echo e(trans('words.purpose')); ?></th>
					<th><?php echo e(trans('words.plan')); ?></th>
					<th><?php echo e(trans('words.expiry_date')); ?></th>
	                <th class="text-center"><?php echo e(trans('words.status')); ?></th> 
	                <th class="text-center width-100"><?php echo e(trans('words.action')); ?></th>
	            </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $propertieslist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         	   <tr>
            	
				<td><?php echo e($property->id); ?></td>
				<td><?php echo e(getUserInfo($property->user_id)->name); ?></td> 
                <td><?php echo e($property->property_name); ?></td>
				<td><?php echo e(getPropertyTypeName($property->property_type)->types); ?></td>
				<td><?php echo e($property->property_purpose); ?></td>
				<td><?php echo e(\App\SubscriptionPlan::getSubscriptionPlanInfo($property->active_plan_id,'plan_name')); ?></td>
				<td>
				<?php if($property->property_exp_date!=''): ?>
                <?php echo e(date('m-d-Y',$property->property_exp_date)); ?>   
                <?php endif; ?>

				</td>
				<td class="text-center">
						<?php if($property->status==1): ?>
							<span class="icon-circle bg-green">
								<i class="md md-check"></i>
							</span>
						<?php else: ?>
							<span class="icon-circle bg-orange">
								<i class="md md-close"></i>
							</span>
						<?php endif; ?>
            	</td>  
                <td class="text-center">
                <div class="btn-group">
								<button type="button" class="btn btn-default-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<?php echo e(trans('words.action')); ?> <span class="caret"></span>
								</button>
								<ul class="dropdown-menu dropdown-menu-right" role="menu"> 
									<li><a href="Javascript::void();" data-toggle="modal" data-target="#PropertyPlanModal<?php echo e($property->id); ?>"><i class="fa fa-dollar"></i> <?php echo e(trans('words.change_plan')); ?></a></li>

									<li><a href="<?php echo e(url('update-property/'.Crypt::encryptString($property->id))); ?>" target="_blank"><i class="md md-edit"></i> <?php echo e(trans('words.edit')); ?></a></li>
									
									 
									<li>
										<?php if($property->featured_property==0): ?>                	
					                	<a href="<?php echo e(url('admin/properties/featuredproperty/'.Crypt::encryptString($property->id))); ?>"><i class="md md-star"></i> <?php echo e(trans('words.set_as_featured')); ?></a>
					                	<?php else: ?>
					                	<a href="<?php echo e(url('admin/properties/featuredproperty/'.Crypt::encryptString($property->id))); ?>"><i class="md md-check"></i> <?php echo e(trans('words.unset_as_featured')); ?></a>
					                	<?php endif; ?>
									</li>
									 
									
									<li>
										<?php if($property->status==1): ?>                	
					                	<a href="<?php echo e(url('admin/properties/status/'.Crypt::encryptString($property->id))); ?>"><i class="md md-close"></i> <?php echo e(trans('words.unpublish')); ?></a>
					                	<?php else: ?>
					                	<a href="<?php echo e(url('admin/properties/status/'.Crypt::encryptString($property->id))); ?>"><i class="md md-check"></i> <?php echo e(trans('words.publish')); ?></a>
					                	<?php endif; ?>
									</li>
									<li><a href="<?php echo e(url('admin/properties/delete/'.Crypt::encryptString($property->id))); ?>" onclick="return confirm('<?php echo e(trans('words.dlt_warning_text')); ?>')"><i class="md md-delete"></i> <?php echo e(trans('words.remove')); ?></a></li>
								</ul>
							</div> 
                
            </td>
                
            </tr>

            <div class="modal fade" id="PropertyPlanModal<?php echo e($property->id); ?>" role="dialog">
			    <div class="modal-dialog">
			       <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title"><?php echo e($property->property_name); ?> <?php echo e(trans('words.property_plan')); ?></h4>
			        </div>
			        <div class="modal-body">
			        	<div class="panel-body">
			        <?php echo Form::open(array('url' => array('admin/properties/plan_update'),'class'=>'','name'=>'plan_form','id'=>'plan_form','role'=>'form','enctype' => 'multipart/form-data')); ?> 	

			        	<input type="hidden" name="property_id" value="<?php echo e($property->id); ?>">

			        	<div class="form-group">
                    		<label class="col-sm-4 control-label"><?php echo e(trans('words.subscription_plan')); ?></label>
	                      <div class="col-sm-8">
	                            <select class="form-control" name="plan_id">                               
	                                <?php $__currentLoopData = \App\SubscriptionPlan::orderBy('id')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                  <option value="<?php echo e($plan_data->id); ?>" <?php if(isset($property->active_plan_id) AND $property->active_plan_id==$plan_data->id): ?> selected <?php endif; ?>><?php echo e($plan_data->plan_name); ?></option>
	                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                            
	                            </select>
	                      </div>
                  		</div><br/><br/>
                  		<div class="form-group">
		                    <label class="col-sm-4 control-label"><?php echo e(trans('words.expiry_date')); ?></label>
		                    <div class="col-sm-8">
		                      <div class="input-group"> 
		                        <input type="text" name="property_exp_date" value="<?php echo e($property->property_exp_date ? date('m/d/Y',$property->property_exp_date) : null); ?>" class="datepicker form-control" placeholder="mm/dd/yyyy">
		                        <div class="input-group-append">
		                            <span class="input-group-text"><i class="ti-calendar"></i></span>
		                        </div>
		                      </div>
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
			  </div>
            
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
            </tbody>
        </table>
    </div>
    <div class="clearfix"></div>
</div>

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/admin/pages/featuredproperty.blade.php ENDPATH**/ ?>