@extends('master')
@section('main')

<main class="app-content">
<div class="row">
        <div class="col-sm-12">

            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{route('assignproject.formsubmit')}}">
                        @csrf
                        <div class="row">
                            
                            <div class="col-12">
                                <h5 class="form-title"><span>Assign Project Information</span></h5>
                            </div>
                            
                                <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Project Name</label>
                                    <select name="project_id" class="form-control">
                                        <option>Select Project</option>
                                        @foreach($projects as $project)
                                        <option value="{{$project->id}}">{{$project->project_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                             
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Employee Name</label>
                                    <select name="user_id" class="form-control">
                                        <option>Select Employee</option>
                                        @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>



</main>

@stop