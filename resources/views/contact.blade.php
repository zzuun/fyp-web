<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Clever - Education &amp; Courses Template | Contact</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="contact.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">


        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="{{route('page.home')}}"><img src="img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                       <div class="classy-menu">

                              <!-- Close Button -->
                              <div class="classycloseIcon">
                                  <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                              </div>

                              <!-- Nav Start -->
                              <div class="classynav">
                                  <ul>
                                      <li><a href="{{route('page.home')}}">Home</a></li>
                                      <li><a href="{{route('intermediate.main')}}">Intermediate</a></li>
                                      <li><a href="{{route('undergraduate.main')}}">Undergraduate</a></li>
                                    </ul>
                                    <div class="classynav2">
                                  </div>


                                  <!-- Register / Login -->
                                  <div class="register-login-area">
                                    @if(auth()->check())
                                      <a href="#" class="btn">Hi {{auth()->user()->name}}</a>

                                      <a  href="{{route('user.logout')}}"class="btn">Logout</a>
                                      @else
                                      <a href="{{route('register')}}" class="btn">Register</a>

                                      <a  href="{{route('login')}}"class="btn">Login</a>
                                      @endif
                                    </div>
                              </div>

                                  <!-- Search Button -->

                              <!-- Nav End -->
                          </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Google Maps ##### -->
    <div class="map-area">
        <div id="contactgoogleMap"></div>
    </div>

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <!-- Contact Info -->
                <div class="col-12 col-lg-6">
                    <div class="contact--info mt-50 mb-100">
                        <h4>Contact Info</h4>
                        <ul class="contact-list">
                            <li>
                                <h6  style="color:rgba(0,0,0,0.5)"><i class="fa fa-clock-o" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i> Business Hours</h6>
                                <h6 style="color: rgba(0,0,0,0.8);">9:00 AM - 6:00 PM</h6>
                            </li>
                            <li>
                                <h6  style="color:rgba(0,0,0,0.5)"><i class="fa fa-phone" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i> Phone</h6>
                                <h6 style="color: rgba(0,0,0,0.8);">+92 307 705 0655</h6>
                            </li>
                            <li>
                                <h6  style="color:rgba(0,0,0,0.5)"><i class="fa fa-envelope" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i> Email</h6>
                                <h6 style="color: rgba(0,0,0,0.8);">knsacareer@gmail.com</h6>
                            </li>
                            <li>
                                <h6  style="color:rgba(0,0,0,0.5)"><i class="fa fa-map-pin" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i> Name</h6>
                                <h6 style="color: rgba(0,0,0,0.8);">Katchery Road, Anarkali Bazar, Lahore</h6>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-12 col-lg-6">
                    <div class="contact-form">
                        <h4>Get In Touch</h4>
                        @if(Session::has('success'))
                          <div class="alert alert-success">
                            {{ Session::get('success') }}
                          </div>
                        @endif
                        <form action="{{route('contact.store')}}" method="post">
                          @csrf
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="text" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group" style="border-color:black;">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" name="message" rows="10" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn clever-btn w-100">Send Email</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->
    <section class="best-tutors-area section-padding-100" style="background-color:#e6f6ff;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>The Creators</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="tutors-slide owl-carousel wow fadeInUp" data-wow-delay="250ms">

                      <div class="single-tutors-slides">
                        <!-- Tutor Thumbnail -->
                        <div class="tutor-thumbnail">
                            <img src="img/bg-img/t8.png" alt="">
                        </div>
                        <!-- Tutor Information -->
                        <div class="tutor-information text-center">
                            <h5>Dr. Muhammad Murtaza Yousaf</h5>
                            <p><b>CEO</b></p>
                            <span><i class="fa fa-chevron-right" style="color:red;margin-right:2%;"></i>Assistant Professor</span>
                            <p>PhD Computer Science, University of Innsbruck, Austria, 2008</p>
                            <p>M.Sc Computer Science, PU, 2001 (Gold Medal)</p>
                            <div class="social-info">
                                  <p><i class="fa fa-chevron-right" style="margin-top:1%; margin-right:2%;color:red;"></i><a href="https://www.gmail.com"><i style="color:#800000;" class="fa fa-envelope" aria-hidden="true"></i></a>murtaza@pucit.edu.pk</p>
                            </div>
                        </div>
                    </div>
                      <!-- Single Tutors Slide -->
                      <div class="single-tutors-slides">
                          <!-- Tutor Thumbnail -->
                          <div class="tutor-thumbnail">
                              <img src="img/bg-img/t7.png" alt="">
                          </div>
                          <!-- Tutor Information -->
                          <div class="tutor-information text-center">
                              <h5>Arsalan Jamal Khan</h5>
                              <span><i class="fa fa-chevron-right" style="color:red;margin-right:2%;"></i>Web Developer</span>
                              <p>Bachelors In Information Technology</p>
                              <p><i class="fa fa-map-pin" style="color:blue;margin-right:2%;"></i>PUCIT</p>
                              <div class="social-info">
                                  <a href="https://www.facebook.com/khnarsalan"><i class="fa fa-facebook-square" style="color:blue;" aria-hidden="true"></i></a>
                                  <!-- <a href="arsalanj.khan756@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a> -->
                                  <a href="https://www.linkedin.com/in/arsalan-khan-562392184/"><i style="color:blue;" class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                              </div>
                              <div class="social-info">
                                <p><i class="fa fa-chevron-right" style="color:red;margin-top:1%; margin-right:2%;"></i><a href="https://www.gmail.com"><i class="fa fa-envelope" style="color:#800000;" aria-hidden="true"></i></a>arsalanj.khan756@gmail.com</p>
                              </div>
                          </div>
                      </div>

                      <!-- Single Tutors Slide -->
                      <div class="single-tutors-slides">
                          <!-- Tutor Thumbnail -->
                          <div class="tutor-thumbnail">
                              <img src="img/bg-img/t2.png" alt="">
                          </div>
                          <!-- Tutor Information -->
                          <div class="tutor-information text-center">
                              <h5>Ameer Hamza</h5>
                              <span><i class="fa fa-chevron-right" style="color:red;margin-right:2%;"></i>Android Developer</span>
                              <p>Bachelors In Information Technology</p>
                              <p><i class="fa fa-map-pin" style="color:blue;margin-right:2%;"></i>PUCIT</p>
                              <div class="social-info">
                                  <a href="https://www.facebook.com/hamzanaug"><i class="fa fa-facebook-square" style="color:blue;" aria-hidden="true"></i></a>
                                  <!-- <a href="hamzaameer027@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a> -->
                                  <a href="https://www.linkedin.com/in/ameer-hamza-5394b9136/"><i style="color:blue;" class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                              </div>
                              <div class="social-info">
                                <p><i class="fa fa-chevron-right" style="margin-top:1%; margin-right:2%;color:red;"></i><a href="https://www.gmail.com"><i style="color:#800000;" class="fa fa-envelope" aria-hidden="true"></i></a>hamzaameer027@gmail.com</p>
                              </div>
                          </div>
                      </div>

                      <!-- Single Tutors Slide -->
                      <div class="single-tutors-slides">
                          <!-- Tutor Thumbnail -->
                          <div class="tutor-thumbnail">
                              <img src="img/bg-img/t3.png" alt="">
                          </div>
                          <!-- Tutor Information -->
                          <div class="tutor-information text-center">
                              <h5>Ameer Hamza</h5>
                              <span><i class="fa fa-chevron-right" style="color:red;margin-right:2%;"></i>Lead Web Developer</span>
                              <p>Bachelors In Information Technology</p>
                              <p><i class="fa fa-map-pin" style="margin-right:2%;color:blue;"></i>PUCIT</p>
                              <div class="social-info">
                                  <a href="https://www.facebook.com/haaammmzzaaa"><i class="fa fa-facebook-square" aria-hidden="true" style="color:blue;"></i></a>
                                  <!-- <a href="hamzagee@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a> -->
                                  <a href="https://www.linkedin.com/in/haaammmzzaaa/"><i class="fa fa-linkedin-square" aria-hidden="true" style="color:blue;"></i></a>
                              </div>
                              <div class="social-info">
                                <p><i class="fa fa-chevron-right" style="margin-top:1%; margin-right:2%;color:red;"></i><a href="https://www.gmail.com"><i class="fa fa-envelope" aria-hidden="true" style="color:#800000;"></i></a>hamzagee@gmail.com</p>
                              </div>
                          </div>
                      </div>

                      <!-- Single Tutors Slide -->
                      <div class="single-tutors-slides">
                          <!-- Tutor Thumbnail -->
                          <div class="tutor-thumbnail">
                              <img src="img/bg-img/t4.png" alt="">
                          </div>
                          <!-- Tutor Information -->
                          <div class="tutor-information text-center">
                              <h5>Aurangzeb Khan</h5>
                              <span><i class="fa fa-chevron-right" style="color:red;margin-right:2%;"></i>Lead Front End Developer</span>
                              <p>Bachelors In Information Technology</p>
                              <p><i class="fa fa-map-pin" style="margin-right:2%;color:blue;"></i>PUCIT</p>
                              <div class="social-info">
                                  <a href="https://www.facebook.com/iizzaurang"><i class="fa fa-facebook-square" style="color:blue;" aria-hidden="true"></i></a>
                                  <!-- <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> -->
                                  <a href="https://www.linkedin.com/in/aurangzeb-khan-112363131/"><i style="color:blue;" class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                              </div>
                              <div class="social-info">
                                <p><i class="fa fa-chevron-right" style="margin-top:1%; margin-right:2%;color:red;"></i><a href="https://www.gmail.com"><i style="color:#800000;" class="fa fa-envelope" aria-hidden="true"></i></a>aurangzebbbk@gmail.com</p>
                              </div>
                          </div>
                      </div>

                      <div class="single-tutors-slides">
                          <!-- Tutor Thumbnail -->
                          <div class="tutor-thumbnail">
                              <img src="img/bg-img/t6.png" alt="">
                          </div>
                          <!-- Tutor Information -->
                          <div class="tutor-information text-center">
                              <h5>Zunnorain Zaheer</h5>
                              <span><i class="fa fa-chevron-right" style="color:red;margin-right:2%;"></i>Android Developer</span>
                              <p>Bachelors In Information Technology</p>
                              <p><i class="fa fa-map-pin" style="margin-right:2%;color:blue;"></i>PUCIT</p>
                              <div class="social-info">
                                  <a href="https://www.facebook.com/Zunnorain.Zaheer"><i class="fa fa-facebook-square" style="color:blue;" aria-hidden="true"></i></a>

                                  <a href="https://www.linkedin.com/in/zunnorain-zaheer-b69646131/?originalSubdomain=pk"><i style="color:blue;" class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                              </div>
                              <div class="social-info">
                                <p><i class="fa fa-chevron-right" style="margin-top:1%; margin-right:2%;color:red;color:red;"></i><a href="https://www.gmail.com"><i style="color:#800000;" class="fa fa-envelope" aria-hidden="true" style="color:red;"></i></a>zunnorainzaheer360@gmail.com</p>
                              </div>
                          </div>
                      </div>

                      <!-- Single Tutors Slide -->
                      <div class="single-tutors-slides">
                          <!-- Tutor Thumbnail -->
                          <div class="tutor-thumbnail">
                              <img src="img/bg-img/t5.png" alt="">
                          </div>
                          <!-- Tutor Information -->
                          <div class="tutor-information text-center">
                              <h5>M. Moeez Saiyam</h5>
                              <span><i class="fa fa-chevron-right" style="color:red;margin-right:2%;"></i>Front End Developer</span>
                              <p>Bachelors In Information Technology</p>
                              <p><i class="fa fa-map-pin" style="color:blue;margin-right:2%;"></i>PUCIT</p>
                              <div class="social-info">
                                  <a href="https://www.facebook.com/moeez.saiyam.1"><i class="fa fa-facebook-square" style="color:blue;" aria-hidden="true"></i></a>
                                  <a href="https://www.linkedin.com/in/moeez-saiyam-01098812b/"><i class="fa fa-linkedin-square" style="color:blue;" aria-hidden="true"></i></a>
                              </div>
                              <div class="social-info">
                                <p><i class="fa fa-chevron-right" style="margin-top:1%; margin-right:2%;color:red;"></i><a href="https://www.gmail.com"><i class="fa fa-envelope" aria-hidden="true" style="color:#800000;"></i></a>moeezsaiyam@gmail.com</p>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="{{route('page.home')}}"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>

                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by We6 with <i class="fa fa-heart-o" aria-hidden="true"></i></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->

    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="customjs/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="customjs/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="customjs/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="customjs/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="customjs/active.js"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGQs-TY6bUtndfezIiYNev6pCD1tcfTso&libraries=geometry"></script>
    {{-- <script src="customjs/google-map/map-active.js"></script> --}}
    <script>
    var LatLng = new google.maps.LatLng(31.571675, 74.314344);
    var myLatLng = new google.maps.LatLng(31.570506, 74.309611);
    var mapOptions = {
      zoom: 16,
      center: LatLng,
      scrollwheel: false,
      scaleControl: true,
      disableDefaultUI: false,
      streetViewControl: false,
      mapTypeControlOptions: {
        mapTypeIds: ['gMap',google.maps.MapTypeId.ROADMAP]
      }
    };
    map = new google.maps.Map(document.getElementById("contactgoogleMap"), mapOptions);
    var stylez = [
        {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#e9e9e9"
                },
                {
                    "lightness": 17
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#f5f5f5"
                },
                {
                    "lightness": 20
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 17
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 29
                },
                {
                    "weight": 0.2
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 18
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 16
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#f5f5f5"
                },
                {
                    "lightness": 21
                }
            ]
        },
        {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#dedede"
                },
                {
                    "lightness": 21
                }
            ]
        },
        {
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 16
                }
            ]
        },
        {
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "saturation": 36
                },
                {
                    "color": "#333333"
                },
                {
                    "lightness": 40
                }
            ]
        },
        {
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#f2f2f2"
                },
                {
                    "lightness": 19
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#fefefe"
                },
                {
                    "lightness": 20
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#fefefe"
                },
                {
                    "lightness": 17
                },
                {
                    "weight": 1.2
                }
            ]
        }
    ];
    var mapType = new google.maps.StyledMapType(stylez, {
      name: "Grayscale"
    });
    map.mapTypes.set('gMap', mapType);
    map.setMapTypeId('gMap');

    var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });



    </script>

</body>

</html>
