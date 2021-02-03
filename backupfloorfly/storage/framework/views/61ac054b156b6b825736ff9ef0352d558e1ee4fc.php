

<?php $__env->startSection('head_title', trans('words.sign_up').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
<section class="property-listing boxed-view clearfix" id="agentRegister">
     <div class="inner-container container">
       
       <div  class="row">
        <div class="col-md-8 col-md-offset-2" style="margin-top: 136px;">
<div class="alert alert-success text-center" style="font-size: 22px;">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
            <b >Congratulations <?php echo e($name); ?> !!</b><br/> 
            You are now registered with FloorFly. Please check your email and verify your account.
</div>

</div>
</div>
</div>
</section>
<?php $__env->stopSection(); ?>  
<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/pages/agent_success.blade.php ENDPATH**/ ?>