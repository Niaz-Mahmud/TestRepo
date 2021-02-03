<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{getcong('site_name')}} {{trans('words.admin')}}</title>

	<link href="{{ URL::asset('upload/'.getcong('site_favicon')) }}" rel="shortcut icon" type="image/x-icon" />
	<link rel="stylesheet" href="{{ URL::asset('admin_assets/css/style.css') }}">
	
	<script src="{{ URL::asset('admin_assets/js/jquery.js') }}"></script>


</head>

<body class="sidebar-push  sticky-footer">
     
     	<!-- BEGIN TOPBAR -->
         
         @include("admin.topbar")
         
        <!-- END TOPBAR -->

	      <!-- BEGIN SIDEBAR -->
	       
	       @include("admin.sidebar")
	      
	      <!-- END SIDEBAR -->
  		<div class="container-fluid">
  		
 		   @yield("content")
 		   
	 		<div class="footer">
				<a href="{{ URL::to('admin/dashboard') }}" class="brand">
					{{getcong('site_name')}}
				</a>
				<ul>
					 
				</ul>
			</div>
  		</div>


  <div class="overlay-disabled"></div>


  <!-- Plugins -->
  <script src="{{ URL::asset('admin_assets/js/plugins.min.js') }}"></script>

  
  <!-- Loaded only in index.html for demographic vector map-->
  <script src="{{ URL::asset('admin_assets/js/jvectormap.js') }}"></script>
  
  <!-- App Scripts -->
  <script src="{{ URL::asset('admin_assets/js/scripts.js') }}"></script>

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

@yield("scripts")

</body>
 
</html>   
     		   
     		    