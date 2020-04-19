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
                <form action="registercontroller" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading text-center pb-5 pt-5">Want To Be A Donor!</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Full Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="state" class="form-control" placeholder="State *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="city" class="form-control" placeholder="City *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="pincode" class="form-control"  placeholder="Pincode *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="addr" class="form-control" placeholder="Locality *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="donated">
                                            <option class="hidden"  selected disabled>Have you donated blood before ?</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline"> 
                                                <input type="radio" name="gender" value="male" checked>
                                                <span> Male </span> 
                                            </label>
                                            <label class="radio inline"> 
                                                <input type="radio" name="gender" value="female">
                                                <span>Female </span> 
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="image_upload">Upload your photo :</label>
                                        <input type="file" accept=".jpg,.png" class="form-control-file" id="image_upload" name="image_upload" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="dob" placeholder="Date of Birth *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="number" minlength="10" maxlength="10" name="mob" class="form-control" placeholder="Your Phone *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="blood_group">
                                            <option class="hidden"  selected disabled>Blood Group:</option>
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
                                    {{-- <div class="form-group">
                                    <input type="number" placeholder="Click the get Location Button *" class="form-control" id="lat" name="lat" step="0.00000000000001" min="0" max="180" required><br>
                                    <input type="number" placeholder="Click the get Location Button *" class="form-control" id="long" name="long" step="0.0000000000001" min="0" max="180" required>
                                    </div> --}}
                                    {{-- <a onclick="getLocation()" class="btn btn-success text-light">Get Location</a><br> --}}
                                    <div class="form-group">
                                        <label for="id_proof">Identification proof :</label>
                                        <input type="file" accept=".jpg,.png,.pdf" class="form-control-file" id="id_proof" name="id_proof" required>
                                    </div>
                                    <div class="form-group form-check text-center pt-2">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="remember" required> Terms and Conditions
                                        </label>
                                    </div>
                                    <input type="submit" class="btnRegister"  value="Register"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </div>
</div>

    @endsection