<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded=[];
    
public function departmentempRelation()
{
    return $this->belongsTo(Department::class,'department_id','id');
}
    
}
