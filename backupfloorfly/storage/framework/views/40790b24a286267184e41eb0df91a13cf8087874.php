<?php $__env->startSection("content"); ?>

<div id="main">

	<div class="page-header">
		<h2> <?php echo e('Update Post'); ?></h2>		
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
        
            <form action="<?php echo e(route('frontd.update',['id'=>$data->id])); ?>" method="post" enctype="multipart/form-data">

                <?php echo e(csrf_field()); ?>


                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Post Title'); ?></label>
                    <div class="col-sm-9">
                        <input type="text" name="title" class="form-control" value="<?php echo e($data->title); ?>">
                    </div>
                </div>

               

                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Post Link'); ?></label>
                    <div class="col-sm-9">
                        <input type="text" name="link" class="form-control" value="<?php echo e($data->link); ?>">
                    </div>
                </div>

           

                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('Service Category'); ?></label>
                    <div class="col-sm-9">
                  
                        <select name="type" id="type" class="form-control">
                            <option value="">Select Post Section</option>
                            <option value="on sale left ads" <?php if( $data->type == 'on sale left ads'): ?> selected <?php endif; ?>>On Sale Left ads</option>
                            <option value="on sale bottom ads" <?php if( $data->type == 'on sale bottom ads'): ?> selected <?php endif; ?>>On Sale Bottom ads</option>
                            <option value="on sale property" <?php if( $data->type == 'on sale property'): ?> selected <?php endif; ?>>On Sale Property</option>
                            <option value="premium collection" <?php if( $data->type == 'premium collection'): ?> selected <?php endif; ?>>Premium Collection</option>
                            <option value="verified plots" <?php if( $data->type == 'verified plots'): ?> selected <?php endif; ?>>Verified Plots</option>
                            <option value="service" <?php if( $data->type == 'service'): ?> selected <?php endif; ?>>Service</option>
                            <option value="commercial projects" <?php if( $data->type == 'commercial projects'): ?> selected <?php endif; ?>>Commercial Projects</option>
                            
                            <option value="sidebar ads" <?php if( $data->type == 'sidebar ads'): ?> selected <?php endif; ?>>Sidebar Ads Banner</option>
 			    <option value="home-sidebar-ads1" <?php if( $data->type == 'home-sidebar-ads1'): ?> selected <?php endif; ?>>home-sidebar-ads1</option>
                          
                        </select>

                    </div>
                </div>



                <div class="form-group row">
                    <label for="" class="col-sm-3 control-label"><?php echo e('post Image'); ?></label>
                    <div class="col-sm-9">
                    
                    <div style="width:10%; float:left">
                        <img src="<?php echo e(url($data->image)); ?>" style="max-width:95%"/>
                    </div>
                    <div style="width:90%; float:left">
                        <input type="file" name="image" class="form-control" >
                    </div>    
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
<script>


</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/admin/pages/front-design/edit.blade.php ENDPATH**/ ?>