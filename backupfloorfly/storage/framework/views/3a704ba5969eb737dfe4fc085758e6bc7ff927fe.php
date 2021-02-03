

<?php $__env->startSection("content"); ?>

<div id="main">

	<div class="page-header">
		<h2> <?php echo e('Add New Enquiry'); ?></h2>		
		<a href="<?php echo e(URL::to('admin/inquiries')); ?>" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> <?php echo e(trans('words.back')); ?></a>	  
	</div>

	<?php if(count($errors) > 0): ?>
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
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?php echo e(Session::get('success')); ?>

        </div>
	<?php endif; ?>
   
    <div class="panel panel-default">
        <div class="panel-body row">

            <div class="col-md-4">
                  
                <div class="live-user row">
                    
                    <div class="col-md-2 luser-image">
                         <?php if(Auth::user()->image_icon): ?>
								<img src="<?php echo e(URL::asset('upload/members/'.Auth::user()->image_icon.'-s.jpg')); ?>" width="60" alt="person" class="img-circle border-white">
							<?php else: ?>
							<img src="<?php echo e(URL::asset('admin_assets/images/guy.jpg')); ?>" alt="person" class="img-circle border-white" width="60"/>
							<?php endif; ?>
                    </div> 

                    <div class="col-md-10 luser-info">
                       <h3>Call Or Verify Person</h3>
                        <span>Name: <strong><?php echo e(Auth::user()->name); ?></strong></span><br>
                        <!-- <span>Designation: <strong>Rahim kudus</strong></span> -->
                    </div>     
                </div>
            </div>

            <div class="col-md-8">
            <form action="<?php echo e(route('inquiries.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="" class="control-label"><?php echo e('Lead Source'); ?></label>
                        <select name="lead_source" class="form-control" id="myselection" onchange="showDiv(this)">
                            <option value="Call">Cold Call</option>
                            <option value="Website">Website</option>
                            <option  value="Referral">Referral</option>
                            <option value="Facebook">Facebook</option>
                            <option value="seo">SEO</option>
                        </select>
                    </div>
                </div>

          
                 <div id="Referral" class="referral" style="display:none; margin-bottom:15px">
                    <h3>Referral Person Info</h3>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="" class="control-label"><?php echo e('Office Staff'); ?></label>
                            <select class="form-control" name="reffered_by">
                                <?php $__currentLoopData = $allstaff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($staff->id); ?>"><?php echo e($staff->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <label for="" class="control-label"><?php echo e('Referral  Person Name '); ?></label>
                            <input class="form-control" name="refer_person_name" placeholder="full name" value="<?php echo e(old('refer_person_name')); ?>"/>
                        </div>

                        <div class="col-sm-6">
                            <label for="" class="control-label"><?php echo e('Relation With'); ?></label>
                            <input class="form-control" name="relation" placeholder="Relation" value="<?php echo e(old('Relation')); ?>"/>
                        </div>

                        <div class="col-sm-6">
                            <label for="" class="control-label"><?php echo e('Referral Person Phone '); ?></label>
                            <input class="form-control" name="refer_person_phone" placeholder="phone" value="<?php echo e(old('refer_person_phone')); ?>"/>
                        </div>

                        <div class="col-sm-12">
                            <label for="" class="control-label"><?php echo e('Referral Person Address '); ?></label>
                            <input class="form-control" name="refer_person_address" placeholder="Address" value="<?php echo e(old('refer_person_address')); ?>"/>
                        </div>

                    </div>
                </div> <!--/.referral-box-->

                <div class="Customer-data">
                     <h3>Customer Enquiry Info</h3> <br>
                     <div class="row">
                        <div class="col-md-6">
                          <div class="form-group agr-fields">
                            <input type="text" class="form-control" name="name" id="name" placeholder="<?php echo e(trans('words.name')); ?>" value="<?php echo e(old('name')); ?>">
                          </div>
                        </div>  

                        <div class="col-md-6">
                          <div class="form-group agr-fields">
                            <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo e(trans('words.email')); ?>" value="<?php echo e(old('email')); ?>">
                          </div>
                        </div>  
                      </div>

                      <div class="row">

                       <div class="col-md-6">
                          <div class="form-group agr-fields">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="<?php echo e(trans('words.contact')); ?>" value="<?php echo e(old('phone')); ?>">
                          </div>
                        </div> 


                        <div class="col-md-6">
                          <div class="row">

                             <div class="col-md-6">
                              <div class="form-group agr-fields">
                                <input type="text" class="form-control" name="property_size_form"  placeholder="Size (sft) Form" value="<?php echo e(old('property_size_form')); ?>">
                              </div>
                            </div>  

                            <div class="col-md-6">
                              <div class="form-group agr-fields">
                                <input type="text" class="form-control" name="property_size_to"  placeholder="Size (sft) To" value="<?php echo e(old('property_size_to')); ?>">
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
                            <div class="col-md-6">
                                <div class="form-group agr-fields">
                                    <input type="text" class="form-control" name="budget" id="budget" placeholder="<?php echo e('Budget'); ?>" value="<?php echo e(old('budget')); ?>">
                                </div>
                            </div> 

                            <div class="col-md-6">
                                <div class="form-group agr-fields">
                                <select id="facing" class="form-control" name="facing">
                                    <option value=""><?php echo e(trans('words.facing')); ?></option>
                                    <option value="East" <?php if(old('facing')=='East'): ?> selected <?php endif; ?>>East</option>
                                    <option value="West" <?php if(old('facing')=='West'): ?> selected <?php endif; ?>>West</option>
                                    <option value="North" <?php if(old('facing')=='North'): ?> selected <?php endif; ?>>North</option>
                                    <option value="South" <?php if(old('facing')=='South'): ?> selected <?php endif; ?>>South</option>
                                    </select>
                                </div>
                            </div> 

                            <div class="col-md-6">
                                <div class="form-group agr-fields">
                                <select id="floor_position" class="form-control" name="floor_position">
                                <option value=""><?php echo e('Interested Floor Position'); ?></option>
                                <option value="1st Floor" <?php if(old('floor_position')=='1st Floor'): ?> selected <?php endif; ?>>1st Floor</option>
                                <option value="2nd Floor" <?php if(old('floor_position')=='2nd Floor'): ?> selected <?php endif; ?>>2nd Floor</option>
                                <option value="3rd Floor" <?php if(old('floor_position')=='3rd Floor'): ?> selected <?php endif; ?>>3rd Floor</option>
                                <option value="4th Floor" <?php if(old('floor_position')=='4th Floor'): ?> selected <?php endif; ?>>4th Floor</option>
                                <option value="5th Floor" <?php if(old('floor_position')=='5th Floor'): ?> selected <?php endif; ?>>5th Floor</option>
                                <option value="6th Floor" <?php if(old('floor_position')=='6th Floor'): ?> selected <?php endif; ?>>6th Floor</option>
                                <option value="7th Floor" <?php if(old('floor_position')=='7th Floor'): ?> selected <?php endif; ?>>7th Floor</option>
                                <option value="8th Floor" <?php if(old('floor_position')=='8th Floor'): ?> selected <?php endif; ?>>8th Floor</option>
                                </select>
                                </div>
                            </div> 

                        </div> 

                      <div class="row">
                        <div class="col-md-12">
                            <div class="form-group agr-fields">
                             <textarea id="message" name="special_note" class="form-control" placeholder="Special Note" value="<?php echo e(old('special_note')); ?>"></textarea>
                            </div>
                        </div>  
                      </div> 

                     </div> <!--customer-data-->

               
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary"><?php echo e(isset($type->id) ? trans('words.save_changes') : trans('words.submit')); ?></button>                        
                    </div>
                </div>
            </form>
            </div>


        </div>
    </div>
    
</div>





  <!--End of Top Footer -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('site_assets/dist-select/css/bootstrap-multiselect.css')); ?>" type="text/css"/>
    <link href="<?php echo e(URL::asset('site_assets/alert-toastr/toastr.css')); ?> " rel="stylesheet">


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

      <?php if(Session::has('danger')): ?>
        toastr.danger("<?php echo e(Session::get('danger')); ?>")
      <?php endif; ?>
  </script>


  <script type="text/javascript">
    $(document).ready(function(){
        $('#myselection').change(function(){
            $('.referral').hide();
            $('#' + $(this).val()).show();
        });
    });


    //multiple selection

    $(document).ready(function() {
        $('#example-getting-started').multiselect({
            nonSelectedText: 'Select Location',
            enableFiltering: true,
            //includeSelectAllOption: true,
            maxHeight: 300,
            dropUp: true
        });
    });

      /*enquires form*/
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

  // Wait for the DOM to be ready
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



<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/admin/pages/inquiries/create.blade.php ENDPATH**/ ?>