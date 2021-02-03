

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
                
              <ul class="nav nav-tabs" role="tablist" style="display:none">

                <li role="presentation" class="active">
                  <a href="#content_tab" aria-controls="content_tab" role="tab" data-toggle="tab" aria-expanded="true"></a>
                </li>

                <li role="presentation">
                  <a href="#personal_tab" aria-controls="personal_tab" role="tab" data-toggle="tab" aria-expanded="true">Personal Information</a>
                </li>

                <li>
                  <a href="#contact_tab" aria-controls="contact_tab" role="tab" data-toggle="tab" aria-expanded="false">Contact Number</a>
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
              <?php if(Session::has('flash_message')): ?>
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                      <?php echo e(Session::get('flash_message')); ?>

                  </div>
              <?php endif; ?>

             <?php echo Form::open(array('url' => 'postAgentRegister','class'=>'search-form','id'=>'registerform','role'=>'form', 'enctype'=>'multipart/form-data')); ?>

              <meta name="_token" content="<?php echo csrf_token(); ?>"/>

              <input type="text" name="usertype" value="Agents" hidden/> 
               
              
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="content_tab">
                    <div class="row">
                        <div class="col-md-12">
                          <h2 style="color:white">ফ্লোরফ্লাই এর মাধ্যমে কিভাবে রিয়েল-এস্টেট এর প্রফেশনাল’রা উপকৃত হবেন ?</h2>
                          <p style="color:white">প্রাথমিক ভাবে আমাদের দেশের কোন সেলস এজন্ট-ই ১০০% প্রফেশনাল নয়। কারন এই যে তাদের রিয়েল-এস্টেট ইন্ডাস্ট্রিজের উপরে প্রাতিষ্ঠানিক কোন শিক্ষা নেই। আমরা যারা রিয়েল-এস্টেট সেলস নিয়ে কাজ করি, তারা কোন প্রতিষ্ঠানে কাজ শুরু করা মাত্রই তাদের উপরে বিক্রয় করার জন্য চাপ এসে পড়ে। বিশেষ করে ফার(FAR) এর সংজ্ঞা, রিটার্নের হিসাব, মালামালের গুনগত মানের পার্থক্য, জমির কাগজপত্র ইত্যাদি কোন কিছুর সাথেই তারা পরিচিত হতে পারে না। সেই সাথে তাদের কোম্পানি থেকে বাস্তবিক অর্থেই বিক্রির জন্য কোন প্রকার সেলস লিড প্রদান করা হয় না। তাই বিক্রি করার চ্যালেঞ্জ না নিতে পেরে অনেকে হতাশায় ভুগে থাকেন। অথচ রিয়েল-এস্টেট সেলস এজেন্ট এমন একটি পেশা যা পৃথিবীর সবচাইতে বেশী আত্মমর্যাদা পূর্ন পেশা গুলোর মধ্যে অন্যতম।</p>
                          <p style="color:white">এই সেক্টরের যত সেলস এজেন্ট আছেন তাদের অনেকেই খুব মানবেতর জীবনযাপন করে থাকেন। তাই, তাদের পক্ষে নিজেদের গোছানোর সময়, গ্রুম-আপ করার সময় থাকে না বা তারা পেরে উঠেনা। সবচাইতে পলিশড এই পেশায় আসার আগে সবার একটাই লক্ষ্য থাকে যে জীবন ধারন করা, কোনভাবে ৩/৪ মাসে একটি সেল করে কোম্পানীতে টিকে থাকা। অথচ, যে কোন পেশার চাইতে এই পেশায় মার্কেট ভ্যালু অনেক বেশী (বাংলাদেশে সহ বাইরের দেশগুলোতে এর ব্যাপক চাহিদা, সুনাম এবং সম্মান রয়েছে)। শুধুমাত্র সঠিক জ্ঞান, আত্মবিশ্বাস আর একটু মনোযোগ-ই আপনাকে সফল করতে সক্ষম। ফ্লোরফ্লাই আপনার রিয়েল এস্টেট ক্যরিয়ারের জন্য একটি মাধ্যম মাত্র।</p>
                          <p style="color:white">টানা পারফরমেন্স না থাকলে চাকরী হারানোর ভয়, ক্লায়েন্ট খুঁজে পাওয়া, সঠিক সময়ে সিদ্ধান্তহীনতা, অত্যাধিক চাপ ইত্যাদির মধ্যেই আমাদের কাজ করতে হয়, যা হয়তো অনেকের পক্ষেই সম্ভব হয় না। তাই, অপার সম্ভাবনা থাকা সত্ত্বেও আমরা ঝরে যাই এই সেক্টর থেকে। এই প্রতিকূলতা থেকে উদ্ধারেই ফ্লোরফ্লাই এর জন্ম সূচনা। চাকরীর উপর শুধুমাত্র নির্ভরশীল না থেকে আপনি ইচ্ছা করলে প্রতি মাসেই এই প্ল্যাটফর্ম থেকে একটি উপার্জনের রাস্তা বের করে নিতে পারেন নিশ্চিত ভাবে। কোন নির্দিষ্ট প্রোডাক্ট বিক্রি করতে আপনি নাই পারতে পারেন, তবে প্রোডাক্ট যদি হয় আপনার ক্লায়েন্টের চাহিদা মত, তাহলে কিন্তু ঠিকই আপনি পেরে যাবেন নিশ্চিত।</p>
                          <p style="color:white">সবশেষে আপনার সফলতার একটি অংশীদার হতে ফ্লোরফ্লাইকে মাধ্যম হিসেবে বেছে নিন। সবার জন্য শুভ কামনা।</p>
                        </div>
                    </div>

                    <a class="btn btn-primary continuexx agr-btn pull-right">Read & Proceed for Next Step</a>
                 </div>


                <div role="tabpanel" class="tab-pane" id="personal_tab">
                  <h3 class="form-tab-title" >Personal Information</h3>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group agr-fields margin-bottom0">
                       <label>Name</label>
                        <input type="text" class="form-control" placeholder="<?php echo e(trans('words.name')); ?> *" name="name" id="name" value="<?php echo e(old('name')); ?>" minlength="3" maxlength="30"/>
                        <!-- required -->
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
                     <div class="col-md-6">
                        <div class="form-group agr-fields margin-bottom0">
                          <label>Date of Birth</label>
                        <div class="example">
                          <input class="form-control" type="hidden" id="example4">
                        </div>
                   
                          <span id="agent_dob_error"></span>
                          <?php if($errors->has('agent_dob')): ?>
                          <span style="color:#fb0303">
                              <?php echo e($errors->first('agent_dob')); ?>

                          </span>
                          <?php endif; ?> 
                        </div>   
                      </div>


                    <div class="col-md-6">
                       <div class="form-group agr-fields margin-bottom0">
                          <label>Location</label>
                          <div class="form-group mult-select-opt">
                            <select id="example-getting-started" name="agent_location">
                              <?php $allUpazila=\App\Upazila::orderBy('id','asc')->get(); ?>
                              <?php $__currentLoopData = $allUpazila; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upazila): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($upazila->id); ?>"><?php echo e($upazila->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                            </select>
                            <?php if($errors->has('agent_location')): ?>
                            <span style="color:#fb0303">
                                <?php echo e($errors->first('agent_location')); ?>

                            </span>
                          <?php endif; ?>
                          </div>
                        </div>
                    </div>

                  </div> <!--/.row-->

                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group agr-fields margin-bottom0">
                      <label>Contact 1</label>
                        <input type="text" class="form-control" placeholder="<?php echo e('Contact 1 *'); ?>" name="phone" id="phone" value="<?php echo e(old('phone')); ?>" minlength="11" maxlength="11"/>
                        <!-- required -->
                        <span id="phone_error"></span>
                        <?php if($errors->has('phone')): ?>
                          <span style="color:#fb0303">
                              <?php echo e($errors->first('phone')); ?>

                          </span>
                          <?php endif; ?> 
                      </div>     
                    </div>

                    <div class="col-md-6">
                       <div class="form-group agr-fields margin-bottom0">
                       <label>Contact 2</label>
                         <input type="text" class="form-control" placeholder="<?php echo e('Contact 2'); ?>" name="agent_contact2" value="<?php echo e(old('agent_contact2')); ?>" maxlength="11"/> 
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
                      <div class="form-group agr-fields margin-bottom0">
                         <label>Email</label>
                        <input type="email" class="form-control" placeholder="<?php echo e(trans('words.email')); ?> *" name="email" id="email" value="<?php echo e(old('email')); ?>" maxlength="80"/>
                        <!-- required -->
                        <span id="email_error"></span>
                        <?php if($errors->has('email')): ?>
                          <span style="color:#fb0303">
                              <?php echo e($errors->first('email')); ?>

                          </span>
                        <?php endif; ?> 
                      </div> 
                    </div>

                    <div class="col-md-12">
                      <div class="form-group agr-fields margin-bottom0">
                        <label>Confirm Email</label>
                        <input type="email" class="form-control" placeholder="<?php echo e(trans('words.confirm_email')); ?> *" name="confirm_email" id="confirm_email" value="<?php echo e(old('confirm_email')); ?>" maxlength="80"/>
                        <!-- required -->
                        <span id="confirm_email_error"></span>
                        <span id="match_email_error"></span>
                        <?php if($errors->has('email')): ?>
                          <span style="color:#fb0303">
                              <?php echo e($errors->first('email')); ?>

                          </span>
                        <?php endif; ?> 
                      </div> 
                    </div>

                    <div class="col-md-12">
                      <div class="form-group agr-fields margin-bottom0">
                      <label><?php echo e(trans('words.present_address')); ?> </label>
                        <textarea type="email" class="form-control" placeholder="<?php echo e(trans('words.present_address')); ?> *" name="agent_present_address" id="agent_present_address" maxlength="66"><?php echo e(old('agent_present_address')); ?></textarea>
                        <!-- required -->
                        <span id="agent_present_address_error"></span>
                        <?php if($errors->has('agent_present_address')): ?>
                          <span style="color:#fb0303">
                              <?php echo e($errors->first('agent_present_address')); ?>

                          </span>
                          <?php endif; ?>
                      </div> 
                    </div>

                    <div class="col-md-12">
                      <div class="form-group agr-fields margin-bottom0">
                      <label><?php echo e(trans('words.permanent_address')); ?></label>
                        <textarea type="text" class="form-control" placeholder="<?php echo e(trans('words.permanent_address')); ?>" name="agent_permanent_address" maxlength="66"><?php echo e(old('agent_permanent_address')); ?></textarea>
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
                      <div class="form-group agr-fields margin-bottom0">
                      <label>NID Number</label>
                        <input type="text" class="form-control" placeholder="<?php echo e('NID Number'); ?> *" name="agent_nid" id="agent_nid" value="<?php echo e(old('agent_nid')); ?>" maxlength="16"/>
                        <!-- required -->
                        <span id="agent_nid_error"></span>
                            <?php if($errors->has('agent_nid')): ?>
                            <span style="color:#fb0303">
                                <?php echo e($errors->first('agent_nid')); ?>

                            </span>
                            <?php endif; ?> 
                      </div>
                    </div> 

                    <div class="col-md-6">
                        <div class="form-group agr-fields margin-bottom0">
                        <label>Passport Number</label>
                            <input type="text" class="form-control" placeholder="<?php echo e('Passport Number'); ?>" name="agent_passport"/ value="<?php echo e(old('agent_passport')); ?>" maxlength="22"> 
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
                            <div class="form-group agr-fields margin-bottom0">
                             <label>Father's Name </label>
                                <input type="text" class="form-control" placeholder="Father's Name *" name="agent_father" id="agent_father" value="<?php echo e(old('agent_father')); ?>" maxlength="30"/>
                                <!-- required  -->
                                <span id="agent_father_error"></span>
                                <?php if($errors->has('agent_father')): ?>
                                    <span style="color:#fb0303">
                                    <?php echo e($errors->first('agent_father')); ?>

                                    </span>
                                <?php endif; ?> 
                            </div>     
                        </div>

                        <div class="col-md-12">
                            <div class="form-group agr-fields ">
                            <label>Mother's Name </label>
                                <input type="text" class="form-control" placeholder="Mother's Name *" name="agent_mother" id="agent_mother" value="<?php echo e(old('agent_mother')); ?>" maxlength="30"/>
                                <!-- required -->
                                <span id="agent_mother_error"></span>
                                <?php if($errors->has('agent_mother')): ?>
                                    <span style="color:#fb0303">
                                    <?php echo e($errors->first('agent_mother')); ?>

                                    </span>
                                <?php endif; ?> 
                            </div>
                        </div>
                        <!-- <div class="col-md-12">
                            <div class="form-group agr-fields">
                                <input type="password" class="form-control" placeholder="Password *" name="password" id="password" minlength="6" maxlength="12"/>
                                 
                                <span id="password_error"></span>
                                <?php if($errors->has('password')): ?>
                                    <span style="color:#fb0303">
                                    <?php echo e($errors->first('password')); ?>

                                    </span>
                                <?php endif; ?> 
                            </div>
                        </div>   -->
                  </div> <!--/.row--> 
                  
                  <a class="btn btn-primary continue_send agr-btn pull-right">Save & Proceed for Next Step</a>
                  <a class="btn btn-primary back agr-btn pull-right">Go Back</a>
                </div> <!--tab1-->

                <div role="tabpanel" class="tab-pane" id="contact_tab">
                  <div class="contact-verification">
                      <h3 class="form-tab-title">Verification </h3>
                        <div id="show_verify_msg"></div>
                        <div id="show_verify_msg2"></div>

                        <div class="form-group agr-fields">
                          <input type="text" class="form-control" placeholder="<?php echo e('Verification Code'); ?> *" name="password" id="verify" maxlength="6"/>
                          <span id="verify_error"></span>
                        </div>
                      <a class="btn btn-primary continue123 agr-btn pull-right">Continue</a>
                      <a class="btn btn-primary back agr-btn pull-right">Go Back</a>


                  </div>
                </div><!--Verfication-tab-->

                <div role="tabpanel" class="tab-pane" id="education_tab">
                  <div class="education1"> 
                   <div class="education4">
                     <h3 class="form-tab-title">Education Level</h3>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group agr-fields">
                            <input type="text" class="form-control" placeholder="Institute *" name="institue[]" id="institue" maxlength="30"/>
                            <span id="institue_error"></span>
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
                            <input type="text" class="form-control" id="agent_result" placeholder="Result *" name="agent_result[]"/>
                            <span id="agent_result_error"></span>
                            <?php if($errors->has('agent_result')): ?>
                              <span style="color:#fb0303">
                                  <?php echo e($errors->first('agent_result')); ?>

                              </span>
                              <?php endif; ?> 
                          </div>     
                        </div>

                        <div class="col-md-6">
                          <div class="form-group agr-fields search-fields">
                              <select name="agent_degree[]" class="form-control" id="agent_degree">
                                  <option value="" style="color:#88888">Select Degree</option>
                                  <option value="SSC">SSC</option>
                                  <option value="HSC">HSC</option>
                                  <option value="Bachelor">Bachelor</option>
                                  <option value="Masters">Masters</option>
                                  <option value="BBA">BBA</option>
                                  <option value="MBA">MBA</option>
                              </select>
                              <span id="agent_degree_error"></span>
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
                            <input type="text" class="form-control" placeholder="Institute *" name="institue[]" maxlength="30"/>
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
                                <input type="text" class="form-control" placeholder="Result *" name="agent_result[]" />
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
                  <a class="btn btn-primary continue11 agr-btn pull-right">Continue</a>
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
                                <input type="text" class="form-control" placeholder="Company *" name="company[]" id="company" maxlength="100"/>
                                 <span id="company_error"></span>
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
                            <div class="form-group agr-fields">
                              <input type="text" name="start_date[]" class="datepicker3 form-control" format="mm-yyyy" id="start_date" placeholder="Start Date *" autocomplete="off"/>
                              <!-- required -->
                              <span id="start_date_error"></span>
                              <?php if($errors->has('start_date')): ?>
                              <span style="color:#fb0303">
                                  <?php echo e($errors->first('start_date')); ?>

                              </span>
                              <?php endif; ?> 
                            </div>   
                          </div>
                          <div class="col-md-6">
                            <div class="form-group agr-fields">
                              <input type="text" name="end_date[]" class="datepicker3 form-control" format="mm-yyyy" id="end_date" placeholder="End Date *" autocomplete="off"/>
                              <!-- required -->
                              <span id="end_date_error"></span>
                              <?php if($errors->has('end_date')): ?>
                              <span style="color:#fb0303">
                                  <?php echo e($errors->first('end_date')); ?>

                              </span>
                              <?php endif; ?> 
                            </div>   
                          </div>
                       </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group agr-fields search-fields" id="tab_up_position">

                                <input type="text" list="positionList" name="position[]" placeholder="Select Position"  class="form-control" id="position">
                                <datalist id="positionList">
                                 <?php $__currentLoopData = $position; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($position_data->name); ?>">
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </datalist>

                                


                                <span id="position_error"></span>
                                <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModalCenter"> + Add/Edit Position</button>

                                <?php if($errors->has('position')): ?>
                                <span style="color:#fb0303">
                                <?php echo e($errors->first('position')); ?>

                                </span>
                                <?php endif; ?>    
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="form-group agr-fields search-fields" id="tab_up_department">

                                <input type="text" list="departmentList" name="department[]" placeholder="Select Department"  class="form-control" id="department">
                                <datalist id="departmentList">
                                    <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($department_data->name); ?>">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </datalist>

                                

                                <span id="department_error"></span>
                                <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModalCenter2">+ Add/Edit Department</button>
                                <br>
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
                              <input type="text" class="form-control" placeholder="<?php echo e('Company'); ?>" name="company[]" maxlength="100"/> 
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
                              <div class="form-group agr-fields">
                                <input type="text" name="start_date[]" class="datepicker2 form-control" format="mm-yyyy" id="start_date" placeholder="Start Date *" autocomplete="off"/>
                                <!-- required -->
                                <span id="start_date_error"></span>
                                <?php if($errors->has('start_date')): ?>
                                <span style="color:#fb0303">
                                    <?php echo e($errors->first('start_date')); ?>

                                </span>
                                <?php endif; ?> 
                              </div>   
                            </div>

                            <div class="col-md-6">
                              <div class="form-group agr-fields">
                                <input type="text" name="end_date[]" class="datepicker2 form-control" format="mm-yyyy" id="end_date" placeholder="End Date *" autocomplete="off"/>
                                <!-- required -->
                                <span id="end_date_error"></span>
                                <?php if($errors->has('end_date')): ?>
                                <span style="color:#fb0303">
                                    <?php echo e($errors->first('end_date')); ?>

                                </span>
                                <?php endif; ?> 
                              </div>   
                            </div>
                       </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group agr-fields search-fields" id="tab_up_position1">

                               <input type="text" list="positionList2" placeholder="Select Position"  name="position[]" class="form-control" id="position">
                                <datalist id="positionList2">
                                 <?php $__currentLoopData = $position; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($position_data->name); ?>">
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </datalist>

                               

                                  <?php if($errors->has('position')): ?>
                                <span style="color:#fb0303">
                                    <?php echo e($errors->first('position')); ?>

                                </span>
                                <?php endif; ?> 
                            </div> 
                          </div> 

                          <div class="col-md-6">
                            <div class="form-group agr-fields search-fields" id="tab_up_department1">
                               <input type="text" list="departmentList2" name="department[]" class="form-control" placeholder="Select Department" id="department">
                                <datalist id="departmentList2">
                               
                                    <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($department_data->name); ?>">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </datalist>
                                
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
                  <a class="btn btn-primary continueddd agr-btn pull-right">Continue</a>
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
                            <input type="text" class="form-control" placeholder="Skill" name="skill[]"/> 
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
                              <input type="text" class="form-control" placeholder="Skill" name="skill[]"/> 
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
                  <a class="btn btn-primary continuess agr-btn pull-right">Continue</a>
                  <a class="btn btn-primary back agr-btn pull-right">Go Back</a>
                  <a class="extra-fields-skill btn btn-primary  agr-btn" href="#">+ Add More</a>
                </div> <!--tab4-->
                <div role="tabpanel" class="tab-pane" id="social_tab">
                    <h3 class="form-tab-title">Social</h3>
                    <div class="social-tab-content">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="form-group agr-fields">
                                <input type="text" class="form-control" id="facebook" placeholder="Facebook Profile" name="facebook"/>
                                <span id="facebook_error"></span>
                                <?php if($errors->has('facebook')): ?>
                                <span style="color:#fb0303">
                                    <?php echo e($errors->first('facebook')); ?>

                                </span>
                                <?php endif; ?> 
                              </div>
                              <div class="form-group agr-fields">
                                <input type="text" class="form-control" placeholder="LinkedIn Profile" name="linkedin"/>
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
                  <input type="checkbox" name="terms_condition" class="tram_condition" value=""><span style="color: white" class="accecpt">Accepts Terms and Conditions</span> <a href="#" style="color: cyan"><b>Read More</b></a>
                  <p>
                  <span id="tram_condition_error"></span></p>
                  <button class="btn btn-primary continue2 agr-btn pull-right">Submit</button>
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
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add/Edit Postion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="postion_show"></div>
                <div class="modal-body" style="background-color: currentcolor;">
                    <div class="row">
                        <div class="col-md-12">
                          <div class="form-group agr-fields">
                            <input type="text" class="form-control" placeholder="Postion" id="postion_name" id="postion_name"/>
                            <span id="postion_name_error"></span>
                          </div>     
                        </div>
                    </div>
                </div>
                <div class="modal-footer">  
                   <button type="button" class="btn btn-primary add_position">Ok</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Department-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add/Edit Department</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="department_show"></div>
                <div class="modal-body" style="background-color: currentcolor;">
                    <div class="row">
                        <div class="col-md-12">
                          <div class="form-group agr-fields">
                            <input type="text" class="form-control" placeholder="Department" id="department_name" id="department_name"/>
                            <span id="department_name_error"></span>
                          </div>     
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                   
                   <button type="button" class="btn btn-primary add_department">Ok</button>
                </div>
            </div>
        </div>
    </div>
   
  <?php
  $last_date = date("Y")-18;
  ?>
  <input type="hidden" id="year" value="<?php echo $last_date; ?>">

<?php $__env->stopSection(); ?>
<?php $__env->startSection("styles"); ?>
    <style>
    button.multiselect.dropdown-toggle.btn.btn-default {
          background: #fff !important;
          width: 100%;
          min-width: 292px;
          text-align: left;
          color: #9E9E9E;
      }
        button.multiselect.dropdown-toggle.btn.btn-default {
            max-width:100%;
            height: 30px;
            border: 2px solid #ddd;
        }
        li.multiselect-item.multiselect-filter .input-group .input-group-addon,
        input.form-control.multiselect-search {
            height: 30px !important;
        }
        body.submit-property .information-box .box-content .field-row .input-group .input-group-addon {
            font-size: 1.2em;
        }
        .form-group.mult-select-opt {
            margin-bottom: 0;
        }
        input.form-control.multiselect-search {
            border: 2px solid #ddd;
        }
        ul.multiselect-container.dropdown-menu.show li label{
              color: #000;
         }

         ul.multiselect-container.dropdown-menu.show li label input{
           margin-top: -4px;
         }
         .form-group.mult-select-opt {
            margin-bottom: 0;
            display: inline-block;
        }
        .form-group.agr-fields.margin-bottom0 {
            margin-bottom: 0px;
        }

         
      </style>   
      <link rel="stylesheet" href="<?php echo e(URL::asset('site_assets/dist-select/css/bootstrap-multiselect.css')); ?>" type="text/css"/>
  <link rel="stylesheet" href="<?php echo e(URL::asset('site_assets/datepicker/datepicker.css')); ?>">
  <link href="<?php echo e(URL::asset('site_assets/date-listdown/styles.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection("scripts"); ?>
  <!-- Plugins -->
  <script src="<?php echo e(URL::asset('site_assets/datepicker/plugins.min.js')); ?>"></script>
  <!-- App Scripts -->
  <script src="<?php echo e(URL::asset('site_assets/datepicker/scripts.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('site_assets/date-listdown/jquery.date-dropdowns.js')); ?>"></script>

  <script type="text/javascript" src="<?php echo e(URL::asset('site_assets/dist-select/js/bootstrap-multiselect.js')); ?>"></script>

<script type="text/javascript">
  //Dropdown selection
  $(document).ready(function() {
      $('#example-getting-started').multiselect({
           nonSelectedText: 'Select Location',
            enableFiltering: true,
            maxHeight: 300,
            includeSelectAllOption: true,
            dropUp: true
      });
  });
</script>

  <script>

      $("#example4").dateDropdowns({
          submitFieldName: 'agent_dob',
          submitFormat: "yyyy-mm-dd"
        });

      $(".datepicker3").datepicker( {
          format: "mm-yyyy",
          viewMode: "months", 
          minViewMode: "months",
      });

      $(".datepicker2").datepicker( {
          format: "mm-yyyy",
          viewMode: "months", 
          minViewMode: "months",
      });


    $('.add_position').click(function(){
        var postion_name = $("#postion_name").val();
        if(postion_name==''){
            $('#postion_name').css("border", "red solid 1px");
            $("#postion_name_error").html("<i style='color:white'>Postion Required.</i>");
            return false;
        }
        $.ajax({
            type:"GET",
            url:"<?php echo e(url('add/position')); ?>",
            data:{postion_name:postion_name},
            success:function(data){
                if(data==1){
                    $('.postion_show').html("<div class='alert-success center' style='text-align:center'>Position Added Successfully.</div>");
                    $("#tab_up_position").load(location.href+" #tab_up_position>*","");
                    $("#tab_up_position1").load(location.href+" #tab_up_position1>*","");
                    
                    $('#exampleModalCenter').modal('toggle');
                    $('body').removeClass('modal-open');
                    $('body').css('padding-right', '0px');
                    $('.modal-backdrop').remove();
                    // $('#exampleModalCenter').modal('hide');
                    //setTimeout(function(){ $('#exampleModalCenter').modal('hide');},1000);
                }
                else{
                    $('.postion_show').html("<div class='alert-danger' style='text-align:center'>Position Already Exits.</div>");
                }
            }
       });
    });
    $('.add_department').click(function(){
        var department_name = $("#department_name").val();
        if(department_name==''){
            $('#department_name').css("border", "red solid 1px");
            $("#department_name_error").html("<i style='color:white'>Department Required.</i>");
            return false;
        }
        $.ajax({
            type:"GET",
            url:"<?php echo e(url('add/department')); ?>",
            data:{department_name:department_name},
            success:function(data){
                if(data==1){
                    $('.department_show').html("<div class='alert-success' style='text-align:center'>Department Added Successfully.</div>");
                    $("#tab_up_department").load(location.href+" #tab_up_department>*","");
                    $("#tab_up_department1").load(location.href+" #tab_up_department1>*","");
                    $('#exampleModalCenter2').modal('toggle');
                    $('body').removeClass('modal-open');
                    $('body').css('padding-right', '0px');
                    $('.modal-backdrop').remove();
                }
                else{
                    $('.department_show').html("<div class='alert-danger' style='text-align:center'>Department Already Exits.</div>");
                }
            }
       });
    });
     
    // tab click continue
    $('.continue_send').click(function(){
 
        var name = $("#name").val();
        var agent_dob = $("#agent_dob").val();
        var phone = $("#phone").val();
        var email = $("#email").val();
        var confirm_email = $("#confirm_email").val();
        var agent_present_address = $("#agent_present_address").val();
        var agent_nid = $("#agent_nid").val();
        var agent_father = $("#agent_father").val();
        var agent_mother = $("#agent_mother").val();
        
        //var password = $("#password").val();
         
        //check 18 years checked
        var year = $("#year").val();
        if (agent_dob >= year) {
            $('#agent_dob').css("border", "red solid 1px");
            $("#agent_dob_error").html("<i style='color:white'>Date of birth is under 18 years of age.</i>");
            return false;
        }

        if(name==''){
            $('#name').css("border", "red solid 1px");
            $("#name_error").html("<i style='color:white'>Name Required.</i>");
            return false;
        }
        if(agent_dob==''){
            $('#name').css("border", "");
            $("#name_error").html("");

            $('#agent_dob').css("border", "red solid 1px");
            $("#agent_dob_error").html("<i style='color:white'>Date Of Brith Required.</i>");
            return false;
        }
        if(phone==''){
            $('#name').css("border", "");
            $("#name_error").html("");
            $('#agent_dob').css("border", "");
            $("#agent_dob_error").html("");

            $('#phone').css("border", "red solid 1px");
            $("#phone_error").html("<i style='color:white'>Contact 1 Required.</i>");
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
            $("#email_error").html("<i style='color:white'>Email Required.</i>");
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
            $("#email_error").html("<i style='color:white'>Email Not Valid.</i>");
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
            $("#confirm_email_error").html("<i style='color:white'>Confirm Email Required.</i>");
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
            $("#confirm_email_error").html("<i style='color:white'>Confirm Email Not Valid.</i>");
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
            $("#agent_present_address_error").html("<i style='color:white'>Present Address Required.</i>");
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
            $("#agent_nid_error").html("<i style='color:white'>NID Number Required.</i>");
            return false;
        }
        if(agent_dob !=''){
            var minLength = 10;
            var maxLength = 16;
            var value = $("#agent_nid").val();
            if (value.length < minLength){
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
                $("#agent_nid_error").html("<i style='color:white'>NID Number Minimum 10 Character.</i>");
                return false;
            }
            else if (value.length > maxLength){
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
                $("#agent_nid_error").html("<i style='color:white'>NID Number Maxmimun 16 Character.</i>");
                return false;
            }  
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
            $("#agent_father_error").html("<i style='color:white'>Father's Required.</i>");
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
            $("#agent_mother_error").html("<i style='color:white'>Mother's Required.</i>");
            return false;
        }

        $.ajax({
          type:"GET",
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

    $('.continuexx').click(function(){
      $('.nav-tabs > .active').next('li').find('a').trigger('click');
    })

    // verify required
    $('.continue123').click(function(){
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

    $('.continuess').click(function(){
        $('.nav-tabs > .active').next('li').find('a').trigger('click');
    });

    $('.continue11').click(function(){
        var institue = $("#institue").val();
        var agent_result = $("#agent_result").val();
        var agent_degree = $("#agent_degree").val();
      

        if(institue==''){
            $('#institue').css("border", "red solid 1px"); 
            $("#institue_error").html("<i style='color:white'>Institue Required.</i>");
            return false;
        }
        if(agent_result==''){
            $('#institue').css("border", ""); 
            $("#institue_error").html("");
            $('#agent_result').css("border", "red solid 1px");
            $("#agent_result_error").html("<i style='color:white'>Result Required.</i>");
            return false;
        }
        if(agent_degree==''){
            $('#institue').css("border", ""); 
            $("#institue_error").html("");
            $('#agent_result').css("border", "");
            $("#agent_result_error").html("");
            $('#agent_degree').css("border", "red solid 1px");
            $("#agent_degree_error").html("<i style='color:white'>Degree Required.</i>");
            return false;
        }
        $('.nav-tabs > .active').next('li').find('a').trigger('click');
    });

    $('.continueddd').click(function(){
        var company = $("#company").val();
        var start_date = $("#start_date").val();
        var position = $("#position").val();
        var department = $("#department").val();

        if(company==''){
            $('#company').css("border", "red solid 1px"); 
            $("#company_error").html("<i style='color:white'>Company Required.</i>");
            return false;
        }
        if(start_date==''){
            $('#company').css("border", "");
            $("#company_error").html("");

            $('#start_date').css("border", "red solid 1px"); 
            $("#start_date_error").html("<i style='color:white'>Start Date Required.</i>");
            return false;
        }
        
        if(position==''){
            $('#company').css("border", ""); 
            $("#company_error").html("");
            $('#start_date').css("border", "");
            $("#start_date_error").html("");

            $('#position').css("border", "red solid 1px");
            $("#position_error").html("<i style='color:white'>Position Required.</i>");
            return false;
        }
        if(department==''){
            $('#company').css("border", ""); 
            $("#company_error").html("");
            $('#position').css("border", "");
            $("#position_error").html("");
            $('#department').css("border", "red solid 1px");
            $("#department_error").html("<i style='color:white'>Department Required.</i>");
            return false;
        }
        $('.nav-tabs > .active').next('li').find('a').trigger('click');
    });

    //facebook required
    $('.continue2').click(function(){
       
        var tram_condition = $(".tram_condition").val();

        if(tram_condition==''){
            $('.tram_condition').css("border", "red solid 1px");
            $('.accecpt').css("color", "red");

            $("#tram_condition_error").html("<i style='color:white'>Terms & Conditions Required.</i>");
            return false;
        }
        $('.nav-tabs > .active').next('li').find('a').trigger('click');
    });
 

    // Team & Condition check
    $('input[type="checkbox"]').click(function(){
        if($(this).prop("checked") == true){
           $('.tram_condition').val(1);
        }
        else if($(this).prop("checked") == false){
           $('.tram_condition').val('');
        }
    });
     
    $('.back').click(function(){
      $('.nav-tabs > .active').prev('li').find('a').trigger('click');
      
    });

    $("#email").keyup(function(){
        var email = $("#email").val();
        var confirm_email = $("#confirm_email").val();
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(email)) {
           //alert('Please provide a valid email address');
           $("#email_error").html("<i style='color:white'>"+ email +" is not a valid email</i>");
           email.focus;
           return false;
        } else {
            if(confirm_email !=''){
              if(email!=confirm_email){
                $("#match_email_error").html("<i style='color:white'>Email Not Match</i>");
              }
              else{
                $("#match_email_error").html("");
              }
            }
            
            $("#email_error").html("");
        }
     });

    $("#confirm_email").keyup(function(){
        var confirm_email = $("#confirm_email").val();
        var email = $("#email").val();
         
        if(email!=confirm_email){
            $("#match_email_error").html("<i style='color:white'>Email Not Match</i>");
        }
        else{
            $("#match_email_error").html("");
        }
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(confirm_email)) {
           //alert('Please provide a valid email address');
           $("#confirm_email_error").html("<i style='color:white'>"+ confirm_email +" is not a valid email</i>");
           confirm_email.focus;
           return false;
        } else {
            $("#confirm_email_error").html("");
        }
     });

    $("#password").keyup(function(){
        var minLength = 6;
        var maxLength = 16;
        var value = $("#password").val();
        if (value.length < minLength){
            $('#password').css("border", "red solid 1px"); 
            $("#password_error").html("<i style='color:white'>Password Minimum 6 Character.</i>");
            return false;
        }
        else{
            $('#password').css("border", "");
            $("#password_error").html("");
        }
     });

     $("#phone").keyup(function(){
        var minLength = 11;
        var maxLength = 11;
        var value = $("#phone").val();
        if (value.length < minLength){
            $('#phone').css("border", "red solid 1px"); 
            $("#phone_error").html("<i style='color:white'>Phone Minimum 11 Character.</i>");
            return false;
        }
        
        else{
            $('#phone').css("border", "");
            $("#phone_error").html("");
        }
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
    
  // $('.datepicker2').blueDatePicker();
    $(".datepicker2").datepicker( {
          format: "mm-yyyy",
          viewMode: "months", 
          minViewMode: "months",
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
<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/pages/agentregister.blade.php ENDPATH**/ ?>