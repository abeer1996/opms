@extends('master')
@section('main')

<main class="app-content">
<div class="row">
        <div class="col-sm-12">

            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{route('employee.fromsubmit')}}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h2 class="form-title"><span>Employee Registration Form</span></h2>
                            </div>
                            <div class="col-12">
                                <h5 class="form-title"><span>Employee Information</span></h5>
                            </div>
                          

                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Employee Name</label>
                                    <input type="string" name="name" required class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" name="designation" required class="form-control">
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="number" min="0" name="contact" required placeholder="01600000000"
                                        class="form-control">

                                    @error('contact') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group" >
                                    <label>Gender</label>
                                    <select name="gender" class="form-control">
                                        <option>Select Gender</option>
                                        <option value="female">Female</option>
                                        <option value="male">Male</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group" >
                                    <label>Department</label>
                                    <select name="department" class="form-control">
                                        <option>Select Department</option>
                                        <option value="it">IT</option>
                                        <option value="graphic">Graphic</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="string" name="email" required class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                <label>Password</label>
                                <div class="input-container-ko">
                                    <input type="password" name="password" required class="form-control">
                                    <i class="material-icons visibility">visibility_off</i>
                                </div>
                            </div>
                            </div>
                                <input type="hidden" name="role" value="employee">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>


</main>

@stop