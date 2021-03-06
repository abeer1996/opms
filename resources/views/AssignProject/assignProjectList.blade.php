@extends('master')
@section('main')

<main class="app-content">
<div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Assign Project List </h1>
        </div>
    </div>
    <a style="float: right" class="btn btn-primary" href="{{route('assign.projectform')}}">
        Assign Project</a> <br><br><br>

        <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Project Name</th>
                                <th>Employee Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($assignprojects as $key=>$assignproject)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$assignproject->ProjectRelation->project_name}}</td>
                                <td>{{$assignproject->EmployeeRelation->name}}</td>
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