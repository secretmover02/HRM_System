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
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view ('/user_employee.index' );
    }
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
       return view ('/user_employee.PDS.personal_information',compact('account_info', 'address1', 'address2'));
    }
    public function family_background(Request $request)
    {
        //using query builder
        $family_background = DB::table('users')
            ->join('tbl_family_background', 'users.id_number', '=', 'tbl_family_background.id_number')
            ->select('users.*', 'tbl_family_background.*')
            ->where('users.id_number', $request->get('index'))
            ->where('users.name', $request->get('ticket_id'))
            ->first();

        //using eloquent model
        $children_name = children_model::where('id_number', $request->get('index'))
                    ->get(); //get means fetching 2 or more data first means only one recore
        $child_count = $children_name->count();
        return view ('/user_employee.PDS.family_background',compact('family_background', 'children_name','child_count'));
    }
    public function educational_background(Request $request)
    {
        //using query builder
        $educational_background = DB::table('users')
            ->join('tbl_educational_background', 'users.id_number', '=', 'tbl_educational_background.id_number')
            ->select('users.*', 'tbl_educational_background.*')
            ->where('users.id_number', $request->get('index'))
            ->where('users.name', $request->get('ticket_id'))
            ->get();
        return view ('/user_employee.PDS.educational_background',compact('educational_background'));
    }
    public function civil_service_eligibilty(Request $request){
        $license = DB::table('users')
            ->join('tbl_civil_service', 'users.id_number', '=', 'tbl_civil_service.id_number')
            ->select('users.*', 'tbl_civil_service.*')
            ->where('users.id_number', $request->get('index'))
            ->where('users.name', $request->get('ticket_id'))
            ->get();
        return view ('/user_employee.PDS.eligibilty',compact('license'));
    }
    public function work_experience(Request $request){
        $exp = DB::table('users')
            ->join('tbl_work_experience', 'users.id_number', '=', 'tbl_work_experience.id_number')
            ->select('users.*', 'tbl_work_experience.*')
            ->where('users.id_number', $request->get('index'))
            ->where('users.name', $request->get('ticket_id'))
            ->get();
        return view ('/user_employee.PDS.workexperience',compact('exp'));
    }
    public function work_involvement(Request $request){
        $affilation = DB::table('users')
            ->join('tbl_voluntary_work_involvement', 'users.id_number', '=', 'tbl_voluntary_work_involvement.id_number')
            ->select('users.*', 'tbl_voluntary_work_involvement.*')
            ->where('users.id_number', $request->get('index'))
            ->where('users.name', $request->get('ticket_id'))
            ->get();
        return view ('/user_employee.PDS.affiliation',compact('affilation'));
    }
    public function learning_development(Request $request){
        $training = DB::table('users')
            ->join('tbl_learning_development', 'users.id_number', '=', 'tbl_learning_development.id_number')
            ->select('users.*', 'tbl_learning_development.*')
            ->where('users.id_number', $request->get('index'))
            ->where('users.name', $request->get('ticket_id'))
            ->get();
        return view ('/user_employee.PDS.learning_development',compact('training'));
    }
}
