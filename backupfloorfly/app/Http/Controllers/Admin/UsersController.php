<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Properties;
use App\PropertyGallery;
use App\Enquire;

use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');	
		
		 parent::__construct();
         
    }
    public function userslist()    { 
         
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', trans('words.access_denied'));

            return redirect('admin/dashboard');
            
        }

        if(isset($_GET['keyword']))
        {
             
            $type=$_GET['type'];        
            $keyword=$_GET['keyword'];
        
            
            $allusers = User::SearchUserByKeyword($keyword,$type)->paginate(10);
 
            $allusers->appends($_GET)->links();  
        }
        else
        { 
          
            $allusers = User::where('usertype', '!=', 'Admin')->orderBy('id','desc')->paginate(10);
        }
       
         
        return view('admin.pages.users',compact('allusers'));
    } 
     
    public function addeditUser()    { 
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', trans('words.access_denied'));

            return redirect('admin/dashboard');
            
        }
          
        return view('admin.pages.addeditUser');
    }
    
    public function addnew(Request $request)
    { 
    	
    	$data =  \Request::except(array('_token')) ;
	    
	   // $inputs = $request->all();
	    
        if(!empty($request['id']))
        {
            $rule=array(
                'name' => 'required',
                'email' => 'required|email|max:75|unique:users,id',
                'profile_image' => 'mimes:jpg,jpeg,gif,png' 
                 );
        }
        else
        {
            $rule=array(
            'name' => 'required',
            'email' => 'required|email|max:75|unique:users,id',
            'password' => 'min:6|max:15',
            'profile_image' => 'mimes:jpg,jpeg,gif,png' 
            );
        }
	    
	    
	   	 $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
	      
		if(!empty($request['id'])){
           
            $user = User::findOrFail($request['id']);

        }else{

            $user = new User;

        }
		
		 
        //User image
        
        $profile_file = $request->file('profile_image');

        if($profile_file){
            \File::delete(public_path() .$user->profile_image);
            $tmpFilePath = public_path('upload/profile_image/');
            $hardPath = time().$profile_file->getClientOriginalName();
            $img = Image::make($profile_file);
            $img->fit(400, 400)->save($tmpFilePath.$hardPath); 
            $sav_profile_imagpath = '/upload/profile_image/' . $hardPath;
            $user->profile_image = $sav_profile_imagpath;

        }

        $user->usertype = $request['usertype'];
        $user->sellertype = $request['sellertype'];
		$user->name = $request['name'];		 
		$user->email = $request['email'];
		$user->phone = $request['phone'];
          $user->about = $request['about'];
          $user->yrs_exp = $request['yrs_exp'];
		$user->facebook = $request['facebook'];
		$user->twitter = $request['twitter'];
		$user->instagram = $request['instagram'];
		$user->linkedin = $request['linkedin'];
        $user->status = $request['status'];
		
		if($request['password'])
		{
			$user->password= bcrypt($request['password']); 
		}
		
		
		 
	    $user->save();
		
		if(!empty($request['id'])){

            \Session::flash('flash_message', trans('words.successfully_updated'));

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', trans('words.added'));
            return \Redirect::back();
        }
    }
    public function approvedUser($id)   
    {
        if(Auth::User()->usertype!="Admin"){
            \Session::flash('flash_message', trans('words.access_denied'));
            return redirect('admin/dashboard');
        }
        $decrypted_id = Crypt::decryptString($id);
        $user = User::findOrFail($decrypted_id);

        $first_name = $user->name;
        $last_name = null;
        $job_title = $user->usertype;
        $sellertype = $user->sellertype;
        $gender = $user->gender;
        $email = $user->email;
        $password = $user->password;
        $seller_present_address = $user->seller_present_address;
        $profile_image = $user->profile_image;
        $seller_permanent_address = $user->seller_permanent_address;
        $company_address = $user->company_address;
        $company_trade_license = $user->company_trade_license;
        $phone = $user->phone;
        $about = $user->about;
        $yrs_exp=$user->yrs_exp;
        $facebook = $user->facebook;
        $linkedin = $user->linkedin;
        $agent_dob = $user->agent_dob;
        $agent_contact2 = $user->agent_contact2;
        $agent_present_address = $user->agent_present_address;
        $agent_nid = $user->agent_nid;
        $agent_passport = $user->agent_passport;
        $agent_father = $user->agent_father;
        $agent_mother = $user->agent_mother;
        $agent_permanent_address = $user->agent_permanent_address;
        $accecpt = $user->accecpt;
    
        $url = "http://crm.floorfly.com/insertUser";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "first_name=$first_name&last_name=$last_name&job_title=$job_title&sellertype=$sellertype&gender_id=$gender&email=$email&password=$password&seller_present_address=$seller_present_address&photo=&profile_image&seller_permanent_address=$seller_permanent_address&company_address=$company_address&company_trade_license=$company_trade_license&phone=$phone&about=$about&facebook=$facebook&linkedin=$linkedin&birth_date=$agent_dob&agent_contact2=$agent_contact2&agent_present_address=$agent_present_address&agent_nid=$agent_nid&agent_passport=$agent_passport&agent_father=$agent_father&agent_mother=$agent_mother&agent_permanent_address=$agent_permanent_address&accecpt=$accecpt"
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec ($ch);
        curl_close ($ch);
        $result = $response;
        
        
        
        //Verify user
        if($result==1){
            \Session::flash('flash_message', 'This user already approved floorfly crm.');
            return back();
        }
        if($result==2){
            $user->approved = 1;
            $user->save();
            \Session::flash('flash_message', 'This user approved and send to floorfly crm.');
            return back();
        }
        else{
            \Session::flash('flash_message', 'Something wrong.');
            return back();
        }
    }
    public function unapprovedUser($id)
    {
        if(Auth::User()->usertype!="Admin"){
           \Session::flash('flash_message', trans('words.access_denied'));
            return redirect('admin/dashboard');
        }
        $decrypted_id = Crypt::decryptString($id);
        $user = User::findOrFail($decrypted_id);
        \Session::flash('flash_message', 'This user approved and send to floorfly crm');
        return back();
    }
    
    public function editUser($id)    
    {     
    	  if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', trans('words.access_denied'));

            return redirect('admin/dashboard');
            
        }		
    	  $decrypted_id = Crypt::decryptString($id);

          $user = User::findOrFail($decrypted_id);
           
          return view('admin.pages.addeditUser',compact('user'));
        
    }	 
    
    public function delete($id)
    {
    	
    	if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', trans('words.access_denied'));

            return redirect('admin/dashboard');
            
        }
    	
        $decrypted_id = Crypt::decryptString($id);	
        
        if($decrypted_id!=1)
        {

            $property_list = Properties::where('user_id',$decrypted_id)->get();

            foreach ($property_list as $property_data)
            {

                $property_gallery_images = PropertyGallery::where('property_id',$property_data->id)->get();

                foreach ($property_gallery_images as $gallery_images) {

                    \File::delete(public_path() .'/upload/gallery/'.$gallery_images->image_name);

                    $property_gallery_obj = PropertyGallery::findOrFail($gallery_images->id);
                    $property_gallery_obj->delete();
                }

                $property = Properties::findOrFail($property_data->id);
        
                \File::delete(public_path() .'/upload/properties/'.$property->featured_image.'-b.jpg');
                \File::delete(public_path() .'/upload/properties/'.$property->featured_image.'-s.jpg');

                 \File::delete(public_path() .'/upload/floorplan/'.$property->floor_plan.'-b.jpg');
                 \File::delete(public_path() .'/upload/floorplan/'.$property->floor_plan.'-s.jpg');
                 
                $property->delete();
            }    

            $user = User::findOrFail($decrypted_id);
        
            \File::delete(public_path() .'/upload/members/'.$user->image_icon.'-b.jpg');
            \File::delete(public_path() .'/upload/members/'.$user->image_icon.'-s.jpg');
                
            $user->delete();
        }
        else
        {
            \Session::flash('flash_message', trans('words.access_denied'));

             return redirect()->back();
        }
 
        \Session::flash('flash_message', trans('words.deleted'));

        return redirect()->back();

    }
    
  public function user_export()    
    {
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', trans('words.access_denied'));

            return redirect('admin/dashboard');
            
        }

          return Excel::download(new UsersExport, 'users.xlsx');

    }   
    	
}
