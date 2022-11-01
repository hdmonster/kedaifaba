@extends('site.layouts.master')

@section('content')
<!-- Start Main Banner Area -->
<div class="home-slides-two owl-carousel owl-theme">
  <div class="main-banner item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="d-table">
      <div class="d-table-cell">
        <div class="container">
          <div class="main-banner-content">
            <h1>100% Recycled</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua.</p>

            <div class="btn-box">
              <a href="about-1.html" class="optional-btn">Pelajari lebih lanjut <span></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="main-banner item-bg3 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="d-table">
      <div class="d-table-cell">
        <div class="container">
          <div class="main-banner-content">
            <h1>200% lebih tangguh</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua.</p>

            <div class="btn-box">
              <a href="about-1.html" class="optional-btn">Pelajari lebih lanjut Us <span></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="main-banner item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="d-table">
      <div class="d-table-cell">
        <div class="container">
          <div class="main-banner-content">
            <h1>Zero Waste</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua.</p>

            <div class="btn-box">
              <a href="contact.html" class="optional-btn">Pelajari lebih lanjut <span></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Main Banner Area -->

<!-- Start About Area -->
<div class="about-section ptb-100 pb-0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12">
        <div class="about-text">
          <span class="sub-title">Who We Are</span>
          <h2>Interior Design Companies in the <span>United States</span></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua.</p>
          <div class="quote">
            “Interior Design is making the best possible use of the Available Space
          </div>
          <a href="about-2.html" class="default-btn">More About Us <span></span></a>

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
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
          <a href="#" class="read-more-btn">Read More</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="offer-box">
          <div class="icon">
            <i class="flaticon-desktop"></i>
          </div>
          <h3><a href="#">Creative Desktop</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
          <a href="#" class="read-more-btn">Read More</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
        <div class="offer-box">
          <div class="icon">
            <i class="flaticon-rulers"></i>
          </div>
          <h3><a href="#">Skilled Architecture</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
          <a href="#" class="read-more-btn">Read More</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Offer Area -->

<!-- Start Our Story Area -->
{{-- <section class="our-story-area ptb-100 pt-0">
  <div class="container">
    <div class="section-title">
      <span class="sub-title">Our Story</span>
      <h2>We Have an Awesome Story</h2>
    </div>

    <div class="our-story-content">
      <img src="assets/img/story-bg.jpg" alt="image">

      <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube"><i
          class="flaticon-play-button"></i></a>

      <div class="quote">
        <p>If you love something, it wil work. That’s the only real rule.</p>

        <h3>Bunny Williams</h3>
        <span>Interior Designer</span>
      </div>
    </div>
  </div>
</section> --}}
<!-- End Our Story Area -->

<!-- Start Fun Facts Area -->
{{-- <section class="fun-facts-area ptb-100 pt-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-6 col-md-3 col-sm-3">
        <div class="single-fun-facts">
          <h3><span class="odometer" data-count="350">00</span>+</h3>
          <p>Projects Finished</p>
          <div class="back-text">P</div>
        </div>
      </div>

      <div class="col-lg-3 col-6 col-md-3 col-sm-3">
        <div class="single-fun-facts">
          <h3><span class="odometer" data-count="200">00</span>+</h3>
          <p>Happy Clients</p>
          <div class="back-text">C</div>
        </div>
      </div>

      <div class="col-lg-3 col-6 col-md-3 col-sm-3">
        <div class="single-fun-facts">
          <h3><span class="odometer" data-count="180">00</span>+</h3>
          <p>Team Members</p>
          <div class="back-text">T</div>
        </div>
      </div>

      <div class="col-lg-3 col-6 col-md-3 col-sm-3">
        <div class="single-fun-facts">
          <h3><span class="odometer" data-count="35">00</span>+</h3>
          <p>Years of Experience</p>
          <div class="back-text">E</div>
        </div>
      </div>
    </div>
  </div>
</section> --}}
<!-- End Fun Facts Area -->

<!-- Start Services Area -->
<section class="services-section ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
  <div class="container">
    <div class="section-title">
      <span class="sub-title">What We Do</span>
      <h2>We Provide Passion Fueled Interior Services</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do do eiusmod tempor incididunt ut
        labore et dolore magna aliqua.</p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="services-box">
          <div class="icon">
            <i class="flaticon-double-bed"></i>
          </div>

          <h3><a href="single-services.html">Interior</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt et
            dolore magna aliqua.</p>
          <a href="single-services.html" class="read-more-btn">Read More</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="services-box">
          <div class="icon">
            <i class="flaticon-hotel"></i>
          </div>

          <h3><a href="single-services.html">Architecture</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt et
            dolore magna aliqua.</p>
          <a href="single-services.html" class="read-more-btn">Read More</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="services-box">
          <div class="icon">
            <i class="flaticon-living-room"></i>
          </div>

          <h3><a href="single-services.html">Exterior</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt et
            dolore magna aliqua.</p>
          <a href="single-services.html" class="read-more-btn">Read More</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="services-box">
          <div class="icon">
            <i class="flaticon-home"></i>
          </div>

          <h3><a href="single-services.html">Decoration</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt et
            dolore magna aliqua.</p>
          <a href="single-services.html" class="read-more-btn">Read More</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="services-box">
          <div class="icon">
            <i class="flaticon-kitchen"></i>
          </div>

          <h3><a href="single-services.html">Furniture</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt et
            dolore magna aliqua.</p>
          <a href="single-services.html" class="read-more-btn">Read More</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="services-box">
          <div class="icon">
            <i class="flaticon-sketch"></i>
          </div>

          <h3><a href="single-services.html">Planning</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt et
            dolore magna aliqua.</p>
          <a href="single-services.html" class="read-more-btn">Read More</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Services Area -->

<!-- Start How We Work Area -->
<section class="how-we-work-section ptb-100 pt-0">
  <div class="container">
    <div class="section-title">
      <span class="sub-title">How We Work</span>
      <h2>Proven Process for the Best Result</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do do eiusmod tempor incididunt ut
        labore et dolore magna aliqua.</p>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-process-box bg-1">
          <div class="number">
            1
          </div>
          <h3>Concept</h3>
          <p>Lorem ipsum dolor sit met, consecte adipiscing, sed do eiusmod tempor.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-process-box bg-2">
          <div class="number">
            2
          </div>
          <h3>Idea</h3>
          <p>Lorem ipsum dolor sit met, consecte adipiscing, sed do eiusmod tempor.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-process-box bg-3">
          <div class="number">
            3
          </div>
          <h3>Design</h3>
          <p>Lorem ipsum dolor sit met, consecte adipiscing, sed do eiusmod tempor.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-process-box bg-4">
          <div class="number">
            4
          </div>
          <h3>Execution</h3>
          <p>Lorem ipsum dolor sit met, consecte adipiscing, sed do eiusmod tempor.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End How We Work Area -->

<!-- Start Testimonials Area -->
<section class="testimonials-area ptb-100">
  <div class="container">
    <div class="section-title">
      <span class="sub-title">Testimonials</span>
      <h2>What People Say About Our Design Studio</h2>
    </div>

    <div class="testimonials-slides owl-carousel owl-theme">
      <div class="single-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
          maecenas.</p>

        <div class="client-info">
          <img src="/site/img/author1.jpg" alt="image">

          <h3>Bunny Williams</h3>
          <span>Interior Designer</span>
        </div>
      </div>

      <div class="single-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
          maecenas.</p>

        <div class="client-info">
          <img src="/site/img/author2.jpg" alt="image">

          <h3>Oliver Lucas</h3>
          <span>Architecture Designer</span>
        </div>
      </div>

      <div class="single-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
          maecenas.</p>

        <div class="client-info">
          <img src="/site/img/author3.jpg" alt="image">

          <h3>Sarah Taylor</h3>
          <span>Marketing Manager</span>
        </div>
      </div>

      <div class="single-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
          maecenas.</p>

        <div class="client-info">
          <img src="assets/img/author4.jpg" alt="image">

          <h3>Liam Elijah</h3>
          <span>Lead Designer</span>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Testimonials Area -->

<!-- Start Partner Area -->
<div class="partner-area ptb-100 pt-0">
  <div class="partner-slides owl-carousel owl-theme">
    <div class="partner-item">
      <a href="#">
        <img src="/site/img/partner1.png" alt="image">
        <img src="/site/img/partner1.png" alt="image">
      </a>
    </div>

    <div class="partner-item">
      <a href="#">
        <img src="/site/img/partner2.png" alt="image">
        <img src="/site/img/partner2.png" alt="image">
      </a>
    </div>

    <div class="partner-item">
      <a href="#">
        <img src="/site/img/partner3.png" alt="image">
        <img src="/site/img/partner3.png" alt="image">
      </a>
    </div>

    <div class="partner-item">
      <a href="#">
        <img src="/site/img/partner4.png" alt="image">
        <img src="/site/img/partner4.png" alt="image">
      </a>
    </div>

    <div class="partner-item">
      <a href="#">
        <img src="/site/img/partner5.png" alt="image">
        <img src="/site/img/partner5.png" alt="image">
      </a>
    </div>

    <div class="partner-item">
      <a href="#">
        <img src="/site/img/partner6.png" alt="image">
        <img src="/site/img/partner6.png" alt="image">
      </a>
    </div>
  </div>
</div>
<!-- End Partner Area -->

<!-- Start Work With Us Area -->
<section class="work-with-us-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
  <div class="container">
    <div class="work-with-us-content">
      <h2>Ingin kerja sama dengan kami?</h2>

      <a href="contact.html" class="default-btn">Kontak kami <span></span></a>
    </div>
  </div>
</section>
<!-- End Work With Us Area -->
@endsection
