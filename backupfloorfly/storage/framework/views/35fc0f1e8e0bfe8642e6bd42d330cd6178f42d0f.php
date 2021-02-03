

<?php $__env->startSection('head_title', $location ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>

 <!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="<?php if(getcong('title_bg')): ?> <?php echo e(URL::asset('upload/'.getcong('title_bg'))); ?> <?php else: ?> <?php echo e(URL::asset('site_assets/img/breadcrumb-bg.jpg')); ?> <?php endif; ?>">
    <div class="inner-container container">
      <div class="search-box-header">
         <?php echo $__env->make("_particles.search", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
    </div>
  </section>
      
  <!--Breadcrumb Section-->

  <section class="main-container container">
    <div class="content-box col-sm-8">
      <!-- Properties -->
      <section class="property-listing boxed-view clearfix" style="margin-top: 0px;padding: 0px;">
        <div class="inner-container clearfix">
          <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="property-box wow fadeInUp">
            <div class="inner-box row">
              <div class="col-xs-5 col-sm-5">
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
              </div>
              
              <div class="col-xs-7 col-sm-7">  
                <div class="bottom-sec column-view">
                  <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="title padding-bottom5"><h2><?php echo e(Str::limit($property->property_name,35)); ?></h2></a>
                  <div class="padding-bottom5 location-i"><i class="fa fa-map-marker"></i> <?php echo e($property->location); ?></div>
                  <span class="padding-bottom5"> <strong>Property: </strong> <?php echo e(getPropertyTypeName($property->property_type)->types); ?></span>
                  <div class="extra-info clearfix padding-bottom5">
                   <ul class="property-data list-inline"> 
                    <li class="bedroom ">
                      <i class="fa fa-bed"></i>
                      <div class="value"><?php echo e($property->bedrooms); ?></div>
                      bed
                    </li>

                    <li class="bathroom ">
                      <i class="fa fa-bath"></i>
                      <div class="value"><?php echo e($property->bathrooms); ?></div>
                      bath
                      </li>

                    <li class="area">
                      <i class="fa fa-columns" aria-hidden="true"></i>
                      <div class="value"><?php echo e($property->build_area); ?></div>
                      sft
                      </li>
                  </ul>
                  </div>

                  <ul class="service-contacts list-inline clearfix padding-bottom5">
                      <li><a class="call-now btn fly-btn1" href="tel:+8801917003909"><i class="fa fa-phone"> </i> CALL NOW</a> </li>
                      <li><a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="btn fly-btn2"><i class="fa fa-envelop"></i> EMAIL US</a></li>
                  </ul>


                </div>
              </div> <!--col-xs-7-->
              
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- Pagination -->
         
        <!-- End of Pagination -->
      </section>
      <!-- End of Properties -->
    </div>
    <aside class="col-sm-4">
     <?php echo $__env->make("_particles.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    </aside>
  </section>

 
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crafyvzz/public_html/floorfly.com/resources/views/search/searching_result.blade.php ENDPATH**/ ?>