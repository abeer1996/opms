<?php

namespace App\Http\Controllers\OPMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\AssignProject;
use App\User;

class ProjectController extends Controller
{
    public function projectList()
    {
        $projects = Project::all();
        return view('Project.projectList', compact('projects'));
    }
    public function projectForm()
    {
        $projects = Project::all();
        return view('Project.projectForm', compact('projects'));
    }
    public function projectFormSubmit(Request $request)
    {
        $projects = Project::create([
            'project_name'=>$request->input('project_name'),
            'description'=>$request->input('description'),
            'client_name'=>$request->input('client_name'),
            'client_description'=>$request->input('client_description')
        ]);
        return redirect()->route('project.list');
    }

    public function assignProjectList()
    {
        $assignprojects = AssignProject::with('ProjectRelation')->with('EmployeeRelation')->get();
        return view('AssignProject.assignProjectList',compact('assignprojects'));
    }
    public function assignProjectForm()
    {
        $assignprojects = AssignProject::all();
        $projects = Project::all();
        $users = User::all()->where('role','employee');
        return view('AssignProject.assignProjectForm', compact('assignprojects','projects','users'));
    }
    public function assignProjectFormSubmit(Request $request)
    {
        $assignprojects = AssignProject::create([
            'project_id'=>$request->input('project_id'),
            'user_id'=>$request->input('user_id')
        ]);
        return redirect()->route('assign.list');
    }
}
