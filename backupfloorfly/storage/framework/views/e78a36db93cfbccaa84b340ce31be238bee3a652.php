

<?php $__env->startSection('head_title', trans('words.sign_up').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
    <section class="property-listing boxed-view clearfix" id="agentRegister">
     <div class="inner-container container">
        <div  class="row">
            <div class="col-md-8 col-md-offset-2">
                <?php if(Session::has('flash_message')): ?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                        <?php echo e(Session::get('flash_message')); ?>

                    </div>
                <?php endif; ?>
                <div id="login-form" class="login-form">
                    <h2 class="hsq-heading type-1"><?php echo e('Register as Seller'); ?></h2>
                         
                        <ul class="nav nav-tabs" role="tablist" style="display:none">
                            <li role="presentation" class="active">
                                <a href="#personal_tab" aria-controls="personal_tab" role="tab" data-toggle="tab" aria-expanded="true">Personal Information</a>
                            </li>
                            <li>
                                <a href="#verification_tab" aria-controls="verification_tab" role="tab" data-toggle="tab" aria-expanded="false">OTP Verification</a>
                            </li>
                            <li>
                                <a href="#seller_info_tab" aria-controls="seller_info_tab" role="tab" data-toggle="tab" aria-expanded="false">Saller info</a>
                            </li>
                        </ul>

                        <form class="mregisterform" action="<?php echo e(url('register')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?> 
                        <input type="text" name="usertype" value="User" hidden/> 
                        <input type="text" name="gender" value="Male" hidden/> 
                    
                        <div class="tab-content">
                             <div role="tabpanel" class="tab-pane active" id="personal_tab">
                                <div class="content-box">
                                    <div class="form-group agr-fields">
                                        <input type="text" class="form-control" placeholder="<?php echo e(trans('words.name')); ?> *" name="name" id="name" value="<?php echo e(old('name')); ?>"/>
                                        <span id="name_error"></span>
                                        <?php if($errors->has('name')): ?>
                                            <span style="color:#fb0303">
                                                <?php echo e($errors->first('name')); ?>

                                            </span>
                                        <?php endif; ?> 
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group agr-fields">
                                                <input type="number" class="form-control" placeholder="<?php echo e(trans('words.phone')); ?> *" name="phone" id="phone" minlength="11" maxlength="14" value="<?php echo e(old('phone')); ?>"/>
                                                <span id="phone_error"></span> 
                                                <?php if($errors->has('phone')): ?>
                                                <span style="color:#fb0303">
                                                    <?php echo e($errors->first('phone')); ?>

                                                </span>
                                                <?php endif; ?> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group agr-fields">
                                                <input type="email" class="form-control" placeholder="<?php echo e(trans('words.email')); ?> *" name="email" id="email" maxlength="80" value="<?php echo e(old('email')); ?>" autocomplete="off" />
                                                <span id="email_error"></span> 
                                                <?php if($errors->has('email')): ?>
                                                <span style="color:#fb0303">
                                                    <?php echo e($errors->first('email')); ?>

                                                </span>
                                                <?php endif; ?> 
                                            </div>    
                                        </div>
                                    </div> 
                                </div>
                                <a class="continue_first btn btn-primary agr-btn pull-right">Save & Proceed</a>
                             </div> <!--personal data tab-->

                             <div role="tabpanel" class="tab-pane" id="verification_tab">
                                <div class="content-box">
                                    <div id="show_verify_msg"></div>
                                    <div id="show_verify_msg2"></div>
                                    <div class="form-group agr-fields">
                                        <input type="number" class="form-control" placeholder="Verification Code *" name="verification_code" id="verify" value="<?php echo e(old('verification_code')); ?>"/>
                                        <?php if($errors->has('verification_code')): ?>
                                            <span style="color:#fb0303">
                                            <?php echo e($errors->first('verification_code')); ?>

                                            </span>
                                        <?php endif; ?>
                                        <span id="verify_error"></span>
                                    </div>
                                </div>
                                <a class="continue2 btn btn-primary  agr-btn pull-right">Verify Now</a>
                               
                             </div> <!--verification data tab-->

                             <div role="tabpanel" class="tab-pane" id="seller_info_tab">
                                 <div class="content-box">
                                    <div class="row">
                                        <div class="col-md-6">  
                                            <div class="form-check sellerType-area">
                                                <input class="form-check-input" type="radio" name="sellertype" id="exampleRadios1" checked>
                                                <label class="form-check-label" for="sellertype1">
                                                Individual / Personal Sales A/C
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">    
                                            <div class="form-check sellerType-area">
                                            <input class="form-check-input" type="radio" name="sellertype" id="exampleRadios2">
                                            <label class="form-check-label" for="sellertype2">
                                                Company Sales A/C
                                            </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row individual select_box" id="individual" style="display:block">
                                        <div class="col-md-6">
                                            <div class="form-group agr-fields">
                                                <input type="text"  class="form-control" placeholder="<?php echo e('Present Address'); ?> *" name="seller_present_address" id="present_address" value="<?php echo e(old('seller_present_address')); ?>"/>
                                                <span id="present_address_error"></span>
                                                <?php if($errors->has('seller_present_address')): ?>
                                                    <span style="color:#fb0303">
                                                    <?php echo e($errors->first('seller_present_address')); ?>

                                                    </span>
                                                <?php endif; ?> 
                                            </div>  
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group agr-fields">
                                                <input type="text"  class="form-control" placeholder="<?php echo e('Permanent Address'); ?> *" name="seller_permanent_address" id="permanent_address" value="<?php echo e(old('seller_permanent_address')); ?>"/>
                                                <span id="permanent_address_error"></span>
                                                <?php if($errors->has('seller_permanent_address')): ?>
                                                    <span style="color:#fb0303">
                                                        <?php echo e($errors->first('seller_permanent_address')); ?>

                                                    </span>
                                                <?php endif; ?> 
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row company select_box" id="company" style="display:none">
                                        <div class="col-md-6">
                                            <div class="form-group agr-fields">
                                                <input type="text"  class="form-control" placeholder="<?php echo e('Company Name'); ?> *" name="company_address" id="company_name" value="<?php echo e(old('company_address')); ?>"/>
                                                <span id="company_name_error"></span>
                                                <?php if($errors->has('company_address')): ?>
                                                    <span style="color:#fb0303">
                                                        <?php echo e($errors->first('company_address')); ?>

                                                    </span>
                                                <?php endif; ?> 
                                            </div>
                                        </div>  

                                        <div class="col-md-6">
                                            <div class="form-group agr-fields">
                                                <input type="text"  class="form-control" placeholder="<?php echo e('Company Trade License'); ?> *" name="company_trade_license" id="company_trade_license" value="<?php echo e(old('company_trade_license')); ?>"/>
                                                <span id="company_trade_license_error"></span>
                                                <?php if($errors->has('company_trade_license')): ?>
                                                    <span style="color:#fb0303">
                                                        <?php echo e($errors->first('company_trade_license')); ?>

                                                    </span>
                                                <?php endif; ?> 
                                            </div> 
                                        </div>
                                    </div>
                                    <?php if(getcong('recaptcha')==1): ?>
                                    <div class="search-fields" align="center">

                                        <?php echo NoCaptcha::display(); ?>


                                        <?php if($errors->has('g-recaptcha-response')): ?>
                                            <span style="color:#fb0303">
                                                <?php echo e($errors->first('g-recaptcha-response')); ?>

                                            </span>
                                        <?php endif; ?>
                                        
                                    </div> 
                                    <?php endif; ?> 
                                    
                                    <div class="search-button-container button-box">
                                        <button class="btn seller_click" id="floatReducing"><?php echo e(trans('words.sign_up')); ?></button>
                                    </div>

                                    <br/>&nbsp;

                                    <div class="search-fields" style="font-size: 15px; color:#fff">                            
                                        <p><?php echo e(trans('words.do_you_have_account')); ?> <a style="color:#ecc807" href="<?php echo e(url('login')); ?>"><?php echo e(trans('words.login_here')); ?></a> </p>
                                    </div>
                                </div>
                                
                             </div> <!--seller_info tab-->

                       </div > <!--tab-content-->      
                    </form>

                </div>
             </div>   
        </div>  <!--row-->
    </div> <!--container-->
  </section>
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection("scripts"); ?>

  <script src="<?php echo e(URL::asset('site_assets/datepicker/plugins.min.js')); ?>"></script>

  <script>
      $(document).ready(function(){
        $('.continue_first').click(function(){

            var name = $("#name").val();
            var phone = $("#phone").val();
            var email = $("#email").val();

            if(name==''){
                $('#name').css("border", "red solid 1px");
                $("#name_error").html("<i style='color:white'>Name Required.</i>");
                return false;
            }
            if(phone==''){
                $('#name').css("border", "");
                $("#name_error").html("");
    
                $('#phone').css("border", "red solid 1px");
                $("#phone_error").html("<i style='color:white'>Phone Required.</i>");
                return false;
            }
            if(email==''){
                $('#name').css("border", "");
                $("#name_error").html("");
                $('#phone').css("border", "");
                $("#phone_error").html("");

                $('#email').css("border", "red solid 1px");
                $("#email_error").html("<i style='color:white'>Email Required.</i>");
                return false;
            }
            if( !validateEmail(email)){
                $('#name').css("border", "");
                $("#name_error").html("");
                $('#phone').css("border", "");
                $("#phone_error").html("");

                $('#email').css("border", "red solid 1px");
                $("#email_error").html("<i style='color:white'>Email Not Valid.</i>");
                return false;
            }
            $.ajax({
                ype:"GET",
                url:"<?php echo e(url('send/otp')); ?>",
                data:{phone:phone},
                success:function(data){
                    if(data=='success'){
                      $("#show_verify_msg").html("<div class='alert alert-success'>Please check your phone inbox & use the verification code to verify your account.</div>");
                      $("#show_verify_msg2").html("");

                    }
                    else{
                      $("#show_verify_msg").html("<div class='alert alert-danger'>Please try again later.</div>");
                      $("#show_verify_msg2").html("");
                    }
                }
            });
            $('.nav-tabs > .active').next('li').find('a').trigger('click');
        });

        $('.continue2').click(function(){
            var verify_otp = $("#verify").val();
            if(verify_otp==''){
                $('#verify').css("border", "red solid 1px"); 
                $("#verify_error").html("<i style='color:white'>Verification Code Required.</i>");
                return false;
            }
            $.ajax({
                type:"GET",
                url:"<?php echo e(url('check/otp')); ?>",
                data:{verify_otp:verify_otp},
                success:function(data){
                 
                    if(data=='success'){
                      $("#show_verify_msg").html("");
                      $('.nav-tabs > .active').next('li').find('a').trigger('click');
                    }
                    else{
                      $("#show_verify_msg").html("");
                      $("#show_verify_msg2").html("<div class='alert alert-danger'>This OTP not valid.</div>");
                    }
                }
            });
        });
    });
     $("#email").keyup(function(){
        var email = $("#email").val();
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(email)) {
           //alert('Please provide a valid email address');
           $("#email_error").html("<i style='color:white'>"+ email +" is not a valid email</i>");
           email.focus;
           return false;
        } else {
            $("#email_error").html("");
       }
    }); 

    /*For Emial Validation Checked*/
    function validateEmail($email) {
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      return emailReg.test( $email );
    }

    $(".mregisterform").on("submit", function (e) {

        var exampleRadios1 = $("#exampleRadios1").val();
        var exampleRadios2 = $("#exampleRadios2").val();
        var present_address = $("#present_address").val();
        var permanent_address = $("#permanent_address").val();
        var company_name = $("#company_name").val();
        var company_trade_license = $("#company_trade_license").val();
        var password = $("#password").val();
        var password_confirmation = $("#password_confirmation").val();

        if(exampleRadios1=='individual'){
             
            if(present_address==''){
               
                $('#permanent_address').css("border", "");
                $("#permanent_address_error").html("");

                $('#present_address').css("border", "red solid 1px");
                $("#present_address_error").html("<i style='color:white'>Present Address Required.</i>");
                return false;
            }
            if(permanent_address==''){
                
                $('#present_address').css("border", "");
                $("#present_address_error").html("");

                $('#permanent_address').css("border", "red solid 1px");
                $("#permanent_address_error").html("<i style='color:white'>Permanent Address Required.</i>");
                return false;
            }
        }
        if(exampleRadios2=='company'){
            if(company_name==''){
                 
                $('#company_trade_license').css("border", "");
                $("#company_trade_license_error").html("");

                $('#company_name').css("border", "red solid 1px");
                $("#company_name_error").html("<i style='color:white'>Company Name Required.</i>");
                return false;
            }
            if(company_trade_license==''){
                 
                $('#company_name').css("border", "");
                $("#company_name_error").html("");

                $('#company_trade_license').css("border", "red solid 1px");
                $("#company_trade_license_error").html("<i style='color:white'>Company Trade License Required.</i>");
                return false;
            }
        }

        $.ajax({
            method: "POST",
            url: $(this).prop("action"),
            data: new FormData(this),
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                 
            },
        });
    })

    $(document).ready(function(){
        $("#exampleRadios1").val('individual');
        $("#exampleRadios2").val('');
    });

    $("#exampleRadios1").on('click', function(){
        $("#exampleRadios1").val('individual');
        $("#exampleRadios2").val('');
    });

    $("#exampleRadios2").on('click', function(){
        $("#exampleRadios1").val('');
        $("#exampleRadios2").val('company');
    });
      

  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crafyvzz/public_html/floorfly.com/resources/views/pages/register.blade.php ENDPATH**/ ?>