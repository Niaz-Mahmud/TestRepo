<?php $__env->startSection('content'); ?>

<div id="main">
    <div class="page-header">


        <h2>All Comments</h2>
    </div>


    <div class="panel panel-default panel-shadow">
        <div class="panel-body">

            <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <th><?php echo e('#'); ?></th>
                        <th><?php echo e('Comments'); ?></th>
                        <th><?php echo e('Name'); ?></th>
                        <th><?php echo e('Time'); ?></th>
                        <th><?php echo e('Post Id'); ?></th>
                        <th><?php echo e('Comment Id'); ?></th>
                        <th><?php echo e('Post Title'); ?></th>

                        <th class="text-center width-100"><?php echo e(trans('words.action')); ?></th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
                    <tr>
                    <td scope="row"><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($comment->comment); ?></td>
                        <td><?php echo e($comment->name); ?></td>
                        <td><?php echo e($comment->created_at); ?></td>
                        <td><?php echo e($comment->blog_id); ?></td>
                        <td><?php echo e($comment->id); ?></td>
                      <td><?php echo e($comment->blog->title); ?></td>
                       
                     
                      

                        <td class="text-center">
                        <div class="btn-group">
                                <button type="button" class="btn btn-default-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <?php echo e(trans('words.action')); ?> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu"> 
                                <li><a href="<?php echo e(route('comments.delete',['id'=>$comment->id])); ?>" onclick="return confirm('<?php echo e(trans('words.dlt_warning_text')); ?>')"><i class="md md-delete"></i> <?php echo e(trans('words.remove')); ?></a></li>
                                <li><a type="button"  data-toggle="modal" data-target="#myModal">Reply</a></li>
  

</ul>
</div>

<div id="myModal" class="modal fade" role="dialog">
<form action="<?php echo e(route('replies.store',$comment->id)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <div class="form-group">

                                                    <input type="text" class="form-control" name="reply"
                                                        id="formGroupExampleInput" placeholder="Reply">
                                                </div>
                                                <div class="submit-btn">
                                                    <input type="submit" class="btn" value="Submit"
                                                        id="formGroupExampleInput2" placeholder="Another input">
                                                </div>

                                            </form>

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
<script>
$('#myModal').modal('show')

</script>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\backupfloorfly\resources\views/admin/comments/index.blade.php ENDPATH**/ ?>