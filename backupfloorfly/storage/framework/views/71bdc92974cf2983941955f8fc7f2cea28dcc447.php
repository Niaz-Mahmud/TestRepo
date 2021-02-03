<?php $__env->startSection('head_title', trans('words.agents').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
<!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="<?php if(getcong('title_bg')): ?> <?php echo e(URL::asset('upload/'.getcong('title_bg'))); ?> <?php else: ?> <?php echo e(URL::asset('site_assets/img/breadcrumb-bg.jpg')); ?> <?php endif; ?>">
    <div class="inner-container container">
      
    </div>
  </section>
  <!--Breadcrumb Section--> 

  <section class="main-container container agent-box-container">
    <div class="title-box clearfix">
      <h2 class="hsq-heading type-1"><?php echo e(trans('words.our_agents')); ?></h2>
      <div class="subtitle">&nbsp;</div>
    </div>

    <div class="agent-text">
       <b> Floorfly recruitment process on behalf of the company:</b>
      <ul>
        <li> 1.	To hire any person through floor fly, a company needs to sign an MOU with floorfly for 1 year</li>
        <li> 2.	The company needs to pay one month’s equivalent salary of the selected candidate once the candidate joins the company and the payment should be made within 1 week from bill submission.</li>
        <li> 3.	The company can not deduct floorfly’s charges from the recruited person and whatsoever.</li>
        <li> 4.	Floorfly takes primary interview of the desired candidates primary selected by the company.</li>
        <li> 5.	Floorfly conducts a briefing session of the selected and scrutinized candidates about the hiring company and negotiate the salary.</li>
        <li> 6.	Upon confirming everything, floorfly shall send the candidate for final interview to the company.</li>
      </ul>
    </div>

  


  <div class="view-all-agents">
    <?php $__currentLoopData = $agents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <div class="col-xs-6 col-sm-4 col-md-3">
        <div class="agent-item">
            <div class="agent-profile">       
              <?php if($agent->profile_image): ?>
                <img src="<?php echo e(URL::asset($agent->profile_image)); ?>" alt="<?php echo e($agent->name); ?>">
              <?php else: ?>
              <img src="<?php echo e(URL::asset('site_assets/img/avatar.png')); ?>" alt="<?php echo e($agent->name); ?>">
              <?php endif; ?>                       
            </div>

             <div class="agent-info">
                <h2 class="agent-name"><?php echo e($agent->name); ?></h2>
                <div class="ratting-box">
                  <ul class="list-inline agent-ratting-list"> 
                    <li class="ratting-number"><b>4.7</b></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><img src="<?php echo e(URL::asset('site_assets/img/agent-rating.png')); ?>" /></li>
                  </ul>
                </div>

                <div class="agent-experience-data">
                  <p>Total Years of Experience : <b><?php echo e($agent->yrs_exp); ?></b></p>
                
                  <?php $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                  <p>Education : 
                  
                  <b> <?php echo e($education->agent_degree); ?></b>
               
                  </p>
                  
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
                </div>
              </div>

              <div class="agent-contact-info">
                
                  <!-- <div class="agent-request-box"> 
                    <form action="<?php echo e(route('agenthire')); ?>" method="post" enctype="multipart/form-data">
                      <?php echo e(csrf_field()); ?>


                        <input type="hidden" name="agent_id" value="<?php echo e($agent->id); ?>">
                        <input type="hidden" name="agent_name" value="<?php echo e($agent->name); ?>">
                        <input type="hidden" name="agent_phone" value="<?php echo e($agent->agent_contact1); ?>">
                        <input type="hidden" name="agent_email" value="<?php echo e($agent->email); ?>">
                        <button type="submit" class="btn btn-request-cv" name="submit">Request CV</button>   
                      </form>
                    </div> -->
                    <div class="whatsapp-box"><a class="btn btn-green whatsapp_btn" href="https://wa.me/01819767676"><i class="fa fa-whatsapp"></i> Send Message</a></div>
                
              </div>

        </div>

      
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
  </div>  <!--view-all-agents-->

  </section>
  <!-- Pagination -->
  <?php echo $__env->make('_particles.pagination', ['paginator' => $agents], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
  <!-- End of Pagination -->

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
<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\backupfloorfly\resources\views/pages/agents.blade.php ENDPATH**/ ?>