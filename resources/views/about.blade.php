@extends('layouts/app')
@include('inc/nextNavbar')
@section('content')
<section>
<div class="container mb-5 mt-3">

    <header class="section-header1">
      <h3>About Us</h3> <br> <br>
      {{-- <p>WayLyf is a social assist platform that connects people who need blood with blood donors for good cause. We keep a list of donors of different blood groups 
        according to location. When needed we suggest the nearest donor to recipient for blood donation.  </p> --}}
        <p>WayLyf is a social assist platform that connects people who need blood and the ones who are willing to donate blood 
          for good cause. A list of donors of different blood groups according to location is maintained. Whenever required, the nearest doctor is 
          suggested to the recipient to carry out the blood donation. It is also a platform to spread awareness among society with the involvement
          of various medical experts.
        </p>
    </header>

    <div class="row about-container">

      <div class="col-lg-6 content order-lg-1 order-2">
        <p>
            </p>

        <div class="icon-box wow fadeInUp">
          <!-- <div class="icon"><i class="fa fa-shopping-bag"></i></div> -->
          <h4 class="title"><a href="">Donor</a></h4>
          <p class="description"> Donors who are willing to part themself in this noble cause can register themselves as a Donor. When a person in need of blood will contact with you via calling or Whatsapp.</p>
        </div>

        <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
          <!-- <div class="icon"><i class="fa fa-photo"></i></div> -->
          <h4 class="title"><a href="">Recipient</a></h4>
          <p class="description">Person who is in need of blood, go to search for donor and give information about the tpe of blood needed 
            and the place where it needed to be donated, etc. A list of Donors with their phone number near to the place will appear you can connect with them directly via calling or Whatsapp
            If the donor is agrees to donate,just select the donor has accepted.If not agrees you can connect with other donors from the list.
           </p>
        </div>


      </div>

      <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
        <img src="img/about-img.svg" class="img-fluid" alt="">
      </div>
    </div>

    <div class="row about-extra">
      <div class="col-lg-6 wow fadeInUp">
        <img src="img/welcome.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
        <h2>Mission</h2>
        <p>
       
        </p>
        <p>

          {{-- Our Mission is to provide effortless connection of people in need of blood and donors who are willing to contribute in th good cause we have started.
           --}}
           To provide an effortless and reliable connection between the blood recipients and blood donors and to spread awareness incorporating medical
           experts in our platform.

        </p>
      </div>
    </div>

    <div class="row about-extra">
      <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
        <img src="img/about-extra-2.svg" class="img-fluid" alt="">
      </div>

      <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
        <h2 class="mt-5">Vision</h2>
       
      
        <p>
          To work for achieving full potential of health and well-being in the society and spreading positive changes by forwarding a helping hand.</p>
      </div>
      
    </div>

  </div>
</section>


<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

@endsection