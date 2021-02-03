<?php $__env->startSection("content"); ?>

<div id="main">
	<div class="page-header">
		<h2> <?php echo e(trans('words.settings')); ?></h2>
		<a href="<?php echo e(URL::to('admin/dashboard')); ?>" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> <?php echo e(trans('words.back')); ?></a>
	  
	</div>
	<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <ul style="padding-bottom: 10px;">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <li style="list-style: none;"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span></button></li>
        </ul>

    </div>
<?php endif; ?>
	 <?php if(Session::has('flash_message')): ?>
				    <div class="alert alert-success">
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
				        <?php echo e(Session::get('flash_message')); ?>

				    </div>
				<?php endif; ?>
    <div role="tabpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#account" aria-controls="account" role="tab" data-toggle="tab"><?php echo e(trans('words.general_settings')); ?></a>
        </li>
        <li role="presentation">
            <a href="#smtp_email" aria-controls="smtp_email" role="tab" data-toggle="tab"><?php echo e(trans('words.smtp_email')); ?></a>
        </li>
        <li role="presentation">
            <a href="#payment_info" aria-controls="payment_info" role="tab" data-toggle="tab"><?php echo e(trans('words.payment_info')); ?></a>
        </li>
        <li role="presentation">
            <a href="#layout_settings" aria-controls="layout_settings" role="tab" data-toggle="tab"><?php echo e(trans('words.layout')); ?></a>
        </li>        
        <li role="presentation">
            <a href="#social_links" aria-controls="social_links" role="tab" data-toggle="tab"><?php echo e(trans('words.social')); ?></a>
        </li>
        <li role="presentation">
            <a href="#share_comments" aria-controls="share_comments" role="tab" data-toggle="tab">AddThis & Disqus</a>
        </li>         
        <li role="presentation">
            <a href="#contact_us" aria-controls="contact_us" role="tab" data-toggle="tab"><?php echo e(trans('words.contact_us')); ?></a>
        </li>         
        
        <li role="presentation">
            <a href="#other_Settings" aria-controls="other_Settings" role="tab" data-toggle="tab"><?php echo e(trans('words.other_settings')); ?></a>
        </li>        
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content tab-content-default">
        <div role="tabpanel" class="tab-pane active" id="account">             
            <?php echo Form::open(array('url' => 'admin/settings','class'=>'form-horizontal padding-15','name'=>'account_form','id'=>'account_form','role'=>'form','enctype' => 'multipart/form-data')); ?>

                

                <div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label"><?php echo e(trans('words.logo')); ?></label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                <?php if($settings->site_logo): ?>
                                 
									<img src="<?php echo e(URL::asset('upload/'.$settings->site_logo)); ?>" width="150" alt="person">
								<?php endif; ?>
								                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="site_logo" class="filestyle">
                                <small class="text-muted bold">Size 200x75px</small>
                            </div>
                        </div>
	
                    </div>
                </div>
				<div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label"><?php echo e(trans('words.favicon')); ?></label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                <?php if($settings->site_favicon): ?>
                                 
									<img src="<?php echo e(URL::asset('upload/'.$settings->site_favicon)); ?>" alt="person">
								<?php endif; ?>
								                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="site_favicon" class="filestyle">
                                <small class="text-muted bold">Size 16x16px</small>
                            </div>
                        </div>
	
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.site_name')); ?></label>
                    <div class="col-sm-9">
                        <input type="text" name="site_name" value="<?php echo e($settings->site_name); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.site_email')); ?></label>
                    <div class="col-sm-9">
                        <input type="email" name="site_email" value="<?php echo e($settings->site_email); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.currency_sign')); ?></label>
                    <div class="col-sm-9">
                        <input type="text" name="currency_sign" value="<?php echo e($settings->currency_sign); ?>" class="form-control" value="" placeholder="$">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.google_map_key')); ?></label>
                    <div class="col-sm-9">
                        <input type="text" name="google_map_key" value="<?php echo e($settings->google_map_key); ?>" class="form-control" value="" placeholder="xxxx">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.default_timezone')); ?></label>
                    <div class="col-sm-4"> 
                        <select class="selectpicker show-tick form-control" name="time_zone" data-live-search="true">                               
                                <?php $__currentLoopData = generate_timezone_list(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$tz_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($key); ?>" <?php if($settings->time_zone==$key): ?> selected <?php endif; ?>><?php echo e($tz_data); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                            
                            </select>
                        
                    </div>
                </div>
                <hr>                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.recaptcha')); ?></label>
                    <div class="col-sm-4"> 
                        <select name="recaptcha" id="basic" class="selectpicker show-tick form-control" data-live-search="true">
                                 
                                <option value="1" <?php if($settings->recaptcha== 1): ?> selected <?php endif; ?>> On</option>
                                <option value="0" <?php if($settings->recaptcha== 0): ?> selected <?php endif; ?>> Off</option>
  
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.recaptcha_secret_key')); ?></label>
                    <div class="col-sm-9">
                        <input type="text" name="recaptcha_secret_key" value="<?php echo e($settings->recaptcha_secret_key); ?>" class="form-control" value="" placeholder="xxxx">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.recaptcha_site_key')); ?></label>
                    <div class="col-sm-9">
                        <input type="text" name="recaptcha_site_key" value="<?php echo e($settings->recaptcha_site_key); ?>" class="form-control" value="" placeholder="xxxx">
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.site_description')); ?></label>
                    <div class="col-sm-9">
                        <textarea type="text" name="site_description" class="form-control" rows="5" placeholder="A few words about site"><?php echo e($settings->site_description); ?></textarea>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.site_keywords')); ?></label>
                    <div class="col-sm-9">
                        <textarea type="text" name="site_keywords" class="form-control" rows="5" placeholder="Seo keywords"><?php echo e($settings->site_keywords); ?></textarea>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.footer_widget1_title')); ?></label>
                    <div class="col-sm-9">
                        <input type="text" name="footer_widget1_title" value="<?php echo e(stripslashes($settings->footer_widget1_title)); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.footer_widget1')); ?></label>
                    <div class="col-sm-9">
                        <textarea type="text" name="footer_widget1" class="form-control" rows="5" placeholder=""><?php echo e(stripslashes($settings->footer_widget1)); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.footer_widget2_title')); ?></label>
                    <div class="col-sm-9">
                        <input type="text" name="footer_widget2_title" value="<?php echo e(stripslashes($settings->footer_widget2_title)); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.footer_widget2')); ?></label>
                    <div class="col-sm-9">
                        <textarea type="text" name="footer_widget2" class="form-control" rows="5" placeholder=""><?php echo e(stripslashes($settings->footer_widget2)); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.footer_widget3_title')); ?></label>
                    <div class="col-sm-9">
                        <input type="text" name="footer_widget3_title" value="<?php echo e(stripslashes($settings->footer_widget3_title)); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.footer_widget3')); ?></label>
                    <div class="col-sm-9">
                        <textarea type="text" name="footer_widget3" class="form-control" rows="5" placeholder=""><?php echo e(stripslashes($settings->footer_widget3)); ?></textarea>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.copyright_text')); ?></label>
                    <div class="col-sm-9">
                        <textarea type="text" name="site_copyright" class="form-control" rows="5"><?php echo e($settings->site_copyright); ?></textarea>
                    </div>
                </div>
                <hr/>
                  <div class="form-group"> 
                   <label class="col-sm-3 control-label"><b style="font-size: 18px;"><?php echo e(trans('words.gdpr_cookie_consent')); ?></b></label>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo e(trans('words.gdpr_cookie_title')); ?></label>
                    <div class="col-sm-9">
                      <input type="text" name="gdpr_cookie_title" value="<?php echo e(isset($settings->gdpr_cookie_title) ? stripslashes($settings->gdpr_cookie_title) : null); ?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo e(trans('words.gdpr_cookie_text')); ?></label>
                    <div class="col-sm-9">
                      <input type="text" name="gdpr_cookie_text" value="<?php echo e(isset($settings->gdpr_cookie_text) ? stripslashes($settings->gdpr_cookie_text) : null); ?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo e(trans('words.gdpr_cookie_url')); ?></label>
                    <div class="col-sm-9">
                      <input type="text" name="gdpr_cookie_url" value="<?php echo e(isset($settings->gdpr_cookie_url) ? stripslashes($settings->gdpr_cookie_url) : null); ?>" class="form-control">
                    </div>
                  </div>
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary"><?php echo e(trans('words.save_changes')); ?></button>
                         
                    </div>
                </div>

            <?php echo Form::close(); ?> 
        </div>
        <div role="tabpanel" class="tab-pane" id="smtp_email">
            
            <?php echo Form::open(array('url' => 'admin/smtp_email','class'=>'form-horizontal padding-15','name'=>'social_links_form','id'=>'social_links_form','role'=>'form')); ?>

                 
                 
                <h5 class="m-b-5"><i class="fa fa-envelope"></i> <b><?php echo e(trans('words.smtp_settings')); ?></b></h5>
                 
                
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo e(trans('words.smtp_host')); ?>*</label>
                    <div class="col-sm-8">
                      <input type="text" name="smtp_host" value="<?php echo e(isset($settings->smtp_host) ? $settings->smtp_host : null); ?>" class="form-control" placeholder="mail.example.com">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo e(trans('words.smtp_port')); ?>*</label>
                    <div class="col-sm-8">
                      <input type="text" name="smtp_port" value="<?php echo e(isset($settings->smtp_port) ? $settings->smtp_port : null); ?>" class="form-control" placeholder="587">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo e(trans('words.email')); ?>*</label>
                    <div class="col-sm-8">
                      <input type="text" name="smtp_email" value="<?php echo e(isset($settings->smtp_email) ? $settings->smtp_email : null); ?>" class="form-control" placeholder="info@example.com">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo e(trans('words.password')); ?>*</label>
                    <div class="col-sm-8">
                      <input type="password" name="smtp_password" value="<?php echo e(isset($settings->smtp_password) ? $settings->smtp_password : null); ?>" class="form-control" placeholder="****">
                    </div>
                  </div>   
                  <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo e(trans('words.encryption')); ?></label>
                      <div class="col-sm-8">
                            <select class="form-control" name="smtp_encryption">                               
                                 
                                <option value="TLS" <?php if($settings->smtp_encryption=="TLS"): ?> selected <?php endif; ?>>TLS</option>
                                <option value="SSL" <?php if($settings->smtp_encryption=="SSL"): ?> selected <?php endif; ?>>SSL</option>
                                  
                            </select>
                      </div>
                  </div>
                 
                <hr>
                 <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary"><?php echo e(trans('words.save_changes')); ?></button>
                    </div>
                </div>

            <?php echo Form::close(); ?> 
        </div>
        <div role="tabpanel" class="tab-pane" id="payment_info">
            
            <?php echo Form::open(array('url' => 'admin/payment_info','class'=>'form-horizontal padding-15','name'=>'social_links_form','id'=>'social_links_form','role'=>'form')); ?>

                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.currency_code')); ?>*<br><small class="form-text text-muted">If you don't know <a href="https://developer.paypal.com/docs/api/reference/currency-codes/" target="_blank">click here</a></small></label>
                    
                    <div class="col-sm-9">
                        <input type="text" name="currency_code" value="<?php echo e($settings->currency_code); ?>" class="form-control" value="" placeholder="USD">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.tax_percentage')); ?></label>
                    
                    <div class="col-sm-9">                         
                        <input id="touch-spin-1" data-toggle="touch-spin" data-min="0" data-max="100" data-postfix="%" data-step="1" data-decimals="2" type="text" value="<?php echo e($settings->tax_percentage); ?>" name="tax_percentage"/>
                    </div>
                </div>
                <hr>  
                <h5 class="m-b-5"><i class="fa fa-cc-paypal"></i> <b>Paypal Settings</b></h5>
                <small id="emailHelp" class="form-text text-muted">For more info <a href="https://developer.paypal.com/docs/integration/admin/manage-apps/#create-or-edit-sandbox-and-live-apps" target="_blank">click here</a></small>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.paypal_payment')); ?></label>
                    
                    <div class="col-sm-9">
                        <select name="paypal_payment_on_off" id="basic" class="form-control" data-live-search="true">
                                 
                                <option value="1" <?php if($settings->paypal_payment_on_off== 1): ?> selected <?php endif; ?>> ON</option>
                                <option value="0" <?php if($settings->paypal_payment_on_off== 0): ?> selected <?php endif; ?>> OFF</option>
  
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.payment_mode')); ?></label>
                    
                    <div class="col-sm-9">
                        <select class="form-control" name="paypal_mode">                               
                                <option value="sandbox" <?php if($settings->paypal_mode=="sandbox"): ?> selected <?php endif; ?>>Sandbox</option>
                                <option value="live" <?php if($settings->paypal_mode=="live"): ?> selected <?php endif; ?>>Live</option>                            
                            </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo e(trans('words.paypal_client_id')); ?></label>
                    <div class="col-sm-9">
                      <input type="text" name="paypal_client_id" value="<?php echo e(isset($settings->paypal_client_id) ? $settings->paypal_client_id : null); ?>" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo e(trans('words.paypal_secret')); ?></label>
                    <div class="col-sm-9">
                      <input type="text" name="paypal_secret" value="<?php echo e(isset($settings->paypal_secret) ? $settings->paypal_secret : null); ?>" class="form-control">
                    </div>
                </div>
                <hr>  
                <h5 class="m-b-5"><i class="fa fa-cc-stripe"></i> <b>Stripe Settings</b></h5>
                 <small id="emailHelp" class="form-text text-muted">For more info <a href="https://support.stripe.com/questions/locate-api-keys" target="_blank">click here</a></small>
                  <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo e(trans('words.stripe_payment')); ?></label>
                      <div class="col-sm-8">
                            <select class="form-control" name="stripe_payment_on_off">                               
                                 
                                <option value="1" <?php if($settings->stripe_payment_on_off=="1"): ?> selected <?php endif; ?>>ON</option>
                                <option value="0" <?php if($settings->stripe_payment_on_off=="0"): ?> selected <?php endif; ?>>OFF</option>
                                              
                            </select>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 control-label"><?php echo e(trans('words.stripe_secret')); ?></label>
                    <div class="col-sm-8">
                      <input type="text" name="stripe_secret_key" value="<?php echo e(isset($settings->stripe_secret_key) ? $settings->stripe_secret_key : null); ?>" class="form-control">
                    </div>
                  </div>
                <hr>                  
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.bank_payment')); ?>                         
                    </label>
                    <div class="col-sm-9">
                        <textarea type="text" name="bank_payment_details" class="form-control summernote" rows="5"><?php echo e(stripslashes($settings->bank_payment_details)); ?></textarea>
                    </div>
                </div>
                <hr>                  
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.invoice_company')); ?>                             
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="invoice_company" value="<?php echo e(isset($settings->invoice_company) ? $settings->invoice_company : null); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.invoice_address')); ?>                        
                    </label>
                    <div class="col-sm-9">
                        <textarea type="text" name="invoice_address" class="form-control" rows="5"><?php echo e(isset($settings->invoice_address) ? $settings->invoice_address : null); ?></textarea>
                    </div>
                </div>
                <hr>
                 <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary"><?php echo e(trans('words.save_changes')); ?></button>
                    </div>
                </div>

            <?php echo Form::close(); ?> 
        </div>

        <div role="tabpanel" class="tab-pane" id="layout_settings">
            
            <?php echo Form::open(array('url' => 'admin/layout_settings','class'=>'form-horizontal padding-15','name'=>'social_links_form','id'=>'social_links_form','role'=>'form','enctype' => 'multipart/form-data')); ?>

                 
                <div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label"><?php echo e(trans('words.title_bg_image')); ?></label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                <?php if($settings->title_bg): ?>                                 
                                    <img src="<?php echo e(URL::asset('upload/'.$settings->title_bg)); ?>" width="150" alt="person">
                                <?php endif; ?>
                                                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="title_bg" class="filestyle">                                 
                            </div>
                        </div>
    
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.default_map_lat')); ?></label>
                    
                    <div class="col-sm-3">
                        <input type="text" name="map_latitude" value="<?php echo e($settings->map_latitude); ?>" class="form-control" value="">
                    </div>
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.default_map_long')); ?></label>
                    
                    <div class="col-sm-3">
                        <input type="text" name="map_longitude" value="<?php echo e($settings->map_longitude); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.home_page')); ?></label>                    
                    <div class="col-sm-6">
                        <select name="home_properties_layout" id="basic" class="selectpicker show-tick form-control" data-live-search="true">
                                 <option value="slider" <?php if($settings->home_properties_layout=='slider'): ?> selected <?php endif; ?>>Slider</option>
                                <option value="map" <?php if($settings->home_properties_layout=='map'): ?> selected <?php endif; ?>>Map</option>
                                 
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.properties_page')); ?></label>                    
                    <div class="col-sm-6">
                        <select name="all_properties_layout" id="basic" class="selectpicker show-tick form-control" data-live-search="true">
                                 <option value="grid" <?php if($settings->all_properties_layout=='grid'): ?> selected <?php endif; ?>>Property Listing - Grid</option>
                                <option value="grid_side" <?php if($settings->all_properties_layout=='grid_side'): ?> selected <?php endif; ?>>Property Listing - Grid with Sidebar</option>
                                                                
  
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.featured_properties_page')); ?></label>                    
                    <div class="col-sm-6">
                        <select name="featured_properties_layout" id="basic" class="selectpicker show-tick form-control" data-live-search="true">
                                 <option value="grid" <?php if($settings->featured_properties_layout=='grid'): ?> selected <?php endif; ?>>Property Listing - Grid</option>
                                <option value="grid_side" <?php if($settings->featured_properties_layout=='grid_side'): ?> selected <?php endif; ?>>Property Listing - Grid with Sidebar</option>
                                                                
  
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.sale_properties')); ?></label>                    
                    <div class="col-sm-6">
                        <select name="sale_properties_layout" id="basic" class="selectpicker show-tick form-control" data-live-search="true">
                                 <option value="grid" <?php if($settings->sale_properties_layout=='grid'): ?> selected <?php endif; ?>>Property Listing - Grid</option>
                                <option value="grid_side" <?php if($settings->sale_properties_layout=='grid_side'): ?> selected <?php endif; ?>>Property Listing - Grid with Sidebar</option>
                                                                
  
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.rent_properties')); ?></label>                    
                    <div class="col-sm-6">
                        <select name="rent_properties_layout" id="basic" class="selectpicker show-tick form-control" data-live-search="true">
                                 <option value="grid" <?php if($settings->rent_properties_layout=='grid'): ?> selected <?php endif; ?>>Property Listing - Grid</option>
                                <option value="grid_side" <?php if($settings->rent_properties_layout=='grid_side'): ?> selected <?php endif; ?>>Property Listing - Grid with Sidebar</option>
                                                                
  
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.pagination_limit')); ?> <br/><small class="text-muted bold">(<?php echo e(trans('words.per_page_properties')); ?>)</small></label>
                    
                    <div class="col-sm-6">
                        <input type="number" name="pagination_limit" value="<?php echo e($settings->pagination_limit); ?>" class="form-control" value="">
                    </div>
                     
                </div>
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary"><?php echo e(trans('words.save_changes')); ?></button>
                         
                    </div>
                </div>
            <?php echo Form::close(); ?> 
        </div>
 

        <div role="tabpanel" class="tab-pane" id="social_links">
            
            <?php echo Form::open(array('url' => 'admin/social_links','class'=>'form-horizontal padding-15','name'=>'social_links_form','id'=>'social_links_form','role'=>'form')); ?>

                 
                
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Facebook URL</label>
                    
                    <div class="col-sm-9">
                        <input type="text" name="social_facebook" value="<?php echo e($settings->social_facebook); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Youtube URL</label>
                    
                    <div class="col-sm-9">
                        <input type="text" name="social_twitter" value="<?php echo e($settings->social_twitter); ?>" class="form-control" value="">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Linkedin URL</label>
                    
                    <div class="col-sm-9">
                        <input type="text" name="social_linkedin" value="<?php echo e($settings->social_linkedin); ?>" class="form-control" value="">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Instagram URL</label>
                    
                    <div class="col-sm-9">
                        <input type="text" name="social_instagram" value="<?php echo e($settings->social_instagram); ?>" class="form-control" value="">
                    </div>
                </div>
                 
                <hr>
                 <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary"><?php echo e(trans('words.save_changes')); ?></button>
                    </div>
                </div>

            <?php echo Form::close(); ?> 
        </div>
        
        <div role="tabpanel" class="tab-pane" id="share_comments">
            
            <?php echo Form::open(array('url' => 'admin/addthisdisqus','class'=>'form-horizontal padding-15','name'=>'pass_form','id'=>'pass_form','role'=>'form')); ?>

                
                 
                
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">AddThis Code
                     <br><small class="text-muted bold">Get code <a href="https://www.addthis.com" target="_blank">here!</a></small>   
                    </label>
                    <div class="col-sm-9">
                        <textarea type="text" name="addthis_share_code" class="form-control" rows="5"><?php echo e($settings->addthis_share_code); ?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Disqus Code
                    <br><small class="text-muted bold">Get code <a href="https://disqus.com" target="_blank">here!</a></small>
                   </label>
                    <div class="col-sm-9">
                        <textarea type="text" name="disqus_comment_code" class="form-control" rows="5"><?php echo e($settings->disqus_comment_code); ?></textarea>
                    </div>
                </div>
                 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary"><?php echo e(trans('words.save_changes')); ?></button>
                    </div>
                </div>

            <?php echo Form::close(); ?> 
        </div>        
         
        <div role="tabpanel" class="tab-pane" id="contact_us">
            
            <?php echo Form::open(array('url' => 'admin/contact_us','class'=>'form-horizontal padding-15','name'=>'pass_form','id'=>'pass_form','role'=>'form')); ?>

                
                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.contact_us_title')); ?></label>
                    
                    <div class="col-sm-9">
                        <input type="text" name="contact_us_title" value="<?php echo e($settings->contact_us_title); ?>" class="form-control" value="">
                    </div>
                </div>

                

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.contact_us_email')); ?></label>
                    
                    <div class="col-sm-9">
                        <input type="text" name="contact_us_email" value="<?php echo e($settings->contact_us_email); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.contact_us_phone')); ?></label>
                    
                    <div class="col-sm-9">
                        <input type="text" name="contact_us_phone" value="<?php echo e($settings->contact_us_phone); ?>" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.contact_us_address')); ?></label>
                    
                    <div class="col-sm-9">
                        <input type="text" name="contact_us_address" value="<?php echo e($settings->contact_us_address); ?>" class="form-control" value="">
                    </div>
                </div> 
                 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary"><?php echo e(trans('words.save_changes')); ?></button>
                    </div>
                </div>

            <?php echo Form::close(); ?> 
        </div>
         
        <div role="tabpanel" class="tab-pane" id="other_Settings">
            
            <?php echo Form::open(array('url' => 'admin/headfootupdate','class'=>'form-horizontal padding-15','name'=>'pass_form','id'=>'pass_form','role'=>'form')); ?>

                
                 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.header_code')); ?></label>
                    <div class="col-sm-9">
                        <textarea type="text" name="site_header_code" class="form-control" rows="5" placeholder="You may want to add some css/js code to header. "><?php echo e($settings->site_header_code); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label"><?php echo e(trans('words.footer_code')); ?></label>
                    <div class="col-sm-9">
                        <textarea type="text" name="site_footer_code" class="form-control" rows="5" placeholder="You may want to add some css/js code to footer. "><?php echo e($settings->site_footer_code); ?></textarea>
                    </div>
                </div>
                 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary"><?php echo e(trans('words.save_changes')); ?></button>
                    </div>
                </div>

            <?php echo Form::close(); ?> 
        </div>
         
    </div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/admin/pages/settings.blade.php ENDPATH**/ ?>