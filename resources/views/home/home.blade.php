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
    @include('layouts.includes.homeheader.header')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Welcome to CyberPersona</h1>
          <h2>Are you aware that different personality traits are susceptible to various security threats?</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a  href="{{ url('stdinfo') }}" class="btn-get-started scrollto">Take Personality Quiz</a>
            <a href="https://youtu.be/XuoAF8BJePA" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('assets/images/hero-img.png') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= Why Us Section ======= -->
    <section id="big-five" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-title">
          <h2>What are Personality Traits?</h2>
        </div>

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Types of <strong>OCEAN (Big 5) </strong> Personality Traits </h3>
              <p>
                A personality trait is a characteristic that can be defined as patterns of feelings, thoughts and behaviours that make a person unique. These personality traits can be classified in the form of five types of personality that common use. 
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Conscientiousness <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      This dimension's standard features include high levels of thoughtfulness, good impulse control and goal-driven behaviours. People who are higly conscientious tend to be organized and attentive to details. They plan ahead, they think about how their behaviour affects others and they are aware of deadlines.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Agreeableness <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      This aspect of personality includes qualities such as trust, altruism, empathy, love and other prosocial behaviours People with a high degree of agreement tend to be more cooperative, while those with lo degree tend to be more aggressive and sometimes even manipulative.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Openness to Experience <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      This dimension's of cognitive style that distinguishes imaginative, creative people from down-to-earth, conventional people. Open people are Intellectually curious, appreciative of art, and sensitive to beauty. They tend to be, compared to closed people, more aware of their feelings.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span> Extraversion <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Extraversion is characterized by excitability, sociability, talkability, assertiveness & high levels of emotional expressiveness. People with high levels of extraversion are outgoing and lend to gain energy in social situations. It helps them feel energized and exicted about being around other people.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed"><span>05</span> Neuroticism <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Neuroticismis a trait of sadness, moodness and emotional instability. High in this trait individuals tend to experience mood swings, anxiety, instability and sadness. Those who are low in this trait tend to be more stable and resilient to emotion.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"> <img src="{{ asset('assets/images/why-us.png') }}"  class="img-fluid animated" alt=""></div></div> 
        </div>
      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Clients Section ======= -->
    @include('layouts.includes.client')

<!-- ======= Services  Us Section ======= -->
<section id="services" class="services section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Cybersecurity Quiz Based Personality System</h2>
    </div>

    <div class="row">
      <div class="col-lg-4 d-flex align-items-stretch">
        <div class="content">
          <h3>Why Choose CyberPersona?</h3>
          <p>
            Psychological research study may frequently describe personality traits in a way of five core traits, which been categorized as stable disposition that enhance the drive of behaviour
      Psychological research often define personality in terms of five core traits, which can be thought of as stable dispositions that drive behaviour.
          </p>
          <div class="text-center">
            <a href="{{ url('stdinfo') }}" class="more-btn">Take Quiz <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-8 d-flex align-items-stretch" >
        <div class="icon-boxes d-flex flex-column justify-content-center">
          <div class="row">
            <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box mt-4 mt-xl-0"><div class="icon">
                <i class="bx bx-receipt"></i></div>
                <h4>Complete the Test</h4>
                <p>Be yourself and answer honestly to find out your personality type.</p>
              </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box mt-4 mt-xl-0"><div class="icon">
                <i class="bx bx-cube-alt"></i></div>
                <h4>View Detailed Results</h4>
                <p>Neutral option may lead to unaccurate personality traits result.</p>
              </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box mt-4 mt-xl-0"><div class="icon">
                <i class="bx bx-images"></i></div>
                <h4>Try Avoid Neutral Answer</h4>
                <p>Learn how your personality type influences many areas of your life.</p>
              </div>
            </div>
          </div>
        </div><!-- End .content-->
      </div>
    </div>

  </div>
</section><!-- End Services Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3> Our Info Zone</h3>
            <p> Get the Latest Information Regarding Personality and cyberthreats on our info zone portal</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="{{ url('infozone') }}" >Latest Post</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

   
    <!-- ======= Portfolio Section ======= -->
      @include('layouts.includes.cyberthreats')

          <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq-list">
          <ul>
            @foreach ($faq as $faqdata)
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" 
              data-bs-target="#faq-list-{{$faqdata->id}}">{{$faqdata->question}} 
              <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="#faq-list-{{$faqdata->id}}" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  {{$faqdata->answer}}
                </p>
              </div>
            </li>
            @endforeach

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.includes.homeheader.footer')

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
    
    