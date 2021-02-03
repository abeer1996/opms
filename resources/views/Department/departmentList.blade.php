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
</main>

@stop