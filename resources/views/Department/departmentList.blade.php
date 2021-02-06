@extends('master')
@section('main')

<main class="app-content">
<div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Department List </h1>
        </div>
    </div>
    <a style="float: right" class="btn btn-primary" href="{{route('department.form')}}">
        Add Department</a> <br><br><br>


        <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Department Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($departments as $key=>$department)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$department->department_name}}</td>
                                <td>{{$department->description}}</td>
                                <td>
                                    <a class="btn btn-warning" href="#">Edit</a>
                                    <a class="btn btn-danger" href="">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>



</main>

@stop