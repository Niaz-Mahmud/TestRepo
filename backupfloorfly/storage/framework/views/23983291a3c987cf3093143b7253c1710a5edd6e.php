<?php $__env->startSection('head_title', trans('words.add_property').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>

<style type="text/css">
 @media (max-width: 991px) {
    .mobile-only {
        display:block !important;
    }
 
    .desktop-only {
        display:none !important;
    }
} 

</style> 

 <script type="text/javascript" src="<?php echo e(URL::asset('site_assets/ckeditor/ckeditor.js')); ?>"></script>

<!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="<?php if(getcong('title_bg')): ?><?php echo e(URL::asset('upload/'.getcong('title_bg'))); ?> <?php else: ?> <?php echo e(URL::asset('site_assets/img/breadcrumb-bg.jpg')); ?> <?php endif; ?>">
    <div class="inner-container container">
      <h1><?php echo e(trans('words.add_property')); ?></h1>
      <div class="breadcrumb">
        <ul class="list-inline">
          <li class="home"><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('words.home')); ?></a></li>
          <li><a href="<?php echo e(URL::to('dashboard/')); ?>"><?php echo e(trans('words.dashboard_text')); ?></a></li>
          <li><?php echo e(trans('words.add_property')); ?></li>
        </ul>
      </div>
    </div>
  </section>
  <!--Breadcrumb Section-->
<!-- begin:content -->
    <section class="main-container container">
    <div class="descriptive-section">
      <h2 class="hsq-heading type-1"><?php echo e(trans('words.add_property')); ?></h2>
 
         <?php if(Session::has('success')): ?>
                  <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                      <?php echo e(Session::get('success')); ?>

                  </div>
        <?php endif; ?>
 
    </div>
    <div class="submit-main-box clearfix">
         <?php echo Form::open(array('url' => 'submit-property','class'=>'','id'=>'submit-property-main-form','role'=>'form','enctype' => 'multipart/form-data')); ?>



        <div class="row t-sec">
          <div class="col-md-6 l-sec">
            <div class="information-box">
              <h3><?php echo e(trans('words.basic_details')); ?></h3>

              <div class="box-content">
                <div class="field-row">
                  <input type="text" placeholder="<?php echo e(trans('words.property_name')); ?>" name="property_name" id="p-title" value="<?php echo e(old('property_name')); ?>">
                  <?php if($errors->has('property_name')): ?>
                    <span style="color:#fb0303">
                        <?php echo e($errors->first('property_name')); ?>

                    </span>
                 <?php endif; ?>
                 </div>
                <div class="field-row clearfix">
                  <div class="col-xs-6">
                    <select id="p-status" name="property_purpose">
                      <option value=""><?php echo e(trans('words.property_purpose')); ?></option>
                      <option value="<?php echo e(trans('words.purpose_sale')); ?>" <?php if(old('property_purpose')==trans('words.purpose_sale')): ?> selected <?php endif; ?>><?php echo e(trans('words.for_sale')); ?></option>
                      
                    </select>
                    <?php if($errors->has('property_purpose')): ?>
                    <span style="color:#fb0303">
                        <?php echo e($errors->first('property_purpose')); ?>

                    </span>
                 <?php endif; ?>
                  </div>
                  <div class="col-xs-6">
                    <select id="p-type" name="property_type">
                      <option value=""><?php echo e(trans('words.property_type')); ?></option>
                      <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                        <option value="<?php echo e($type->id); ?>" <?php if(old('property_type')==$type->id): ?> selected <?php endif; ?>><?php echo e($type->types); ?></option>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php if($errors->has('property_type')): ?>
                    <span style="color:#fb0303">
                        <?php echo e($errors->first('property_type')); ?>

                    </span>
                 <?php endif; ?>
                  </div>
                </div>

                <div class="field-row clearfix">
                  <div class="col-xs-6">
                    <div class="input-group l-icon">
                      <span class="input-group-addon">৳</span>
                      <input type="text" name="price" class="form-control number-field" id="p-price"
                           placeholder="<?php echo e('Total Price'); ?>" value="<?php echo e(old('price')); ?>">  
                    </div>
                      <?php if($errors->has('price')): ?>
                      <span style="color:#fb0303">
                          <?php echo e($errors->first('price')); ?>

                      </span>
                      <?php endif; ?>
                  </div>

                  <div class="col-xs-6">
                    <div class="input-group l-icon">
                      <span class="input-group-addon">৳</span>
                      <input type="text" name="rate_per_sft" class="form-control number-field" id="p-price"
                           placeholder="<?php echo e(trans('words.rate_per_sft')); ?>" value="<?php echo e(old('rate_per_sft')); ?>">  
                    </div>
                      <?php if($errors->has('rate_per_sft')): ?>
                      <span style="color:#fb0303">
                          <?php echo e($errors->first('rate_per_sft')); ?>

                      </span>
                      <?php endif; ?>
                  </div>

                </div> <!--/.field-row-->

                <div class="field-row clearfix">

                    <div class="col-xs-6">
                      <select id="p-bedroom" name="floor">
                        <option value=""><?php echo e(trans('words.floor')); ?></option>
                        <option value="1st" <?php if(old('floor')=='1st'): ?> selected <?php endif; ?>>1st</option>
                        <option value="2nd" <?php if(old('floor')=='2nd'): ?> selected <?php endif; ?>>2nd</option>
                        <option value="3rd" <?php if(old('floor')=='3rd'): ?> selected <?php endif; ?>>3rd</option>
                        <option value="4th" <?php if(old('floor')=='4th'): ?> selected <?php endif; ?>>4th</option>
                        <option value="5th" <?php if(old('floor')=='5th'): ?> selected <?php endif; ?>>5th</option>
                        <option value="6th" <?php if(old('floor')=='6th'): ?> selected <?php endif; ?>>6th</option>
                        <option value="7th" <?php if(old('floor')=='7th'): ?> selected <?php endif; ?>>7th</option>
                        <option value="8th" <?php if(old('floor')=='8th'): ?> selected <?php endif; ?>>8th</option>
                        <option value="9th" <?php if(old('floor')=='9th'): ?> selected <?php endif; ?>>9th</option>
                        <option value="10th" <?php if(old('floor')=='10th'): ?> selected <?php endif; ?>>10th</option>
                      </select>
                    </div>

                    <div class="col-xs-6">
                      <select id="p-unit" name="unit">
                        <option value=""><?php echo e(trans('words.unit')); ?></option>
                        <option value="A" <?php if(old('unit')=='A'): ?> selected <?php endif; ?>>A</option>
                        <option value="B" <?php if(old('unit')=='B'): ?> selected <?php endif; ?>>B</option>
                        <option value="C" <?php if(old('unit')=='C'): ?> selected <?php endif; ?>>C</option>
                        <option value="D" <?php if(old('unit')=='D'): ?> selected <?php endif; ?>>D</option>
                        <option value="E" <?php if(old('unit')=='E'): ?> selected <?php endif; ?>>E</option>
                      </select>
                    </div>

                </div> <!--/.field-row-->


                <div class="field-row clearfix">
                    <div class="col-xs-6">
                      <select id="p-loan_facility" name="loan_facility">
                        <option value=""><?php echo e(trans('words.loan_facility')); ?></option>
                        <option value="Available" <?php if(old('loan_facility')=='Available'): ?> selected <?php endif; ?>>Available</option>
                        <option value="NA" <?php if(old('loan_facility')=='NA'): ?> selected <?php endif; ?>>NA</option>
                      </select>
                    </div>

                  <div class="col-xs-6">
                      <select id="p-bedroom" name="bedrooms">
                        <option value=""><?php echo e(trans('words.bedroom')); ?></option>
                        <option value="1" <?php if(old('bedrooms')=='1'): ?> selected <?php endif; ?>>1</option>
                        <option value="2" <?php if(old('bedrooms')=='2'): ?> selected <?php endif; ?>>2</option>
                        <option value="3" <?php if(old('bedrooms')=='3'): ?> selected <?php endif; ?>>3</option>
                        <option value="4" <?php if(old('bedrooms')=='4'): ?> selected <?php endif; ?>>4</option>
                        <option value="5" <?php if(old('bedrooms')=='5'): ?> selected <?php endif; ?>>5</option>
                        <option value="+5" <?php if(old('bedrooms')=='+5'): ?> selected <?php endif; ?>>+5</option>
                      </select>
                    </div>
                </div> <!--/.field-row-->

                <div class="field-row clearfix">
                  <div class="col-xs-6">
                    <select id="bathroom" name="bathrooms">
                      <option value=""><?php echo e(trans('words.bathroom')); ?></option>
                      <option value="1" <?php if(old('bathrooms')=='1'): ?> selected <?php endif; ?>>1</option>
                      <option value="2" <?php if(old('bathrooms')=='2'): ?> selected <?php endif; ?>>2</option>
                      <option value="3" <?php if(old('bathrooms')=='3'): ?> selected <?php endif; ?>>3</option>
                      <option value="4" <?php if(old('bathrooms')=='4'): ?> selected <?php endif; ?>>4</option>
                      <option value="5" <?php if(old('bathrooms')=='5'): ?> selected <?php endif; ?>>5</option>
                      <option value="+5" <?php if(old('bathrooms')=='+5'): ?> selected <?php endif; ?>>+5</option>
                    </select>
                  </div>

                  <div class="col-xs-6">
                    <select id="garage" name="garage">
                      <option value=""><?php echo e(trans('words.garages')); ?></option>
                      <option value="1" <?php if(old('garage')=='1'): ?> selected <?php endif; ?>>1</option>
                      <option value="2" <?php if(old('garage')=='2'): ?> selected <?php endif; ?>>2</option>
                      <option value="3" <?php if(old('garage')=='3'): ?> selected <?php endif; ?>>3</option>
                      <option value="4" <?php if(old('garage')=='4'): ?> selected <?php endif; ?>>4</option>
                      <option value="5" <?php if(old('garage')=='5'): ?> selected <?php endif; ?>>5</option>
                      <option value="+5" <?php if(old('garage')=='+5'): ?> selected <?php endif; ?>>+5</option>
                    </select>
                  </div>

                </div>

                <div class="field-row clearfix">
                  <div class="col-xs-6">
                    <select id="balcony" name="balcony">
                      <option value=""><?php echo e(trans('words.balcony')); ?></option>
                      <option value="1" <?php if(old('balcony')=='1'): ?> selected <?php endif; ?>>1</option>
                      <option value="2" <?php if(old('balcony')=='2'): ?> selected <?php endif; ?>>2</option>
                      <option value="3" <?php if(old('balcony')=='3'): ?> selected <?php endif; ?>>3</option>
                      <option value="4" <?php if(old('balcony')=='4'): ?> selected <?php endif; ?>>4</option>
                      <option value="5" <?php if(old('balcony')=='5'): ?> selected <?php endif; ?>>5</option>
                      <option value="+5" <?php if(old('balcony')=='+5'): ?> selected <?php endif; ?>>+5</option>
                    </select>
                  </div>

                  <div class="col-xs-6">
                    <select id="facing" name="facing">
                      <option value=""><?php echo e(trans('words.facing')); ?></option>
                      <option value="East" <?php if(old('facing')=='East'): ?> selected <?php endif; ?>>East</option>
                      <option value="West" <?php if(old('facing')=='West'): ?> selected <?php endif; ?>>West</option>
                      <option value="North" <?php if(old('facing')=='North'): ?> selected <?php endif; ?>>North</option>
                      <option value="South" <?php if(old('facing')=='South'): ?> selected <?php endif; ?>>South</option>
                    </select>
                  </div>

                </div>

                <div class="field-row clearfix">
                  <div class="col-xs-6">
                    <div class="input-group r-icon">
                      <input type="text" name="land_area" class="form-control number-field" id="p-land"
                           placeholder="<?php echo e(trans('words.land_area')); ?>" value="<?php echo e(old('land_area')); ?>">
                      <span class="input-group-addon"><?php echo e(trans('words.land_unit')); ?></span>
                    </div>
                  </div>

                  <div class="col-xs-6">
                    <div class="input-group r-icon">
                      <input type="text" name="build_area" class="form-control number-field" id="p-build"
                           placeholder="<?php echo e(trans('words.build_area')); ?>" value="<?php echo e(old('build_area')); ?>">
                      <span class="input-group-addon"><?php echo e(trans('words.build_unit')); ?></span>
                    </div>
                  </div>
                </div> 

                <div class="field-row clearfix">
                  <div class="col-xs-6">
                    <select id="no_of_floor" name="no_of_floor">
                      <option value=""><?php echo e(trans('words.no_of_floor')); ?></option>
                      <option value="G+1" <?php if(old('no_of_floor')=='G+1'): ?> selected <?php endif; ?>>G+1</option>
                      <option value="G+2" <?php if(old('no_of_floor')=='G+2'): ?> selected <?php endif; ?>>G+2</option>
                      <option value="G+3" <?php if(old('no_of_floor')=='G+3'): ?> selected <?php endif; ?>>G+3</option>
                      <option value="G+4" <?php if(old('no_of_floor')=='G+4'): ?> selected <?php endif; ?>>G+4</option>
                      <option value="G+5" <?php if(old('no_of_floor')=='G+5'): ?> selected <?php endif; ?>>G+5</option>
                      <option value="G+6" <?php if(old('no_of_floor')=='G+6'): ?> selected <?php endif; ?>>G+6</option>
                      <option value="G+7" <?php if(old('no_of_floor')=='G+7'): ?> selected <?php endif; ?>>G+7</option>
                      <option value="G+8" <?php if(old('no_of_floor')=='G+8'): ?> selected <?php endif; ?>>G+8</option>
                    </select>
                  </div>

                  <div class="col-xs-6">
                    <div class="input-group r-icon">
                      <input type="text" name="available_floor" class="form-control" 
                           placeholder="<?php echo e(trans('words.available_floor')); ?>" value="<?php echo e(old('available_floor')); ?>">
                      
                    </div>
                  </div>
                </div> 


              </div>
            </div>

            <div class="information-box">
                <h3><?php echo e(trans('words.description')); ?></h3>
                <div class="box-content">
                    <div class="field-row">
                      <textarea name="description" id="p-desc" placeholder="<?php echo e(trans('words.description')); ?>"><?php echo e(old('description')); ?></textarea>
                      <?php if($errors->has('description')): ?>
                        <span style="color:#fb0303">
                            <?php echo e($errors->first('description')); ?>

                        </span>
                     <?php endif; ?>
                     <script>CKEDITOR.replace( 'p-desc' );</script>
                    </div>
                </div>  
            </div> 

          </div>

        <div class="col-md-6 r-sec">
          <div class="information-box">
            <h3><?php echo e(trans('words.location')); ?></h3>

            <div class="box-content">

              <div class="field-row">
                <input type="text" placeholder="<?php echo e(trans('words.address')); ?>" name="address" id="address" value="<?php echo e(old('address')); ?>">
                <?php if($errors->has('address')): ?>
                    <span style="color:#fb0303">
                        <?php echo e($errors->first('address')); ?>

                    </span>
                 <?php endif; ?>
              </div>

              <div class="field-row">
                <input type="text" placeholder="<?php echo e(trans('words.po')); ?>" name="po" id="po" value="<?php echo e(old('po')); ?>">
                <?php if($errors->has('po')): ?>
                    <span style="color:#fb0303">
                        <?php echo e($errors->first('po')); ?>

                    </span>
                 <?php endif; ?>
              </div>

              <div class="field-row">
                <input type="text" placeholder="<?php echo e(trans('words.location')); ?>" name="location" id="location" value="<?php echo e(old('location')); ?>">
                <?php if($errors->has('location')): ?>
                    <span style="color:#fb0303">
                        <?php echo e($errors->first('location')); ?>

                    </span>
                 <?php endif; ?>
              </div>


              

            </div>
          </div>           
          <div class="information-box">
            <h3><?php echo e(trans('words.video_presentation')); ?> </h3>

            <div class="box-content">
              <div class="field-row">
                <textarea id="p-video" name="video_code" placeholder="<?php echo e(old('past_embed_code')); ?>"><?php echo e(old('video_code')); ?></textarea>
              </div>
            </div>
          </div>
          <div class="information-box">
              <h3><?php echo e(trans('words.floor_plan')); ?></h3>
                <div class="box-content">
                   
                    <input type="file" name="floor_plan" id="floor_plan" style="color: green;padding: 5px;border: 1px dashed #123456;background-color: #f9ffe5;" />
                   
                </div>    
          </div>
          <div class="information-box">
              <h3><?php echo e(trans('words.featured_image')); ?></h3>
                <div class="box-content">
                   
                    <input type="file" name="featured_image" id="featured_image" style="color: green;padding: 5px;border: 1px dashed #123456;background-color: #f9ffe5;"/><br/>
                   <?php if($errors->has('featured_image')): ?>
                    <span style="color:#fb0303">
                        <?php echo e($errors->first('featured_image')); ?>

                    </span>
                 <?php endif; ?>
                </div>    
            </div>

            <link rel="stylesheet" href="<?php echo e(URL::asset('site_assets/css/gallery_style.css')); ?>">
            <div class="information-box">
               <h3><?php echo e(trans('words.gallery')); ?></h3>
                <div id="formdiv"> 
                  <div id="filediv"></div>
                  <div style="margin-top:5px;">
                    <input name="gallery_file[]" type="file" id="file"/>
                   <input type="button" id="add_more" class="upload" value="<?php echo e(trans('words.add_more_images')); ?>"/>
                  </div>
               </div>
            </div>

        </div>
      </div>

        <div class="information-box">
          <h3><?php echo e(trans('words.amenities')); ?></h3>
                
          <div class="box-content row">

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_servent_bed" value="Servant Bed" class="form-check-input" id="amenities_servent_bed">
                  <label class="form-check-label" for="amenities_servent_bed"><?php echo e(trans('words.amenities_servent_bed')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_servent_bath" value="Servant Bath" class="form-check-input" id="amenities_servent_bath">
                  <label class="form-check-label" for="amenities_servent_bath"><?php echo e(trans('words.amenities_servent_bath')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_gym" value="Gym" class="form-check-input" id="amenities_gym">
                  <label class="form-check-label" for="amenities_gym"><?php echo e(trans('words.amenities_gym')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_front_yard" value="Front yard" class="form-check-input" id="amenities_front_yard">
                  <label class="form-check-label" for="amenities_front_yard"><?php echo e(trans('words.amenities_front_yard')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_splash_pool" value="Splash Pool" class="form-check-input" id="amenities_splash_pool">
                  <label class="form-check-label" for="amenities_splash_pool"><?php echo e(trans('words.amenities_splash_pool')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_roof_deck" value="Roof Deck" class="form-check-input" id="amenities_roof_deck">
                  <label class="form-check-label" for="amenities_roof_deck"><?php echo e(trans('words.amenities_roof_deck')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_reception" value="Reception" class="form-check-input" id="amenities_reception">
                  <label class="form-check-label" for="amenities_reception"><?php echo e(trans('words.amenities_reception')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_rooftop_garden" value="Rooftop Garden" class="form-check-input" id="amenities_rooftop_garden">
                  <label class="form-check-label" for="amenities_rooftop_garden"><?php echo e(trans('words.amenities_rooftop_garden')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_generator" value="Generator" class="form-check-input" id="amenities_generator">
                  <label class="form-check-label" for="amenities_generator"><?php echo e(trans('words.amenities_generator')); ?></label>
                </div>
            </div>

         

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_substation" value="Substation" class="form-check-input" id="amenities_substation">
                  <label class="form-check-label" for="amenities_substation"><?php echo e(trans('words.amenities_substation')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_lift" value="Lift" class="form-check-input" id="amenities_lift">
                  <label class="form-check-label" for="amenities_lift"><?php echo e(trans('words.amenities_lift')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_kitchen_veranda" value="Kitchen Veranda" class="form-check-input" id="amenities_kitchen_veranda">
                  <label class="form-check-label" for="amenities_kitchen_veranda"><?php echo e(trans('words.amenities_kitchen_veranda')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_kitchen_cabinet" value="Kichen Cabinet" class="form-check-input" id="amenities_kitchen_cabinet">
                  <label class="form-check-label" for="amenities_kitchen_cabinet"><?php echo e(trans('words.amenities_kitchen_cabinet')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_corner_plot" value="Corner Plot" class="form-check-input" id="amenities_corner_plot">
                  <label class="form-check-label" for="amenities_corner_plot"><?php echo e(trans('words.amenities_corner_plot')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_guest_lobby" value="Guest Lobby" class="form-check-input" id="amenities_guest_lobby">
                  <label class="form-check-label" for="amenities_guest_lobby"><?php echo e(trans('words.amenities_guest_lobby')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_cctv" value="CCTV" class="form-check-input" id="amenities_cctv">
                  <label class="form-check-label" for="amenities_cctv"><?php echo e(trans('words.amenities_cctv')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_swimming_pool" value="Swimming Pool" class="form-check-input" id="amenities_swimming_pool">
                  <label class="form-check-label" for="amenities_swimming_pool"><?php echo e(trans('words.amenities_swimming_pool')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_guest_parking" value="Guest Parking" class="form-check-input" id="amenities_guest_parking">
                  <label class="form-check-label" for="amenities_guest_parking"><?php echo e(trans('words.amenities_guest_parking')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_laundry_room" value="Laundry Room" class="form-check-input" id="amenities_laundry_room">
                  <label class="form-check-label" for="amenities_laundry_room"><?php echo e(trans('words.amenities_laundry_room')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_bbq" value="BBQ" class="form-check-input" id="amenities_bbq">
                  <label class="form-check-label" for="amenities_bbq"><?php echo e(trans('words.amenities_bbq')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_terrace" value="Terrace" class="form-check-input" id="amenities_terrace">
                  <label class="form-check-label" for="amenities_terrace"><?php echo e(trans('words.amenities_terrace')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_sauna" value="Sauna" class="form-check-input" id="amenities_sauna">
                  <label class="form-check-label" for="amenities_sauna"><?php echo e(trans('words.amenities_sauna')); ?></label>
                </div>
            </div>

          </div>  
        </div>


        <div class="row">
          <div class="information-box">
            <h3><?php echo e(trans('words.nearest_palces')); ?></h3>
              
              <div class="box-content row">

                 <div class="field-row col-md-4">
                      <h4><?php echo e(trans('words.school')); ?></h4>
                      <input type="text" name="nearest_school_km" value="<?php echo e(old('nearest_school_km')); ?>" placeholder="0.5 KM">
                  </div>
                  
                  <div class="field-row col-md-4">
                      <h4><?php echo e(trans('words.hospital')); ?></h4>
                      <input type="text" name="nearest_hospital_km" value="<?php echo e(old('nearest_hospital_km')); ?>" placeholder="1 KM">
                  </div>

                  <div class="field-row col-md-4">
                      <h4><?php echo e(trans('words.mall')); ?></h4>
                      <input type="text" name="nearest_mall_km" value="<?php echo e(old('nearest_mall_km')); ?>" placeholder="1.5 KM">
                  </div>

                  <div class="field-row col-md-4">
                      <h4><?php echo e(trans('words.bus_station')); ?></h4>
                        <input type="text" name="nearest_bus_stand_km" value="<?php echo e(old('nearest_bus_stand_km')); ?>" placeholder="1.3 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.airport')); ?></h4>
                    <input type="text" name="nearest_airport_km" value="<?php echo e(old('nearest_airport_km')); ?>" placeholder="3 KM">
                  </div>                    
                  
                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.railway')); ?></h4>
                      <input type="text" name="nearest_railway_km" value="<?php echo e(old('nearest_railway_km')); ?>" placeholder="2.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.nearest_park_km')); ?></h4>
                      <input type="text" name="nearest_park_km" value="<?php echo e(old('nearest_park_km')); ?>" placeholder="3.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.nearest_mosque_km')); ?></h4>
                      <input type="text" name="nearest_mosque_km" value="<?php echo e(old('nearest_mosque_km')); ?>" placeholder="1.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.nearest_playground_km')); ?></h4>
                      <input type="text" name="nearest_playground_km" value="<?php echo e(old('nearest_playground_km')); ?>" placeholder="1.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.nearest_departmental_store_km')); ?></h4>
                      <input type="text" name="nearest_departmental_store_km" value="<?php echo e(old('nearest_departmental_store_km')); ?>" placeholder="0.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.nearest_restaurant_km')); ?></h4>
                      <input type="text" name="nearest_restaurant_km" value="<?php echo e(old('nearest_restaurant_km')); ?>" placeholder="1.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.nearest_fire_service_km')); ?></h4>
                      <input type="text" name="nearest_fire_service_km" value="<?php echo e(old('nearest_fire_service_km')); ?>" placeholder="1.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.nearest_fire_service_km')); ?></h4>
                      <input type="text" name="nearest_police_station_km" value="<?php echo e(old('nearest_police_station_km')); ?>" placeholder="2.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.nearest_pharmacy_km')); ?></h4>
                      <input type="text" name="nearest_pharmacy_km" value="<?php echo e(old('nearest_pharmacy_km')); ?>" placeholder="2.5 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.nearest_grocery_bazar_km')); ?></h4>
                      <input type="text" name="nearest_grocery_bazar_km" value="<?php echo e(old('nearest_grocery_bazar_km')); ?>" placeholder="1.5 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.nearest_govt_office_km')); ?></h4>
                      <input type="text" name="nearest_govt_office_km" value="<?php echo e(old('nearest_govt_office_km')); ?>" placeholder="2.5 KM">
                  </div>


                  
              </div>  

          </div>
        </div>

      <div class="row b-sec" align="center">
          <button type="submit" class="btn btn-lg submit"><?php echo e(trans('words.submit')); ?></button>
        </div>
        
      <?php echo Form::close(); ?>

    </div>
  </section>
    <!-- end:content -->
 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <link href="<?php echo e(URL::asset('site_assets/alert-toastr/toastr.css')); ?> " rel="stylesheet">
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('scripts'); ?>

    <script src="<?php echo e(URL::asset('site_assets/alert-toastr/toastr.js')); ?>"></script>

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


<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/pages/add_property.blade.php ENDPATH**/ ?>