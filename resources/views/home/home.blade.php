<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{$main_settings[0]->site_name}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords"> 
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{ url('images/'.$main_settings[0]->logo) }}" rel="icon" />  
  <link rel="shortcut icon" href="{{ url('images/'.$main_settings[0]->logo) }}" rel="apple-touch-icon" />  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('home_assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home_assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('home_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home_assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('home_assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home_assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home_assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('home_assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{ asset('home_assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">{{$main_settings[0]->email}}</a>
        <i class="bi bi-phone-fill phone-icon"></i> {{$main_settings[0]->phone}}
      </div>
      <div class="cta d-none d-md-block">
        <a href="{{url('login')}}" class="scrollto">Get Started</a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/"><!-- {{$main_settings[0]->site_name}} -->
        {{ __('messages.website') }}
      </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=index.html" class="logo"><img src="images/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
       
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">{{ __('messages.home') }}</a></li>
          <li><a class="nav-link scrollto" href="#team">{{ __('messages.live') }}</a></li>
          <li><a class="nav-link scrollto" href="#about">{{ __('messages.aboutus') }}</a></li>
          <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
          <li><a class="nav-link scrollto" href="#contact">{{ __('messages.contact') }}</a></li>
        </ul>
         <li> <select class="dropdown changeLang">
             <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
             <option value="hi" {{ session()->get('locale') == 'hi' ? 'selected' : '' }}>Hindi</option>
          </select>
        </li>
         <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->

        <i class="bi bi-list mobile-nav-toggle"></i>

      </nav><!-- .navbar -->



    </div>
  </header><!-- End Header -->

                          

      

       @if(Session::has('success'))
          <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Success!</strong> {{ Session::get('success') }}
          </div>

        @endif

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
       @foreach($banners as $key => $banner)
       @if($banner->module_id==1) 
       @if($key==0)         
       <div class="carousel-item active">       
         @else
       <div class="carousel-item">      
       @endif
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">{{ $banner->title }}</h2>
          <p class="animate__animated animate__fadeInUp">{{ $banner->description }}</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div> 
       @endif     
      @endforeach

     

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->





  <main id="main">

    <section id="services" class="services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
        </br>
        </br>
          <h2>{{ __('messages.games') }}</h2>
          <p>{{ __('messages.games_desc') }}</p>
        </div>

        <div class="row">
           @foreach($projects as $project)
          <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <img src="{{ url('images/project/'.$project->icon_picture) }}" class="img-fluid" alt=""  width="50" height="50">
              <!-- <i class="bi bi-card-checklist"></i> -->
              <h4><a href="#">{{ $project->title }}</a></h4>
              <p>{{ $project->description }}</p>
            </br>
               <div class="justify-content-center ">
                  <a  class="btn btn-primary  m-2 btn-block" href="{{url('jodi/'.$project->id)}}">{{ __('messages.jodi') }}</a>
                  <a  class="btn btn-success  m-2 btn-block"  href="{{url('pannel/'.$project->id)}}">{{ __('messages.pannel') }}</a>
                </div>
            </div>
          </div>          
           @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->



    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>{{ __('messages.live') }}</h2>
          <p>{{ __('messages.fast') }}..</p>
        </div>

        <div class="row">
          @foreach($live_results as $live_result)
          <div class="col-lg-12 mt-4  text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="member d-flex justify-content-center ">
              <div class="member-info ">
                <h4>{{ $live_result->title }}</h4>
                <p>{{ $live_result->description }}</p>  
                  @php 
                  $class_colour="badge rounded-pill  text-bg-warning"; 
                  @endphp
                @if($live_result->result!='') 
                  @php   $array = str_split($live_result->result);
                    if($array[0]==$array[1])
                      {
                        $class_colour="badge rounded-pill  text-bg-danger";
                      }
                      @endphp
                    

                 <a class="{{$class_colour}}"style="font-size:2rem;">{{$live_result->result}}</a>
                @else
                 <div class="spinner-border text-success" role="status"></div>
                @endif

   
                           
                 <div class="justify-content-center ">
                  <a  class="btn btn-warning p-2 m-4 btn-block" href="{{url('jodi/'.$live_result->id)}}">{{ __('messages.jodi') }}</a>
                  <a  class="btn btn-danger p-2 m-4 btn-block"  href="{{url('pannel/'.$live_result->id)}}">{{ __('messages.pannel') }}</a>
                </div>
              </div>
            </div>
          </div>
           @endforeach
        </div>
      </div>
    </section><!-- End Team Section -->






    <!-- ======= About Us Section ======= -->
     <!-- {{$main_settings[0]->description}} -->


    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ __('messages.aboutus') }}</h2>.</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> सबसे तेज रिजल्ट </li>
              <li><i class="ri-check-double-line"></i> सबसे सटीक रिजल्ट.</li>
              <li><i class="ri-check-double-line"></i> सबसे ज्यादा गेम रिजल्ट</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>समय से आगे हवा से तेज ये है कुर्ला कंपनी का खेल 
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ url('images/clients/client-1.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ url('images/clients/client-2.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ url('images/clients/client-3.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ url('images/clients/client-4.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ url('images/clients/client-5.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ url('images/clients/client-6.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ url('images/clients/client-7.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ url('images/clients/client-8.png') }}" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch position-relative video-box" style='background-image: url("images/clients/client-1.png");' data-aos="fade-right">
           <!--  <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn mb-4"></a> -->
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

            <div class="content">
              <h3>अपना बाजार हमारी वेबसाइट साईट में डलवाने के लिए आज ही हमसे सम्पर्क करें <strong>*रेट/चार्ज भी दूसरी वेबसाइट साइट्स से बहुत कम में *</strong></h3>
              <p>मात्र 5 मिनट में रिजल्ट वेबसाइट साइट पर लग जाएगा *एडमिन पैनल से आप ही अपना रिजल्ट/रिकॉर्ड डाल सकते है *टाइम टू टाइम अपडेट कर सकते है. 
              </p>
            </div>

            <div class="accordion-list">
             
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
   <!-- <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ __('messages.thisresult') }}</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
        
        
        </div>

      </div>
    </section>  -->
    <!-- End Services Section -->
    
    <!-- ======= Cta Section ======= -->
    <!-- <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section> -->
    <!-- End Cta Section -->

    <!-- ======= Portfoio Section ======= -->
    <!--  <section id="portfolio" class="portfoio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfoio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ url('images/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>120 157 256 670 139 148 346 689</p>
              <a href="{{ url('images/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{ url('images/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>129 147 246 679 345 390 480 589</p>
              <a href="{{ url('images/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ url('images/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>130 158 356 680 239 248 347 789</p>
              <a href="{{ url('images/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="{{ url('images/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>128 137 236 678 245 290 470 579</p>
              <a href="{{ url('images/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{ url('images/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p> 140 159 456 690 230 258 357 780 </p>
              <a href="{{ url('images/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ url('images/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p> 123 178 268 367 240 259 457 790 </p>
              <a href="{{ url('images/portfolio/portfolio-6.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>


        </div>

      </div>
    </section>  -->
   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ __('messages.contact') }} </h2>
        </div>

        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

          <div class="col-lg-5">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>{{ __('messages.location') }}:</h4>
                <p>{{$main_settings[0]->address}} {{$main_settings[0]->state}} {{$main_settings[0]->zipCode}}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>{{ __('messages.email') }}:</h4>
                <p>{{$main_settings[0]->email}}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>{{ __('messages.call') }}:</h4>
                <p>{{$main_settings[0]->phone}}</p>
              </div>

            </div>

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

            <form action="{{ route('contact_us') }}" name="contactUsForm" id="contactUsForm" method="post"  class="php-email-form">@csrf
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
                <div class="sent-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button  id="submit" type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>{{ __('messages.help') }}</h4>
            <p>{{ __('messages.subscribe') }}.</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
      <div class="container">
        <!-- <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              {{$main_settings[0]->address}} <br>
               {{$main_settings[0]->zipCode}}<br>
              {{$main_settings[0]->state}} <br><br>
              <strong>Phone:</strong> {{$main_settings[0]->phone}}<br>
              <strong>Email:</strong> {{$main_settings[0]->email}}<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About </h3>
            <p>{{$main_settings[0]->remarks}}.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div> -->
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>{{$main_settings[0]->site_name}}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
        Designed by <a href="#">{{$main_settings[0]->site_name}}</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="{{ asset('home_assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('home_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('home_assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('home_assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('home_assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('home_assets/js/main.js') }}"></script>
<script>

    var url = "{{ route('lan.change') }}";

    

    $('.changeLang').change(function(){

        window.location.href = url + "?lang=" + $(this).val();

    });

</script>
</body>

</html>