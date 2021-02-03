<!-- Main Slider -->
  <section id="main-slider">
    
    <?php $__currentLoopData = \App\Slider::orderBy('slider_title')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="items">
      <div class="img-container" data-bg-img="<?php echo e(URL::asset('upload/slides/'.$slide->image_name.'.jpg')); ?>"></div>
      <!-- Change the URL section based on your image\'s name -->
      
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </section>
  
  <!-- End of Main Slider -->

    <!-- Property Search Box -->
    <section id="property-search-container" class="container" style="margin-bottom: 0px;">
              
          <div class="property-search-form horizontal">
            <?php echo Form::open(array('url' => array('searchproperties'),'class'=>'','name'=>'search_form','id'=>'search_form','role'=>'form')); ?> 
    
              <div class="property-search-form2 horizontal2">
                <div class="main-search-section">
                  <div class="row">
                    <div class="col-xs-8 nopadding2">
                      <div class="form-group agr-fields">
                        <input type="text" class="form-control" placeholder="<?php echo e(trans('words.search_placeholder')); ?>" name="keyword" id="keyword"  required>
                      </div>
                    </div>

                    <div class="col-xs-4 nopadding2">
                      <div class="form-group agr-fields">
                        <select id="proeprty-type" name="type" class="form-control">
                          <option value=""><?php echo e(trans('words.property_type')); ?></option>
                          <?php $__currentLoopData = \App\Types::orderBy('types')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($type->id); ?>"><?php echo e($type->types); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>  
                    </div>

                  </div> <!--/.row-->

                  <div class="row">

                    <div class="col-xs-3 nopadding2">
                      <div class="form-group agr-fields">
                          <input type="text" placeholder="Size (sft)" name="build_area" id="build_area"  class="form-control">
                      </div>
                    </div>

                    <div class="col-xs-3 nopadding2">
                      <div class="form-group agr-fields">
                          
                          <select id="BEDS" name="bedrooms" class="form-control">
                            <option value="">Beds</option>
                            <option value="1" <?php if(old('bedrooms')=='1'): ?> selected <?php endif; ?>>1</option>
                            <option value="2" <?php if(old('bedrooms')=='2'): ?> selected <?php endif; ?>>2</option>
                            <option value="3" <?php if(old('bedrooms')=='3'): ?> selected <?php endif; ?>>3</option>
                            <option value="4" <?php if(old('bedrooms')=='4'): ?> selected <?php endif; ?>>4</option>
                            <option value="5" <?php if(old('bedrooms')=='5'): ?> selected <?php endif; ?>>5</option>
                            <option value="6" <?php if(old('bedrooms')=='6'): ?> selected <?php endif; ?>>6</option>
                            <option value="7" <?php if(old('bedrooms')=='7'): ?> selected <?php endif; ?>>7</option>
                            <option value="+8" <?php if(old('bedrooms')=='+8'): ?> selected <?php endif; ?>>+8</option>
                          </select>

                      </div>
                    </div>

                    <div class="col-xs-3 nopadding2">
                      <div class="form-group agr-fields">
                        <input type="text" placeholder="Price" name="price" id="price" class="form-control">
                      </div>
                    </div>

                    <div class="col-xs-3 nopadding2">
                      <div class="form-group agr-fields border-none">
                          <button class="btn btn-primary form-control">Submit</button>
                      </div>
                    </div>

                    

                  </div> <!--/.row-->
                </div>
              </div>
            
              <?php echo Form::close(); ?>

        
             
        </div>
    </section> 
    <!-- End of Property Search Box--><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/_particles/slidersearch.blade.php ENDPATH**/ ?>