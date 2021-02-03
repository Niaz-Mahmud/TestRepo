<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo e(getcong('site_name')); ?> <?php echo e(trans('words.admin')); ?></title>

	<link href="<?php echo e(URL::asset('upload/'.getcong('site_favicon'))); ?>" rel="shortcut icon" type="image/x-icon" />
	<link rel="stylesheet" href="<?php echo e(URL::asset('admin_assets/css/style.css')); ?>">
	
	<script src="<?php echo e(URL::asset('admin_assets/js/jquery.js')); ?>"></script>


</head>

<body class="sidebar-push  sticky-footer">
     
     	<!-- BEGIN TOPBAR -->
         
         <?php echo $__env->make("admin.topbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         
        <!-- END TOPBAR -->

	      <!-- BEGIN SIDEBAR -->
	       
	       <?php echo $__env->make("admin.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	      
	      <!-- END SIDEBAR -->
  		<div class="container-fluid">
  		
 		   <?php echo $__env->yieldContent("content"); ?>
 		   
	 		<div class="footer">
				<a href="<?php echo e(URL::to('admin/dashboard')); ?>" class="brand">
					<?php echo e(getcong('site_name')); ?>

				</a>
				<ul>
					 
				</ul>
			</div>
  		</div>


  <div class="overlay-disabled"></div>


  <!-- Plugins -->
  <script src="<?php echo e(URL::asset('admin_assets/js/plugins.min.js')); ?>"></script>

  
  <!-- Loaded only in index.html for demographic vector map-->
  <script src="<?php echo e(URL::asset('admin_assets/js/jvectormap.js')); ?>"></script>
  
  <!-- App Scripts -->
  <script src="<?php echo e(URL::asset('admin_assets/js/scripts.js')); ?>"></script>

  <script>
 $(function(){
    // bind change event to select
    //Users
    $('#plan_select').on('change', function () {
        var url = $(this).val(); // get selected value
       
        if (url) { // require a URL
            window.location = url; // redirect
        }
        return false;
    });

    //Transactions
    $('#gateway_select').on('change', function () {
        var url = $(this).val(); // get selected value
       
        if (url) { // require a URL
            window.location = url; // redirect
        }
        return false;
    });

  });
</script>

<?php echo $__env->yieldContent("scripts"); ?>

</body>
 
</html>   
     		   
     		    <?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/admin/admin_app.blade.php ENDPATH**/ ?>