

<div class="property-search-form horizontal">
  <?php echo Form::open(array('url' => array('searchproperties'),'class'=>'','name'=>'search_form','id'=>'search_form','role'=>'form')); ?> 

    <div class="property-search-form2 horizontal2">
      <div class="main-search-section">
        <div class="row">
          <div class="col-xs-5 nopadding2">
            <div class="form-group agr-fields src-height">
              <input type="text" class="form-control" name="location" id="keyword">
              <span class="absolute_label">Location</span>
            </div>
          </div>

          <div class="col-xs-5 nopadding2">
            <div class="form-group agr-fields src-height">
              <select id="proeprty-type" name="proeprty_type" class="form-control">
               
                <?php $__currentLoopData = \App\Types::orderBy('types')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($type->id); ?>"><?php echo e($type->types); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
              <span class="absolute_label">Property Type</span>
            </div>  
          </div>

          <div class="col-xs-2">
            <div class="form-group agr-fields src-height">
                
                <select id="BEDS" name="beds" class="form-control">
                  <option value="">All</option>
                  <option value="1" <?php if(old('bedrooms')=='1'): ?> selected <?php endif; ?>>1</option>
                  <option value="2" <?php if(old('bedrooms')=='2'): ?> selected <?php endif; ?>>2</option>
                  <option value="3" <?php if(old('bedrooms')=='3'): ?> selected <?php endif; ?>>3</option>
                  <option value="4" <?php if(old('bedrooms')=='4'): ?> selected <?php endif; ?>>4</option>
                  <option value="5" <?php if(old('bedrooms')=='5'): ?> selected <?php endif; ?>>5</option>
                  <option value="6" <?php if(old('bedrooms')=='6'): ?> selected <?php endif; ?>>6</option>
                  <option value="7" <?php if(old('bedrooms')=='7'): ?> selected <?php endif; ?>>7</option>
                  <option value="+8" <?php if(old('bedrooms')=='+8'): ?> selected <?php endif; ?>>+8</option>
                </select>
                
                <span class="absolute_label">Beds</span>

            </div>
          </div>

        </div> <!--/.row-->

        <div class="row">

          <div class="col-xs-5 nopadding2">
            <div class="form-group agr-fields">
                <!-- <input type="text" placeholder="Size (sft)" name="build_area" id="build_area"  class="form-control"> -->
                <div class="dropdown_numberbox">
                  <span class="absolute_label">Size (sft)</span>
                  <div class="dropdown_numberbox_toggle" id="size-dropdwon">
                    <span id="get_min_text_data">0</span>
                    <span>to</span>
                    <span type="button" id="get_max_text_data">Any</span>
                    <span class="caret-down"><i class="fa fa-caret-down"></i></span>
                  </div>

                  <div class="dropdown_number_list size_dropdown" id="size-dropdwon-sub" style="display:none">
                    <div class="show_limit_size"></div>
                    <div class="drop_left_box">
                      <div class="input_value1">
                          <input type="text" class="form-contorl input-border" id="get_min_data_value" name="get_min_data_value"/>
                      </div>
                      <div class="sDataList sizemin">
                         <span class="data_min active" data-id="0" tabindex="-1">0</span>
                         <span class="data_min" data-id="1000" tabindex="-1">1000</span>
                         <span class="data_min" data-id="5000" tabindex="-1">5000</span>
                         <span class="data_min" data-id="10000" tabindex="-1">10000</span>
                         <span class="data_min" data-id="20000" tabindex="-1">20000</span>
                         <span class="data_min" data-id="30000" tabindex="-1">30000</span>
                         <span class="data_min" data-id="40000" tabindex="-1">40000</span>
                         <span class="data_min" data-id="50000" tabindex="-1">50000</span>
                      </div>
                    </div>

                    <div class="drop_rigth_box">
                        <div class="input_value1">
                           <input type="text" class="form-contorl input-border" id="get_max_data_value" name="get_max_data_value"/>
                        </div> 
                      <div class="sDataList sizemax">
                        <span class="data_max active" data-id="any" tabindex="-1">Any</span>
                        <span class="data_max" data-id="1000" tabindex="-1">1000</span>
                        <span class="data_max" data-id="5000" tabindex="-1">5000</span>
                        <span class="data_max" data-id="10000" tabindex="-1">10000</span>
                        <span class="data_max" data-id="20000" tabindex="-1">20000</span>
                        <span class="data_max" data-id="30000" tabindex="-1">30000</span>
                        <span class="data_max" data-id="40000" tabindex="-1">40000</span>
                        <span class="data_max" data-id="50000" tabindex="-1">50000</span>
                      </div>
                    </div>
                    <a href="#" class="close size-close pull-right">Close</a>
                  </div>
                 </div> <!--/.dropdown_numberbox-->
              
            </div>
          </div>

          

          <div class="col-xs-5 nopadding2">
            <div class="form-group agr-fields">
              <!-- <input type="text" placeholder="Price" name="price" id="price" class="form-control"> -->
                <div class="dropdown_numberbox">
                  <span class="absolute_label">Price (BDT)</span>

                  <div class="dropdown_numberbox_toggle price_dropdown" id="price-dropdwon">
                    <span id="get_min_text_price">0</span>
                    <span>to</span>
                    <span type="button" id="get_max_text_price">Any</span>
                    <span class="caret-down"><i class="fa fa-caret-down"></i></span>
                  </div>

                  <div class="dropdown_number_list" id="price-dropdwon-sub" style="display:none">
                    <div class="show_limit_price"></div>
                    <div class="drop_left_box">
                      <div class="input_value1">
                          <input type="text" class="form-contorl input-border" id="get_min_price_value" name="get_min_price_value"/>
                      </div>
                      <div class="sDataList pricemin">
                        <span class="data_min_price active" data-id="0" tabindex="-1">0</span>
                        <span class="data_min_price" data-id="1000" tabindex="-1">1000</span>
                        <span class="data_min_price" data-id="5000" tabindex="-1">5000</span>
                         <span class="data_min_price" data-id="10000" tabindex="-1">10000</span>
                         <span class="data_min_price" data-id="20000" tabindex="-1">20000</span>
                         <span class="data_min_price" data-id="30000" tabindex="-1">30000</span>
                         <span class="data_min_price" data-id="40000" tabindex="-1">40000</span>
                         <span class="data_min_price" data-id="50000" tabindex="-1">50000</span>
                      </div>
                    </div>

                    <div class="drop_rigth_box">
                       <div class="input_value1">
                         <input type="text" class="form-contorl input-border" id="get_max_price_value" name="get_max_price_value"/>
                        </div> 
                      <div class="sDataList pricemax">
                        <span class="data_max_price active" data-id="any" tabindex="-1">any</span>
                        <span class="data_max_price" data-id="1000" tabindex="-1">1000</span>
                        <span class="data_max_price" data-id="5000" tabindex="-1">5000</span>
                        <span class="data_max_price" data-id="10000" tabindex="-1">10000</span>
                        <span class="data_max_price" data-id="20000" tabindex="-1">20000</span>
                        <span class="data_max_price" data-id="30000" tabindex="-1">30000</span>
                        <span class="data_max_price" data-id="40000" tabindex="-1">40000</span>
                        <span class="data_max_price" data-id="50000" tabindex="-1">50000</span>
                      </div>
                    </div>
                      <a href="#" class="close price-close pull-right">Close</a>
                  </div>
                 </div> <!--/.dropdown_numberbox-->
            </div>
          </div>

          <div class="col-xs-2">
            <div class="form-group agr-fields border-none src-height">
                <button type="button" class="btn btn-primary form-control">Submit</button>
            </div>
          </div>

        </div> <!--/.row-->
      </div>
    </div>
  
    <?php echo Form::close(); ?>


   
</div>
<?php /**PATH /home/crafyvzz/public_html/floorfly.com/resources/views/_particles/search.blade.php ENDPATH**/ ?>