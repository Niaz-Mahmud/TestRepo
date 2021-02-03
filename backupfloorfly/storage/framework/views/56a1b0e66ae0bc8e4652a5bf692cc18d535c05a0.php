<?php $__env->startSection('head_title', trans('words.all_properties').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>

 <!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="<?php if(getcong('title_bg')): ?> <?php echo e(URL::asset('upload/'.getcong('title_bg'))); ?> <?php else: ?> <?php echo e(URL::asset('site_assets/img/breadcrumb-bg.jpg')); ?> <?php endif; ?>">
    <div class="inner-container container">
      <h1><?php echo e(trans('words.all_properties')); ?></h1>
      <div class="breadcrumb">
        <ul class="list-inline">
          <li class="home"><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('words.home')); ?></a></li>
          <li><?php echo e(trans('words.all_properties')); ?></li>
        </ul>
      </div>
    </div>
  </section>
  <!--Breadcrumb Section-->

  <section class="main-container container">
    <div class="content-box col-sm-8">
      <!-- Properties -->
      <section class=" boxed-view clearfix" style="margin-top: 0px;padding: 0px;">
        <div class="inner-container clearfix">
        
          <?php $__currentLoopData = $leglService; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="property-box wow fadeInUp">
            
            <div class="inner-box services-box">
                <div class="row">
                    <div class="col-md-3">
                        <div class="service-image">
                            <img src="<?php echo e(url($row->service_image)); ?>" alt="<?php echo e($row->service_name); ?>" class="img-thumbnail">
                        </div>
                    </div>  

                    <div class="col-md-6">
                        <div class="service-text">
                            <h2><?php echo e($row->service_name); ?></h2>
                            <p><?php echo e(Str::limit($row->service_description, 70, ' ...')); ?></p>
                        </div>
                    </div>     

                    <div class="col-md-3">
                        <div class="service-contacts">
                            <a class="call-now" href="tel:+8801713079178"><i class="fa fa-phone"> </i><?php echo e($row->service_phone); ?></a> 
                            <a href="" class="btn btn-primary">Appoint us</a>
                        </div>
                    </div>   
                 </div>     
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

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/pages/legal_service.blade.php ENDPATH**/ ?>