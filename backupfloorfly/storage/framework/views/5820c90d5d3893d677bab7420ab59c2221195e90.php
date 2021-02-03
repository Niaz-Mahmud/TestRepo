<?php $__env->startSection("content"); ?>
<div id="main">
  <div class="page-header">
    
    <div class="pull-right">
      <a href="<?php echo e(URL::to('admin/subscription_plan/add_plan')); ?>" class="btn btn-primary"><?php echo e(trans('words.add').' '.trans('words.plan')); ?> <i class="fa fa-plus"></i></a>
    </div>
    <h2><?php echo e(trans('words.subscription_plan')); ?></h2>
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
                  <th><?php echo e(trans('words.plan_name')); ?></th>
                  <th><?php echo e(trans('words.duration')); ?></th>
                  <th><?php echo e(trans('words.price')); ?></th>
                  <th><?php echo e(trans('words.status')); ?></th>

                  <th class="text-center width-100"><?php echo e(trans('words.action')); ?></th>
              </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $plan_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $plan_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <tr>
               
                <td><?php echo e($plan_data->plan_name); ?></td>
                <td><?php echo e(App\SubscriptionPlan::getPlanDuration($plan_data->id)); ?></td>
                <td><?php echo e($plan_data->plan_price); ?></td>
                <td>
                
                  <?php if($plan_data->status==1): ?> 
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
                 <a href="<?php echo e(url('admin/subscription_plan/edit_plan/'.$plan_data->id)); ?>" class="btn btn-icon waves-effect waves-light btn-success m-b-5 m-r-5" data-toggle="tooltip" title="<?php echo e(trans('words.edit')); ?>"> <i class="fa fa-edit"></i> </a>
                 <a href="<?php echo e(url('admin/subscription_plan/delete/'.$plan_data->id)); ?>" class="btn btn-icon waves-effect waves-light btn-danger m-b-5" onclick="return confirm('<?php echo e(trans('words.dlt_warning_text')); ?>')" data-toggle="tooltip" title="<?php echo e(trans('words.remove')); ?>"> <i class="fa fa-remove"></i> </a>
                
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
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/admin/pages/plan_list.blade.php ENDPATH**/ ?>