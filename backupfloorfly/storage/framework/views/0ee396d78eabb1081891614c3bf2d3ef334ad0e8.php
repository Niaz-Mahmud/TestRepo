<?php $__env->startSection('head_title', trans('words.dashboard_text').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
<!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="<?php if(getcong('title_bg')): ?> <?php echo e(URL::asset('upload/'.getcong('title_bg'))); ?> <?php else: ?> <?php echo e(URL::asset('site_assets/img/breadcrumb-bg.jpg')); ?> <?php endif; ?>">
    <div class="inner-container container">
      <h1><?php echo e(trans('words.dashboard_text')); ?></h1>
      <div class="breadcrumb">
        <ul class="list-inline">
          <li class="home"><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('words.home')); ?></a></li>
          <li><a href="#"><?php echo e(trans('words.dashboard_text')); ?></a></li>
        </ul>
      </div>
    </div>
  </section>
  <!--Breadcrumb Section-->
 <div class="container">
  <div class="min_profile">
  <div class="row">
    <?php echo $__env->make("_particles.sidebar_user", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="col-lg-9 col-md-9">

        <h3 align="left"><?php echo e(trans('words.welcome_back')); ?>, <?php echo e(Auth::user()->name); ?></h3>
        <div class="clearfix"></div>
        <?php if(Session::has('error')): ?>
                  <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                      <?php echo e(Session::get('error')); ?>

                      <?php echo e(Session::flash('error',Session::get('error'))); ?>

                  </div>
        <?php endif; ?>
        <?php if(Session::has('success')): ?>
                  <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                      <?php echo e(Session::get('success')); ?>

                      <?php echo e(Session::flash('success',Session::get('success'))); ?>

                  </div>
        <?php endif; ?>
        <?php if(Session::has('error_flash_message')): ?>
                  <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                      <?php echo e(Session::get('error_flash_message')); ?>

                      <?php echo e(Session::flash('error_flash_message',Session::get('error_flash_message'))); ?>

                  </div>
        <?php endif; ?>
        <div class="contact-info clearfix">

            <div class="contact-info-box col-md-6 col-lg-4">
              <a href="<?php echo e(URL::to('my_properties')); ?>">
                <div class="inner-container">
                  <i class="fa fa-home icon"></i>
                  <div class="value" style="font-size: 48px;"><?php echo e($properties_count); ?>

                    <div class="clearfix"></div>
                    <div class="text" style="font-size: 20px; margin-top: 10px;"><?php echo e(trans('words.properties')); ?></div>
                  </div>
                </div>
              </a>  
            </div>
            <div class="contact-info-box col-md-6 col-lg-4">
              <a href="<?php echo e(URL::to('my_properties')); ?>">
                <div class="inner-container">
                  <i class="fa fa-clock-o icon"></i>
                  <div class="value" style="font-size: 48px;"><?php echo e($pending_properties_count); ?>

                    <div class="clearfix"></div>
                    <div class="text" style="font-size: 20px; margin-top: 10px;"><?php echo e(trans('words.pending')); ?></div>
                  </div>
                </div>
              </a>  
            </div>
                
            <div class="contact-info-box col-md-6 col-lg-4">
              <a href="<?php echo e(URL::to('inquiries')); ?>">
              <div class="inner-container">
                <i class="fa fa-envelope"></i>
                <div class="value" style="font-size: 48px;"><?php echo e($inquiries); ?>

                  <div class="clearfix"></div>
                    <div class="text" style="font-size: 20px; margin-top: 10px;"><?php echo e(trans('words.inquiries')); ?></div>
                </div>
              </div>
            </a>
            </div>
              
        </div>
       <?php if(Auth::User()->usertype!='Agents'): ?>    
         <?php if(getcong('bank_payment_details')): ?> 
         <div class="contact-info clearfix" style="border: 1px solid rgba(0, 0, 0, 0.1);padding: 15px;background-color: #fafafa;">
          <?php echo stripslashes(getcong('bank_payment_details')); ?>      
        </div>
        <?php endif; ?>
      <?php endif; ?>
            
    </div><!-- end col -->
  </div>
  </div>
  
  </div>


  <?php $__env->stopSection(); ?>
<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crafyvzz/public_html/floorfly.com/resources/views/pages/dashboard.blade.php ENDPATH**/ ?>