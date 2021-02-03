

<?php $__env->startSection('head_title', trans('words.all_services').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
<?php if(Session::has('flash_message_agent')): ?>
<script type="text/javascript">
   
  alert('<?php echo e(Session::get('flash_message_agent')); ?>');

</script>
<?php endif; ?>
 <!--Breadcrumb Section-->
    <section class="breadcrumb-box" data-parallax="scroll" data-image-src="<?php if(getcong('title_bg')): ?> <?php echo e(URL::asset('upload/'.getcong('title_bg'))); ?> <?php else: ?> <?php echo e(URL::asset('site_assets/img/breadcrumb-bg.jpg')); ?> <?php endif; ?>">
        <div class="inner-container container">
            <h1><?php echo e(trans('words.all_services')); ?></h1>
            <div class="breadcrumb">
                <ul class="list-inline">
                    <li class="home"><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('words.home')); ?></a></li>
                    <li><?php echo e(trans('words.all_services')); ?></li>
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
                    <div class="property-box wow fadeInUp">
                        <div class="inner-box services-box">

                            <div class="service-single">
                                <div class="service-image">
                                    <img src="<?php echo e(url($service->service_image)); ?>" alt="<?php echo e($service->service_name); ?>" class="img-thumbnail">
                                    <span class="tag-label phone-for-service"> <i class="fa fa-phone"> </i> +880 <?php echo e($service->service_phone); ?></span>
                                </div>
                                <div class="service-text">
                                    <h2 style="padding:5px 0px"><?php echo e($service->service_name); ?></h2>
                                    <p><?php echo $service->service_description; ?></p>
                                </div> 
                            </div>   

                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact for service -->
            <div class="contact-form-container" id="agentscontact_sec">
                <?php echo Form::open(array('url'=>'agentscontact','method'=>'POST', 'id'=>'agent_contact_form')); ?>


                <input type="hidden" name="property_id" value="<?php echo e($service->id); ?>">
                <input type="hidden" name="lead_name" value="<?php echo e($service->service_name); ?>">
                <input type="hidden" name="agent_id" value="1">         
                <input type="hidden" name="lead_type" value="service">

                <div class="contact-form">
                    <h2>Appoint US Now || <i class="fa fa-phone"> </i> +880 <?php echo e($service->service_phone); ?></h2>
                    <div class="field-box">
                        <input type="text" placeholder="<?php echo e(trans('words.name')); ?> *" name="name">
                        <?php if($errors->has('name')): ?>
                        <span style="color:#fb0303">
                            <?php echo e($errors->first('name')); ?>

                        </span>
                        <?php endif; ?>
                    </div>
                    <div class="field-box">
                        <input type="email" placeholder="<?php echo e(trans('words.email')); ?> *" name="email">
                        <?php if($errors->has('email')): ?>
                        <span style="color:#fb0303">
                            <?php echo e($errors->first('email')); ?>

                        </span>
                        <?php endif; ?>
                    </div>
                    <div class="field-box">
                        <input type="text" placeholder="<?php echo e(trans('words.phone')); ?>" name="phone">
                    </div>
                    <textarea id="message" name="message" placeholder="<?php echo e(trans('words.message')); ?> *"></textarea>
                    <?php if($errors->has('message')): ?>
                        <span style="color:#fb0303">
                            <?php echo e($errors->first('message')); ?>

                        </span>
                        <br><br>
                     <?php endif; ?>
                    <button type="submit" class="btn btn-lg submit" name="submit"><?php echo e(trans('words.submit')); ?></button>
                </div>
                <?php echo Form::close(); ?>

            </div><!-- Contact for service -->


        </div>
        <aside class="col-sm-4">
         <?php echo $__env->make("_particles.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
        </aside>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crafyvzz/public_html/floorfly.com/resources/views/pages/single_service.blade.php ENDPATH**/ ?>