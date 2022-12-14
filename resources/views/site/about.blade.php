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
          <h2>Material Konstruksi Berkualitas dari <span>Fly Ash Bottom Ash</span></h2>
          <div class="row mt-4 mb-3">
            <div class="col">
              <div class="icon">
                  <i class="fas fa-map-marker-alt"></i>
              </div>
              <span>Alamat</span>
              Institut Teknologi Kalimantan
            </div>
            <div class="col">
              <div class="icon">
                  <i class="fas fa-envelope"></i>
              </div>
              <span>Email</span>
              ruangpentagon@gmail.com
            </div>
          </div>
          <p>
            Fokus produk kami adalah layanan supply produk-produk material bangunan yang bersumber dari Fly Ash dan
            Bottom Ash, terutama pada material beton, supply batako, paving block, dan kebutuhan material bangunan
            lainnya. Semua produk bahan bangunan yang kami sediakan dalam web pemasaran ini tidak selalu dalam kondisi
            ready stock, Namun kami tetap berupaya semaksimal mungkin untuk mengahadirkannya dengan penawaran harga
            terbaik.
          </p>
          <!-- <a href="#" class="default-btn">Contact Us <span></span></a> -->

          <div class="back-animation-text">Pentagon</div>
        </div>
      </div>

      <div class="col-lg-5 col-md-12">
        <div class="about-img">
          <img src="https://techbullion.com/wp-content/uploads/2021/01/Construction-Materials.png" alt="image">
          <img
            src="https://blogger.googleusercontent.com/img/a/AVvXsEhHWCEeQjtzQjbZuwCcx324z8i9gEpHITzF-Ry7jC-wdWVbTijjzb4Y_3GOmymcSFcaVOmBPmutxihvhNcRkd4vAfmjNhj9NH8kQDtATP03gKvIX1ii9oSgXxED-I0xygMMe0o4Ljrr_9PQN9dibKN7oKTeAxzYq1ObDKXyHzAraBWwvFFiFaZxNTxw8A=w1200-h630-p-k-no-nu"
            alt="image">
        </div>
      </div>
    </div>

    <div class="row mt-5 mb-5">
      
    </div>
  </div>
</div>
<!-- End About Area -->

<!-- Start Offer Area -->
<!-- <section class="offer-area ptb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="offer-box">
          <div class="icon">
            <i class="fas fa-clipboard-list"></i>
          </div>
          <h3><a href="#" disabled>Transparan</a></h3>
          <p>Dilakukan secara terbuka sehingga semua proses dapat dilihat.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="offer-box">
          <div class="icon">
            <i class="fas fa-money-bill-wave"></i>
          </div>
          <h3><a href="#" disabled>Jaminan Uang Kembali</a></h3>
          <p>Jika kondisi barang cacat atau buruk, bisa melakukan refund.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
        <div class="offer-box">
          <div class="icon">
            <i class="fas fa-shipping-fast"></i>
          </div>
          <h3><a href="#" disabled>Transaksi Mudah</a></h3>
          <p>Cukup memesan dari rumah saja, tidak perlu datang ke tempat.</p>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- End Offer Area -->

<!-- Start Team Area -->
@if(count($members) > 0)

<section class="team-section ptb-100 bg-faf5f5">
  <div class="container">
    <div class="section-title">
      <span class="sub-title">Our Experts</span>
      <h2>Meet Our Team</h2>
    </div>

    <div class="row">
      @foreach($members as $member)

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-team-member">
          <div class="member-image">
            <img src="{{ asset('storage/' . $member->avatar_url) }}"
              style="width: 336px; height: 401px; object-fit: cover" alt="image">

            {{-- <ul class="social">
              <li><a href="#" target="_blank"><i class="flaticon-facebook-logo"></i></a></li>
              <li><a href="#" target="_blank"><i class="flaticon-twitter"></i></a></li>
              <li><a href="#" target="_blank"><i class="flaticon-instagram"></i></a></li>
              <li><a href="#" target="_blank"><i class="flaticon-linkedin"></i></a></li>
            </ul> --}}
          </div>

          <div class="member-content">
            <h3>{{ $member->name }}</h3>
            <span>{{ $member->role }}</span>
          </div>
        </div>
      </div>

      @endforeach
    </div>
  </div>
</section>

@endif
<!-- End Team Area -->


@endsection
