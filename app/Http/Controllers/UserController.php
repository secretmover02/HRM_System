<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserAccount;
use App\user_info;
use App\address_model;
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
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [            
        'fname' => 'required|string|max:255',
        'lname' => 'required|string|max:255',
        'id_number' => 'required|string|max:20|unique:users',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6'
        ]);

        //short handed method of communicating in table to db without using Model
       $query1 = DB::table('users')->insert([
        'name'=>$request->input('fname'). ' '.$request->input('lname'),
        'email'=>$request->input('email'),
        'id_number'=>$request->input('id_number'),
        'password'=>bcrypt($request->input('password')),
        'profile'=>'public/img/avatar5.png'
       ]);
       // //end of shorthanded

       // //for table user infor
       $query2 = user_info::insert([
        'id_number' => $request->input('id_number'),
        'division_code' => $request->input('division_code'),
        'fname' => $request->input('fname'),
        'mname' => $request->input('mname'),
        'lname' => $request->input('lname')
       ]);
       //for table address
       $query3 = address_model::insert(['id_number'=>$request->input('id_number'), 'type'=>'residential']);
       $query3 = address_model::insert(['id_number'=>$request->input('id_number'), 'type'=>'permanent']);

       // for table family_background
       $query4 = family_background_model::insert(['id_number'=>$request->input('id_number')]);

       // for table educational background disable this feature 
       $query5 = educational_background_model::insert(['id_number'=>$request->input('id_number'), 'level'=>'elementary']);
       $query5 = educational_background_model::insert(['id_number'=>$request->input('id_number'), 'level'=>'secondary']);
       $query5 = educational_background_model::insert(['id_number'=>$request->input('id_number'), 'level'=>'vocational']);
       $query5 = educational_background_model::insert(['id_number'=>$request->input('id_number'), 'level'=>'college']);
       $query5 = educational_background_model::insert(['id_number'=>$request->input('id_number'), 'level'=>'graduate studies']);

       // for table service_eligibility
       //$query6 = civil_service_model::insert(['id_number'=>$request->input('id_number')]);

       // for table work_experience
       // $query7 = work_experience_model::insert(['id_number'=>$request->input('id_number')]);

       // for table voluntary_work_involvement
       // $query8 = voluntary_work_involvement_model::insert(['id_number'=>$request->input('id_number')]);

       // for table learning_development
       // $query9 = learning_development_model::insert(['id_number'=>$request->input('id_number')]);

       // for table learning_development
       // $query10 = other_information_model::insert(['id_number'=>$request->input('id_number')]);

       // for table learning_development
       $query11 = question_model::insert(['id_number'=>$request->input('id_number')]);

       // for table children disable this feature 
       // $query12 = children_model::insert(['id_number'=>$request->input('id_number')]);

       // for table character_references
       $query13 = character_references_model::insert(['id_number'=>$request->input('id_number')]);

       if ($query1 && $query2 && $query3 && $query4 && $query11 && $query13)  {
           return redirect('/register')->with('success', 'Data has been successfully added');
       }
       else{
        return back()->with('failed', 'Something wrong');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //proper way of communicating in table to db using model view method
        $this->validate($request, ['id_number' => 'required|string|max:20']);

        //$account_info = joining_table::where('id_number', $request->input('id_number'))->first();
        $address1 = address_model::where(['id_number'=>$request->input('id_number'), 'type'=> 'residential'])->first();
        $address2 = address_model::where(['id_number'=>$request->input('id_number'), 'type'=> 'permanent'])->first();
        $account_info =  DB::table('users')
            ->join('tbl_users_info', 'users.id_number', '=', 'tbl_users_info.id_number')
            ->join('tbl_work_experience', 'users.id_number', '=', 'tbl_work_experience.id_number')
            ->select('users.*', 'tbl_users_info.*', 'tbl_work_experience.*')
            ->where('tbl_users_info.id_number', $request->input('id_number'))
            ->first();
        if (count($account_info) == 0) {
             return back()->with('failed', 'No Record(s) Found');
        }
        return view('profile', compact('account_info', 'address1', 'address2'));

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
