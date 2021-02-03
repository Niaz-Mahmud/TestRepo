<?php
namespace App\Http\Controllers;
use Auth;
use App\User;
use App\ClientRequest;
use App\Service;
use App\ServiceCategory;
use App\ServiceSubcategory;
use App\ServiceChildcategory;
use App\Properties;
use App\Testimonials;
use App\Subscriber;
use App\Partners;
use App\Education;
use App\Company;
use App\Skill;
use App\Position;
use App\Department;
use App\Varify;
use App\Blog;
use App\Blogcategory;


use Mail;
use Image;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str; 
use Validator;
use Carbon\Carbon;
use PHPMailer\PHPMailer\PHPMailer;
 
class IndexController extends Controller
{
    public function __construct()
    {
         check_property_exp(); 
    }

    public function index()
    {   

        $serviceCategory = ServiceCategory::get();

        $propertieslist = Properties::where('status','1')->orderBy('id','desc')->take(2)->get();

    // $propertieslist = Properties::where('status','1')->orWhere('position_status','1')->orderBy('position_id','asc')->take(2)->get();
 
        $featured_properties = Properties::where('status','1')->where('featured_property','1')->orWhere('position_status','1')->orderBy('position_id', 'asc')->take(6)->get();  
        
        $now=15000000;
        $premium_properties = Properties::where('status','1')->where('search_price','>=', $now)->orderBy('id', 'desc')->take(4)->get(); 

        $lesscore=10000000;
        $standard_collections = Properties::where('status','1')->where('search_price','<=', $lesscore)->orderBy('id', 'desc')->take(4)->get(); 
	$land_properties = Properties::where('status','1')->where('property_type',5)->orderBy('id', 'desc')->take(4)->get();


        $flats_properties = Properties::where('status','1')->where('property_type',7)->orderBy('id', 'desc')->take(2)->get();
        
        $partners = Partners::orderBy('id', 'desc')->get();
                               
        return view('pages.index',compact('propertieslist','featured_properties','land_properties', 'partners','serviceCategory','premium_properties','flats_properties','standard_collections'));
    }

    public function testimonialslist()
    {  
        $alltestimonials = Testimonials::orderBy('id','desc')->paginate(10);
          
        return view('pages.testimonials',compact('alltestimonials'));
    }
    
    public function subscribe(Request $request)
    {
        
        $data =  \Request::except(array('_token')) ;
        
        $inputs = $request->all();
        
        $rule=array(
                'email' => 'required|email|max:75' 
                 );
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                 \Session::flash('error_flash_message', 'The email field is required.');
                return redirect('/#top-footer');

        } 
        
        $subscriber = new Subscriber;
        $subscriber->email = $inputs['email'];
        $subscriber->ip = $_SERVER['REMOTE_ADDR'];
          
         
        $subscriber->save();

       \Session::flash('flash_message_subscribe', trans('words.successfully_subscribe'));

        return redirect('/#top-footer');         
         
    }

    public function request_submit(Request $request)
    {

        $data =  \Request::except(array('_token')) ;
        
        //$inputs = $request->all();
        
        $rule=array(
            'name' =>'required',
            'contact' => 'required|min:10|max:11' 
        );
        
        $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
            \Session::flash('error_flash_message', 'The Contact field is required.');
            return redirect('/#top-footer');

        } 
        
        $request_data = new ClientRequest;
        $request_data->name = $request['name'];
        $request_data->email = $request['email']; 
        $request_data->location = $request['location'];
        $request_data->size = $request['size'];
        $request_data->contact=$request['contact'];
        $request_data->requirement=$request['requirement'];

      
          
        $request_data->save();

       \Session::flash('flash_message_client', trans('words.successfull_request'));

       return \Redirect::back();

       //return redirect('/#top-footer');
    }
     
    public function aboutus_page()
    {                      
        return view('pages.about');
    }

    public function pricing_plan()
    {                      
        return view('pages.pricing_plan');
    }
     
    public function contact_us_page()
    {                       
        return view('pages.contact');
    }
     /*blog*/
    public function blog(){
     
        $blogs=\App\Blog::where('status',1)->orderBy('created_at', 'desc')->paginate(8);
        return view('blogs.blogs')->with('blogs',$blogs)
            ->with('allcategories',Blogcategory::all())
            ->with('all_post',Blog::take(20)->get());
    }
    // public function blogcreate(){
     
    //     return view('blogs.blog-create')->with('categories',Blogcategory::all());
    // }

    public function singleBlog($slug){

       
        $blog= Blog::where('slug', $slug)->first();
        $next_id=Blog::where('id','>', $blog->id)->min('id');
        $prev_id=Blog::where('id','<', $blog->id)->max('id');
        $categories=Blogcategory::all();
        $related=Blog::where('blogcategory_id', '=', $blog->blogcategory->id)->where('id', '!=', $blog->id)->get();
            return view('blogs.single-blog')->with('blog',$blog)
            ->with('title', $blog->title)
            ->with('categories', Blogcategory::all())
            //->with('settings',Setting::first())
            ->with('next',Blog::find($next_id))
            ->with('prev',Blog::find($prev_id))
            ->withRelated($related);
            
            
    }
    

    public function blogcategory($slug){
 
        $blog_category= Blogcategory::where('slug', $slug)->first();
        return view('blogs.blog-category')->with('blog_category',$blog_category)
            ->with('title', $blog_category->name)
            ->with('all_blog_categories', Blogcategory::all());
    }

    /*blog end*/
    
    public function contact_us_sendemail(Request $request)
    {   
        
        $data =  \Request::except(array('_token')) ;
        
        $inputs = $request->all();
        
        $rule=array(
                'name' => 'required',
                'email' => 'required|email',
                'your_message' => 'required' 
                 );
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages())->withInput();
        } 
        
        
        $data_email = array(
                'name' => $inputs['name'],
                'email' => $inputs['email'],
                'phone' => $inputs['phone'],
                'website' => $inputs['website'],
                'your_message' => $inputs['your_message']
                );    
        if(getenv("MAIL_USERNAME"))
        {
            \Mail::send('emails.contact', $data_email, function($message) use ($inputs){
                    $message->to(getcong('contact_us_email'), getcong('site_name'))
                    ->from(getcong('site_email'), getcong('site_name'))
                    ->subject(getcong('site_name').' Contact');
            });
        }

         \Session::flash('flash_message_contact', trans('words.thanks_for_contacting_us'));

         return \Redirect::back();
    }
    
    
    /**
     * Do user login
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function login()
    {   
        if (Auth::check()) {
                        
            return redirect('dashboard'); 
        }
 
        return view('pages.login');
    } 
     
     
    public function postLogin(Request $request)
    {
        
    //echo bcrypt('123456');
    //exit; 
    if(getcong('recaptcha')==1)
    {   
      $this->validate($request, [
            'email' => 'required|email', 'password' => 'required','g-recaptcha-response' => 'required|captcha' 
        ]);
    }
    else
    {
        $this->validate($request, [
            'email' => 'required|email', 'password' => 'required'
        ]);
    }

        $credentials = $request->only('email', 'password');

         
        
         if (Auth::attempt($credentials, $request->has('remember'))) {

            if(Auth::user()->status=='0'){
                \Auth::logout();   

                \Session::flash('login_error_flash_msg', 'Required');               
                return redirect('/login')->withErrors(trans('words.account_not_activated_msg'));
            }

            return $this->handleUserWasAuthenticated($request);
        }

       // return array("errors" => 'The email or the password is invalid. Please try again.');
        //return redirect('/admin');

       \Session::flash('login_error_flash_msg', 'Required'); 
       return redirect('/login')->withErrors(trans('words.email_password_invalid'));
        
    }
    
     /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  bool  $throttles
     * @return \Illuminate\Http\Response
     */
    protected function handleUserWasAuthenticated(Request $request)
    {

        if (method_exists($this, 'authenticated')) {
            return $this->authenticated($request, Auth::user());
        }

        return redirect('/dashboard'); 
    }
    
    public function register()
    {   
        if (Auth::check()) {
            return redirect('admin/dashboard'); 
        }
        
        return view('pages.register');
    }

    public function registerAgent()
    {   
        if (Auth::check()) {
            return redirect('admin/dashboard'); 
        }
        $position = Position::where('status', 1)->get();
        $department = Department::where('status', 1)->get();
        return view('pages.agentregister', compact('position','department'));
    }
    public function add_position(Request $request)
    {
        $checked = Position::where('name', ucfirst($request->get('postion_name')))->first();
        if($checked){
            return 0;
        }
        $position = New Position();
        $position->name = ucfirst($request->get('postion_name'));
        $position->save();
        return 1;
    }
    public function add_department(Request $request)
    {
        $checked = Department::where('name', ucfirst($request->get('department_name')))->first();
        if($checked){
            return 0;
        }
        $department = New Department();
        $department->name = ucfirst($request->get('department_name'));
        $department->save();
        return 1;
    }
    // Agent Register
    public function postRegister(Request $request)
    {
       // dd($request->all());
        $v=Validator::make($request->all(),[
            'name' => 'required',
            'agent_dob' => ['required', 'before:18 years ago'],
            'phone' => 'required|digits:11|numeric',
            'agent_present_address' => 'required',
            'agent_nid' => 'numeric|min:10',
            'agent_father' => 'required',
            'agent_mother' => 'required',
            'email' => 'required|email|unique:users',
            'start_date' => 'required',
            'yrs_exp'=> 'required',
            'terms_condition'=>'required'
        ]);
        if($v->fails()){
            return back()->withErrors($v)->withInput();
        }
        
        // Country code add
        $cCode = substr($request->get('phone'), 0, 4);
        if ($cCode == '+880') {
            $phone = $request['phone'] = '+880-'.substr($request['phone'], 4);
        }
        else {
            if ($request->get('phone')[0] == '0') {
                $phone = '+880-' . substr($request->get('phone'), 1);
            }
            if ($request->get('phone')[0] == '1') {
               $phone = '+880-' . $request->get('phone');
            }
            if ($cCode == '8801') {
               $phone = '+880-' . substr($request->get('phone'), 3);
            }
        }
        
        $user = new User;
        $profile_file = $request->file('profile_image');
        $cover_file = $request->file('cover_image');

        if(!empty($profile_file)){
           // $path1 = 'upload/profile_image';
           // $fileName1 = $profile_file->getClientOriginalName();
           // $profile_image = rand(10,100).'_'.$fileName1;
           // $move = $profile_file->move($path1, $profile_image);
            // $img = Image::make($profile_image)->resize(119, 120)->save($profile_image);


            \File::delete(public_path() .$user->profile_image);
            $tmpFilePath = public_path('upload/profile_image/');
            $hardPath = time().$profile_file->getClientOriginalName();
            $img = Image::make($profile_file);
            $img->fit(400, 400)->save($tmpFilePath.$hardPath); 
            $sav_profile_imagpath = '/upload/profile_image/' . $hardPath;
          
            //$user->profile_image =  $savimagpath; 

        }
        else{
            $sav_profile_imagpath = '';
        }
        if(!empty($cover_file)){
            //$path2 = 'upload/cover_image';
           // $fileName2 = $cover_file->getClientOriginalName();
           // $cover_image = rand(10,100).'_'.$fileName2;
           // $move = $cover_file->move($path2, $cover_image);
           // $img = Image::make($cover_image)->resize(119, 120)->save($cover_image);
            \File::delete(public_path() .$user->cover_file);
            $tmpFilePath = public_path('upload/cover_image/');
            $hardPath = time().$cover_file->getClientOriginalName();
            $img = Image::make($cover_file);
            $img->fit(600, 400)->save($tmpFilePath.$hardPath);
            $sav_cover_imagpath = '/upload/cover_image/' . $hardPath;
           //$user->cover_image =  $sav_cover_imagpath;

        }
        else{
            $sav_cover_imagpath = '';
        }

        $string = Str::random(15);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        //$user->phone = $phone;
        $user->gender = $request->get('gender');
        $user->password = bcrypt($request->get('password'));
        $user->usertype = $request->get('usertype');
        $user->agent_dob = $request->get('agent_dob');
        $user->agent_location = $request->get('agent_location');
        
        $user->phone = $request->get('phone');
        $user->agent_contact2 = $request->get('agent_contact2');
        $user->agent_present_address = $request->get('agent_present_address');
        $user->agent_nid = $request->get('agent_nid');
        $user->agent_passport = $request->get('agent_passport');
        $user->agent_father = $request->get('agent_father');
        $user->agent_mother = $request->get('agent_mother');
        $user->agent_permanent_address = $request->get('agent_permanent_address');
        $user->sellertype = $request->get('sellertype');
        $user->seller_present_address = $request->get('seller_present_address');
        $user->seller_permanent_address = $request->get('seller_permanent_address');
        $institue = $request->get('institue');
        $agent_result = $request->get('agent_result');
        $agent_degree = $request->get('agent_degree');
         //$user->company = $request->get('company'); // new
         //$user->position = $request->get('position'); // new 
         //$user->department = $request->get('department'); // new 
        $user->yrs_exp=$request->get('yrs_exp');
        $user->linkedin = $request->get('linkedin');
        $user->google = $request->get('google');
        $user->facebook = $request->get('facebook');
        $user->profile_image = $sav_profile_imagpath; // new 
       // dd($user->profile_image);
        $user->cover_image = $sav_cover_imagpath; // new
        $user->confirmation_code = $string;
        $user->accecpt = $request->get('tram_condition');
        $user->save();
        
         // Institue
        // $institue = $request->get('institue');
        // $agent_result = $request->get('agent_result');
        // $agent_degree = $request->get('agent_degree');
        // $i = 0;
        // foreach($institue as $institue_data){
        //     $education = New Education(); 
        //     $education->user_id = $user->id;
        //     $education->institue = $institue_data;
        //     $education->agent_result = $agent_result[$i];
        //     $education->agent_degree = $agent_degree[$i];
        //     $education->save();
        //     $i++;
        // }
        // Company
        $company = $request->get('company');
        $start_date = $request->get('start_date');
        $end_date = $request->get('end_date');
        $position = $request->get('position');
        $department = $request->get('department');
        $j = 0;
        foreach($company as $company_data){
               $companys = New Company();
               $companys->user_id = $user->id;
               $companys->company = $company_data;
               $companys->start_date = $start_date[$j];
               $companys->end_date = $end_date[$j];
               $companys->position = $position[$j];
               $companys->department = $department[$j];
               $companys->save();
            $j++;
        }
        // // // Skill
        $skill = $request->get('skill');
        foreach($skill as $skill_data){
            //if (!empty($skill_data)){
               $skills = New Skill();
               $skills->user_id = $user->id;
               $skills->skill = $skill_data;
               $skills->save();
           // }
        }

        //Verify user
        $confirmation_code = $user->confirmation_code;
        
        $user_name = $request['name'];
        $email = $request->get('email');
        $sysEmail ="devstask@gmail.com";
        $sysCompany = "Floorfly";
        $msg_body = view('emails.verify', ['name'=>$user_name,'confirmation_code'=>$confirmation_code]);
        //$message = _render($template, $data);
        //$mail_subject = _render($subject, $data);
        $mail_subject = "Floorfly Agent Registration.";
        //$body = $message;
        $host = "smtp.gmail.com";
        $smtp_username = "devcustomer007@gmail.com";
        $stmp_password = "DEVcustomer007811";
        $port = "587";
        $secure = "tls";

        $mail = new \PHPMailer();
        try{
            $mail->isSMTP();                       // Set mailer to use SMTP
            $mail->Host = $host;                     // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                  // Enable SMTP authentication
            $mail->Username = $smtp_username;        // SMTP username
            $mail->Password = $stmp_password;        // SMTP password
            $mail->SMTPSecure = $secure;             // Enable TLS encryption,`ssl`also accepted
            $mail->Port = $port;
            $mail->setFrom($sysEmail, $sysCompany);
            $mail->addAddress($email, $user_name);     // Add a recipient
            $mail->isHTML(true);                       // Set email format to HTML
            $mail->Subject = $mail_subject;
            $mail->Body = $msg_body;
            $user_id = $user->id;
   
            if(!$mail->send()){
                $user = User::where('id', $user_id)->delete();
                $education = Education::where('user_id', $user_id)->delete();
                $company = Company::where('user_id', $user_id)->delete();
                $skill = Skill::where('user_id', $user_id)->delete();
                \Session::flash('flash_message', 'Something wrong, Please contact floorfly administrator.');
                return \Redirect::back();
            }else{
                $name = $request->get('name');
                return redirect('agent/success/'.$name);
            }
            // Set Mail SMTP end
        }
        catch(\phpmailerException $e){
            \Session::flash('flash_message', 'Something wrong, Please contact floorfly administrator.');
            return \Redirect::back();
        }
    }
    public function agent_success($name){
        //\Session::flash('flash_message', 'Congratulations '. $name .' !! You are now registered with FloorFly. Please check your email and verify your account.');
        return view('pages.agent_success',compact('name'));
    }
    public function send_otp(Request $request)
    {
       
        $otp = rand(111111, 999999);
        $contact = $request->get('phone');
        $message = 'Your FloorFly verification code is '.$otp.'; Use this code to verify your account and further login as your password. Please do not share the code with others.';

        $api_key = "R60000405dde0e1493e478.98960836";
        $senderid = "FloorFly";
        $URL = "http://bangladeshsms.com/smsapi?api_key=" . urlencode($api_key) . "&type=text&contacts=" . urlencode($contact) . "&senderid=" . urlencode($senderid) . "&msg=" . urlencode($message);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $URL);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_exec($ch);
        try {
            $output = $content=curl_exec($ch);
            $varify = new Varify();
            $varify->otp = $otp;
            $varify->save();
            $output = 'success';
        } catch (Exception $ex) {
            $output = "-100";
        }
        return $output;
    }
    public function check_otp(Request $request)
    {
        $verify_otp = $request->get('verify_otp');
        $varify_check = Varify::where('otp', $verify_otp)->first();
        if($varify_check){
           $output = 'success';
           $varify_delete = Varify::where('otp', $verify_otp)->delete();
        }
        else{
            $output = 'error';
        }
        return $output;
    }

    // seller / user register
    public function sellerRegister(Request $request){
        //dd($request->all());
       if(getcong('recaptcha')==1) 
       { 
            if($request->get('sellertype')=='individual'){
                $v=Validator::make($request->all(),[
                    'name' => 'required',
                    'phone' => 'required|digits:11|numeric',
                    'email' => 'required|email|unique:users',
                    'verification_code' => 'required|min:6',
                    'seller_present_address' => 'required',
                    'seller_permanent_address' => 'required',
                    'g-recaptcha-response' => 'required|captcha'
                ]);
            }
            if($request->get('sellertype')=='company'){
                $v=Validator::make($request->all(),[
                    'name' => 'required',
                    'phone' => 'required|digits:11|numeric',
                    'email' => 'required|email|unique:users',
                    'verification_code' => 'required|min:6',
                    'company_address' => 'required',
                    'company_trade_license' => 'required',
                    'g-recaptcha-response' => 'required|captcha'
                ]);
            }
        }
        else
        {
            if($request->get('sellertype')=='individual'){
                $v=Validator::make($request->all(),[
                    'name' => 'required',
                    'phone' => 'required|digits:11|numeric',
                    'email' => 'required|email|unique:users',
                    'verification_code' => 'required|min:6',
                    'seller_present_address' => 'required',
                    'seller_permanent_address' => 'required'
                ]);
            }
            if($request->get('sellertype')=='company'){
                $v=Validator::make($request->all(),[
                    'name' => 'required',
                    'phone' => 'required|digits:11|numeric',
                    'email' => 'required|email|unique:users',
                    'verification_code' => 'required|min:6',
                    'company_address' => 'required',
                    'company_trade_license' => 'required'
                ]); 
            }
        }
        if($v->fails()){
            return back()->withErrors($v)->withInput();
        }
        
   
        $string = Str::random(15); 
        $user = new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->gender = $request->get('gender');
        $user->usertype = $request->get('usertype');
        $user->password = bcrypt($request->get('verification_code'));
        $user->confirmation_code = $string;
        $user->sellertype = $request->get('sellertype');
        $user->seller_present_address = $request->get('seller_present_address');
        $user->seller_permanent_address = $request->get('seller_permanent_address');
        $user->company_address = $request->get('company_address');
        $user->company_trade_license = $request->get('company_trade_license');
        $user->save();


    
        //Verify user
        $confirmation_code = $user->confirmation_code;
        $user_name=$request['name'];
        $email = $request->get('email');
        $sysEmail ="devstask@gmail.com";
        $sysCompany = "Floorfly";
        $msg_body = view('emails.verify', ['name'=>$user_name,'confirmation_code'=>$confirmation_code]);
        //$message = _render($template, $data);
        //$mail_subject = _render($subject, $data);
        $mail_subject = "Floorfly Seller Registration.";
        //$body = $message;
        $host = "smtp.gmail.com";
        $smtp_username = "devcustomer007@gmail.com";
        $stmp_password = "DEVcustomer007811";
        $port = "587";
        $secure = "tls";

        $mail = new \PHPMailer();
        try{
            $mail->isSMTP();                       // Set mailer to use SMTP
            $mail->Host = $host;                     // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                  // Enable SMTP authentication
            $mail->Username = $smtp_username;        // SMTP username
            $mail->Password = $stmp_password;        // SMTP password
            $mail->SMTPSecure = $secure;             // Enable TLS encryption,`ssl`also accepted
            $mail->Port = $port;
            $mail->setFrom($sysEmail, $sysCompany);
            $mail->addAddress($email, $user_name);     // Add a recipient
            $mail->isHTML(true);                       // Set email format to HTML
            $mail->Subject = $mail_subject;
            $mail->Body = $msg_body;
            $user_id = $user->id;
   
            if(!$mail->send()){
                $user = User::where('id', $user_id)->delete();
                \Session::flash('flash_message', 'Something wrong, Please contact floorfly administrator.');
                return \Redirect::back();
            }else{
                \Session::flash('flash_message', trans('words.verify_account_msg'));
                return \Redirect::back();
            }
            // Set Mail SMTP end
        }
        catch(\phpmailerException $e){
            \Session::flash('flash_message', 'Something wrong, Please contact floorfly administrator.');
            return \Redirect::back();
        }


        // $data_email = array(
        //    'name' => $user_name,      
        //  'confirmation_code' => $string
        //  );    

        // if(getenv("MAIL_USERNAME"))
        // {
        //     \Mail::send('emails.verify', $data_email, function($message) use ($request){
        //         $message->to($request['email'], $request['name'])
        //         ->from(getcong('site_email'), getcong('site_name'))
        //         ->subject('Welcome to'.getcong('site_name'));
        //     });
        // }
        // \Session::flash('flash_message', trans('words.verify_account_msg'));
        // return \Redirect::back();
    }   


    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();

        //return redirect('admin/');
        return redirect('/');
    }
    
    public function confirm($code)
    {    
        $user = User::where('confirmation_code',$code)->first();
        
        $user->status = '1';    
        
        $user->save();
        
        \Session::flash('flash_message', trans('words.confirmation_msg'));
        
        return redirect('login/');
        //return view('pages.login');
    }

    public function sitemap()
    {
        $site_url=\URL::to('/'); 

        $properties = Properties::where(['status'=>'1'])->orderBy('id', 'desc')->get();

        return response()->view('pages.sitemap',compact('site_url','properties'))->header('Content-Type', 'text/xml');
    }



    //imran

    // public function legal_service()
    // {                   
    //     $leglService=Service::where(['service_category'=>'1'])->orderBy('id', 'desc')->get();
    //     return view('pages.legal_service',compact('leglService',$leglService));
    // }

    // public function property_service()
    // {                   
    //     $propertyService=Service::where(['service_category'=>'1'])->orderBy('id', 'desc')->get();
    //     return view('pages.legal_service',compact('leglService',$leglService));
    // }



    public function pcategory($slug){
        $pcategory= ServiceCategory::where('slug', $slug)->first();
        return view('pages.service-pages')->with('pcategory',$pcategory);
    }

    public function subcategory($slug){
        $subcategory= ServiceSubcategory::where('slug', $slug)->first();
        return view('pages.service-pages')->with('subcategory',$subcategory);
    }


    public function childcategory($slug){
        $childcategory= ServiceChildcategory::where('slug', $slug)->first();
        return view('pages.service-pages')->with('childcategory',$childcategory);
    }



    public function singleService($slug){

        $service= Service::where('slug', $slug)->first();
        
        // $next_id=Post::where('id','>', $post->id)->min('id');
        // $prev_id=Post::where('id','<', $post->id)->max('id');
        // $categories=Category::all();
        // $related= Post::where('category_id', '=', $post->category->id)->where('id', '!=', $post->id)->get();
        
        return view('pages.single_service')->with('service',$service);
    }

    public static function messageSend($contact, $message)
    {
        $api_key = "R60000405dde0e1493e478.98960836";
        $senderid = "FloorFly";
        $URL = "http://bangladeshsms.com/smsapi?api_key=" . urlencode($api_key) . "&type=text&contacts=" . urlencode($contact) . "&senderid=" . urlencode($senderid) . "&msg=" . urlencode($message);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $URL);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_exec($ch);
        try {
            $output = $content=curl_exec($ch);
        } catch (Exception $ex) {
            $output = "-100";
        }
        //dd($output);
        return $output;
    }


   
    
}