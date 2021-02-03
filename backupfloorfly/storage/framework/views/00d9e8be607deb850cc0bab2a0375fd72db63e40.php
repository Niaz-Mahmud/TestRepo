<?php $__env->startSection('head_title', trans('words.update_property').' | '.getcong('site_name') ); ?>
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
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="<?php if(getcong('title_bg')): ?> <?php echo e(URL::asset('upload/'.getcong('title_bg'))); ?> <?php else: ?> <?php echo e(URL::asset('site_assets/img/breadcrumb-bg.jpg')); ?> <?php endif; ?>">
    <div class="inner-container container">

      
    </div>
  </section>
  <!--Breadcrumb Section-->
<!-- begin:content -->
    <section class="main-container container">
    <div class="descriptive-section">
      <h2 class="hsq-heading type-1"><?php echo e(trans('words.update_property')); ?></h2>
 
         <?php if(Session::has('success')): ?>
                  <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                      <?php echo e(Session::get('success')); ?>

                  </div>
        <?php endif; ?>
 
    </div>
    <div class="submit-main-box clearfix">
         <?php echo Form::open(array('url' => 'submit-property','class'=>'','id'=>'submit-property-main-form','role'=>'form','enctype' => 'multipart/form-data')); ?>


         <input type="hidden" name="id" value="<?php echo e(Crypt::encryptString($property->id)); ?>">

        <div class="row t-sec">
          <div class="col-md-6 l-sec">
            <div class="information-box">
              <h3><?php echo e(trans('words.basic_details')); ?></h3>

              <div class="box-content">

<div class="field-row">
                  <input type="text" placeholder="Enter Product Code" name="product_code" id="product_code" value="<?php echo e(stripslashes($property->product_code)); ?>">
                  <?php if($errors->has('product_code')): ?>
                    <span style="color:#fb0303">
                        <?php echo e($errors->first('product_code')); ?>

                    </span>
                 <?php endif; ?>
                 </div>
                <div class="field-row">
                  <input type="text" placeholder="<?php echo e(trans('words.property_name')); ?>" name="property_name" id="p-title" value="<?php echo e(stripslashes($property->property_name)); ?>">
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
                      <option value="<?php echo e(trans('words.purpose_sale')); ?>" <?php if($property->property_purpose==trans('words.purpose_sale')): ?> selected <?php endif; ?>><?php echo e(trans('words.for_sale')); ?></option>
                      <option value="<?php echo e(trans('words.purpose_rent')); ?>" <?php if($property->property_purpose==trans('words.purpose_rent')): ?> selected <?php endif; ?>><?php echo e(trans('words.for_rent')); ?></option>
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
                        <option value="<?php echo e($type->id); ?>" <?php if($property->property_type==$type->id): ?> selected <?php endif; ?>><?php echo e($type->types); ?></option>
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
                           placeholder="<?php echo e(trans('words.price')); ?>" value="<?php echo e($property->price); ?>">  
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
                           placeholder="<?php echo e(trans('words.rate_per_sft')); ?>" value="<?php echo e($property->rate_per_sft); ?>">  
                    </div>
                      <?php if($errors->has('rate_per_sft')): ?>
                      <span style="color:#fb0303">
                          <?php echo e($errors->first('rate_per_sft')); ?>

                      </span>
                      <?php endif; ?>
                  </div>


                 

                </div>

                <div class="field-row clearfix">

                    <div class="col-xs-6">
                      <select id="p-bedroom" name="floor">
                        <option value=""><?php echo e(trans('words.floor')); ?></option>
                        <option value="1st" <?php if($property->floor=='1st'): ?> selected <?php endif; ?>>1st</option>
                        <option value="2nd" <?php if($property->floor=='2nd'): ?> selected <?php endif; ?>>2nd</option>
                        <option value="3rd" <?php if($property->floor=='3rd'): ?> selected <?php endif; ?>>3rd</option>
                        <option value="4th" <?php if($property->floor=='4th'): ?> selected <?php endif; ?>>4th</option>
                        <option value="5th" <?php if($property->floor=='5th'): ?> selected <?php endif; ?>>5th</option>
                        <option value="6th" <?php if($property->floor=='6th'): ?> selected <?php endif; ?>>6th</option>
                        <option value="7th" <?php if($property->floor=='7th'): ?> selected <?php endif; ?>>7th</option>
                        <option value="8th" <?php if($property->floor=='8th'): ?> selected <?php endif; ?>>8th</option>
                        <option value="9th" <?php if($property->floor=='9th'): ?> selected <?php endif; ?>>9th</option>
                        <option value="10th" <?php if($property->floor=='10th'): ?> selected <?php endif; ?>>10th</option>
                        <option value="11th" <?php if($property->floor=='11th'): ?> selected <?php endif; ?>>11th</option>
                        <option value="12th" <?php if($property->floor=='12th'): ?> selected <?php endif; ?>>12th</option>
                        <option value="13th" <?php if($property->floor=='13th'): ?> selected <?php endif; ?>>13th</option>
                        <option value="14th" <?php if($property->floor=='14th'): ?> selected <?php endif; ?>>14th</option>
                        <option value="15th" <?php if($property->floor=='15th'): ?> selected <?php endif; ?>>15th</option>
                        <option value="16th" <?php if($property->floor=='16th'): ?> selected <?php endif; ?>>16th</option>
                        <option value="17th" <?php if($property->floor=='17th'): ?> selected <?php endif; ?>>17th</option>
                        <option value="18th" <?php if($property->floor=='18th'): ?> selected <?php endif; ?>>18th</option>
                        <option value="19th" <?php if($property->floor=='19th'): ?> selected <?php endif; ?>>19th</option>
                        <option value="20th" <?php if($property->floor=='20th'): ?> selected <?php endif; ?>>20th</option>
                        <option value="21th" <?php if($property->floor=='21th'): ?> selected <?php endif; ?>>21th</option>
                        <option value="22th" <?php if($property->floor=='22th'): ?> selected <?php endif; ?>>22th</option>

                      </select>
                    </div>

                    <div class="col-xs-6">
                      <select id="p-unit" name="unit">
                        <option value=""><?php echo e(trans('words.unit')); ?></option>
                        <option value="A" <?php if($property->unit=='A'): ?> selected <?php endif; ?>>A</option>
                        <option value="B" <?php if($property->unit=='B'): ?> selected <?php endif; ?>>B</option>
                        <option value="C" <?php if($property->unit=='C'): ?> selected <?php endif; ?>>C</option>
                        <option value="D" <?php if($property->unit=='D'): ?> selected <?php endif; ?>>D</option>
                        <option value="E" <?php if($property->unit=='E'): ?> selected <?php endif; ?>>E</option>
                      </select>
                    </div>

                </div> <!--/.field-row-->


                <div class="field-row clearfix">
                    <div class="col-xs-6">
                      <select id="p-loan_facility" name="loan_facility">
                        <option value=""><?php echo e(trans('words.loan_facility')); ?></option>
                        <option value="Available" <?php if($property->loan_facility=='Available'): ?> selected <?php endif; ?>>Available</option>
                        <option value="NA" <?php if($property->loan_facility =='NA'): ?> selected <?php endif; ?>>NA</option>
                      </select>
                    </div>

                  

                    <div class="col-xs-6">
                    <select id="p-bedroom" name="bedrooms">
                      <option value=""><?php echo e(trans('words.bedroom')); ?></option>
                      <option value="1" <?php if($property->bedrooms=='1'): ?> selected <?php endif; ?>>1</option>
                      <option value="2" <?php if($property->bedrooms=='2'): ?> selected <?php endif; ?>>2</option>
                      <option value="3" <?php if($property->bedrooms=='3'): ?> selected <?php endif; ?>>3</option>
                      <option value="4" <?php if($property->bedrooms=='4'): ?> selected <?php endif; ?>>4</option>
                      <option value="5" <?php if($property->bedrooms=='5'): ?> selected <?php endif; ?>>5</option>
                      <option value="+5" <?php if($property->bedrooms=='+5'): ?> selected <?php endif; ?>>+5</option>
                    </select>
                  </div>

                </div> <!--/.field-row-->



                <div class="field-row clearfix">
                  <div class="col-xs-6">
                    <select id="bathroom" name="bathrooms">
                      <option value=""><?php echo e(trans('words.bathrooms')); ?></option>
                      <option value="1" <?php if($property->bathrooms=='1'): ?> selected <?php endif; ?>>1</option>
                      <option value="2" <?php if($property->bathrooms=='2'): ?> selected <?php endif; ?>>2</option>
                      <option value="3" <?php if($property->bathrooms=='3'): ?> selected <?php endif; ?>>3</option>
                      <option value="4" <?php if($property->bathrooms=='4'): ?> selected <?php endif; ?>>4</option>
                      <option value="5" <?php if($property->bathrooms=='5'): ?> selected <?php endif; ?>>5</option>
                      <option value="+5" <?php if($property->bathrooms=='+5'): ?> selected <?php endif; ?>>+5</option>
                    </select>
                  </div>
                  <div class="col-xs-6">
                    <select id="garage" name="garage">
                      <option value=""><?php echo e(trans('words.garages')); ?></option>
                      <option value="1" <?php if($property->garage=='1'): ?> selected <?php endif; ?>>1</option>
                      <option value="2" <?php if($property->garage=='2'): ?> selected <?php endif; ?>>2</option>
                      <option value="3" <?php if($property->garage=='3'): ?> selected <?php endif; ?>>3</option>
                      <option value="4" <?php if($property->garage=='4'): ?> selected <?php endif; ?>>4</option>
                      <option value="5" <?php if($property->garage=='5'): ?> selected <?php endif; ?>>5</option>
                      <option value="+5" <?php if($property->garage=='+5'): ?> selected <?php endif; ?>>+5</option>
                    </select>
                  </div>
                </div>

                <div class="field-row clearfix">
                  <div class="col-xs-6">
                    <select id="balcony" name="balcony">
                    <option value=""><?php echo e(trans('words.balcony')); ?></option>
                      <option value="1" <?php if($property->balcony=='1'): ?> selected <?php endif; ?>>1</option>
                      <option value="2" <?php if($property->balcony=='2'): ?> selected <?php endif; ?>>2</option>
                      <option value="3" <?php if($property->balcony=='3'): ?> selected <?php endif; ?>>3</option>
                      <option value="4" <?php if($property->balcony=='4'): ?> selected <?php endif; ?>>4</option>
                      <option value="5" <?php if($property->balcony=='5'): ?> selected <?php endif; ?>>5</option>
                      <option value="+5" <?php if($property->balcony=='+5'): ?> selected <?php endif; ?>>+5</option>
                    </select>
                  </div>

                  <div class="col-xs-6">
                    <select id="facing" name="facing">
                      <option value=""><?php echo e(trans('words.facing')); ?></option>
                      <option value="East" <?php if($property->facing=='East'): ?> selected <?php endif; ?>>East</option>
                      <option value="West" <?php if($property->facing=='West'): ?> selected <?php endif; ?>>West</option>
                      <option value="North" <?php if($property->facing=='North'): ?> selected <?php endif; ?>>North</option>
                      <option value="South" <?php if($property->facing=='South'): ?> selected <?php endif; ?>>South</option>
                      <option value="North-East" <?php if($property->facing=='North-East'): ?> selected <?php endif; ?>>North-East</option>
                      <option value="North-West" <?php if($property->facing=='North-West'): ?> selected <?php endif; ?>>North-West</option>
                      <option value="South-East" <?php if($property->facing=='South-East'): ?> selected <?php endif; ?>>South-East</option>
                      <option value="South-West" <?php if($property->facing=='South-West'): ?> selected <?php endif; ?>>South-West</option>
                    </select>
                  </div>

                </div>

                <div class="field-row clearfix">
                  <div class="col-xs-6">
                    <div class="input-group r-icon">
                      <input type="text" name="land_area" class="form-control number-field" id="p-land"
                           placeholder="<?php echo e(trans('words.land_area')); ?>" value="<?php echo e($property->land_area); ?>">
                      <span class="input-group-addon"><?php echo e(trans('words.land_unit')); ?></span>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="input-group r-icon">
                      <input type="text" name="build_area" class="form-control number-field" id="p-build"
                           placeholder="<?php echo e(trans('words.build_area')); ?>" value="<?php echo e($property->build_area); ?>">
                      <span class="input-group-addon"><?php echo e(trans('words.build_unit')); ?></span>
                    </div>
                  </div>
                </div>

                <div class="field-row clearfix">
                  <div class="col-xs-6">
                    <select id="no_of_floor" name="no_of_floor">
                      <option value=""><?php echo e(trans('words.no_of_floor')); ?></option>
                      <option value="G+1" <?php if($property->no_of_floor=='G+1'): ?> selected <?php endif; ?>>G+1</option>
                      <option value="G+2" <?php if($property->no_of_floor=='G+2'): ?> selected <?php endif; ?>>G+2</option>
                      <option value="G+3" <?php if($property->no_of_floor=='G+3'): ?> selected <?php endif; ?>>G+3</option>
                      <option value="G+4" <?php if($property->no_of_floor=='G+4'): ?> selected <?php endif; ?>>G+4</option>
                      <option value="G+5" <?php if($property->no_of_floor=='G+5'): ?> selected <?php endif; ?>>G+5</option>
                      <option value="G+6" <?php if($property->no_of_floor=='G+6'): ?> selected <?php endif; ?>>G+6</option>
                      <option value="G+7" <?php if($property->no_of_floor=='G+7'): ?> selected <?php endif; ?>>G+7</option>
                      <option value="G+8" <?php if($property->no_of_floor=='G+8'): ?> selected <?php endif; ?>>G+8</option>
                      <option value="G+9" <?php if($property->no_of_floor=='G+9'): ?> selected <?php endif; ?>>G+9</option>
                      <option value="G+10" <?php if($property->no_of_floor=='G+10'): ?> selected <?php endif; ?>>G+10</option>
                      <option value="G+11" <?php if($property->no_of_floor=='G+11'): ?> selected <?php endif; ?>>G+11</option>
                      <option value="G+12" <?php if($property->no_of_floor=='G+12'): ?> selected <?php endif; ?>>G+12</option>
                      <option value="G+13" <?php if($property->no_of_floor=='G+13'): ?> selected <?php endif; ?>>G+13</option>
                      <option value="G+14" <?php if($property->no_of_floor=='G+14'): ?> selected <?php endif; ?>>G+14</option>
                      <option value="G+15" <?php if($property->no_of_floor=='G+15'): ?> selected <?php endif; ?>>G+15</option>
                      <option value="G+16" <?php if($property->no_of_floor=='G+16'): ?> selected <?php endif; ?>>G+16</option>
                      <option value="G+17" <?php if($property->no_of_floor=='G+17'): ?> selected <?php endif; ?>>G+17</option>
                      <option value="G+18" <?php if($property->no_of_floor=='G+18'): ?> selected <?php endif; ?>>G+18</option>
                      <option value="G+19" <?php if($property->no_of_floor=='G+19'): ?> selected <?php endif; ?>>G+19</option>
                      <option value="G+20" <?php if($property->no_of_floor=='G+20'): ?> selected <?php endif; ?>>G+20</option>
                      <option value="G+21" <?php if($property->no_of_floor=='G+21'): ?> selected <?php endif; ?>>G+21</option>
                      <option value="G+22" <?php if($property->no_of_floor=='G+22'): ?> selected <?php endif; ?>>G+22</option>
                    </select>
                  </div>

                  <div class="col-xs-6">
                    <div class="input-group r-icon">
                      <input type="text" name="available_floor" class="form-control" 
                           placeholder="<?php echo e(trans('words.available_floor')); ?>" value="<?php echo e($property->available_floor); ?>">
                      
                    </div>
                  </div>
                </div> 

                 
              </div>
            </div>

            <div class="information-box">
                <h3><?php echo e(trans('words.description')); ?></h3>
                <div class="box-content">
                    <div class="field-row">
                      <textarea name="description" id="p-desc" placeholder="<?php echo e(trans('words.description')); ?>"><?php echo e(stripslashes($property->description)); ?></textarea>
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
                <input type="text" placeholder="<?php echo e(trans('words.address')); ?>" name="address" id="address" value="<?php echo e($property->address); ?>">
                <?php if($errors->has('address')): ?>
                    <span style="color:#fb0303">
                        <?php echo e($errors->first('address')); ?>

                    </span>
                 <?php endif; ?>
              </div>

              <div class="field-row">
                    <input type="text" placeholder="<?php echo e(trans('words.po')); ?>" name="po" id="po" value="<?php echo e($property->po); ?>">
                    <?php if($errors->has('po')): ?>
                        <span style="color:#fb0303">
                            <?php echo e($errors->first('po')); ?>

                        </span>
                    <?php endif; ?>
                  </div>

                  <div class="field-row">

                  <div class="form-group mult-select-opt">
                    <select id="example-getting-started" name="location">
                      <?php $allUpazila=\App\Upazila::orderBy('id','asc')->get(); ?>
                      <?php $__currentLoopData = $allUpazila; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upazila): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($upazila->id); ?>"  <?php if($property->location ==$upazila->id): ?> selected <?php endif; ?>> <?php echo e($upazila->name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                    </select>
                    <?php if($errors->has('location')): ?>
                    <span style="color:#fb0303">
                        <?php echo e($errors->first('location')); ?>

                    </span>
                   <?php endif; ?>

                  </div>

                   
                  </div>

              

            </div>
          </div>           
          <div class="information-box">
            <h3><?php echo e(trans('words.video_presentation')); ?></h3>

            <div class="box-content">
              <div class="field-row">
                <textarea id="p-video" name="video_code" placeholder="<?php echo e(old('past_embed_code')); ?>"><?php echo e(stripslashes($property->video_code)); ?></textarea>
              </div>
            </div>
          </div>
          <div class="information-box">
              <h3><?php echo e(trans('words.floor_plan')); ?></h3>
                <div class="box-content">
                   
                    <input type="file" name="floor_plan" id="floor_plan" style="color: green;padding: 5px;border: 1px dashed #123456;background-color: #f9ffe5;" />

                    <div class="media-left">
                         <?php if(isset($property->floor_plan)): ?>
                                 
                          <img src="<?php echo e(URL::asset('upload/floorplan/'.$property->floor_plan.'-s.jpg')); ?>" width="150" alt="Floor Plan Image">
                
                         <?php endif; ?>                                                
                    </div>
                   
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

                    <div class="media-left">
                         <?php if(isset($property->featured_image)): ?>
                                 
                          <img src="<?php echo e(URL::asset('upload/properties/'.$property->featured_image.'-s.jpg')); ?>" width="150" alt="Featured Image">
                
                         <?php endif; ?>                                                
                    </div>
                </div>    
            </div>

        </div>
      </div>

      <div class="information-box">
        <link rel="stylesheet" href="<?php echo e(URL::asset('site_assets/css/gallery_style.css')); ?>">
          <h3><?php echo e(trans('words.gallery')); ?></h3>

            <div class="media">
                <div class="med_list media-left">
                    <?php if(isset($property->id)): ?>
                        <?php $__currentLoopData = $property_gallery_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $gallery_img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div id="abcd_1" class="abcd">
                              <img src="<?php echo e(URL::asset('upload/gallery/'.$gallery_img->image_name)); ?>" width="100" alt="image">
                              <a href="<?php echo e(url('gallery_image_delete/'.Crypt::encryptString($gallery_img->id))); ?>"><img id="img" src="<?php echo e(URL::asset('site_assets/img/x.png')); ?>" alt="delete"></a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>                            
                </div>
                  
              </div>

            <div id="formdiv"> 
              <div id="filediv"></div>
              
              <div style="margin-top:5px;">
                  <input name="gallery_file[]" type="file" id="file"/>
                  <input type="button" id="add_more" class="upload" value="<?php echo e(trans('words.add_more_images')); ?>"/>
              </div>
            </div>
        </div>

        <div class="information-box">
          <h3><?php echo e(trans('words.amenities')); ?></h3>
                
          <div class="box-content row">

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_servent_bed" value="Servant Bed" class="form-check-input" id="amenities_servent_bed"
                   <?php if($property->amenities_servent_bed=='Servant Bed'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_servent_bed"><?php echo e(trans('words.amenities_servent_bed')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_servent_bath" value="Servant Bath" class="form-check-input" id="amenities_servent_bath"
                  <?php if($property->amenities_servent_bath=='Servant Bath'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_servent_bath"><?php echo e(trans('words.amenities_servent_bath')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_gym" value="Gym" class="form-check-input" id="amenities_gym"
                  <?php if($property->amenities_gym=='Gym'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_gym"><?php echo e(trans('words.amenities_gym')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_front_yard" value="Front yard" class="form-check-input" id="amenities_front_yard"
                  <?php if($property->amenities_front_yard=='Front yard'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_front_yard"><?php echo e(trans('words.amenities_front_yard')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_splash_pool" value="Splash Pool" class="form-check-input" id="amenities_splash_pool"
                  <?php if($property->amenities_splash_pool=='Splash Pool'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_splash_pool"><?php echo e(trans('words.amenities_splash_pool')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_roof_deck" value="Roof Deck" class="form-check-input" id="amenities_roof_deck"
                  <?php if($property->amenities_roof_deck=='Roof Deck'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_roof_deck"><?php echo e(trans('words.amenities_roof_deck')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_reception" value="Reception" class="form-check-input" id="amenities_reception"
                  <?php if($property->amenities_reception=='Reception'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_reception"><?php echo e(trans('words.amenities_reception')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_rooftop_garden" value="Rooftop Garden" class="form-check-input" id="amenities_rooftop_garden"
                  <?php if($property->amenities_rooftop_garden=='Rooftop Garden'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_rooftop_garden"><?php echo e(trans('words.amenities_rooftop_garden')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_generator" value="Generator" class="form-check-input" id="amenities_generator"
                  <?php if($property->amenities_generator=='Generator'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_generator"><?php echo e(trans('words.amenities_generator')); ?></label>
                </div>
            </div>

         

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_substation" value="Substation" class="form-check-input" id="amenities_substation"
                  <?php if($property->amenities_substation=='Substation'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_substation"><?php echo e(trans('words.amenities_substation')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_lift" value="Lift" class="form-check-input" id="amenities_lift"
                  <?php if($property->amenities_lift=='Lift'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_lift"><?php echo e(trans('words.amenities_lift')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_kitchen_veranda" value="Kitchen Veranda" class="form-check-input" id="amenities_kitchen_veranda"
                  <?php if($property->amenities_kitchen_veranda=='Kitchen Veranda'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_kitchen_veranda"><?php echo e(trans('words.amenities_kitchen_veranda')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_kitchen_cabinet" value="Kichen Cabinet" class="form-check-input" id="amenities_kitchen_cabinet"
                  <?php if($property->amenities_kitchen_cabinet=='Kichen Cabinet'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_kitchen_cabinet"><?php echo e(trans('words.amenities_kitchen_cabinet')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_corner_plot" value="Corner Plot" class="form-check-input" id="amenities_corner_plot"
                  <?php if($property->amenities_corner_plot=='Corner Plot'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_corner_plot"><?php echo e(trans('words.amenities_corner_plot')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_guest_lobby" value="Guest Lobby" class="form-check-input" id="amenities_guest_lobby"
                  <?php if($property->amenities_guest_lobby=='Guest Lobby'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_guest_lobby"><?php echo e(trans('words.amenities_guest_lobby')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_cctv" value="CCTV" class="form-check-input" id="amenities_cctv"
                  <?php if($property->amenities_cctv=='CCTV'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_cctv"><?php echo e(trans('words.amenities_cctv')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_swimming_pool" value="Swimming Pool" class="form-check-input" id="amenities_swimming_pool"
                  <?php if($property->amenities_swimming_pool=='Swimming Pool'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_swimming_pool"><?php echo e(trans('words.amenities_swimming_pool')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_guest_parking" value="Guest Parking" class="form-check-input" id="amenities_guest_parking"
                  <?php if($property->amenities_guest_parking=='Guest Parking'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_guest_parking"><?php echo e(trans('words.amenities_guest_parking')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_laundry_room" value="Laundry Room" class="form-check-input" id="amenities_laundry_room"
                  <?php if($property->amenities_laundry_room =='Laundry Room'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_laundry_room"><?php echo e(trans('words.amenities_laundry_room')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_bbq" value="BBQ" class="form-check-input" id="amenities_bbq"
                  <?php if($property->amenities_bbq=='BBQ'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_bbq"><?php echo e(trans('words.amenities_bbq')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_terrace" value="Terrace" class="form-check-input" id="amenities_terrace"
                  <?php if($property->amenities_terrace=='Terrace'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_terrace"><?php echo e(trans('words.amenities_terrace')); ?></label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_sauna" value="Sauna" class="form-check-input" id="amenities_sauna" 
                  <?php if($property->amenities_sauna=='Sauna'): ?> checked <?php endif; ?>>
                  <label class="form-check-label" for="amenities_sauna"><?php echo e(trans('words.amenities_sauna')); ?></label>
                </div>
            </div>

          </div>  
        </div>


        <div class=" b-sec">
           <div class="information-box">
              <h3><?php echo e(trans('words.nearest_palces')); ?></h3>
                
                <div class="box-content row">
              
                    <div class="field-row col-md-4">
                       <h4><?php echo e(trans('words.school')); ?></h4>
                       <input type="text" name="nearest_school_km" value="<?php echo e($property->nearest_school_km); ?>" placeholder="0.5 KM">
                    </div>
                    
                    <div class="field-row col-md-4">
                       <h4><?php echo e(trans('words.hospital')); ?></h4>
                       <input type="text" name="nearest_hospital_km" value="<?php echo e($property->nearest_hospital_km); ?>" placeholder="1 KM">
                    </div>
              
                     <div class="field-row col-md-4">
                       <h4><?php echo e(trans('words.mall')); ?></h4>
                       <input type="text" name="nearest_mall_km" value="<?php echo e($property->nearest_mall_km); ?>" placeholder="1.5 KM">
                    </div>
                    <div class="field-row col-md-4">
                        <h4><?php echo e(trans('words.bus_station')); ?></h4>
                         <input type="text" name="nearest_bus_stand_km" value="<?php echo e($property->nearest_bus_stand_km); ?>" placeholder="1.3 KM">
                     </div>
                                
                     <div class="field-row col-md-4">
                       <h4><?php echo e(trans('words.airport')); ?></h4>
                       <input type="text" name="nearest_airport_km" value="<?php echo e($property->nearest_airport_km); ?>" placeholder="3 KM">
                    </div>                    
                     
                    <div class="field-row col-md-4">
                        <h4><?php echo e(trans('words.railway')); ?></h4>
                         <input type="text" name="nearest_railway_km" value="<?php echo e($property->nearest_railway_km); ?>" placeholder="2.1 KM">
                      </div>
                    

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.nearest_park_km')); ?></h4>
                      <input type="text" name="nearest_park_km" value="<?php echo e($property->nearest_park_km); ?>" placeholder="3.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.nearest_mosque_km')); ?></h4>
                      <input type="text" name="nearest_mosque_km" value="<?php echo e($property->nearest_mosque_km); ?>" placeholder="1.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.nearest_playground_km')); ?></h4>
                      <input type="text" name="nearest_playground_km" value="<?php echo e($property->nearest_playground_km); ?>" placeholder="1.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.nearest_departmental_store_km')); ?></h4>
                      <input type="text" name="nearest_departmental_store_km" value="<?php echo e($property->nearest_departmental_store_km); ?>" placeholder="0.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.nearest_restaurant_km')); ?></h4>
                      <input type="text" name="nearest_restaurant_km" value="<?php echo e($property->nearest_restaurant_km); ?>" placeholder="1.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.nearest_fire_service_km')); ?></h4>
                      <input type="text" name="nearest_fire_service_km" value="<?php echo e($property->nearest_fire_service_km); ?>" placeholder="1.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.nearest_fire_service_km')); ?></h4>
                      <input type="text" name="nearest_police_station_km" value="<?php echo e($property->nearest_police_station_km); ?>" placeholder="2.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.nearest_pharmacy_km')); ?></h4>
                      <input type="text" name="nearest_pharmacy_km" value="<?php echo e($property->nearest_pharmacy_km); ?>" placeholder="2.5 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.nearest_grocery_bazar_km')); ?></h4>
                      <input type="text" name="nearest_grocery_bazar_km" value="<?php echo e($property->nearest_grocery_bazar_km); ?>" placeholder="1.5 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4><?php echo e(trans('words.nearest_govt_office_km')); ?></h4>
                      <input type="text" name="nearest_govt_office_km" value="<?php echo e($property->nearest_govt_office_km); ?>" placeholder="2.5 KM">
                  </div>


                </div>  
            </div>
         
                   
        </div>

      <div class="row b-sec" align="center">
          <button type="submit" class="btn btn-lg submit"><?php echo e(trans('words.save_changes')); ?></button>
        </div>
      <?php echo Form::close(); ?>

    </div>
  </section>
    <!-- end:content -->
 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
<style>
        button.multiselect.dropdown-toggle.btn.btn-default {
            min-width: 495px;
            height: 45px;
            border: 2px solid #ddd;
        }
        li.multiselect-item.multiselect-filter .input-group .input-group-addon,
        input.form-control.multiselect-search {
            height: 30px !important;
        }
        body.submit-property .information-box .box-content .field-row .input-group .input-group-addon {
            font-size: 1.2em;
        }
      </style>          
    <link href="<?php echo e(URL::asset('site_assets/alert-toastr/toastr.css')); ?> " rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(URL::asset('site_assets/dist-select/css/bootstrap-multiselect.css')); ?>" type="text/css"/>
  <?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script src="<?php echo e(URL::asset('site_assets/alert-toastr/toastr.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(URL::asset('site_assets/dist-select/js/bootstrap-multiselect.js')); ?>"></script>

<script type="text/javascript">
//Dropdown selection
$(document).ready(function() {
    $('#example-getting-started').multiselect({
        nonSelectedText: 'Location',
        enableFiltering: true,
        //includeSelectAllOption: true,
        maxHeight: 300,
        dropUp: true
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
<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/pages/edit_property.blade.php ENDPATH**/ ?>