@extends('site.layouts.master')

@section('content')
<!-- Start Page Title Area Area -->
<div class="page-title-area page-title-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="page-title-content">
          <h2>About Us</h2>
          <p>Who We Are, We Have an Awesome Story.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Page Title Area Area -->

<!-- Start About Area -->
<div class="about-section ptb-100 pb-0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12">
        <div class="about-text">
          <span class="sub-title">Who We Are</span>
          <h2>Interior Design Companies in the <span>United States</span></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
          <div class="quote">
            “Interior Design is making the best possible use of the Available Space
          </div>
          <a href="contact.html" class="default-btn">Contact Us <span></span></a>

          <div class="back-animation-text">Design Studio</div>
        </div>
      </div>

      <div class="col-lg-5 col-md-12">
        <div class="about-img">
          <img src="assets/img/about-img2.jpg" alt="image">
          <img src="assets/img/about-img3.jpg" alt="image">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End About Area -->

<!-- Start Offer Area -->
<section class="offer-area ptb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="offer-box">
          <div class="icon">
            <i class="flaticon-curtain"></i>
          </div>
          <h3><a href="#">Professional Design</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Quis ipsum suspendisse.</p>
          <a href="#" class="read-more-btn">Read More</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="offer-box">
          <div class="icon">
            <i class="flaticon-desktop"></i>
          </div>
          <h3><a href="#">Creative desktop</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Quis ipsum suspendisse.</p>
          <a href="#" class="read-more-btn">Read More</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
        <div class="offer-box">
          <div class="icon">
            <i class="flaticon-rulers"></i>
          </div>
          <h3><a href="#">Skilled Architecture</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Quis ipsum suspendisse.</p>
          <a href="#" class="read-more-btn">Read More</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Offer Area -->

<!-- Start Team Area -->
<section class="team-section ptb-100 bg-faf5f5">
  <div class="container">
    <div class="section-title">
      <span class="sub-title">Our Experts</span>
      <h2>Meet Our Creative Team</h2>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-team-member">
          <div class="member-image">
            <img src="assets/img/team1.jpg" alt="image">

            <ul class="social">
              <li><a href="#" target="_blank"><i class="flaticon-facebook-logo"></i></a></li>
              <li><a href="#" target="_blank"><i class="flaticon-twitter"></i></a></li>
              <li><a href="#" target="_blank"><i class="flaticon-instagram"></i></a></li>
              <li><a href="#" target="_blank"><i class="flaticon-linkedin"></i></a></li>
            </ul>
          </div>

          <div class="member-content">
            <h3>Suzan Lois</h3>
            <span>CEO & Founder</span>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-team-member">
          <div class="member-image">
            <img src="assets/img/team2.jpg" alt="image">

            <ul class="social">
              <li><a href="#" target="_blank"><i class="flaticon-facebook-logo"></i></a></li>
              <li><a href="#" target="_blank"><i class="flaticon-twitter"></i></a></li>
              <li><a href="#" target="_blank"><i class="flaticon-instagram"></i></a></li>
              <li><a href="#" target="_blank"><i class="flaticon-linkedin"></i></a></li>
            </ul>
          </div>

          <div class="member-content">
            <h3>Rose Alpha</h3>
            <span>Manager</span>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
        <div class="single-team-member">
          <div class="member-image">
            <img src="assets/img/team3.jpg" alt="image">

            <ul class="social">
              <li><a href="#" target="_blank"><i class="flaticon-facebook-logo"></i></a></li>
              <li><a href="#" target="_blank"><i class="flaticon-twitter"></i></a></li>
              <li><a href="#" target="_blank"><i class="flaticon-instagram"></i></a></li>
              <li><a href="#" target="_blank"><i class="flaticon-linkedin"></i></a></li>
            </ul>
          </div>

          <div class="member-content">
            <h3>Rosanna Pattie</h3>
            <span>Architect</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Team Area -->

@endsection
