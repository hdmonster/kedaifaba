<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap Min CSS -->
  <link rel="stylesheet" href="/site/css/bootstrap.min.css">
  <!-- Animation Min CSS -->
  <link rel="stylesheet" href="/site/css/animate.min.css">
  <!-- Font Awesome Min CSS -->
  <link rel="stylesheet" href="/site/css/fontawesome.min.css">
  <!-- FlatIcon CSS -->
  <link rel="stylesheet" href="/site/css/flaticon.css">
  <!-- Magnific Popup Min CSS -->
  <link rel="stylesheet" href="/site/css/magnific-popup.min.css">
  <!-- Mean Menu CSS -->
  <link rel="stylesheet" href="/site/css/meanmenu.css">
  <!-- Odometer Min CSS -->
  <link rel="stylesheet" href="/site/css/odometer.min.css">
  <!-- Nice Select Min CSS -->
  <link rel="stylesheet" href="/site/css/nice-select.min.css">
  <!-- Owl Carousel Min CSS -->
  <link rel="stylesheet" href="/site/css/owl.carousel.min.css">
  <!-- Style CSS -->
  <link rel="stylesheet" href="/site/css/style.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="/site/css/responsive.css">

  <title>{{ Request::is('/') ? 'Kedai Faba' : $title . ' - Kedai Faba' }}</title>

  <link rel="icon" type="image/png" href="/site/img/favicon.png">
</head>

<body>

  <!-- Preloader -->
  <div class="preloader">
    <div class="loader">
      <div class="shadow"></div>
      <div class="box"></div>
    </div>
  </div>
  <!-- End Preloader -->

  <!-- Start Navbar Area -->
  @include('site.partials.navbar')
  <!-- End Navbar Area -->

  <!-- Sidebar Modal -->
  @include('site.partials.sidebar')
  <!-- End Sidebar Modal -->

  @yield('content')

  <!-- Start Footer Area -->
  @include('site.partials.footer')
  <!-- End Footer Area -->

  <div class="go-top"><i class="fas fa-arrow-up"></i><i class="fas fa-arrow-up"></i></div>

  <!-- jQuery Min JS -->
  <script src="/site/js/jquery.min.js"></script>
  <!-- Popper Min JS -->
  <script src="/site/js/popper.min.js"></script>
  <!-- Bootstrap Min JS -->
  <script src="/site/js/bootstrap.min.js"></script>
  <!-- Owl Carousel Min JS -->
  <script src="/site/js/owl.carousel.min.js"></script>
  <!-- magnific Popup Min JS -->
  <script src="/site/js/jquery.magnific-popup.min.js"></script>
  <!-- Appear Min JS -->
  <script src="/site/js/jquery.appear.min.js"></script>
  <!-- Odometer Min JS -->
  <script src="/site/js/odometer.min.js"></script>
  <!-- Mean Menu JS -->
  <script src="/site/js/jquery.meanmenu.js"></script>
  <!-- Nice Select Min JS -->
  <script src="/site/js/jquery.nice-select.min.js"></script>
  <!-- Parallax Min JS -->
  <script src="/site/js/parallax.min.js"></script>
  <!-- WOW Min JS -->
  <script src="/site/js/wow.min.js"></script>
  <!-- AjaxChimp Min JS -->
  <script src="/site/js/jquery.ajaxchimp.min.js"></script>
  <!-- Form Validator Min JS -->
  <script src="/site/js/form-validator.min.js"></script>
  <!-- Contact Form Min JS -->
  <script src="/site/js/contact-form-script.js"></script>
  <!-- Main JS -->
  <script src="/site/js/main.js"></script>
</body>

</html>
