<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssignProject extends Model
{
    protected $guarded=[];

    public function ProjectRelation()
    {
        return $this->belongsTo(Project::class,'project_id','id');
    }
    public function EmployeeRelation()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    
}
