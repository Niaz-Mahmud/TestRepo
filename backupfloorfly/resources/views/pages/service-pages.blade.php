@extends("app")

@section('head_title', trans('words.all_services').' | '.getcong('site_name') )
@section('head_url', Request::url())

@section("content")

    <!--Breadcrumb Section-->
    <section class="breadcrumb-box" data-parallax="scroll" data-image-src="@if(getcong('title_bg')) {{ URL::asset('upload/'.getcong('title_bg')) }} @else {{ URL::asset('site_assets/img/breadcrumb-bg.jpg') }} @endif">
        <div class="inner-container container">
            <!-- <h1>{{trans('words.all_services')}}</h1>
            <div class="breadcrumb">
                <ul class="list-inline">
                    <li class="home"><a href="{{ URL::to('/') }}">{{trans('words.home')}}</a></li>
                    @if($category_id !=null)
                        <li>{{$category_id->name}}</li>
                    @elseif($subcategory_id !=null)
                        <li>{{$subcategory_id->name}}</li>
                    @elseif($subsubcategory_id !=null)
                        <li>{{$subsubcategory_id->name}}</li>
                    @endif
                </ul>
            </div> -->
        </div>
    </section>
    <!--Breadcrumb Section-->

    <section class="main-container container">
        <div class="content-box col-sm-8">


          <!-- service -->
            <section class=" boxed-view clearfix" style="margin-top: 0px;padding: 0px;">
            <div class="inner-container clearfix">
                @if(count($service) >0 )
                @foreach($service as $row)
                <div class="property-box">

                     <div class="inner-box services-box">
                            <div class="service-single">
                            <div class="service-image">
                                <img src="{{url($row->service_image)}}" alt="{{$row->service_name}}" class="img-thumbnail">
                                <span class="tag-label phone-for-service"> <i class="fa fa-phone"> </i> +880 9612 232323</span>
                            </div>
                            <div class="service-text">
                                <h1 style="padding:5px 0px">{{$row->service_name}}</h1>
                                <p>{!!$row->service_description!!}</p>
                            </div> 
                        </div> 

                        {{--<div class="row">
                            <div class="col-md-3">
                                <div class="service-image">
                                    <img src="{{url($row->service_image)}}" alt="{{$row->service_name}}" class="img-thumbnail">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-text">
                                <a  href="{{route('service.single',['slug'=>$row->slug])}}"> <h2>{{$row->service_name}}</h2></a>
                                    <p>{!!Str::limit($row->service_description, 70, ' ...')!!}</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="service-contacts">
                                    <a class="call-now btn fly-btn1" href="tel:+880{{$row->service_phone}}"><i class="fa fa-phone"> </i> +880 9612 232323</a> 
                                    <a href="{{route('service.single',['slug'=>$row->slug])}}" class="btn fly-btn2">Appoint us</a>
                                </div>
                            </div>   
                            </div> --}}
                     </div> <!--inner-box-->

                     <div class="inner-box services-box">
                            <!-- Contact for service -->
                        <div class="contact-form-container" id="agentscontact_sec">
                            {!! Form::open(array('url'=>'agentscontact','method'=>'POST', 'id'=>'agent_contact_form')) !!}

                            <input type="hidden" name="property_id" value="{{$row->id}}">
                            <input type="hidden" name="lead_name" value="{{$row->service_name}}">
                            <input type="hidden" name="agent_id" value="1">         
                            <input type="hidden" name="lead_type" value="service">

                            <div class="contact-form">
                                <h2>Appoint US Now || <i class="fa fa-phone"> </i> +880 9612 232323</h2>
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
                        </div><!-- Contact for service -->
                     </div> <!--inner-box-->
                </div>
                @endforeach

                @else
                <p>Page Not Found.</p>
                @endif


            </div>
            <!-- Pagination -->
           {{-- @include('_particles.pagination', ['paginator' => $properties]) --}}
            <!-- End of Pagination -->
            </section>
          <!-- End of Properties -->
            </div>
            <aside class="col-sm-4">
            @include("_particles.sidebar") 
            </aside>
    </section>

 
 
@endsection
