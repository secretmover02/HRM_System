<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_info;
use App\address_model;
use App\UserAccount;
use App\family_background_model;
use App\educational_background_model;
use App\civil_service_model;
use App\work_experience_model;
use App\voluntary_work_involvement_model;
use App\learning_development_model;
use App\other_information_model;
use App\question_model;
use App\children_model;
use App\character_references_model;
use Illuminate\Support\Facades\DB;
class Update_PDS extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function personal_info(Request $request)
    {
        $account_info =  DB::table('users')
            ->join('tbl_users_info', 'users.id_number', '=', 'tbl_users_info.id_number')
            ->select('users.*', 'tbl_users_info.*')
            ->where('users.id_number', $request->get('index'))
            ->where('users.name', $request->get('ticket_id'))
            ->first();

        $address1 =  DB::table('users')
            ->join('tbl_address', 'users.id_number', '=', 'tbl_address.id_number')
            ->select('users.*', 'tbl_address.*')
            ->where('users.id_number', $request->get('index'))
            ->where('users.name', $request->get('ticket_id'))
            ->where('tbl_address.type', 'permanent')
            ->first();
        $address2 =  DB::table('users')
            ->join('tbl_address', 'users.id_number', '=', 'tbl_address.id_number')
            ->select('users.*', 'tbl_address.*')
            ->where('users.id_number', $request->get('index'))
            ->where('users.name', $request->get('ticket_id'))
            ->where('tbl_address.type', 'residential')
            ->first();
       return view ('/user_employee.update_PDS.personal_info_update',compact('account_info', 'address1', 'address2'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //update personal information
    public function update_personalinfo(Request $request)
    {
        //using eloquent model need updated_at column and created_at column
        $update_info = user_info::where('id_number', $request->input('id_number'))
                           ->update(['fname'=>$request->input('fname'),
                                     'mname'=>$request->input('mname'),
                                     'lname'=>$request->input('lname'),
                                     'name_extension'=>$request->input('extension'),
                                     'birth_date'=>$request->input('birth_date'),
                                     'sex'=>$request->input('sex'),
                                     'civil_status'=>$request->input('civil_status'),
                                     'citizenship'=>$request->input('citizenship'),
                                     'mobile_no'=>$request->input('mobile_no'),
                                     'telephone_no'=>$request->input('telephone_no'),
                                     'height'=>$request->input('height'),
                                     'weight'=>$request->input('weight'),
                                     'gsis_no'=>$request->input('gsis_no'),
                                     'pag_ibig_no'=>$request->input('pag_ibig_no'),
                                     'philhealth_no'=>$request->input('philhealth_no'),
                                     'sss_no'=>$request->input('sss_no'),
                                     'tin_no'=>$request->input('tin_no'),
                                     'agency_employee_no'=>$request->input('agency_employee_no'),
                                     'blood_type'=>$request->input('blood_type'),
                                     'contact_person_name'=>$request->input('contact_person_name'),
                                     'contact_person_address'=>$request->input('contact_person_address'),
                                     'contact_person_number'=>$request->input('contact_person_number')]);
        //using query builder
        $update_address1 = DB::table('tbl_address')->where(['id_number'=> $request->input('id_number'), 'type'=>'permanent'])
                                        ->update(['house_no'=>$request->input('house_no1'),
                                                  'street'=>$request->input('street1'),
                                                  'subdivision'=>$request->input('subdivision1'),
                                                  'brgy'=>$request->input('brgy1'),
                                                  'city'=>$request->input('city1'),
                                                  'province'=>$request->input('province1'),
                                                  'zipcode'=>$request->input('zipcode1')]);
        $update_address2 = DB::table('tbl_address')->where(['id_number'=> $request->input('id_number'), 'type'=>'residential'])
                                        ->update(['house_no'=>$request->input('house_no2'),
                                                  'street'=>$request->input('street2'),
                                                  'subdivision'=>$request->input('subdivision2'),
                                                  'brgy'=>$request->input('brgy2'),
                                                  'city'=>$request->input('city2'),
                                                  'province'=>$request->input('province2'),
                                                  'zipcode'=>$request->input('zipcode2')]);
        if ($request->hasfile('profile')) {
            $thispic = $request->file('profile');
            $extension = $thispic->getClientOriginalExtension();//getting original extension
            $rename_file = $request->input('lname').'.'.$extension;
            $thispic->move('public/img/',$rename_file);
            $profile_link = 'public/img/' .$rename_file;
            $updateusers = DB::table('users')->where('id_number', $request->input('id_number'))
                            ->update(['profile'=> $profile_link]);
        }
        return back()->with('success', 'Update successfully');
                    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
