<?php $__env->startSection("content"); ?>

<?php if(getcong('home_properties_layout')=='slider'): ?>

<?php echo $__env->make("_particles.slider", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php else: ?>

<?php echo $__env->make("_particles.mapsearch", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>

<!--#propmotions-slider-->
<section id="propmotions-slider" class="boxed-view clearfix">
    <div class="inner-container container">
        
      <div class="owl-carousel-ads-slider owl-theme">
        <?php $__currentLoopData = \App\Promotionslider::orderBy('id','ASC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="items">
            <a href="<?php echo e($slide->link); ?>"><img class="lazyOwl" data-src="<?php echo e(URL::asset($slide->photo)); ?>" alt=""/></a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>
      
  </div>
</section> <!--#propmotions-slider-->

<!-- Recent Properties -->
  <section class="Home-page-section boxed-view clearfix">

    <div class="inner-container container">
      <div class="row">

            <?php 
                $onsaleleftbanner=\App\FrontDesign::where('type','on sale left ads')->first();
                $onsalebottombanner=\App\FrontDesign::where('type','on sale bottom ads')->first();
                $servicebanner=\App\FrontDesign::where('type','service')->first();
                $commercialproject=\App\FrontDesign::where('type','commercial projects')->first();
		$homeads1=\App\FrontDesign::where('type','home-sidebar-ads1')->first();

                
              ?>

          <div class="col-xs-12 col-sm-12 col-md-9">

              <div class="home-on-sale">
                <div class="onsale-header">
                  <div class="row">
                     <div class="col-8"> <h2 class="home-section-title">On sale</h2> </div>
                     <div class="col-4"><div class="pull-right"> <a class="home-see-more" href="<?php echo e(URL::to('properties/')); ?>">See More>></a> </div></div>
                  </div>
                </div>

                <div class="row"> 
                  <div class="col-md-4"> 
                    <div class="onsale-left-banner boxShadow"> 
                      <a href="<?php echo e($onsaleleftbanner->link); ?>"> <img src="<?php echo e(URL::asset($onsaleleftbanner->image)); ?>" alter="<?php echo e($onsaleleftbanner->name); ?>"/></a>
                    </div>
                  </div> <!--col-md-4-->

                  <div class="col-md-8"> 
                      <div class="property-listing">
                        <div class="row">
                            
                          <?php $__currentLoopData = $propertieslist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                              <div class="property-box boxShadow">
                                <div class="inner-box" >
                                  <a href="<?php echo e(URL::to('properties/')); ?>" class="img-container2">
                                    
                                    <img src="<?php echo e(URL::asset('upload/properties/'.$property->featured_image.'-s.jpg')); ?>" alt="Image of Property">
                                    <?php if($property->featured_property==1): ?>
                                    <span class="tag-label featured-item"><i class="fa fa-star"></i></span>
                                    <?php endif; ?>
                                  </a>
                                  
                                  <div class="bottom-sec">
                                    <a class="title" href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" ><h2><?php echo e(Str::limit($property->property_name,35)); ?></h2></a>
                                    <h3 class="price"><?php echo e(getcong('currency_sign')); ?> <span><?php echo e($property->price); ?></span></h3>
                                    <div class="extra-info clearfix padding-bottom5">
                                        <ul class="property-data row-list list-inline"> 
      				 <?php if($property->bedrooms!=null): ?>
                                          <li class="bedroom ">
                                            <i class="fa fa-bed"></i>
                                            <div class="value"><?php echo e($property->bedrooms); ?></div>
                                            bed
                                          </li>
					<?php endif; ?>
				 <?php if($property->bathrooms!=null): ?>
                                          <li class="bathroom ">
                                              <i class="fa fa-bath"></i>
                                              <div class="value"><?php echo e($property->bathrooms); ?></div>
                                              bath
                                            </li>
					<?php endif; ?>
 <?php if($property->build_area!=null): ?>
                                            <li class="area">
                                              <i class="fa fa-columns" aria-hidden="true"></i>
                                              <div class="value"><?php echo e($property->build_area); ?></div>
                                              sft
                                            </li>
<?php endif; ?>
                                        </ul>
                                      </div>
                                      <span class="location-i padding-bottom5 "><i class="fa fa-map-marker"></i> <?php echo e(getPropertyLocationName($property->location)->name); ?></span>
                                  </div>

                                </div>
                              </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </div> <!--row-->
                        </div> <!--property-listing--> 
                        <div class="">
                        <div class="onsale-bottom-banner boxShadow"> 
                          <a href="<?php echo e($onsalebottombanner->link); ?>"> <img src="<?php echo e(URL::asset($onsalebottombanner->image)); ?>" alter="<?php echo e($onsalebottombanner->name); ?>"/></a>
                        </div>
                      </div>

                    </div> <!--col-md-8-->

                  </div> <!--row--> 
              </div> <!--home-on-sale-->


              <div class="home-prem-collection">
                <div class="prem-collection-header">
                  <div class="row">
                      <?php
                        $i= 'premium-collection';
                      ?>
                     <div class="col-8"> <h2 class="home-section-title">Premium Collection</h2> </div>
                     <div class="col-4"><div class="pull-right"> <a class="home-see-more" href="<?php echo e(URL::to('property-form-'.$i)); ?>">See More>></a> </div></div>
                  </div>
                </div>

                <div class="property-listing">
                  <div class="row">
                   <?php $__currentLoopData = $premium_properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6">
                      <div class="prod-img boxShadow"> 
                          <div class="verticale-view wow fadeInUp">
                            <div class="row no-gutters">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                  <div class="verticale-view-left">
                                    <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="img-container2">
                                      <img src="<?php echo e(URL::asset('upload/properties/'.$property->featured_image.'-s.jpg')); ?>" alt="Image of Property">
                                    </a>
                                  </div>
                                </div>
                              
                              <div class="col-xs-12 col-sm-6 col-md-6">  
                                <div class="verticale-view-right">
                                  <div class="bottom-sec column-view">
                                    <a class="title" href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" ><h2><?php echo e(Str::limit($property->property_name,35)); ?></h2></a>
                                    <h3 class="price"><?php echo e(getcong('currency_sign')); ?> <span><?php echo e($property->price); ?></span></h3>
                                    
                                    <div class="extra-info clearfix padding-bottom5">
                                      <ul class="property-data-verticale list-inline"> 
				 <?php if($property->bedrooms!=null): ?>
                                        <li class="bedroom">
                                          <i class="fa fa-bed"></i>
                                          <span class="value"><?php echo e($property->bedrooms); ?> </span>
                                          <span class="value-text">bed</span>
                                        </li>
					<?php endif; ?>
				<?php if($property->bathrooms!=null): ?>
                                        <li class="bathroom ">
                                          <i class="fa fa-bath"></i>
                                          <span class="value"><?php echo e($property->bathrooms); ?></span>
                                          <span class="value-text">bath</span>
                                        </li>
					<?php endif; ?>
				 <?php if($property->build_area!=null): ?>
                                        <li class="area">
                                          <i class="fa fa-columns" aria-hidden="true"></i>
                                          <span class="value"><?php echo e($property->build_area); ?></span>
                                          <span class="value-text">sft</span>
                                        </li>
					<?php endif; ?>
                                      </ul>
                                    </div>
                                    <span class="location-i padding-bottom5 "><i class="fa fa-map-marker"></i> <?php echo e(getPropertyLocationName($property->location)->name); ?></span>
                                    
                                  </div>
                                 </div>
                              </div> <!--col-xs-7-->
                            </div> <!--row-->
                        </div>
                      </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                 </div> <!--row-->
                </div>

              </div> <!--home-prem-collection-->



              <div class="home-verified-plots">
                <div class="verified-plots-header">
                  <div class="row">
           
                     <div class="col-8"> <h2 class="home-section-title">Commercial Project</h2> </div>
                     <div class="col-4"><div class="pull-right"> <a class="home-see-more" href="<?php echo e(URL::to('type/commercial-project')); ?>">See More>></a> </div></div>
                  </div>
                </div>
                
                <div class="property-listing">
                  <div class="row">
                   <?php $__currentLoopData = $flats_properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <div class="col-md-6">
                      <div class="prod-img boxShadow"> 
                          <div class="verticale-view wow fadeInUp">
                            <div class="row no-gutters">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                  <div class="verticale-view-left">
                                    <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="img-container2">
                                      <img src="<?php echo e(URL::asset('upload/properties/'.$property->featured_image.'-s.jpg')); ?>" alt="Image of Property">
                                    </a>
                                  </div>
                                </div>
                              
                              <div class="col-xs-12 col-sm-6 col-md-6">  
                                <div class="verticale-view-right">
                                  <div class="bottom-sec column-view">
                                    <a class="title" href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" ><h2><?php echo e(Str::limit($property->property_name,35)); ?></h2></a>
                                    <h3 class="price"><?php echo e(getcong('currency_sign')); ?> <span><?php echo e($property->price); ?></span></h3>
                                    
                                    <div class="extra-info clearfix padding-bottom5">
                                      <ul class="property-data-verticale list-inline"> 
<?php if($property->bedrooms!=null): ?>
                                        <li class="bedroom">
                                          <i class="fa fa-bed"></i>
                                          <span class="value"><?php echo e($property->bedrooms); ?> </span>
                                          <span class="value-text">bed</span>
                                        </li>
<?php endif; ?>
<?php if($property->bathrooms!=null): ?>
                                        <li class="bathroom ">
                                          <i class="fa fa-bath"></i>
                                          <span class="value"><?php echo e($property->bathrooms); ?></span>
                                          <span class="value-text">bath</span>
                                        </li>
<?php endif; ?>
 <?php if($property->build_area!=null): ?>


                                        <li class="area">
                                          <i class="fa fa-columns" aria-hidden="true"></i>
                                          <span class="value"><?php echo e($property->build_area); ?></span>
                                          <span class="value-text">sft</span>
                                        </li>
<?php endif; ?>

                                      </ul>
                                    </div>
                                    <span class="location-i padding-bottom5 "><i class="fa fa-map-marker"></i> <?php echo e(getPropertyLocationName($property->location)->name); ?></span>
                                    
                                  </div>
                                 </div>
                              </div> <!--col-xs-7-->
                            </div> <!--row-->
                        </div>
                      </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                 </div> <!--row-->
                </div>

              </div> <!--home-verified-plots-->


	    <div class="home-verified-plots type-land">
                <div class="verified-plots-header">
                  <div class="row">
           
                     <div class="col-8"> <h2 class="home-section-title">Plots & Commercial Land</h2> </div>
                     <div class="col-4"><div class="pull-right"> <a class="home-see-more" href="<?php echo e(URL::to('type/land')); ?>">See More>></a> </div></div>
                  </div>
                </div>
                
                <div class="property-listing">
                  <div class="row">
                   <?php $__currentLoopData = $land_properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <div class="col-md-6">
                      <div class="prod-img boxShadow"> 
                          <div class="verticale-view wow fadeInUp">
                            <div class="row no-gutters">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                  <div class="verticale-view-left">
                                    <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="img-container2">
                                      <img src="<?php echo e(URL::asset('upload/properties/'.$property->featured_image.'-s.jpg')); ?>" alt="Image of Property">
                                    </a>
                                  </div>
                                </div>
                              
                              <div class="col-xs-12 col-sm-6 col-md-6">  
                                <div class="verticale-view-right">
                                  <div class="bottom-sec column-view">
                                    <a class="title" href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" ><h2><?php echo e(Str::limit($property->property_name,35)); ?></h2></a>
                                    <h3 class="price"><?php echo e(getcong('currency_sign')); ?> <span><?php echo e($property->price); ?></span></h3>
                                    
                                    <div class="extra-info clearfix padding-bottom5">
                                      <ul class="property-data-verticale list-inline"> 
<?php if($property->bedrooms!=null): ?>
                                        <li class="bedroom">
                                          <i class="fa fa-bed"></i>
                                          <span class="value"><?php echo e($property->bedrooms); ?> </span>
                                          <span class="value-text">bed</span>
                                        </li>
<?php endif; ?>
<?php if($property->bathrooms!=null): ?>
                                        <li class="bathroom ">
                                          <i class="fa fa-bath"></i>
                                          <span class="value"><?php echo e($property->bathrooms); ?></span>
                                          <span class="value-text">bath</span>
                                        </li>
<?php endif; ?>
<?php if($property->build_area!=null): ?>

                                        <li class="area">
                                          <i class="fa fa-columns" aria-hidden="true"></i>
                                          <span class="value"><?php echo e($property->build_area); ?></span>
                                          <span class="value-text">sft</span>
                                        </li>
<?php endif; ?>

                                      </ul>
                                    </div>
                                    <span class="location-i padding-bottom5 "><i class="fa fa-map-marker"></i> <?php echo e(getPropertyLocationName($property->location)->name); ?></span>
                                    
                                  </div>
                                 </div>
                              </div> <!--col-xs-7-->
                            </div> <!--row-->
                        </div>
                      </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                 </div> <!--row-->
                </div>

              </div> <!--type-land-->


              <div class="home-Standard-Collection ">
                <div class="verified-plots-header">
                  <div class="row">

                       <?php
                        $i= 'standard-collection';
                      ?>
                     <div class="col-8"> <h2 class="home-section-title">Standard Collection</h2> </div>
                     <div class="col-4"><div class="pull-right"> <a class="home-see-more" href="<?php echo e(URL::to('property-form-'.$i)); ?>">See More>></a> </div></div>

                  </div>
                </div>
                
                <div class="property-listing">
                  <div class="row">
                   <?php $__currentLoopData = $standard_collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <div class="col-md-6">
                      <div class="prod-img boxShadow"> 
                          <div class="verticale-view wow fadeInUp">
                            <div class="row no-gutters">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                  <div class="verticale-view-left">
                                    <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="img-container2">
                                      <img src="<?php echo e(URL::asset('upload/properties/'.$property->featured_image.'-s.jpg')); ?>" alt="Image of Property">
                                    </a>
                                  </div>
                                </div>
                              
                              <div class="col-xs-12 col-sm-6 col-md-6">  
                                <div class="verticale-view-right">
                                  <div class="bottom-sec column-view">
                                    <a class="title" href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" ><h2><?php echo e(Str::limit($property->property_name,35)); ?></h2></a>
                                    <h3 class="price"><?php echo e(getcong('currency_sign')); ?> <span><?php echo e($property->price); ?></span></h3>
                                    
                                    <div class="extra-info clearfix padding-bottom5">
                                      <ul class="property-data-verticale list-inline"> 
                                        <li class="bedroom">
<?php if($property->bedrooms!=null): ?>
                                          <i class="fa fa-bed"></i>
                                          <span class="value"><?php echo e($property->bedrooms); ?> </span>
                                          <span class="value-text">bed</span>
                                        </li>
<?php endif; ?>
<?php if($property->bathrooms!=null): ?>

                                        <li class="bathroom ">
                                          <i class="fa fa-bath"></i>
                                          <span class="value"><?php echo e($property->bathrooms); ?></span>
                                          <span class="value-text">bath</span>
                                        </li>
<?php endif; ?>
<?php if($property->build_area!=null): ?>

                                        <li class="area">
                                          <i class="fa fa-columns" aria-hidden="true"></i>
                                          <span class="value"><?php echo e($property->build_area); ?></span>
                                          <span class="value-text">sft</span>
                                        </li>
<?php endif; ?>

                                      </ul>
                                    </div>
                                    <span class="location-i padding-bottom5 "><i class="fa fa-map-marker"></i> <?php echo e(getPropertyLocationName($property->location)->name); ?></span>
                                    
                                  </div>
                                 </div>
                              </div> <!--col-xs-7-->
                            </div> <!--row-->
                        </div>
                      </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                 </div> <!--row-->
                </div>

              </div> <!--Standard-Collection-->


              <div class="home-Services">
                <div class="Services-header">
                  <div class="row">
                     <div class="col-6"> <h2 class="home-section-title">Services</h2> </div>
                     <div class="col-6"><div class="pull-right"> <a class="home-see-more" href="<?php echo e(URL::to('details/services/1')); ?>">See More>></a> </div></div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-12">
                    <div class="bottom-banner boxShadow"> 
                    <a href="<?php echo e($servicebanner->link); ?>"> <img src="<?php echo e(URL::asset($servicebanner->image)); ?>" alter="<?php echo e($servicebanner->name); ?>"/></a>
                    </div>
                  </div> 
                </div>
              </div> <!--home-Services-->

              <div class="home-Commercial">
                <div class="Commercial-header">
                  <div class="row">
                     <div class="col-6"> <h2 class="home-section-title">Exclusive Product</h2> </div>
                     <div class="col-6"><div class="pull-right"> <a class="home-see-more" href="<?php echo e(URL::to('properties/')); ?>">See More>></a> </div></div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-12">
                    <div class="bottom-banner boxShadow"> 
                    <a href="<?php echo e($commercialproject->link); ?>"> <img src="<?php echo e(URL::asset($commercialproject->image)); ?>" alter="<?php echo e($commercialproject->name); ?>"/></a>
                    </div>
                  </div> 
                </div>
              </div> <!--home-Commercial-->


             <!-- <div class="home-quick-navi">
                <div class="quick-navi-header">
                  <div class="row">
                      <div class="col-12"> <h2 class="home-section-title">Quick Navigation</h2>  </div>
                      
                  </div>
                </div>
                
                <div class="row">

                   <div class="col-md-6">
                      <ul class="navigation-tag-list"> 
                        <li><a href="">Dhaka</a></li>
                        <li><a href="">Bashundhara</a></li> 
                        <li><a href="">Mohammadpur</a></li>
                        <li><a href="">Uttara</a></li> 
                        <li><a href="">Mirpur</a></li> 
                        <li><a href="">Banasree</a></li> 
                      </ul>
                    </div>

                    <div class="col-md-6">
                      <ul class="navigation-tag-list"> 
                        <li><a href="">Commercial Plots</a></li>
                        <li><a href="">Exclusive Apartments</a></li> 
                        <li><a href="">Premium Living</a></li> 
                        <li><a href="">Flats for Sale</a></li> 
                        <li><a href="">Condos</a></li> 
                        <li><a href="">Installment Flats</a></li> 
                        <li><a href="">60-80 Lakhs Flat</a></li> 
                        <li><a href="">Villa</a></li> 
                      </ul>
                    </div>

                </div>
              </div> -->
              <!--home-Commercial-->

          </div> <!--col-md-9-->

          <div class="col-xs-12 col-sm-12 col-md-3">

              <div class="home-right-sidebar property-listing" style="background:#fff; margin-top:27px;">
                  <div class="row">
                    <?php $__currentLoopData = $featured_properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="col-xs-12 col-sm-6 col-md-12">
                        <div class="property-box boxShadow">
                                <div class="inner-box" >
                                  <a href="<?php echo e(URL::to('properties/')); ?>" class="img-container2">
                                    
                                    <img src="<?php echo e(URL::asset('upload/properties/'.$property->featured_image.'-s.jpg')); ?>" alt="Image of Property">
                                    <?php if($property->featured_property==1): ?>
                                    <span class="tag-label featured-item"><i class="fa fa-star"></i></span>
                                    <?php endif; ?>
                                  </a>
                                  
                                  <div class="bottom-sec">
                                    <a class="title" href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" ><h2><?php echo e(Str::limit($property->property_name,35)); ?></h2></a>
                                    <h3 class="price"><?php echo e(getcong('currency_sign')); ?> <span><?php echo e($property->price); ?></span></h3>
                                    <div class="extra-info clearfix padding-bottom5">
                                        <ul class="property-data row-list list-inline"> 
<?php if($property->bedrooms!=null): ?>
                                          <li class="bedroom ">
                                            <i class="fa fa-bed"></i>
                                            <div class="value"><?php echo e($property->bedrooms); ?></div>
                                            bed
                                          </li>
<?php endif; ?>
<?php if($property->bathrooms!=null): ?>

                                          <li class="bathroom ">
                                              <i class="fa fa-bath"></i>
                                              <div class="value"><?php echo e($property->bathrooms); ?></div>
                                              bath
                                            </li>
<?php endif; ?>
<?php if($property->build_area!=null): ?>

                                            <li class="area">
                                              <i class="fa fa-columns" aria-hidden="true"></i>
                                              <div class="value"><?php echo e($property->build_area); ?></div>
                                              sft
                                            </li>
<?php endif; ?>
                                        </ul>
                                      </div>
                                      <span class="location-i padding-bottom5 "><i class="fa fa-map-marker"></i> <?php echo e(getPropertyLocationName($property->location)->name); ?></span>
                                  </div>

                                </div>
                              </div>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div> <!--row-->
				  
				  <div class="home-page-ads1 boxShadow" style="margin-top:21px;"> 
					
					  <a href="<?php echo e($homeads1->link); ?>"> <img src="<?php echo e(URL::asset($homeads1->image)); ?>" alter="<?php echo e($homeads1->name); ?>"/></a>
				  
				</div>
					
              </div>
         </div> <!--col-xs-12 col-sm-12 col-md-3-->

      </div><!--row-->
    </div> <!--container-->
    
  </section>
  <!-- End of Recent Properties -->


  <?php echo $__env->make("_particles.inquires", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Bijoy Offer Modal -->
<div class="modal fade" id="bijoyModal" tabindex="-1" aria-labelledby="bijoyModalLabel" style="display: block;" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header-bijoy">
        
        <button type="button" class="close bijoyModelclose agentContModelclose" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class=" bijoy-body-image">
<!--<img src="<?php echo e(URL::asset('site_assets/img/popup.png')); ?>" class="img-fluid" alt="Bijoy Offer"/>-->
        <img src="<?php echo e(asset('upload/popup-final.png')); ?>" class="img-fluid" alt="Bijoy Offer"/>
      </div>
     
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/pages/index.blade.php ENDPATH**/ ?>