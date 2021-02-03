  <!-- Top Footer-->
  <section id="top-footer">
      <div class="inner-container container">
   

             <div class="col-sm-12 col-md-8 col-md-offset-2">

                 <div class="request-form">
                    
                    <div class="request-form-heading">
                      <h2 style="text-center"><?php echo e(trans('words.request_title')); ?></h2> 
                    </div>  

                    <div class="row">
                        <div class=" customer-enquires">
                            <ul class="list-inline agent-contact-list enquires-button">
                                <li class="agent-phone" id="contactFloorfly"><a href="tel:+8801819767676"><i class="fa fa-phone"></i></a></li>
                                <li class="agent-whatsapp"><a href="https://wa.me/01819767676"><i class="fa fa-whatsapp"></i></a></li>
                                <li class="agent-message" id="emailFloorfly"> <a href="#" data-toggle="modal" data-target="#contactAgentModel"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>

                  <div class="customer-enquires-form-body">

                    <div class="number-box" id="showInqueryNumber" style="display:none">
                      <h2> CALL NOW : +880 1819 767676</h2>
                    </div> <!--Number-box-->

                    <div class="show-form-box" style="display:block">
                      
                        <?php if($errors->any()): ?>
                          <div class="alert alert-danger">
                              <ul>
                                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <li><?php echo e($error); ?></li>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </ul>
                          </div>
                        <?php endif; ?>

                        <?php if(Session::has('success')): ?>
                          <div class="alert alert-success">                 
                              <?php echo e(Session::get('success')); ?>

                          </div>
                        <?php endif; ?>

                      <?php echo Form::open(array('url'=>'agentscontact','method'=>'POST', 'id'=>'agent_contact_form', 'name'=>'registration')); ?>


                        <meta name="_token" content="<?php echo csrf_token(); ?>"/>
                        <input type="text" name="lead_source" value="Website" hidden>
                      
                       <div class="row">
                        <div class="col-md-6">
                          <div class="form-group agr-fields">
                            <input type="text" class="form-control" name="name" id="name" placeholder="<?php echo e(trans('words.name')); ?>">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                          </div>
                        </div>  

                        <div class="col-md-6">
                          <div class="form-group agr-fields">
                            <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo e(trans('words.email')); ?>">
                           
                          </div>
                        </div>  
                      </div>

                      <div class="row">
                       <div class="col-md-6">
                          <div class="form-group agr-fields">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="<?php echo e(trans('words.contact')); ?>">
                           
                          </div>
                        </div> 


                        <div class="col-xs-12 col-md-6 ">
                          <div class="row">
                             <div class="col-sm-6 col-md-6">
                              <div class="form-group agr-fields">
                                <input type="text" class="form-control" name="property_size_form"  placeholder="Size (sft) Form">
                              </div>
                            </div>  

                            <div class="col-sm-6 col-md-6">
                              <div class="form-group agr-fields">
                                <input type="text" class="form-control" name="property_size_to"  placeholder="Size (sft) To">
                              </div>
                            </div>  
                            </div>
                        </div>  
                      </div>  

                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mult-select-opt">
                                
                            <select id="example-getting-started" name="property_location[]" multiple="multiple">
                           <?php $allUpazila=\App\Upazila::orderBy('id','asc')->get(); ?>

                            <?php $__currentLoopData = $allUpazila; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upazila): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($upazila->name); ?>"><?php echo e($upazila->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                               
                            </select>

                            </div>
                        </div>  

                        <div class="col-md-6">
                            <div class="form-group agr-fields">
                              <select class="form-control" name="property_status">
                                <option value="">Property Status</option>
                                <option value="Ready to Live">Ready to Live</option>
                                <option value="Hand Over in 12m">Hand Over in 12m</option>
                                <option value="Hand Over in 18m">Hand Over in 18m</option>
                                <option value="Hand Over in 24m">Hand Over in 24m</option>
                                <option value="Hand Over in 36m">Hand Over in 36m</option>
                              </select>    
                            </div>
                        </div> 
                      </div> 

                      <div class="row">
                        <div class="col-md-12">
                            <div class="form-group agr-fields">
                            <textarea id="message" name="message" placeholder="Message "></textarea>
                            </div>
                        </div>  
                      </div> 


                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group inquires-btn pull-right">
                                  <button type="submit" class="btn btn-primary form-control"><?php echo e('SUBMIT NOW'); ?></button>
                              </div>
                          </div>
                      </div> 

                      <?php echo Form::close(); ?> 
                  </div> <!--form-box-->   

                </div>
              </div>
        </div>

       
      </div>
    </section>

  <?php $__env->startSection("styles"); ?>  
  <!--End of Top Footer -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('site_assets/dist-select/css/bootstrap-multiselect.css')); ?>" type="text/css"/>
    <link href="<?php echo e(URL::asset('site_assets/alert-toastr/toastr.css')); ?> " rel="stylesheet">

  <?php $__env->stopSection(); ?>

 <?php $__env->startSection("scripts"); ?>
 <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

  <script type="text/javascript" src="<?php echo e(URL::asset('site_assets/dist-select/js/bootstrap-multiselect.js')); ?>"></script>

  <script src="<?php echo e(URL::asset('site_assets/alert-toastr/toastr.js')); ?>"></script>

  <script>
      <?php if(Session::has('success')): ?>
        toastr.success("<?php echo e(Session::get('success')); ?>")
      <?php endif; ?>

      <?php if(Session::has('info')): ?>
        toastr.info("<?php echo e(Session::get('info')); ?>")
      <?php endif; ?>

      <?php if(Session::has('error')): ?>
        toastr.error("<?php echo e(Session::get('error')); ?>")
      <?php endif; ?>
  </script>


  <script type="text/javascript">

    //multiple selection
    $(document).ready(function() {
        $('#example-getting-started').multiselect({
            nonSelectedText: 'Preferred location',
            enableFiltering: true,
            //includeSelectAllOption: true,
            maxHeight: 300,
            dropUp: true
        });
    });

    // $(document).ready(function() {
    //     $('#example-getting-started').multiselect();
    // });

    /*Show form or hide form*/
  $(document).ready(function() {

      $(".agent-message").click(function (e) {
        $(".show-form-box").slideDown('slow');
        $("#showInqueryNumber").hide('slow');
      });  

      $("#contactFloorfly").click(function (e) {
        $("#showInqueryNumber").show('slow');
        $(".show-form-box").slideUp('slow');
      });  

  });

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

<?php $__env->stopSection(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/_particles/inquires.blade.php ENDPATH**/ ?>