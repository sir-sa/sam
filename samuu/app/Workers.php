<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    protected $fillable =['employee_id','employee_name','employee_email','employee_phone','employee_department'];
}
