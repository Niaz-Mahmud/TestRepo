<?php $__env->startSection('head_title', trans('words.properties').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
 
    <!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="<?php if(getcong('title_bg')): ?> <?php echo e(URL::asset('upload/'.getcong('title_bg'))); ?> <?php else: ?> <?php echo e(URL::asset('site_assets/img/breadcrumb-bg.jpg')); ?> <?php endif; ?>">
    <div class="inner-container container">

    </div>
  </section>
  <!--Breadcrumb Section-->

 
  <section class="main-container container">
    <div class="content-box col-sm-8">
      <!-- Properties -->
      <section class="property-listing boxed-view clearfix" style="margin-top: 0px;padding: 0px;">
        <div class="inner-container clearfix">

          <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="property-row-box">
            <div class="property-box wow fadeInUp">
              <div class="inner-box2">
                <div class="row">
                <div class="col-xs-5 col-sm-5">
                  <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="img-container">
                    <img src="<?php echo e(URL::asset('upload/properties/'.$property->featured_image.'-s.jpg')); ?>" alt="Image of Property">
                   
                  </a>
                </div>
                
                <div class="col-xs-7 col-sm-7">  
                  <div class="bottom-sec column-view">
                    <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="title"><h2><?php echo e(Str::limit($property->property_name,35)); ?></h2></a>
                    <h3 class="price size25"><?php echo e(getcong('currency_sign').' '.$property->price); ?></h3>
                    <div class="padding-bottom5 location-i"><i class="fa fa-map-marker"></i> <?php echo e(getPropertyLocationName($property->location)->name); ?></div>
                    
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

                    <ul class="service-contacts list-inline clearfix">
                        <li><a class="call-now btn fly-btn1" href="tel:+8801917003909"><i class="fa fa-phone"> </i> CALL NOW</a> </li>
                        <li><a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="btn fly-btn2"><i class="fa fa-envelop"></i> EMAIL US</a></li>
                    </ul>

                  </div>
                </div> <!--col-xs-7-->
              </div> <!--row-->

              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
        </div>

        <!-- Pagination -->
        <?php echo $__env->make('_particles.pagination', ['paginator' => $properties], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

   
        <!-- End of Pagination -->
      </section>
      <!-- End of Properties -->
    </div>
    <aside class="col-sm-4">
     <?php echo $__env->make("_particles.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    </aside>
  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/pages/propertybycount.blade.php ENDPATH**/ ?>