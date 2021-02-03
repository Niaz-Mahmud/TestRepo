

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

    <!--<div class="agent-search-box">-->
    <!--    <form action="" method="" class="">-->
    <!--      <div class="row">-->

    <!--        <div class="col-md-3 nopadding2">-->
    <!--          <div class="form-group agent-search-fields">-->
    <!--            <label>Search By Experience</label>-->
    <!--            <select name="experience" class="form-control">-->
    <!--              <option value="">All</option>-->
    <!--              <option value="1">1 Years</option>-->
    <!--              <option value="2">2 Years</option>-->
    <!--              <option value="3">3 Years</option>-->
    <!--              <option value="4">4 Years</option>-->
    <!--              <option value="5">5 Years</option>-->
    <!--              <option value="5">5+ Years</option>-->
                  
    <!--            </select>-->
    <!--          </div>-->
    <!--        </div>  -->

    <!--        <div class="col-md-3 nopadding2">-->
    <!--          <div class="form-group agent-search-fields">-->
    <!--            <label>Search By Location</label>-->
    <!--            <select name="experience" class="form-control">-->
    <!--              <option value="">All</option>-->
    <!--              <option value="Uttara">Uttara</option>-->
    <!--              <option value="Gulshan">Gulshan</option>-->
    <!--              <option value="Banani">Banani</option>-->
    <!--              <option value="Dhanmondi">Dhanmondi</option>-->
    <!--              <option value="Basundhara">Basundhara</option>-->
    <!--              <option value="Badda">Badda</option>-->
                  
    <!--            </select>-->
    <!--          </div>-->
    <!--        </div> -->

    <!--        <div class="col-md-3 nopadding2">-->
    <!--          <div class="form-group agent-search-fields">-->
    <!--            <label>Search By Position</label>-->
    <!--            <select name="experience" class="form-control">-->
    <!--              <option value="">All</option>-->
    <!--              <option value="Marketing">Marketing</option>-->
    <!--              <option value="Executive">Executive</option>-->
    <!--              <option value="HR">HR</option>-->
                  
    <!--            </select>-->
    <!--          </div>-->
    <!--        </div> -->


    <!--        <div class="col-md-3 nopadding2">-->
    <!--          <div class="form-group border-none agent-search-fields">-->
    <!--          <label>&nbsp;</label>-->
    <!--            <button type="button" class="btn btn-primary form-control">Search Agents</button>-->
    <!--          </div>-->
    <!--        </div> -->

    <!--      </div>-->
    <!--    </form>-->
    <!--</div>-->


 
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
<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/pages/agents.blade.php ENDPATH**/ ?>