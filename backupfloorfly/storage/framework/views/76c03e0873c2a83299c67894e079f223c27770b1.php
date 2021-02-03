

<?php $__env->startSection("content"); ?>

<div id="main">
	<div class="page-header">
		<h2> <?php echo e(isset($user->name) ? trans('words.edit').': '. $user->name : trans('words.add').' '.trans('words.user')); ?></h2>
		
		<a href="<?php echo e(URL::to('admin/users')); ?>" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> <?php echo e(trans('words.back')); ?></a>
	  
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
                <?php echo Form::open(array('url' => array('admin/users/adduser'),'class'=>'form-horizontal padding-15','name'=>'user_form','id'=>'user_form','role'=>'form','enctype' => 'multipart/form-data')); ?> 
                <input type="hidden" name="id" value="<?php echo e(isset($user->id) ? $user->id : null); ?>">
                  
                
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.name')); ?></label>
                    <div class="col-sm-9">
                        <input type="text" name="name" value="<?php echo e(isset($user->name) ? $user->name : null); ?>" class="form-control">
                    </div>
                </div>
				<div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.phone')); ?></label>
                    <div class="col-sm-9">
                        <input type="text" name="phone" value="<?php echo e(isset($user->phone) ? $user->phone : null); ?>" class="form-control" value="">
                    </div>
                </div>
				 
				<div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.about')); ?></label>
                    <div class="col-sm-9">
                         
						<textarea name="about" cols="50" rows="5" class="form-control"><?php echo e(isset($user->about) ? $user->about : null); ?></textarea>
                    </div>
                </div>
				<div class="form-group">
                    <label for="" class="col-sm-3 control-label">Facebook</label>
                    <div class="col-sm-9">
                        <input type="text" name="facebook" value="<?php echo e(isset($user->facebook) ? $user->facebook : null); ?>" class="form-control" value="">
                    </div>
                </div>
				<div class="form-group">
                    <label for="" class="col-sm-3 control-label">Twitter</label>
                    <div class="col-sm-9">
                        <input type="text" name="twitter" value="<?php echo e(isset($user->twitter) ? $user->twitter : null); ?>" class="form-control" value="">
                    </div>
                </div>
				<div class="form-group">
                    <label for="" class="col-sm-3 control-label">Instagram</label>
                    <div class="col-sm-9">
                        <input type="text" name="instagram" value="<?php echo e(isset($user->instagram) ? $user->instagram : null); ?>" class="form-control" value="">
                    </div>
                </div>
				<div class="form-group">
                    <label for="" class="col-sm-3 control-label">Linkedin</label>
                    <div class="col-sm-9">
                        <input type="text" name="linkedin" value="<?php echo e(isset($user->linkedin) ? $user->linkedin : null); ?>" class="form-control" value="">
                    </div>
                </div>
				<div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label"><?php echo e(trans('words.profile_picture')); ?></label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                <?php if(isset($user->profile_image)): ?>
									<img src="<?php echo e(URL::asset($user->profile_image)); ?>" width="80" alt="person">
								<?php endif; ?>
								                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="profile_image" class="filestyle"> 
                            </div>
                        </div>
	
                    </div>
                </div>
				<div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.user_type')); ?></label>
                    <div class="col-sm-4"> 
                        <select name="usertype" id="basic" class="selectpicker show-tick form-control" data-live-search="true">
								<?php if(isset($user->usertype)): ?>
								
								<option value="Agents" <?php if($user->usertype=='Agents'): ?> selected <?php endif; ?>><?php echo e(trans('words.agent')); ?></option>
 								<option value="User" <?php if($user->usertype=='User'): ?> selected <?php endif; ?>><?php echo e(trans('words.user')); ?></option>
                                 <option value="Seller" <?php if($user->usertype=='Seller'): ?> selected <?php endif; ?>>Seller</option>
 
								
								<?php else: ?>  
                                    <option value="Agents"><?php echo e(trans('words.agent')); ?></option>
                                    <option value="User"><?php echo e(trans('words.user')); ?></option>
                                    <option value="Seller">Seller</option>
									 
								<?php endif; ?>
								 
						</select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.status')); ?></label>
                    <div class="col-sm-4"> 
                        <select name="status" id="basic" class="selectpicker show-tick form-control" data-live-search="true">
                                <?php if(isset($user->status)): ?>
                                
                                <option value="1" <?php if($user->status=='1'): ?> selected <?php endif; ?>><?php echo e(trans('words.active')); ?></option>
                                <option value="0" <?php if($user->status=='0'): ?> selected <?php endif; ?>><?php echo e(trans('words.inactive')); ?></option>
 
                                
                                <?php else: ?>
                                        
                                        <option value="1"><?php echo e(trans('words.active')); ?></option>
                                        <option value="0"><?php echo e(trans('words.inactive')); ?></option> 
                                     
                                <?php endif; ?>
                                 
                        </select>
                    </div>
                </div>
				<hr />

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Seller Type</label>
                    <div class="col-sm-4"> 
                        <select name="sellertype" id="basic" class="selectpicker show-tick form-control" data-live-search="true">
                                <?php if(isset($user->sellertype)): ?>
                                
                                <option value="individual" <?php if($user->sellertype=='individual'): ?> selected <?php endif; ?>>Individual / Personal Sales A/C</option>
                                <option value="company" <?php if($user->sellertype=='company'): ?> selected <?php endif; ?>>Company Sales A/C</option>
                                 
                                
                                <?php else: ?>
                                <option value="">Select SellerType</option>       
                                <option value="individual">Individual / Personal Sales A/C</option>
                                <option value="company">Company Sales A/C</option> 
                                     
                                <?php endif; ?>
                                 
                        </select>
                    </div>
                </div>
				<hr />

        
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.email')); ?></label>
                    <div class="col-sm-9">
                        <input type="text" name="email" value="<?php echo e(isset($user->email) ? $user->email : null); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.password')); ?></label>
                    <div class="col-sm-9">
                        <input type="password" name="password" value="" class="form-control">
                    </div>
                </div>
                 
                
                 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary"><?php echo e(isset($user->name) ? trans('words.save_changes') : trans('words.submit')); ?></button>
                         
                    </div>
                </div>
                
                <?php echo Form::close(); ?> 
            </div>
        </div>
   
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/admin/pages/addeditUser.blade.php ENDPATH**/ ?>