<?php $__env->startSection('head_title', trans('words.forgot_password').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
   <section class="property-listing boxed-view clearfix" id="agentRegister">
     <div class="inner-container container">
         <div  class="row">
            <div class="col-md-8 col-md-offset-2">
       
                <div id="login-form" class="login-form">
                    <h2 class="hsq-heading type-1"><?php echo e(trans('words.forgot_password')); ?></h2>
                        <?php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        </button>
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
                                </button>
                                    <?php echo e(Session::get('flash_message')); ?>

                                </div>
                        <?php endif; ?>

                    <?php echo Form::open(array('url' => 'password/email','class'=>'search-form','id'=>'loginform','role'=>'form')); ?> 
                      <div class="form-group agr-fields">
                            <input type="email" class="form-control" placeholder="<?php echo e(trans('words.email')); ?>" name="email" id="email" /><!-- Email Field -->
                        </div>
                        
                        <div class="search-button-container button-box">
                        <button class="btn"><?php echo e(trans('words.send')); ?></button>
                        <br/>&nbsp;

                        <div class="search-fields" style="font-size: 15px; color:#fff;">                            
                                <?php echo e(trans('words.remember_password')); ?> <a style="color:#ecc807;" href="<?php echo e(url('login')); ?>"><?php echo e(trans('words.login_here')); ?></a></p>
                        </div>

                        </div>

                    <?php echo Form::close(); ?>  
                </div>

    
             </div>   <!--col-md-->
        </div>  <!--row-->
    </div> <!--container-->
  </section>
  
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crafyvzz/public_html/floorfly.com/resources/views/pages/forgot_password.blade.php ENDPATH**/ ?>