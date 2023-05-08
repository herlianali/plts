<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Petrogas PLTS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('favicon.png') }}" type="image/png" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <style>
    .btn-nav{
        position: absolute;
        right: 80px;
    }
    .btn-nav a{
        color: rgba(255, 255, 255, 0.7);
        margin: 5px;
    }
    .btn-nav a:hover{
        color: #fff;
    }
  </style>
</head>

<body class="page-index">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('/') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('stisla/img/logo.png') }}" alt="">
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        <nav id="navbar" class="navbar" style="right: 150px">
            <ul>
                <li><a href="{{ route('/') }}" class="active">Home</a></li>
                <li><a href="">Keuntungan</a></li>
                <li><a href="">Informasi</a></li>
                <li><a href="">FAQ</a></li>
                <li><a href="contact.html">Kontak</a></li>
                <li class="dropdown"><a href="#"><span>Simulasi</span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">Simulasi Langganan</a></li>
                        <li><a href="#">Simulasi Leasing</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="btn-nav" style="">
            <a href="" class="btn btn-info"><i class="ri-user-2-fill"></i> Login</a>
        </div>

        </div>
    </header>

    @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span>Nova</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links d-flex  mt-3">
              <a href="https://twitter.com/petrogas" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://facebook.com/petrogas" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://instagram.com/petrogas" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Keuntungan</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Informasi</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">FAQ</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Kantor Pusat</h4>
            <p>
                Gedung Medan Pemuda Lt. 6<br>
                Jl. Pemuda No. 27-31<br>
                Surabaya – 60271<br><br>
                <strong>Phone:</strong> +6231-5317456<br>
                <strong>Fax:</strong> +6231-5346424<br>
                <strong>Email:</strong> info@petrogas.co.id<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Kantor Jakarta</h4>
            <p>
                Belleza Office Tower 11 Floor Office 02 <br>
                Jl. Letjen Soepeno No 34, Permata Hijau,<br>
                Jakarta – 12210 <br>
                <strong>Phone:</strong> +6221-30027197<br>
                <strong>Fax:</strong> +6221-53664877<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Petrogas Jatim Utama</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('stisla/modules/jquery.min.js') }}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  @stack('scripts')
</body>

</html>
