<?php $__env->startSection("content"); ?>
<div id="main">
	<div class="page-header">
		
		<div class="pull-right">
			<a href="<?php echo e(URL::to('submit-property')); ?>" class="btn btn-primary" target="_blank"><?php echo e(trans('words.add_property')); ?> <i class="fa fa-plus"></i></a>
		</div>
		<h2><?php echo e(trans('words.properties')); ?></h2>
	</div>

	<?php if(Session::has('flash_message')): ?>
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>
			<?php echo e(Session::get('flash_message')); ?>

		</div>
	<?php endif; ?>

<div class="panel panel-shadow">
    	<div class="panel-body">
    	<div class="col-sm-10">          
         <?php echo Form::open(array('url' => 'admin/properties','class'=>'form-inline filter','id'=>'search','role'=>'form','method'=>'get')); ?>	
            <span class="bold text-muted"><?php echo e(trans('words.search')); ?></span>
            <div class="form-group">
                <input type="text" class="form-control" id="" name="keyword" placeholder="<?php echo e(trans('words.search_placeholder')); ?>">
            </div>             
            <div class="form-group">
                <select name="purpose" id="basic" class="selectpicker show-tick form-control" data-live-search="false">
                   <option value=""><?php echo e(trans('words.property_purpose')); ?></option>
                   <option value="<?php echo e(trans('words.purpose_sale')); ?>"><?php echo e(trans('words.for_sale')); ?></option>
                   <option value="<?php echo e(trans('words.purpose_rent')); ?>"><?php echo e(trans('words.for_rent')); ?></option>
                </select>
            </div>
            <div class="form-group">
                <select id="proeprty-type" name="type" class="selectpicker show-tick form-control" data-live-search="false">
                  <option value=""><?php echo e(trans('words.property_type')); ?></option>
                  <?php $__currentLoopData = \App\Types::orderBy('types')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($type->id); ?>"><?php echo e($type->types); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-default-dark  pull-right"><?php echo e(trans('words.search')); ?></button>
            </div>
        <?php echo Form::close(); ?>

    	</div>
    	<div class="col-sm-2">   
        	<a href="<?php echo e(URL::to('admin/properties/export')); ?>" class="btn btn-info btn-md waves-effect waves-light" data-toggle="tooltip" title="<?php echo e(trans('words.export_property')); ?>"><i class="fa fa-file-excel-o"></i> <?php echo e(trans('words.export_property')); ?></a>
        </div>	
    	</div>
	</div>
     
<div class="panel panel-default panel-shadow">
 
    <div class="panel-body table-responsive">         
        <table class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
	            <tr>
 			<th>Product Code</th>
	                <th><?php echo e(trans('words.property_id')); ?></th>
					<th><?php echo e('Property Image'); ?></th>
	                <th><?php echo e(trans('words.user_name')); ?></th>
	                <th><?php echo e(trans('words.property_name')); ?></th>
					<th><?php echo e(trans('words.type')); ?></th>
					<th>Address</th>
					<th>Size</th>
					<th><?php echo e('Total Price'); ?></th>
					<th><?php echo e(trans('words.expiry_date')); ?></th>
					
	                <th class="text-center"><?php echo e(trans('words.status')); ?></th> 
	                <th class="text-center width-100"><?php echo e(trans('words.action')); ?></th>
	            </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $propertieslist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         	   <tr>
            			<td><?php echo e($property->product_code); ?></td>
				<td><?php echo e($property->id); ?></td>
				<td>
					<img src="<?php echo e(URL::asset('upload/properties/'.$property->featured_image.'-s.jpg')); ?>" width="60" >
				</td>
				<td><?php echo e(getUserInfo($property->user_id)->name); ?></td> 
                 <td><a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" target="_blank"><?php echo e($property->property_name); ?></a></td>
				<td><?php echo e(getPropertyTypeName($property->property_type)->types); ?></td>
				<td><?php echo e($property->address); ?></td>
				<td><?php echo e($property->build_area); ?></td>
				<td><?php echo e($property->price); ?></td>
				<!--<td><?php echo e(\App\SubscriptionPlan::getSubscriptionPlanInfo($property->active_plan_id,'plan_name')); ?></td>-->
				
				<td>
				<?php if($property->property_exp_date!='' AND $property->property_exp_date!=0): ?>
                <?php echo e(date('M,  jS, Y',$property->property_exp_date)); ?>   
                <?php endif; ?>

				</td>

				<!--<td>-->
				<!--<?php if($property->position_status==0): ?>-->
				<!--	No Position -->
				<!--<?php else: ?>-->
				
					 
				<!--	<?php if($property->position_id < 99 ): ?>-->
				<!--		<span><b>Position: </b><?php echo e($property->position_id); ?> </span>-->
				<!--	<?php endif; ?>-->

				<!--	<br>-->

				<!--	<?php if($property->position_exp_date!='' AND $property->position_exp_date!=0): ?>-->
				<!--	<strong> Exp: </strong> <?php echo e(date('M,  jS, Y',$property->position_exp_date)); ?>   -->
				<!--	<?php endif; ?>-->
				<!--<?php endif; ?>-->
				
				<!--</td>-->


				<td class="text-center">
				<?php if($property->soldout==0): ?>  
					<?php if($property->status==1): ?>
						<span class="icon-circle bg-green">
							<i class="md md-check"></i>
						</span>
					<?php else: ?>
						<span class="icon-circle bg-orange">
							<i class="md md-close"></i>
						</span>
				
					<?php endif; ?>
				<?php else: ?>
			    	SOLDOUT
				<?php endif; ?>	
            	</td>  
                <td class="text-center">
					<div class="btn-group">
						<button type="button" class="btn btn-default-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<?php echo e(trans('words.action')); ?> <span class="caret"></span>
						</button>
						<ul class="dropdown-menu dropdown-menu-right" role="menu"> 
							<li><a href="Javascript::void();" data-toggle="modal" data-target="#PropertyPlanModal<?php echo e($property->id); ?>"><i class="fa fa-dollar"></i> <?php echo e(trans('words.change_plan')); ?></a></li>

							<li><a href="Javascript::void();" data-toggle="modal" data-target="#PropertyPositionModal<?php echo e($property->id); ?>"><i class="fa fa-toggle-off"></i> <?php echo e('Set Position'); ?></a></li>

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
							<li>
								<?php if($property->soldout==0): ?>                	
								<a href="<?php echo e(url('admin/properties/soldout/'.Crypt::encryptString($property->id))); ?>"><i class="md md-check"></i> <?php echo e('Make Soldout'); ?></a>
								<?php else: ?>
								<a href="<?php echo e(url('admin/properties/soldout/'.Crypt::encryptString($property->id))); ?>"><i class="md md-close"></i> <?php echo e('Unset Soldout'); ?></a>
								<?php endif; ?>
							</li>
							<li><a href="<?php echo e(url('admin/properties/delete/'.Crypt::encryptString($property->id))); ?>" onclick="return confirm('<?php echo e(trans('words.dlt_warning_text')); ?>')"><i class="md md-delete"></i> <?php echo e(trans('words.remove')); ?></a></li>
						</ul>
					</div> 
          		  </td>
                
            </tr>

            <div class="modal fade" id="PropertyPlanModal<?php echo e($property->id); ?>" role="dialog" style="top: 100px;">
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
		                 </div><br/><br/>
		                 <div class="form-group">
		                    <label class="col-sm-4 col-form-label"><?php echo e(trans('words.status')); ?></label>
		                      <div class="col-sm-8">
		                            <select class="form-control" name="status">                               
		                                <option value="1" <?php if(isset($property->status) AND $property->status==1): ?> selected <?php endif; ?>><?php echo e(trans('words.active')); ?></option>
		                                <option value="0" <?php if(isset($property->status) AND $property->status==0): ?> selected <?php endif; ?>><?php echo e(trans('words.inactive')); ?></option>                            
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

			<!--.PropertyPositionModal-->
			  <div class="modal fade" id="PropertyPositionModal<?php echo e($property->id); ?>" role="dialog" style="top: 100px;">
			    <div class="modal-dialog">
			       <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title"><?php echo e($property->property_name); ?> <?php echo e('Set Position'); ?></h4>
			        </div>
			        <div class="modal-body">
			        	<div class="panel-body">
			      		  <?php echo Form::open(array('url' => array('admin/properties/position_update'),'class'=>'','name'=>'plan_form','id'=>'plan_form','role'=>'form','enctype' => 'multipart/form-data')); ?> 	

			        	<input type="hidden" name="property_id" value="<?php echo e($property->id); ?>">
						
			        	<div class="form-group">
                    	<label class="col-sm-4 control-label"><?php echo e('Set Position'); ?></label>
	                      <div class="col-sm-8">
	                            <select class="form-control" name="position_id"> 
									<option value="999" <?php if(isset($property->position_id) AND $property->position_id==999 OR $property->position_id==99): ?> selected <?php endif; ?>>No Position</option>                              
								 	<option value="1" <?php if(isset($property->position_id) AND $property->position_id==1): ?> selected <?php endif; ?>>1st Position</option>
									<option value="2" <?php if(isset($property->position_id) AND $property->position_id==2): ?> selected <?php endif; ?>>2nd Position</option>
									<option value="3" <?php if(isset($property->position_id) AND $property->position_id==3): ?> selected <?php endif; ?>>3rd Position</option>
									<option value="4" <?php if(isset($property->position_id) AND $property->position_id==4): ?> selected <?php endif; ?>>4th Position</option>
									<option value="5" <?php if(isset($property->position_id) AND $property->position_id==5): ?> selected <?php endif; ?>>5th Position</option>
									<option value="6" <?php if(isset($property->position_id) AND $property->position_id==6): ?> selected <?php endif; ?>>6th Position</option>
									<option value="7" <?php if(isset($property->position_id) AND $property->position_id==7): ?> selected <?php endif; ?>>7th Position</option>
									<option value="8" <?php if(isset($property->position_id) AND $property->position_id==8): ?> selected <?php endif; ?>>8th Position</option>
									<option value="9" <?php if(isset($property->position_id) AND $property->position_id==9): ?> selected <?php endif; ?>>9th Position</option>
									<option value="10" <?php if(isset($property->position_id) AND $property->position_id==10): ?> selected <?php endif; ?>>10th Position</option>
									<option value="11" <?php if(isset($property->position_id) AND $property->position_id==11): ?> selected <?php endif; ?>>11th Position</option>
									<option value="12" <?php if(isset($property->position_id) AND $property->position_id==12): ?> selected <?php endif; ?>>12th Position</option>
									<option value="13" <?php if(isset($property->position_id) AND $property->position_id==13): ?> selected <?php endif; ?>>13th Position</option>    
									<option value="14" <?php if(isset($property->position_id) AND $property->position_id==14): ?> selected <?php endif; ?>>14th Position</option> 
									<option value="15" <?php if(isset($property->position_id) AND $property->position_id==15): ?> selected <?php endif; ?>>15th Position</option> 
									<option value="16" <?php if(isset($property->position_id) AND $property->position_id==16): ?> selected <?php endif; ?>>16th Position</option>                        
	                            </select>
								<?php if($errors->has('position_id')): ?>
									<span style="color:#fb0303">
										<?php echo e($errors->first('position_id')); ?>

									</span>
								<?php endif; ?>
	                      </div>
                  		</div><br/><br/>
                  		<div class="form-group">
		                    <label class="col-sm-4 control-label"><?php echo e(trans('words.expiry_date')); ?></label>
		                    <div class="col-sm-8">

		                      <div class="input-group"> 
		                        <input type="text" name="position_exp_date" value="<?php echo e($property->position_exp_date ? date('m/d/Y',$property->position_exp_date) : null); ?>" class="datepicker form-control" placeholder="mm/dd/yyyy">
		                        <div class="input-group-append">
		                            <span class="input-group-text"><i class="ti-calendar"></i></span>
		                        </div>
								<?php if($errors->has('position_exp_date')): ?>
									<span style="color:#fb0303">
										<?php echo e($errors->first('position_exp_date')); ?>

									</span>
								<?php endif; ?>
		                      </div>
							  
		                    </div>
		                 </div><br/><br/>
		                 <div class="form-group">
		                    <label class="col-sm-4 col-form-label"><?php echo e(trans('words.status')); ?></label>
		                      <div class="col-sm-8">
		                            <select class="form-control" name="position_status">                               
									<option value="1" <?php if(isset($property->position_status) AND $property->position_status==1): ?> selected <?php endif; ?>><?php echo e(trans('words.active')); ?></option>
		                                <option value="0" <?php if(isset($property->position_status) AND $property->position_status==0): ?> selected <?php endif; ?>><?php echo e(trans('words.inactive')); ?></option>                              
		                            </select>
		                      </div>
                		</div>
			          
			          </div>
			        </div>
			        <div class="modal-footer">
			          <button type="submit" id="save_btn" class="btn btn-primary"><?php echo e(trans('words.save_changes')); ?></button>	
			          <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('words.close')); ?></button>
			        </div>
			        <?php echo Form::close(); ?> 
			      </div>      
			    </div>
			  </div> <!--/.PropertyPlanModal-->

           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
            <tfoot>
		        <tr>
		            <td colspan="8" class="text-center">
		            	<?php echo $__env->make('admin.pagination', ['paginator' => $propertieslist], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		                 
		            </td>
		        </tr>
        	</tfoot>
        </table>
    </div>
    <div class="clearfix"></div>
</div>

</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection("scripts"); ?>
<script type="text/javascript">
	<?php if(count($errors) > 0): ?>
		$('#PropertyPositionModal<?php echo e($property->id); ?>').modal('show');
	<?php endif; ?>
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/admin/pages/properties.blade.php ENDPATH**/ ?>