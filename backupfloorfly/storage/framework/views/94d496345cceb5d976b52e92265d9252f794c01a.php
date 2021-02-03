<?php $__env->startSection("content"); ?>

<div id="main">
  <div class="page-header">
    <h2> <?php echo e(isset($plan_info->id) ? trans('words.edit').': '. $plan_info->plan_name : trans('words.add').' '.trans('words.plan')); ?></h2>
    
    <a href="<?php echo e(URL::to('admin/subscription_plan')); ?>" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> <?php echo e(trans('words.back')); ?></a>
    
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
                <?php echo Form::open(array('url' => array('admin/subscription_plan/add_edit_plan'),'class'=>'form-horizontal padding-15','name'=>'plan_form','id'=>'plan_form','role'=>'form','enctype' => 'multipart/form-data')); ?> 
                <input type="hidden" name="id" value="<?php echo e(isset($plan_info->id) ? $plan_info->id : null); ?>">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.plan_name')); ?>*</label>
                      <div class="col-sm-9">
                        <input type="text" name="plan_name" value="<?php echo e(isset($plan_info->plan_name) ? $plan_info->plan_name : null); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.duration')); ?>*</label>
                    <div class="col-sm-5">
                      <input type="number" name="plan_duration" value="<?php echo e(isset($plan_info->plan_duration) ? $plan_info->plan_duration : null); ?>" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <select name="plan_duration_type" class="form-control">
                         <option value="1" <?php if(isset($plan_info->plan_duration_type) AND $plan_info->plan_duration_type=='1'): ?> selected <?php endif; ?>><?php echo e(trans('words.days')); ?></option>

                         <option value="30" <?php if(isset($plan_info->plan_duration_type) AND $plan_info->plan_duration_type=='30'): ?> selected <?php endif; ?>><?php echo e(trans('words.months')); ?></option>

                         <option value="365" <?php if(isset($plan_info->plan_duration_type) AND $plan_info->plan_duration_type=='365'): ?> selected <?php endif; ?>><?php echo e(trans('words.years')); ?></option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.price')); ?>*</label>
                    <div class="col-sm-9">
                      <input type="text" name="plan_price" value="<?php echo e(isset($plan_info->plan_price) ? $plan_info->plan_price : null); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.status')); ?></label>
                      <div class="col-sm-9">
                            <select class="form-control" name="status">                               
                                <option value="1" <?php if(isset($plan_info->status) AND $plan_info->status==1): ?> selected <?php endif; ?>><?php echo e(trans('words.active')); ?></option>
                                <option value="0" <?php if(isset($plan_info->status) AND $plan_info->status==0): ?> selected <?php endif; ?>><?php echo e(trans('words.inactive')); ?></option>                            
                            </select>
                      </div>
                </div>  
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                      <button type="submit" class="btn btn-primary"><?php echo e(trans('words.save_changes')); ?></button>
                         
                    </div>
                </div>
                
                <?php echo Form::close(); ?> 
            </div>
        </div>
   
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/admin/pages/addeditplan.blade.php ENDPATH**/ ?>