<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Lead;


class ApiController extends Controller
{
    public function insertUsers(Request $request)
    {
        $check = User::where('email', $request->get('email'))->first();
        if($check){
            return 1;
        }
        $user = New User();
        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->short_code = gen_team_member_short_code($request->get('first_name') . " ". $request->get('last_name'));
        $user->code =  rand(11111, 99999);
        $user->gender_id = 1;
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->birth_date = $request->get('agent_dob');
        $user->phone = $request->get('phone');
        $user->agent_contact2 = $request->get('agent_contact2');
        $user->seller_present_address = $request->get('seller_present_address');
        $user->seller_permanent_address = $request->get('seller_permanent_address');
        $user->agent_present_address = $request->get('agent_present_address');
        $user->agent_permanent_address = $request->get('agent_permanent_address');
        $user->agent_nid = $request->get('agent_nid');
        $user->agent_passport = $request->get('agent_passport');
        $user->agent_father = $request->get('agent_father');
        $user->agent_mother = $request->get('agent_mother');
        $user->company_address = $request->get('company_address');
        $user->company_trade_license = $request->get('company_trade_license');
        $user->job_title = $request->get('job_title');
        $user->facebook = $request->get('facebook');
        $user->linked_in = $request->get('linked_in');
        $user->photo = $request->get('job_title');
        $user->about = $request->get('about');
        $user->accecpt = $request->get('accecpt');
        $save = $user->save();
        if($save){
        	return 2;
        }
        else{
        	return 0;
        }
    }
    public function inquiries_approved(Request $request){
        $check = Lead::where('email', $request->get('email'))->first();
        if($check){
            return 1;
        }
        // $enquire = New Enquire();
        $lead = New Lead();
        $lead->property_id =  $request->get('property_id');
        $lead->enquiry_property =  $request->get('enquiry_property');
        $lead->verify_user_id = $request->get('verify_user_id');
        $lead->first_name = $request->get('name');
        $lead->last_name = '';
        $lead->email = $request->get('email');
        $lead->phone = $request->get('phone');
        $lead->property_size_form = $request->get('property_size_form');
        $lead->property_size_to = $request->get('property_size_to');
        $lead->property_location = $request->get('property_location');
        $lead->property_status = $request->get('property_status');
        $lead->budget = $request->get('budget');
        $lead->facing = $request->get('facing');
        $lead->floor_position = $request->get('floor_position');
        $lead->special_note = $request->get('special_note');
        $lead->reffered_by = $request->get('reffered_by');
        $lead->refer_person_name = $request->get('refer_person_name');
        $lead->refer_person_phone = $request->get('refer_person_phone');
        $lead->refer_person_address = $request->get('refer_person_address');
        $lead->relation = $request->get('relation');
        $lead->lead_source = $request->get('lead_source');
        $lead->verify = $request->get('verify');
        $lead->verify_date = $request->get('verify_date');
        $lead->lead_status_id =1;
        $lead->lead_source_id =1;
        $save = $lead->save();
        if($save){
            return 2;
        }
        else{
            return 0;
        }
    }
    
}
