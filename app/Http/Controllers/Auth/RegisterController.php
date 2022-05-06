<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\user_info;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
//add ko
use Illuminate\Support\Facades\DB;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'id_number' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // return User::create([
        //     'name' => $data['name'],
        //     'id_number' => $data['id_number'],
        //     'email' => $data['email'],
        //     'password' => bcrypt($data['password']),
        // ]);

        $query = DB::table('tbl_users_info')->insert([
        'id_number' => $data->['id_number'],
        'lname' => 'NA',
        'fname' => 'NA',
        'mname' => 'NA',
        'name_extension' => 'NA',
        'birth_date' => 'NA',
        'place_birth' => 'NA',
        'sex' => 'NA',
        'civil_status' => 'NA',
        'height' => 'NA',
        'weight' => 'NA',
        'blood_type' => 'NA',
        'gsis_no' => 'NA',
        'pag_ibig_no' => 'NA',
        'philhealth_no' => 'NA',
        'sss_no' => 'NA',
        'tin_no' => 'NA',
        'agency_employee_no' => 'NA'
       ]);

         if ($query) {
           return redirect('/home')->with('success', 'Data has been successfully added');
       }
    }
}
