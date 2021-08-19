<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MyResume Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ secure_asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ secure_asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ secure_asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ secure_asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: MyResume - v4.3.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
                </li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#skills" class="nav-link scrollto"><i class="bx bx-wrench"></i> <span>Skill</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a>
                </li>
                <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a>
                </li>
            </ul>
        </nav><!-- .nav-menu -->

    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>{{ $profile != null ? $profile->name : '' }}</h1>
            <p>I'm <span class="typed" data-typed-items="Full-Stack Web Developer, Programmer"></span></p>
            <div class="social-links">
                <a href="https://twitter.com/ahsanmajidbhat2" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/ahsanmajid.bhatti" class="facebook"><i
                        class="bx bxl-facebook"></i></a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4">

                        <img src="{{ secure_asset('assets/img/Ahsan-pic.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3>Full-Stack Web Developer.</h3>
                        <p class="fst-italic">
                            {{ $profile != null ? $profile->description : '' }}
                        </p>
                        <div class="row">
                            <hr>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                                        <span>{{ $profile != null ? $profile->birthdate : ''  }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                        <span>{{ $profile != null ? $profile->phone : '' }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                        <span>{{ $profile != null ? $profile->city : '' }} ,
                                            {{ $profile != null ? $profile->country : '' }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                        <span>
                                            <?php
                      if ($profile != null) {
                        $my_url = $profile->birthdate;
                        $test = substr($my_url, strrpos($my_url, '-') + 1) . "\n";

                        $val = date('Y') - (int)$test;
                        echo $val;
                      } else {
                        echo '';
                      }
                      ?>
                                        </span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                        <span>{{ $profile != null ? $profile->degree : '' }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>{{ $profile != null ? $profile->email : '' }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Skills</h2>
                </div>

                <div class="row skills-content">
                    @foreach($skills as $skill)

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">{{ $skill->skillname }} <i
                                    class="val">{{ $skill->percentage }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->percentage }}"
                                    aria-valuemin="0" aria-valuemax="{{ $skill->percentage }}"></div>
                            </div>
                        </div>

                    </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Resume</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Education</h3>
                        @foreach($educations as $education)

                        <div class="resume-item">
                            <h4>{{ $education->degree }}</h4>
                            <h5>{{ $education->startdate }} - {{ $education->enddate }}</h5>
                            <p><em>{{ $education->university }}, {{ $education->city }}, {{ $education->country }}</em>
                            </p>
                            <p>{!! $education->description !!}</p>
                        </div>
                        @endforeach
                        <h3 class="resume-title">Certifications</h3>
                        @foreach($certifications as $certification)

                        <div class="resume-item">
                            <h4>{{ $certification->certification }}</h4>
                            <h5>{{ $certification->startdate }} - {{ $certification->enddate }}</h5>
                            <p><em>{{ $certification->city }}, {{ $certification->country }}</em></p>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">Professional Experience</h3>
                        @foreach($experiences as $experience)
                        <div class="resume-item">
                            <h4>{{ $experience->jobtitle }}</h4>
                            <h5>{{ $experience->startdate }} - {{ $experience->enddate }}</h5>
                            <p><em>{{ $experience->company }}, {{ $experience->city }}, {{ $experience->country }} </em>
                            </p>
                            <p>{!! $experience->description !!}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Projects</h2>
                    <p>To View the project, click on the title to visit the sites.</p>
                </div>
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <iframe src="{{ $service->linkurl }}" height="150vmin" width="500vmin"></iframe>
                            </div>
                            <h4><a href="{{ $service->linkurl }}">{{ $service->title }}</a></h4>
                            <p>{!! $service->smalloverview !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
        <!-- <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section> -->
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>{{ $profile != null ? $profile->name : '' }}</h3>
            <div class="social-links">
                <a href="https://twitter.com/ahsanmajidbhat2" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/ahsanmajid.bhatti" class="facebook"><i
                        class="bx bxl-facebook"></i></a>
            </div>
            <div class="credits">
                Designed by Ahsan Majid Bhatti
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ secure_asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ secure_asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ secure_asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ secure_asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ secure_asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ secure_asset('assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ secure_asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ secure_asset('assets/vendor/typed.js/typed.min.js') }}"></script>
    <script src="{{ secure_asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ secure_asset('assets/js/main.js') }}"></script>

</body>

</html>
