<?php

namespace App\Http\Controllers\OPMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function projectList()
    {
        return view('Project.projectList');
    }
    public function projectForm()
    {
        return view('Project.projectForm');
    }
    

}
