  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="#">CyberPersona</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ url('home') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="#big-five">Big Five Personality</a></li>
          <li class="dropdown"><a href="{{ url('infozone') }}"><span>Information Zone</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('detailcyberthreats') }}">Cybersecurity Threats for Students</a></li>
              <li class="dropdown"><a href="{{ url('detailhelpline') }}"><span>What is Befrienders?</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ url('detailhelpline') }}" >Befrienders Helpline</a></li>
                </ul>
              </li>
              <li><a href="{{ url('detailpersonality') }}">Personality Traits Vs Security Threats?</a></li>
            </ul>
          </li>
          <li><a class="nav-link   scrollto" href="#portfolio">Cyber Threats</a></li>
          <li><a class="nav-link   scrollto" href="#faq">FAQ</a></li>
          <li class="dropdown"><a href="#"><span>Hello, {{auth()->user()->name}}!</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="logout">Logout</a></li>
            </ul>
            
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
