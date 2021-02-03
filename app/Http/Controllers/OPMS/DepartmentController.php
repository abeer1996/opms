<?php

namespace App\Http\Controllers\OPMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function departmentList()
    {
        return view('Department.departmentList');
    }
    public function departmentForm()
    {
        return view('Department.departmentForm');
    }
}
