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
        dd($request->all());
        $users = User::create([
            
            'name'=>$request->input('name'),
            'contact'=>$request->input('contact'),
            'gender'=>$request->input('gender'),
            'department'=>$request->input('department'),
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->input('password')),
            'role'=>$request->input('role')
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
        $managers = Manager::create([
            
            'name'=>$request->input('name'),
            'contact'=>$request->input('contact'),
            'gender'=>$request->input('gender'),
            'department'=>$request->input('department'),
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->password),
            'role'=>$request->input('role')
        ]);
        return redirect()->route('manager.list');

    }
}
