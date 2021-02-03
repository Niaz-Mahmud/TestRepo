<?php $__env->startSection('head_title', trans('words.sign_up').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
  <section class="property-listing boxed-view clearfix" id="agentRegister">
     <div class="inner-container container">
       
       <div  class="row">
        <div class="col-md-8 col-md-offset-2">

          <h2 class="hsq-heading type-1" style="color:#fcd70d"><?php echo e('Register as Sales Agent'); ?></h2>
          <p style="color:white;display:none;">আপনি কি রিয়েল এস্টেট ইন্ডাস্ট্রিতে ক্যারিয়ার গড়তে চান?
          আপনি কি কোন রিয়েল এস্টেট কোম্পানিতে চাকরী খুজছেন?
          আপানার কোম্পানির জন্য কি দক্ষ সেলস এজেন্ট দরকার? 

          ফ্লোরফ্লাই এ যোগাযোগ করুন, নিচের বাটনটি ক্লিক করে রেজিস্ট্রেশন ফরমটি পূরন করুন।
          </p>

            

          <div class="agent-registration-form">
            <div class="container">
                <?php if(Session::has('flash_message')): ?>
                <div class="alert alert-success">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                            <?php echo e(Session::get('flash_message')); ?>

                </div>
                <?php endif; ?>
              <ul class="nav nav-tabs" role="tablist" style="display:none">
                <li role="presentation" class="active">
                  <a href="#personal_tab" aria-controls="personal_tab" role="tab" data-toggle="tab" aria-expanded="true">Personal Information</a>
                </li>

                <li>
                  <a href="#education_tab" aria-controls="education_tab" role="tab" data-toggle="tab" aria-expanded="false">Education</a>
                </li>

                <li>
                  <a href="#employment_tab" aria-controls="employment_tab" role="tab" data-toggle="tab" aria-expanded="false">Employment</a>
                </li>

                <li>
                  <a href="#skill_tab" aria-controls="skill_tab" role="tab" data-toggle="tab" aria-expanded="false">Skill</a>
                </li>

                <li>
                  <a href="#social_tab" aria-controls="social_tab" role="tab" data-toggle="tab" aria-expanded="false">Social</a>
                </li>

              </ul>

             <?php echo Form::open(array('url' => 'postAgentRegister','class'=>'search-form','id'=>'registerform','role'=>'form', 'enctype'=>'multipart/form-data')); ?>

              <meta name="_token" content="<?php echo csrf_token(); ?>"/>

              <input type="text" name="usertype" value="Agents" hidden/> 
               
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="personal_tab">
                  <h3 class="form-tab-title" >Personal Information</h3>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group agr-fields">
                        <input type="text" class="form-control" placeholder="<?php echo e(trans('words.name')); ?>" name="name" id="name" required/>
                        <span id="name_error"></span>
                        <?php if($errors->has('name')): ?>
                          <span style="color:#fb0303">
                              <?php echo e($errors->first('name')); ?>

                          </span>
                        <?php endif; ?> 
                        </div>
                    </div>
                  </div>  <!--/.row-->

                  <div class="row">
                   <div class="col-md-4">
                      <div class="form-group agr-fields">
                        <input type="text" name="agent_dob" class="datepicker form-control" format="yy-mm-dd" id="agent_dob" placeholder="Date Of Birth" autocomplete="off" required />
                        <span id="agent_dob_error"></span>
                        <?php if($errors->has('agent_dob')): ?>
                        <span style="color:#fb0303">
                            <?php echo e($errors->first('agent_dob')); ?>

                        </span>
                        <?php endif; ?> 
                      </div>   
                    </div>

                    <div class="col-md-4">
                     <div class="form-group agr-fields">
                        <input type="text" class="form-control" placeholder="<?php echo e('Contact 1'); ?>" name="phone" id="phone" required/>
                        <span id="phone_error"></span>
                        <?php if($errors->has('phone')): ?>
                          <span style="color:#fb0303">
                              <?php echo e($errors->first('phone')); ?>

                          </span>
                          <?php endif; ?> 
                      </div>     
                    </div>

                    <div class="col-md-4">
                       <div class="form-group agr-fields">
                         <input type="text" class="form-control" placeholder="<?php echo e('Contact 2'); ?>" name="agent_contact2"/> 
                          <?php if($errors->has('agent_contact2')): ?>
                              <span style="color:#fb0303">
                                  <?php echo e($errors->first('agent_contact2')); ?>

                              </span>
                          <?php endif; ?> 
                        </div>
                    </div>

                  </div> <!--/.row-->

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group agr-fields">
                        <input type="email" class="form-control" placeholder="<?php echo e(trans('words.email')); ?>" name="email" id="email" required/>
                        <span id="email_error"></span>
                        <?php if($errors->has('email')): ?>
                          <span style="color:#fb0303">
                              <?php echo e($errors->first('email')); ?>

                          </span>
                        <?php endif; ?> 
                      </div> 
                    </div>

                    <div class="col-md-12">
                      <div class="form-group agr-fields">
                        <input type="email" class="form-control" placeholder="<?php echo e(trans('words.confirm_email')); ?>" name="confirm_email" id="confirm_email" required/>
                        <span id="confirm_email_error"></span> 
                        <?php if($errors->has('email')): ?>
                          <span style="color:#fb0303">
                              <?php echo e($errors->first('email')); ?>

                          </span>
                        <?php endif; ?> 
                      </div> 
                    </div>

                    <div class="col-md-12">
                      <div class="form-group agr-fields">
                        <textarea type="email" class="form-control" placeholder="<?php echo e(trans('words.present_address')); ?>" name="agent_present_address" id="agent_present_address" required></textarea>
                        <span id="agent_present_address_error"></span>
                        <?php if($errors->has('agent_present_address')): ?>
                          <span style="color:#fb0303">
                              <?php echo e($errors->first('agent_present_address')); ?>

                          </span>
                          <?php endif; ?>
                      </div> 
                    </div>

                    <div class="col-md-12">
                      <div class="form-group agr-fields">
                        <textarea type="text" class="form-control" placeholder="<?php echo e(trans('words.permanent_address')); ?>" name="agent_permanent_address"></textarea>
                        <?php if($errors->has('agent_permanent_address')): ?>
                          <span style="color:#fb0303">
                              <?php echo e($errors->first('agent_permanent_address')); ?>

                          </span>
                          <?php endif; ?>
                      </div> 
                    </div>
                  </div> <!--/.row-->  

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group agr-fields">
                        <input type="text" class="form-control" placeholder="<?php echo e('NID Number'); ?>" name="agent_nid" id="agent_nid" required/>
                        <span id="agent_nid_error"></span>
                          <?php if($errors->has('agent_nid')): ?>
                            <span style="color:#fb0303">
                                <?php echo e($errors->first('agent_nid')); ?>

                            </span>
                          <?php endif; ?> 
                      </div>
                    </div> 

                    <div class="col-md-6">
                     <div class="form-group agr-fields">
                        <input type="text" class="form-control" placeholder="<?php echo e('Passport Number'); ?>" name="agent_passport"/> 
                        <?php if($errors->has('agent_passport')): ?>
                          <span style="color:#fb0303">
                              <?php echo e($errors->first('agent_passport')); ?>

                          </span>
                          <?php endif; ?> 
                      </div>     
                    </div>
                  </div>  <!--/.row--> 


                  <div class="row">
                    <div class="col-md-12">
                     <div class="form-group agr-fields">
                        <input type="text" class="form-control" placeholder="Father's Name" name="agent_father" id="agent_father" required/> 
                        <span id="agent_father_error"></span>
                        <?php if($errors->has('agent_father')): ?>
                            <span style="color:#fb0303">
                            <?php echo e($errors->first('agent_father')); ?>

                            </span>
                        <?php endif; ?> 
                      </div>     
                    </div>

                    <div class="col-md-12">
                     <div class="form-group agr-fields">
                        <input type="text" class="form-control" placeholder="Mother's Name" name="agent_mother" id="agent_mother" required/>
                        <span id="agent_mother_error"></span>
                            <?php if($errors->has('agent_mother')): ?>
                                <span style="color:#fb0303">
                                  <?php echo e($errors->first('agent_mother')); ?>

                                </span>
                            <?php endif; ?> 
                        </div>
                    </div>
                    <div class="col-md-12">
                     <div class="form-group agr-fields">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password" required/>
                        <span id="password_error"></span>
                            <?php if($errors->has('agent_mother')): ?>
                                <span style="color:#fb0303">
                                  <?php echo e($errors->first('agent_mother')); ?>

                                </span>
                            <?php endif; ?> 
                        </div>
                    </div>  
                  </div> <!--/.row--> 
                 <a class="btn btn-primary continue agr-btn pull-right">Save & Proceed for Next Step</a>
                </div> <!--tab1-->

                <div role="tabpanel" class="tab-pane" id="education_tab">
                  <div class="education1"> 
                   <div class="education4">
                     <h3 class="form-tab-title">Education Level</h3>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group agr-fields">
                            <input type="text" class="form-control" placeholder="<?php echo e('Institute'); ?>" name="institue[]" /> 
                            <?php if($errors->has('institue')): ?>
                              <span style="color:#fb0303">
                                  <?php echo e($errors->first('institue')); ?>

                              </span>
                              <?php endif; ?> 
                          </div>     
                        </div>
                      </div> <!--/.row-->

                      <div class="row">
                        <div class="col-md-6">
                           <div class="form-group agr-fields">
                            <input type="text" class="form-control" placeholder="Result" name="agent_result[]" /> 
                            <?php if($errors->has('agent_result')): ?>
                              <span style="color:#fb0303">
                                  <?php echo e($errors->first('agent_result')); ?>

                              </span>
                              <?php endif; ?> 
                          </div>     
                        </div>

                        <div class="col-md-6">
                          <div class="form-group agr-fields search-fields">
                              <select name="agent_degree[]" class="form-control">
                                  <option value="" style="color:#88888">Select Degree</option>
                                  <option value="SSC">SSC</option>
                                  <option value="HSC">HSC</option>
                                  <option value="Bachelor">Bachelor</option>
                                  <option value="Masters">Masters</option>
                                  <option value="BBA">BBA</option>
                                  <option value="MBA">MBA</option>
                              </select>
                                <?php if($errors->has('agent_degree')): ?>
                              <span style="color:#fb0303">
                                  <?php echo e($errors->first('agent_degree')); ?>

                              </span>
                              <?php endif; ?> 
                          </div> 
                        </div> 
                      </div> <!--/.row-->
                   </div>  <!--/.education4-->
                   </div>


                   <div class="education" style="display:none"> 
                   <div class="education_records">
                     <h3 class="form-tab-title"> &nbsp;</h3>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group agr-fields">
                            <input type="text" class="form-control" placeholder="<?php echo e('Institute'); ?>" name="institue[]" /> 
                            <?php if($errors->has('institue')): ?>
                              <span style="color:#fb0303">
                                  <?php echo e($errors->first('institue')); ?>

                              </span>
                              <?php endif; ?> 
                          </div>     
                        </div>
                      </div> <!--/.row-->

                      <div class="row">
                        <div class="col-md-6">
                           <div class="form-group agr-fields">
                            <input type="text" class="form-control" placeholder="Result" name="agent_result[]" /> 
                            <?php if($errors->has('agent_result')): ?>
                              <span style="color:#fb0303">
                                  <?php echo e($errors->first('agent_result')); ?>

                              </span>
                              <?php endif; ?> 
                          </div>     
                        </div>

                        <div class="col-md-6">
                          <div class="form-group agr-fields search-fields">
                              <select name="agent_degree[]" class="form-control">
                                  <option value="" style="color:#88888">Select Degree</option>
                                  <option value="SSC">SSC</option>
                                  <option value="HSC">HSC</option>
                                  <option value="Bachelor">Bachelor</option>
                                  <option value="Masters">Masters</option>
                                  <option value="BBA">BBA</option>
                                  <option value="MBA">MBA</option>
                              </select>
                                <?php if($errors->has('agent_degree')): ?>
                              <span style="color:#fb0303">
                                  <?php echo e($errors->first('agent_degree')); ?>

                              </span>
                              <?php endif; ?> 
                          </div> 
                        </div> 
                      </div> <!--/.row-->
                   </div>  
                  </div>


                  <div class="education_records_dynamic"></div> <!--/.more-education-field-add-->
                  <a class="btn btn-primary continue agr-btn pull-right">Continue</a>
                  <a class="btn btn-primary back agr-btn pull-right">Go Back</a>
                  <a class="extra-fields-education btn btn-primary agr-btn" href="#">+ Add More</a>
                </div> <!--tab2-->

                <div role="tabpanel" class="tab-pane" id="employment_tab">
                  <div class="employment_data">
                    <h3 class="form-tab-title">Employment</h3>
                    <div class="employment">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group agr-fields">
                            <input type="text" class="form-control" placeholder="<?php echo e('Company'); ?>" name="company[]"/> 
                            <?php if($errors->has('company')): ?>
                                <span style="color:#fb0303">
                                    <?php echo e($errors->first('company')); ?>

                                </span>
                                <?php endif; ?> 
                          </div>
                        </div>
                      </div> <!--/.row-->
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group agr-fields search-fields">
                              <select name="position[]" class="form-control">
                                <option value="">Select Position</option>
                                <option value="Executive">Executive</option>
                                <option value="Officer">Officer</option>
                                <option value="Asst. Manager etc">Asst. Manager etc.</option>
                              </select>
                                <?php if($errors->has('position')): ?>
                              <span style="color:#fb0303">
                                  <?php echo e($errors->first('position')); ?>

                              </span>
                              <?php endif; ?> 
                          </div> 
                        </div> 
                        <div class="col-md-6">
                          <div class="form-group agr-fields search-fields">
                              <select name="department[]" class="form-control">
                                <option value="">Select Department</option>
                                <option value="Sales">Sales </option>
                                <option value="Marketing">Marketing</option>
                                <option value="HR">HR</option>
                                <option value="Admin">Admin</option>
                              </select>
                                <?php if($errors->has('department')): ?>
                              <span style="color:#fb0303">
                                  <?php echo e($errors->first('department')); ?>

                              </span>
                              <?php endif; ?> 
                          </div> 
                        </div> 
                      </div> <!--/.row-->
                  </div>
                </div>

                <div class="employment_data" style="display:none">
                 <div class="employment_records">
                    <h3 class="form-tab-title">&nbsp;</h3>
                      <div class="employment">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group agr-fields">
                              <input type="text" class="form-control" placeholder="<?php echo e('Company'); ?>" name="company[]" /> 
                              <?php if($errors->has('company')): ?>
                                <span style="color:#fb0303">
                                    <?php echo e($errors->first('company')); ?>

                                </span>
                                <?php endif; ?> 
                            </div>     
                          </div>
                        </div> <!--/.row-->

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group agr-fields search-fields">
                                <select name="position[]" class="form-control">
                                  <option value="">Select Position</option>
                                  <option value="Executive">Executive</option>
                                  <option value="Officer">Officer</option>
                                  <option value="Asst. Manager etc">Asst. Manager etc.</option>
                                </select>
                                  <?php if($errors->has('position')): ?>
                                <span style="color:#fb0303">
                                    <?php echo e($errors->first('position')); ?>

                                </span>
                                <?php endif; ?> 
                            </div> 
                          </div> 

                          <div class="col-md-6">
                            <div class="form-group agr-fields search-fields">
                                <select name="department[]" class="form-control">
                                  <option value="">Select Department</option>
                                  <option value="Sales">Sales </option>
                                  <option value="Marketing">Marketing</option>
                                  <option value="HR">HR</option>
                                  <option value="Admin">Admin</option>
                                </select>
                                <?php if($errors->has('department')): ?>
                                <span style="color:#fb0303">
                                    <?php echo e($errors->first('department')); ?>

                                </span>
                                <?php endif; ?> 
                            </div> 
                          </div> 
                        </div> <!--/.row-->
                    </div>
                  </div>
                </div><!--employment_data-->


                <div class="employment_records_dynamic"></div>
                  <a class="btn btn-primary continue agr-btn pull-right">Continue</a>
                  <a class="btn btn-primary back agr-btn pull-right">Go Back</a>
                  <a class="extra-fields-employment btn btn-primary agr-btn" href="#"> + Add More</a>
                </div> <!--tab3-->
                <div role="tabpanel" class="tab-pane" id="skill_tab">
                  <div class="skill_datas">
                     <h3 class="form-tab-title">Skill</h3>
                    <div class="skill-tab-content">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group agr-fields">
                            <input type="text" class="form-control" placeholder="<?php echo e('skill'); ?>" name="skill[]"/> 
                            <?php if($errors->has('skill')): ?>
                              <span style="color:#fb0303">
                                  <?php echo e($errors->first('skill')); ?>

                              </span>
                              <?php endif; ?> 
                          </div>     
                        </div>
                      </div> <!--/.row-->
                    </div>
                  </div>
                  <div class="skill_datas" style="display:none;">
                    <div class="skill_records">
                      <h3 class="form-tab-title">&nbsp;</h3>
                      <div class="skill-tab-content">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group agr-fields">
                              <input type="text" class="form-control" placeholder="<?php echo e('skill'); ?>" name="skill[]"/> 
                              <?php if($errors->has('skill')): ?>
                                <span style="color:#fb0303">
                                    <?php echo e($errors->first('skill')); ?>

                                </span>
                                <?php endif; ?> 
                            </div>     
                          </div>
                        </div> <!--/.row-->
                       </div>
                     </div> <!--skill_records-->
                  </div>  <!--skill_datas-->
                  <div class="skill_records_dynamic"></div>
                  <a class="btn btn-primary continue agr-btn pull-right">Continue</a>
                  <a class="btn btn-primary back agr-btn pull-right">Go Back</a>
                  <a class="extra-fields-skill btn btn-primary  agr-btn" href="#">+ Add More</a>
                </div> <!--tab4-->
                <div role="tabpanel" class="tab-pane" id="social_tab">
                    <h3 class="form-tab-title">Social</h3>
                    <div class="social-tab-content">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="form-group agr-fields">
                                <input type="text" class="form-control" placeholder="<?php echo e('LinkedIn Profile'); ?>" name="linkedin"/> 
                                <?php if($errors->has('linkedin')): ?>
                                <span style="color:#fb0303">
                                    <?php echo e($errors->first('linkedin')); ?>

                                </span>
                                <?php endif; ?> 
                              </div>

                              <div class="form-group agr-fields">
                                <input type="text" class="form-control" placeholder="<?php echo e('Google Link'); ?>" name="google"/> 
                                <?php if($errors->has('google')): ?>
                                <span style="color:#fb0303">
                                    <?php echo e($errors->first('google')); ?>

                                </span>
                                <?php endif; ?> 
                              </div>

                              <div class="form-group agr-fields">
                                <input type="text" class="form-control" placeholder="<?php echo e('Facebook Profile'); ?>" name="facebook"/> 
                                <?php if($errors->has('facebook')): ?>
                                <span style="color:#fb0303">
                                    <?php echo e($errors->first('facebook')); ?>

                                </span>
                                <?php endif; ?> 
                              </div>
                            </div>
                        </div> <!--/.row-->

                      <div class="row">
                        <div class="col-md-6">
                          <div id="form1" runat="server" class="form-group agr-fields">
                            <label class="control-label">Upload Profile Image</label>
                            <input type='file' id="file-input-profile" name="profile_image" class="form-control"/>
                            <div id='img_contain'>
                              <img id="image-preview-profile" align='middle'src="<?php echo e(URL::asset('site_assets/img/avatar.png')); ?>" alt="your image" title=''/>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div id="form1" runat="server" class="form-group agr-fields">
                          <label class="control-label">Upload Cover Image</label>
                            <input type='file' id="file-input-cover" name="cover_image" class="form-control"/>
                            <div id='img_contain'>
                              <img id="image-preview-cover" align='middle'src="<?php echo e(URL::asset('site_assets/img/avatar.png')); ?>" alt="your image" title=''/>
                            </div>
                          </div>
                        </div>
                      </div> <!--/.row-->
                  </div>
                  <button class="btn btn-primary continue agr-btn pull-right">Submit</button>
                  <a class="btn btn-primary back agr-btn pull-right">Go Back</a>
                </div> <!--tab5-->
            </div>
            </div> <!--tab-content-->
            <?php echo Form::close(); ?> 
            <div id="push"></div>
          </div> <!--agent-registration-form-->
        </div> <!--col-md-6 col-md-offset-3-->
      </div>
    </div>
  </section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("styles"); ?>
  <link rel="stylesheet" href="<?php echo e(URL::asset('site_assets/datepicker/datepicker.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection("scripts"); ?>
  <!-- Plugins -->
  <script src="<?php echo e(URL::asset('site_assets/datepicker/plugins.min.js')); ?>"></script>

  <!-- App Scripts -->
  <script src="<?php echo e(URL::asset('site_assets/datepicker/scripts.js')); ?>"></script>

  <script>

    // tab click continue
    $('.continue').click(function(){
        
        var name = $("#name").val();
        var agent_dob = $("#agent_dob").val();
        var phone = $("#phone").val();
        var email = $("#email").val();
        var confirm_email = $("#confirm_email").val();
        var agent_present_address = $("#agent_present_address").val();
        var agent_nid = $("#agent_nid").val();
        var agent_father = $("#agent_father").val();
        var agent_mother = $("#agent_mother").val();
        var password = $("#password").val();
        if(name==''){
            $('#name').css("border", "red solid 1px");
            $("#name_error").html("<i style='color:red'>Name Required.</i>");
            return false;
        }
        if(agent_dob==''){
            $('#name').css("border", "");
            $("#name_error").html("");

            $('#agent_dob').css("border", "red solid 1px");
            $("#agent_dob_error").html("<i style='color:red'>Date Of Brith Required.</i>");
            return false;
        }
        if(phone==''){
            $('#name').css("border", "");
            $("#name_error").html("");
            $('#agent_dob').css("border", "");
            $("#agent_dob_error").html("");

            $('#phone').css("border", "red solid 1px");
            $("#phone_error").html("<i style='color:red'>Contact 1 Required.</i>");
            return false;
        }
        if(email==''){
            $('#name').css("border", "");
            $("#name_error").html("");
            $('#agent_dob').css("border", "");
            $("#agent_dob_error").html("");
            $('#phone').css("border", "");
            $("#phone_error").html("");

            $('#email').css("border", "red solid 1px");
            $("#email_error").html("<i style='color:red'>Email Required.</i>");
            return false;
        }
        if( !validateEmail(email)){
            $('#name').css("border", "");
            $("#name_error").html("");
            $('#agent_dob').css("border", "");
            $("#agent_dob_error").html("");
            $('#phone').css("border", "");
            $("#phone_error").html("");

            $('#email').css("border", "red solid 1px");
            $("#email_error").html("<i style='color:red'>Email Not Valid.</i>");
            return false;
        }
        if(confirm_email==''){
            $('#name').css("border", "");
            $("#name_error").html("");
            $('#agent_dob').css("border", "");
            $("#agent_dob_error").html("");
            $('#phone').css("border", "");
            $("#phone_error").html("");
            $('#email').css("border", "");
            $("#email_error").html("");

            $('#confirm_email').css("border", "red solid 1px");
            $("#confirm_email_error").html("<i style='color:red'>Confirm Email Required.</i>");
            return false;
        }
        if( !validateEmail(confirm_email)){
            $('#name').css("border", "");
            $("#name_error").html("");
            $('#agent_dob').css("border", "");
            $("#agent_dob_error").html("");
            $('#phone').css("border", "");
            $("#phone_error").html("");

            $('#confirm_email').css("border", "red solid 1px");
            $("#confirm_email_error").html("<i style='color:red'>Confirm Email Not Valid.</i>");
            return false;
        }
        if(agent_present_address==''){
            $('#name').css("border", "");
            $("#name_error").html("");
            $('#agent_dob').css("border", "");
            $("#agent_dob_error").html("");
            $('#phone').css("border", "");
            $("#phone_error").html("");
            $('#email').css("border", "");
            $("#email_error").html("");
            $('#confirm_email').css("border", "");
            $("#confirm_email_error").html("");

            $('#agent_present_address').css("border", "red solid 1px");
            $("#agent_present_address_error").html("<i style='color:red'>Present Address Required.</i>");
            return false;
        }
        if(agent_nid==''){
            $('#name').css("border", "");
            $("#name_error").html("");
            $('#agent_dob').css("border", "");
            $("#agent_dob_error").html("");
            $('#phone').css("border", "");
            $("#phone_error").html("");
            $('#email').css("border", "");
            $("#email_error").html("");
            $('#confirm_email').css("border", "");
            $("#confirm_email_error").html("");
            $('#agent_present_address').css("border", ""); 
            $("#agent_present_address_error").html("");

            $('#agent_nid').css("border", "red solid 1px");
            $("#agent_nid_error").html("<i style='color:red'>NID Number Required.</i>");
            return false;
        }
        if(agent_father==''){
            $('#name').css("border", "");
            $("#name_error").html("");
            $('#agent_dob').css("border", "");
            $("#agent_dob_error").html("");
            $('#phone').css("border", "");
            $("#phone_error").html("");
            $('#email').css("border", "");
            $("#email_error").html("");
            $('#confirm_email').css("border", "");
            $("#confirm_email_error").html("");
            $('#agent_present_address').css("border", "");
            $("#agent_present_address_error").html("");
            $('#agent_nid').css("border", "");
            $("#agent_nid_error").html("");

            $('#agent_father').css("border", "red solid 1px");
            $("#agent_father_error").html("<i style='color:red'>Father's Required.</i>");
            return false;
        }
        if(agent_mother==''){
            $('#name').css("border", "");
            $("#name_error").html("");
            $('#agent_dob').css("border", "");
            $("#agent_dob_error").html("");
            $('#phone').css("border", "");
            $("#phone_error").html("");
            $('#email').css("border", "");
            $("#email_error").html("");
            $('#confirm_email').css("border", "");
            $("#confirm_email_error").html("");
            $('#agent_present_address').css("border", "");
            $("#agent_present_address_error").html("");
            $('#agent_nid').css("border", "");
            $("#agent_nid_error").html("");
            $('#agent_father').css("border", "");
            $("#agent_father_error").html("");

            $('#agent_mother').css("border", "red solid 1px");
            $("#agent_mother_error").html("<i style='color:red'>Mother's Required.</i>");
            return false;
        }

        if(password==''){
            $('#name').css("border", "");
            $("#name_error").html("");
            $('#agent_dob').css("border", "");
            $("#agent_dob_error").html("");
            $('#phone').css("border", "");
            $("#phone_error").html("");
            $('#email').css("border", "");
            $("#email_error").html("");
            $('#confirm_email').css("border", "");
            $("#confirm_email_error").html("");
            $('#agent_present_address').css("border", "");
            $("#agent_present_address_error").html("");
            $('#agent_nid').css("border", "");
            $("#agent_nid_error").html("");
            $('#agent_father').css("border", "");
            $("#agent_father_error").html("");
            $('#agent_mother').css("border", "");
            $("#agent_mother_error").html("");

            $('#password').css("border", "red solid 1px"); 
            $("#password_error").html("<i style='color:red'>Password Required.</i>");
            return false;
        }
         
       $('.nav-tabs > .active').next('li').find('a').trigger('click');
    });

    $('.back').click(function(){
      $('.nav-tabs > .active').prev('li').find('a').trigger('click');
      
    });

    /*For Emial Validation Checked*/
    function validateEmail($email) {
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      return emailReg.test( $email );
    }

    //image file upload profile
    $( document ).ready(function() { 
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#image-preview-profile').attr('src', e.target.result);
        $('#image-preview-profile').hide();
        $('#image-preview-profile').fadeIn(650);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#file-input-profile").change(function() {
    readURL(this);
  });
});

  //image file upload cover
  $( document ).ready(function() { 
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#image-preview-cover').attr('src', e.target.result);
        $('#image-preview-cover').hide();
        $('#image-preview-cover').fadeIn(650);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#file-input-cover").change(function() {
    readURL(this);
  });

});

// Education Field add more

$( document ).ready(function() { 
  $('.extra-fields-employment').click(function() {
    $('.employment_records').clone().appendTo('.employment_records_dynamic');
    $('.employment_records_dynamic .employment_records').addClass('single remove');
    $('.single .extra-fields-employment').remove();
    $('.single').append('<a href="#" class="remove-field btn-remove-customer btn btn-danger agr-remove pull-right"><i class="fa fa-times"></i></a>');
    $('.employment_records_dynamic > .single').attr("class", "remove");

    $('.employment_records_dynamic input').each(function() {
      var count = 0;
      var fieldname = $(this).attr("name");
      $(this).attr('name', fieldname + count);
      count++;
    });

  });

  $(document).on('click', '.remove-field', function(e) {
    $(this).parent('.remove').remove();
    e.preventDefault();
  });

});


// Employment Field add more

$( document ).ready(function() { 
  $('.extra-fields-education').click(function() {
    $('.education_records').clone().appendTo('.education_records_dynamic');
    $('.education_records_dynamic .education_records').addClass('single remove');
    $('.single .extra-fields-education').remove();
    $('.single').append('<a href="#" class="remove-field btn-remove-customer btn btn-danger agr-remove pull-right"><i class="fa fa-times"></i></a>');
    $('.education_records_dynamic > .single').attr("class", "remove");

    $('.education_records_dynamic input').each(function() {
      var count = 0;
      var fieldname = $(this).attr("name");
      $(this).attr('name', fieldname + count);
      count++;
    });

  });

  $(document).on('click', '.remove-field', function(e) {
    $(this).parent('.remove').remove();
    e.preventDefault();
  });

});

// skill Field add more

$( document ).ready(function() { 
  $('.extra-fields-skill').click(function() {
    $('.skill_records').clone().appendTo('.skill_records_dynamic');
    $('.skill_records_dynamic .skill_records').addClass('single remove');
    $('.single .extra-fields-skill').remove();
    $('.single').append('<a href="#" class="remove-field btn-remove-customer btn btn-danger agr-remove pull-right"><i class="fa fa-times"></i></a>');
    $('.skill_records_dynamic > .single').attr("class", "remove");

    $('.skill_records_dynamic input').each(function() {
      var count = 0;
      var fieldname = $(this).attr("name");
      $(this).attr('name', fieldname + count);
      count++;
    });

  });

  $(document).on('click', '.remove-field', function(e) {
    $(this).parent('.remove').remove();
    e.preventDefault();
  });

});


  </script>

<?php $__env->stopSection(); ?>  
<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/pages/agentregister.blade.php ENDPATH**/ ?>