<?php $__env->startSection('head_title', trans('words.profile').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
<!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="<?php if(getcong('title_bg')): ?> <?php echo e(URL::asset('upload/'.getcong('title_bg'))); ?> <?php else: ?> <?php echo e(URL::asset('site_assets/img/breadcrumb-bg.jpg')); ?> <?php endif; ?>">
    <div class="inner-container container">
      <h1><?php echo e(trans('words.profile')); ?></h1>
      <div class="breadcrumb">
        <ul class="list-inline">
          <li class="home"><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('words.home')); ?></a></li>
          <li><a href="#"><?php echo e(trans('words.profile')); ?></a></li>
        </ul>
      </div>
    </div>
  </section>
  <!--Breadcrumb Section-->
<!-- begin:content -->
    <div class="container">
  <div class="min_profile">
  <div class="row">
    <?php echo $__env->make("_particles.sidebar_user", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="col-lg-9 col-md-9 min_form">
      <?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
      <?php if(Session::has('flash_message_profile')): ?>
                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
 </button>
                        <?php echo e(Session::get('flash_message_profile')); ?>

                    </div>
            <?php endif; ?>
    <div class="form_min">
      <?php echo Form::open(array('url' => 'profile','class'=>'','name'=>'profile_form','id'=>'profile_form','role'=>'form','enctype' => 'multipart/form-data')); ?>

        <div class="row">
          <div class="col-lg-3">
            <div class="edit-avatar">
               
              <?php if(Auth::user()->image_icon): ?>          

            <img src="<?php echo e(URL::asset('upload/members/'.Auth::user()->image_icon.'-b.jpg')); ?>" alt="" class="profile-avatar">

            <?php else: ?>
              <img src="<?php echo e(URL::asset('site_assets/img/agent-img3.jpg')); ?>" alt="" class="profile-avatar">
            <?php endif; ?>
               <input type="file" name="user_icon" class="">

            </div>
          </div>
          <div class="col-lg-9">
            
            <div class="form-block">
              <label><?php echo e(trans('words.name')); ?></label>
              <input class="border" type="text" name="name" value="<?php echo e(Auth::user()->name); ?>" required>
            </div>
            <div class="form-block">
              <label><?php echo e(trans('words.email')); ?></label>
              <input class="border" type="text" name="email" value="<?php echo e(Auth::user()->email); ?>" required>
            </div>
            <div class="form-block">
              <label><?php echo e(trans('words.phone')); ?></label>
              <input class="border" type="text" name="phone" value="<?php echo e(Auth::user()->phone); ?>">
            </div>
          </div>
        </div><!-- end row -->
              
        <div class="form-block">
          <label><?php echo e(trans('words.about')); ?></label>
          <textarea class="border" name="about"><?php echo e(Auth::user()->about); ?></textarea>
        </div>  
        
        <div class="row">
          <div class="col-lg-6 soi_t">
            <h4><?php echo e(trans('words.social_profiles')); ?></h4>
            <div class="divider"></div>
            <div class="form-block">
              <label>Facebook</label>
              <input class="border" type="text" name="facebook" value="<?php echo e(Auth::user()->facebook); ?>">
            </div>
            
            <div class="form-block">
              <label>Twitter</label>
              <input class="border" type="text" name="twitter" value="<?php echo e(Auth::user()->twitter); ?>">
            </div>
            
            
          </div>
          <div class="col-lg-6 soi_t">
            <h4>&nbsp;</h4>
            <div class="divider"></div>
             <div class="form-block">
              <label>Instagram</label>
              <input class="border" type="text" name="instagram" value="<?php echo e(Auth::user()->instagram); ?>">
            </div>
            <div class="form-block">
              <label>Linkedin</label>
              <input class="border" type="text" name="linkedin" value="<?php echo e(Auth::user()->linkedin); ?>">
            </div>
          </div>
        </div><!-- end row -->
        
        <div class="form-block">
          <button type="submit" class="button button-icon"><i class="fa fa-check"></i><?php echo e(trans('words.save_changes')); ?></button>
        </div>
        
      <?php echo Form::close(); ?> 
      
    </div>
    
    </div><!-- end col -->
  </div>
  </div>
  
  </div>
    <!-- end:content -->
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/pages/profile.blade.php ENDPATH**/ ?>