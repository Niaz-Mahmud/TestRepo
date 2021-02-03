

<?php $__env->startSection('head_title', trans('words.all_properties').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>


<?php $__env->startSection('styles'); ?>
    <link href="<?php echo e(URL::asset('site_assets/alert-toastr/toastr.css')); ?> " rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>

 <!--Breadcrumb Section-->
 <?php echo $__env->make("_particles.slider", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
  <!--Breadcrumb Section-->

  <section class="main-container container">
    <div class="content-box col-sm-8">
      <!-- Properties -->
      <section class="property-listing boxed-view clearfix" style="margin-top: 0px;padding: 0px;">
        <div class="inner-container clearfix">

          <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="">
            <div class="property-box boxShadow  wow fadeInUp">
              <div class="inner-box2">
                <div class="row">
                <div class="col-xs-5 col-sm-5">
                  <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="img-container2">
                    <img src="<?php echo e(URL::asset('upload/properties/'.$property->featured_image.'-s.jpg')); ?>" alt="Image of Property">
                     <?php if($property->soldout==1): ?>
                        <span class="tag-label sold-item"><img src="<?php echo e(URL::asset('upload/soldout.png')); ?>" alt="soldout"/></span>
                        <?php endif; ?>
                   
                  </a>
                </div>
                
                <div class="col-xs-7 col-sm-7">  
                  <div class="bottom-sec column-view">
                    <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="title"><h2><?php echo e(Str::limit($property->property_name,35)); ?></h2></a>
                    <h3 class="price size25"><?php echo e(getcong('currency_sign').' '.$property->price); ?></h3>
                    <div class="padding-bottom5 location-i"><i class="fa fa-map-marker"></i> <?php echo e(getPropertyLocationName($property->location)->name); ?> </div>
                    
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
                        <li><a href="#" data-toggle="modal" data-target="#contactAgentModel<?php echo e($property->id); ?>" class="btn fly-btn2"><i class="fa fa-envelop"></i> EMAIL US</a></li>
                    </ul>

                  </div>
                </div> <!--col-xs-7-->
              </div> <!--row-->


              </div>
            </div>

            <?php echo $__env->make('_particles.enquiry_widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            
<script type="text/javascript">
	<?php if(count($errors) > 0): ?>
		$('#contactAgentModel<?php echo e($property->id); ?>').modal('show');
	<?php endif; ?>
</script>
            
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



<?php $__env->startSection("scripts"); ?>
 <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="<?php echo e(URL::asset('site_assets/alert-toastr/toastr.js')); ?>"></script>

  <script>
  // Form Validation
    $(document).ready(function() {
    $("form[name='registration']").validate({
      rules: {
      
        name: {
          required: true,
          minlength: 3,
          maxlength: 28
        },

        phone: {
          required: true,
          minlength: 11,
          maxlength: 11
        },
        email: {
          required: true,
          email: true
        }
      },
      messages: {
      
        name: {
          required: "Please provide Full Name",
          minlength: "Min 3 Character length",
          maxlength: "Max 28 Character length"
        },

        phone: {
          required: "Please provide Phone Number",
          minlength: "Mobile number min 11 length",
          maxlength: "Mobile number max 11 length"
        },
        email: "Please enter a valid email address"
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  });
    
  </script>
      <script>
        <?php if(Session::has('success')): ?>
		  	toastr.success("<?php echo e(Session::get('success')); ?>")
        <?php endif; ?>

        <?php if(Session::has('info')): ?>
		    	toastr.info("<?php echo e(Session::get('info')); ?>")
        <?php endif; ?>

        <?php if(Session::has('warning')): ?>
		    	toastr.warning("<?php echo e(Session::get('warning')); ?>")
        <?php endif; ?>

        <?php if(Session::has('error')): ?>
		    	toastr.error("<?php echo e(Session::get('error')); ?>")
        <?php endif; ?>
  </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/pages/properties_grid_sidebar.blade.php ENDPATH**/ ?>