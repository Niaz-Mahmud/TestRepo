<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Properties;
use App\PropertyGallery;
use App\Enquire;
use App\Interest;
use App\Types;
use Session;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str; 

class PropertiesController extends Controller
{
	public function __construct()
    {
         check_property_exp(); 
    } 
     
    public function index()
    {  
    	$properties = Properties::where('status','1')->orderBy('id', 'desc')->paginate(getcong('pagination_limit')); 
    	
        if(getcong('all_properties_layout')=='grid_side')
        {
            return view('pages.properties_grid_sidebar',compact('properties'));
        } 	
        else
        {
            return view('pages.properties_grid',compact('properties'));
        }		    
        
    }
    
    public function featuredproperties()
    {  
    	$properties = Properties::where(['status'=>'1','featured_property'=>'1'])->orderBy('id', 'desc')->paginate(getcong('pagination_limit'));
    	
        if(getcong('featured_properties_layout')=='grid_side')
        {
            return view('pages.featured_properties_grid_sidebar',compact('properties'));
        }   
        else
        {
           return view('pages.featured_properties_grid',compact('properties'));
        }
    }
    
    public function saleproperties()
    {  
    	$properties = Properties::where(['status'=>'1','property_purpose'=>'Sale'])->orderBy('id', 'desc')->paginate(getcong('pagination_limit'));
    	
        if(getcong('sale_properties_layout')=='grid_side')
        {
            return view('pages.sale_properties_grid_sidebar',compact('properties'));
        }   
        else
        {
           return view('pages.sale_properties_grid',compact('properties'));
        }
         
    }
    
    public function rentproperties()
    {  
    	$properties = Properties::where(['status'=>'1','property_purpose'=>'Rent'])->orderBy('id', 'desc')->paginate(getcong('pagination_limit'));
    	
        if(getcong('rent_properties_layout')=='grid_side')
        {
            return view('pages.rent_properties_grid_sidebar',compact('properties'));
        }   
        else
        {
           return view('pages.rent_properties_grid',compact('properties'));
        }
         			    
        return view('pages.rentproperties',compact('properties'));
    }
    
      
    public function propertiesbytype($slug)
    {  
        
    
        $type_data=Types::where('slug',$slug)->first();
           

        $properties = Properties::where(['status'=>'1','property_type'=>$type_data->id])->orderBy('id', 'desc')->paginate(getcong('pagination_limit'));
      
    	
    	if(!$properties){
            abort('404');
        }
    	
    	$type=$type_data->types;			    
        return view('pages.propertiesbytype',compact('properties','type'));
    }

    public function propertyby($slug)
    {  

    	if($slug == 'premium-collection'){
            $count=15000000;
            $properties = Properties::where('status','1')->where('search_price','>=', $count)->orderBy('id', 'desc')->paginate(getcong('pagination_limit')); 
    
        }elseif ($slug == 'standard-collection') {
            $lesscore=10000000;
             $properties = Properties::where('status','1')->where('search_price','<=', $lesscore)->orderBy('id', 'desc')->paginate(getcong('pagination_limit')); 
        }
        
        else {
            abort('404');
        }
            
        return view('pages.propertybycount',compact('properties'));
    }
    
    

    
    public function map_property_urlset($id)
    {   
        $property = Properties::findOrFail($id);
         return redirect('properties/'.$property->property_slug.'/'.$property->id);
    }

    public function single_properties($slug,$id)
    {  
        //$decrypted_id = Crypt::decryptString($id);   
        $property = Properties::findOrFail($id);	
    	if(!$property){
            abort('404');
        }
    	$agent = User::findOrFail($property->user_id);
        $property_gallery_images= PropertyGallery::where('property_id',$property->id)->get();		    
        return view('pages.single_properties',compact('property','agent','property_gallery_images'));
    }
    

    public function agentscontact(Request $request){	
        
    	$data =  \Request::except(array('_token')) ;  
    
	    $rule=array(
		        'name' => 'required',
                'phone' => 'required|digits:11|numeric|unique:enquire',
                'email' => 'required|email|unique:enquire',
		        //'message' => 'required' 
		   	);
	    
	   	 $validator = \Validator::make($data,$rule);
 
        if ($validator->fails()) {       
             Session::flash('error', 'Oops! Something Went Wrong.');    
             return redirect()->back()->withErrors($validator->messages());
        } 

      
    	$enquire = new Enquire;
    	$enquire->property_id = $request->get('property_id');
    	$enquire->name = $request->get('name');
    	$enquire->email = $request->get('email');
        $enquire->phone = $request->get('phone');
        $enquire->property_size_form = $request->get('property_size_form');
        $enquire->property_size_to = $request->get('property_size_to');
        $enquire->property_location = implode(',',$request->property_location);
        $enquire->property_status = $request->get('property_status');
        $enquire->message = $request->get('message');
        $enquire->enquiry_property = $request->get('enquiry_property');
        $enquire->lead_source = $request->get('lead_source');

       //dd($enquire);
	    $enquire->save();
	    
	    Session::flash('success', 'Message send successfully');
        return redirect('/#top-footer');
        //return redirect()->back();
    }

    // interest |imran  

    public function agentinterest(Request $request){
        if(!Auth::check())
        {
          Session::flash('warning', 'You Must Login First');
           return redirect('login');
        }   
        if(Auth::user()->usertype=='User' && Auth::user()->usertype=='Admin'){
           Session::flash('warning', 'You Do Not Have Permission!');
        }

        

        else{
            $property_id = $request->get('property_id');
            $PropertyRequest = Interest::where('agent_id', Auth::user()->id)->where('property_id', $property_id)->where('status', 0)->first();  
            if($PropertyRequest){
                Session::flash('error', 'Your Request Already Submitted.');
                return \Redirect::back();
            }

            $PropertyCount = Interest::where('property_id', $property_id)->where('status', 1)->count();  
            if($PropertyCount > 5){
                Session::flash('error', 'This Property Already Booked Limited.');
                return \Redirect::back();
            }


            $AgentCount = Interest::where('agent_id', Auth::user()->id)->where('status', 1)->count();
            if($AgentCount > 10){
                Session::flash('error', 'You Request Already limited.');
                return \Redirect::back();
            }
            
            $data =  \Request::except(array('_token')) ;
            $inputs = $request->all();
      
            $rule=array(
               'property_name' => 'required',
               'property_id' => 'required',
            );
            $validator = \Validator::make($data,$rule);

            if ($validator->fails())
            {       
                Session::flash('info', 'property name and id field are required');    
                return redirect()->back()->withErrors($validator->messages());
            } 
            $query = new Interest;
            $query->property_id = $inputs['property_id'];
            $query->property_name = $inputs['property_name'];  
            $query->agent_id = Auth::user()->id;
            $query->agent_name = Auth::user()->name;
            $query->agent_phone = Auth::user()->phone;
            $query->save();
            Session::flash('success', 'Confirmation Send Successfully. Our team will contact you as soon as possible.');
            return \Redirect::back();
       }   
    }

    /////////////////////////////////////// UPDATE ROUTE START///////////////////////////////////////////////
    public function searchproperties(Request $request)
    {
        // dd($request->all());

        $location = $request->get('location');
        $proeprty_type = $request->get('proeprty_type');
        $bedrooms = $request->get('beds');
        $min_size = $request->get('get_min_data_value');
        $max_size = $request->get('get_max_data_value');
        $min_price = $request->get('get_min_price_value');
        $max_price = $request->get('get_max_price_value');
        
        
        if(!empty($max_size)){
            if($min_size==null){
                $min_size = 1;
            }
            

            if($max_size=='any'){
                $max_size = 99999999999999999;
            }
        }

         
        if(!empty($max_price)){
             
            if($min_price==null){
                $min_price = 1;
            }
            if($max_price=='any'){
                $max_price = 99999999999999999;
            }
        }
       // dd($min_price);
        // dd($max_size);
        // dd($min_size);
        
        // ONE PART START
        //location
        if( !empty($location) && empty($proeprty_type) && empty($bedrooms) && empty($min_size) && empty($max_size) && empty($min_price) && empty($max_price))
        {
            return redirect()->route('search.location', ['location'=>$location]);
        }
        // Proeprty Type
        if( !empty($proeprty_type) && empty($location) && empty($bedrooms) && empty($min_size) && empty($max_size) && empty($min_price) && empty($max_price))
        {
            //dd('proeprty_type');
            return redirect()->route('search.proeprty_type', ['proeprty_type'=>$proeprty_type]);
        }
        // Bed Rooms
        if( !empty($bedrooms) && empty($location) && empty($proeprty_type) && empty($min_size) && empty($max_size) && empty($min_price) && empty($max_price))
        {
            // dd('bedrooms');
            return redirect()->route('search.bedrooms', ['bedrooms'=>$bedrooms]);
        }
        // Min_size Max_size
        if( !empty($min_size) && !empty($max_size) && empty($location) && empty($proeprty_type) && empty($bedrooms) && empty($min_price) && empty($max_price))
        {
            // dd('min_size max_size');
            return redirect()->route('search.max_size_max_size', ['min_size'=>$min_size, 'max_size'=>$max_size]);
        }
        // Min_size Max_size
        if( !empty($min_price) && !empty($max_price) && empty($location) && empty($proeprty_type) && empty($bedrooms) && empty($min_size) && empty($max_size))
        {
            // dd('min_price max_price');
            return redirect()->route('search.min_price_max_price', ['min_price'=>$min_price,'max_price'=>$max_price]);
        }
        //ONE PART END

        // TWO PART START
        //location && Proeprty Type
        if( !empty($location) && !empty($proeprty_type) && empty($bedrooms) && empty($min_size) && empty($max_size) && empty($min_price) && empty($max_price))
        {
            // dd('location proeprty_type');
            return redirect()->route('search.location_proeprty_type', ['location'=>$location, 'proeprty_type'=>$proeprty_type]);
        }
        //location && Bed Rooms
        if( !empty($location) && !empty($bedrooms) && empty($proeprty_type) && empty($min_size) && empty($max_size) && empty($min_price) && empty($max_price))
        {
            //dd('location bedrooms');
            return redirect()->route('search.location_bedrooms', ['location'=>$location, 'bedrooms'=>$bedrooms]);
        }
        //location && Min_size Max_size
        if( !empty($location) && !empty($min_size) && !empty($max_size) && empty($proeprty_type) && empty($bedrooms) && empty($min_price) && empty($max_price))
        {
            // dd('location min_size max_size');
            return redirect()->route('search.location_min_size_max_size', ['location'=>$location, 'min_size'=>$min_size, 'max_size'=>$max_size]);
        }
        //location && Min_price Max_price
        if( !empty($location) && !empty($min_price) && !empty($max_price) && empty($proeprty_type) && empty($bedrooms) && empty($min_size) && empty($max_size))
        {
            // dd('location min_price max_price');
            return redirect()->route('search.location_min_price_max_price', ['location'=>$location, 'min_price'=>$min_price, 'max_price'=>$max_price]);
        }
        if( !empty($proeprty_type) && !empty($min_size) && !empty($max_size) && empty($bedrooms) && empty($location) && empty($min_price) && empty($max_price))
        {
            // dd('proeprty_type min_size max_size');
            return redirect()->route('search.proeprty_type_min_size_max_size', ['proeprty_type'=>$proeprty_type, 'min_size'=>$min_size, 'max_size'=>$max_size]);
        }
        if( !empty($proeprty_type) && !empty($min_price) && !empty($max_price) && empty($bedrooms) && empty($location) && empty($min_size) && empty($max_size))
        {
            //dd('proeprty_type min_price max_price2');
            return redirect()->route('search.proeprty_type_min_price_max_price', ['proeprty_type'=>$proeprty_type, 'min_price'=>$min_price, 'max_price'=>$max_price]);
        }
        if( !empty($bedrooms) && !empty($min_price) && !empty($max_price) && empty($proeprty_type) && empty($location) && empty($min_size) && empty($max_size))
        {
            //dd('bedrooms min_price max_price');
            return redirect()->route('search.bedrooms_min_price_max_price', ['bedrooms'=>$bedrooms, 'min_price'=>$min_price, 'max_price'=>$max_price]);
        }
        if( !empty($bedrooms) && !empty($min_size) && !empty($max_size) && empty($proeprty_type) && empty($location) && empty($min_price) && empty($max_price))
        {
            // dd('bedrooms min_size max_size');
            return redirect()->route('search.bedrooms_min_size_max_size', ['bedrooms'=>$bedrooms, 'min_size'=>$min_size, 'max_size'=>$max_size]);
        }
        // if( !empty($min_size) && !empty($max_size) && empty($min_price) && empty($max_price) && empty($proeprty_type) && empty($location) && empty($bedrooms))
        // {
        //     dd('min_size max_size');
        //     return redirect()->route('search.min_size_max_size', ['min_size'=>$min_size, 'max_size'=>$max_size]);
        // }
        if( !empty($min_size) && !empty($max_size) && !empty($min_price) && !empty($max_price) && empty($proeprty_type) && empty($location) && empty($bedrooms))
        {
            // dd('min_size max_size min_price max_price');
            return redirect()->route('search.min_size_max_size_min_price_max_price', ['min_size'=>$min_size, 'max_size'=>$max_size, 'min_price'=>$min_price, 'max_price'=>$max_price]);
        }
        // TWO PART END
        
        // THREE PART START
        //location && Min_price Max_price
        if( !empty($location) && !empty($proeprty_type) && !empty($bedrooms) && empty($min_size) && empty($max_size) && empty($min_price) && empty($max_price))
        {
           // dd('location proeprty_type bedrooms');
            return redirect()->route('search.location_proeprty_type_bedrooms', ['location'=>$location, 'proeprty_type'=>$proeprty_type, 'bedrooms'=>$bedrooms]);
        }
        if( !empty($location) && !empty($bedrooms) && !empty($min_size) && !empty($max_size) && empty($min_price) && empty($proeprty_type) && empty($max_price) )
        {
            //dd('location bedrooms min_size max_size');
            return redirect()->route('search.location_bedrooms_min_size_max_size', ['location'=>$location, 'bedrooms'=>$bedrooms, 'min_size'=>$min_size, 'max_size'=>$max_size]);
        }
        if( !empty($location) && !empty($bedrooms) && !empty($min_price) && !empty($max_price) && empty($min_size) && empty($proeprty_type) && empty($max_size) )
        {
            //dd('location bedrooms min_price max_price');
            return redirect()->route('search.location_bedrooms_min_price_max_price', ['location'=>$location, 'bedrooms'=>$bedrooms, 'min_price'=>$min_price, 'max_price'=>$max_price]);
        }
        if( !empty($location) && !empty($proeprty_type) && !empty($min_size) && !empty($max_size) && empty($bedrooms) && empty($min_price) && empty($max_price))
        {
            //dd('location proeprty_type min_size max_size');
            return redirect()->route('search.location_proeprty_type_min_size_max_size', ['location'=>$location, 'proeprty_type'=>$proeprty_type, 'min_size'=>$min_size, 'max_size'=>$max_size]);
        }
        if( !empty($location) && !empty($proeprty_type) && !empty($min_price) && !empty($max_price) && empty($bedrooms) && empty($min_size) && empty($max_size))
        {
            //dd('location proeprty_type min_price max_price');
            return redirect()->route('search.location_proeprty_type_min_price_max_price', ['location'=>$location, 'proeprty_type'=>$proeprty_type, 'min_price'=>$min_price, 'max_price'=>$max_price]);
        }
        if( !empty($proeprty_type) && !empty($bedrooms) && !empty($min_size) && !empty($max_size) && empty($location) && empty($min_price) && empty($max_price))
        {
            //dd('proeprty_type bedrooms min_size max_size');
            return redirect()->route('search.proeprty_type_bedrooms_min_size_max_size', ['proeprty_type'=>$proeprty_type, 'bedrooms'=>$bedrooms, 'min_size'=>$min_size, 'max_size'=>$max_size]);
        }
        if( !empty($proeprty_type) && !empty($bedrooms) && !empty($min_price) && !empty($max_price) && empty($location) && empty($min_size) && empty($max_size))
        {
            //dd('proeprty_type bedrooms min_price max_price');
            return redirect()->route('search.proeprty_type_bedrooms_min_price_max_price', ['proeprty_type'=>$proeprty_type, 'bedrooms'=>$bedrooms, 'min_price'=>$min_price, 'max_price'=>$max_price]);
        }
        if( !empty($location) && !empty($min_size) && !empty($max_size) && !empty($min_price) && !empty($max_price) && empty($proeprty_type) && empty($bedrooms))
        {
            //dd('location min_size max_size min_price max_price');
            return redirect()->route('search.location_min_size_min_max_size_price_max_price', ['location'=>$location, 'min_size'=>$min_size, 'max_size'=>$max_size, 'min_price'=>$min_price, 'max_price'=>$max_price]);
        }
        if( !empty($proeprty_type) && !empty($min_size) && !empty($max_size) && !empty($min_price) && !empty($max_price) && empty($location) && empty($bedrooms))
        {
            return redirect()->route('search.proeprty_type_size_min_max_size_price_max_price', ['proeprty_type'=>$proeprty_type, 'min_size'=>$min_size, 'max_size'=>$max_size, 'min_price'=>$min_price, 'max_price'=>$max_price]);
        }
        if(!empty($location) && !empty($proeprty_type) && !empty($min_size) && !empty($max_size) && !empty($min_price) && !empty($max_price) && empty($bedrooms))
        {

            return redirect()->route('search.location_proeprty_type_size_min_max_size_price_max_price', ['location'=>$location,'proeprty_type'=>$proeprty_type, 'min_size'=>$min_size, 'max_size'=>$max_size, 'min_price'=>$min_price, 'max_price'=>$max_price]);
        }
        // THREE PART END

        //All Searching
        if( !empty($location) && !empty($min_price) && !empty($max_price) && !empty($proeprty_type) && !empty($bedrooms) && !empty($min_size) && !empty($max_size))
        {
           // dd('all');
            return redirect()->route('search.all_search', ['location'=>$location, 'proeprty_type'=>$proeprty_type, 'bedrooms'=>$bedrooms, 'min_size'=>$min_size, 'max_size'=>$max_size, 'min_price'=>$min_price, 'max_price'=>$max_price]);
        }
        if( empty($location) && empty($min_price) && empty($max_price) && empty($proeprty_type) && empty($bedrooms) && empty($min_size) && empty($max_size))
        {
            Session::flash('success', 'Please missing some parameter for property.');
            return back();
        }
    }
    public function search_location($location)
    {
        $upazilas = DB::table('upazilas')->where('name', $location)->first();
        if($upazilas){
            $errors = 1;
            $properties = DB::table('properties')
                ->leftjoin('property_types','properties.property_type','=','property_types.id')
                ->select('properties.*','property_types.types')
                ->where('properties.location', $upazilas->id)
                ->where('properties.status', 1)
                ->paginate(getcong('pagination_limit')); 
            return view('search.searching_result',compact('errors','properties','location'));
        }
        $errors = 0;
        $location = "Not Found";
        return view('search.searching_result',compact('errors','location'));
        
    }
    public function search_proeprty_type($proeprty_type)
    {
        $errors = 1;
        $type = DB::table('property_types')->where('id', $proeprty_type)->first();
        $location = $type->types;
        $properties = DB::table('properties')
                ->leftjoin('property_types','properties.property_type','=','property_types.id')
                ->select('properties.*','property_types.types')
                ->where('properties.property_type', $proeprty_type)
                ->where('properties.status', 1)
                ->paginate(getcong('pagination_limit')); 
        return view('search.searching_result',compact('errors','properties','location'));
    }
    public function search_bedrooms($bedrooms)
    {
        $errors = 1;
        $location = $bedrooms.' bedrooms';
        $properties = DB::table('properties')
                ->leftjoin('property_types','properties.property_type','=','property_types.id')
                ->select('properties.*','property_types.types')
                ->where('properties.bedrooms', $bedrooms)
                ->where('properties.status', 1)
                ->paginate(getcong('pagination_limit')); 
        return view('search.searching_result',compact('errors','properties','location'));
    }
    public function search_max_size_max_size($min_size, $max_size)
    {
        $min_size = (int) $min_size;
        $max_size = (int) $max_size;
        $errors = 1;
        $location = $min_size.' to '.$max_size.' size (sft)';
        $properties = DB::table('properties')
                ->join('property_types','properties.property_type','=','property_types.id')
                ->select('properties.*','property_types.types')
                ->where('properties.status', 1)
                ->whereBetween('properties.search_build_area', [$min_size, $max_size]) 
                 
                 ->paginate(getcong('pagination_limit'));
                // ->paginate(getcong('pagination_limit'));

        
        return view('search.searching_result',compact('errors','properties','location'));

    }
     
    public function search_min_price_max_price($min_price, $max_price)
    {
        $min_price = (int) $min_price;
        $max_price = (int) $max_price;
        $errors = 1;
        $location = $min_price.' to '.$max_price.' price';
                
        $properties = DB::table('properties')
                ->join('property_types','properties.property_type','=','property_types.id')
                ->select('properties.*','property_types.types')
                ->whereBetween('properties.search_price', [$min_price, $max_price]) 
                ->where('properties.status', 1)
                ->paginate(getcong('pagination_limit'));
        return view('search.searching_result',compact('errors','properties','location'));
    }
    public function search_location_proeprty_type($locations, $proeprty_type)
    {
        $upazilas = DB::table('upazilas')->where('name', $locations)->first();
        if($upazilas){
            $errors = 1;
            $type = DB::table('property_types')->where('id', $proeprty_type)->first();
            $location = $locations.' '.$type->types;
            $properties = DB::table('properties')
                    ->leftjoin('property_types','properties.property_type','=','property_types.id')
                    ->select('properties.*','property_types.types')
                    ->where('properties.location', $upazilas->id)
                    ->where('properties.property_type', $proeprty_type)
                    ->where('properties.status', 1)
                    ->paginate(getcong('pagination_limit')); 
            return view('search.searching_result',compact('errors','properties','location'));
        }
        $errors = 0;
        $location = "Not Found";
        return view('search.searching_result',compact('errors','location'));
    }
    public function search_location_bedrooms($locations, $bedrooms)
    {
        $upazilas = DB::table('upazilas')->where('name', $locations)->first();
        if($upazilas){
            $errors = 1;
            $location = $locations.' and '.$bedrooms.' bedrooms';
            $properties = DB::table('properties')
                ->leftjoin('property_types','properties.property_type','=','property_types.id')
                ->select('properties.*','property_types.types')
                ->where('properties.location', $upazilas->id)
                ->where('properties.bedrooms', $bedrooms)
                ->where('properties.status', 1)
                ->get();
        return view('search.searching_result',compact('errors','properties','location'));
        }
        $errors = 0;
        $location = "Not Found";
        return view('search.searching_result',compact('errors','location'));
        
    }
    public function search_location_min_size_max_size($locations, $min_size, $max_size)
    {
        $min_size = (int) $min_size;
        $max_size = (int) $max_size;

        $upazilas = DB::table('upazilas')->where('name', $locations)->first();
        if($upazilas){
            $errors = 1;
            $location = $locations.' and '.$min_size.' to'. $max_size .' size (sft)';
            $properties = DB::table('properties')
                    ->leftjoin('property_types','properties.property_type','=','property_types.id')
                    ->select('properties.*','property_types.types')
                    ->where('properties.location', $upazilas->id)
                    ->whereBetween('properties.search_build_area', [$min_size, $max_size])
                    ->where('properties.status', 1)
                    ->paginate(getcong('pagination_limit')); 
            return view('search.searching_result',compact('errors','properties','location'));
        }
        $errors = 0;
        $location = "Not Found";
        return view('search.searching_result',compact('errors','location'));
    }
    public function search_location_min_price_max_price($locations, $min_price, $max_price)
    {
        $min_price = (int) $min_price;
        $max_price = (int) $max_price;

        $upazilas = DB::table('upazilas')->where('name', $locations)->first();
        if($upazilas){
            $errors = 1;
            $location = $locations.' and '.$min_price.' to'. $max_price .' price';
            $properties = DB::table('properties')
                ->leftjoin('property_types','properties.property_type','=','property_types.id')
                ->select('properties.*','property_types.types')
                ->where('properties.location', $upazilas->id)
                ->whereBetween('properties.search_price', [$min_price, $max_price])
                ->where('properties.status', 1)
                ->paginate(getcong('pagination_limit')); 
            return view('search.searching_result',compact('errors','properties','location'));
        }
        $errors = 0;
        $location = "Not Found";
        return view('search.searching_result',compact('errors','location'));
        
    }
    public function search_proeprty_type_min_size_max_size($proeprty_type, $min_size, $max_size)
    {
        $min_size = (int) $min_size;
        $max_size = (int) $max_size;

        $type = DB::table('property_types')->where('id', $proeprty_type)->first();
        if($type){
            $errors = 1;
            $location = $type->types.' and '.$min_size.' to'. $max_size .' size (sft)';
            $properties = DB::table('properties')
                    ->leftjoin('property_types','properties.property_type','=','property_types.id')
                    ->select('properties.*','property_types.types')
                    ->where('properties.property_type', $proeprty_type)
                    ->whereBetween('properties.search_build_area', [$min_size, $max_size])
                    ->where('properties.status', 1)
                    ->paginate(getcong('pagination_limit')); 
            return view('search.searching_result',compact('errors','properties','location'));
        }
        $errors = 0;
        $location = "Not Found";
        return view('search.searching_result',compact('errors','location'));
        
    }
    public function search_proeprty_type_min_price_max_price($proeprty_type, $min_price, $max_price)
    {
        $min_price = (int) $min_price;
        $max_price = (int) $max_price;
        $errors = 1;
        $type = DB::table('property_types')->where('id', $proeprty_type)->first();
        if($type){
            $location = $type->types.' and '.$min_price.' to'. $max_price .' price';
            $properties = DB::table('properties')
                    ->leftjoin('property_types','properties.property_type','=','property_types.id')
                    ->select('properties.*','property_types.types')
                    ->where('properties.property_type', $proeprty_type)
                    ->whereBetween('properties.search_build_area', [$min_price, $max_price])
                    ->where('properties.status', 1)
                    ->paginate(getcong('pagination_limit')); 
            return view('search.searching_result',compact('errors','properties','location'));
        }
        $errors = 0;
        $location = "Not Found";
        return view('search.searching_result',compact('errors','location'));
    }
    public function search_bedrooms_min_price_max_price($bedrooms, $min_price, $max_price)
    {
        $min_price = (int) $min_price;
        $max_price = (int) $max_price;
        $errors = 1;
        $location = $bedrooms.' bedrooms and '.$min_price.' to'. $max_price .' price';
        $properties = DB::table('properties')
                ->leftjoin('property_types','properties.property_type','=','property_types.id')
                ->select('properties.*','property_types.types')
                ->where('properties.bedrooms', $bedrooms)
                ->whereBetween('properties.search_price', [$min_price, $max_price])
                ->where('properties.status', 1)
                ->paginate(getcong('pagination_limit')); 
        return view('search.searching_result',compact('errors','properties','location'));
    }
    public function search_bedrooms_min_size_max_size($bedrooms, $min_size, $max_size)
    {
        $min_size = (int) $min_size;
        $max_size = (int) $max_size;
$errors = 1;
        $location = $bedrooms.' bedrooms and '.$min_size.' to'. $max_size .' size (sft)';
        $properties = DB::table('properties')
                ->leftjoin('property_types','properties.property_type','=','property_types.id')
                ->select('properties.*','property_types.types')
                ->where('properties.bedrooms', $bedrooms)
                ->whereBetween('properties.search_build_area', [$min_size, $max_size])
                ->where('properties.status', 1)
                ->paginate(getcong('pagination_limit')); 
        return view('search.searching_result',compact('errors','properties','location'));
    }

    //check this function
    public function search_min_size_max_size($min_size, $max_size)
    {
        $min_size = (int) $min_size;
        $max_size = (int) $max_size;
        $errors = 1;
        $location = $min_size.' to'. $max_size .' size (sft)';
        $properties = DB::table('properties')
                ->leftjoin('property_types','properties.property_type','=','property_types.id')
                ->select('properties.*','property_types.types')
                ->whereBetween('properties.search_build_area', [$min_size, $max_size])
                ->where('properties.status', 1)
                ->paginate(getcong('pagination_limit')); 
        //dd($properties);
        return view('search.searching_result',compact('errors','properties','location'));
    }
    //not perfect working next time check
    public function search_min_size_max_size_min_price_max_price($min_size, $max_size, $min_price, $max_price)
    {
        $min_size = (int) $min_size;
        $max_size = (int) $max_size;
 
        $errors = 1;
        $location = $min_size.' to'. $max_size .' size (sft) and '.$min_price.' to '. $max_price.' price';
        $properties = DB::table('properties')
                ->leftjoin('property_types','properties.property_type','=','property_types.id')
                ->select('properties.*','property_types.types')
                ->whereBetween('properties.search_build_area', [$min_size, $max_size])
                ->whereBetween('properties.search_price', [$min_price, $max_price])
                ->where('properties.status', 1)
                ->paginate(getcong('pagination_limit')); 
        return view('search.searching_result',compact('errors','properties','location'));
    }
    public function search_location_proeprty_type_bedrooms($locations, $proeprty_type, $bedrooms)
    {
        $upazilas = DB::table('upazilas')->where('name', $locations)->first();
        $type = DB::table('property_types')->where('id', $proeprty_type)->first();
        if($upazilas && $type){
            $errors = 1;
            $location = $locations.' and'. $type->types .' and '.$bedrooms.' bedrooms';
            $properties = DB::table('properties')
                    ->leftjoin('property_types','properties.property_type','=','property_types.id')
                    ->select('properties.*','property_types.types')
                    ->where('properties.location', $upazilas->id)
                    ->where('properties.property_type', $proeprty_type)
                    ->where('properties.bedrooms', $bedrooms)
                    ->where('properties.status', 1)
                    ->paginate(getcong('pagination_limit')); 
            return view('search.searching_result',compact('errors','properties','location'));
        }
        $errors = 0;
        $location = "Not Found";
        return view('search.searching_result',compact('errors','location'));
        
    }
    public function search_location_bedrooms_min_size_max_size($locations, $bedrooms, $min_size, $max_size)
    {  
        $min_size = (int) $min_size;
        $max_size = (int) $max_size;

        $upazilas = DB::table('upazilas')->where('name', $locations)->first();
        if($upazilas){
            $errors = 1;
            $location = $locations.' and'. $bedrooms.' bedrooms'. 'and '.$min_size.' to '.$max_size.' size (sft)';
            $properties = DB::table('properties')
                    ->leftjoin('property_types','properties.property_type','=','property_types.id')
                    ->select('properties.*','property_types.types')
                    ->where('properties.location', $upazilas->id)
                    ->where('properties.bedrooms', $bedrooms)
                    ->whereBetween('properties.search_build_area', [$min_size, $max_size])
                    ->where('properties.status', 1)
                    ->paginate(getcong('pagination_limit')); 
            return view('search.searching_result',compact('errors','properties','location'));
        }
        $errors = 0;
        $location = "Not Found";
        return view('search.searching_result',compact('errors','location'));
        
    }
    public function search_location_bedrooms_min_price_max_price($locations, $bedrooms, $min_price, $max_price)
    { 
         
        $min_price = (int) $min_price;
        $max_price = (int) $max_price;

        $upazilas = DB::table('upazilas')->where('name', $locations)->first();
        if($upazilas){
            $errors = 1;
            $location = $locations.' and'. $bedrooms.' bedrooms'. 'and '.$min_price.' to '.$max_price.' price';
            $properties = DB::table('properties')
                    ->leftjoin('property_types','properties.property_type','=','property_types.id')
                    ->select('properties.*','property_types.types')
                    ->where('properties.location', $upazilas->id)
                    ->where('properties.bedrooms', $bedrooms)
                    ->whereBetween('properties.search_price', [$min_price, $max_price])
                    ->where('properties.status', 1)
                    ->paginate(getcong('pagination_limit')); 
            return view('search.searching_result',compact('errors','properties','location'));
        }
        $errors = 0;
        $location = "Not Found";
        return view('search.searching_result',compact('errors','location'));
        
    }
    public function search_location_proeprty_type_min_size_max_size($locations, $proeprty_type, $min_size, $max_size)
    {  
        $min_size = (int) $min_size;
        $max_size = (int) $max_size;

        $upazilas = DB::table('upazilas')->where('name', $locations)->first();
        $type = DB::table('property_types')->where('id', $proeprty_type)->first();
        if($upazilas && $type){
            $errors = 1;
            $location = $locations.' and'. $type->types.' bedrooms'. 'and '.$min_size.' to '.$max_size.' size (sft)';
            $properties = DB::table('properties')
                    ->leftjoin('property_types','properties.property_type','=','property_types.id')
                    ->select('properties.*','property_types.types')
                    ->where('properties.location', $upazilas->id)
                    ->where('properties.property_type', $proeprty_type)
                    ->whereBetween('properties.search_build_area', [$min_size, $max_size])
                    ->where('properties.status', 1)
                    ->paginate(getcong('pagination_limit')); 
            return view('search.searching_result',compact('errors','properties','location'));
        }
        $errors = 0;
        $location = "Not Found";
        return view('search.searching_result',compact('errors','location'));

    }
    public function search_location_proeprty_type_min_price_max_price($locations, $proeprty_type, $min_price, $max_price)
    {

        $min_price = (int) $min_price;
        $max_price = (int) $max_price;

        $upazilas = DB::table('upazilas')->where('name', $locations)->first();
        $type = DB::table('property_types')->where('id', $proeprty_type)->first();
        if($upazilas && $type){
            $errors = 1;
            $location = $locations.' and'. $type->types.' bedrooms'. 'and '.$min_price.' to '.$max_price.' price';
            $properties = DB::table('properties')
                    ->leftjoin('property_types','properties.property_type','=','property_types.id')
                    ->select('properties.*','property_types.types')
                    ->where('properties.location', $upazilas->id)
                    ->where('properties.property_type', $proeprty_type)
                    ->whereBetween('properties.search_price', [$min_price, $max_price])
                    ->where('properties.status', 1)
                    ->paginate(getcong('pagination_limit')); 
            return view('search.searching_result',compact('errors','properties','location'));
        }
        $errors = 0;
        $location = "Not Found";
        return view('search.searching_result',compact('errors','location'));

        
    }
    public function search_proeprty_type_bedrooms_min_size_max_size($proeprty_type, $bedrooms, $min_size, $max_size)
    {  
        $min_size = (int) $min_size;
        $max_size = (int) $max_size;

        $type = DB::table('property_types')->where('id', $proeprty_type)->first();
        if($type){
            $errors = 1;
            $location = $type->types.' bedrooms'. 'and '.$min_size.' to '.$max_size.' size (sft)';
            $properties = DB::table('properties')
                    ->leftjoin('property_types','properties.property_type','=','property_types.id')
                    ->select('properties.*','property_types.types')
                    ->where('properties.property_type', $proeprty_type)
                    ->where('properties.bedrooms', $bedrooms)
                    ->whereBetween('properties.search_build_area', [$min_size, $max_size])
                    ->where('properties.status', 1)
                    ->paginate(getcong('pagination_limit')); 
            return view('search.searching_result',compact('errors','properties','location'));
        }
        $errors = 0;
        $location = "Not Found";
        return view('search.searching_result',compact('errors','location'));
        
    }
    public function search_proeprty_type_bedrooms_min_price_max_price($proeprty_type, $bedrooms, $min_price, $max_price)
    {
        $min_price = (int) $min_price;
        $max_price = (int) $max_price;

        $type = DB::table('property_types')->where('id', $proeprty_type)->first();
        if($type){
            $errors = 1;
            $location = $type->types.' and '.$bedrooms.' bedrooms'. ' and '.$min_price.' to '.$max_price.' price';
            $properties = DB::table('properties')
                    ->leftjoin('property_types','properties.property_type','=','property_types.id')
                    ->select('properties.*','property_types.types')
                    ->where('properties.property_type', $proeprty_type)
                    ->where('properties.bedrooms', $bedrooms)
                    ->whereBetween('properties.search_price', [$min_price, $max_price])
                    ->where('properties.status', 1)
                    ->paginate(getcong('pagination_limit')); 
            return view('search.searching_result',compact('errors','properties','location'));
        }
        $errors = 0;
        $location = "Not Found";
        return view('search.searching_result',compact('errors','location'));
        
    }
    public function search_location_min_size_min_max_size_price_max_price($locations, $min_size, $max_size, $min_price, $max_price){
        $min_size = (int) $min_size;
        $max_size = (int) $max_size;

        $min_price = (int) $min_price;
        $max_price = (int) $max_price;

        $upazilas = DB::table('upazilas')->where('name', $locations)->first();
        if($upazilas){
            $errors = 1;
            $location = $locations. ' and '.$min_size.' to '.$max_size.' size (sft)'.' and '.$min_price.' to '.$max_price;
            $properties = DB::table('properties')
                    ->leftjoin('property_types','properties.property_type','=','property_types.id')
                    ->select('properties.*','property_types.types')
                    ->where('properties.location', $upazilas->id)
                    ->whereBetween('properties.search_build_area', [$min_size, $max_size])
                    ->whereBetween('properties.search_price', [$min_price, $max_price])
                    ->where('properties.status', 1)
                    ->paginate(getcong('pagination_limit')); 
            return view('search.searching_result',compact('errors','properties','location'));
        }
        $errors = 0;
        $location = "Not Found";
        return view('search.searching_result',compact('errors','location'));


        
    }
    public function search_proeprty_type_size_min_max_size_price_max_price($proeprty_type, $min_size, $max_size, $min_price, $max_price){
        $min_size = (int) $min_size;
        $max_size = (int) $max_size;

        $min_price = (int) $min_price;
        $max_price = (int) $max_price;

        // $upazilas = DB::table('upazilas')->where('name', $locations)->first();
        $type = DB::table('property_types')->where('id', $proeprty_type)->first();
        if($type){
            $errors = 1;
            $location = $type->types.' and '.$min_size.' to '.$max_size.' size (sft)'.' and '.$min_price.' to '.$max_price;
            $properties = DB::table('properties')
                    ->leftjoin('property_types','properties.property_type','=','property_types.id')
                    ->select('properties.*','property_types.types')
                    ->where('properties.property_type', $proeprty_type)
                    ->whereBetween('properties.search_build_area', [$min_size, $max_size])
                    ->whereBetween('properties.search_price', [$min_price, $max_price])
                    ->where('properties.status', 1)
                    ->paginate(getcong('pagination_limit')); 
            return view('search.searching_result',compact('errors','properties','location'));
        }
        $errors = 0;
        $location = "Not Found";
        return view('search.searching_result',compact('errors','location'));
    }
    public function search_location_proeprty_type_size_min_max_size_price_max_price($locations, $proeprty_type, $min_size, $max_size, $min_price, $max_price){
        $min_size = (int) $min_size;
        $max_size = (int) $max_size;
        $upazilas = DB::table('upazilas')->where('name', $locations)->first();
        $type = DB::table('property_types')->where('id', $proeprty_type)->first();
        if($upazilas && $type){
            $errors = 1;
            $location = $locations.' and '.$type->types.' and '.$min_size.' to '.$max_size.' size (sft)'.' and '.$min_price.' to '.$max_price;
            $properties = DB::table('properties')
                    ->leftjoin('property_types','properties.property_type','=','property_types.id')
                    ->select('properties.*','property_types.types')
                    ->where('properties.location', $upazilas->id)
                    ->where('properties.property_type', $proeprty_type)
                    ->whereBetween('properties.search_build_area', [$min_size, $max_size])
                    ->whereBetween('properties.search_price', [$min_price, $max_price])
                    ->where('properties.status', 1)
                    ->paginate(getcong('pagination_limit')); 
            return view('search.searching_result',compact('errors','properties','location'));
        }
        $errors = 0;
        $location = "Not Found";
        return view('search.searching_result',compact('errors','location'));

        

    }
    public function search_all_search($locations, $proeprty_type, $bedrooms, $min_size, $max_size, $min_price, $max_price)
    {  
        $min_size = (int) $min_size;
        $max_size = (int) $max_size;

        $min_price = (int) $min_price;
        $max_price = (int) $max_price;

        $upazilas = DB::table('upazilas')->where('name', $locations)->first();
        $type = DB::table('property_types')->where('id', $proeprty_type)->first();
        if($upazilas && $type){
            $errors = 1;
            $location = $locations.' and '.$type->types.' and '.$bedrooms.' bedrooms'. ' and '.$min_size.' to '.$max_size.' size (sft)'.' and '.$min_price.' to '.$max_price;
            $properties = DB::table('properties')
                    ->leftjoin('property_types','properties.property_type','=','property_types.id')
                    ->select('properties.*','property_types.types')
                    ->where('properties.location', $upazilas->id)
                    ->where('properties.property_type', $proeprty_type)
                    ->where('properties.bedrooms', $bedrooms)
                    ->whereBetween('properties.search_build_area', [$min_size, $max_size])
                    ->whereBetween('properties.search_price', [$min_price, $max_price])
                    ->where('properties.status', 1)
                    ->paginate(getcong('pagination_limit')); 
            return view('search.searching_result',compact('errors','properties','location'));
        }
        $errors = 0;
        $location = "Not Found";
        return view('search.searching_result',compact('errors','location'));
    }
    /////////////////////////////////////// UPDATE ROUTE END////////////////////////////////////////////////
    public function my_properties()
    {  
         if(!Auth::user())
         {
            \Session::flash('flash_message', 'Login required!');

            return redirect('login');
         }
         
        if(Auth::user()->usertype=='Admin')
        {
            return redirect('admin/properties');
        }
        else
        {
            $user_id=Auth::user()->id;
            
            $propertieslist = Properties::where('user_id',$user_id)->orderBy('id','desc')->paginate(getcong('pagination_limit'));
        }
  
        return view('pages.my_properties',compact('propertieslist'));
    }

    //interest property show user panel |imran
    public function interest_properties(){
        if(!Auth::user()){
            \Session::flash('flash_message','login required!');
            return redirect('login');
        }

        if(Auth::user()->usertype=='Admin'){
            return redirect('admin/agentinterest');
        }else{
             $user_id= Auth::user()->id;
             $interestpropertylist = Interest::where('agent_id',$user_id)->where('status',1)->orderBy('id','desc')->get();  
        }

       
        return view('pages.interest_properties')->with('interestpropertylist',$interestpropertylist);

    }


    public function add_property_form()
    {  
        if(!Auth::user())
         {
            \Session::flash('flash_message', 'Login required');

            return redirect('login');
         }   
            
        $types = Types::orderBy('types')->get();

        return view('pages.add_property',compact('types'));
    }

    public function addnew(Request $request)
    {  
       
       
         $data =  \Request::except(array('_token')) ;
        
       // $inputs = $request->all();

      

        if(!empty($request['id'])){
            $rule=array(
 		'product_code'=>'required',
                'property_name' => 'required',
              
                'property_purpose' => 'required',
                'property_type' => 'required', 
                'price' => 'required',
                'address' => 'required',                       
                'description' => 'required',
                'featured_image' => 'mimes:jpg,jpeg,gif,png'
                 );
        }
        else
        {
            $rule=array(
  'product_code'=>'required|unique:properties',
                'property_name' => 'required',
                
                'property_purpose' => 'required',
                'property_type' => 'required', 
                'price' => 'required',
                'address' => 'required',                       
                'description' => 'required',
                'featured_image' => 'required|mimes:jpg,jpeg,gif,png' 
                 );
        }
        
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages())->withInput();
        } 
          
        if(!empty($request['id'])){
           
            $decrypted_id = Crypt::decryptString($request['id']);  

            $property = Properties::findOrFail($decrypted_id);

        }else{

            $property = new Properties;

        }
        
         
        //property featured image
        $featured_image = $request->file('featured_image');
         
        if($featured_image){
            
            \File::delete(public_path() .'/upload/properties/'.$property->featured_image.'-b.jpg');
            \File::delete(public_path() .'/upload/properties/'.$property->featured_image.'-s.jpg');
           
             
            $tmpFilePath = public_path('upload/properties/');

            $hardPath =  Str::slug($request['property_name'], '-').'-'.md5(rand(0,99999));
            
            $img = Image::make($featured_image);

            $img->fit(640, 425)->save($tmpFilePath.$hardPath.'-b.jpg');
            $img->fit(358, 238)->save($tmpFilePath.$hardPath.'-s.jpg');
             
            $property->featured_image = $hardPath;
             
        }

        $floor_plan = $request->file('floor_plan');

        if($floor_plan){
            
            \File::delete(public_path() .'/upload/floorplan/'.$property->floor_plan.'-b.jpg');
            \File::delete(public_path() .'/upload/floorplan/'.$property->floor_plan.'-s.jpg');
            
            $tmpFilePath = public_path('upload/floorplan/');

            $hardPath =  Str::slug($request['property_name'], '-').'-'.md5(rand(0,99999));
            
            $img = Image::make($floor_plan);

            $img->save($tmpFilePath.$hardPath.'-b.jpg');
            $img->fit(358, 238)->save($tmpFilePath.$hardPath.'-s.jpg');
             
            $property->floor_plan = $hardPath;
             
        } 
         
         
        $property_slug = Str::slug($request['property_name'], "-"); 
        
        $user_id=Auth::user()->id;
        
        if(empty($request['id']))
        { 
            $property->user_id = $user_id;
        }
        
        $prices = $request['price'];
        $search_price = str_replace( ',', '', $prices );

        $build_areas = $request['build_area'];
        $search_build_area = str_replace( ',', '', $build_areas );
	$property->product_code = $request['product_code'];

        $property->property_name = addslashes($request['property_name']);
        $property->property_slug = $property_slug;
        $property->property_type = $request['property_type'];

      

        $property->rate_per_sft = $request['rate_per_sft'];
        $property->po = $request['po'];
        $property->location = $request['location'];
        $property->facing = $request['facing'];
        $property->available_floor = $request['available_floor'];
        $property->floor = $request['floor'];
        $property->unit = $request['unit'];
        $property->no_of_floor = $request['no_of_floor'];
        
        $property->loan_facility = $request['loan_facility'];
        $property->nearest_park_km = $request['nearest_park_km'];
        $property->nearest_mosque_km = $request['nearest_mosque_km'];
        $property->nearest_playground_km = $request['nearest_playground_km'];
        $property->nearest_departmental_store_km = $request['nearest_departmental_store_km'];
        $property->nearest_restaurant_km = $request['nearest_restaurant_km'];
        $property->nearest_fire_service_km = $request['nearest_fire_service_km'];
        $property->nearest_police_station_km = $request['nearest_police_station_km'];
        $property->nearest_pharmacy_km = $request['nearest_pharmacy_km'];
        $property->nearest_grocery_bazar_km = $request['nearest_grocery_bazar_km'];
        $property->nearest_govt_office_km = $request['nearest_govt_office_km'];
        $property->amenities_servent_bed = $request['amenities_servent_bed'];
        $property->amenities_servent_bath = $request['amenities_servent_bath'];
        $property->amenities_gym = $request['amenities_gym'];
        $property->amenities_front_yard = $request['amenities_front_yard'];
        $property->amenities_splash_pool = $request['amenities_splash_pool'];
        $property->amenities_roof_deck = $request['amenities_roof_deck'];
        $property->amenities_reception = $request['amenities_reception'];
        $property->amenities_rooftop_garden = $request['amenities_rooftop_garden'];
        $property->amenities_generator = $request['amenities_generator'];
        $property->amenities_substation = $request['amenities_substation'];
        $property->amenities_lift = $request['amenities_lift'];
        $property->amenities_kitchen_veranda = $request['amenities_kitchen_veranda'];
        $property->amenities_kitchen_cabinet = $request['amenities_kitchen_cabinet'];
        $property->amenities_corner_plot = $request['amenities_corner_plot'];
        $property->amenities_guest_lobby = $request['amenities_guest_lobby'];
        $property->amenities_cctv = $request['amenities_cctv'];
        $property->amenities_swimming_pool = $request['amenities_swimming_pool'];
        $property->amenities_guest_parking = $request['amenities_guest_parking'];
        $property->amenities_laundry_room = $request['amenities_laundry_room'];
        $property->amenities_bbq = $request['amenities_bbq'];
        $property->amenities_terrace = $request['amenities_terrace'];
        
        $property->amenities_sauna = $request['amenities_sauna'];

        $property->property_purpose = $request['property_purpose'];
        $property->price = $request['price'];
        $property->search_price = $search_price;
        $property->address = addslashes($request['address']);
       // $property->map_latitude = $inputs['map_latitude'];
        //$property->map_longitude = $inputs['map_longitude'];
        $property->bathrooms = $request['bathrooms'];
        $property->bedrooms = $request['bedrooms'];
        $property->garage = $request['garage'];
        $property->land_area = $request['land_area'];
        $property->build_area = $request['build_area'];
        $property->search_build_area = $search_build_area;
        $property->balcony = $request['balcony'];
        //$property->property_features = $inputs['property_features'];
        $property->description = addslashes($request['description']);
        $property->video_code = addslashes($request['video_code']);

        $property->nearest_school_km = $request['nearest_school_km'];
        $property->nearest_hospital_km = $request['nearest_hospital_km'];
        $property->nearest_bus_stand_km = $request['nearest_bus_stand_km'];
        $property->nearest_railway_km = $request['nearest_railway_km'];
        $property->nearest_airport_km = $request['nearest_airport_km'];
        $property->nearest_mall_km = $request['nearest_mall_km'];
        
        if(Auth::User()->usertype=="Admin"){

         $property->status =1;   
            
        }   
         
        $property->save();
        
        //News Gallery image
        $property_gallery_files = $request->file('gallery_file');
        
        //$file_count = count($property_gallery_files);
         
        if($request->hasFile('gallery_file'))
        {

        if(!empty($request['id']))
        {

            foreach($property_gallery_files as $file) {
                
                $property_gallery_obj = new PropertyGallery;
                                 
                $tmpFilePath = public_path('upload/gallery/');           
                 
                $hardPath = substr($property_slug,0,100).'_'.rand(0,9999).'-b.jpg';
                
                $g_img = Image::make($file);
                
                $g_img->save($tmpFilePath.$hardPath);

                 //$g_img->fit(640, 425)->save($tmpFilePath.$hardPath);

                //$g_img->save($tmpFilePath.$hardPath);
                

                $property_gallery_obj->property_id = $decrypted_id;
                $property_gallery_obj->image_name = $hardPath;
                $property_gallery_obj->save();
                 
            }

        }
        else
        {   
            foreach($property_gallery_files as $file) {
                
                $property_gallery_obj = new PropertyGallery;
                
                $tmpFilePath = public_path('upload/gallery/');              
                 
                $hardPath = substr($property_slug,0,100).'_'.rand(0,9999).'-b.jpg';
                
                $g_img = Image::make($file);

                $g_img->save($tmpFilePath.$hardPath);

                //$g_img->save($tmpFilePath.$hardPath);
                
                $property_gallery_obj->property_id = $property->id;
                $property_gallery_obj->image_name = $hardPath;
                $property_gallery_obj->save();
                 
            }
        }
        } 
        
        
        if(!empty($request['id'])){

            //Email Notification

            $user = User::findOrFail($user_id);
            $user_full_name=$user->name;

            $data_email = array(
                'name' => $user_full_name,
                'property_name' => $request['property_name']
                 );    

            if(getenv("MAIL_USERNAME"))
           { 
                \Mail::send('emails.property_edit', $data_email, function($message) use ($request){
                    $message->to(getcong('site_email'), getcong('site_name'))
                    ->from(getcong('site_email'), getcong('site_name'))
                    ->subject(getcong('site_name').' Property Updated');
                });
           }


            Session::flash('success', 'Changes Saved');

            return \Redirect::back();
        }else{

            //Email Notification

            $user = User::findOrFail($user_id);
            $user_full_name=$user->name;

            $data_email = array(
                'name' => $user_full_name,
                'property_name' => $request['property_name']
                 );    
           
           if(getenv("MAIL_USERNAME"))
           {
             
                \Mail::send('emails.property_add', $data_email, function($message) use ($request){
                    $message->to(getcong('site_email'), getcong('site_name'))
                    ->from(getcong('site_email'), getcong('site_name'))
                    ->subject(getcong('site_name').' Property Added');
                });
            }
            
            Session::flash('success', 'Property Added, Please complete payment and publish property');
             
             return redirect('my_properties');
 
        }
    }

    
    public function editproperty($id)    
    {     

          if(!Auth::user())
         {
            \Session::flash('flash_message', 'Login required');

            return redirect('login');
         }

          $user_id=Auth::user()->id;   

          $decrypted_id = Crypt::decryptString($id);   

          if(Auth::user()->usertype=='Admin')
          {
            $property = Properties::where('id',$decrypted_id)->first();
          }  
          else
          {
            $property = Properties::where('id',$decrypted_id)->where('user_id',$user_id)->first();
          }
        

          if(!$property){
            abort('404');
         }

          $types = Types::orderBy('types')->get(); 

          $property_gallery_images = PropertyGallery::where('property_id',$property->id)->orderBy('image_name')->get();
              
          return view('pages.edit_property',compact('property','types','property_gallery_images'));
        
         }


    public function gallery_image_delete($id)
      {       
         if(!Auth::user())
         {
            \Session::flash('flash_message', 'Login required');

            return redirect('login');
         } 

        $decrypted_id = Crypt::decryptString($id); 

        $property_gallery_obj = PropertyGallery::findOrFail($decrypted_id);
        
         \File::delete('upload/gallery/'.$property_gallery_obj->image_name);
         
        $property_gallery_obj->delete(); 

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();

    }

    public function delete($id)
    {   
        if(!Auth::user())
         {
            \Session::flash('flash_message', 'Login required');

            return redirect('login');
         }

        $user_id=Auth::user()->id;   

        $decrypted_id = Crypt::decryptString($id);   

        $property = Properties::where('id',$decrypted_id)->where('user_id',$user_id)->first();         

          if(!$property){
            abort('404');
         }
        
        \File::delete(public_path() .'/upload/properties/'.$property->featured_image.'-b.jpg');
        \File::delete(public_path() .'/upload/properties/'.$property->featured_image.'-s.jpg');

        \File::delete(public_path() .'/upload/floorplan/'.$property->floor_plan.'-b.jpg');
        \File::delete(public_path() .'/upload/floorplan/'.$property->floor_plan.'-s.jpg');
         
        $property->delete();

        $property_gallery_images = PropertyGallery::where('property_id',$decrypted_id)->get();

        foreach ($property_gallery_images as $gallery_images) {

            \File::delete(public_path() .'/upload/gallery/'.$gallery_images->image_name);

            $property_gallery_obj = PropertyGallery::findOrFail($gallery_images->id);
            $property_gallery_obj->delete();
        }
        
        \Session::flash('flash_message', 'Property Deleted');

        return redirect()->back();

    }
	
}
