<div class="col-lg-3 col-md-3 sidebar-left">
      <div class="widget member-card">
        <div class="member-card-header">
          <a href="Javascript::void();" class="member-card-avatar">
            <?php if(Auth::user()->image_icon AND file_exists(public_path('upload/members/'.Auth::user()->image_icon.'-s.jpg'))): ?>          
            <img src="<?php echo e(URL::asset('upload/members/'.Auth::user()->image_icon.'-s.jpg')); ?>" alt="">
            <?php else: ?>
              <img src="<?php echo e(URL::asset('site_assets/img/user_demo.png')); ?>" alt="">
            <?php endif; ?>
            
          </a>
          <h3><?php echo e(Auth::user()->name); ?></h3>
          <p><i class="fa fa-envelope icon"></i><?php echo e(Auth::user()->email); ?></p>
        </div>
        <div class="member-card-content">
          
          <ul>
            <li class="<?php echo e(classActiveUserMenu('dashboard')); ?>"><a href="<?php echo e(URL::to('dashboard')); ?>"><i class="fa fa-dashboard icon"></i><?php echo e(trans('words.dashboard_text')); ?></a></li>            
            <li class="<?php echo e(classActiveUserMenu('my_properties')); ?>"><a href="<?php echo e(URL::to('my_properties')); ?>"><i class="fa fa-home icon"></i><?php echo e(trans('words.my_properties')); ?></a></li>
            <li class="<?php echo e(classActiveUserMenu('interest_properties')); ?>"><a href="<?php echo e(URL::to('interest_properties')); ?>"><i class="fa fa-home icon"></i><?php echo e('Interested Property'); ?></a></li>
            <li class="<?php echo e(classActiveUserMenu('inquiries')); ?>"><a href="<?php echo e(URL::to('inquiries')); ?>"><i class="fa fa-envelope icon"></i><?php echo e(trans('words.inquiries')); ?></a></li>
            <li class="<?php echo e(classActiveUserMenu('invoice')); ?>"><a href="<?php echo e(URL::to('invoice')); ?>"><i class="fa fa-file icon"></i><?php echo e(trans('words.my_invoice')); ?></a></li>
            <li class="<?php echo e(classActiveUserMenu('profile')); ?>"><a href="<?php echo e(URL::to('profile')); ?>"><i class="fa fa-user icon"></i><?php echo e(trans('words.profile')); ?></a></li>
            <li class="<?php echo e(classActiveUserMenu('change_pass')); ?>"><a href="<?php echo e(URL::to('change_pass')); ?>"><i class="fa fa-lock icon"></i><?php echo e(trans('words.change_password')); ?></a></li>
            <li><a href="<?php echo e(URL::to('logout')); ?>"><i class="fa fa-sign-out icon"></i><?php echo e(trans('words.logout')); ?></a></li>
            
          </ul>
        </div>
      </div>
    </div><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/_particles/sidebar_user.blade.php ENDPATH**/ ?>