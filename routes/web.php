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

Route::get('/','OPMS\HomeController@dashboard')->name('dashboard');

// Employee Routing
Route::get('/employeeList','OPMS\EmployeeController@EmployeeList')->name('employee.list');
Route::get('/employeeForm','OPMS\EmployeeController@EmployeeForm')->name('employee.form');
Route::post('/employeeFormSubmit','OPMS\EmployeeController@EmployeeFormSubmit')->name('employee.fromsubmit');

// Manager Routing
Route::get('/managerList','OPMS\EmployeeController@ManagerList')->name('manager.list');
Route::get('/managerForm','OPMS\EmployeeController@ManagerForm')->name('manager.form');
Route::post('/managerFormSubmit','OPMS\EmployeeController@ManagerFormSubmit')->name('manager.formsubmit');

// Department Routing
Route::get('/departmentList','OPMS\DepartmentController@departmentList')->name('department.list');
Route::get('/departmentForm','OPMS\DepartmentController@departmentForm')->name('department.form');
Route::post('/departmentFormSubmit','OPMS\DepartmentController@departmentFormSubmit')->name('department.formsubmit');

// Project Routing
Route::get('/projectList','OPMS\ProjectController@projectList')->name('project.list');
Route::get('/projectForm','OPMS\ProjectController@projectForm')->name('project.form');
Route::post('/projectFormSubmit','OPMS\ProjectController@projectFormSubmit')->name('project.formsubmit');

// Assign Project
Route::get('/project/assignProjectList','OPMS\ProjectController@assignProjectList')->name('assign.list');
Route::get('/project/assignProjectForm','OPMS\ProjectController@assignProjectForm')->name('assign.projectform');