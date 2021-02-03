    <?php
     $adss=\App\FrontDesign::where('type','sidebar ads')->get(); 
    ?>
 
      <div class="sidebar-box-ads">
          <div class="square-ads" id="sidebar_square_ads">
              <?php $__currentLoopData = $adss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($ads->link); ?>"> <img src="<?php echo e(URL::asset($ads->image)); ?>" alter="<?php echo e($ads->name); ?>"/></a>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
      </div>
   <?php /**PATH C:\xampp\htdocs\backupfloorfly\resources\views/_particles/ads_widget.blade.php ENDPATH**/ ?>