<?php

namespace App\Http\Controllers\OPMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Manager;
use App\Models\Department;
use App\User;

class EmployeeController extends Controller
{
    public function EmployeeList()
    {
        $users = User::with('departmentempRelation')->where('role','employee')->get();
        return view('Employee.employeeList', compact('users'));
    }

    public function EmployeeForm()
    {
        $employees = Employee::all();
        $departments = Department::all();
        return view('Employee.employeeForm', compact('employees','departments'));
    }
    public function EmployeeFormSubmit(Request $request)
    {
        $users = User::create([
            
            'name'=>$request->input('name'),
            'contact'=>$request->input('contact'),
            'gender'=>$request->input('gender'),
            'department_id'=>$request->input('department_id'),
            'designation'=>$request->input('designation'),
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->input('password')),
            'role'=>$request->input('role')
        ]);

           Employee::create([
            'user_id'=>$users->id
            
            
            ]);
           

        return redirect()->route('employee.list');
    }


    public function ManagerList()
    {
        $users = User::with('departmentmanRelations')->where('role','manager')->get();
        return view('Manager.managerList', compact ('users'));
    }
    public function ManagerForm()
    {
        $managers = Manager::all();
        $departments = Department::all();
        return view('Manager.managerForm', compact('managers','departments'));
    }
    public function ManagerFormSubmit(Request $request)
    {
        $users = User::create([
            
            'name'=>$request->input('name'),
            'contact'=>$request->input('contact'),
            'gender'=>$request->input('gender'),
            'department_id'=>$request->input('department_id'),
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->password),
            'role'=>$request->input('role')
        ]);
        Manager::create([
            'user_id'=>$users->id,
        ]);
        return redirect()->route('manager.list');

    }
}
