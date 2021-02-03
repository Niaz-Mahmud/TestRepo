<?php $__env->startSection('head_title', trans('words.sign_in').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>

   <section class="property-listing boxed-view clearfix" id="agentRegister">
     <div class="inner-container container">

        <div  class="row">
            <div class="col-md-8 col-md-offset-2">
       
                <div id="login-form" class="login-form">
                    <h2 class="hsq-heading type-1"><?php echo e(trans('words.sign_in')); ?></h2>
                        
                        <?php if(Session::has('flash_message')): ?>
                                <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                </button>
                                    <?php echo e(Session::get('flash_message')); ?>

                                </div>
                        <?php endif; ?>

                        <?php if(Session::has('login_error_flash_msg')): ?>
                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <?php endif; ?>

                    <?php echo Form::open(array('url' => 'login','class'=>'search-form','id'=>'loginform','role'=>'form')); ?> 
                        <div class="form-group agr-fields">
                            <input type="email" class="form-control" placeholder="<?php echo e(trans('words.email')); ?>" name="email" id="email"/>
                            <?php if($errors->has('email')): ?>
                                <span style="color:#fb0303">
                                    <?php echo e($errors->first('email')); ?>

                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group agr-fields">
                            <input class="form-control" placeholder="<?php echo e(trans('words.password')); ?>" type="password" name="password" id="password"/>
                            <?php if($errors->has('password')): ?>
                                <span style="color:#fb0303">
                                    <?php echo e($errors->first('password')); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                        <?php if(getcong('recaptcha')==1): ?>
                        <div class="search-fields" align="center">

                            <?php echo NoCaptcha::display(); ?>


                            <?php if($errors->has('g-recaptcha-response')): ?>
                                <span style="color:#fb0303">
                                    <?php echo e($errors->first('g-recaptcha-response')); ?>

                                </span>
                            <?php endif; ?>
                            
                        </div> 
                        <?php endif; ?> 
                        
                        <div class="search-button-container button-box">
                            <button class="btn"><?php echo e('Login Now'); ?></button>
                        </div>

                        <br/>&nbsp;

                        <div class="search-fields" style="font-size: 15px; color:#fff;">                            
                                <p><?php echo e(trans('words.dont_have_account')); ?> <a style="color:#ecc807;" href="<?php echo e(url('register')); ?>"><?php echo e(trans('words.register_here')); ?></a>                <br>  
                            <a style="color:#ecc807;" href="<?php echo e(url('password/email')); ?>"><?php echo e(trans('words.forgot_pass_text')); ?></a></p>
                        </div>

                    </div>

                    <?php echo Form::close(); ?>  
                </div>



            </div>   <!--col-md-->
        </div>  <!--row-->
    </div> <!--container-->
  </section>
  
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xmapp\htdocs\floorfly4\resources\views/pages/login.blade.php ENDPATH**/ ?>