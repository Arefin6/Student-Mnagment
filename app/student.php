<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
     protected $fillable = [
	 
        'name','student_id','img','student_phone','student_email','father_name','mother_name',
		
		'department','address','admition_year'
    ];
}
