<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



    // Login Routing
        Route::get('/login','OPMS\UserController@login')->name('login');
        Route::post('/login','OPMS\UserController@loginProcess')->name('login.process');


        Route::group(['middleware'=>['auth','CheckAdmin']], function(){
        
        Route::get('/admin', function(){
            return view('home');
        });

    // Logout Routing
        Route::get('/logout','OPMS\UserController@logout')->name('logout');



        Route::group(['namespace'=>'OPMS'], function(){


        Route::get('/','HomeController@dashboard')->name('dashboard');

        // User Routing
        Route::get('/UserList','UserController@UserList')->name('user.list');
    
        // Employee Routing
        Route::get('/employeeList','EmployeeController@EmployeeList')->name('employee.list');
        Route::get('/employeeForm','EmployeeController@EmployeeForm')->name('employee.form');
        Route::post('/employeeFormSubmit','EmployeeController@EmployeeFormSubmit')->name('employee.fromsubmit');
        
        // Manager Routing
        Route::get('/managerList','EmployeeController@ManagerList')->name('manager.list');
        Route::get('/managerForm','EmployeeController@ManagerForm')->name('manager.form');
        Route::post('/managerFormSubmit','EmployeeController@ManagerFormSubmit')->name('manager.formsubmit');
        
        // Department Routing
        Route::get('/departmentList','DepartmentController@departmentList')->name('department.list');
        Route::get('/departmentForm','DepartmentController@departmentForm')->name('department.form');
        Route::post('/departmentFormSubmit','DepartmentController@departmentFormSubmit')->name('department.formsubmit');
        
        // Project Routing
        Route::get('/projectList','ProjectController@projectList')->name('project.list');
        Route::get('/projectForm','ProjectController@projectForm')->name('project.form');
        Route::post('/projectFormSubmit','ProjectController@projectFormSubmit')->name('project.formsubmit');
        
        // Assign Project
        Route::get('/project/assignProjectList','ProjectController@assignProjectList')->name('assign.list');
        Route::get('/project/assignProjectForm','ProjectController@assignProjectForm')->name('assign.projectform');
        Route::post('/project/assignProjectFormSubmit','ProjectController@assignProjectFormSubmit')->name('assignproject.formsubmit');
    });


    });

    

    


