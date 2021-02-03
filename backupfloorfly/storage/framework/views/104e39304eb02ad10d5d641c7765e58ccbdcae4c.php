<?php if(count($partners)>0): ?>
<section id="our-partners">
    <div class="inner-container container">
      <h2 class="hsq-heading type-1"><?php echo e(trans('words.our_partners')); ?></h2>
      <div class="logo-container owl-carousel">
        <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="client-logo">
          <a href="<?php echo e($partner->url); ?>" target="_blank"><img src="<?php echo e(URL::asset('upload/partners/'.$partner->partner_image.'.jpg')); ?>" alt="<?php echo e($partner->name); ?>"></a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
      </div>
    </div>
  </section>
  <?php endif; ?><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/_particles/partners.blade.php ENDPATH**/ ?>