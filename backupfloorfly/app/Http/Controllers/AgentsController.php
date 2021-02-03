<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Company;
use App\Education;
use App\Properties; 
use App\Hire; 
 
use Session;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Str;

class AgentsController extends Controller
{
	public function __construct()
    {
         check_property_exp(); 
    } 

    public function index()
    {  
		$agents = User::where('usertype','Agents')->orderBy('id', 'desc')->paginate(getcong('pagination_limit'));
		//  $education= Education::where('agent_degree');		   
        return view('pages.agents',compact('agents'))->with('educations',Education::where('user_id','Agents'));
    }


    public function agent_details($id)
    {  
        //$decrypted_id = Crypt::decryptString($id);   

        $agent = User::findOrFail($id);

        $properties = Properties::where(['status'=>'1','user_id'=>$id])->orderBy('id', 'desc')->paginate(getcong('pagination_limit')); 
                   
        return view('pages.agent_details',compact('agent','properties'));
    }

    // public function AgentRegister(){

    //     return view('pages.agentregister');

    // }


    public function agenthire(Request $request)
    {
        if(!Auth::check())
         {

           Session::flash('info', 'You Must Login First');

            return redirect('login');
        }   
         
        if(Auth::user()->usertype=='Agents')
        {
            Session::flash('info', 'You Do Not Have Permission!');
        }
        else
        {
        
            
    	$data =  \Request::except(array('_token')) ;
	    
	    $inputs = $request->all();
	   
	    $rule=array(
            'agent_name' => 'required',
            'agent_email' => 'required',
            );
	    
	   	 $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {       
                Session::flash('info', 'name,email and message field are required');    
                return redirect()->back()->withErrors($validator->messages());

        } 
        
        // $user_id=Auth::user()->id;
        // $user = User::where('id',$user_id)->get();
   
    	$hireenquire = new Hire;
    	
    	$hireenquire->agent_id = $inputs['agent_id'];
    	$hireenquire->agent_name = $inputs['agent_name'];
    	$hireenquire->agent_email = $inputs['agent_email'];
        $hireenquire->agent_phone = $inputs['agent_phone'];
        
        $hireenquire->seller_id = Auth::user()->id;;
        $hireenquire->seller_name = Auth::user()->name;
        $hireenquire->seller_email = Auth::user()->email;
        $hireenquire->seller_phone = Auth::user()->phone;
        $hireenquire->sellertype = Auth::user()->sellertype;

    	
		 
	    $hireenquire->save();
	    
	    Session::flash('success', 'Confirmation Send Successfully. Our team will contact you as soon as possible.');

         return \Redirect::back();

        } 
    	 
    }
   
}
