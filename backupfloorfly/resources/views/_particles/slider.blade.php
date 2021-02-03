<!-- Main Slider -->
  <section id="main-slider">
    
    @foreach(\App\Slider::orderBy('slider_title')->get() as $slide)
    <div class="items">
      <div class="img-container" data-bg-img="{{ URL::asset('upload/slides/'.$slide->image_name.'.jpg') }}"></div>
      <!-- Change the URL section based on your image\'s name -->
      {{--<div class="slide-caption">
        <div class="inner-container clearfix">
          <div class="first-sec">{{ $slide->slider_text1 }}</div>
          <div class="sec-sec">{{ $slide->slider_text2 }}</div> 
        </div>
      </div>--}}
    </div>
    @endforeach
  </section>
  
     <!-- End of Main Slider -->
<!-- Property Search Box -->
<section id="property-search-container" class="container" style="margin-bottom: 0px;">
    @include("_particles.search")
</section> 
<!-- End of Property Search Box-->     

    