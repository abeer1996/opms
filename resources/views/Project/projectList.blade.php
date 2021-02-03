@extends('master')
@section('main')

<main class="app-content">
<div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Project List </h1>
        </div>
    </div>
    <a style="float: right" class="btn btn-primary" href="{{route('project.form')}}">
        Add Project</a> <br><br><br>
</main>

@stop