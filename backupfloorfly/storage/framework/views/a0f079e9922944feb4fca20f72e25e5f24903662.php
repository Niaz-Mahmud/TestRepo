<?php $__env->startSection('head_title', $agent->name.' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>

<!-- <?php if(Session::has('flash_message')): ?>
<script type="text/javascript">
   
  alert('<?php echo e(Session::get('flash_message')); ?>');

</script>
<?php endif; ?> -->

<!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="<?php if(getcong('title_bg')): ?> <?php echo e(URL::asset('upload/'.getcong('title_bg'))); ?> <?php else: ?> <?php echo e(URL::asset('site_assets/img/breadcrumb-bg.jpg')); ?> <?php endif; ?>">
    <div class="inner-container container">
      <h1><?php if($agent->usertype=='Agents' or $agent->usertype=='Admin'): ?> <?php echo e(trans('words.agent')); ?> <?php else: ?> <?php echo e(trans('words.owner')); ?> <?php endif; ?> <?php echo e(trans('words.details')); ?></h1>
      <div class="breadcrumb">
        <ul class="list-inline">
          <li class="home"><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('words.home')); ?></a></li>
          <?php if($agent->usertype=='Agents'): ?><li><a href="<?php echo e(URL::to('agents/')); ?>"><?php echo e(trans('words.agents')); ?></a></li><?php endif; ?>
          <li> <?php echo e($agent->name); ?></li>
        </ul>
      </div>
    </div>
  </section>
  <!--Breadcrumb Section-->

  <section class="main-container agent-box-container container" style="padding-top: 40px;">

    <div class="container ">
      <div class="agent-box" style="background: #eee;padding:15px 15px;">
        <div class="row">

          <div class="agent-img-container col-lg-2">
            <?php if($agent->image_icon): ?>
              <img src="<?php echo e(URL::asset('upload/members/'.$agent->image_icon.'-b.jpg')); ?>" alt="<?php echo e($agent->name); ?>">
            <?php else: ?>
            <img src="<?php echo e(URL::asset('site_assets/img/agent_default.jpg')); ?>" alt="<?php echo e($agent->name); ?>">
            <?php endif; ?>
          </div>

          <div class=" col-lg-10">

            <div class="agent_name"><h4><?php echo e($agent->name); ?></h4></div>

            <ul class="list-inline agent-social">
              <li> <a href="<?php echo e($agent->facebook); ?>" class="fa fa-facebook" target="_blank"></a> </li>
              <li> <a href="<?php echo e($agent->twitter); ?>" class="fa fa-twitter" target="_blank"></a></li>
              <li> <a href="<?php echo e($agent->gplus); ?>" class="fa fa-google-plus" target="_blank"></a></li>
              <li> <a href="<?php echo e($agent->linkedin); ?>" class="fa fa-linkedin" target="_blank"></a></li>
            </ul>

            <form action="<?php echo e(route('agenthire')); ?>" method="post" enctype="multipart/form-data">

                <?php echo e(csrf_field()); ?>


                <input type="hidden" name="agent_id" value="<?php echo e($agent->id); ?>">
                <input type="hidden" name="agent_name" value="<?php echo e($agent->name); ?>">
                <input type="hidden" name="agent_phone" value="<?php echo e($agent->agent_contact1); ?>">
                <input type="hidden" name="agent_email" value="<?php echo e($agent->email); ?>">
                
                <button type="submit" class="btn btn-lg submit" name="submit">Hire Now</button>    
                
           </form>
           
              <?php if(Session::has('success')): ?>
                <p style="color:green"><?php echo e(Session::get('success')); ?></p>  
              <?php endif; ?>

          </div>

          <div class="col-lg-12">

            <div class="stats-desc">
              <ul class="user-stats"><li>Position<strong><?php echo e($agent->agent_position); ?></strong></li>
              
              <li>Member since<strong><?php echo e($agent->created_at->format('M Y')); ?></strong></li>

              <li>Department<strong><?php echo e($agent->agent_department); ?></strong></li>
              
              <li>Project Completed<strong> </strong></li></ul>
            
             <article class="seller-desc">
               <hr />
               
              <?php echo e($agent->about); ?>

             </article>
             </div>
          </div> <!--col-lg-12-->

        </div>
      </div>

    </div>


    <div class="property-listing-container clearfix">
      <div class="title-box clearfix">
        <h2 class="hsq-heading type-1"><?php if($agent->usertype=='Agents' or $agent->usertype=='Admin'): ?> <?php echo e(trans('words.agents_properties')); ?> <?php else: ?> <?php echo e(trans('words.owner_properties')); ?> <?php endif; ?> </h2>
        <div class="subtitle">&nbsp;</div>
      </div>
      <div class="property-container clearfix">

        <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="propertybox-featured col-md-6">
          <div class="inner-container clearfix">
            <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="img-container col-xs-6">
               <?php if($property->featured_property==1): ?><span class="tag-label hot-offer"><?php echo e(trans('words.featured')); ?></span><?php endif; ?>
               <img src="<?php echo e(URL::asset('upload/properties/'.$property->featured_image.'-s.jpg')); ?>" alt="Image of Property">
              <span class="price-box"><?php echo e(getcong('currency_sign').' '.$property->price); ?></span>
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
            <div class="col-xs-6 main-info">
              <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="title"><?php echo e(Str::limit($property->property_name,35)); ?></a>

              <div class="location"><?php echo e(Str::limit($property->address,40)); ?></div>
              <div class="desc">
                <?php echo Str::limit($property->description,100); ?>

              </div>
              <div class="bottom-sec clearfix">
                <div class="extra-info">
                  <div class="bedroom">
                    <div class="value"><?php echo e($property->bedrooms); ?></div>
                    bedroom
                  </div>
                  <div class="bathroom">
                    <div class="value"><?php echo e($property->bathrooms); ?></div>
                    bathroom
                  </div>
                </div>
                <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="btn more-link"><?php echo e(trans('words.more_info')); ?></a>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
      </div>
      <!-- begin:pagination -->
            <?php echo $__env->make('_particles.pagination', ['paginator' => $properties], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>             
    <!-- end:pagination -->
    </div>
  </section>
   
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('styles'); ?>
    <link href="<?php echo e(URL::asset('site_assets/alert-toastr/toastr.css')); ?> " rel="stylesheet">
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('scripts'); ?>

    <script src="<?php echo e(URL::asset('site_assets/alert-toastr/toastr.js')); ?>"></script>

    <script>
        <?php if(Session::has('success')): ?>
			toastr.success("<?php echo e(Session::get('success')); ?>")
        <?php endif; ?>

        <?php if(Session::has('info')): ?>
		    	toastr.info("<?php echo e(Session::get('info')); ?>")
        <?php endif; ?>

        <?php if(Session::has('danger')): ?>
		    	toastr.danger("<?php echo e(Session::get('danger')); ?>")
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/pages/agent_details.blade.php ENDPATH**/ ?>