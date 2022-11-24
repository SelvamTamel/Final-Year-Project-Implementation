<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CyberPersona - CyberSecurity Personality Quiz</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/images/head-Icon.ico') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/css/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{ url('home') }}">CyberPersona</a></h1>

      <nav id="navbar" class="navbar">
            <ul>
          <li><a class="nav-link scrollto" href="{{ url('home') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ url('home') }}">Big Five Personality</a></li>
          <li><a class="nav-link scrollto" href="{{ url('infozone') }}">Information Zone</a></li>
          <li><a class="nav-link scrollto active" href="{{ url('home') }}">Cyber Threats</a></li>
          <li class="dropdown"><a href="#"><span>Hello, {{auth()->user()->name}}!</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="logout">Logout</a></li>
            </ul>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


 
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">
    
            <ol>
              <li><a href="{{ url('home') }}">Home</a></li>
              <li>CyberThreats Details</li>
            </ol>
            <h2>Password Attacks</h2>
    
          </div>
        </section><!-- End Breadcrumbs -->
    
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
          <div class="container">
    
            <div class="row gy-4">
    
              <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                  <div class="swiper-wrapper align-items-center">
    
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/images/portfolio/passattacks.jpg') }}" alt="">
                    </div>
    
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/images/portfolio/passwords.png') }}" alt="">
                    </div>
    
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/images/portfolio/passattack.png') }}" alt="">
                    </div>
    
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
    
              <div class="col-lg-4">
                <div class="portfolio-description">
                    <h2>Here Details of Password Attacks</h2>
                    <p>
                        Password attacks involve exploiting a broken authorization vulnerability in the system combined with automatic password attack tools that speed up the guessing and cracking passwords. The attacker uses various techniques to access and expose the credentials of a legitimate user, assuming their identity and privileges. The username-password combination is one of the oldest known account authentication techniques, so adversaries have had time to craft multiple methods of obtaining guessable passwords. Additionally, applications that use passwords as the sole authentication factor are vulnerable to password attacks since the vulnerabilities are well understood.
                    </p>
                  </div>
                <div class="portfolio-description">
                  <p>
                    Password attacks have far-reaching consequences since malicious users only require unauthorized access to a single privileged account or a few users accounts to compromise the web application. Depending on the data hosted by the application, compromised passwords can pave the way for the exposure of sensitive information, distributed denial-of-service, financial fraud, and other sophisticated attacks.
                  </p>
                </div>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Portfolio Details Section -->
    
      </main><!-- End #main -->
    
 
    <!-- ======= Footer ======= -->
    @include('layouts.includes.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/js/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/home.js') }}"></script>


</body>

</html>
   
   