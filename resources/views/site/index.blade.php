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
          <h2>Material Konstruksi Berkualitas dari <span>Fly Ash Bottom Ash</span></h2>
          <p>Kedai FABA lahir dari Tanah Borneo Indonesia, diusung oleh para praktisi konstruksi dan marketing yang sudah berpengalaman 5 tahun lebih, berafiliasi dengan produsen produk konstruksi skala nasional.</p>
          <!-- <div class="quote">
            “Interior Design is making the best possible use of the Available Space
          </div> -->
          <a href="{{ route('about') }}" class="default-btn">Selanjutnya Tentang Kami <span></span></a>

          <div class="back-animation-text">Design Studio</div>
        </div>
      </div>

      <div class="col-lg-5 col-md-12">
        <div class="about-img">
          <img src="/site/img/kedaifaba/members/full-team.png" width="1000px" alt="image">
          <!-- <img src="/img/about-img3.jpg" alt="image"> -->
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
            <i class="fas fa-clipboard-list"></i>
          </div>
          <h3><a href="#">Transparan</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
          <!-- <a href="#" class="read-more-btn">Read More</a> -->
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="offer-box">
          <div class="icon">
            <i class="fas fa-money-bill-wave"></i>
          </div>
          <h3><a href="#">Jaminan Uang Kembali</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
          <!-- <a href="#" class="read-more-btn">Read More</a> -->
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
        <div class="offer-box">
          <div class="icon">
            <i class="fas fa-shipping-fast"></i>
          </div>
          <h3><a href="#">Mudah dalam Bertransaksi</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
          <!-- <a href="#" class="read-more-btn">Read More</a> -->
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
      <span class="sub-title">What We Provide</span>
      <h2>Kami Menyediakan Kontruksi Berkualitas</h2>
      <p>Barang yang kami berikan sudah pasti yang terbaik dan berasal dari Fly Ash dan Bottom Ash.</p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="services-box">
          <div class="icon">
            <!-- <i class="flaticon-double-bed"></i> -->
            <img src="/site/img/kedaifaba/beton.png" width="100px">
          </div>

          <h3><a href="#">Raw Material Beton FABA</a></h3>
          <p>Selain baja ringan bahan material beton ringan juga mulai banyak diminati, seperti namanya baja ini memiliki bobot yang sangat ringan.</p>
          <a href="#" class="read-more-btn">Available</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="services-box">
          <div class="icon">
            <!-- <i class="flaticon-hotel"></i> -->
            <img src="/site/img/kedaifaba/batako.png" width="90px">
          </div>

          <h3><a href="#">Batako FABA</a></h3>
          <p>Batako adalah blok yang dibuat dari bahan kiln, biasanya tanah liat atau serpih, tetapi juga mungkin dari lumpur berkualitas rendah, dll.</p>
          <a href="#" class="read-more-btn">Available</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="services-box">
          <div class="icon">
            <!-- <i class="flaticon-living-room"></i> -->
            <img src="/site/img/kedaifaba/paving.png" width="140px">
          </div>

          <h3><a href="#">Paving Block FABA</a></h3>
          <p>Dalam pembuatannya paving block menggunakan susunan bahan sama seperti beton yaitu semen, agregat halus (FABA), dan air.</p>
          <a href="#" class="read-more-btn">Available</a>
        </div>
      </div>
<!-- 
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
      </div> -->
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

@if(count($testimonials) > 0)

<!-- Start Testimonials Area -->
<section class="testimonials-area ptb-100">
  <div class="container">
    <div class="section-title">
      <span class="sub-title">Testimonials</span>
      <h2>Apa yang mereka katakan tentang faba?</h2>
    </div>

    <div class="testimonials-slides owl-carousel owl-theme">
      @foreach($testimonials as $testimonial)

      <div class="single-testimonials-item">
        <p>{{ $testimonial->message }}</p>

        <div class="client-info">
          <img src="{{ asset('storage/' . $testimonial->avatar_url) }}" alt="avatar">

          <h3>{{ $testimonial->name }}</h3>
          <span>{{ $testimonial->role }}</span>
        </div>
      </div>

      @endforeach
    </div>
  </div>
</section>
<!-- End Testimonials Area -->

@endif

<!-- Start Partner Area -->
<div class="partner-area ptb-100 pt-0">
  <div class="partner-slides owl-carousel owl-theme">

    <div class="partner-item">
      <a href="#">
        <img src="/site/img/kedaifaba/supporter/1.png" alt="image" style="width: 150px !important;">
        <img src="/site/img/kedaifaba/supporter/1.png" alt="image" style="width: 150px !important;">
      </a>
    </div>

    <div class="partner-item">
      <a href="#">
        <img src="/site/img/kedaifaba/supporter/2.png" alt="image" style="width: 150px !important;">
        <img src="/site/img/kedaifaba/supporter/2.png" alt="image" style="width: 150px !important;">
      </a>
    </div>

    <div class="partner-item">
      <a href="#">
        <img src="/site/img/kedaifaba/supporter/3.png" alt="image" style="width: 150px !important;">
        <img src="/site/img/kedaifaba/supporter/3.png" alt="image" style="width: 150px !important;">
      </a>
    </div>

    <div class="partner-item">
      <a href="#">
        <img src="/site/img/kedaifaba/supporter/4.png" alt="image" style="width: 150px !important;">
        <img src="/site/img/kedaifaba/supporter/4.png" alt="image" style="width: 150px !important;">
      </a>
    </div>

    <div class="partner-item">
      <a href="#">
        <img src="/site/img/kedaifaba/supporter/5.png" alt="image" style="width: 150px !important;">
        <img src="/site/img/kedaifaba/supporter/5.png" alt="image" style="width: 150px !important;">
      </a>
    </div>

    <div class="partner-item">
      <a href="#">
        <img src="/site/img/kedaifaba/supporter/6.png" alt="image" style="width: 150px !important;">
        <img src="/site/img/kedaifaba/supporter/6.png" alt="image" style="width: 150px !important;">
      </a>
    </div>

    <div class="partner-item">
      <a href="#">
        <img src="/site/img/kedaifaba/supporter/7.png" alt="image" style="width: 150px !important;">
        <img src="/site/img/kedaifaba/supporter/7.png" alt="image" style="width: 150px !important;">
      </a>
    </div>

    <div class="partner-item">
      <a href="#">
        <img src="/site/img/kedaifaba/supporter/8.png" alt="image" style="width: 150px !important;">
        <img src="/site/img/kedaifaba/supporter/8.png" alt="image" style="width: 150px !important;">
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
