<header id="main-header">
    <div id="header-top">
        <div class="header-top-content container">
            <!-- Language Switcher -->
            <ul id="language-switcher" class="list-inline" style="border-right: 0px;">
               <li style="border:none;"><a href="tel:{{getcong('contact_us_phone')}}"><i class="fa fa-phone"></i>&nbsp; {{getcong('contact_us_phone')}}</a></li>
              <li style="border:none;"><a href="mailto:{{getcong('contact_us_email')}}"><i class="fa fa-envelope-o"></i>&nbsp; {{getcong('contact_us_email')}}</a></li>
            </ul>
            <!-- End of Language Switcher -->
            <!-- Login Links -->
            <ul id="login-boxes" class="list-inline">
             @if(Auth::check())
             <li><a href="{{ URL::to('dashboard') }}">{{trans('words.dashboard_text')}}</a></li>
              <li><a href="{{ URL::to('logout') }}">{{trans('words.logout')}}</a></li>
             @else
             <li><a href="{{ URL::to('login') }}">{{trans('words.login_text')}}</a></li>
             <li><a href="{{ URL::to('register') }}">{{trans('words.sign_up')}}</a></li>
             <li><a href="{{ URL::to('register/agent') }}" class="btn-success btn-agentRg">{{'Agent Registration'}}</a></li>
             @endif
              
            </ul>
            <!-- End of Login Links -->
        </div>
    </div>

    <div class="main-header-cont">
        <div class="container">
            <div class="menu-bg ">
                <div class="row">
                    <!-- Top Logo -->
                    <div class="logo-main-box col-xs-6 col-sm-4 col-md-2">
                        <a href="{{ URL::to('/') }}">@if(getcong('site_logo')) 
                        <img src="{{ URL::asset('upload/'.getcong('site_logo')) }}" alt="{{getcong('site_name')}}" width="175"> @else <span>{{getcong('site_name')}}</span> @endif
                         
                        </a>
                    </div>
                    <!-- End of Top Logo -->

                    <!-- Main Menu -->
                    <div class="top-menu-container col-xs-6 col-sm-8 col-md-10">
                        <nav class="main-menu-area">
                            <?php
                            $serviceCategory = CategoryControl();
                            ?>
                            <ul class="menu menu-hide">
                            <li class="active"><a href="{{ URL::to('/') }}" class="{{classActivePathPublic('')}}">{{trans('words.home')}}</a>
                            <li><a href="{{ URL::to('properties/') }}" class="{{classActivePathPublic('properties')}}">{{trans('words.all_properties')}}</a></li>
                                @foreach($serviceCategory as $serviceCategorydata)
                                @php
                                $serviceSubcategory = App\ServiceSubcategory::where('service_category_id', $serviceCategorydata->id)->get();
                                @endphp
                                <li class="parent">
                                    <a  href="{{ route('category.details', [$serviceCategorydata->slug, $serviceCategorydata->id]) }}">{{ $serviceCategorydata->name }}</a>
                                    <span class="fa fa-angle-down"></span>
                                    <ul class="sub-menu">
                                        @foreach($serviceSubcategory as $serviceSubcategorydata)
                                        <li class="parent">
                                            <a href="{{ route('category.details', [$serviceSubcategorydata->slug, $serviceSubcategorydata->id]) }}">{{ $serviceSubcategorydata->name }}
                                        
                                            @php
                                            $serviceChildcategory = App\ServiceChildcategory::where('service_subcategory_id', $serviceSubcategorydata->id)->get();
                                            $val = count($serviceChildcategory);
                                            @endphp
                                            </a>
                                            @if($val > 0)
                                            <span class="fa fa-angle-down"></span>
                                            @endif 
                                            <ul class="sub-menu">
                                            @foreach($serviceChildcategory as $serviceChildcategorydata)
                                            <li><a href="{{ route('category.details', [$serviceChildcategorydata->slug, $serviceChildcategorydata->id]) }}">{{ $serviceChildcategorydata->name }}</a></li>
                                            @endforeach
                                            </ul>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                                
                                <li><a href="{{route('blog') }}" class="{{classActivePathPublic('blog')}}">{{'Blog'}}</a></li>

                                <li class="parent">
                                <a href="#" class="{{classActivePathPublic('agents')}}">{{'Seller'}}</a> 
                                <span class="fa fa-angle-down"></span>
                                <ul class="sub-menu">
                                    <li><a href="{{ URL::to('register') }}">{{'Seller Registration'}} </a></li>  
                                    <li><a href="{{ URL::to('profile') }}">{{'My Profile'}} </a></li>  
                                    <li><a href="{{ URL::to('my_properties') }}">{{'My Properties'}} </a></li>
                                </ul>
                                </li>

                                <li class="parent">
                                <a href="javascript:void(0)}" class="{{classActivePathPublic('agents')}}">{{trans('words.agents')}}</a> 
                                <span class="fa fa-angle-down"></span>
                                <ul class="sub-menu">
                                <li><a href="#">{{'Our Agents'}}</a></li>
                                    <li><a href="{{ URL::to('register/agent') }}">{{'Agent Registration'}}</a></li>
                                    <li><a href="{{ URL::to('agents/') }}">{{'Recruit Agents'}}</a></li>
                                    <li><a href="{{ URL::to('profile') }}">{{'My Profile'}} </a></li>  
                                    <li><a href="{{ URL::to('my_properties') }}">{{'My CRM'}} </a></li>    
                                </ul>
                                </li> 

                                <li><a href="{{ URL::to('contact-us/') }}" class="{{classActivePathPublic('contact-us')}}">{{'Contact'}}</a></li>
                            </ul>

                            <div class="mobile-view-menu">
                                <div id="main-menu-handle" class="responsive-menu menu-tab">
                                    <div id="one"></div>
                                    <div id="two"></div>
                                    <div id="three"></div>
                                </div>
                                <!-- Mobile Menu handle -->
                            
                                 @if(Auth::check())
                                @if(Auth::user()->usertype =='Agents')
                                    <a id="submit-property-link" class="btn" href=""><span>{{'Property List'}}</span></a>
                                @else
                                <a id="submit-property-link" class="btn" href="{{ URL::to('submit-property') }}"><span>{{trans('words.submit_property')}}</span></a>
                                @endif

                                 @else
                                <a id="submit-property-link" class="btn" href="{{ URL::to('submit-property') }}"><span>{{trans('words.submit_property')}}</span></a>
                                @endif
                            </div>
                        </nav><!-- END of Main Menu -->
                    </div><!-- Main Menu -->

                </div> <!-- menu-bg -->
            </div> <!-- row -->
        </div> <!-- container -->
    </div><!--main-header-cont-->
  
  </header>

