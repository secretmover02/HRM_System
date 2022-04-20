<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_info extends Model
{
     // protected $fillable = ['id_number', 'lname', 'fname', 'name_extension', 'birth_date', 'place_birth', 'sex', 'civil_status', 'height', 'weight', 'blood_type', 'gsis_no', 'pag_ibig_no', 'philhealth_no', 'sss_no', 'tin_no', 'agency_employee_no'];
     // protected $dates = ['created_at', 'updated_at'];
	protected $table = 'tbl_users_info';
}
