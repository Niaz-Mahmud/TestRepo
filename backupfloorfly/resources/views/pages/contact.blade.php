@extends("app")

@section('head_title', getcong('contact_us_title').' | '.getcong('site_name') )
@section('head_url', Request::url())

@section("content")

<!--Breadcrumb Section-->
  <section class="breadcrumb-box"  data-parallax="scroll" data-image-src="@if(getcong('title_bg')){{ URL::asset('upload/'.getcong('title_bg'))}} @else {{URL::asset('site_assets/img/breadcrumb-bg.jpg')}} @endif">
    <!-- <div id="contact-map"></div> -->
    <div class="inner-container container">
      <!-- <h1>{{getcong('contact_us_title')}}</h1>
      <div class="breadcrumb">
        <ul class="list-inline">
          <li class="home"><a href="{{ URL::to('/') }}">{{trans('words.home')}}</a></li>
          <li>{{getcong('contact_us_title')}}</li>
        </ul>
      </div> -->
    </div>
  </section>
  <!--Breadcrumb Section-->
<!-- begin:content -->
    <section class="main-container container">
     <div class="descriptive-section">       
     </div>
    <div class="contact-info clearfix">
      <div class="contact-info-box col-md-6 col-lg-4">
        <div class="inner-container">
          <i class="fa fa-envelope-o"></i>
          <div class="value">{{getcong('contact_us_email')}}</div>
        </div>
      </div>
      <div class="contact-info-box col-md-6 col-lg-4">
        <div class="inner-container">
          <i class="fa fa-phone"></i>
          <div class="value">{{getcong('contact_us_phone')}}</div>
        </div>
      </div>
      <div class="contact-info-box col-md-push-2 col-md-6 col-lg-push-0 col-lg-4">
        <div class="inner-container">
          <i class="fa fa-map-marker"></i>
          <div class="value">{{getcong('contact_us_address')}}</div>
        </div>
      </div>


      <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
		<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
        var setting = {"height":586,"width":1117,"zoom":17,"queryString":"FloorFly, Road-13, Dhaka, Bangladesh","place_id":"ChIJYWbyYMrFVTcRwPv8Z8eMqRQ","satellite":false,"centerCoord":[23.866806807026165,90.39612235],"cid":"0x14a98cc767fcfbc0","lang":"en","cityUrl":"/bangladesh/dhaka-2125","cityAnchorText":"Map of Dhaka, Bangladesh","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"375674"};
        var d = document;
        var s = d.createElement('script');
        s.src = 'https://1map.com/js/script-for-user.js?embed_id=375674';
        s.async = true;
        s.onload = function (e) {
          window.OneMap.initMap(setting)
        };
        var to = d.getElementsByTagName('script')[0];
        to.parentNode.insertBefore(s, to);
      })();</script><a href="https://1map.com/map-embed">1 Map</a></div>

    </div>


   


    

    @if(Session::has('flash_message_contact'))
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
 </button>
                {{ Session::get('flash_message_contact') }}
            </div>
        @endif
                       

    {!! Form::open(array('url' => 'contact-us','class'=>'','id'=>'contactform','role'=>'form')) !!}
    <div class="contact-form">
      <div class="row">
        <div class="col-sm-6 field-box">
          <input type="text" name="name" placeholder="{{trans('words.name')}} *" value="{{ old('name') }}">
          @if ($errors->has('name'))
                    <span style="color:#fb0303">
                        {{ $errors->first('name') }}
                    </span>
          @endif
        </div>
        <div class="col-sm-6 field-box">
          <input type="email" name="email" placeholder="{{trans('words.email')}} *" value="{{ old('email') }}">
          @if ($errors->has('email'))
                    <span style="color:#fb0303">
                        {{ $errors->first('email') }}
                    </span>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 field-box">
          <input type="text" name="phone" placeholder="{{trans('words.phone')}}" value="{{ old('phone') }}">
        </div>
        <div class="col-sm-6 field-box">
          <input type="url" name="website" placeholder="{{trans('words.website')}}" value="{{ old('website') }}">
        </div>
      </div>
      <div class="row message">
        <textarea id="message" name="your_message" placeholder="{{trans('words.message')}} *">{{ old('your_message') }}</textarea>
        @if ($errors->has('your_message'))
                    <span style="color:#fb0303">
                        {{ $errors->first('your_message') }}
                    </span>
          @endif
      </div>
      <div class="row button-box">
        <button class="btn" type="Submit">{{trans('words.submit')}}</button>
      </div>
    </div>
    {!! Form::close() !!}
  </section>
    <!-- end:content -->
 
@endsection
