@extends("app")
@section('head_title', stripslashes($service->service_name) .' | '.getcong('site_name') )
@section('head_description', substr(strip_tags($service->service_description),0,200))
@section('head_image', asset($service->service_image))
@section('head_url', Request::url())

@section("content")
<!-- @if(Session::has('flash_message_agent'))
<script type="text/javascript">
   
  alert('{{ Session::get('flash_message_agent') }}');

</script>
@endif -->
 <!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" >
    <div class="inner-container container">
      <!-- <h1>{{trans('words.all_services')}}</h1>
      <div class="breadcrumb">
        <ul class="list-inline">
          <li class="home"><a href="{{ URL::to('/') }}">{{trans('words.home')}}</a></li>
          <li>{{trans('words.all_services')}}</li>
        </ul>
      </div> -->
    </div>
  </section>
  <!--Breadcrumb Section-->

  <section class="main-container container">
    <div class="content-box col-sm-8">
      <!-- Properties -->
      <section class=" boxed-view clearfix" style="margin-top: 0px;padding: 0px;">
        <div class="inner-container clearfix">
          <div class="property-box wow fadeInUp">
            <div class="inner-box services-box">
                <div class="service-single">
                    <div class="service-image">
                        <img src="{{url($service->service_image)}}" alt="{{$service->service_name}}" class="img-thumbnail">
                        <span class="tag-label phone-for-service"> <i class="fa fa-phone"> </i> +880 {{$service->service_phone}}</span>
                    </div>
                
                    <div class="service-text">
                        <h1 style="padding:5px 0px">{{$service->service_name}}</h1>
                        <p>{!!$service->service_description!!}</p>
                    </div> 
                </div>     
            </div>
          </div>
        </div>
      </section>
      <!-- End of Properties -->

      <div class="contact-form-container" id="agentscontact_sec">

            
              {!! Form::open(array('url'=>'agentscontact','method'=>'POST', 'id'=>'agent_contact_form')) !!}

              <input type="hidden" name="property_id" value="{{$service->id}}">
              <input type="hidden" name="lead_name" value="{{$service->service_name}}">
              <input type="hidden" name="agent_id" value="1">         
              <input type="hidden" name="lead_type" value="service">

              <div class="contact-form">
              <h2>Appoint US Now || <i class="fa fa-phone"> </i> +880 {{$service->service_phone}}</h2>
                <div class="field-box">
                  <input type="text" placeholder="{{trans('words.name')}} *" name="name">
                  @if ($errors->has('name'))
                    <span style="color:#fb0303">
                        {{ $errors->first('name') }}
                    </span>
                 @endif
                </div>
                <div class="field-box">
                  <input type="email" placeholder="{{trans('words.email')}} *" name="email">
                  @if ($errors->has('email'))
                    <span style="color:#fb0303">
                        {{ $errors->first('email') }}
                    </span>
                 @endif
                </div>
                <div class="field-box">
                  <input type="text" placeholder="{{trans('words.phone')}}" name="phone">
                </div>
                <textarea id="message" name="message" placeholder="{{trans('words.message')}} *"></textarea>
                @if ($errors->has('message'))
                    <span style="color:#fb0303">
                        {{ $errors->first('message') }}
                    </span>
                    <br><br>
                 @endif
                <button type="submit" class="btn btn-lg submit" name="submit">{{trans('words.submit')}}</button>
              </div>
              {!! Form::close() !!}
        </div>
    </div>
    <aside class="col-sm-4">
     @include("_particles.sidebar") 
    </aside>
  </section>

 
 
@endsection
