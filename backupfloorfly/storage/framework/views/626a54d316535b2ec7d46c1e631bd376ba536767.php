<!-- Main Slider -->
  <section id="main-slider">
    
    <?php $__currentLoopData = \App\Slider::orderBy('slider_title')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="items">
      <div class="img-container" data-bg-img="<?php echo e(URL::asset('upload/slides/'.$slide->image_name.'.jpg')); ?>"></div>
      <!-- Change the URL section based on your image\'s name -->
      
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </section>
  
     <!-- End of Main Slider -->
<!-- Property Search Box -->
<section id="property-search-container" class="container" style="margin-bottom: 0px;">
    <?php echo $__env->make("_particles.search", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section> 
<!-- End of Property Search Box-->     

    <?php /**PATH /home/u975246985/domains/floorfly.com/public_html/floorfly/resources/views/_particles/slider.blade.php ENDPATH**/ ?>