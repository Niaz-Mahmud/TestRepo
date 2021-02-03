<?php $__env->startSection('head_title', trans('words.my_properties').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
<!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="<?php if(getcong('title_bg')): ?> <?php echo e(URL::asset('upload/'.getcong('title_bg'))); ?> <?php else: ?> <?php echo e(URL::asset('site_assets/img/breadcrumb-bg.jpg')); ?> <?php endif; ?>">
    <div class="inner-container container">
      <h1><?php echo e(trans('words.my_properties')); ?></h1>
      <div class="breadcrumb">
        <ul class="list-inline">
          <li class="home"><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('words.home')); ?></a></li>
          <li><a href="#"><?php echo e(trans('words.my_properties')); ?></a></li>
        </ul>
      </div>
    </div>
  </section>
  <!--Breadcrumb Section-->
 <div class="container">
  <div class="min_profile">
  <div class="row">
    <?php echo $__env->make("_particles.sidebar_user", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="col-lg-9 col-md-9 min_form">

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

      <?php if(Session::has('flash_message')): ?>
                  <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                      <?php echo e(Session::get('flash_message')); ?>

                  </div>
      <?php endif; ?>
      <div class="table-responsive properties_min">
        <table class="my-properties-list">
          <tbody>
            <tr>
              <th><?php echo e(trans('words.image')); ?></th>
              <th><?php echo e(trans('words.property')); ?></th>
              <th><?php echo e(trans('words.status')); ?></th>
              <th><?php echo e(trans('words.expiry_date')); ?></th>
              <th><?php echo e(trans('words.action')); ?></th>
            </tr>
          <?php $__currentLoopData = $propertieslist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <td class="property-img"><a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>"><img src="<?php echo e(url('upload/properties/'.$property->featured_image.'-s.jpg')); ?>" alt=""></a></td>
              <td class="property-title">
                <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.Crypt::encryptString($property->id))); ?>"><?php echo e($property->property_name); ?></a><br>
                <p class="property-address"><i class="fa fa-map-marker icon"></i><?php echo e($property->address); ?></p>
                <p><strong>$<?php echo e($property->price); ?></strong></p>
              </td>
              <td class="property-post-status">
                  <?php if($property->status==1): ?>
                    <span class="button small alt"><?php echo e(trans('words.published')); ?></span>
                  <?php else: ?>
                    <span class="button small grey"><?php echo e(trans('words.pending')); ?></span>
                    <span class="icon-circle bg-orange">
                      <i class="md md-close"></i>
                    </span>
                  <?php endif; ?>                  

              </td>
              <td class="property-date">
                <?php if($property->active_plan_id == 0 OR $property->property_exp_date < strtotime(date('d-m-Y'))): ?>
                  <a href="<?php echo e(url('plan/'.Crypt::encryptString($property->id))); ?>"><span class="button small alt"><?php echo e(trans('words.pay_now')); ?></span></a>
                 <?php else: ?>
                <p class="property-address"><?php echo e(date('M,  jS, Y',$property->property_exp_date)); ?></p>
                <?php endif; ?>                                
              </td>
              <td class="property-actions">                 
                <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" target="_blank"><i class="fa fa-eye icon"></i><?php echo e(trans('words.view')); ?></a>
                <a href="<?php echo e(url('update-property/'.Crypt::encryptString($property->id))); ?>"><i class="fa fa-pencil icon"></i><?php echo e(trans('words.edit')); ?></a>
                <a href="<?php echo e(url('delete/'.Crypt::encryptString($property->id))); ?>" onclick="return confirm('<?php echo e(trans('words.dlt_warning_text')); ?>')"><i class="fa fa-close icon"></i><?php echo e(trans('words.remove')); ?></a>
              </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </tbody></table>
        <?php echo $__env->make('_particles.pagination', ['paginator' => $propertieslist], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
        
        
    
    </div><!-- end col -->
  </div>
  </div>
  
  </div>


  <?php $__env->stopSection(); ?>
<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xmapp\htdocs\floorfly4\resources\views/pages/my_properties.blade.php ENDPATH**/ ?>