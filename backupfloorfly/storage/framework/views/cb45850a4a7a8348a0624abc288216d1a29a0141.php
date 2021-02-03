<style type="text/css">
    .ui-widget.ui-widget-content{
        border: 1px solid #c5c5c5;
    }
    .ui-widget-content{
        background: #fff;
        color: #333;
    }
    .src-location-input{
        position: relative;
        display: block;
    }
    ul.ui-menu.ui-widget.ui-widget-content.ui-autocomplete.ui-front{
        padding: 8px;
        z-index: 999;
        width: 300px !important;
    }
h1{
      text-align:center;
      margin-bottom:40px;
      margin-top:20px;
      color:white;
      font-size:20px;
    }
</style>

<div class="property-search-form horizontal">
<h1>Search Apartments, Plots and Flats For Sell In Dhaka City</h1>
  <?php echo Form::open(array('url' => array('searchproperties'),'class'=>'','name'=>'search_form','id'=>'search_form','role'=>'form')); ?> 

      <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
            <?php echo e(Session::get('success')); ?>

        </div>
      <?php endif; ?>


    <div class="property-search-form2 horizontal2">
      <div class="main-search-section">
        <div class="row">
          <div class="col-xs-12 col-md-5 nopadding2">
            <div class="form-group agr-fields src-height src-location-input">
              <!-- <input type="text" onkeyup="invoice_productList(1);" class="form-control productSelection" name="location" id="keyword">
               -->
              <input type="text" name="location" onkeyup="invoice_productList(1);" placeholder="Type Location" class="form-control productSelection" id="keyword">

              <input type="hidden" class="autocomplete_hidden_value product_id_1"/>
              <input type="hidden" class="sl" value="1">
              <input type="hidden" class="baseUrl" value=""/>
              <span class="absolute_label">Location</span>
            </div>
          </div>

          <div class="col-sm-6 col-md-5 nopadding2">
            <div class="form-group agr-fields src-height">
              <select id="proeprty-type" name="proeprty_type" class="form-control">
                <option value="">Property Type</option>
                <?php $__currentLoopData = \App\Types::orderBy('types')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($type->id); ?>"><?php echo e($type->types); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
              <span class="absolute_label">Property Type</span>
            </div>  
          </div>

            <div class="col-sm-6 col-md-2">
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

          <div class="col-xs-6 col-md-5 nopadding2">
            <div class="form-group agr-fields">
                <!-- <input type="text" placeholder="Size (sft)" name="build_area" id="build_area"  class="form-control"> -->
                <div class="dropdown_numberbox">
                  <span class="absolute_label">Size (sft)</span>
                  <div class="dropdown_numberbox_toggle" id="size-dropdwon">
                    <span id="get_min_text_data">0</span>
                    <span>to</span>
                    <span type="button" id="get_max_text_data">Any</span>
                    <span class="caret-down"><i class="fa fa-angle-down"></i></span>
                  </div>

                  <div class="dropdown_number_list size_dropdown" id="size-dropdwon-sub" style="display:none">
                    <div class="show_limit_size"></div>
                    <div class="drop_left_box">
                      <div class="input_value1">
                          <input type="text" class="form-contorl input-border" id="get_min_data_value" name="get_min_data_value"/>
                      </div>
                      <div class="sDataList sizemin">
                         <span class="data_min active" data-id="0,0" tabindex="-1">0</span>
                         <span class="data_min" data-id="8,00" tabindex="-1">800</span>
                         <span class="data_min" data-id="1,000" tabindex="-1">1,000</span>
                         <span class="data_min" data-id="1,200" tabindex="-1">1,200</span>
                         <span class="data_min" data-id="1,400" tabindex="-1">1,400</span>
                         <span class="data_min" data-id="1,600" tabindex="-1">1,600</span>
                         <span class="data_min" data-id="1,800" tabindex="-1">1,800</span>
                         <span class="data_min" data-id="2,000" tabindex="-1">2,000</span>
                         <span class="data_min" data-id="2,200" tabindex="-1">2,200</span>
                         <span class="data_min" data-id="2,400" tabindex="-1">2,400</span>
                         <span class="data_min" data-id="2,600" tabindex="-1">2,600</span>
                         <span class="data_min" data-id="2,800" tabindex="-1">2,800</span>
                         <span class="data_min" data-id="3,000" tabindex="-1">3,000</span>
                         <span class="data_min" data-id="3,250" tabindex="-1">3,250</span>
                         <span class="data_min" data-id="3,500" tabindex="-1">3,500</span>
                         <span class="data_min" data-id="3,750" tabindex="-1">3,750</span>
                         <span class="data_min" data-id="4,000" tabindex="-1">4,000</span>
                         <span class="data_min" data-id="4,250" tabindex="-1">4,250</span>
                         <span class="data_min" data-id="4,500" tabindex="-1">4,500</span>
                         <span class="data_min" data-id="4,750" tabindex="-1">4,750</span>
                         <span class="data_min" data-id="5,000" tabindex="-1">5,000</span>
                         <span class="data_min" data-id="5,250" tabindex="-1">5,250</span>
                         <span class="data_min" data-id="5,500" tabindex="-1">5,500</span>
                         <span class="data_min" data-id="5,700" tabindex="-1">5,700</span>
                         <span class="data_min" data-id="6,000" tabindex="-1">6,000</span>
                         <span class="data_min" data-id="6,500" tabindex="-1">6,500</span>
                         <span class="data_min" data-id="7,000" tabindex="-1">7,000</span>
                         <span class="data_min" data-id="7,500" tabindex="-1">7,500</span>
                         <span class="data_min" data-id="8,000" tabindex="-1">8,000</span>
                         <span class="data_min" data-id="8,500" tabindex="-1">8,500</span>
                         <span class="data_min" data-id="9,000" tabindex="-1">9,000</span>
                         <span class="data_min" data-id="9,500" tabindex="-1">9,500</span>
                         <span class="data_min" data-id="10,000" tabindex="-1">10,000</span>
                         <span class="data_min" data-id="11,000" tabindex="-1">11,000</span>
                         <span class="data_min" data-id="12,000" tabindex="-1">12,000</span>
                         <span class="data_min" data-id="13,000" tabindex="-1">13,000</span>
                         <span class="data_min" data-id="14,000" tabindex="-1">14,000</span>
                         <span class="data_min" data-id="15,000" tabindex="-1">15,000</span>
                         <span class="data_min" data-id="16,000" tabindex="-1">16,000</span>
                         <span class="data_min" data-id="18,000" tabindex="-1">18,000</span>
                         <span class="data_min" data-id="20,000" tabindex="-1">20,000</span>
                         <span class="data_min" data-id="22,000" tabindex="-1">22,000</span>
                         <span class="data_min" data-id="24,000" tabindex="-1">24,000</span>
                         <span class="data_min" data-id="26,000" tabindex="-1">26,000</span>
                         <span class="data_min" data-id="28,000" tabindex="-1">28,000</span>
                         <span class="data_min" data-id="30,000" tabindex="-1">30,000</span>
                         <span class="data_min" data-id="32,000" tabindex="-1">32,000</span>
                         <span class="data_min" data-id="34,000" tabindex="-1">34,000</span>
                         <span class="data_min" data-id="36,000" tabindex="-1">36,000</span>
                         <span class="data_min" data-id="38,000" tabindex="-1">38,000</span>
                         <span class="data_min" data-id="40,000" tabindex="-1">40,000</span>
                         <span class="data_min" data-id="42,000" tabindex="-1">42,000</span>
                      </div>
                    </div>

                    <div class="drop_rigth_box">
                        <div class="input_value1">
                           <input type="text" class="form-contorl input-border" id="get_max_data_value" name="get_max_data_value"/>
                        </div> 
                      <div class="sDataList sizemax">
                        <span class="data_max active" data-id="any" tabindex="-1">Any</span>
                        <span class="data_max" data-id="8,00" tabindex="-1">800</span>
                        <span class="data_max" data-id="1,000" tabindex="-1">1,000</span>
                        <span class="data_max" data-id="1,200" tabindex="-1">1,200</span>
                        <span class="data_max" data-id="1,400" tabindex="-1">1,400</span>
                        <span class="data_max" data-id="1,600" tabindex="-1">1,600</span>
                        <span class="data_max" data-id="1,800" tabindex="-1">1,800</span>
                        <span class="data_max" data-id="2,000" tabindex="-1">2,000</span>
                        <span class="data_max" data-id="2,200" tabindex="-1">2,200</span>
                        <span class="data_max" data-id="2,400" tabindex="-1">2,400</span>
                        <span class="data_max" data-id="2,600" tabindex="-1">2,600</span>
                        <span class="data_max" data-id="2,800" tabindex="-1">2,800</span>
                        <span class="data_max" data-id="3,000" tabindex="-1">3,000</span>
                        <span class="data_max" data-id="3,250" tabindex="-1">3,250</span>
                        <span class="data_max" data-id="3,500" tabindex="-1">3,500</span>
                        <span class="data_max" data-id="3,750" tabindex="-1">3,750</span>
                        <span class="data_max" data-id="4,000" tabindex="-1">4,000</span>
                        <span class="data_max" data-id="4,250" tabindex="-1">4,250</span>
                        <span class="data_max" data-id="4,500" tabindex="-1">4,500</span>
                        <span class="data_max" data-id="4,750" tabindex="-1">4,750</span>
                        <span class="data_max" data-id="5,000" tabindex="-1">5,000</span>
                        <span class="data_max" data-id="5,250" tabindex="-1">5,250</span>
                        <span class="data_max" data-id="5,500" tabindex="-1">5,500</span>
                        <span class="data_max" data-id="5,700" tabindex="-1">5,700</span>
                        <span class="data_max" data-id="6,000" tabindex="-1">6,000</span>
                        <span class="data_max" data-id="6,500" tabindex="-1">6,500</span>
                        <span class="data_max" data-id="7,000" tabindex="-1">7,000</span>
                        <span class="data_max" data-id="7,500" tabindex="-1">7,500</span>
                        <span class="data_max" data-id="8,000" tabindex="-1">8,000</span>
                        <span class="data_max" data-id="8,500" tabindex="-1">8,500</span>
                        <span class="data_max" data-id="9,000" tabindex="-1">9,000</span>
                        <span class="data_max" data-id="9,500" tabindex="-1">9,500</span>
                        <span class="data_max" data-id="10,000" tabindex="-1">10,000</span>
                        <span class="data_max" data-id="11,000" tabindex="-1">11,000</span>
                        <span class="data_max" data-id="12,000" tabindex="-1">12,000</span>
                        <span class="data_max" data-id="13,000" tabindex="-1">13,000</span>
                        <span class="data_max" data-id="14,000" tabindex="-1">14,000</span>
                        <span class="data_max" data-id="15,000" tabindex="-1">15,000</span>
                        <span class="data_max" data-id="16,000" tabindex="-1">16,000</span>
                        <span class="data_max" data-id="18,000" tabindex="-1">18,000</span>
                        <span class="data_max" data-id="20,000" tabindex="-1">20,000</span>
                        <span class="data_max" data-id="22,000" tabindex="-1">22,000</span>
                        <span class="data_max" data-id="24,000" tabindex="-1">24,000</span>
                        <span class="data_max" data-id="26,000" tabindex="-1">26,000</span>
                        <span class="data_max" data-id="28,000" tabindex="-1">28,000</span>
                        <span class="data_max" data-id="30,000" tabindex="-1">30,000</span>
                        <span class="data_max" data-id="32,000" tabindex="-1">32,000</span>
                        <span class="data_max" data-id="34,000" tabindex="-1">34,000</span>
                        <span class="data_max" data-id="36,000" tabindex="-1">36,000</span>
                        <span class="data_max" data-id="38,000" tabindex="-1">38,000</span>
                        <span class="data_max" data-id="40,000" tabindex="-1">40,000</span>
                        <span class="data_max" data-id="42,000" tabindex="-1">42,000</span>
                      </div>
                    </div>
                    <a href="#" class="close size-close pull-right">Close</a>
                  </div>
                 </div> <!--/.dropdown_numberbox-->
              
            </div>
          </div>

          

          <div class="col-xs-6 col-md-5 nopadding2">
            <div class="form-group agr-fields">
              <!-- <input type="text" placeholder="Price" name="price" id="price" class="form-control"> -->
                <div class="dropdown_numberbox">
                  <span class="absolute_label">Price (BDT)</span>

                  <div class="dropdown_numberbox_toggle price_dropdown" id="price-dropdwon">
                    <span id="get_min_text_price">0</span>
                    <span>to</span>
                    <span type="button" id="get_max_text_price">Any</span>
                    <span class="caret-down"><i class="fa fa-angle-down"></i></span>
                  </div>

                  <div class="dropdown_number_list" id="price-dropdwon-sub" style="display:none">
                    <div class="show_limit_price"></div>
                    <div class="drop_left_box">
                      <div class="input_value1">
                          <input type="text" class="form-contorl input-border" id="get_min_price_value" name="get_min_price_value"/>
                      </div>
                      <div class="sDataList pricemin">
                        <span class="data_min_price active" data-id="0,0" tabindex="-1">0</span>
                        <span class="data_min_price" data-id="500,000" tabindex="-1">500,000</span>
                        <span class="data_min_price" data-id="1,000,000" tabindex="-1">1,000,000</span>
                        <span class="data_min_price" data-id="1,500,000" tabindex="-1">1,500,000</span>
                        <span class="data_min_price" data-id="2,000,000" tabindex="-1">2,000,000</span>
                        <span class="data_min_price" data-id="2,500,000" tabindex="-1">2,500,000</span>
                        <span class="data_min_price" data-id="3,000,000" tabindex="-1">3,000,000</span>
                        <span class="data_min_price" data-id="3,500,000" tabindex="-1">3,500,000</span>
                        <span class="data_min_price" data-id="4,000,000" tabindex="-1">4,000,000</span>
                        <span class="data_min_price" data-id="4,500,000" tabindex="-1">4,500,000</span>
                        <span class="data_min_price" data-id="5,000,000" tabindex="-1">5,000,000</span>
                        <span class="data_min_price" data-id="5,500,000" tabindex="-1">5,500,000</span>
                        <span class="data_min_price" data-id="6,000,000" tabindex="-1">6,000,000</span>
                        <span class="data_min_price" data-id="6,500,000" tabindex="-1">6,500,000</span>
                        <span class="data_min_price" data-id="7,000,000" tabindex="-1">7,000,000</span>
                        <span class="data_min_price" data-id="7,500,000" tabindex="-1">7,500,000</span>
                        <span class="data_min_price" data-id="8,000,000" tabindex="-1">8,000,000</span>
                        <span class="data_min_price" data-id="8,500,000" tabindex="-1">8,500,000</span>
                        <span class="data_min_price" data-id="9,000,000" tabindex="-1">9,000,000</span>
                        <span class="data_min_price" data-id="9,500,000" tabindex="-1">9,500,000</span>
                        <span class="data_min_price" data-id="10,000,000" tabindex="-1">10,000,000</span>
                        <span class="data_min_price" data-id="10,500,000" tabindex="-1">10,500,000</span>
                        <span class="data_min_price" data-id="11,000,000" tabindex="-1">11,000,000</span>
                        <span class="data_min_price" data-id="11,500,000" tabindex="-1">11,500,000</span>
                        <span class="data_min_price" data-id="12,000,000" tabindex="-1">12,000,000</span>
                        <span class="data_min_price" data-id="12,500,000" tabindex="-1">12,500,000</span>
                        <span class="data_min_price" data-id="13,000,000" tabindex="-1">13,000,000</span>
                        <span class="data_min_price" data-id="13,500,000" tabindex="-1">13,500,000</span>
                        <span class="data_min_price" data-id="14,000,000" tabindex="-1">14,000,000</span>
                        <span class="data_min_price" data-id="14,500,000" tabindex="-1">14,500,000</span>
                        <span class="data_min_price" data-id="15,000,000" tabindex="-1">15,000,000</span>
                        <span class="data_min_price" data-id="15,500,000" tabindex="-1">15,500,000</span>
                        <span class="data_min_price" data-id="16,000,000" tabindex="-1">16,000,000</span>
                        <span class="data_min_price" data-id="16,500,000" tabindex="-1">16,500,000</span>
                        <span class="data_min_price" data-id="17,000,000" tabindex="-1">17,000,000</span>
                        <span class="data_min_price" data-id="17,500,000" tabindex="-1">17,500,000</span>
                        <span class="data_min_price" data-id="18,000,000" tabindex="-1">18,000,000</span>
                        <span class="data_min_price" data-id="18,500,000" tabindex="-1">18,500,000</span>
                        <span class="data_min_price" data-id="19,000,000" tabindex="-1">19,000,000</span>
                        <span class="data_min_price" data-id="19,500,000" tabindex="-1">19,500,000</span>
                        <span class="data_min_price" data-id="20,000,000" tabindex="-1">20,000,000</span>
                      </div>
                    </div>

                    <div class="drop_rigth_box">
                       <div class="input_value1">
                         <input type="text" class="form-contorl input-border" id="get_max_price_value" name="get_max_price_value"/>
                        </div> 
                      <div class="sDataList pricemax">
                        <span class="data_max_price active" data-id="any" tabindex="-1">any</span>
                        <span class="data_max_price" data-id="500,000" tabindex="-1">500,000</span>
                        <span class="data_max_price" data-id="1,000,000" tabindex="-1">1,000,000</span>
                        <span class="data_max_price" data-id="1,500,000" tabindex="-1">1,500,000</span>
                        <span class="data_max_price" data-id="2,000,000" tabindex="-1">2,000,000</span>
                        <span class="data_max_price" data-id="2,500,000" tabindex="-1">2,500,000</span>
                        <span class="data_max_price" data-id="3,000,000" tabindex="-1">3,000,000</span>
                        <span class="data_max_price" data-id="3,500,000" tabindex="-1">3,500,000</span>
                        <span class="data_max_price" data-id="4,000,000" tabindex="-1">4,000,000</span>
                        <span class="data_max_price" data-id="4,500,000" tabindex="-1">4,500,000</span>
                        <span class="data_max_price" data-id="5,000,000" tabindex="-1">5,000,000</span>
                        <span class="data_max_price" data-id="5,500,000" tabindex="-1">5,500,000</span>
                        <span class="data_max_price" data-id="6,000,000" tabindex="-1">6,000,000</span>
                        <span class="data_max_price" data-id="6,500,000" tabindex="-1">6,500,000</span>
                        <span class="data_max_price" data-id="7,000,000" tabindex="-1">7,000,000</span>
                        <span class="data_max_price" data-id="7,500,000" tabindex="-1">7,500,000</span>
                        <span class="data_max_price" data-id="8,000,000" tabindex="-1">8,000,000</span>
                        <span class="data_max_price" data-id="8,500,000" tabindex="-1">8,500,000</span>
                        <span class="data_max_price" data-id="9,000,000" tabindex="-1">9,000,000</span>
                        <span class="data_max_price" data-id="9,500,000" tabindex="-1">9,500,000</span>
                        <span class="data_max_price" data-id="10,000,000" tabindex="-1">10,000,000</span>
                        <span class="data_max_price" data-id="10,500,000" tabindex="-1">10,500,000</span>
                        <span class="data_max_price" data-id="11,000,000" tabindex="-1">11,000,000</span>
                        <span class="data_max_price" data-id="11,500,000" tabindex="-1">11,500,000</span>
                        <span class="data_max_price" data-id="12,000,000" tabindex="-1">12,000,000</span>
                        <span class="data_max_price" data-id="12,500,000" tabindex="-1">12,500,000</span>
                        <span class="data_max_price" data-id="13,000,000" tabindex="-1">13,000,000</span>
                        <span class="data_max_price" data-id="13,500,000" tabindex="-1">13,500,000</span>
                        <span class="data_max_price" data-id="14,000,000" tabindex="-1">14,000,000</span>
                        <span class="data_max_price" data-id="14,500,000" tabindex="-1">14,500,000</span>
                        <span class="data_max_price" data-id="15,000,000" tabindex="-1">15,000,000</span>
                        <span class="data_max_price" data-id="15,500,000" tabindex="-1">15,500,000</span>
                        <span class="data_max_price" data-id="16,000,000" tabindex="-1">16,000,000</span>
                        <span class="data_max_price" data-id="16,500,000" tabindex="-1">16,500,000</span>
                        <span class="data_max_price" data-id="17,000,000" tabindex="-1">17,000,000</span>
                        <span class="data_max_price" data-id="17,500,000" tabindex="-1">17,500,000</span>
                        <span class="data_max_price" data-id="18,000,000" tabindex="-1">18,000,000</span>
                        <span class="data_max_price" data-id="18,500,000" tabindex="-1">18,500,000</span>
                        <span class="data_max_price" data-id="19,000,000" tabindex="-1">19,000,000</span>
                        <span class="data_max_price" data-id="19,500,000" tabindex="-1">19,500,000</span>
                        <span class="data_max_price" data-id="20,000,000" tabindex="-1">20,000,000</span>
                      </div>
                    </div>
                      <a href="#" class="close price-close pull-right">Close</a>
                  </div>
                 </div> <!--/.dropdown_numberbox-->
            </div>
          </div>
          <div class="col-xs-6 col-md-2">
            <div class="form-group agr-fields border-none src-height">
                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </div>
          </div>
        </div> <!--/.row-->
      </div>
    </div>
    <?php echo Form::close(); ?>

</div>
<?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/_particles/search.blade.php ENDPATH**/ ?>