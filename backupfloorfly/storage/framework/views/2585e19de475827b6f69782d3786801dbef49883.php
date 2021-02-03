<?php $__env->startSection('head_title', trans('words.testimonials').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
 
  <!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="<?php if(getcong('title_bg')): ?> <?php echo e(URL::asset('upload/'.getcong('title_bg'))); ?> <?php else: ?> <?php echo e(URL::asset('site_assets/img/breadcrumb-bg.jpg')); ?> <?php endif; ?>">
    <div class="inner-container container">
      <h1><?php echo e(trans('words.testimonials')); ?></h1>
      <div class="breadcrumb">
        <ul class="list-inline">
          <li class="home"><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('words.home')); ?></a></li>
          <li><a href="#"><?php echo e(trans('words.testimonials')); ?></a></li>
        </ul>
      </div>
    </div>
  </section>
  <!--Breadcrumb Section--> 

 <section class="main-container container">
    <div class="testimonials-main-container">
      <h2 class="hsq-heading type-1"><?php echo e(trans('words.our_clients_say')); ?></h2>
      <div class="subtitle"><?php echo e(trans('words.great_words_from_client')); ?></div>
      <div class="testimonials-container clearfix">
        
        <?php $__currentLoopData = $alltestimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $testimonials): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6 testimonials-box">
          <div class="inner-container" style="min-height: 390px;">
            <div class="client-img">
              <?php if($testimonials->t_user_image): ?>
                <img src="<?php echo e(URL::asset('upload/testimonial/'.$testimonials->t_user_image.'.jpg')); ?>" alt="Client Image">
              <?php else: ?>
                <img src="<?php echo e(URL::asset('upload/testimonial/default.jpg')); ?>" alt="Client Image">
              <?php endif; ?>
              
            </div>
            <div class="title-box">
              <div class="name"><?php echo e($testimonials->name); ?></div>
              <div class="title"><?php echo e($testimonials->designation); ?></div>
            </div>
            <blockquote>
              <?php echo stripslashes($testimonials->testimonial); ?>

            </blockquote>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
         
      </div>
      <!-- Pagination -->
      <div class="pagination-box">
        <?php echo $__env->make('_particles.pagination', ['paginator' => $alltestimonials], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
      </div>
      <!-- End of Pagination -->

    </div>

  </section>
  
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/pages/testimonials.blade.php ENDPATH**/ ?>