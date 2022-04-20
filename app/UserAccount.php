<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{
     // protected $fillable = ['name', 'email', 'id_number', 'profile'];
     // protected $hidden = ['password'];
     // protected $dates = ['created_at', 'updated_at'];
	protected $table = 'users';
}
