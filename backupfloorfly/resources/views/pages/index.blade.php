@extends("app")
@section("content")

@if(getcong('home_properties_layout')=='slider')

@include("_particles.slider")

@else

@include("_particles.mapsearch")

@endif

<!--#propmotions-slider-->
<section id="propmotions-slider" class="boxed-view clearfix">
    <div class="inner-container container">

        <div class="owl-carousel-ads-slider owl-theme">
            @foreach(\App\Promotionslider::orderBy('id','ASC')->get() as $slide)
            <div class="items">
                <a href="{{$slide->link}}"><img class="lazyOwl" data-src="{{URL::asset($slide->photo)}}" alt="" /></a>
            </div>
            @endforeach

        </div>

    </div>
</section>
<!--#propmotions-slider-->

<!-- Recent Properties -->
<section class="Home-page-section boxed-view clearfix">

    <div class="inner-container container">
        <div class="row">

            @php
            $onsaleleftbanner=\App\FrontDesign::where('type','on sale left ads')->first();
            $onsalebottombanner=\App\FrontDesign::where('type','on sale bottom ads')->first();
            $servicebanner=\App\FrontDesign::where('type','service')->first();
            $commercialproject=\App\FrontDesign::where('type','commercial projects')->first();
            $homeads1=\App\FrontDesign::where('type','home-sidebar-ads1')->first();


            @endphp

            <div class="col-xs-12 col-sm-12 col-md-9">

                <div class="home-on-sale">
                    <div class="onsale-header">
                        <div class="row">
                            <div class="col-8">
                                <h2 class="home-section-title">On sale</h2>
                            </div>
                            <div class="col-4">
                                <div class="pull-right"> <a class="home-see-more"
                                        href="{{ URL::to('properties/') }}">See More>></a> </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="onsale-left-banner boxShadow">
                                <!-- <a href="{{$onsaleleftbanner->link}}"> <img
                                        src="{{URL::asset($onsaleleftbanner->image)}}"
                                        alter="{{$onsaleleftbanner->name}}" /></a> -->
                            </div>
                        </div>
                        <!--col-md-4-->

                        <div class="col-md-8">
                            <div class="property-listing">
                                <div class="row">

                                    @foreach($propertieslist as $i => $property)
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="property-box boxShadow">
                                            <div class="inner-box">
                                                <a href="{{ URL::to('properties/') }}" class="img-container2">

                                                    <img src="{{ URL::asset('upload/properties/'.$property->featured_image.'-s.jpg') }}"
                                                        alt="Image of Property">
                                                    @if($property->featured_property==1)
                                                    <span class="tag-label featured-item"><i
                                                            class="fa fa-star"></i></span>
                                                    @endif
                                                </a>

                                                <div class="bottom-sec">
                                                    <a class="title"
                                                        href="{{ url('properties/'.$property->property_slug.'/'.$property->id) }}">
                                                        <h2>{{ Str::limit($property->property_name,35) }}</h2>
                                                    </a>
                                                    <h3 class="price">{{getcong('currency_sign')}}
                                                        <span>{{$property->price}}</span></h3>
                                                    <div class="extra-info clearfix padding-bottom5">
                                                        <ul class="property-data row-list list-inline">
                                                            @if($property->bedrooms!=null)
                                                            <li class="bedroom ">
                                                                <i class="fa fa-bed"></i>
                                                                <div class="value">{{$property->bedrooms}}</div>
                                                                bed
                                                            </li>
                                                            @endif
                                                            @if($property->bathrooms!=null)
                                                            <li class="bathroom ">
                                                                <i class="fa fa-bath"></i>
                                                                <div class="value">{{$property->bathrooms}}</div>
                                                                bath
                                                            </li>
                                                            @endif
                                                            @if($property->build_area!=null)
                                                            <li class="area">
                                                               <i class="fa-columns" aria-hidden="true"></i>
                                                                <div class="value">{{$property->build_area}}</div>
                                                                sft
                                                            </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                    <span class="location-i padding-bottom5 "><i
                                                            class="fa fa-map-marker"></i>
                                                        {{ getPropertyLocationName($property->location)->name }}</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!--row-->
                            </div>
                            <!--property-listing-->
                            <div class="">
                                <div class="onsale-bottom-banner boxShadow">
                                    <a href="{{$onsalebottombanner->link}}"> <img
                                            src="{{URL::asset($onsalebottombanner->image)}}"
                                            alter="{{$onsalebottombanner->name}}" /></a>
                                </div>
                            </div>

                        </div>
                        <!--col-md-8-->

                    </div>
                    <!--row-->
                </div>
                <!--home-on-sale-->


                <div class="home-prem-collection">
                    <div class="prem-collection-header">
                        <div class="row">
                            <?php
                        $i= 'premium-collection';
                      ?>
                            <div class="col-8">
                                <h2 class="home-section-title">Premium Collection</h2>
                            </div>
                            <div class="col-4">
                                <div class="pull-right"> <a class="home-see-more"
                                        href="{{ URL::to('property-form-'.$i) }}">See More>></a> </div>
                            </div>
                        </div>
                    </div>

                    <div class="property-listing">
                        <div class="row">
                            @foreach($premium_properties as $i => $property)
                            <div class="col-md-6">
                                <div class="prod-img boxShadow">
                                    <div class="verticale-view wow fadeInUp">
                                        <div class="row no-gutters">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="verticale-view-left">
                                                    <a href="{{ url('properties/'.$property->property_slug.'/'.$property->id) }}"
                                                        class="img-container2">
                                                        <img src="{{ URL::asset('upload/properties/'.$property->featured_image.'-s.jpg') }}"
                                                            alt="Image of Property">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="verticale-view-right">
                                                    <div class="bottom-sec column-view">
                                                        <a class="title"
                                                            href="{{ url('properties/'.$property->property_slug.'/'.$property->id) }}">
                                                            <h2>{{ Str::limit($property->property_name,35) }}</h2>
                                                        </a>
                                                        <h3 class="price">{{getcong('currency_sign')}}
                                                            <span>{{$property->price}}</span></h3>

                                                        <div class="extra-info clearfix padding-bottom5">
                                                            <ul class="property-data-verticale list-inline">
                                                                @if($property->bedrooms!=null)
                                                                <li class="bedroom">
                                                                    <i class="fa fa-bed"></i>
                                                                    <span class="value">{{$property->bedrooms}} </span>
                                                                    <span class="value-text">bed</span>
                                                                </li>
                                                                @endif
                                                                @if($property->bathrooms!=null)
                                                                <li class="bathroom ">
                                                                    <i class="fa fa-bath"></i>
                                                                    <span class="value">{{$property->bathrooms}}</span>
                                                                    <span class="value-text">bath</span>
                                                                </li>
                                                                @endif
                                                                @if($property->build_area!=null)
                                                                <li class="area">
                                                                    <i class="fa fa-columns" aria-hidden="true"></i>
                                                                    <span class="value">{{$property->build_area}}</span>
                                                                    <span class="value-text">sft</span>
                                                                </li>
                                                                @endif
                                                            </ul>
                                                        </div>
                                                        <span class="location-i padding-bottom5 "><i
                                                                class="fa fa-map-marker"></i>
                                                            {{ getPropertyLocationName($property->location)->name }}</span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--col-xs-7-->
                                        </div>
                                        <!--row-->
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <!--row-->
                    </div>

                </div>
                <!--home-prem-collection-->



                <div class="home-verified-plots">
                    <div class="verified-plots-header">
                        <div class="row">

                            <div class="col-8">
                                <h2 class="home-section-title">Commercial Project</h2>
                            </div>
                            <div class="col-4">
                                <div class="pull-right"> <a class="home-see-more"
                                        href="{{ URL::to('type/commercial-project') }}">See More>></a> </div>
                            </div>
                        </div>
                    </div>

                    <div class="property-listing">
                        <div class="row">
                            @foreach($flats_properties as $i => $property)
                            <div class="col-md-6">
                                <div class="prod-img boxShadow">
                                    <div class="verticale-view wow fadeInUp">
                                        <div class="row no-gutters">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="verticale-view-left">
                                                    <a href="{{ url('properties/'.$property->property_slug.'/'.$property->id) }}"
                                                        class="img-container2">
                                                        <img src="{{ URL::asset('upload/properties/'.$property->featured_image.'-s.jpg') }}"
                                                            alt="Image of Property">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="verticale-view-right">
                                                    <div class="bottom-sec column-view">
                                                        <a class="title"
                                                            href="{{ url('properties/'.$property->property_slug.'/'.$property->id) }}">
                                                            <h2>{{ Str::limit($property->property_name,35) }}</h2>
                                                        </a>
                                                        <h3 class="price">{{getcong('currency_sign')}}
                                                            <span>{{$property->price}}</span></h3>

                                                        <div class="extra-info clearfix padding-bottom5">
                                                            <ul class="property-data-verticale list-inline">
                                                                @if($property->bedrooms!=null)
                                                                <li class="bedroom">
                                                                    <i class="fa fa-bed"></i>
                                                                    <span class="value">{{$property->bedrooms}} </span>
                                                                    <span class="value-text">bed</span>
                                                                </li>
                                                                @endif
                                                                @if($property->bathrooms!=null)
                                                                <li class="bathroom ">
                                                                    <i class="fa fa-bath"></i>
                                                                    <span class="value">{{$property->bathrooms}}</span>
                                                                    <span class="value-text">bath</span>
                                                                </li>
                                                                @endif
                                                                @if($property->build_area!=null)


                                                                <li class="area">
                                                                    <i class="fa fa-columns" aria-hidden="true"></i>
                                                                    <span class="value">{{$property->build_area}}</span>
                                                                    <span class="value-text">sft</span>
                                                                </li>
                                                                @endif

                                                            </ul>
                                                        </div>
                                                        <span class="location-i padding-bottom5 "><i
                                                                class="fa fa-map-marker"></i>
                                                            {{ getPropertyLocationName($property->location)->name }}</span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--col-xs-7-->
                                        </div>
                                        <!--row-->
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <!--row-->
                    </div>

                </div>
                <!--home-verified-plots-->


                <div class="home-verified-plots type-land">
                    <div class="verified-plots-header">
                        <div class="row">

                            <div class="col-8">
                                <h2 class="home-section-title">Plots & Commercial Land</h2>
                            </div>
                            <div class="col-4">
                                <div class="pull-right"> <a class="home-see-more" href="{{ URL::to('type/land') }}">See
                                        More>></a> </div>
                            </div>
                        </div>
                    </div>

                    <div class="property-listing">
                        <div class="row">
                            @foreach($land_properties as $i => $property)
                            <div class="col-md-6">
                                <div class="prod-img boxShadow">
                                    <div class="verticale-view wow fadeInUp">
                                        <div class="row no-gutters">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="verticale-view-left">
                                                    <a href="{{ url('properties/'.$property->property_slug.'/'.$property->id) }}"
                                                        class="img-container2">
                                                        <img src="{{ URL::asset('upload/properties/'.$property->featured_image.'-s.jpg') }}"
                                                            alt="Image of Property">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="verticale-view-right">
                                                    <div class="bottom-sec column-view">
                                                        <a class="title"
                                                            href="{{ url('properties/'.$property->property_slug.'/'.$property->id) }}">
                                                            <h2>{{ Str::limit($property->property_name,35) }}</h2>
                                                        </a>
                                                        <h3 class="price">{{getcong('currency_sign')}}
                                                            <span>{{$property->price}}</span></h3>

                                                        <div class="extra-info clearfix padding-bottom5">
                                                            <ul class="property-data-verticale list-inline">
                                                                @if($property->bedrooms!=null)
                                                                <li class="bedroom">
                                                                    <i class="fa fa-bed"></i>
                                                                    <span class="value">{{$property->bedrooms}} </span>
                                                                    <span class="value-text">bed</span>
                                                                </li>
                                                                @endif
                                                                @if($property->bathrooms!=null)
                                                                <li class="bathroom ">
                                                                    <i class="fa fa-bath"></i>
                                                                    <span class="value">{{$property->bathrooms}}</span>
                                                                    <span class="value-text">bath</span>
                                                                </li>
                                                                @endif
                                                                @if($property->build_area!=null)

                                                                <li class="area">
                                                                    <i class="fa fa-columns" aria-hidden="true"></i>
                                                                    <span class="value">{{$property->build_area}}</span>
                                                                    <span class="value-text">sft</span>
                                                                </li>
                                                                @endif

                                                            </ul>
                                                        </div>
                                                        <span class="location-i padding-bottom5 "><i
                                                                class="fa fa-map-marker"></i>
                                                            {{ getPropertyLocationName($property->location)->name }}</span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--col-xs-7-->
                                        </div>
                                        <!--row-->
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <!--row-->
                    </div>

                </div>
                <!--type-land-->


                <div class="home-Standard-Collection ">
                    <div class="verified-plots-header">
                        <div class="row">

                            <?php
                        $i= 'standard-collection';
                      ?>
                            <div class="col-8">
                                <h2 class="home-section-title">Standard Collection</h2>
                            </div>
                            <div class="col-4">
                                <div class="pull-right"> <a class="home-see-more"
                                        href="{{ URL::to('property-form-'.$i) }}">See More>></a> </div>
                            </div>

                        </div>
                    </div>

                    <div class="property-listing">
                        <div class="row">
                            @foreach($standard_collections as $i => $property)
                            <div class="col-md-6">
                                <div class="prod-img boxShadow">
                                    <div class="verticale-view wow fadeInUp">
                                        <div class="row no-gutters">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="verticale-view-left">
                                                    <a href="{{ url('properties/'.$property->property_slug.'/'.$property->id) }}"
                                                        class="img-container2">
                                                        <img src="{{ URL::asset('upload/properties/'.$property->featured_image.'-s.jpg') }}"
                                                            alt="Image of Property">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="verticale-view-right">
                                                    <div class="bottom-sec column-view">
                                                        <a class="title"
                                                            href="{{ url('properties/'.$property->property_slug.'/'.$property->id) }}">
                                                            <h2>{{ Str::limit($property->property_name,35) }}</h2>
                                                        </a>
                                                        <h3 class="price">{{getcong('currency_sign')}}
                                                            <span>{{$property->price}}</span></h3>

                                                        <div class="extra-info clearfix padding-bottom5">
                                                            <ul class="property-data-verticale list-inline">
                                                                <li class="bedroom">
                                                                    @if($property->bedrooms!=null)
                                                                    <i class="fa fa-bed"></i>
                                                                    <span class="value">{{$property->bedrooms}} </span>
                                                                    <span class="value-text">bed</span>
                                                                </li>
                                                                @endif
                                                                @if($property->bathrooms!=null)

                                                                <li class="bathroom ">
                                                                    <i class="fa fa-bath"></i>
                                                                    <span class="value">{{$property->bathrooms}}</span>
                                                                    <span class="value-text">bath</span>
                                                                </li>
                                                                @endif
                                                                @if($property->build_area!=null)

                                                                <li class="area">
                                                                    <i class="fa fa-columns" aria-hidden="true"></i>
                                                                    <span class="value">{{$property->build_area}}</span>
                                                                    <span class="value-text">sft</span>
                                                                </li>
                                                                @endif

                                                            </ul>
                                                        </div>
                                                        <span class="location-i padding-bottom5 "><i
                                                                class="fa fa-map-marker"></i>
                                                            {{ getPropertyLocationName($property->location)->name }}</span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--col-xs-7-->
                                        </div>
                                        <!--row-->
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <!--row-->
                    </div>

                </div>
                <!--Standard-Collection-->


                <div class="home-Services">
                    <div class="Services-header">
                        <div class="row">
                            <div class="col-6">
                                <h2 class="home-section-title">Services</h2>
                            </div>
                            <div class="col-6">
                                <div class="pull-right"> <a class="home-see-more"
                                        href="{{ URL::to('details/services/1') }}">See More>></a> </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="bottom-banner boxShadow">
                                <a href="{{$servicebanner->link}}"> <img src="{{URL::asset($servicebanner->image)}}"
                                        alter="{{$servicebanner->name}}" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--home-Services-->

                <div class="home-Commercial">
                    <div class="Commercial-header">
                        <div class="row">
                            <div class="col-6">
                                <h2 class="home-section-title">Exclusive Product</h2>
                            </div>
                            <div class="col-6">
                                <div class="pull-right"> <a class="home-see-more"
                                        href="{{ URL::to('properties/') }}">See More>></a> </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="bottom-banner boxShadow">
                                <a href="{{$commercialproject->link}}"> <img
                                        src="{{URL::asset($commercialproject->image)}}"
                                        alter="{{$commercialproject->name}}" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--home-Commercial-->


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

            </div>
            <!--col-md-9-->

            <div class="col-xs-12 col-sm-12 col-md-3">

                <div class="home-right-sidebar property-listing" style="background:#fff; margin-top:27px;">
                    <div class="row">
                        @foreach($featured_properties as $i => $property)
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="property-box boxShadow">
                                <div class="inner-box">
                                    <a href="{{ URL::to('properties/') }}" class="img-container2">

                                        <img src="{{ URL::asset('upload/properties/'.$property->featured_image.'-s.jpg') }}"
                                            alt="Image of Property">
                                        @if($property->featured_property==1)
                                        <span class="tag-label featured-item"><i class="fa fa-star"></i></span>
                                        @endif
                                    </a>

                                    <div class="bottom-sec">
                                        <a class="title"
                                            href="{{ url('properties/'.$property->property_slug.'/'.$property->id) }}">
                                            <h2>{{ Str::limit($property->property_name,35) }}</h2>
                                        </a>
                                        <h3 class="price">{{getcong('currency_sign')}} <span>{{$property->price}}</span>
                                        </h3>
                                        <div class="extra-info clearfix padding-bottom5">
                                            <ul class="property-data row-list list-inline">
                                                @if($property->bedrooms!=null)
                                                <li class="bedroom ">
                                                    <i class="fa fa-bed"></i>
                                                    <div class="value">{{$property->bedrooms}}</div>
                                                    bed
                                                </li>
                                                @endif
                                                @if($property->bathrooms!=null)

                                                <li class="bathroom ">
                                                    <i class="fa fa-bath"></i>
                                                    <div class="value">{{$property->bathrooms}}</div>
                                                    bath
                                                </li>
                                                @endif
                                                @if($property->build_area!=null)

                                                <li class="area">
                                                    <i class="fa fa-columns" aria-hidden="true"></i>
                                                    <div class="value">{{$property->build_area}}</div>
                                                    sft
                                                </li>
                                                @endif
                                            </ul>
                                        </div>
                                        <span class="location-i padding-bottom5 "><i class="fa fa-map-marker"></i>
                                            {{ getPropertyLocationName($property->location)->name }}</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--row-->

                    <div class="home-page-ads1 boxShadow" style="margin-top:21px;">

                        <a href="{{$homeads1->link}}"> <img src="{{URL::asset($homeads1->image)}}"
                                alter="{{$homeads1->name}}" /></a>

                    </div>

                </div>
            </div>
            <!--col-xs-12 col-sm-12 col-md-3-->

        </div>
        <!--row-->
    </div>
    <!--container-->

</section>
<!-- End of Recent Properties -->


@include("_particles.inquires")

<!-- Bijoy Offer Modal -->
<!-- <div class="modal fade" id="bijoyModal" tabindex="-1" aria-labelledby="bijoyModalLabel" style="display: block;" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header-bijoy">
        
        <button type="button" class="close bijoyModelclose agentContModelclose" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class=" bijoy-body-image">

        <img src="{{asset('upload/popup-final.png')}}" class="img-fluid" alt="Bijoy Offer"/>
      </div>
     
    </div>
  </div>
</div> -->

@endsection