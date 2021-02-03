<?php $__env->startSection("content"); ?>
<div id="main">
	<div class="page-header">
		 
		<h2><?php echo e(trans('words.transactions')); ?></h2>
	</div>
	<?php if(Session::has('flash_message')): ?>
				    <div class="alert alert-success">
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
				        <?php echo e(Session::get('flash_message')); ?>

				    </div>
	<?php endif; ?>

<div class="panel panel-shadow">
        
        <div class="panel-body"> 
        <div class="col-sm-3">
            <select class="form-control" name="gateway_select" id="gateway_select">
                  <option value=""><?php echo e(trans('words.filter_by_gateway')); ?></option>                 
                  <option value="?gateway=Paypal" <?php if(isset($_GET['gateway']) && $_GET['gateway']=='Paypal' ): ?> selected <?php endif; ?>>Paypal</option>
                  <option value="?gateway=Stripe" <?php if(isset($_GET['gateway']) && $_GET['gateway']=='Stripe' ): ?> selected <?php endif; ?>>Stripe</option>                
            </select>
        </div>
        <div class="col-sm-5">          
         <?php echo Form::open(array('url' => 'admin/transactions','class'=>'form-inline filter','id'=>'search','role'=>'form','method'=>'get')); ?>	
            <span class="bold text-muted"><?php echo e(trans('words.search')); ?></span>
            <div class="form-group">
                <input type="text" class="form-control" id="" name="s" placeholder="<?php echo e(trans('words.search_by_email_trans')); ?>">
            </div>             
            <div class="form-group">              
                <button type="submit" class="btn btn-default-dark  pull-right"><?php echo e(trans('words.search')); ?></button>
            </div>
        <?php echo Form::close(); ?>

        </div>
        <a href="<?php echo e(URL::to('admin/transactions/export')); ?>" class="btn btn-info btn-md waves-effect waves-light pull-right" data-toggle="tooltip" title="<?php echo e(trans('words.export_transactions')); ?>"><i class="fa fa-file-excel-o"></i> <?php echo e(trans('words.export_transactions')); ?></a>
    	</div>
	</div>
     
<div class="panel panel-default panel-shadow">
    <div class="panel-body table-responsive">
         
        <table class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
	            <tr>
	                <th><?php echo e(trans('words.property_id')); ?></th>
                    <th><?php echo e(trans('words.name')); ?></th>
                    <th><?php echo e(trans('words.email')); ?></th>
                    <th><?php echo e(trans('words.gateway')); ?></th>
                    <th><?php echo e(trans('words.transaction_id')); ?></th>
                    <th><?php echo e(trans('words.amount')); ?></th>
                    <th><?php echo e(trans('words.tax_amount')); ?></th>
                    <th><?php echo e(trans('words.total_amount')); ?></th>	                
                    <th><?php echo e(trans('words.date')); ?></th>
                    <th><?php echo e(trans('words.invoice')); ?></th>
	                 
	            </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $transactions_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $trans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         	   <tr>
            	<td><?php echo e($trans->property_id); ?></td>
                <td><?php echo e(getUserInfo($trans->user_id)->name); ?></td>           	 
                <td><?php echo e($trans->email); ?></td>
                <td><?php echo e($trans->gateway); ?></td>
                <td><?php echo e($trans->payment_id); ?></td>
                <td><?php echo e(getcong('currency_sign').''.$trans->payment_amount); ?></td>
                <td><?php echo e(getcong('currency_sign').''.$trans->tax_amount); ?></td>
                <td><?php echo e(getcong('currency_sign').''.$trans->total_payment_amount); ?></td>
                <td><?php echo e(date('M,  jS, Y',$trans->date)); ?></td>
                <td><a href="<?php echo e(url('admin/transactions/user_invoice/'. Crypt::encryptString($trans->id))); ?>" class="btn btn-icon waves-effect waves-light btn-success m-b-5 m-r-5" data-toggle="tooltip" title="<?php echo e(trans('words.view_invoice')); ?>" target="_blank"> <i class="fa fa-file-text"></i> </a></td>  
            </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
            </tbody>
            <tfoot>
		        <tr>
		            <td colspan="8" class="text-center">
		            	<?php echo $__env->make('admin.pagination', ['paginator' => $transactions_list], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
		                 
		            </td>
		        </tr>
        	</tfoot>
        </table>
    </div>
    <div class="clearfix"></div>
</div>

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/admin/pages/transaction.blade.php ENDPATH**/ ?>