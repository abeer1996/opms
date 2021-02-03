<?php

namespace App\Http\Controllers\OPMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Manager;
use App\User;

class EmployeeController extends Controller
{
    public function EmployeeList()
    {
        return view('Employee.employeeList');
    }

    public function EmployeeForm()
    {
        $employees = Employee::all();
        return view('Employee.employeeForm', compact('employees'));
    }
    public function EmployeeFormSubmit(Request $request)
    {
        $users = User::create([
            
            'name'=>$request->input('name'),
            'contact'=>$request->input('contact'),
            'gender'=>$request->input('gender'),
            'department'=>$request->input('department'),
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->input('password')),
            'role'=>$request->input('role')
        ]);

           Employee::create([
            'user_id'=>$users->id,
            'designation'=>$request->input('designation'),
            
            ]);
           

        return redirect()->route('employee.list');
    }


    public function ManagerList()
    {
        return view('Manager.managerList');
    }
    public function ManagerForm()
    {
        $managers = Manager::all();
        return view('Manager.managerForm', compact('managers'));
    }
    public function ManagerFormSubmit(Request $request)
    {
        $users = User::create([
            
            'name'=>$request->input('name'),
            'contact'=>$request->input('contact'),
            'gender'=>$request->input('gender'),
            'department'=>$request->input('department'),
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
