<?php $__env->startSection("content"); ?>

<?php if(getcong('home_properties_layout')=='slider'): ?>

<?php echo $__env->make("_particles.slider", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php else: ?>

<?php echo $__env->make("_particles.mapsearch", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>

<!--#propmotions-slider-->
<section id="propmotions-slider" class="property-listing boxed-view clearfix">
    <div class="inner-container container">
        
      <div class="owl-carousel-ads-slider owl-theme">
        <?php $__currentLoopData = \App\Promotionslider::orderBy('id','ASC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="items">
            <a href="<?php echo e($slide->link); ?>"><img class="lazyOwl" data-src="<?php echo e(URL::asset($slide->photo)); ?>" alt=""/></a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>
      
  </div>
</section> <!--#propmotions-slider-->


<!-- Recent Properties -->
  <section class="property-listing boxed-view clearfix">
    <h2 class="hsq-heading type-1"><?php echo e(trans('words.top_properties')); ?></h2>
    <div class="inner-container container">
      <?php $__currentLoopData = $propertieslist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="property-box col-xs-12 col-sm-6 col-md-4">
        <div class="inner-box">
          <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="img-container">
            <?php if($property->featured_property==1): ?><span class="tag-label hot-offer"><?php echo e(trans('words.featured')); ?></span><?php endif; ?>
            <img src="<?php echo e(URL::asset('upload/properties/'.$property->featured_image.'-s.jpg')); ?>" alt="Image of Property">
            <span class="price"><?php echo e(getcong('currency_sign').' '.$property->price); ?></span>

            <?php if($property->property_purpose==trans('words.purpose_sale')): ?>
            <div class="property-status-sale">
                  <span><?php echo e(trans('words.for_sale')); ?></span>
            </div>
            <?php endif; ?>
            <?php if($property->property_purpose==trans('words.purpose_rent')): ?>
            <div class="property-status-rent">
                  <span><?php echo e(trans('words.for_rent')); ?></span>
            </div>
            <?php endif; ?>
          </a>
          <div class="bottom-sec">
            <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="title"><?php echo e(Str::limit($property->property_name,35)); ?></a>
            <div class="location"><?php echo e(Str::limit($property->address,40)); ?></div>
            <!--<div class="desc">-->
            <!--  <?php echo Str::limit($property->description,100); ?>-->
            <!--</div>-->
            <div class="extra-info clearfix">

              <div class="bedroom col-xs-4">
                <i class="fa fa-bed"></i>
                <div class="value"><?php echo e($property->bedrooms); ?></div>
                bed
              </div>

              <div class="bathroom col-xs-4">
                <i class="fa fa-bath"></i>
                <div class="value"><?php echo e($property->bathrooms); ?></div>
                bath
              </div>

              <div class="area col-xs-4">
                <i class="fa fa-columns" aria-hidden="true"></i>
                <div class="value"><?php echo e($property->build_area); ?></div>
                sft
              </div>

            </div>
          </div>
          <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="btn more-link"><?php echo e(trans('words.more_info')); ?></a>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    </div>
    
  </section>
  <!-- End of Recent Properties -->

  <!-- Featured Properties -->
  <?php if(count($featured_properties)>0): ?>
 <!--  <section class="property-listing boxed-view clearfix">
    <h2 class="hsq-heading type-1"><?php echo e(trans('words.featured_properties')); ?></h2>
    <div class="inner-container container">
      <?php $__currentLoopData = $featured_properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="property-box col-xs-12 col-sm-6 col-md-4">
        <div class="inner-box">
          <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="img-container"> 
             <?php if($property->featured_property==1): ?><span class="tag-label hot-offer"><?php echo e(trans('words.featured')); ?></span><?php endif; ?>            
            <img src="<?php echo e(URL::asset('upload/properties/'.$property->featured_image.'-s.jpg')); ?>" alt="Image of Property">
            <span class="price"><?php echo e(getcong('currency_sign').' '.$property->price); ?></span>

            <?php if($property->property_purpose==trans('words.purpose_sale')): ?>
            <div class="property-status-sale">
                  <span><?php echo e(trans('words.for_sale')); ?></span>
            </div>
            <?php endif; ?>
            <?php if($property->property_purpose==trans('words.purpose_rent')): ?>
            <div class="property-status-rent">
                  <span><?php echo e(trans('words.for_rent')); ?></span>
            </div>
            <?php endif; ?>

          </a>
          <div class="bottom-sec">
            <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="title"><?php echo e(Str::limit($property->property_name,35)); ?></a>
            <div class="location"><?php echo e(Str::limit($property->address,40)); ?></div>
            <div class="desc">
              <?php echo Str::limit($property->description,100); ?>

            </div>
            <div class="extra-info clearfix">
              <div class="area col-xs-4">
                <div class="value"><?php echo e($property->land_area); ?></div>
                m2
              </div>
              <div class="bedroom col-xs-4">
                <div class="value"><?php echo e($property->bedrooms); ?></div>
                bed
              </div>
              <div class="bathroom col-xs-4">
                <div class="value"><?php echo e($property->bathrooms); ?></div>
                bath
              </div>
            </div>
          </div>
          <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="btn more-link"><?php echo e(trans('words.more_info')); ?></a>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    </div>
    
  </section> -->
  
  <?php endif; ?>

<!-- End of Featured Properties -->
  <!--Our Partners-->
      <?php echo $__env->make("_particles.partners", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  <!--End of Our Partners-->

    <?php echo $__env->make("_particles.inquires", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xmapp\htdocs\floorfly4\resources\views/pages/index.blade.php ENDPATH**/ ?>