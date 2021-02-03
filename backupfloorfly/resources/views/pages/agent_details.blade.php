@extends("app")

@section('head_title', $agent->name.' | '.getcong('site_name') )
@section('head_url', Request::url())

@section("content")

<!-- @if(Session::has('flash_message'))
<script type="text/javascript">
   
  alert('{{ Session::get('flash_message') }}');

</script>
@endif -->

<!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="@if(getcong('title_bg')) {{ URL::asset('upload/'.getcong('title_bg')) }} @else {{ URL::asset('site_assets/img/breadcrumb-bg.jpg') }} @endif">
    <div class="inner-container container">
      <h1>@if($agent->usertype=='Agents' or $agent->usertype=='Admin') {{trans('words.agent')}} @else {{trans('words.owner')}} @endif {{trans('words.details')}}</h1>
      <div class="breadcrumb">
        <ul class="list-inline">
          <li class="home"><a href="{{ URL::to('/') }}">{{trans('words.home')}}</a></li>
          @if($agent->usertype=='Agents')<li><a href="{{ URL::to('agents/') }}">{{trans('words.agents')}}</a></li>@endif
          <li> {{$agent->name}}</li>
        </ul>
      </div>
    </div>
  </section>
  <!--Breadcrumb Section-->

  <section class="main-container agent-box-container container" style="padding-top: 40px;">

    <div class="container ">
      <div class="agent-box" style="background: #eee;padding:15px 15px;">
        <div class="row">

          <div class="agent-img-container col-lg-2">
              @if($agent->profile_image)
                          
                <img src="{{ URL::asset($agent->profile_image)}}" alt="{{ $agent->name }}">
              
              @else
              
              <img src="{{ URL::asset('site_assets/img/avatar.png') }}" alt="{{ $agent->name }}">
              
              @endif
          </div>

          <div class=" col-lg-10">

            <div class="agent_name"><h4>{{$agent->name}}</h4></div>

            <ul class="list-inline agent-social">
              <li> <a href="{{$agent->facebook}}" class="fa fa-facebook" target="_blank"></a> </li>
              <li> <a href="{{$agent->twitter}}" class="fa fa-twitter" target="_blank"></a></li>
              <li> <a href="{{$agent->gplus}}" class="fa fa-google-plus" target="_blank"></a></li>
              <li> <a href="{{$agent->linkedin}}" class="fa fa-linkedin" target="_blank"></a></li>
            </ul>

            <form action="{{route('agenthire')}}" method="post" enctype="multipart/form-data">

                {{csrf_field()}}

                <input type="hidden" name="agent_id" value="{{$agent->id}}">
                <input type="hidden" name="agent_name" value="{{$agent->name}}">
                <input type="hidden" name="agent_phone" value="{{$agent->agent_contact1}}">
                <input type="hidden" name="agent_email" value="{{$agent->email}}">
                
                <button type="submit" class="btn btn-lg submit" name="submit">Hire Now</button>    
                
           </form>
           
              @if(Session::has('success'))
                <p style="color:green">{{ Session::get('success') }}</p>  
              @endif

          </div>

          <div class="col-lg-12">

            <div class="stats-desc">
              <ul class="user-stats"><li>Position<strong>{{$agent->agent_position}}</strong></li>
              
              <li>Member since<strong>{{$agent->created_at->format('M Y')}}</strong></li>

              <li>Department<strong>{{$agent->agent_department}}</strong></li>
              
              <li>Project Completed<strong> </strong></li></ul>
            
             <article class="seller-desc">
               <hr />
               
              {{$agent->about}}
             </article>
             </div>
          </div> <!--col-lg-12-->

        </div>
      </div>

    </div>


    <div class="property-listing-container clearfix">
      <div class="title-box clearfix">
        <h2 class="hsq-heading type-1">@if($agent->usertype=='Agents' or $agent->usertype=='Admin') {{trans('words.agents_properties')}} @else {{trans('words.owner_properties')}} @endif </h2>
        <div class="subtitle">&nbsp;</div>
      </div>
      <div class="property-container clearfix">

        @foreach($properties as $i => $property)
        <div class="propertybox-featured col-md-6">
          <div class="inner-container clearfix">
            <a href="{{ url('properties/'.$property->property_slug.'/'.$property->id) }}" class="img-container col-xs-6">
               @if($property->featured_property==1)<span class="tag-label hot-offer">{{trans('words.featured')}}</span>@endif
               <img src="{{ URL::asset('upload/properties/'.$property->featured_image.'-s.jpg') }}" alt="Image of Property">
              <span class="price-box">{{getcong('currency_sign').' '.$property->price}}</span>
              @if($property->property_purpose==trans('words.purpose_sale'))
              <div class="property-status-sale">
                    <span>{{trans('words.for_sale')}}</span>
              </div>
              @endif
              @if($property->property_purpose==trans('words.purpose_rent'))
              <div class="property-status-rent">
                    <span>{{trans('words.for_rent')}}</span>
              </div>
              @endif
            </a>
            <div class="col-xs-6 main-info">
              <a href="{{ url('properties/'.$property->property_slug.'/'.$property->id) }}" class="title">{{ Str::limit($property->property_name,35) }}</a>

              <div class="location">{{ Str::limit($property->address,40) }}</div>
              <div class="desc">
                {!! Str::limit($property->description,100) !!}
              </div>
              <div class="bottom-sec clearfix">
                <div class="extra-info">
                  <div class="bedroom">
                    <div class="value">{{$property->bedrooms}}</div>
                    bedroom
                  </div>
                  <div class="bathroom">
                    <div class="value">{{$property->bathrooms}}</div>
                    bathroom
                  </div>
                </div>
                <a href="{{ url('properties/'.$property->property_slug.'/'.$property->id) }}" class="btn more-link">{{trans('words.more_info')}}</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
      <!-- begin:pagination -->
            @include('_particles.pagination', ['paginator' => $properties])             
    <!-- end:pagination -->
    </div>
  </section>
   
  @endsection

  @section('styles')
    <link href="{{ URL::asset('site_assets/alert-toastr/toastr.css') }} " rel="stylesheet">
  @stop

  @section('scripts')

    <script src="{{ URL::asset('site_assets/alert-toastr/toastr.js') }}"></script>

    <script>
        @if(Session::has('success'))
			toastr.success("{{Session::get('success')}}")
        @endif

        @if(Session::has('info'))
		    	toastr.info("{{Session::get('info')}}")
        @endif

        @if(Session::has('danger'))
		    	toastr.danger("{{Session::get('danger')}}")
        @endif
    </script>
@stop