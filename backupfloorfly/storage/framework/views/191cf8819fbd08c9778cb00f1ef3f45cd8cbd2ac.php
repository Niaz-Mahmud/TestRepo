<?php $__env->startSection("content"); ?>

<div id="main">

	<div class="page-header">
		<h2> <?php echo e(isset($type->types) ? trans('words.edit').': '. $type->types : trans('words.add').' '.' New Post'); ?></h2>		
		<a href="<?php echo e(route('frontd.index')); ?>" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> <?php echo e(trans('words.back')); ?></a>	  
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
            <form action="<?php echo e(route('frontd.store')); ?>" method="post" enctype="multipart/form-data">

                <?php echo e(csrf_field()); ?>


                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Title'); ?></label>
                    <div class="col-sm-9">
                        <input type="text" name="title" class="form-control" placeholder="service Title">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Post Image'); ?></label>
                    <div class="col-sm-9">
                        <input type="file" name="image" class="form-control">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Post Link'); ?></label>
                    <div class="col-sm-9">
                        <input type="text" name="link" class="form-control" placeholder="Link url">
                    </div>
                </div>




                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Post Section '); ?></label>
                    <div class="col-sm-9">
                  
                        <select name="type" id="post_type" class="form-control">
                            <option value="">Select Post Section</option>
                            <option value="on sale left ads">On Sale Left ads</option>
                            <option value="on sale bottom ads">On Sale Bottom ads</option>
                            <option value="on sale property">On Sale Property</option>
                            <option value="premium collection">Premium Collection</option>
                            <option value="verified plots">Verified Plots</option>
                            <option value="service">Service</option>
                            <option value="commercial projects">Commercial Projects</option>
                            <option value="sidebar ads">Sidebar Ads Banner</option>
			    <option value="home-sidebar-ads1">Home  Sidebar Ads1</option>
                        </select>

                    </div>
                </div>

                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary"><?php echo e(isset($type->id) ? trans('words.save_changes') : trans('words.submit')); ?></button>                        
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</div>

<script type="text/javascript" src="<?php echo e(URL::asset('site_assets/ckeditor/ckeditor.js')); ?>"></script>
<script>CKEDITOR.replace( 'p-desc' );</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/admin/pages/front-design/create.blade.php ENDPATH**/ ?>