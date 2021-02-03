@extends("app")

@section('head_title', trans('words.plan_summary').' | '.getcong('site_name') )
@section('head_url', Request::url())

@section("content")

<style type="text/css">
  
.payment {
  border: 2px solid #f2f2f2;
  border-radius: 4px;
  overflow: hidden;
  padding: 20px;
}
.payment-tab {
  background: #f9f9f9;
  border-radius: 4px;
  margin-bottom: 10px;
  box-sizing: border-box;
  padding: 10px 20px;
  overflow: hidden;
  position: relative;
  transition: all .3s 0s ease-in-out;
  width: 100%;
} 

</style>

<!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="@if(getcong('title_bg')) {{ URL::asset('upload/'.getcong('title_bg')) }} @else {{ URL::asset('site_assets/img/breadcrumb-bg.jpg') }} @endif">
    <div class="inner-container container">
      <h1>{{trans('words.plan_summary')}}</h1>
      <div class="breadcrumb">
        <ul class="list-inline">
          <li class="home"><a href="{{ URL::to('/') }}">{{trans('words.home')}}</a></li>
          <li><a href="#">{{trans('words.plan_summary')}}</a></li>
        </ul>
      </div>
    </div>
  </section>
  <!--Breadcrumb Section-->
 <div class="container">
  <div class="min_profile">
  <div class="row">
    @include("_particles.sidebar_user")

    <div class="col-lg-9 col-md-9 min_form">
      @if(Session::has('flash_message'))
                  <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                      {{ Session::get('flash_message') }}
                  </div>
      @endif
      <div class="table-responsive properties_min">
        
        @if(Session::get('payment_method_name')=='stripe')
          {!! Form::open(array('url' => Session::get('payment_method_name'),'class'=>'','id'=>'myProfile','role'=>'form','method'=>'GET')) !!} 
        @else
          {!! Form::open(array('url' => Session::get('payment_method_name'),'class'=>'','id'=>'myProfile','role'=>'form','method'=>'POST')) !!} 
        @endif
         
                <div class="parbase section order-summary">
 
              <label class="h4 section-label text-uppercase black-border text-bold">{{trans('words.plan_summary_for')}} <span style="color: #0aa216;">{{Session::get('payment_property_name')}}</span></label>
 
            <div id="orderSummary" class="content order-summary-core"><!-- Items subtotal-->
              <div class="payment">
                  <div class="payment-tab">
                    <div class="order-summary-item subtotal">
                      <span class="order-summary-item-label text-bold" style="font-weight: 700;">{{Session::get('plan_name')}}</span>
                      <span class="order-summary-item-value">{!!getcong('currency_sign')!!}{{Session::get('plan_price')}}</span>
                    </div>
                 </div>
                 <div class="payment-tab">
                    <div id="shippingCost" class="order-summary-item shipping-cost">
                    <span class="order-summary-item-label text-bold" style="font-weight: 700;">{{trans('words.tax')}} ({{getcong('tax_percentage')}}%)</span>         
                      <span class="order-summary-item-value">{!!getcong('currency_sign')!!}{{number_format($tax_amount,2)}}</span>
                  </div>
                </div>
                <div class="payment-tab">
                  <div class="order-summary-item estimated-total">
                    <span class="order-summary-item-label text-bold" style="font-weight: 700;">{{trans('words.estimated_total')}}</span>

                      <span class="order-summary-item-value text-right price">{!!getcong('currency_sign')!!}{{number_format($total_price,2)}}</span>
                      <div id="taxDisclaimer" class="order-summary-item tax-cost">
                        <span class="order-summary-item-label">{{trans('words.price_inclusive_tax')}}</span>
                      </div>
                  </div>
                </div>
                <div class="payment-tab">
                    <div id="shippingCost" class="order-summary-item shipping-cost">
                      <span class="order-summary-item-label text-bold" style="font-weight: 700;">{{trans('words.payment_method')}}</span>         
                      @if(Session::get('payment_method_name')=='paypal')
                      <span class="order-summary-item-value"><img class="payment-logo paypal" src="{{ URL::asset('upload/paypal-logo.png')}}" alt="" width="60"></span>

                      <div class="payment-tab-content">
                              <p>{{trans('words.you_will_be_redirected')}}</p>
                      </div>

                      @endif
                      @if(Session::get('payment_method_name')=='stripe')
                      <span class="order-summary-item-value"><img class="payment-logo paypal" src="{{ URL::asset('upload/stripe-logo.png')}}" alt="" width="60"></span>
                      @endif
                  </div>
                  
                </div>  
              </div>

            <!-- Shipping costs, either free or not -->
           

              <!-- Estimated total line -->
              
 
            <div class="clearfix"></div>
            </div>

 
 
               <div class="form-group col-md-12">
                <div class="center mb20" align="center">
                    <button class="btn btn-primary btn-xl" type="submit">{{trans('words.pay_now')}}</button>
                </div>
              </div>  
               

            {!! Form::close() !!} 

      </div>
        
        
    
    </div><!-- end col -->
  </div>
  </div>
  
  </div>
</div>

  @endsection