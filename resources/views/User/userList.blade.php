@extends('master')
@section('main')

<main class="app-content">

    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> User Details </h1>

        </div>
    </div>
   
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($users as $key=>$user)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->contact}}</td>
                                
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