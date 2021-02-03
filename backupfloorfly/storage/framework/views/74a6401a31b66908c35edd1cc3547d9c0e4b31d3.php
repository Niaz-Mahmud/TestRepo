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

              ?>

          <div class="col-xs-12 col-sm-12 col-md-9">

              <div class="home-on-sale">
                <div class="onsale-header">
                  <div class="row">
                     <div class="col-6"> <h2 class="home-section-title">On sale</h2> </div>
                     <div class="col-6"><div class="pull-right"> <a class="home-see-more" href="<?php echo e(URL::to('properties/')); ?>">See More>></a> </div></div>
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
                                  <a href="<?php echo e(URL::to('properties/')); ?>" class="img-container">
                                    <?php if($property->featured_property==1): ?><span class="tag-label hot-offer"><?php echo e(trans('words.featured')); ?></span><?php endif; ?>
                                    <img src="<?php echo e(URL::asset('upload/properties/'.$property->featured_image.'-s.jpg')); ?>" alt="Image of Property">
                                    <span class="price"><?php echo e(getcong('currency_sign').' '.$property->price); ?></span>

                                  </a>
                                  <div class="bottom-sec">
                                    <a href="<?php echo e(URL::to('properties/')); ?>" class="title"><?php echo e(Str::limit($property->property_name,35)); ?></a>
                                    <div class="location"><?php echo e(Str::limit($property->address,40)); ?></div>
                                    <!--<div class="desc">-->
                                    <!--  <?php echo Str::limit($property->description,100); ?>-->
                                    <!--</div>-->
                                    <div class="extra-info clearfix padding-bottom5">
                                        <ul class="property-data row-list list-inline"> 
                                          <li class="bedroom ">
                                            <i class="fa fa-bed"></i>
                                            <div class="value"><?php echo e($property->bedrooms); ?></div>
                                            bed
                                          </li>

                                          <li class="bathroom ">
                                              <i class="fa fa-bath"></i>
                                              <div class="value"><?php echo e($property->bathrooms); ?></div>
                                              bath
                                            </li>

                                            <li class="area">
                                              <i class="fa fa-columns" aria-hidden="true"></i>
                                              <div class="value"><?php echo e($property->build_area); ?></div>
                                              sft
                                            </li>
                                        </ul>
                                      </div>
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
                     <div class="col-6"> <h2 class="home-section-title">Premium Collection</h2> </div>
                     <div class="col-6"><div class="pull-right"> <a class="home-see-more" href="<?php echo e(URL::to('type/apartments')); ?>">See More>></a> </div></div>
                  </div>
                </div>

                <div class="property-listing">
                  <div class="row">
                   <?php $__currentLoopData = $premium_properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6">
                      <div class="prod-img boxShadow"> 
                          <div class="verticale-view wow fadeInUp">
                            <div class="row no-gutters">
                                <div class="col-xs-4 col-sm-4">
                                  <div class="verticale-view-left">
                                    <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="img-container2">
                                      <img src="<?php echo e(URL::asset('upload/properties/'.$property->featured_image.'-s.jpg')); ?>" alt="Image of Property">
                                    </a>
                                  </div>
                                </div>
                              
                              <div class="col-xs-8 col-sm-8">  
                                <div class="verticale-view-right">
                                  <div class="bottom-sec column-view">
                                    <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="title"><h2><?php echo e(Str::limit($property->property_name,35)); ?></h2></a>
                                    <h3 class="price size25"><?php echo e(getcong('currency_sign').' '.$property->price); ?></h3>
                                    <div class="padding-bottom5 location-i"><i class="fa fa-map-marker"></i> <?php echo e($property->location); ?></div>
                                    
                                    <span class="padding-bottom5"> <strong>Property: </strong> <?php echo e(getPropertyTypeName($property->property_type)->types); ?></span>
                                  
                                  <div class="property-box nomargine">
                                    <div class="extra-info clearfix padding-bottom5">
                                      <ul class="property-data-verticale list-inline"> 
                                        <li class="bedroom ">
                                          <i class="fa fa-bed"></i>
                                          <div class="value"><?php echo e($property->bedrooms); ?></div>
                                          bed
                                        </li>

                                        <li class="bathroom ">
                                          <i class="fa fa-bath"></i>
                                          <div class="value"><?php echo e($property->bathrooms); ?></div>
                                          bath
                                          </li>

                                        <li class="area">
                                          <i class="fa fa-columns" aria-hidden="true"></i>
                                          <div class="value"><?php echo e($property->build_area); ?></div>
                                          sft
                                          </li>
                                      </ul>
                                    </div>
                                  </div>

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
                     <div class="col-6"> <h2 class="home-section-title">Verified Plots</h2> </div>
                     <div class="col-6"><div class="pull-right"> <a class="home-see-more" href="<?php echo e(URL::to('properties/')); ?>">See More>></a> </div></div>
                  </div>
                </div>
                
                <div class="property-listing">
                  <div class="row">
                   <?php $__currentLoopData = $flats_properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6">
                      <div class="prod-img boxShadow"> 
                          <div class="verticale-view wow fadeInUp">
                            <div class="row no-gutters">
                                <div class="col-xs-4 col-sm-4">
                                  <div class="verticale-view-left">
                                    <a href="<?php echo e(URL::to('type/flats')); ?>" class="img-container2">
                                      <img src="<?php echo e(URL::asset('upload/properties/'.$property->featured_image.'-s.jpg')); ?>" alt="Image of Property">
                                    </a>
                                  </div>
                                </div>
                              
                              <div class="col-xs-8 col-sm-8">  
                                <div class="verticale-view-right">
                                  <div class="bottom-sec column-view">
                                    <a href="<?php echo e(URL::to('type/flats')); ?>" class="title"><h2><?php echo e(Str::limit($property->property_name,35)); ?></h2></a>
                                    <h3 class="price size25"><?php echo e(getcong('currency_sign').' '.$property->price); ?></h3>
                                    <div class="padding-bottom5 location-i"><i class="fa fa-map-marker"></i> <?php echo e($property->location); ?></div>
                                    
                                    <span class="padding-bottom5"> <strong>Property: </strong> <?php echo e(getPropertyTypeName($property->property_type)->types); ?></span>
                                  
                                  <div class="property-box nomargine">
                                    <div class="extra-info clearfix padding-bottom5">
                                      <ul class="property-data-verticale list-inline"> 
                                        <li class="bedroom ">
                                          <i class="fa fa-bed"></i>
                                          <div class="value"><?php echo e($property->bedrooms); ?></div>
                                          bed
                                        </li>

                                        <li class="bathroom ">
                                          <i class="fa fa-bath"></i>
                                          <div class="value"><?php echo e($property->bathrooms); ?></div>
                                          bath
                                          </li>

                                        <li class="area">
                                          <i class="fa fa-columns" aria-hidden="true"></i>
                                          <div class="value"><?php echo e($property->build_area); ?></div>
                                          sft
                                          </li>
                                      </ul>
                                    </div>
                                  </div>

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
                     <div class="col-6"> <h2 class="home-section-title">Commercial Projects</h2> </div>
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
                            <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="img-container">
                              <?php if($property->featured_property==1): ?><span class="tag-label hot-offer"><?php echo e(trans('words.featured')); ?></span><?php endif; ?>
                              <img src="<?php echo e(URL::asset('upload/properties/'.$property->featured_image.'-s.jpg')); ?>" alt="Image of Property">
                              <span class="price"><?php echo e(getcong('currency_sign').' '.$property->price); ?></span>

                            </a>
                            <div class="bottom-sec">
                              <a href="<?php echo e(url('properties/'.$property->property_slug.'/'.$property->id)); ?>" class="title"><?php echo e(Str::limit($property->property_name,35)); ?></a>
                              <div class="location"><?php echo e(Str::limit($property->address,40)); ?></div>
                              <!--<div class="desc">-->
                              <!--  <?php echo Str::limit($property->description,100); ?>-->
                              <!--</div>-->
                              <div class="extra-info clearfix padding-bottom5">
                                  <ul class="property-data row-list list-inline"> 
                                    <li class="bedroom ">
                                      <i class="fa fa-bed"></i>
                                      <div class="value"><?php echo e($property->bedrooms); ?></div>
                                      bed
                                    </li>

                                    <li class="bathroom ">
                                        <i class="fa fa-bath"></i>
                                        <div class="value"><?php echo e($property->bathrooms); ?></div>
                                        bath
                                      </li>

                                      <li class="area">
                                        <i class="fa fa-columns" aria-hidden="true"></i>
                                        <div class="value"><?php echo e($property->build_area); ?></div>
                                        sft
                                      </li>
                                  </ul>
                                </div>
                            </div>

                          </div>
                        </div>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div> <!--row-->
              </div>
         </div> <!--col-xs-12 col-sm-12 col-md-3-->

      </div><!--row-->
    </div> <!--container-->
    
  </section>
  <!-- End of Recent Properties -->
  
  <!--Our Partners-->

    
  <!--End of Our Partners-->

    <?php echo $__env->make("_particles.inquires", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xmapp\htdocs\floorfly5\resources\views/pages/index.blade.php ENDPATH**/ ?>