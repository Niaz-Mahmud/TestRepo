<?php $__env->startSection('head_title', trans('words.properties_for_sale').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>

   
    <!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="<?php if(getcong('title_bg')): ?> <?php echo e(URL::asset('upload/'.getcong('title_bg'))); ?> <?php else: ?> <?php echo e(URL::asset('site_assets/img/breadcrumb-bg.jpg')); ?> <?php endif; ?>">
    <div class="inner-container container">
      <h1><?php echo e(trans('words.properties_for_sale')); ?></h1>
      <div class="breadcrumb">
        <ul class="list-inline">
          <li class="home"><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('words.home')); ?></a></li>
          <li><a href="#"><?php echo e(trans('words.properties_for_sale')); ?></a></li>
        </ul>
      </div>
    </div>
  </section>
  <!--Breadcrumb Section-->

  <!-- Recent Properties -->
  <section class="property-listing boxed-view clearfix">
     <div class="inner-container container">
      <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
    <!-- begin:pagination -->
            <?php echo $__env->make('_particles.pagination', ['paginator' => $properties], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>             
    <!-- end:pagination -->
    
  </section>
  <!-- End of Recent Properties -->

 
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/pages/sale_properties_grid.blade.php ENDPATH**/ ?>