@extends('layouts/app')
<style>
    .ourDoctorsMain {
        float: none;
        margin-top: 50px;
        display: flex;
        flex-flow: row wrap;
        align-items: stretch;
        width: 100%;
    }

    body,
    article,
    aside,
    details,
    figcaption,
    figure, 
    footer,
    div,
    header,
    menu,
    nav,
    section,
    ul,
    h1,
    h2,
    h3,
    ul,
    li,
    h6,
    form {
        margin: 0;
        padding: 0;
        border: 0;
        letter-spacing: 0.01em;
        -webkit-text-size-adjust: 100%;
        text-size-adjust: 100%;
        font-family: 'Open Sans', sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    * {
        margin: 0;
        padding: 0;
    }

    address,
    article,
    aside,
    div,
    footer,
    header,
    hgroup,
    layer,
    main,
    nav,
    section {
        display: block;
    }

    #main-wraphome {
        font-family: 'Roboto', sans-serif;
        position: relative;
        background: #eee;
    }

    html {
        display: block;
        color: text;
    }

    @media screen and (max-width: 767px) {
        width: 100%;
    }

    @media screen and (max-width: 990px) {
        width: 45%;
    }

    @media only screen and (max-width: 1025px) {
        width: 30%;
    }

    @media screen and (max-width: 1255px) {
        width: 30%;
    }

    .ourDoctors {
        /* width: 31%; */
        vertical-align: top;
        display: inline-block;
        margin-right: 22px;
        -webkit-box-shadow: 0px 6px 6px -6px rgba(102, 102, 102, 1);
        -moz-box-shadow: 0px 6px 6px -6px rgba(102, 102, 102, 1);
        box-shadow: 0px 6px 6px -6px rgba(102, 102, 102, 1);
        border-left: #223e98 solid 2px;
        margin-bottom: 70px;
        background: #fff;
        position: relative;
    }

    .ourDoctors h2 {
        font-family: 'Open Sans', sans-serif;
        color: #fff;
        font-size: 16px;
        font-weight: 550;
        line-height: 50px;
        text-transform: uppercase;
        /* background: #223e98; */
        background: #c23e0a;
        text-align: center;
        width: auto;
        padding: 0 22px;
        -webkit-border-top-left-radius: 10px;
        -moz-border-radius-topleft: 10px;
        border-top-left-radius: 10px;
        position: absolute;
        top: -49px;
        left: -2px;
    }

    h2 {
        display: block;
        font-size: 1.5em;
        margin-block-start: 0.83em;
        margin-block-end: 0.83em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        font-weight: bold;
    }

    .ourDoctors .innerDiv {
        padding: 18px 0 40px 18px;
    }

    .ourDoctors h3 {
        /* font-family: 'Open Sans', sans-serif; */
        font-family: 'Lobster';
        letter-spacing: 4px;
        color: #000;
        font-size: 16px;
        font-weight: 550;
        min-height: 24px;
        line-height: 24px;
        text-transform: uppercase;
        padding-bottom: 10px;
    }

    h3 {
        display: block;
        font-size: 1.17em;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        font-weight: bold;
    }

</style>
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
    <section class="ourDoctorsMain mt-5">
        <div class="jumbotron-fluid col-10 mx-auto">
            <h1 class="text-white font-weight-bold mt-5 mb-5 pb-5 text-center">Nearest suggestions</h1>
            @for($k=0; $k<count($data); $k++)
            <div class="ourDoctors mb-5 p-2 mt-5">
                <div class="row innerDiv mt-5 text-xl-left text-lg-left text-md-center text-sm-center">
                    <h2>{{$data[$k]["name"]}}</h2>
                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12"><img src="{{  asset('uploads/' . $data[$k]["image_upload"]) }}" alt="" width="200px"><br></div><br>
                    <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
                    <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 pt-xl-2 pt-lg-2 pt-md-2 pt-sm-5">
                       
                        <h3><b class=""> City:</b>  {{$data[$k]["city"]}}</h3><br>
                        <h3><b class="pr-2"> Address:</b>  {{$data[$k]["addr"]}}</h3><br>
                        <h3><b class="pr-2"> Contact number:</b>  {{$data[$k]["mob"]}}</h3><br>
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