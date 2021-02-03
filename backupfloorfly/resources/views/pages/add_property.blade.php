@extends("app")

@section('head_title', trans('words.add_property').' | '.getcong('site_name') )
@section('head_url', Request::url())

@section("content")

<style type="text/css">
 @media (max-width: 991px) {
    .mobile-only {
        display:block !important;
    }
 
    .desktop-only {
        display:none !important;
    }
} 

</style> 

 <script type="text/javascript" src="{{ URL::asset('site_assets/ckeditor/ckeditor.js') }}"></script>

<!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="@if(getcong('title_bg')){{ URL::asset('upload/'.getcong('title_bg'))}} @else {{URL::asset('site_assets/img/breadcrumb-bg.jpg')}} @endif">
    <div class="inner-container container">
      <!-- <h1>{{trans('words.add_property')}}</h1>
      <div class="breadcrumb">
        <ul class="list-inline">
          <li class="home"><a href="{{ URL::to('/') }}">{{trans('words.home')}}</a></li>
          <li><a href="{{ URL::to('dashboard/') }}">{{trans('words.dashboard_text')}}</a></li>
          <li>{{trans('words.add_property')}}</li>
        </ul>
      </div> -->
    </div>
  </section>
  <!--Breadcrumb Section-->
<!-- begin:content -->
    <section class="main-container container">
    <div class="descriptive-section">
      <h2 class="hsq-heading type-1">{{trans('words.add_property')}}</h2>
 
         @if(Session::has('success'))
                  <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                      {{ Session::get('success') }}
                  </div>
        @endif
 
    </div>
    <div class="submit-main-box clearfix">
         {!! Form::open(array('url' => 'submit-property','class'=>'','id'=>'submit-property-main-form','role'=>'form','enctype' => 'multipart/form-data')) !!}


        <div class="row t-sec">
          <div class="col-md-6 l-sec">
            <div class="information-box">
              <h3>{{trans('words.basic_details')}}</h3>


              <div class="box-content">
<div class="field-row">
                  <input type="text" placeholder="Product Code" name="product_code" id="product_code" >
                  @if ($errors->has('product_code'))
                    <span style="color:#fb0303">
                        {{ $errors->first('product_code') }}
                    </span>
                 @endif
                 </div>

                <div class="field-row">
                  <input type="text" placeholder="{{trans('words.property_name')}}" name="property_name" id="p-title" value="{{ old('property_name') }}">
                  @if ($errors->has('property_name'))
                    <span style="color:#fb0303">
                        {{ $errors->first('property_name') }}
                    </span>
                 @endif
                 </div>
                <div class="field-row clearfix">
                  <div class="col-xs-6">
                    <select id="p-status" name="property_purpose">
                      <option value="">{{trans('words.property_purpose')}}</option>
                      <option value="{{trans('words.purpose_sale')}}" @if(old('property_purpose')==trans('words.purpose_sale')) selected @endif>{{trans('words.for_sale')}}</option>
                      {{--<option value="{{trans('words.purpose_rent')}}" @if(old('property_purpose')==trans('words.purpose_rent')) selected @endif>{{trans('words.for_rent')}}</option>--}}
                    </select>
                    @if ($errors->has('property_purpose'))
                    <span style="color:#fb0303">
                        {{ $errors->first('property_purpose') }}
                    </span>
                 @endif
                  </div>
                  <div class="col-xs-6">
                    <select id="p-type" name="property_type">
                      <option value="">{{trans('words.property_type')}}</option>
                      @foreach($types as $type)  
                        <option value="{{$type->id}}" @if(old('property_type')==$type->id) selected @endif>{{$type->types}}</option>
                       @endforeach
                    </select>
                    @if ($errors->has('property_type'))
                    <span style="color:#fb0303">
                        {{ $errors->first('property_type') }}
                    </span>
                 @endif
                  </div>
                </div>

                <div class="field-row clearfix">
                  <div class="col-xs-6">
                    <div class="input-group l-icon">
                      <span class="input-group-addon">৳</span>
                      <input type="text" name="price" class="form-control number-field" id="p-price"
                           placeholder="{{'Total Price'}}" value="{{ old('price') }}">  
                    </div>
                      @if ($errors->has('price'))
                      <span style="color:#fb0303">
                          {{ $errors->first('price') }}
                      </span>
                      @endif
                  </div>

                  <div class="col-xs-6">
                    <div class="input-group l-icon">
                      <span class="input-group-addon">৳</span>
                      <input type="text" name="rate_per_sft" class="form-control number-field" id="p-price"
                           placeholder="{{trans('words.rate_per_sft')}}" value="{{ old('rate_per_sft') }}">  
                    </div>
                      @if ($errors->has('rate_per_sft'))
                      <span style="color:#fb0303">
                          {{ $errors->first('rate_per_sft') }}
                      </span>
                      @endif
                  </div>

                </div> <!--/.field-row-->

                <div class="field-row clearfix">

                    <div class="col-xs-6">
                      <select id="p-bedroom" name="floor">
                        <option value="">{{trans('words.floor')}}</option>
                        <option value="1st" @if(old('floor')=='1st') selected @endif>1st</option>
                        <option value="2nd" @if(old('floor')=='2nd') selected @endif>2nd</option>
                        <option value="3rd" @if(old('floor')=='3rd') selected @endif>3rd</option>
                        <option value="4th" @if(old('floor')=='4th') selected @endif>4th</option>
                        <option value="5th" @if(old('floor')=='5th') selected @endif>5th</option>
                        <option value="6th" @if(old('floor')=='6th') selected @endif>6th</option>
                        <option value="7th" @if(old('floor')=='7th') selected @endif>7th</option>
                        <option value="8th" @if(old('floor')=='8th') selected @endif>8th</option>
                        <option value="9th" @if(old('floor')=='9th') selected @endif>9th</option>
                        <option value="10th" @if(old('floor')=='10th') selected @endif>10th</option>
                        <option value="11th" @if(old('floor')=='11th') selected @endif>11th</option>
                        <option value="12th" @if(old('floor')=='12th') selected @endif>12th</option>
                        <option value="13th" @if(old('floor')=='13th') selected @endif>13th</option>
                        <option value="14th" @if(old('floor')=='14th') selected @endif>14th</option>
                        <option value="15th" @if(old('floor')=='15th') selected @endif>15th</option>
                        <option value="16th" @if(old('floor')=='16th') selected @endif>16th</option>
                        <option value="17th" @if(old('floor')=='17th') selected @endif>17th</option>
                        <option value="18th" @if(old('floor')=='18th') selected @endif>18th</option>
                        <option value="19th" @if(old('floor')=='19th') selected @endif>19th</option>
                        <option value="20th" @if(old('floor')=='20th') selected @endif>20th</option>
                        <option value="21th" @if(old('floor')=='21th') selected @endif>21th</option>
                        <option value="22th" @if(old('floor')=='22th') selected @endif>22th</option>
                      </select>
                    </div>

                    <div class="col-xs-6">
                      <select id="p-unit" name="unit">
                        <option value="">{{trans('words.unit')}}</option>
                        <option value="A" @if(old('unit')=='A') selected @endif>A</option>
                        <option value="B" @if(old('unit')=='B') selected @endif>B</option>
                        <option value="C" @if(old('unit')=='C') selected @endif>C</option>
                        <option value="D" @if(old('unit')=='D') selected @endif>D</option>
                        <option value="E" @if(old('unit')=='E') selected @endif>E</option>
                      </select>
                    </div>

                </div> <!--/.field-row-->


                <div class="field-row clearfix">
                    <div class="col-xs-6">
                      <select id="p-loan_facility" name="loan_facility">
                        <option value="">{{trans('words.loan_facility')}}</option>
                        <option value="Available" @if(old('loan_facility')=='Available') selected @endif>Available</option>
                        <option value="NA" @if(old('loan_facility')=='NA') selected @endif>NA</option>
                      </select>
                    </div>

                  <div class="col-xs-6">
                      <select id="p-bedroom" name="bedrooms">
                        <option value="">{{trans('words.bedroom')}}</option>
                        <option value="1" @if(old('bedrooms')=='1') selected @endif>1</option>
                        <option value="2" @if(old('bedrooms')=='2') selected @endif>2</option>
                        <option value="3" @if(old('bedrooms')=='3') selected @endif>3</option>
                        <option value="4" @if(old('bedrooms')=='4') selected @endif>4</option>
                        <option value="5" @if(old('bedrooms')=='5') selected @endif>5</option>
                        <option value="+5" @if(old('bedrooms')=='+5') selected @endif>+5</option>
                      </select>
                    </div>
                </div> <!--/.field-row-->

                <div class="field-row clearfix">
                  <div class="col-xs-6">
                    <select id="bathroom" name="bathrooms">
                      <option value="">{{trans('words.bathroom')}}</option>
                      <option value="1" @if(old('bathrooms')=='1') selected @endif>1</option>
                      <option value="2" @if(old('bathrooms')=='2') selected @endif>2</option>
                      <option value="3" @if(old('bathrooms')=='3') selected @endif>3</option>
                      <option value="4" @if(old('bathrooms')=='4') selected @endif>4</option>
                      <option value="5" @if(old('bathrooms')=='5') selected @endif>5</option>
                      <option value="+5" @if(old('bathrooms')=='+5') selected @endif>+5</option>
                    </select>
                  </div>

                  <div class="col-xs-6">
                    <select id="garage" name="garage">
                      <option value="">{{trans('words.garages')}}</option>
                      <option value="1" @if(old('garage')=='1') selected @endif>1</option>
                      <option value="2" @if(old('garage')=='2') selected @endif>2</option>
                      <option value="3" @if(old('garage')=='3') selected @endif>3</option>
                      <option value="4" @if(old('garage')=='4') selected @endif>4</option>
                      <option value="5" @if(old('garage')=='5') selected @endif>5</option>
                      <option value="+5" @if(old('garage')=='+5') selected @endif>+5</option>
                    </select>
                  </div>

                </div>

                <div class="field-row clearfix">
                  <div class="col-xs-6">
                    <select id="balcony" name="balcony">
                      <option value="">{{trans('words.balcony')}}</option>
                      <option value="1" @if(old('balcony')=='1') selected @endif>1</option>
                      <option value="2" @if(old('balcony')=='2') selected @endif>2</option>
                      <option value="3" @if(old('balcony')=='3') selected @endif>3</option>
                      <option value="4" @if(old('balcony')=='4') selected @endif>4</option>
                      <option value="5" @if(old('balcony')=='5') selected @endif>5</option>
                      <option value="+5" @if(old('balcony')=='+5') selected @endif>+5</option>
                    </select>
                  </div>

                  <div class="col-xs-6">
                    <select id="facing" name="facing">
                      <option value="">{{trans('words.facing')}}</option>
                      <option value="East" @if(old('facing')=='East') selected @endif>East</option>
                      <option value="West" @if(old('facing')=='West') selected @endif>West</option>
                      <option value="North" @if(old('facing')=='North') selected @endif>North</option>
                      <option value="South" @if(old('facing')=='South') selected @endif>South</option>
                      <option value="North-East" @if(old('facing')=='North-East') selected @endif>North-East</option>
                      <option value="North-West" @if(old('facing')=='North-West') selected @endif>North-West</option>
                      <option value="South-East" @if(old('facing')=='South-East') selected @endif>South-East</option>
                      <option value="South-West" @if(old('facing')=='South-West') selected @endif>South-West</option>
                    </select>
                  </div>

                </div>

                <div class="field-row clearfix">
                  <div class="col-xs-6">
                    <div class="input-group r-icon">
                      <input type="text" name="land_area" class="form-control number-field" id="p-land"
                           placeholder="{{trans('words.land_area')}}" value="{{ old('land_area') }}">
                      <span class="input-group-addon">{{trans('words.land_unit')}}</span>
                    </div>
                  </div>

                  <div class="col-xs-6">
                    <div class="input-group r-icon">
                      <input type="text" name="build_area" class="form-control number-field" id="p-build"
                           placeholder="{{trans('words.build_area')}}" value="{{ old('build_area') }}">
                      <span class="input-group-addon">{{trans('words.build_unit')}}</span>
                    </div>
                  </div>
                </div> 

                <div class="field-row clearfix">
                  <div class="col-xs-6">
                    <select id="no_of_floor" name="no_of_floor">
                      <option value="">{{trans('words.no_of_floor')}}</option>
                      <option value="G+1" @if(old('no_of_floor')=='G+1') selected @endif>G+1</option>
                      <option value="G+2" @if(old('no_of_floor')=='G+2') selected @endif>G+2</option>
                      <option value="G+3" @if(old('no_of_floor')=='G+3') selected @endif>G+3</option>
                      <option value="G+4" @if(old('no_of_floor')=='G+4') selected @endif>G+4</option>
                      <option value="G+5" @if(old('no_of_floor')=='G+5') selected @endif>G+5</option>
                      <option value="G+6" @if(old('no_of_floor')=='G+6') selected @endif>G+6</option>
                      <option value="G+7" @if(old('no_of_floor')=='G+7') selected @endif>G+7</option>
                      <option value="G+8" @if(old('no_of_floor')=='G+8') selected @endif>G+8</option>
                      <option value="G+9" @if(old('no_of_floor')=='G+9') selected @endif>G+9</option>
                      <option value="G+10" @if(old('no_of_floor')=='G+10') selected @endif>G+10</option>
                      <option value="G+11" @if(old('no_of_floor')=='G+11') selected @endif>G+11</option>
                      <option value="G+12" @if(old('no_of_floor')=='G+12') selected @endif>G+12</option>
                      <option value="G+13" @if(old('no_of_floor')=='G+13') selected @endif>G+13</option>
                      <option value="G+14" @if(old('no_of_floor')=='G+14') selected @endif>G+14</option>
                      <option value="G+15" @if(old('no_of_floor')=='G+15') selected @endif>G+15</option>
                      <option value="G+16" @if(old('no_of_floor')=='G+16') selected @endif>G+16</option>
                      <option value="G+17" @if(old('no_of_floor')=='G+17') selected @endif>G+17</option>
                      <option value="G+18" @if(old('no_of_floor')=='G+18') selected @endif>G+18</option>
                      <option value="G+19" @if(old('no_of_floor')=='G+19') selected @endif>G+19</option>
                      <option value="G+20" @if(old('no_of_floor')=='G+20') selected @endif>G+20</option>
                      <option value="G+21" @if(old('no_of_floor')=='G+21') selected @endif>G+21</option>
                      <option value="G+22" @if(old('no_of_floor')=='G+22') selected @endif>G+22</option>
                    </select>
                  </div>

                  <div class="col-xs-6">
                    <div class="input-group r-icon">
                      <input type="text" name="available_floor" class="form-control" 
                           placeholder="{{trans('words.available_floor')}}" value="{{ old('available_floor') }}">
                      
                    </div>
                  </div>
                </div> 


              </div>
            </div>

            <div class="information-box">
                <h3>{{trans('words.description')}}</h3>
                <div class="box-content">
                    <div class="field-row">
                      <textarea name="description" id="p-desc" placeholder="{{trans('words.description')}}">{{ old('description') }}</textarea>
                      @if ($errors->has('description'))
                        <span style="color:#fb0303">
                            {{ $errors->first('description') }}
                        </span>
                     @endif
                     <script>CKEDITOR.replace( 'p-desc' );</script>
                    </div>
                </div>  
            </div> 

          </div>

        <div class="col-md-6 r-sec">
          <div class="information-box">
            <h3>{{trans('words.location')}}</h3>

            <div class="box-content">

              <div class="field-row">
                <input type="text" placeholder="{{trans('words.address')}}" name="address" id="address" value="{{ old('address') }}">
                @if ($errors->has('address'))
                    <span style="color:#fb0303">
                        {{ $errors->first('address') }}
                    </span>
                 @endif
              </div>

              <div class="field-row">
                <input type="text" placeholder="{{trans('words.po')}}" name="po" id="po" value="{{ old('po') }}">
                @if ($errors->has('po'))
                    <span style="color:#fb0303">
                        {{ $errors->first('po') }}
                    </span>
                 @endif
              </div>

              <div class="field-row">

                 <div class="form-group mult-select-opt">
                    <select id="example-getting-started" name="location">
                      @php $allUpazila=\App\Upazila::orderBy('id','asc')->get(); @endphp
                      @foreach($allUpazila as $upazila)
                          <option value="{{$upazila->id}}">{{$upazila->name}}</option>
                      @endforeach  
                    </select>
                    @if ($errors->has('location'))
                    <span style="color:#fb0303">
                        {{ $errors->first('location') }}
                    </span>
                   @endif

                  </div>

                <!-- <input type="text" placeholder="{{trans('words.location')}}" name="location" id="location" value="{{ old('location') }}">
                @if ($errors->has('location'))
                    <span style="color:#fb0303">
                        {{ $errors->first('location') }}
                    </span>
                 @endif -->
              </div>


              {{--<div class="field-row">
                <input type="text" placeholder="{{trans('words.find_lat_long')}}" name="lag_long_address" id="p-address" value="" onkeydown="if (event.keyCode == 13) return false;">                
              </div>

              <div class="field-row">
                <div id="p-map"></div>
              </div>

              <div class="field-row clearfix">
                <div class="col-xs-6">
                  <input type="text" name="map_longitude" placeholder="{{trans('words.longitude')}}" id="p-long" value="{{ old('map_longitude') }}" readonly>
                </div>
                <div class="col-xs-6">
                  <input type="text" name="map_latitude" placeholder="{{trans('words.latitude')}}" id="p-lat" value="{{ old('map_latitude') }}" readonly>
                </div>
              </div>--}}

            </div>
          </div>           
          <div class="information-box">
            <h3>{{ trans('words.video_presentation') }} </h3>

            <div class="box-content">
              <div class="field-row">
                <textarea id="p-video" name="video_code" placeholder="{{ old('past_embed_code') }}">{{ old('video_code') }}</textarea>
              </div>
            </div>
          </div>
          <div class="information-box">
              <h3>{{ trans('words.floor_plan') }}</h3>
                <div class="box-content">
                   
                    <input type="file" name="floor_plan" id="floor_plan" style="color: green;padding: 5px;border: 1px dashed #123456;background-color: #f9ffe5;" />
                   
                </div>    
          </div>
          <div class="information-box">
              <h3>{{ trans('words.featured_image') }}</h3>
                <div class="box-content">
                   
                    <input type="file" name="featured_image" id="featured_image" style="color: green;padding: 5px;border: 1px dashed #123456;background-color: #f9ffe5;"/><br/>
                   @if ($errors->has('featured_image'))
                    <span style="color:#fb0303">
                        {{ $errors->first('featured_image') }}
                    </span>
                 @endif
                </div>    
            </div>

            <link rel="stylesheet" href="{{ URL::asset('site_assets/css/gallery_style.css') }}">
            <div class="information-box">
               <h3>{{ trans('words.gallery') }}</h3>
                <div id="formdiv"> 
                  <div id="filediv"></div>
                  <div style="margin-top:5px;">
                    <input name="gallery_file[]" type="file" id="file"/>
                   <input type="button" id="add_more" class="upload" value="{{trans('words.add_more_images')}}"/>
                  </div>
               </div>
            </div>

        </div>
      </div>

        <div class="information-box">
          <h3>{{trans('words.amenities')}}</h3>
                
          <div class="box-content row">

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_servent_bed" value="Servant Bed" class="form-check-input" id="amenities_servent_bed">
                  <label class="form-check-label" for="amenities_servent_bed">{{trans('words.amenities_servent_bed')}}</label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_servent_bath" value="Servant Bath" class="form-check-input" id="amenities_servent_bath">
                  <label class="form-check-label" for="amenities_servent_bath">{{trans('words.amenities_servent_bath')}}</label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_gym" value="Gym" class="form-check-input" id="amenities_gym">
                  <label class="form-check-label" for="amenities_gym">{{trans('words.amenities_gym')}}</label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_front_yard" value="Front yard" class="form-check-input" id="amenities_front_yard">
                  <label class="form-check-label" for="amenities_front_yard">{{trans('words.amenities_front_yard')}}</label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_splash_pool" value="Splash Pool" class="form-check-input" id="amenities_splash_pool">
                  <label class="form-check-label" for="amenities_splash_pool">{{trans('words.amenities_splash_pool')}}</label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_roof_deck" value="Roof Deck" class="form-check-input" id="amenities_roof_deck">
                  <label class="form-check-label" for="amenities_roof_deck">{{trans('words.amenities_roof_deck')}}</label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_reception" value="Reception" class="form-check-input" id="amenities_reception">
                  <label class="form-check-label" for="amenities_reception">{{trans('words.amenities_reception')}}</label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_rooftop_garden" value="Rooftop Garden" class="form-check-input" id="amenities_rooftop_garden">
                  <label class="form-check-label" for="amenities_rooftop_garden">{{trans('words.amenities_rooftop_garden')}}</label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_generator" value="Generator" class="form-check-input" id="amenities_generator">
                  <label class="form-check-label" for="amenities_generator">{{trans('words.amenities_generator')}}</label>
                </div>
            </div>

         

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_substation" value="Substation" class="form-check-input" id="amenities_substation">
                  <label class="form-check-label" for="amenities_substation">{{trans('words.amenities_substation')}}</label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_lift" value="Lift" class="form-check-input" id="amenities_lift">
                  <label class="form-check-label" for="amenities_lift">{{trans('words.amenities_lift')}}</label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_kitchen_veranda" value="Kitchen Veranda" class="form-check-input" id="amenities_kitchen_veranda">
                  <label class="form-check-label" for="amenities_kitchen_veranda">{{trans('words.amenities_kitchen_veranda')}}</label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_kitchen_cabinet" value="Kichen Cabinet" class="form-check-input" id="amenities_kitchen_cabinet">
                  <label class="form-check-label" for="amenities_kitchen_cabinet">{{trans('words.amenities_kitchen_cabinet')}}</label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_corner_plot" value="Corner Plot" class="form-check-input" id="amenities_corner_plot">
                  <label class="form-check-label" for="amenities_corner_plot">{{trans('words.amenities_corner_plot')}}</label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_guest_lobby" value="Guest Lobby" class="form-check-input" id="amenities_guest_lobby">
                  <label class="form-check-label" for="amenities_guest_lobby">{{trans('words.amenities_guest_lobby')}}</label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_cctv" value="CCTV" class="form-check-input" id="amenities_cctv">
                  <label class="form-check-label" for="amenities_cctv">{{trans('words.amenities_cctv')}}</label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_swimming_pool" value="Swimming Pool" class="form-check-input" id="amenities_swimming_pool">
                  <label class="form-check-label" for="amenities_swimming_pool">{{trans('words.amenities_swimming_pool')}}</label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_guest_parking" value="Guest Parking" class="form-check-input" id="amenities_guest_parking">
                  <label class="form-check-label" for="amenities_guest_parking">{{trans('words.amenities_guest_parking')}}</label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_laundry_room" value="Laundry Room" class="form-check-input" id="amenities_laundry_room">
                  <label class="form-check-label" for="amenities_laundry_room">{{trans('words.amenities_laundry_room')}}</label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_bbq" value="BBQ" class="form-check-input" id="amenities_bbq">
                  <label class="form-check-label" for="amenities_bbq">{{trans('words.amenities_bbq')}}</label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_terrace" value="Terrace" class="form-check-input" id="amenities_terrace">
                  <label class="form-check-label" for="amenities_terrace">{{trans('words.amenities_terrace')}}</label>
                </div>
            </div>

            <div class="field-row col-md-4">
                 <div class="form-check amenities-check">
                  <input type="checkbox" name="amenities_sauna" value="Sauna" class="form-check-input" id="amenities_sauna">
                  <label class="form-check-label" for="amenities_sauna">{{trans('words.amenities_sauna')}}</label>
                </div>
            </div>

          </div>  
        </div>


        <div class="row">
          <div class="information-box">
            <h3>{{trans('words.nearest_palces')}}</h3>
              
              <div class="box-content row">

                 <div class="field-row col-md-4">
                      <h4>{{trans('words.school')}}</h4>
                      <input type="text" name="nearest_school_km" value="{{ old('nearest_school_km') }}" placeholder="0.5 KM">
                  </div>
                  
                  <div class="field-row col-md-4">
                      <h4>{{trans('words.hospital')}}</h4>
                      <input type="text" name="nearest_hospital_km" value="{{ old('nearest_hospital_km') }}" placeholder="1 KM">
                  </div>

                  <div class="field-row col-md-4">
                      <h4>{{trans('words.mall')}}</h4>
                      <input type="text" name="nearest_mall_km" value="{{ old('nearest_mall_km') }}" placeholder="1.5 KM">
                  </div>

                  <div class="field-row col-md-4">
                      <h4>{{trans('words.bus_station')}}</h4>
                        <input type="text" name="nearest_bus_stand_km" value="{{ old('nearest_bus_stand_km') }}" placeholder="1.3 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4>{{trans('words.airport')}}</h4>
                    <input type="text" name="nearest_airport_km" value="{{ old('nearest_airport_km') }}" placeholder="3 KM">
                  </div>                    
                  
                  <div class="field-row col-md-4">
                    <h4>{{trans('words.railway')}}</h4>
                      <input type="text" name="nearest_railway_km" value="{{ old('nearest_railway_km') }}" placeholder="2.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4>{{trans('words.nearest_park_km')}}</h4>
                      <input type="text" name="nearest_park_km" value="{{ old('nearest_park_km') }}" placeholder="3.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4>{{trans('words.nearest_mosque_km')}}</h4>
                      <input type="text" name="nearest_mosque_km" value="{{ old('nearest_mosque_km') }}" placeholder="1.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4>{{trans('words.nearest_playground_km')}}</h4>
                      <input type="text" name="nearest_playground_km" value="{{ old('nearest_playground_km') }}" placeholder="1.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4>{{trans('words.nearest_departmental_store_km')}}</h4>
                      <input type="text" name="nearest_departmental_store_km" value="{{ old('nearest_departmental_store_km') }}" placeholder="0.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4>{{trans('words.nearest_restaurant_km')}}</h4>
                      <input type="text" name="nearest_restaurant_km" value="{{ old('nearest_restaurant_km') }}" placeholder="1.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4>{{trans('words.nearest_fire_service_km')}}</h4>
                      <input type="text" name="nearest_fire_service_km" value="{{ old('nearest_fire_service_km') }}" placeholder="1.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4>{{trans('words.nearest_fire_service_km')}}</h4>
                      <input type="text" name="nearest_police_station_km" value="{{ old('nearest_police_station_km') }}" placeholder="2.1 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4>{{trans('words.nearest_pharmacy_km')}}</h4>
                      <input type="text" name="nearest_pharmacy_km" value="{{ old('nearest_pharmacy_km') }}" placeholder="2.5 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4>{{trans('words.nearest_grocery_bazar_km')}}</h4>
                      <input type="text" name="nearest_grocery_bazar_km" value="{{ old('nearest_grocery_bazar_km') }}" placeholder="1.5 KM">
                  </div>

                  <div class="field-row col-md-4">
                    <h4>{{trans('words.nearest_govt_office_km')}}</h4>
                      <input type="text" name="nearest_govt_office_km" value="{{ old('nearest_govt_office_km') }}" placeholder="2.5 KM">
                  </div>


                  
              </div>  

          </div>
        </div>

       <div class="b-sec" align="center"><br>
          <button type="submit" class="btn btn-lg submit">{{'SUBMIT NOW'}}</button>
        </div>
        
      {!! Form::close() !!}
    </div>
  </section>
    <!-- end:content -->
 
@endsection

@section('styles')
      <style>
        button.multiselect.dropdown-toggle.btn.btn-default {
            min-width: 495px;
            height: 45px;
            border: 2px solid #ddd;
        }
        li.multiselect-item.multiselect-filter .input-group .input-group-addon,
        input.form-control.multiselect-search {
            height: 30px !important;
        }
        body.submit-property .information-box .box-content .field-row .input-group .input-group-addon {
            font-size: 1.2em;
        }
      </style>          
    <link href="{{ URL::asset('site_assets/alert-toastr/toastr.css') }} " rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('site_assets/dist-select/css/bootstrap-multiselect.css') }}" type="text/css"/>
  @stop

  @section('scripts')

    <script src="{{ URL::asset('site_assets/alert-toastr/toastr.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('site_assets/dist-select/js/bootstrap-multiselect.js')}}"></script>

    <script type="text/javascript">
    //Dropdown selection
    $(document).ready(function() {
        $('#example-getting-started').multiselect({
            nonSelectedText: 'Location',
            enableFiltering: true,
            //includeSelectAllOption: true,
            maxHeight: 300,
            dropUp: true
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
@stop

