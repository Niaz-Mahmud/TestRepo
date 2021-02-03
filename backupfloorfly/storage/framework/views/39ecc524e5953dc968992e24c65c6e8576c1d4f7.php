<?php $__env->startSection('head_title', trans('words.my_invoice').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
<!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="<?php if(getcong('title_bg')): ?> <?php echo e(URL::asset('upload/'.getcong('title_bg'))); ?> <?php else: ?> <?php echo e(URL::asset('site_assets/img/breadcrumb-bg.jpg')); ?> <?php endif; ?>">
    <div class="inner-container container">
      <h1><?php echo e(trans('words.my_invoice')); ?></h1>
      <div class="breadcrumb">
        <ul class="list-inline">
          <li class="home"><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
          <li><a href="#"><?php echo e(trans('words.my_invoice')); ?></a></li>
        </ul>
      </div>
    </div>
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
              <th align="center"><?php echo e(trans('words.property')); ?></th>
              <th align="center"><?php echo e(trans('words.transaction_id')); ?></th>
              <th align="center"><?php echo e(trans('words.amount')); ?></th>
              <th align="center"><?php echo e(trans('words.tax')); ?></th>
              <th align="center"><?php echo e(trans('words.total_amount')); ?></th>                 
              <th align="center"><?php echo e(trans('words.date')); ?></th>
              <th align="center"><?php echo e(trans('words.invoice')); ?></th>
            </tr>
          
              
              <?php $__currentLoopData = $transaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $trans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <tr>               
                <td align="center"><?php echo e(\App\Properties::getPropertyInfo($trans->property_id)->property_name); ?> For <?php echo e(\App\Properties::getPropertyInfo($trans->property_id)->property_purpose); ?></td>          
                 <td align="center"><?php echo e($trans->payment_id); ?></td>
                 <td align="center"><?php echo getcong('currency_sign'); ?> <?php echo e($trans->payment_amount); ?></td>
                 <td align="center"><?php echo getcong('currency_sign'); ?><?php echo e($trans->tax_amount); ?></td>                  
                <td align="center"><?php echo getcong('currency_sign'); ?><?php echo e($trans->total_payment_amount); ?></td>
                <td align="center"><?php echo e(date('M,  jS, Y',$trans->date)); ?></td>
                <td align="center"><a href="<?php echo e(url('user_invoice/'. Crypt::encryptString($trans->id))); ?>" target="_blank" class="btn btn-default btn-rounded"><i class="fa fa-eye"></i></a></td>  
            </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

               
           
        </tbody></table>
        <?php echo $__env->make('_particles.pagination', ['paginator' => $transaction], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
        
        
    
    </div><!-- end col -->
  </div>
  </div>
  
  </div>


  <?php $__env->stopSection(); ?>
<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/pages/invoice_list.blade.php ENDPATH**/ ?>