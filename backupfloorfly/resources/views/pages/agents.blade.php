@extends("app")

@section('head_title', trans('words.agents').' | '.getcong('site_name') )
@section('head_url', Request::url())

@section("content")
<!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="@if(getcong('title_bg')) {{ URL::asset('upload/'.getcong('title_bg')) }} @else {{ URL::asset('site_assets/img/breadcrumb-bg.jpg') }} @endif">
    <div class="inner-container container">
      
    </div>
  </section>
  <!--Breadcrumb Section--> 

  <section class="main-container container agent-box-container">
    <div class="title-box clearfix">
      <h2 class="hsq-heading type-1">{{trans('words.our_agents')}}</h2>
      <div class="subtitle">&nbsp;</div>
    </div>

    <div class="agent-text">
       <b> Floorfly recruitment process on behalf of the company:</b>
      <ul>
        <li> 1.	To hire any person through floor fly, a company needs to sign an MOU with floorfly for 1 year</li>
        <li> 2.	The company needs to pay one month’s equivalent salary of the selected candidate once the candidate joins the company and the payment should be made within 1 week from bill submission.</li>
        <li> 3.	The company can not deduct floorfly’s charges from the recruited person and whatsoever.</li>
        <li> 4.	Floorfly takes primary interview of the desired candidates primary selected by the company.</li>
        <li> 5.	Floorfly conducts a briefing session of the selected and scrutinized candidates about the hiring company and negotiate the salary.</li>
        <li> 6.	Upon confirming everything, floorfly shall send the candidate for final interview to the company.</li>
      </ul>
    </div>

  


  <div class="view-all-agents">
    @foreach($agents as $i => $agent) 
    <div class="col-xs-6 col-sm-4 col-md-3">
        <div class="agent-item">
            <div class="agent-profile">       
              @if($agent->profile_image)
                <img src="{{ URL::asset($agent->profile_image)}}" alt="{{ $agent->name }}">
              @else
              <img src="{{ URL::asset('site_assets/img/avatar.png') }}" alt="{{ $agent->name }}">
              @endif                       
            </div>

             <div class="agent-info">
                <h2 class="agent-name">{{$agent->name}}</h2>
                <div class="ratting-box">
                  <ul class="list-inline agent-ratting-list"> 
                    <li class="ratting-number"><b>4.7</b></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><img src="{{ URL::asset('site_assets/img/agent-rating.png') }}" /></li>
                  </ul>
                </div>

                <div class="agent-experience-data">
                  <p>Total Years of Experience : <b>{{$agent->yrs_exp}}</b></p>
                
                  @foreach($educations as $education)
                
                  <p>Education : 
                  
                  <b> {{$education->agent_degree}}</b>
               
                  </p>
                  
               @endforeach
               
                </div>
              </div>

              <div class="agent-contact-info">
                
                  <!-- <div class="agent-request-box"> 
                    <form action="{{route('agenthire')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}

                        <input type="hidden" name="agent_id" value="{{$agent->id}}">
                        <input type="hidden" name="agent_name" value="{{$agent->name}}">
                        <input type="hidden" name="agent_phone" value="{{$agent->agent_contact1}}">
                        <input type="hidden" name="agent_email" value="{{$agent->email}}">
                        <button type="submit" class="btn btn-request-cv" name="submit">Request CV</button>   
                      </form>
                    </div> -->
                    <div class="whatsapp-box"><a class="btn btn-green whatsapp_btn" href="https://wa.me/01819767676"><i class="fa fa-whatsapp"></i> Send Message</a></div>
                
              </div>

        </div>

      
    </div>
    @endforeach 
  </div>  <!--view-all-agents-->

  </section>
  <!-- Pagination -->
  @include('_particles.pagination', ['paginator' => $agents]) 
  <!-- End of Pagination -->

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