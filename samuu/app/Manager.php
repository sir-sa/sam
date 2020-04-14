<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $fillable =['manager_id','manager_name','manager_department','manager_role'];
}
