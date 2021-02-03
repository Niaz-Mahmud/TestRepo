@extends("app")

@section('head_title', stripslashes($property->property_name) .' | '.getcong('site_name') )
@section('head_description', substr(strip_tags($property->description),0,200))
@section('head_image', asset('/upload/properties/'.$property->featured_image.'-b.jpg'))
@section('head_url', Request::url())

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('site_assets/loancalculation/material.cyan-amber.min.css') }}">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="{{ URL::asset('site_assets/loancalculation/icon.css') }} ">
    <link href="{{ URL::asset('site_assets/alert-toastr/toastr.css') }} " rel="stylesheet">
  @stop
  

@section("content")


  <!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="@if(getcong('title_bg')) {{ URL::asset('upload/'.getcong('title_bg')) }} @else {{ URL::asset('site_assets/img/breadcrumb-bg.jpg') }} @endif">
      <div class="inner-container container">
    
      </div>
  </section>
  <!--Breadcrumb Section-->


  @if(Session::has('flash_message_agent'))
    <script type="text/javascript">
      alert('{{ Session::get('flash_message_agent') }}');
    </script>
  @endif



  <section class="main-container container">

      <div class="">

        <div class="content-box col-sm-12 col-md-8">

          <section id="property-slider-section" @if(count($property_gallery_images)==0) style="margin-bottom: 0px;" @endif>
              
               @if($property->soldout==1)
                    <span class="tag-label sold-item"><img src="{{URL::asset('upload/soldout.png')}}" alt="soldout"/></span>
                @endif
            <!-- Main Slider -->
            <div id="property-main-slider">
              <div class="items">
                <div class="img-container" data-bg-img="{{ URL::asset('upload/properties/'.$property->featured_image.'-b.jpg') }}"></div>
                <!-- Change the URL section based on your image\'s name -->
              </div>

                @foreach($property_gallery_images as $key=>$gallery_img)
                <div class="items">
                  <div class="img-container" data-bg-img="{{ URL::asset('upload/gallery/'.$gallery_img->image_name) }}"></div> 
                </div>
                @endforeach
              </div>
              <!-- End of Main Slider -->
              @if(count($property_gallery_images)>0)
              <div id="property-thumb-slider" class="container">
                <div class="items">
                  <div class="img-container" data-bg-img="{{ URL::asset('upload/properties/'.$property->featured_image.'-b.jpg') }}"></div>
                </div>
                @foreach($property_gallery_images as $key=>$gallery_img)
                <div class="items">
                  <div class="img-container" data-bg-img="{{ URL::asset('upload/gallery/'.$gallery_img->image_name) }}"></div> 
                </div>
                @endforeach

              </div>
              @endif

          </section>
        </div> <!--col-md-8-->

        <div class="col-md-4 hidden-xs hidden-sm" style="margin-top:18px;">
            @include("_particles.agent_widget") 
        </div> <!--col-md-4-->
      </div> <!--row-->

      <div class="property-summery">
			<div class="row">
			  <div class="col-md-8 pro-headings">
				<h1> {{$property->property_name}}</h1>
			  </div>
				<div class="col-md-4">
					<div class="share-save">  
					  <a href="#" class="btn btn-default btn-lg" role="button" aria-disabled="true"><i class="fa fa-heart-o" aria-hidden="true"></i> Save</a>
					  <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('properties/'.$property->property_slug.'/'.$property->id) }}" class="btn btn-default btn-lg" role="button" aria-disabled="true"><i class="fa fa-share" aria-hidden="true"></i> Share</a>
					</div>
				</div> 
			</div>   

			<div class="short-info">  
            <div class="bottom-sec ">
              <div class="property-price"><small>BDT</small> {{$property->price}}</div>
              <div class="property-address location-i"><i class="fa fa-map-marker"></i> {{ getPropertyLocationName($property->location)->name }}</div>
			  <!-- <div class="property-address">Type: {{ getPropertyTypeName($property->property_type)->types }}</div> -->

               @if($property->bedrooms!=null)
              <div class="extra-info clearfix padding-bottom5">
         
                <ul class="property-data list-inline short-date"> 
                  <li class="bedroom ">
                    <div class="value"><i class="fa fa-bed"></i> {{$property->bedrooms}}  bed</div>
                  </li>
                  </ul>
                  </div>
                  @endif

                  @if($property->bathrooms!=null)
                  <div class="extra-info clearfix padding-bottom5">
                  <ul class="property-data list-inline short-date">
                  <li class="bathroom">
                    <div class="value"> <i class="fa fa-bath"></i> {{$property->bathrooms}}  bath</div>
                  </li>
                  </ul>
                  </div>
                  @endif
                  
                  @if($property->build_area!=null)
                  <div class="extra-info clearfix padding-bottom5">
                  
                  <ul class="property-data list-inline short-date">
                  <li class="area">
                    <div class="value"><i class="fa fa-columns" aria-hidden="true"></i> {{$property->build_area}} sft</div>
                   </li>
               </ul>
              </div>
              @endif

              <div class="short-note">
                <div class="container short-content">
                  <div class="row">
                      <ul class="short-note-list list-inline">
                          <li class="overview active"><a href="#quickBox"><i class="fa fa-th" aria-hidden="true"></i> Quick Peek</a></li>
                          <li class="amenities"><a href="#amenitiesBox"><i class="fa fa-eye" aria-hidden="true"></i> Amenities</a></li>
                          <li class="nearestplace"><a href="#NearestPlacesBox"><i class="fa fa-map-marker" aria-hidden="true"></i> Nearest Places</a></li>
                          <!-- <li class="nearestplace"><a href="#ContactBox"><i class="fa fa-envelope" aria-hidden="true"></i> Details</a></li> -->
                      </ul> 
                    
                    
                 
                    
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
                                <td><b>{{ getPropertyTypeName($property->property_type)->types }} <b></td>
                              </tr>
                              <tr>
                                <td>Price: </td>
                                <td><b>{{$property->price}}</b></td>
                              </tr>
                              
                              <tr>
                                <td>Bedroom:</td>
                                <td><b>{{$property->bedrooms}}</b></td>
                              </tr>
                              
                              <tr>
                                <td>Bath:</td>
                                <td><b>{{$property->bathrooms}} </b></td>
                              </tr>
                              
                              <tr>
                                <td>Balcony:</td>
                                <td><b>{{$property->balcony}}</b></td>
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
                                <td><b>{{$property->build_area }} {{trans('words.build_unit')}}</b></td>
                              </tr>
                              <tr>
                                <td>Location: </td>
                                <td><b>{{ getPropertyLocationName($property->location)->name }} </b></td>
                              </tr>
                              
                              <tr>
                                <td>Facing:</td>
                                <td><b>{{$property->facing}}</b></td>
                              </tr>
                              
                              <tr>
                                <td>Floor:</td>
                                <td><b>{{$property->available_floor}}</b></td>
                              </tr>
                              
                              <tr>
                                <td>Parking:</td>
                                <td><b>{{$property->garage}}</b></td>
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
          @if(Auth::check() && Auth::user()->usertype =='Agents')
          <div class="property-interest">  
        
            <form action="{{route('agentinterest')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              
              <input type="hidden" name="property_id" value="{{$property->id}}">
              <input type="hidden" name="property_name" value="{{$property->property_name}}">
                        
              <button type="submit" class="btn btn-lg interest" name="submit"><i class="fa fa-heart-o"></i> Interest For Sale</button>    

            </form>

              @if(Session::has('success'))
              <p style="color:green">{{ Session::get('success') }}</p>  
              @endif
              
              @if(Session::has('error'))
              <p style="color:red">{{ Session::get('error') }}</p>  
              @endif
              
              @if(Session::has('warning'))
              <p style="color:yellow">{{ Session::get('warning') }}</p>  
              @endif
              <br>
        
          </div>
          @endif

          <!--Highlight Section-->
          <div class="highlight-container">
            @if($property->land_area!=null)
            <div class="highlight-details-box">
              <div class="value">{{$property->land_area}}</div>
              <div class="text">{{trans('words.land_area')}}</div>
              <div class="unit">{{trans('words.land_unit')}}</div>
            </div>
           @endif

          
          @if($property->facing!=null)
          <div class="highlight-details-box">
              <div class="value"><img src="{{ URL::asset('site_assets/img/Facing.png') }}" width="32px;"> </div>
              <div class="text highlight-title">
                {{trans('words.facing')}}
              </div>
              <div class="unit"> {{$property->facing}}</div>
            </div>          
          @endif


          @if($property->no_of_floor!=null)
          <div class="highlight-details-box">
              <div class="value"><img src="{{ URL::asset('site_assets/img/No-of-Floors.png') }}" width="32px;"> </div>
              <div class="text highlight-title">
                {{trans('words.no_of_floor')}}
              </div>
              <div class="unit"> {{$property->no_of_floor}}</div>
            </div>          
          @endif


          </div>

         {{-- @if($property->map_latitude!=null AND $property->map_longitude!=null)
          <!-- Property Map -->
          <div class="property-details-map-container">
            <div id="property-details-map"></div>
          </div>
          @endif --}}

        </div>
		
        <div class="col-md-8 right-sec">
          <div class="information-box">
            <div>
              <h3>{{trans('words.amenities')}} </h3>
              <div class="box-content">
               
                <div class="attachment-container ">
                  <div class="row amenities">
                    @if($property->amenities_servent_bed)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/Servant-Bed.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_servent_bed}}</div>
                        <div class="dl-times" style="font-size: 0.9em;"></div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_servent_bath)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/Servant-Bath.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_servent_bath}}</div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_gym)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/Gym.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_gym}}</div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_front_yard)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/Front-yard.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_front_yard}}</div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_splash_pool)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/Splash-Pool.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_splash_pool}}</div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_roof_deck)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/Roof-Deck.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_roof_deck}}</div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_reception)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/Reception.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_reception}}</div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_rooftop_garden)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/Rooftop-Garden.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_rooftop_garden}}</div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_generator)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/Generator.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_generator}}</div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_substation)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/Substation.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_substation}}</div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_lift)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/Lift.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_lift}}</div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_kitchen_veranda)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/Kitchen-Veranda.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_kitchen_veranda}}</div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_kitchen_cabinet)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/Kichen-Cabinet.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_kitchen_cabinet}}</div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_corner_plot)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/Corner-Plot.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_corner_plot}}</div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_guest_lobby)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/Guest-Lobby.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_guest_lobby}}</div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_cctv)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/CCTV.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_cctv}}</div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_swimming_pool)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/Swimming-Pool.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_swimming_pool}}</div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_guest_parking)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/Guest-Parking.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_guest_parking}}</div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_laundry_room)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/Laundry-Room.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_laundry_room}}</div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_bbq)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/BBQ.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_bbq}}</div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_terrace)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/Terrace.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_terrace}}</div>
                      </a>
                    </div>
                    @endif

                    @if($property->amenities_sauna)
                    <div class="col-sm-6">
                      <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                        <div class="size"><img src="{{ URL::asset('site_assets/img/amenites/Sauna.png') }}" width="32px;"></div>
                        <div class="title">{{$property->amenities_sauna}}</div>
                      </a>
                    </div>
                    @endif
                 </div>
                   
              </div>
            </div> 

          </div>
        </div>

		  @if($property->video_code!=null)
		  <div class="information-box">
			<h3>{{trans('words.video_presentation')}}</h3>
			<div class="box-content">
			  <div class="video-box">
				{!! stripslashes($property->video_code) !!}
			  </div>
			</div>
		  </div>
		  @endif

        </div>
      </div>   

      <div class="b-sec">
		<div class="information-box property-details">
		   <h3>{{'Description'}} </h3>
			<div class="b-sec pro-details">

			  <!-- <div id="showbox_about">
				{!!Str::limit($property->description, 200, ' ...')!!}
				<span class="readmore-btn"> + Read More</span>
			   </div>
			
			   <div id="hidebox_about" style="display:none;">
				{!! $property->description !!}
				  <span class="readmore-btn-less"> - Show Less</span>
			   </div> -->
         {!! $property->description !!}

			</div>
		</div> <!--/.property-details--> 
			
          <div class="information-box" id="NearestPlacesBox">
            <h3>{{trans('words.nearest_palces_single')}}</h3>
            <div class="box-content">
              <div class="attachment-container">
                <div class="row">
                  @if($property->nearest_school_km)
                  <div class="col-sm-6">
                  <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                    <div class="size"><img src="{{ URL::asset('site_assets/img/features/education.png') }}" width="32px;"></div>
                    <div class="title">{{trans('words.school')}}</div>
                    <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i>{{$property->nearest_school_km}}</div>
                  </a>
                  </div>
                  @endif
                  @if($property->nearest_hospital_km)
                  <div class="col-md-6">
                  <a href="javascript:void();" class="attachment-box" style="margin-bottom: 10px;">
                    <div class="size"><img src="{{ URL::asset('site_assets/img/features/hospital.png') }}" width="32px;" style="margin-top: 3px;"></div>
                    <div class="title">{{trans('words.hospital')}}</div>
                    <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i>{{$property->nearest_hospital_km}}</div>
                  </a>
                  </div> 
                  @endif
                  @if($property->nearest_mall_km)
                  <div class="col-md-6" style="margin-bottom: 10px;">
                  <a href="javascript:void();" class="attachment-box">
                    <div class="size"><img src="{{ URL::asset('site_assets/img/features/mall.png') }}" width="36px;"></div>
                    <div class="title">{{trans('words.mall')}}</div>
                    <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i>{{$property->nearest_mall_km}}</div>
                  </a>
                  </div>
                  @endif
                  @if($property->nearest_bus_stand_km)
                  <div class="col-md-6" style="margin-bottom: 10px;">
                  <a href="javascript:void();" class="attachment-box">
                    <div class="size"><img src="{{ URL::asset('site_assets/img/features/bus.png') }}" width="40px;" style="margin-top: 3px;"></div>
                    <div class="title">{{trans('words.bus_station')}}</div>
                    <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i>{{$property->nearest_bus_stand_km}}</div>
                  </a>
                  </div>
                  @endif

                  @if($property->nearest_railway_km)
                  <div class="col-md-6" style="margin-bottom: 10px;">
                  <a href="javascript:void();" class="attachment-box">
                    <div class="size"><img src="{{ URL::asset('site_assets/img/features/railway.png') }}" width="40px;" style="margin-top: 3px;"></div>
                    <div class="title">{{trans('words.railway')}}</div>
                    <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i>{{$property->nearest_railway_km}}</div>
                  </a>
                  </div>
                  @endif

                  @if($property->nearest_airport_km)
                  <div class="col-md-6" style="margin-bottom: 10px;">
                  <a href="javascript:void();" class="attachment-box">
                    <div class="size"><img src="{{ URL::asset('site_assets/img/features/airport.png') }}" width="40px;" style="margin-top: 3px;"></div>
                    <div class="title">{{trans('words.airport')}}</div>
                    <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i>{{$property->nearest_airport_km}}</div>
                  </a>
                  </div>
                  @endif

                  @if($property->nearest_park_km)
                  <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="javascript:void();" class="attachment-box">
                      <div class="size"><img src="{{ URL::asset('site_assets/img/features/Park.png') }}" width="40px;" style="margin-top: 3px;"></div>
                      <div class="title">{{trans('words.nearest_park_km')}}</div>
                      <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i>{{$property->nearest_park_km}}</div>
                    </a>
                  </div>
                  @endif

                  @if($property->nearest_mosque_km)
                  <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="javascript:void();" class="attachment-box">
                      <div class="size"><img src="{{ URL::asset('site_assets/img/features/Mosque.png') }}" width="40px;" style="margin-top: 3px;"></div>
                      <div class="title">{{trans('words.nearest_mosque_km')}}</div>
                      <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i>{{$property->nearest_mosque_km}}</div>
                    </a>
                  </div>
                  @endif

                  @if($property->nearest_playground_km)
                  <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="javascript:void();" class="attachment-box">
                      <div class="size"><img src="{{ URL::asset('site_assets/img/features/Playground.png') }}" width="40px;" style="margin-top: 3px;"></div>
                      <div class="title">{{trans('words.nearest_playground_km')}}</div>
                      <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i>{{$property->nearest_playground_km}}</div>
                    </a>
                  </div>
                  @endif

                  @if($property->nearest_departmental_store_km)
                  <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="javascript:void();" class="attachment-box">
                      <div class="size"><img src="{{ URL::asset('site_assets/img/features/Departmental-Store.png') }}" width="40px;" style="margin-top: 3px;"></div>
                      <div class="title">{{trans('words.nearest_departmental_store_km')}}</div>
                      <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i>{{$property->nearest_departmental_store_km}}</div>
                    </a>
                  </div>
                  @endif

                  @if($property->nearest_restaurant_km)
                  <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="javascript:void();" class="attachment-box">
                      <div class="size"><img src="{{ URL::asset('site_assets/img/features/Restaurant.png') }}" width="40px;" style="margin-top: 3px;"></div>
                      <div class="title">{{trans('words.nearest_restaurant_km')}}</div>
                      <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i>{{$property->nearest_restaurant_km}}</div>
                    </a>
                  </div>
                  @endif

                  @if($property->nearest_fire_service_km)
                  <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="javascript:void();" class="attachment-box">
                      <div class="size"><img src="{{ URL::asset('site_assets/img/features/Fire-Service.png') }}" width="40px;" style="margin-top: 3px;"></div>
                      <div class="title">{{trans('words.nearest_fire_service_km')}}</div>
                      <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i>{{$property->nearest_fire_service_km}}</div>
                    </a>
                  </div>
                  @endif

                  @if($property->nearest_police_station_km)
                  <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="javascript:void();" class="attachment-box">
                      <div class="size"><img src="{{ URL::asset('site_assets/img/features/Police-Station.png') }}" width="40px;" style="margin-top: 3px;"></div>
                      <div class="title">{{trans('words.nearest_police_station_km')}}</div>
                      <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i>{{$property->nearest_police_station_km}}</div>
                    </a>
                  </div>
                  @endif

                  @if($property->nearest_pharmacy_km)
                  <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="javascript:void();" class="attachment-box">
                      <div class="size"><img src="{{ URL::asset('site_assets/img/features/Pharmacy.png') }}" width="40px;" style="margin-top: 3px;"></div>
                      <div class="title">{{trans('words.nearest_pharmacy_km')}}</div>
                      <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i>{{$property->nearest_pharmacy_km}}</div>
                    </a>
                  </div>
                  @endif

                  @if($property->nearest_grocery_bazar_km)
                  <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="javascript:void();" class="attachment-box">
                      <div class="size"><img src="{{ URL::asset('site_assets/img/features/Grocery-Kacha-Bazar.png') }}" width="40px;" style="margin-top: 3px;"></div>
                      <div class="title">{{trans('words.nearest_grocery_bazar_km')}}</div>
                      <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i>{{$property->nearest_grocery_bazar_km}}</div>
                    </a>
                  </div>
                  @endif

                  @if($property->nearest_govt_office_km)
                  <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="javascript:void();" class="attachment-box">
                      <div class="size"><img src="{{ URL::asset('site_assets/img/features/Govt-Office.png') }}" width="40px;" style="margin-top: 3px;"></div>
                      <div class="title">{{trans('words.nearest_govt_office_km')}}</div>
                      <div class="dl-times" style="font-size: 0.9em;"><i class="fa fa-road"></i>{{$property->nearest_govt_office_km}}</div>
                    </a>
                  </div>
                  @endif

                </div>                
              </div>
            </div>
          </div>

            @if($property->floor_plan!=null)
            <div class="information-box floor-plan">
              <h3>{{trans('words.floor_plan')}}</h3>
              <div class="box-content" align="center">
                <ul class="image-main-box clearfix">
                  <li class="item col-xs-12">
                    <figure>
                      <img src="{{ URL::asset('upload/floorplan/'.$property->floor_plan.'-s.jpg') }}" alt="Floor Plan"/>
                      <a href="{{ URL::asset('upload/floorplan/'.$property->floor_plan.'-b.jpg') }}" class="more-details" style="border:none;border-bottom:0px;">Enlarge</a>
                    </figure>
                  </li>
                
                </ul>
              </div>
            </div>
            @endif
		</div>

		<!-- <div class="information-box related-properties">
          <h3>{{trans('words.comments')}}</h3>
          {!! stripslashes(getcong('disqus_comment_code')) !!}
		</div> -->
    </div> <!--col-sm-8-->

	<!--Sidebar Box-->
    <aside class="col-sm-4" style="padding-top:82px;">    
      <!-- <div class="clearfix"></div> -->
       
      <!--Contact agent widget-->
      <div class="visible-xs visible-sm" >
           @include("_particles.agent_widget") 
      </div> 
      <!--sidebar-contact-agent-->   
<!-- 
      <div class="sidebar-box" id="LoanBox">
        <h3>{{trans('words.mortgage_calculator')}}</h3>
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
                @php
                  $price=$property->price;
                  $pro_price= str_replace(',','',$price);

                  $sft_price=$property->rate_per_sft;
                  $deposit_sft_price= str_replace(',','',$sft_price);
                  $depercent= (10/100)*$pro_price;

                @endphp

                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <label class="" for="sample4">Total Price</label>
                    <input  type="text" class="form-control total_price" pattern="-?[0-9]*(\.[0-9]+)?" id="property_price" min="1" max="{{ $pro_price }}" value="{{ $pro_price }}"  tabindex="1">
                    <span class="mdl-textfield__error">Price is not a number!</span>

                    <input id="price_slider" class="mdl-slider mdl-js-slider" type="range" min="0" max="{{ $pro_price }}" value="{{ $pro_price }}" tabindex="1">

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
                     >
                      </p>
                      <input id="repayment_value" class="slider-value form-control" type="text" pattern="-?[0-9]*(\.[0-9]+)?"  min="3" max="25" value="25">
                      <input id="repayment_slider" class="mdl-slider mdl-js-slider" type="range" min="3" max="25" value="25" tabindex="3">
                  </div>
                  <br>

                  <div class="mdl-textfield mdl-js-textfield animated slideInLeft ">
                  <p>
                      <label class="slider-label">Interest Rate:</label>
                   
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

      &nbsp; -->
    <!-- <div class="clearfix"></div> -->
    <!-- @include("_particles.sidebar")  -->
    @include("_particles.sidebar") 
    </aside>
    
  </section>
 

@endsection


 @section("scripts")
 <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="{{ URL::asset('site_assets/alert-toastr/toastr.js') }}"></script>
      <!-- Material Design Lite -->
      <script src="{{ URL::asset('site_assets/loancalculation/material.min.js') }}"></script>
      <script src="{{ URL::asset('site_assets/loancalculation/humanize.min.js') }}"></script>
  <script>
        $(document).ready(function() {
          
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
          
          $(".total_price").keyup(function(){  
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


      <script>
        @if(Session::has('success'))
		  	toastr.success("{{Session::get('success')}}")
        @endif

        @if(Session::has('info'))
		    	toastr.info("{{Session::get('info')}}")
        @endif

        @if(Session::has('warning'))
		    	toastr.warning("{{Session::get('warning')}}")
        @endif

        @if(Session::has('error'))
		    	toastr.error("{{Session::get('error')}}")
        @endif
  </script>

<script>
// Form Validation
  $(document).ready(function() {
  $("form[name='registration']").validate({
    rules: {
    
      name: {
        required: true,
        minlength: 3,
        maxlength: 28
      },

      phone: {
        required: true,
        minlength: 11,
        maxlength: 11
      },
      email: {
        required: true,
        email: true
      }
    },
    messages: {
     
      name: {
        required: "Please provide Full Name",
        minlength: "Min 3 Character length",
        maxlength: "Max 28 Character length"
      },

      phone: {
        required: "Please provide Phone Number",
        minlength: "Mobile number min 11 length",
        maxlength: "Mobile number max 11 length"
      },
      email: "Please enter a valid email address"
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
  
</script>

<script type="text/javascript">
	@if (count($errors) > 0)
		$('#contactAgentModel{{$property->id}}').modal('show');
	@endif
</script>
@endsection


