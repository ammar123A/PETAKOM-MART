<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PETAKOM MART System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ URL::asset('assets/vendor/aos/aos.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('assets/vendor/boxicons/css/boxicons.min.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('assets/vendor/glightbox/css/glightbox.min.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('assets/vendor/swiper/swiper-bundle.min.css') }}" />
  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}" />

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  
    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="assets/img/petakom.png" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="index.html">DASHBOARD</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
                    <li><a href="#about" class="nav-link scrollto"><i class="bx bx-box"></i> <span>Inventory</span></a></li>
                    <li><a href="/vendor" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Vendor</span></a></li>
                    <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Sales</span></a></li>
                    <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Schedule</span></a></li>
                    <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->
  <main id="main">
  @yield('content')
  </main>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/aos/aos.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/typed.js/typed.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <!-- Template Main JS File -->
    <script type="text/javascript" src="{{ URL::asset('assets/js/main.js') }}"></script>
</body>
</html>