<?php $__env->startSection('head_title', trans('words.sign_up').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>



    <section class="property-listing boxed-view clearfix" id="agentRegister">
     <div class="inner-container container">
        <div  class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="login-form" class="login-form">
                    <h2 class="hsq-heading type-1"><?php echo e('Register as Seller'); ?></h2>

                        <?php if(Session::has('flash_message')): ?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                    <?php echo e(Session::get('flash_message')); ?>

                            </div>
                        <?php endif; ?>
            
                        <?php echo Form::open(array('url' => 'register','class'=>'search-form','id'=>'registerform','role'=>'form')); ?>


                        <input type="text" name="usertype" value="User" hidden/> 
                        <input type="text" name="gender" value="Male" hidden/> 

                        <div class="form-group agr-fields">
                            <input type="text" class="form-control" placeholder="<?php echo e(trans('words.name')); ?>" name="name" id="name" /> 
                            <?php if($errors->has('name')): ?>
                                <span style="color:#fb0303">
                                    <?php echo e($errors->first('name')); ?>

                                </span>
                            <?php endif; ?> 
                        </div>

                        <div class="row">
                        
                        <div class="col-md-6">
                             <div class="form-group agr-fields">
                                <input type="number" class="form-control" placeholder="<?php echo e(trans('words.phone')); ?>" name="phone" id="phone"  /> 
                                <?php if($errors->has('phone')): ?>
                                    <span style="color:#fb0303">
                                        <?php echo e($errors->first('phone')); ?>

                                    </span>
                                <?php endif; ?> 
                            </div>
                        </div>

                        <div class="col-md-6">
                             <div class="form-group agr-fields">
                                 <input type="email" class="form-control" placeholder="<?php echo e(trans('words.email')); ?>" name="email" id="email" /> 
                                <?php if($errors->has('email')): ?>
                                <span style="color:#fb0303">
                                    <?php echo e($errors->first('email')); ?>

                                </span>
                                <?php endif; ?> 
                            </div>    
                        </div>  

                        </div>  

                        <div class="row">

                             <div class="col-md-6">  

                                <div class="form-check sellerType-area">
                                    <input class="form-check-input" type="radio" name="sellertype" id="exampleRadios1" value="individual" checked>
                                    <label class="form-check-label" for="sellertype1">
                                        Individual / Personal Sales A/C
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">    
                                <div class="form-check sellerType-area">
                                <input class="form-check-input" type="radio" name="sellertype" id="exampleRadios2" value="company">
                                <label class="form-check-label" for="sellertype2">
                                    Company Sales A/C
                                </label>
                                </div>
                            </div>
                        </div>

                    

                        <div class="row individual select_box" id="individual" style="display:block">

                            <div class="col-md-6">
                                <div class="form-group agr-fields">
                                    <input type="text"  class="form-control" placeholder="<?php echo e('Present Address'); ?>" name="seller_present_address" id="present_address" /> 
                                    <?php if($errors->has('seller_present_address')): ?>
                                        <span style="color:#fb0303">
                                            <?php echo e($errors->first('seller_present_address')); ?>

                                            </span>
                                        <?php endif; ?> 
                                    </div>  
                            </div>   

                            <div class="col-md-6">
                                <div class="form-group agr-fields">
                                    <input type="text"  class="form-control" placeholder="<?php echo e('Permanent Address'); ?>" name="seller_permanent_address" id="permanent_address"/> 
                                    <?php if($errors->has('seller_permanent_address')): ?>
                                        <span style="color:#fb0303">
                                            <?php echo e($errors->first('seller_permanent_address')); ?>

                                        </span>
                                    <?php endif; ?> 
                                </div>
                            </div> 
                        </div>


                        <div class="row company select_box" id="company" style="display:none">
                        <div class="col-md-6">
                             <div class="form-group agr-fields">
                            <input type="text"  class="form-control" placeholder="<?php echo e('Company Name'); ?>" name="company_address" id="company_name" /> 
                            <?php if($errors->has('company_address')): ?>
                                <span style="color:#fb0303">
                                    <?php echo e($errors->first('company_address')); ?>

                                </span>
                            <?php endif; ?> 
                            </div>
                        </div>  

                        <div class="col-md-6">
                          <div class="form-group agr-fields">
                            <input type="text"  class="form-control" placeholder="<?php echo e('Company Trade License'); ?>" name="company_trade_license" id="company_trade_license" /> 
                                <?php if($errors->has('company_trade_license')): ?>
                                    <span style="color:#fb0303">
                                        <?php echo e($errors->first('company_trade_license')); ?>

                                    </span>
                                <?php endif; ?> 
                            </div> 
                        </div> 
                        </div>


                        <div class="form-group agr-fields">
                        
                            <input class="form-control" placeholder="<?php echo e(trans('words.password')); ?>" type="password" name="password" id="password" />
                            <?php if($errors->has('password')): ?>
                                <span style="color:#fb0303">
                                    <?php echo e($errors->first('password')); ?>

                                </span>
                            <?php endif; ?> 
                           
                        </div>
                        <div class="form-group agr-fields">
                            <input class="form-control" type="password" placeholder="<?php echo e(trans('words.confirm_password')); ?>" name="password_confirmation" id="password_confirmation" />
                            <?php if($errors->has('password_confirmation')): ?>
                                <span style="color:#fb0303">
                                    <?php echo e($errors->first('password_confirmation')); ?>

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
                        <button class="btn"><?php echo e(trans('words.sign_up')); ?></button>
                        </div>

                        <br/>&nbsp;

                        <div class="search-fields" style="font-size: 15px; color:#fff">                            
                            <p><?php echo e(trans('words.do_you_have_account')); ?> <a style="color:#ecc807" href="<?php echo e(url('login')); ?>"><?php echo e(trans('words.login_here')); ?></a> </p>
                        </div>

                    <?php echo Form::close(); ?>  
                </div>
             </div>   
        </div>  <!--row-->

    </div> <!--container-->
  </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/pages/register.blade.php ENDPATH**/ ?>