<?php $__env->startSection('head_title', stripslashes($property->property_name) .' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_description', substr(strip_tags($property->description),0,200)); ?>
<?php $__env->startSection('head_image', asset('/upload/properties/'.$property->featured_image.'-b.jpg')); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>

  <!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="<?php if(getcong('title_bg')): ?> <?php echo e(URL::asset('upload/'.getcong('title_bg'))); ?> <?php else: ?> <?php echo e(URL::asset('site_assets/img/breadcrumb-bg.jpg')); ?> <?php endif; ?>">
      <div class="inner-container container">
    
      </div>
  </section>
  <!--Breadcrumb Section-->


  <?php if(Session::has('flash_message_agent')): ?>
    <script type="text/javascript">
      alert('<?php echo e(Session::get('flash_message_agent')); ?>');
    </script>
  <?php endif; ?>



  <section class="main-container container">

      <div class="">

        <div class="content-box col-sm-12 col-md-8">

          <section id="property-slider-section" <?php if(count($property_gallery_images)==0): ?> style="margin-bottom: 0px;" <?php endif; ?>>
            <!-- Main Slider -->
            <div id="property-main-slider">
              <div class="items">
                <div class="img-container" data-bg-img="<?php echo e(URL::asset('upload/properties/'.$property->featured_image.'-b.jpg')); ?>"></div>
                <!-- Change the URL section based on your image\'s name -->
              </div>

                <?php $__currentLoopData = $property_gallery_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$gallery_img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="items">
                  <div class="img-container" data-bg-img="<?php echo e(URL::asset('upload/gallery/'.$gallery_img->image_name)); ?>"></div> 
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
              <!-- End of Main Slider -->
              <?php if(count($property_gallery_images)>0): ?>
              <div id="property-thumb-slider" class="container">
                <div class="items">
                  <div class="img-container" data-bg-img="<?php echo e(URL::asset('upload/properties/'.$property->featured_image.'-b.jpg')); ?>"></div>
                </div>
                <?php $__currentLoopData = $property_gallery_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$gallery_img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="items">
                  <div class="img-container" data-bg-img="<?php echo e(URL::asset('upload/gallery/'.$gallery_img->image_name)); ?>"></div> 
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </div>
              <?php endif; ?>

          </section>
        </div> <!--col-md-8-->

        <div class="col-md-4 hidden-xs hidden-sm" style="margin-top:18px;">
            <?php echo $__env->make("_particles.agent_widget", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
        </div> <!--col-md-4-->
      </div> <!--row-->

      <div class="property-summery">
			<div class="row">
			  <div class="col-md-8 pro-headings">
				<h2> <?php echo e($property->property_name); ?></h2>
			  </div>
				<div class="col-md-4">
					<div class="share-save">  
					  <a href="#" class="btn btn-default btn-lg" role="button" aria-disabled="true"><i class="fa fa-heart-o" aria-hidden="true"></i> Save</a>
					  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="btn btn-default btn-lg" role="button" aria-disabled="true"><i class="fa fa-share" aria-hidden="true"></i> Share</a>
					</div>
				</div> 
			</div>   

			<div class="short-info">  
            <div class="bottom-sec ">
              <div class="property-price"><small>BDT</small> <?php echo e($property->price); ?></div>
              <div class="property-address"> <?php echo e($property->address); ?></div>
			  <!-- <div class="property-address">Type: <?php echo e(getPropertyTypeName($property->property_type)->types); ?></div> -->

              <div class="extra-info clearfix padding-bottom5">
                <ul class="property-data list-inline short-date"> 
                  <li class="bedroom ">
                    <div class="value"><i class="fa fa-bed"></i> <?php echo e($property->bedrooms); ?>  bed</div>
                  </li>

                  <li class="bathroom">
                    <div class="value"> <i class="fa fa-bath"></i> <?php echo e($property->bathrooms); ?>  bath</div>
                  </li>

                  <li class="area">
                    <div class="value"><i class="fa fa-columns" aria-hidden="true"></i> <?php echo e($property->build_area); ?> sft</div>
                   </li>
               </ul>
              </div>

              <div class="short-note">
                <div class="container short-content">
                  <div class="row">
                    <div class="col-md-8">
                      <ul class="short-note-list list-inline">
                          <li class="overview active"><a href="#quickBox"><i class="fa fa-th" aria-hidden="true"></i> Quick Peek</a></li>
                          <li class="amenities"><a href="#amenitiesBox"><i class="fa fa-eye" aria-hidden="true"></i> Amenities</a></li>
                          <li class="nearestplace"><a href="#NearestPlacesBox"><i class="fa fa-map-marker" aria-hidden="true"></i> Nearest Places</a></li>
                          <!-- <li class="nearestplace"><a href="#ContactBox"><i class="fa fa-envelope" aria-hidden="true"></i> Details</a></li> -->
                      </ul> 
                    </div>
                    <div class="col-md-4">
                      <div class="share-box pull-right"> <?php echo stripslashes(getcong('addthis_share_code')); ?></div>
                    </div>
                  </div>  
                </div>  
              </div> 
            </div>
          </div> <!--short-info-->
          
          <div class="quick-peekk" id="quickBox">
              <h3> Quick Peek</h3>
              <div class="row">
                  
                  <div class="col-md-6">
                     <div class="table-responsive">
                          <table class="table quick-peek">
                            <tbody>
                              <tr>
                                <td>Type:</td>
                                <td><b><?php echo e(getPropertyTypeName($property->property_type)->types); ?> <b></td>
                              </tr>
                              <tr>
                                <td>Price: </td>
                                <td><b><?php echo e($property->price); ?></b></td>
                              </tr>
                              
                              <tr>
                                <td>Bedroom:</td>
                                <td><b><?php echo e($property->bedrooms); ?></b></td>
                              </tr>
                              
                              <tr>
                                <td>Bath:</td>
                                <td><b><?php echo e($property->bathrooms); ?> </b></td>
                              </tr>
                              
                              <tr>
                                <td>Balcony:</td>
                                <td><b><?php echo e($property->balcony); ?></b></td>
                              </tr>
                              
                            </tbody>
                          </table>
                      </div><!--table-responsive-->
                  </div>
                  
                  <div class="col-md-6">
                     <div class="table-responsive">
                          <table class="table quick-peek">
                            
                            <tbody>
                              <tr>
                                <td>Size:</td>
                                <td><b><?php echo e($property->build_area); ?> <?php echo e(trans('words.build_unit')); ?></b></td>
                              </tr>
                              <tr>
                                <td>Location: </td>
                                <td><b><?php echo e($property->location); ?></b></td>
                              </tr>
                              
                              <tr>
                                <td>Facing:</td>
                                <td><b><?php echo e($property->facing); ?></b></td>
                              </tr>
                              
                              <tr>
                                <td>Floor:</td>
                                <td><b><?php echo e($property->available_floor); ?></b></td>
                              </tr>
                              
                              <tr>
                                <td>Parking:</td>
                                <td><b><?php echo e($property->garage); ?></b></td>
                              </tr>
                              
                            </tbody>
                          </table>
                      </div><!--table-responsive-->
                  </div>
                  
              </div> <!--row--> 
          </div><!--quick-peek-->
      </div><!--property-summery-->

    <div class="content-box col-sm-8" id="amenitiesBox">
      <div class="t-sec clearfix">
        <div class="col-md-4 left-sec">
          <?php if(Auth::check() && Auth::user()->usertype =='Agents'): ?>
          <div class="property-interest">  
        
            <form action="<?php echo e(route('agentinterest')); ?>" method="post" enctype="multipart/form-data">
              <?php echo e(csrf_field()); ?>

              
              <input type="hidden" name="property_id" value="<?php echo e($property->id); ?>">
              <input type="hidden" name="property_name" value="<?php echo e($property->property_name); ?>">
                        
              <button type="submit" class="btn btn-lg interest" name="submit"><i class="fa fa-heart-o"></i> Interest For Sale</button>    

            </form>

              <?php if(Session::has('success')): ?>
              <p style="color:green"><?php echo e(Session::get('success')); ?></p>  
              <?php endif; ?>
              
              <?php if(Session::has('error')): ?>
              <p style="color:red"><?php echo e(Session::get('error')); ?></p>  
              <?php endif; ?>
              
              <?php if(Session::has('warning')): ?>
              <p style="color:yellow"><?php echo e(Session::get('warning')); ?></p>  
              <?php endif; ?>
              <br>
        
          </div>
          <?php endif; ?>

          <!--Highlight Section-->
          <div class="highlight-container">
            <?php if($property->land_area!=null): ?>
            <div class="highlight-details-box">
              <div class="value"><?php echo e($property->land_area); ?></div>
              <div class="text"><?php echo e(trans('words.land_area')); ?></div>
              <div class="unit"><?php echo e(trans('words.land_unit')); ?></div>
            </div>
           <?php endif; ?>

          
          <?php if($property->facing!=null): ?>
          <div class="highlight-details-box">
              <div class="value"><img src="<?php echo e(URL::asset('site_assets/img/Facing.png')); ?>" width="32px;"> </div>
              <div class="text highlight-title">
                <?php echo e(trans('words.facing')); ?>

              </div>
              <div class="unit"> <?php echo e($property->facing); ?></div>
            </div>          
          <?php endif; ?>


          <?php if($property->no_of_floor!=null): ?>
          <div class="highlight-details-box">
              <div class="value"><img src="<?php echo e(URL::asset('site_assets/img/No-of-Floors.png')); ?>" width="32px;"> </div>
              <div class="text highlight-title">
                <?php echo e(trans('words.no_of_floor')); ?>

              </div>
              <div class="unit"> <?php echo e($property->no_of_floor); ?></div>
            </div>          
          <?php endif; ?>


          </div>

         

        </div>
		
        <div class="col-md-8 right-sec">
          <div class="information-box">
            <div>
              <h3><?php echo e(trans('words.amenities')); ?> </h3>
              <div class="box-content">
               
                <div class="attachment-container ">
                  <div class="row amenities">
                    <?php if($property->amenities_servent_bed): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/Servant-Bed.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_servent_bed); ?></div>
                        <div class="dl-times" style="font-size: 0.9em;"></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_servent_bath): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/Servant-Bath.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_servent_bath); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_gym): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/Gym.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_gym); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_front_yard): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/Front-yard.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_front_yard); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_splash_pool): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/Splash-Pool.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_splash_pool); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_roof_deck): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/Roof-Deck.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_roof_deck); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_reception): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/Reception.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_reception); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_rooftop_garden): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/Rooftop-Garden.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_rooftop_garden); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_generator): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/Generator.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_generator); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_substation): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/Substation.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_substation); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_lift): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/Lift.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_lift); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_kitchen_veranda): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/Kitchen-Veranda.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_kitchen_veranda); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_kitchen_cabinet): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/Kichen-Cabinet.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_kitchen_cabinet); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_corner_plot): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/Corner-Plot.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_corner_plot); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_guest_lobby): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/Guest-Lobby.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_guest_lobby); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_cctv): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/CCTV.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_cctv); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_swimming_pool): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/Swimming-Pool.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_swimming_pool); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_guest_parking): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/Guest-Parking.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_guest_parking); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_laundry_room): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/Laundry-Room.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_laundry_room); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_bbq): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/BBQ.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_bbq); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_terrace): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/Terrace.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_terrace); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>

                    <?php if($property->amenities_sauna): ?>
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/amenites/Sauna.png')); ?>" width="32px;"></div>
                        <div class="title"><?php echo e($property->amenities_sauna); ?></div>
                      </a>
                    </div>
                    <?php endif; ?>
                 </div>
                   
              </div>
            </div> 

          </div>
        </div>

		  <?php if($property->video_code!=null): ?>
		  <div class="information-box">
			<h3><?php echo e(trans('words.video_presentation')); ?></h3>
			<div class="box-content">
			  <div class="video-box">
				<?php echo stripslashes($property->video_code); ?>

			  </div>
			</div>
		  </div>
		  <?php endif; ?>

        </div>
      </div>   

      <div class="b-sec">
		<div class="information-box property-details">
		   <h3><?php echo e('Description'); ?> </h3>
			<div class="b-sec pro-details">

			  <div id="showbox_about">
				<?php echo Str::limit($property->description, 200, ' ...'); ?>

				<span class="readmore-btn"> + Read More</span>
			   </div>
			
			   <div id="hidebox_about" style="display:none;">
				<?php echo $property->description; ?>

				  <span class="readmore-btn-less"> - Show Less</span>
			   </div>
			</div>
		</div> <!--/.property-details--> 
			
          <div class="information-box" id="NearestPlacesBox">
            <h3><?php echo e(trans('words.nearest_palces_single')); ?></h3>
            <div class="box-content">
              <div class="attachment-container">
                <div class="row">
                  <?php if($property->nearest_school_km): ?>
                  <div class="col-sm-6">
                  <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                    <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/features/education.png')); ?>" width="32px;"></div>
                    <div class="title"><?php echo e(trans('words.school')); ?></div>
                    <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i><?php echo e($property->nearest_school_km); ?></div>
                  </a>
                  </div>
                  <?php endif; ?>
                  <?php if($property->nearest_hospital_km): ?>
                  <div class="col-md-6">
                  <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                    <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/features/hospital.png')); ?>" width="32px;" style="margin-top: 3px;"></div>
                    <div class="title"><?php echo e(trans('words.hospital')); ?></div>
                    <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i><?php echo e($property->nearest_hospital_km); ?></div>
                  </a>
                  </div> 
                  <?php endif; ?>
                  <?php if($property->nearest_mall_km): ?>
                  <div class="col-md-6" style="margin-bottom: 10px;">
                  <a href="javascript:void();" class="attachment-box">
                    <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/features/mall.png')); ?>" width="36px;"></div>
                    <div class="title"><?php echo e(trans('words.mall')); ?></div>
                    <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i><?php echo e($property->nearest_mall_km); ?></div>
                  </a>
                  </div>
                  <?php endif; ?>
                  <?php if($property->nearest_bus_stand_km): ?>
                  <div class="col-md-6" style="margin-bottom: 10px;">
                  <a href="javascript:void();" class="attachment-box">
                    <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/features/bus.png')); ?>" width="40px;" style="margin-top: 3px;"></div>
                    <div class="title"><?php echo e(trans('words.bus_station')); ?></div>
                    <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i><?php echo e($property->nearest_bus_stand_km); ?></div>
                  </a>
                  </div>
                  <?php endif; ?>

                  <?php if($property->nearest_railway_km): ?>
                  <div class="col-md-6" style="margin-bottom: 10px;">
                  <a href="javascript:void();" class="attachment-box">
                    <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/features/railway.png')); ?>" width="40px;" style="margin-top: 3px;"></div>
                    <div class="title"><?php echo e(trans('words.railway')); ?></div>
                    <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i><?php echo e($property->nearest_railway_km); ?></div>
                  </a>
                  </div>
                  <?php endif; ?>

                  <?php if($property->nearest_airport_km): ?>
                  <div class="col-md-6" style="margin-bottom: 10px;">
                  <a href="javascript:void();" class="attachment-box">
                    <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/features/airport.png')); ?>" width="40px;" style="margin-top: 3px;"></div>
                    <div class="title"><?php echo e(trans('words.airport')); ?></div>
                    <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i><?php echo e($property->nearest_airport_km); ?></div>
                  </a>
                  </div>
                  <?php endif; ?>

                  <?php if($property->nearest_park_km): ?>
                  <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="javascript:void();" class="attachment-box">
                      <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/features/Park.png')); ?>" width="40px;" style="margin-top: 3px;"></div>
                      <div class="title"><?php echo e(trans('words.nearest_park_km')); ?></div>
                      <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i><?php echo e($property->nearest_park_km); ?></div>
                    </a>
                  </div>
                  <?php endif; ?>

                  <?php if($property->nearest_mosque_km): ?>
                  <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="javascript:void();" class="attachment-box">
                      <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/features/Mosque.png')); ?>" width="40px;" style="margin-top: 3px;"></div>
                      <div class="title"><?php echo e(trans('words.nearest_mosque_km')); ?></div>
                      <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i><?php echo e($property->nearest_mosque_km); ?></div>
                    </a>
                  </div>
                  <?php endif; ?>

                  <?php if($property->nearest_playground_km): ?>
                  <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="javascript:void();" class="attachment-box">
                      <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/features/Playground.png')); ?>" width="40px;" style="margin-top: 3px;"></div>
                      <div class="title"><?php echo e(trans('words.nearest_playground_km')); ?></div>
                      <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i><?php echo e($property->nearest_playground_km); ?></div>
                    </a>
                  </div>
                  <?php endif; ?>

                  <?php if($property->nearest_departmental_store_km): ?>
                  <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="javascript:void();" class="attachment-box">
                      <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/features/Departmental-Store.png')); ?>" width="40px;" style="margin-top: 3px;"></div>
                      <div class="title"><?php echo e(trans('words.nearest_departmental_store_km')); ?></div>
                      <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i><?php echo e($property->nearest_departmental_store_km); ?></div>
                    </a>
                  </div>
                  <?php endif; ?>

                  <?php if($property->nearest_restaurant_km): ?>
                  <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="javascript:void();" class="attachment-box">
                      <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/features/Restaurant.png')); ?>" width="40px;" style="margin-top: 3px;"></div>
                      <div class="title"><?php echo e(trans('words.nearest_restaurant_km')); ?></div>
                      <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i><?php echo e($property->nearest_restaurant_km); ?></div>
                    </a>
                  </div>
                  <?php endif; ?>

                  <?php if($property->nearest_fire_service_km): ?>
                  <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="javascript:void();" class="attachment-box">
                      <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/features/Fire-Service.png')); ?>" width="40px;" style="margin-top: 3px;"></div>
                      <div class="title"><?php echo e(trans('words.nearest_fire_service_km')); ?></div>
                      <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i><?php echo e($property->nearest_fire_service_km); ?></div>
                    </a>
                  </div>
                  <?php endif; ?>

                  <?php if($property->nearest_police_station_km): ?>
                  <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="javascript:void();" class="attachment-box">
                      <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/features/Police-Station.png')); ?>" width="40px;" style="margin-top: 3px;"></div>
                      <div class="title"><?php echo e(trans('words.nearest_police_station_km')); ?></div>
                      <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i><?php echo e($property->nearest_police_station_km); ?></div>
                    </a>
                  </div>
                  <?php endif; ?>

                  <?php if($property->nearest_pharmacy_km): ?>
                  <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="javascript:void();" class="attachment-box">
                      <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/features/Pharmacy.png')); ?>" width="40px;" style="margin-top: 3px;"></div>
                      <div class="title"><?php echo e(trans('words.nearest_pharmacy_km')); ?></div>
                      <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i><?php echo e($property->nearest_pharmacy_km); ?></div>
                    </a>
                  </div>
                  <?php endif; ?>

                  <?php if($property->nearest_grocery_bazar_km): ?>
                  <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="javascript:void();" class="attachment-box">
                      <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/features/Grocery-Kacha-Bazar.png')); ?>" width="40px;" style="margin-top: 3px;"></div>
                      <div class="title"><?php echo e(trans('words.nearest_grocery_bazar_km')); ?></div>
                      <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i><?php echo e($property->nearest_grocery_bazar_km); ?></div>
                    </a>
                  </div>
                  <?php endif; ?>

                  <?php if($property->nearest_govt_office_km): ?>
                  <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="javascript:void();" class="attachment-box">
                      <div class="size"><img src="<?php echo e(URL::asset('site_assets/img/features/Govt-Office.png')); ?>" width="40px;" style="margin-top: 3px;"></div>
                      <div class="title"><?php echo e(trans('words.nearest_govt_office_km')); ?></div>
                      <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i><?php echo e($property->nearest_govt_office_km); ?></div>
                    </a>
                  </div>
                  <?php endif; ?>

                </div>                
              </div>
            </div>
          </div>

            <?php if($property->floor_plan!=null): ?>
            <div class="information-box floor-plan">
              <h3><?php echo e(trans('words.floor_plan')); ?></h3>
              <div class="box-content" align="center">
                <ul class="image-main-box clearfix">
                  <li class="item col-xs-12">
                    <figure>
                      <img src="<?php echo e(URL::asset('upload/floorplan/'.$property->floor_plan.'-s.jpg')); ?>" alt="Floor Plan"/>
                      <a href="<?php echo e(URL::asset('upload/floorplan/'.$property->floor_plan.'-b.jpg')); ?>" class="more-details" style="border:none;border-bottom:0px;">Enlarge</a>
                    </figure>
                  </li>
                
                </ul>
              </div>
            </div>
            <?php endif; ?>
		</div>

		<!-- <div class="information-box related-properties">
          <h3><?php echo e(trans('words.comments')); ?></h3>
          <?php echo stripslashes(getcong('disqus_comment_code')); ?>

		</div> -->
    </div> <!--col-sm-8-->

	<!--Sidebar Box-->
    <aside class="col-sm-4" style="padding-top:82px;">    
      <div class="clearfix"></div>
       <?php echo $__env->make("_particles.ads_widget", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
      <!--Contact agent widget-->
      <div class="visible-xs visible-sm" >
           <?php echo $__env->make("_particles.agent_widget", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
      </div> <!--sidebar-contact-agent-->   

      <div class="sidebar-box" id="LoanBox">
        <h3><?php echo e(trans('words.mortgage_calculator')); ?></h3>
        <div class="box-content">

          <div class="property-search-form loan-calculation">
             <div class="mdl-card mdl-shadow--2dp animated slideInUp">
              <div class="mdl-card__supporting-text cyan">

                <div class="monthly-amounts">
                   <span class="cd-currency">BDT</span>
                   <p id="installment_value" class="installment-value animated slideInDown"> 0.00 </p>
                   <p class="installment-label animated slideInDown">Per Month</p>
                </div>

                <div class="total-amounts">
                   <p class="installment-label animated slideInDown">TOTAL LOAN AMOUNT</p>
                   <p class="text-center total-bdt">BDT</p>
                   <p id="totalinstallment_value" class="totalinstallment-value animated slideInDown"> 0.00</p>
                   <input type="hidden" class="totalinstallment-value2" id="totalinstallment_value2">
                </div>

                <div class="total-breakdown">
                   <p class="installment-label animated slideInDown">Payment Breakdown</p>
                    <div class="progress breakdown-progress">
                      <div class="progress-bar bg-info" role="progressbar" id="Payment_Breakdown"aria-valuenow="80" aria-valuemin="0" aria-valuemax="1000"></div>
                    </div>

                    <div class="breakdown-point row">
                        <div class="col-md-6">
                            <span class="interest">Interest</span>
                        </div>
                        <div class="col-md-6">
                            <span class="interest pull-right">Principle</span>
                        </div>
                    </div>  
                </div>
              </div>
              <div class="mdl-card__supporting-text">
                <form action="#">
                <?php
                  $price=$property->price;
                  $pro_price= str_replace(',','',$price);

                  $sft_price=$property->rate_per_sft;
                  $deposit_sft_price= str_replace(',','',$sft_price);
                  $depercent= (10/100)*$pro_price;

                ?>

                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <label class="" for="sample4">Total Price</label>
                    <input  type="text" class="form-control" pattern="-?[0-9]*(\.[0-9]+)?" id="property_price" min="1" max="<?php echo e($pro_price); ?>" value="<?php echo e($pro_price); ?>"  tabindex="1">
                    <span class="mdl-textfield__error">Price is not a number!</span>

                    <input id="price_slider" class="mdl-slider mdl-js-slider" type="range" min="0" max="<?php echo e($pro_price); ?>" value="<?php echo e($pro_price); ?>" tabindex="1">

                  </div>

                  <br>

                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <label class="" for="sample4">Down Payment </label>

                    <div class="form-group">
                      <div class="input-group">
                        <input type="hidden" class="form-control deposite-value" id="deposit" value="0" tabindex="2">
                        <input type="text" class="form-control deposite-value2" id="deposit2" value="0" tabindex="2">
                        <div class="input-group-addon" id="deposit_percent"><span id="desposit_value"></span><span id="zero_value"></span>%</div>
                      </div>
                    </div>
              
                    <span class="mdl-textfield__error">Deposit is not a number!</span>
                    <input id="deposit_slider" class="mdl-slider mdl-js-slider" type="range" min="0" max="100"  tabindex="2">

                  </div>

                  <br>

                  <div class="mdl-textfield mdl-js-textfield animated slideInLeft">
                    <p>
                      <label class="slider-label">Loan Period:</label>
                      <label class="slider-value">Year(s)</label>
                      <!-- <label id="repayment_value" class="slider-value"></label> -->
                      </p>
                      <input id="repayment_value" class="slider-value form-control" type="text" pattern="-?[0-9]*(\.[0-9]+)?"  min="1" max="10" value="6">
                      <input id="repayment_slider" class="mdl-slider mdl-js-slider" type="range" min="1" max="10" value="6" tabindex="3">
                  </div>
                  <br>

                  <div class="mdl-textfield mdl-js-textfield animated slideInLeft ">
                  <p>
                      <label class="slider-label">Interest Rate:</label>
                      <!-- <label id="interest_value" class="slider-value"></label> -->
                      <label class="slider-value">%</label>
                    </p>

                     <input id="interest_value" class="slider-value form-control" type="text" pattern="-?[0-9]*(\.[0-9]+)?" min="1" max="18" value="5">
                    <input id="interest_slider" class="mdl-slider mdl-js-slider" type="range" min="1" max="18" value="5" step="1" tabindex="4">
                  </div>

                </form>
              </div>
            </div>

           </div>   
        </div>
      </div>
      <input type="hidden" id="down_paymet">

      <?php $__env->startSection("styles"); ?>
       
         <link rel="stylesheet" href="<?php echo e(URL::asset('site_assets/loancalculation/material.cyan-amber.min.css')); ?>">
          <!-- Material Design icon font -->
         <link rel="stylesheet" href="<?php echo e(URL::asset('site_assets/loancalculation/icon.css')); ?> ">
      <?php $__env->stopSection(); ?>
      <?php $__env->startSection("scripts"); ?>
          <!-- Material Design Lite -->
         <script src="<?php echo e(URL::asset('site_assets/loancalculation/material.min.js')); ?>"></script>
         <script src="<?php echo e(URL::asset('site_assets/loancalculation/humanize.min.js')); ?>"></script>

         <script>
            $( document ).ready(function() {
               $("#zero_value").html("30");
               $("#down_paymet").val(30);
               calc_loan();
            });

          var calc_loan = function() {
            var value = 0;
            var n = $('#repayment_slider').val()*12;
            var r = ($('#interest_slider').val()/100)/12; //interest
            var R = Math.pow(r+1,n);
            var P = $('#property_price').val();
            var d = ($('#deposit').val()/100)*$('#property_price').val();
            value=(P-d)*((r*(R))/(R-1));
            $('.installment-value').text(Humanize.formatNumber(value, 2));

            totalinstallment= (value*n);
            $('.totalinstallment-value').text(Humanize.formatNumber(totalinstallment, 2) );
            $('.totalinstallment-value2').val(Humanize.formatNumber(totalinstallment, 2) );            
          }

       

          $('#repayment_value').text($('#repayment_slider').val());
          //interest
           $('#interest_value').text($('#interest_slider').val());

           $('#deposit').text($('#deposit_slider').val()); 

       
          $('#price_slider').change(function(event) {
            $('#property_price').val($('#price_slider').val());
            calc_loan();
          });

          //deposit
          $('#deposit_slider').change(function(event) {
              var desposit_value = $('#deposit_slider').val();
              $("#zero_value").remove();
              var property_price =$("#property_price").val();
              var total_value = property_price*desposit_value/100;
              $('#deposit').val($('#deposit_slider').val());
              $('#desposit_value').html(desposit_value);
              var deposit_slider = $('#deposit_slider').val();
             
              $('#deposit').val(deposit_slider);
              $('.deposite-value2').val(total_value);
              calc_loan();
          });
 
          $('#repayment_slider').change(function(event) {
            var total_load_amount = $('#totalinstallment_value2').val().replace(/,/g, '');
            var total_price = $("#property_price").val();
            var years = $('#repayment_slider').val();
            var total = (total_price*100)/(total_load_amount*years);
            var payment_breakdown = Humanize.formatNumber(total, 0);  
            $("#Payment_Breakdown").css("width", payment_breakdown+'%');
            $('#repayment_value').val($('#repayment_slider').val());
            calc_loan();
          });

          //interest  
          $('#interest_slider').change(function(event) {
            $('#interest_value').val($('#interest_slider').val());
            calc_loan();
          });
         </script>


          <script type="text/javascript">
            //show hide read more
            $( document ).ready(function() {
              // totalinstallment autoload
              var total_load_amount = $('#totalinstallment_value2').val().replace(/,/g, '');
              var total_price = $("#property_price").val();
              var years = $("#down_paymet").val();
              var total = (total_price*100)/(total_load_amount*years);
              var payment_breakdown = Humanize.formatNumber(total, 0);
              $("#Payment_Breakdown").css("width", payment_breakdown+'%');
              // UPDATE Line date:3/9/2020
              // downpayment autoload
              var property_price =$("#property_price").val();
              var total_value = property_price*years/100;
              $('.deposite-value2').val(total_value);
              // UPDATE Line date:3/9/2020
            });

            $(document).ready(function() {
                $(".readmore-btn").click(function(){
                  $("#hidebox_about").slideDown();
                  $("#showbox_about").hide(); 
                });
                $(".readmore-btn-less").click(function(){
                  $("#showbox_about").show(300);
                  $("#hidebox_about").slideUp(); 
                });
            });
            </script>

      <?php $__env->stopSection(); ?>
      &nbsp;
    <div class="clearfix"></div>
    <?php echo $__env->make("_particles.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
       
    </aside>
  </section>
 
<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>
    <link href="<?php echo e(URL::asset('site_assets/alert-toastr/toastr.css')); ?> " rel="stylesheet">
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('scripts'); ?>



    <script src="<?php echo e(URL::asset('site_assets/alert-toastr/toastr.js')); ?>"></script>

    <script>
        <?php if(Session::has('success')): ?>
			toastr.success("<?php echo e(Session::get('success')); ?>")
        <?php endif; ?>

        <?php if(Session::has('info')): ?>
		    	toastr.info("<?php echo e(Session::get('info')); ?>")
        <?php endif; ?>

        <?php if(Session::has('warning')): ?>
		    	toastr.warning("<?php echo e(Session::get('warning')); ?>")
        <?php endif; ?>

        <?php if(Session::has('error')): ?>
		    	toastr.error("<?php echo e(Session::get('error')); ?>")
        <?php endif; ?>

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crafyvzz/public_html/floorfly.com/resources/views/pages/single_properties.blade.php ENDPATH**/ ?>