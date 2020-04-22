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
@if($data ?? '' != NULL)
    <section class="ourDoctorsMain mt-5">
        <div class="jumbotron-fluid col-10 mx-auto">
            <h1 class="text-white font-weight-bold mt-5 mb-5 pb-5 pt-5 text-center">Nearest suggestions</h1>
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
@endsection