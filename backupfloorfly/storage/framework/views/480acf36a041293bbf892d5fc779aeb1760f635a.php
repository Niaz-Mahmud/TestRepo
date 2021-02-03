  <!-- Google Map -->
    <section id="google-map">
    <!-- The element that will contain our Google Map. This is used in both the Javascript and CSS above. -->
        <div id="map"></div>
    </section>
  <!-- End of Google Map -->
  <!-- Property Search Box -->
    <section id="property-search-container" class="container" style="margin-bottom: 0px;">
        <div class="property-search-form horizontal">
            <?php echo Form::open(array('url' => array('searchproperties'),'class'=>'','name'=>'search_form','id'=>'search_form','role'=>'form')); ?>

            <div class="main-search-sec">
                <div class="col-xs-6 col-sm-3 search-field">
                    <input type="text" placeholder="<?php echo e(trans('words.search_placeholder')); ?>" name="keyword" id="keyword" style="margin-bottom: 0px;border:1px solid #d4d4d4;border-bottom-color: #50AEE6;">
                </div>
                <div class="col-xs-6 col-sm-3 search-field">
                    <select id="proeprty-status" name="purpose">
                       <option value=""><?php echo e(trans('words.property_purpose')); ?></option>
                       <option value="<?php echo e(trans('words.purpose_sale')); ?>"><?php echo e(trans('words.for_sale')); ?></option>
                       <option value="<?php echo e(trans('words.purpose_rent')); ?>"><?php echo e(trans('words.for_rent')); ?></option>
                    </select>
                </div>
                <div class="col-xs-6 col-sm-3 search-field">
                    <select id="proeprty-type" name="type">
                      <option value=""><?php echo e(trans('words.property_type')); ?></option>
                      <?php $__currentLoopData = \App\Types::orderBy('types')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($type->id); ?>"><?php echo e($type->types); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>                 
              
                <div class="col-xs-6 col-sm-3 search-field">
                    <button class="btn" type="submit" name="submit"><?php echo e(trans('words.search')); ?></button>
                </div>
            </div>
            <?php echo Form::close(); ?> 
             
        </div>
    </section>
    <!-- End of Property Search Box --><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/_particles/mapsearch.blade.php ENDPATH**/ ?>