@extends('master')
@section('main')

<main class="app-content">

    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Employee List </h1>

        </div>
    </div>

    <a style="float: right" class="btn btn-primary" href="{{route('employee.form')}}">
        Add Employee</a> <br><br><br>
    
    <h1>Hello Employee</h1>
    </div>
</main>

@stop