<?php $__env->startSection('head_title', trans('words.inquiries').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
<!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="<?php if(getcong('title_bg')): ?> <?php echo e(URL::asset('upload/'.getcong('title_bg'))); ?> <?php else: ?> <?php echo e(URL::asset('site_assets/img/breadcrumb-bg.jpg')); ?> <?php endif; ?>">
    
  </section>
  <!--Breadcrumb Section-->
 <div class="container">
  <div class="min_profile">
  <div class="row">
    <?php echo $__env->make("_particles.sidebar_user", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="col-lg-9 col-md-9 min_form">
      <?php if(Session::has('flash_message')): ?>
                  <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                      <?php echo e(Session::get('flash_message')); ?>

                  </div>
        <?php endif; ?>
      <div class="table-responsive properties_min">
        <table class="my-properties-list">
          <tbody>
            <tr>
              <th style="width: 10%;"><?php echo e(trans('words.property_id')); ?></th>
              <th><?php echo e(trans('words.name')); ?></th>
              <th><?php echo e(trans('words.email')); ?></th>
              <th><?php echo e(trans('words.phone')); ?></th>
              <th><?php echo e(trans('words.message')); ?></th>
              <th><?php echo e(trans('words.action')); ?></th>
            </tr>
          <?php $__currentLoopData = $inquiries_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $inquiries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <td style="text-align: center;"><?php echo e($inquiries->property_id); ?></td>
              <td class="property-post-status"><?php echo e($inquiries->name); ?></td>
              <td><?php echo e($inquiries->email); ?></td>
              <td class="property-post-status"><?php echo e($inquiries->phone); ?></td>
              <td class="property-title"><p class="desc"><?php echo e($inquiries->message); ?></p></td>
               
              <td class="property-actions">                
                <a href="<?php echo e(url('inquiries/delete/'.Crypt::encryptString($inquiries->id))); ?>" onclick="return confirm('<?php echo e(trans('words.dlt_warning_text')); ?>')"><i class="fa fa-close icon"></i><?php echo e(trans('words.remove')); ?></a>
              </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </tbody></table>
        <?php echo $__env->make('_particles.pagination', ['paginator' => $inquiries_list], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
        
        
    
    </div><!-- end col -->
  </div>
  </div>
  
  </div>


  <?php $__env->stopSection(); ?>
<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/pages/inquiries_list.blade.php ENDPATH**/ ?>