<?php $__env->startSection('head_title', trans('words.agents').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
<!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="<?php if(getcong('title_bg')): ?> <?php echo e(URL::asset('upload/'.getcong('title_bg'))); ?> <?php else: ?> <?php echo e(URL::asset('site_assets/img/breadcrumb-bg.jpg')); ?> <?php endif; ?>">
    <div class="inner-container container">
      <h1><?php echo e(trans('words.agents')); ?></h1>
      <div class="breadcrumb">
        <ul class="list-inline">
          <li class="home"><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('words.home')); ?></a></li>
          <li><a href="#"><?php echo e(trans('words.agents')); ?></a></li>
        </ul>
      </div>
    </div>
  </section>
  <!--Breadcrumb Section-->

  <section class="main-container container agent-box-container">
    <div class="title-box clearfix">
      <h2 class="hsq-heading type-1"><?php echo e(trans('words.our_agents')); ?></h2>
      <div class="subtitle">&nbsp;</div>
    </div>
    <?php $__currentLoopData = $agents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <div class="agent-box col-xs-6 col-sm-4">
      <div class="inner-container">
        <a href="<?php echo e(URL::to('user/details/'.$agent->id)); ?>" class="img-container">           
          <?php if($agent->image_icon): ?>
                          
            <img src="<?php echo e(URL::asset('upload/members/'.$agent->image_icon.'-b.jpg')); ?>" alt="<?php echo e($agent->name); ?>">
          
          <?php else: ?>
          
          <img src="<?php echo e(URL::asset('site_assets/img/agent_default.jpg')); ?>" alt="<?php echo e($agent->name); ?>">
          
          <?php endif; ?>
        </a>
        <div class="bott-sec">
          <div class="name"><a href="<?php echo e(URL::to('user/details/'.$agent->id)); ?>"><?php echo e($agent->name); ?></a></div>
          <div class="desc">
            <?php echo e($agent->about); ?>

          </div>
          <a href="<?php echo e(URL::to('user/details/'.$agent->id)); ?>" class="view-listing"><?php echo e(trans('words.view_listing')); ?></a>
          <div class="social-icons">
            <a href="<?php echo e($agent->facebook); ?>" class="fa fa-facebook" target="_blank"></a>
            <a href="<?php echo e($agent->twitter); ?>" class="fa fa-twitter" target="_blank"></a>
            <a href="<?php echo e($agent->gplus); ?>" class="fa fa-google-plus" target="_blank"></a>
            <a href="<?php echo e($agent->linkedin); ?>" class="fa fa-linkedin" target="_blank"></a>

          </div>
        </div>
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    

  </section>
  <!-- Pagination -->
  <?php echo $__env->make('_particles.pagination', ['paginator' => $agents], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
  <!-- End of Pagination -->

  <?php $__env->stopSection(); ?>
<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/pages/agents.blade.php ENDPATH**/ ?>