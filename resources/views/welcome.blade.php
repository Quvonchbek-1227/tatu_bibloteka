  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> @yield('title') </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/login_style.css') }}">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">
  <style>
    .brand{
      color: rgb(54, 54, 240);
    }
  </style>

  <!-- =======================================================
  * Template Name: Sailor - v4.1.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/" class="brand">TITU NF</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="active">Bas Bet</a></li>

          <li class="dropdown"><a href="{{ route('about') }}"><span>Sayt Haqqinda</span> <i class="bi bi-chevron-down."></i></a>
            <!-- <ul>
              <li><a href="/about">@lang('words.about')</a></li>
              <li><a href="/team">@lang('words.team')</a></li>
              <li><a href="/testimonials">@lang('words.mentors')</a></li>
              <li><a href="/portfolio">@lang('words.portfolio')</a></li>
            </ul> -->
          </li>
          <li><a href="{{ route('news') }}" class="">Jan`aliqlar  </a></li>

          <li><a href="{{ route('contacts') }}">Baylanis Ushin</a></li>
          <!-- <li class="dropdown d-none"><a href="#"><span>@lang('words.language')</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a  class="language" href="/lang/en">EN</a></li>
                  <li><a class="language" href="/lang/ru">RU</a></li>
                  <li><a class="language" href="/lang/uz">UZ</a></li>
              </li>
            </ul>
          </li> -->
          @guest
          <li class="d-flex">
            <a href="{{ route('login') }}" class="">@lang('words.login')</a>
          </li>
          <li>
            <a href="{{ route('register') }}" class="">@lang('words.register')</a>
          </li>
        
          @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
            </li>
                <li>
                  <a href="{{ route('login-admin') }}" class="">@lang('words.admin_panel')</a>
                </li>
          @endguest
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('content')


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>TITU NF</h3>
              <p>
                NO`KIS qalasi <br>
                Allayar Dosnazarov ko`shesi.<br><br>
                <strong>Telefon:</strong> +998-61-222-29-20<br>
                <strong>Email:</strong> kantatunf@umail.uz<br>
              </p>
              <!-- <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div> -->
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Sayt Kartasi</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Bas Bet</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about') }}">Biz Haqqimizda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contacts') }}">Baylanis</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('news') }}">Jan`aliqlar</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{ asset('assets/js/login.js') }}"></script>
  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>