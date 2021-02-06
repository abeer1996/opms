@extends('master')
@section('main')

<main class="app-content">
<div class="row">
        <div class="col-sm-12">

            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{route('project.formsubmit')}}">
                        @csrf
                        <div class="row">
                            
                            <div class="col-12">
                                <h5 class="form-title"><span>Project Information</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Project Name</label>
                                    <input type="text" name="project_name" required class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Project Description</label>
                                    <textarea name="description" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Client Name</label>
                                    <input type="text" name="client_name" required class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Client Description</label>
                                    <textarea name="client_description" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>



</main>

@stop