<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $guarded=[];

    public function departmentmanRelations()
    {

    return $this->belongsTo(Department::class,'department_id','id');
    
     
    }
}
