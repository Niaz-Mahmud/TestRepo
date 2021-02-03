<?php $__env->startSection('content'); ?>

<div id="main">
    <div class="page-header">


        <h2>All Replies</h2>
    </div>


    <div class="panel panel-default panel-shadow">
        <div class="panel-body">

            <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <th><?php echo e('#'); ?></th>
                        <th><?php echo e('Replies'); ?></th>
                      
                        <th><?php echo e('Time'); ?></th>
                        <th><?php echo e('Comment Id'); ?></th>
                        

                        <th class="text-center width-100"><?php echo e(trans('words.action')); ?></th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
                    <tr>
                    <td scope="row"><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($reply->reply); ?></td>
                        
                        <td><?php echo e($reply->created_at); ?></td>
                        <td><?php echo e($reply->comment_id); ?></td>
                      

                        <td class="text-center">
                        <div class="btn-group">
                                <button type="button" class="btn btn-default-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <?php echo e(trans('words.action')); ?> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu"> 
                                <li><a href="<?php echo e(route('replies.delete',['id'=>$reply->id])); ?>" onclick="return confirm('<?php echo e(trans('words.dlt_warning_text')); ?>')"><i class="md md-delete"></i> <?php echo e(trans('words.remove')); ?></a></li>

</ul>
</div> 
                         



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

<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\backupfloorfly\resources\views/admin/replies/index.blade.php ENDPATH**/ ?>