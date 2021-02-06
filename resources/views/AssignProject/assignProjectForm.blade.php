@extends('master')
@section('main')

<main class="app-content">
<div class="row">
        <div class="col-sm-12">

            <div class="card">
                <div class="card-body">
                    <form method="post" action="#">
                        @csrf
                        <div class="row">
                            
                            <div class="col-12">
                                <h5 class="form-title"><span>Assign Project Information</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Project Name</label>
                                    <input type="string" name="project_name" required class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Employee Name</label>
                                    <input type="string" name="employee_name" required class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>



</main>

@stop