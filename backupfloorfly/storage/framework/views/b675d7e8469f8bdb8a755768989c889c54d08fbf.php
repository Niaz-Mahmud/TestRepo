

<?php $__env->startSection("content"); ?>

<div id="main">
  <div class="page-header">
    <h2> <?php echo e($page_info->page_title); ?></h2>    
     
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
                <?php echo Form::open(array('url' => array('admin/faq_page'),'class'=>'form-horizontal padding-15','name'=>'settings_form','id'=>'settings_form','role'=>'form','enctype' => 'multipart/form-data')); ?> 
                <input type="hidden" name="id" value="<?php echo e(isset($page_info->id) ? $page_info->id : null); ?>">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.title')); ?>*</label>
                      <div class="col-sm-9">
                        <input type="text" name="page_title" value="<?php echo e(isset($page_info->page_title) ? $page_info->page_title : null); ?>" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.description')); ?></label>
                    <div class="col-sm-9">
                        <textarea id="elm1" name="page_content" class="form-control summernote"><?php echo e(isset($page_info->page_content) ? stripslashes($page_info->page_content) : null); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.status')); ?></label>
                      <div class="col-sm-9">
                            <select class="form-control" name="status">                               
                                <option value="1" <?php if(isset($page_info->status) AND $page_info->status==1): ?> selected <?php endif; ?>><?php echo e(trans('words.active')); ?></option>
                                <option value="0" <?php if(isset($page_info->status) AND $page_info->status==0): ?> selected <?php endif; ?>><?php echo e(trans('words.inactive')); ?></option>                            
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
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/admin/pages/faq_page.blade.php ENDPATH**/ ?>