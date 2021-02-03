<!-- Sidebar Left -->
  <div class="sidebar left-side" id="sidebar-left">
	 <div class="sidebar-user">
		<div class="media sidebar-padding">
			<div class="media-left media-middle">
				<?php if(Auth::user()->image_icon): ?>
				 <img src="<?php echo e(URL::asset('upload/members/'.Auth::user()->image_icon.'-s.jpg')); ?>" width="60" alt="person" class="img-circle">			
				<?php else: ?>						
				 <img src="<?php echo e(URL::asset('admin_assets/images/guy.jpg')); ?>" alt="person" class="img-circle" width="60"/>
				<?php endif; ?>
			</div>
			<div class="media-body media-middle">
				 
				<a href="<?php echo e(URL::to('admin/profile')); ?>" class="h4 margin-none"><?php echo e(Auth::user()->name); ?></a>
				<ul class="list-unstyled list-inline margin-none">
					<li><a href="<?php echo e(URL::to('admin/profile')); ?>"><i class="md-person-outline"></i></a></li>
					<?php if(Auth::User()->usertype=="Admin"): ?>
					<li><a href="<?php echo e(URL::to('admin/settings')); ?>"><i class="md-settings"></i></a></li>
					<?php endif; ?>
					<li><a href="<?php echo e(URL::to('admin/logout')); ?>"><i class="md-exit-to-app"></i></a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Wrapper Reqired by Nicescroll (start scroll from here) -->
	<div class="nicescroll">
		<div class="wrapper" style="margin-bottom:90px">
			<ul class="nav nav-sidebar" id="sidebar-menu">
               
               <?php if(Auth::user()->usertype=='Admin'): ?>
               
               		<li class="<?php echo e(classActivePath('dashboard')); ?>"><a href="<?php echo e(URL::to('admin/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('words.dashboard_text')); ?></a></li>
                
					<!--by imran-->
					<li class="submenu <?php echo e(classActivePath('properties')); ?>">
                    <a href="#" <?php if(classActivePath('properties') OR classActivePath('featuredproperties') OR classActivePath('types')): ?> class="open" <?php endif; ?>>
                    <i class="md md-description"></i> <?php echo e('Properties'); ?>

                    </a>
	                    <ul <?php if(classActivePath('properties') OR classActivePath('featuredproperties') OR classActivePath('types')): ?> style="display: block" class="collapse in" <?php endif; ?>>
							<li class="<?php echo e(classActivePath('properties')); ?>"><a href="<?php echo e(URL::to('admin/properties')); ?>">All <?php echo e(trans('words.properties')); ?></a></li>
	                   		<li class="<?php echo e(classActivePath('featuredproperties')); ?>"><a href="<?php echo e(URL::to('admin/featuredproperties')); ?>">Make <?php echo e(trans('words.featured')); ?></a></li>
							<li class="<?php echo e(classActivePath('types')); ?>"><a href="<?php echo e(URL::to('admin/types')); ?>">Add <?php echo e(trans('words.property_type')); ?></a></li>
	                    </ul>
                    </li>
                    
                    <!--blog menu-->
	                <li class="submenu <?php echo e(classActivePath('blogs')); ?>">
                    <a href="#" <?php if(classActivePath('blogs') OR classActivePath('blog-categories')): ?> class="open" <?php endif; ?>>
                    <i class="md md-description"></i> <?php echo e('Blogs'); ?> <span class="pull-right label label-primary"> </span>
                    </a>
	                    <ul <?php if(classActivePath('blogs') OR classActivePath('blog-categories')): ?> style="display: block" class="collapse in" <?php endif; ?>>
	                        <li class="<?php echo e(classActivePath('blogs')); ?>"><a href="<?php echo e(route('blogs')); ?>"><?php echo e(' Posts'); ?></a></li>
	                        <li class="<?php echo e(classActivePath('blog-categories')); ?>"><a href="<?php echo e(route('blog-categories')); ?>"><?php echo e('Categories'); ?></a></li>
	                         
	                    </ul>
                    </li>
                    <!--blog menu end-->

					<li class="submenu <?php echo e(classActivePath('inquiries')); ?>">
                    <a href="#" <?php if(classActivePath('inquiries') OR classActivePath('hires') OR classActivePath('interest')): ?> class="open" <?php endif; ?>>
                    <i class="md md-description"></i> <?php echo e('Inquiries'); ?>

                    </a>
	                    <ul <?php if(classActivePath('inquiries') OR classActivePath('hires') OR classActivePath('interest')): ?> style="display: block" class="collapse in" <?php endif; ?>>
							<li class="<?php echo e(classActivePath('inquiries')); ?>"><a href="<?php echo e(URL::to('admin/inquiries')); ?>">Property enquiry</a></li> 
							<li class="<?php echo e(classActivePath('hires')); ?>"><a href="<?php echo e(URL::to('admin/hires')); ?>"> Agent hire enquiry</a></li> 
							<li class="<?php echo e(classActivePath('interest')); ?>"><a href="<?php echo e(URL::to('admin/agentinterest')); ?>"> Agent interest enquiry</a></li> 
	                    </ul>
                    </li>

					<!--by imran-->
					<li class="<?php echo e(classActivePath('services')); ?>"><a href="<?php echo e(route('services')); ?>"><i class="fa fa-tags"></i><?php echo e('Services'); ?></a></li>
					<li class="submenu <?php echo e(classActivePath('service-category')); ?>">
                    <a href="#" <?php if(classActivePath('service-category') OR classActivePath('service-subcategory') OR classActivePath('service-childcategory')): ?> class="open" <?php endif; ?>>
                    <i class="md md-description"></i> <?php echo e('Category Manage'); ?>

                    </a>
	                    <ul <?php if(classActivePath('service-category') OR classActivePath('service-subcategory') OR classActivePath('service-childcategory')): ?> style="display: block" class="collapse in" <?php endif; ?>>
	                        <li class="<?php echo e(classActivePath('service-category')); ?>"><a href="<?php echo e(route('category.index')); ?>"><?php echo e('Parent Category'); ?></a></li>
	                        <li class="<?php echo e(classActivePath('service-subcategory')); ?>"><a href="<?php echo e(route('subcategory.index')); ?>"><?php echo e('Sub Category'); ?></a></li>
							<li class="<?php echo e(classActivePath('service-childcategory')); ?>"><a href="<?php echo e(route('childcategory.index')); ?>"><?php echo e('Child Category'); ?></a></li>
	                         
	                    </ul>
                    </li>

					
					<!-- <li class="<?php echo e(classActivePath('clientrequest')); ?>"><a href="<?php echo e(URL::to('admin/client-request')); ?>"><i class="fa fa-tags"></i><?php echo e('Client Request'); ?></a></li> -->

					<!--by imran-->
					<li class="submenu <?php echo e(classActivePath('slider')); ?>">
                    <a href="#" <?php if(classActivePath('slider') OR classActivePath('promotionslider')): ?> class="open" <?php endif; ?>>
                    <i class="fa fa-picture-o"></i> <?php echo e('All Sliders'); ?>

                    </a>
	                    <ul  <?php if(classActivePath('slider') OR classActivePath('promotionslider')): ?> style="display: block" class="collapse in" <?php endif; ?>>
						<li class="<?php echo e(classActivePath('slider')); ?>"><a href="<?php echo e(URL::to('admin/slider')); ?>"><i class="fa fa-sliders"></i><?php echo e(trans('words.home_slider')); ?></a></li>
						<li class="<?php echo e(classActivePath('promotionslider')); ?>"><a href="<?php echo e(URL::to('admin/promotionslider')); ?>"><i class="fa fa-sliders"></i><?php echo e('Promotion Slider'); ?></a></li>
	                         
	                    </ul>
                    </li>

					<li class="<?php echo e(classActivePath('users')); ?>"><a href="<?php echo e(URL::to('admin/users')); ?>"><i class="fa fa-users"></i><?php echo e(trans('words.users')); ?></a></li>

					<li class="<?php echo e(classActivePath('front-design')); ?>"><a href="<?php echo e(URL::to('admin/front-design')); ?>"><i class="fa fa-bullhorn"></i>Banner Ads</a></li>
					
					<li class="<?php echo e(classActivePath('upazila')); ?>"><a href="<?php echo e(URL::to('admin/upazila')); ?>"><i class="fa fa-map-marker"></i>Add Location</a></li>

					<li class="<?php echo e(classActivePath('testimonials')); ?>"><a href="<?php echo e(URL::to('admin/testimonials')); ?>"><i class="fa fa-list"></i><?php echo e(trans('words.testimonials')); ?></a></li>
	                
					
					<li class="<?php echo e(classActivePath('partners')); ?>"><a href="<?php echo e(URL::to('admin/partners')); ?>"><i class="fa fa-bookmark-o"></i><?php echo e(trans('words.partners')); ?></a></li>
					
					
					<li class="<?php echo e(classActivePath('subscriber')); ?>"><a href="<?php echo e(URL::to('admin/subscriber')); ?>"><i class="md md-email"></i><?php echo e(trans('words.subscribers')); ?></a></li>
					 
					<li class="<?php echo e(classActivePath('subscription_plan')); ?>"><a href="<?php echo e(URL::to('admin/subscription_plan')); ?>"><i class="fa fa-dollar"></i> <span><?php echo e(trans('words.subscription_plan')); ?></span></a></li>
             

	                <li class="<?php echo e(classActivePath('transactions')); ?>"><a href="<?php echo e(URL::to('admin/transactions')); ?>"><i class="fa fa-list"></i><?php echo e(trans('words.transactions')); ?></a></li>
	               
	                
	                <li class="<?php echo e(classActivePath('settings')); ?>"><a href="<?php echo e(URL::to('admin/settings')); ?>"><i class="md md-settings"></i><?php echo e(trans('words.settings')); ?></a></li>

	                 <li class="submenu <?php echo e(classActivePath('about_page')); ?>">
                    <a href="#" <?php if(classActivePath('about_page') OR classActivePath('terms_page') OR classActivePath('privacy_policy_page') OR classActivePath('faq_page')): ?> class="open" <?php endif; ?>>
                    <i class="md md-description"></i> <?php echo e(trans('words.pages')); ?> <span class="pull-right label label-primary">4</span>
                    </a>
	                    <ul <?php if(classActivePath('about_page') OR classActivePath('terms_page') OR classActivePath('privacy_policy_page') OR classActivePath('faq_page')): ?> style="display: block" class="collapse in" <?php endif; ?>>
	                        <li class="<?php echo e(classActivePath('about_page')); ?>"><a href="<?php echo e(URL::to('admin/about_page')); ?>"><?php echo e(trans('words.about_us')); ?></a></li>
	                        <li class="<?php echo e(classActivePath('terms_page')); ?>"><a href="<?php echo e(URL::to('admin/terms_page')); ?>"><?php echo e(trans('words.terms_of_us')); ?></a></li>
	                        <li class="<?php echo e(classActivePath('privacy_policy_page')); ?>"><a href="<?php echo e(URL::to('admin/privacy_policy_page')); ?>"><?php echo e(trans('words.privacy_policy')); ?></a></li>
	                        <li class="<?php echo e(classActivePath('faq_page')); ?>"><a href="<?php echo e(URL::to('admin/faq_page')); ?>"><?php echo e(trans('words.faq')); ?></a></li>
	                         
	                    </ul>
                    </li>
               
               		   
             		<?php else: ?>
               		 <li class="<?php echo e(classActivePath('dashboard')); ?>"><a href="<?php echo e(URL::to('admin/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('words.dashboard_text')); ?></a></li>
               		 
               		 <li class="<?php echo e(classActivePath('properties')); ?>"><a href="<?php echo e(URL::to('admin/properties')); ?>"><i class="md md-pin-drop"></i><?php echo e(trans('words.properties')); ?></a></li>
               		 
               		 <li class="<?php echo e(classActivePath('inquiries')); ?>"><a href="<?php echo e(URL::to('admin/inquiries')); ?>"><i class="md md-send"></i><?php echo e(trans('words.inquiries')); ?></a></li>
               		 
               		 <li class="<?php echo e(classActivePath('admin')); ?>"><a href="<?php echo e(URL::to('admin/profile')); ?>"><i class="md md-person-outline"></i> <?php echo e(trans('words.account')); ?></a></li>				  
              		 <?php endif; ?>
                  
 
			</ul>

			 
		</div>
	</div>
</div>
  <!-- // Sidebar -->

  <!-- Sidebar Right -->
  <div class="sidebar right-side" id="sidebar-right">
	<!-- Wrapper Reqired by Nicescroll -->
	<div class="nicescroll">
		<div class="wrapper">
			<div class="block-primary">
				<div class="media">
					<div class="media-left media-middle">
						<a href="#">
							 <?php if(Auth::user()->image_icon): ?>
								<img src="<?php echo e(URL::asset('upload/members/'.Auth::user()->image_icon.'-s.jpg')); ?>" width="60" alt="person" class="img-circle border-white">
							
							<?php else: ?>
								
							<img src="<?php echo e(URL::asset('admin_assets/images/guy.jpg')); ?>" alt="person" class="img-circle border-white" width="60"/>
							
							<?php endif; ?>
						</a>
					</div>
					<div class="media-body media-middle">
						<a href="<?php echo e(URL::to('admin/profile')); ?>" class="h4"><?php echo e(Auth::user()->name); ?></a>
						<a href="<?php echo e(URL::to('admin/logout')); ?>" class="logout pull-right"><i class="md md-exit-to-app"></i></a>
					</div>
				</div>
			</div>
			<ul class="nav nav-sidebar" id="sidebar-menu">
				<li><a href="<?php echo e(URL::to('admin/profile')); ?>"><i class="md md-person-outline"></i> <?php echo e(trans('words.account')); ?></a></li>				 
				
				<?php if(Auth::user()->usertype=='Admin'): ?>
				
				<li><a href="<?php echo e(URL::to('admin/settings')); ?>"><i class="md md-settings"></i> <?php echo e(trans('words.settings')); ?></a></li>
				
				<?php endif; ?>
				
				<li><a href="<?php echo e(URL::to('admin/logout')); ?>"><i class="md md-exit-to-app"></i> <?php echo e(trans('words.logout')); ?></a></li>
			</ul>
		</div>
	</div>
</div>
  <!-- // Sidebar -->
<?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/admin/sidebar.blade.php ENDPATH**/ ?>