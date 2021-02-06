<?php

namespace App\Http\Controllers\OPMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function projectList()
    {
        return view('Project.projectList');
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
        return view('AssignProject.assignProjectList');
    }
    public function assignProjectForm()
    {
        return view('AssignProject.assignProjectForm');
    }
}
