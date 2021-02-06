<?php

namespace App\Http\Controllers\OPMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function departmentList()
    {
        return view('Department.departmentList');
    }
    public function departmentForm()
    {
         $departments = Department::all();
        return view('Department.departmentForm',compact('departments'));
    }
    public function departmentFormSubmit(Request $request)
    {
        $departments  = Department::Create([
            'department_name'=>$request->input('department_name'),
            'description'=>$request->input('description')
        ]);
        return redirect()->route('department.list');
    }
}
