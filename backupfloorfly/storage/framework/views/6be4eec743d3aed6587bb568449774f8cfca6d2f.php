

<?php $__env->startSection("content"); ?>

<div id="main">

	<div class="page-header">
		<h2> <?php echo e('Inquirie Details'); ?></h2>		
		<a href="<?php echo e(URL::to('admin/inquiries')); ?>" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> <?php echo e(trans('words.back')); ?></a>	  
	</div>


   
    <div class="panel panel-default">
        <div class="panel-body row">

            <div class="col-md-4">
                <div class="live-user">

                 <?php if($inquiries->verify_user_id !=null): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Call / Verified By</h3>
                        </div>

                        <div class="col-md-4 luser-image">
                            <?php if(Auth::user()->image_icon): ?>
                                    <img src="<?php echo e(URL::asset('upload/members/'.Auth::user()->image_icon.'-s.jpg')); ?>" alt="person" class="img-thumbnail">
                                <?php else: ?>
                                <img src="<?php echo e(URL::asset('admin_assets/images/guy.jpg')); ?>" alt="person" class="img-circle border-white" width="60"/>
                                <?php endif; ?>
                        </div> 

                        <div class="col-md-8 luser-info">
                            <span>Name: <strong><?php echo e($verify_user->name); ?></strong></span><br>
                            <span>Designation: <strong><?php echo e($verify_user->usertype); ?></strong></span><br>
                            <span>Verify Date: <strong><?php echo e($inquiries->verify_date); ?></strong></span>
                        </div> 

                    </div>
                    <?php endif; ?>

                    <?php if($inquiries->reffered_by !=null): ?>

                    <div class="row">
                        <div class="col-md-12">
                            <h3>Referred By</h3>
                        </div>

                       

                        <div class="col-md-12 luser-info">
                            <span>Name: <strong><?php echo e($reffer_user->name); ?></strong></span><br>
                            <span>Designation: <strong><?php echo e($reffer_user->usertype); ?></strong></span><br>
                        </div> 
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h3>Referral  Person</h3>
                        </div>

                        <div class="col-md-12 luser-info">
                            <span>Name: <strong><?php echo e($inquiries->refer_person_name); ?></strong></span><br>
                            <span>Phone: <strong><?php echo e($inquiries->refer_person_phone); ?></strong></span><br>
                            <span>Address: <strong><?php echo e($inquiries->refer_person_address); ?></strong></span><br>
                            <span>Relation: <strong><?php echo e($inquiries->relation); ?></strong></span>

                        </div> 
                    </div>

                    <?php endif; ?>


                </div>
            </div>

            <div class="col-md-8">
                <div class="lead-header">
                    <h3>Lead Details</h3>
                </div>

                <div class="lead-details table-responsive">
                    <table class="table table-bordered">
                         <tbody>
                            <tr>
                                <th colspan="2">Personal Info</th>
                            </tr>

                            <tr>
                                <td width="150">name</td>
                                <td><?php echo e($inquiries->name); ?></td>
                            </tr>

                            <tr>
                                <td width="150">Phone</td>
                                <td><?php echo e($inquiries->phone); ?></td>
                            </tr>

                            <tr>
                                <td width="150">Email</td>
                                <td><?php echo e($inquiries->email); ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                         <tbody>
                            <tr>
                                <th colspan="2">Enquires / Interested</th>
                            </tr>

                            <?php if($inquiries->property_location !=null): ?>
                            <tr>
                                <td width="150">Property Location</td>
                                <td><?php echo e($inquiries->property_location); ?></td>
                            </tr>
                            <?php endif; ?>

                            <?php if($inquiries->property_size_form !=null): ?>
                            <tr>
                                <td width="150">Property Size</td>
                                <td><?php echo e($inquiries->property_size_form); ?> To  <?php echo e($inquiries->property_size_to); ?> (sft)</td>
                            </tr>
                            <?php endif; ?>

                            <?php if($inquiries->facing !=null): ?>
                            <tr>
                                <td width="150">Facing</td>
                                <td><?php echo e($inquiries->facing); ?></td>
                            </tr>
                            <?php endif; ?>
                            <?php if($inquiries->floor_position !=null): ?>
                            <tr>
                                <td width="150">Floor Position</td>
                                <td><?php echo e($inquiries->floor_position); ?></td>
                            </tr>
                            <?php endif; ?>
                            <?php if($inquiries->budget !=null): ?>
                            <tr>
                                <td width="150">Budget</td>
                                <td><?php echo e($inquiries->budget); ?></td>
                            </tr>
                            <?php endif; ?>
                            <?php if($inquiries->property_status !=null): ?>
                            <tr>
                                <td width="150">Property Status</td>
                                <td><?php echo e($inquiries->property_status); ?></td>
                            </tr>
                            <?php endif; ?>
                            <?php if($inquiries->lead_source !=null): ?>
                            <tr>
                                <td width="150">Lead Source</td>
                                <td><?php echo e($inquiries->lead_source); ?></td>
                            </tr>
                            <?php endif; ?>
                            <?php if($inquiries->enquiry_property !=null): ?>
                            <tr>
                                <td width="150">Enquiry Property</td>
                                <td><?php echo e($inquiries->enquiry_property); ?> <strong>Property ID: <?php echo e($inquiries->property_id); ?> </strong></td>
                            </tr>
                            <?php endif; ?>
                            <?php if($inquiries->created_at !=null): ?>
                            <tr>
                                <td width="150">Enquiry Date</td>
                                <td><?php echo e($inquiries->created_at); ?></td>
                            </tr>
                            <?php endif; ?>
                            <?php if($inquiries->message !=null): ?>
                            <tr>
                                <td width="150">Customer Mesg</td>
                                <td><?php echo e($inquiries->message); ?></td>
                            </tr>
                            <?php endif; ?>
                            <?php if($inquiries->special_note !=null): ?>
                            <tr>
                                <td width="150">Special Note</td>
                                <td><?php echo e($inquiries->special_note); ?></td>
                            </tr>
                            <?php endif; ?>
                           

                        </tbody>
                    </table>


                </div> <!--lead-details-->

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

<script>  
$( window ).load(function() {
    $('#myselection').on('change', function() {
      if ( this.value == 'Referral')
      {
        $("#Referral").show();
      }
      else
      {
        $("#Referral").hide();
      }
    });
});
</script>
  <script type="text/javascript">
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
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/admin/pages/inquiries/view.blade.php ENDPATH**/ ?>