
 @include("_particles.ads_widget")  
 @php
           
 $homeads1=\App\FrontDesign::where('type','home-sidebar-ads1')->first();

            @endphp
<div class="sidebar-box">
  <h3>{{trans('words.property_type')}}</h3>
  <div class="box-content">
    <ul>
      @foreach(\App\Types::orderBy('types')->get() as $type)
      <li><a href="{{URL::to('type/'.$type->slug.'')}}" style="color: #333333;">{{$type->types}}</a>&nbsp;({{countPropertyType($type->id)}})</li>
      @endforeach
       
    </ul>
  </div>
</div>

<div class="home-page-ads1 boxShadow" style="margin-top:21px;">

<a href="{{$homeads1->link}}"> <img src="{{URL::asset($homeads1->image)}}"
        alter="{{$homeads1->name}}" /></a>

</div>








<div class="sidebar-box">
  <h3>{{trans('words.featured_properties')}}</h3>
  <div class="box-content">
    <div class="featured-properties">
      <div class="property-box">
        
        @foreach(\App\Properties::where('featured_property',1)->orderBy('id','desc')->take(3)->get() as $property)
        <a href="{{ url('properties/'.$property->property_slug.'/'.$property->id) }}" class="clearfix">
          <span class="img-container col-xs-4">
            <img src="{{ URL::asset('upload/properties/'.$property->featured_image.'-s.jpg') }}" alt="Image of Property">
          </span>
          <span class="details col-xs-8">
            <span class="title">{{ Str::limit($property->property_name,35) }}</span>
            <span class="location">{{ Str::limit($property->address,40) }}</span>
            <span class="price">{{getcong('currency_sign').' '.$property->price}}</span>
          </span>
        </a>
        @endforeach
     
      </div>
    </div>
  </div>
</div>

<!--End of Sidebar Box-->