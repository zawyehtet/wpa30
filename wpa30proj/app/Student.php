<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $fillable = ["name", "address"];
	public static $rules = [
            "name"  => 'required|min:4',
            'address'   => 'required|min:4'
        ];
    //

}
