@extends('layouts/app')
@include('inc/nextNavbar')
@section('content')

<div class="register">
    <div class="row mt-5 pt-5">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 register-left">
            <img src="{{asset('img/blood.png')}}" alt="" class="img-fluid">
            <h3>Welcome</h3>
            <p>You are 30 seconds away from registration process</p>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 register-right">
            <form action="searchcontroller" method="POST">
                @csrf
                <div class="tab-content" id="myTabContent">               
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading text-center pb-5 pt-5">Search for Blood</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Enter name *" name="name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="state" placeholder="State *" name="state" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="city" placeholder="City *" name="city" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" id="pincode" placeholder="PINCode *" name="pincode" required>
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <textarea class="form-control" placeholder="Address *" name="addr" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pwd">Date of birth:</label>
                                    <input type="date" class="form-control" id="dob" name="dob" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="mob" class="form-control" placeholder="Your Phone *" value="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="bloodG" name="blood_group" required>
                                        <option class="hidden"  selected disabled>Please select your blood group</option>
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>O+</option>
                                        <option>O-</option>
                                        <option>AB+</option>
                                        <option>AB-</option>
                                    </select>
                                </div>
                                <div class="form-group form-check text-center pt-2">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember" required> Terms and Conditions
                                    </label>
                                </div>
                                <input type="submit" class="btnRegister"  value="Search"/>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


    @endsection