<?php $__env->startSection("content"); ?>
<div id="main">
	<div class="page-header">
		
		<div class="pull-right">
			<a href="<?php echo e(URL::to('admin/users/adduser')); ?>" class="btn btn-primary"><?php echo e(trans('words.add').' '.trans('words.user')); ?> <i class="fa fa-plus"></i></a>
		</div>
		<h2>Users</h2>
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
            
            <div class="col-sm-8">          
             <?php echo Form::open(array('url' => 'admin/users','class'=>'form-inline filter','id'=>'search','role'=>'form','method'=>'get')); ?>	
                <span class="bold text-muted"><?php echo e(trans('words.search')); ?></span>
                <div class="form-group">
                    <input type="text" class="form-control" id="" name="keyword" placeholder="<?php echo e(trans('words.search_by_name_email')); ?>">
                </div>             
                <div class="form-group">
                    <select name="type" id="basic" class="selectpicker show-tick form-control" data-live-search="false">
                       <option value=""><?php echo e(trans('words.user_type')); ?></option>
                       <option value="Agent"><?php echo e(trans('words.agent')); ?></option>
                       <option value="User"><?php echo e(trans('words.user')); ?></option>
                    </select>
                </div>
                <div class="form-group"> 
                <button type="submit" class="btn btn-default-dark  pull-right"><?php echo e(trans('words.search')); ?></button>
                </div>
            <?php echo Form::close(); ?>

            </div>
            <div class="col-sm-4">
            <a href="<?php echo e(URL::to('admin/users/export')); ?>" class="btn btn-info btn-md waves-effect waves-light pull-right" data-toggle="tooltip" title="<?php echo e(trans('words.export_users')); ?>"><i class="fa fa-file-excel-o"></i> <?php echo e(trans('words.export_users')); ?></a>
            </div>
    	</div>
	</div>
     
<div class="panel panel-default panel-shadow">
    <div class="panel-body table-responsive">
         
        <table class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
	            <tr>
	                <th><?php echo e(trans('words.user_type')); ?></th>
	                <th><?php echo e(trans('words.image')); ?></th>
	                <th><?php echo e(trans('words.name')); ?></th>
	                <th><?php echo e(trans('words.email')); ?></th>
					<th><?php echo e(trans('words.phone')); ?></th> 
	                <th class="text-center width-100"><?php echo e(trans('words.action')); ?></th>
	            </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $allusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         	   <tr>
            	<td><?php echo e($users->usertype); ?></td>
            	<td> <?php if($users->image_icon): ?>
                                 
									<img src="<?php echo e(URL::asset('upload/members/'.$users->image_icon.'-s.jpg')); ?>" width="80" alt="person">
								<?php endif; ?></td>
                <td><?php echo e($users->name); ?></td>
                <td><?php echo e($users->email); ?></td>
                <td><?php echo e($users->phone); ?></td>
                <td class="text-center">

                    <a href="<?php echo e(url('admin/users/adduser/'.Crypt::encryptString($users->id))); ?>" class="btn btn-icon waves-effect waves-light btn-success m-b-5 m-r-5" data-toggle="tooltip" title="<?php echo e(trans('words.edit')); ?>"> <i class="fa fa-edit"></i> </a>
                 <a href="<?php echo e(url('admin/users/delete/'.Crypt::encryptString($users->id))); ?>" class="btn btn-icon waves-effect waves-light btn-danger m-b-5" onclick="return confirm('<?php echo e(trans('words.dlt_warning_text')); ?>')" data-toggle="tooltip" title="<?php echo e(trans('words.remove')); ?>"> <i class="fa fa-remove"></i> </a>

               
                
            </td>
                
            </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
            </tbody>
            <tfoot>
		        <tr>
		            <td colspan="8" class="text-center">
		            	<?php echo $__env->make('admin.pagination', ['paginator' => $allusers], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		                 
		            </td>
		        </tr>
        	</tfoot>
        </table>
    </div>
    <div class="clearfix"></div>
</div>

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/admin/pages/users.blade.php ENDPATH**/ ?>