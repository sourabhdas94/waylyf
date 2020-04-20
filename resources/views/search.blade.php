@extends('layouts/app')
@include('inc/nextNavbar')
@section('content')

<div class="register" id="searchPage">
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
                                    <input type="number" class="form-control" id="age" placeholder="Age *" min="18" name="age" required>
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <textarea class="form-control" placeholder="Address *" name="addr" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="Date of birth *" id="dob" name="dob" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="mob" class="form-control" placeholder="Your Phone *" value="" required />
                                </div>
                                <div class="form-group">
                                    <select required class="form-control" id="bloodG" name="blood_group">
                                        <option value="">Please select your blood group</option>
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
                                <div class="form-group">
                                    <input type="number" placeholder="Click the get Location Button *" class="form-control" id="lat" name="lat" step="0.00000000000000001" min="0" max="180" required><br>
                                    <input type="number" placeholder="Click the get Location Button *" class="form-control" id="long" name="long" step="0.0000000000000001" min="0" max="180" required>
                                </div>
                                    <a onclick="getLocation()" class="btn btn-success text-light">Get Location</a><br>
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

    @if($data ?? '' != NULL)
    <section class="mt-5">
        <div class="jumbotron col-10 mx-auto">
            <h1 class="display-6 mb-5 pb-5 text-center">Nearest suggestions</h1>
            @for($k=0; $k<count($data); $k++)
            <div class="card mb-4 p-2 pb-5">
                <div class="row mt-5 text-xl-left text-lg-left text-md-center text-sm-center">
                    <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12"><img src="{{  asset('uploads/' . $data[$k]["image_upload"]) }}" alt="" width="200px"></div>
                    <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
                    <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 pt-xl-2 pt-lg-2 pt-md-2 pt-sm-5">
                        <label><b class="pr-2"> Name:</b>  {{$data[$k]["name"]}}</label><br>
                        <label><b class="pr-2"> City:</b>  {{$data[$k]["city"]}}</label><br>
                        <label><b class="pr-2"> Address:</b>  {{$data[$k]["addr"]}}</label><br>
                        <label><b class="pr-2"> Contact number:</b>  {{$data[$k]["mob"]}}</label><br>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </section>
    @endif
</div>

<script>
    var x = document.getElementById("lat");
    var y =document.getElementById("long");
    
    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
      }
    }
    
    function showPosition(position) {
      x.value =  position.coords.latitude;
      y.value =  position.coords.longitude;
    }
</script>

@endsection