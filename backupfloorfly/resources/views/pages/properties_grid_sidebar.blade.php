@extends("app")

@section('head_title', trans('words.all_properties').' | '.getcong('site_name') )
@section('head_url', Request::url())


@section('styles')
    <link href="{{ URL::asset('site_assets/alert-toastr/toastr.css') }} " rel="stylesheet">
@stop

@section("content")

 <!--Breadcrumb Section-->
 @include("_particles.slider")
      
  <!--Breadcrumb Section-->

  <section class="main-container container">
    <div class="content-box col-sm-8">
      <!-- Properties -->
      <section class="property-listing boxed-view clearfix" style="margin-top: 0px;padding: 0px;">
        <div class="inner-container clearfix">

          @foreach($properties as $i => $property)
          <div class="">
            <div class="property-box boxShadow  wow fadeInUp">
              <div class="inner-box2">
                <div class="row">
                <div class="col-xs-5 col-sm-5">
                  <a href="{{ url('properties/'.$property->property_slug.'/'.$property->id) }}" class="img-container2">
                    <img src="{{ URL::asset('upload/properties/'.$property->featured_image.'-s.jpg') }}" alt="Image of Property">
                     @if($property->soldout==1)
                        <span class="tag-label sold-item"><img src="{{URL::asset('upload/soldout.png')}}" alt="soldout"/></span>
                        @endif
                   
                  </a>
                </div>
                
                <div class="col-xs-7 col-sm-7">  
                  <div class="bottom-sec column-view">
                    <a href="{{ url('properties/'.$property->property_slug.'/'.$property->id) }}" class="title"><h2>{{ Str::limit($property->property_name,35) }}</h2></a>
                    <h3 class="price size25">{{getcong('currency_sign').' '.$property->price}}</h3>
                    <div class="padding-bottom5 location-i"><i class="fa fa-map-marker"></i> {{ getPropertyLocationName($property->location)->name }} </div>
                    
                    <span class="padding-bottom5"> <strong>Property: </strong> {{ getPropertyTypeName($property->property_type)->types }}</span>
                    <div class="extra-info clearfix padding-bottom5">
                    <ul class="property-data list-inline"> 
                      <li class="bedroom ">
                        <i class="fa fa-bed"></i>
                        <div class="value">{{$property->bedrooms}}</div>
                        bed
                      </li>

                      <li class="bathroom ">
                        <i class="fa fa-bath"></i>
                        <div class="value">{{$property->bathrooms}}</div>
                        bath
                        </li>

                      <li class="area">
                        <i class="fa fa-columns" aria-hidden="true"></i>
                        <div class="value">{{$property->build_area}}</div>
                        sft
                        </li>
                    </ul>
                    </div>

                    <ul class="service-contacts list-inline clearfix">
                        <li><a class="call-now btn fly-btn1" href="tel:+8801819767676"><i class="fa fa-phone"> </i> CALL NOW</a> </li>
                        <li><a href="#" data-toggle="modal" data-target="#contactAgentModel{{$property->id}}" class="btn fly-btn2"><i class="fa fa-envelop"></i> EMAIL US</a></li>
                    </ul>

                  </div>
                </div> <!--col-xs-7-->
              </div> <!--row-->


              </div>
            </div>

            @include('_particles.enquiry_widget')

            
<script type="text/javascript">
	@if (count($errors) > 0)
		$('#contactAgentModel{{$property->id}}').modal('show');
	@endif
</script>
            
          </div>
 
          @endforeach

        </div>


        <!-- Pagination -->
        @include('_particles.pagination', ['paginator' => $properties]) 
        <!-- End of Pagination -->
      </section>
      <!-- End of Properties -->
    </div>
    <aside class="col-sm-4">
     @include("_particles.sidebar") 
    </aside>
  </section>

@endsection



@section("scripts")
 <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="{{ URL::asset('site_assets/alert-toastr/toastr.js') }}"></script>

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

@endsection
