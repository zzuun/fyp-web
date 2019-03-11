<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>We6</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    </script>
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
                    <a class="nav-brand" href="/"><img src="img/core-img/logo.png" alt=""></a>

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
                        <div class="classynav">
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="{{ route('page.courses') }}">Courses</a></li>
                                        <li><a href="{{ route('page.single-course') }}">Single Courses</a></li>
                                        <li><a href="{{ route('page.instructors') }}">Instructors</a></li>
                                        <li><a href="{{ route('page.blog') }}">Blog</a></li>
                                        <li><a href="{{ route('page.blog-details') }}">Blog Details</a></li>
                                        <li><a href="{{ route('page.single-course') }}">Single Blog</a></li>
                                        <li><a href="{{ route('page.regular-page') }}">Regular Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('page.courses') }}">Courses</a></li>
                                <li><a href="{{ route('page.instructors') }}">Instructors</a></li>
                                <li><a href="{{ route('page.contact') }}">Contact</a></li>
                            </ul>

                            <!-- Register / Login -->
                            <div class="register-login-area">
                                <a href="#" class="btn">Register</a>

                                <a  href="{{ route('page.onlyloginpage') }}"class="btn">Login</a>
                              </div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(img/bg-img/bg1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2>Find The Best Institute For Yourself</h2>
                        <div class="clever-main-menu">
                          <!-- Search Button -->
                          <div class="search-area">
                              <form action="/search" method="POST" role="search" autocomplete="off">
                                  <input type="text" name="institute" id="institute" placeholder="Search Institutes">
                                  <div id="institutesList"></div>
                                  {{ csrf_field() }}
                                  <button id="submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                              </form>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->
    <!-- count of colleges and Universities -->
    <?php
    $uni = App\institute::all()->where('instituteType','=','University');
    $universities = $uni->count();
    $coll =   App\institute::all()->where('instituteType','=','College');
    $colleges = $coll->count();
    $loc =  DB::table('institutes')->distinct()->get(['parent_location']);
    $districts = $loc->count();
    $deg = DB::table('degrees')->distinct()->get(['degreeName']);
    $degrees = $deg->count();
    ?>
    <!-- ##### Cool Facts Area Start ##### -->
    <section class="cool-facts-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                  <div class="boxstyle" onclick="location.href='#';" style="cursor: pointer;">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <div class="icon">
                            <img src="img/core-img/docs.png" alt="">
                        </div>
                        <h2><span class="counter">{{ $colleges }}</span></h2>
                        <h5>Colleges</h5>
                    </div>
                  </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                  <div class="boxstyle" onclick="location.href='#';" style="cursor: pointer;">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="icon">
                            <img src="img/core-img/star.png" alt="">
                        </div>
                        <h2><span class="counter">{{ $universities }}</span></h2>
                        <h5>Universities</h5>
                    </div>
                  </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                  <div class="boxstyle" onclick="location.href='#';" style="cursor: pointer;">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <div class="icon">
                            <img src="img/core-img/events.png" alt="">
                        </div>
                        <h2><span class="counter">{{ $districts }}</span></h2>
                        <h5>Districts</h5>
                    </div>
                  </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                  <div class="boxstyle" onclick="location.href='#';" style="cursor: pointer;">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="1000ms">
                        <div class="icon">
                            <img src="img/core-img/earth.png" alt="">
                          </div>
                        <h2><span class="counter">{{ $degrees }}</span></h2>
                        <h5>Available Courses</h5>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Cool Facts Area End ##### -->

    <!-- ##### Popular Courses Start ##### -->
    <section class="popular-courses-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Popular Intermediate Courses</h3>
                    </div>
                </div>

            </div>

            <div class="row">
                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="boxstyle2" onclick="location.href='#';" style="cursor: pointer;">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="img/bg-img/c1.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>FSc. Pre Engineering</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Govt College University</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Pre Engineering</a>
                            </div>
                            <p>Government College Lahore is one of the pretigious institute,
                              creating and enhacing th... (click for more)</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee2 h-100">
                                <a href="index.html">
                                      <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                  </a>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>

                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="boxstyle2" onclick="location.href='#';" style="cursor: pointer;">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="img/bg-img/c2.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>FSc Pre Medical</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Punjab Group of Colleges</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Pre Medical</a>
                            </div>
                            <p>Punjab Group of Colleges is the largest institution network
                            in Pakistan. Our position...  (click for more)</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee2 h-100">
                                <a href="index.html">
                                      <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                    </a>
                              </div>
                        </div>
                    </div>
                  </div>
                </div>

                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="boxstyle2" onclick="location.href='#';" style="cursor: pointer;">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <img src="img/bg-img/c3.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Home Education</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">KIPS College</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">FA</a>
                            </div>
                            <p>KIPS college is among the biggest education in Lahore.
                            We believe in the future of ... (click for more)</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee2 h-100">
                                <a href="index.html">
                                      <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                  </a>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Popular Courses End ##### -->

    <!-- ##### Best Tutors Start ##### -->
    <section class="best-tutors-area section-padding-100">
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

                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="img/bg-img/t1.png" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>Arsalan J. Khan</h5>
                                <span>Coder</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
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
                                <span>Front End Developer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
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
                                <span>Code Geek</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
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
                                <span>Front End Developer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
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
                                <span>Android Developer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
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
                                <span>Android Developer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Best Tutors End ##### -->

    <!-- ##### Register Now Start ##### -->

    <!-- ##### Register Now End ##### -->

    <!-- ##### Upcoming Events Start ##### -->
    <section class="upcoming-events section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Upcoming events</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Upcoming Events -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Events Thumb -->
                        <div class="events-thumb">
                            <img src="img/bg-img/e1.jpg" alt="">
                            <h6 class="event-date">August 26</h6>
                            <h4 class="event-title">Networking Day</h4>
                        </div>
                        <!-- Date & Fee -->
                        <div class="date-fee d-flex justify-content-between">
                            <div class="date">
                                <p><i class="fa fa-clock"></i> August 26 @ 9:00 am</p>
                            </div>
                            <div class="events-fee">
                                <a href="#">$45</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Upcoming Events -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Events Thumb -->
                        <div class="events-thumb">
                            <img src="img/bg-img/e2.jpg" alt="">
                            <h6 class="event-date">August 7</h6>
                            <h4 class="event-title">Open Doors Day</h4>
                        </div>
                        <!-- Date & Fee -->
                        <div class="date-fee d-flex justify-content-between">
                            <div class="date">
                                <p><i class="fa fa-clock"></i> August 7 @ 9:00 am</p>
                            </div>
                            <div class="events-fee">
                                <a href="#" class="free">Free</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Upcoming Events -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="750ms">
                        <!-- Events Thumb -->
                        <div class="events-thumb">
                            <img src="img/bg-img/e3.jpg" alt="">
                            <h6 class="event-date">August 3</h6>
                            <h4 class="event-title">Creative Leadership</h4>
                        </div>
                        <!-- Date & Fee -->
                        <div class="date-fee d-flex justify-content-between">
                            <div class="date">
                                <p><i class="fa fa-clock"></i> August 3 @ 9:00 am</p>
                            </div>
                            <div class="events-fee">
                                <a href="#">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Upcoming Events End ##### -->

    <!-- ##### Blog Area Start ##### -->
      <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="index.html"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Copywrite -->
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made by We6 Inc with <i class="fa fa-heart-o" aria-hidden="true"></i></a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ URL::asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{ URL::asset('js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{ URL::asset('js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{ URL::asset('js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{ URL::asset('js/active.js')}}"></script>

</body>
<script type="text/javascript">
  $(document).ready(function(){
    $('#institute').keyup(function(){
       var query = $(this).val();
       if(query != '')
       {
         var _token = $('input[name="_token"]').val();
         $.ajax({
           url:"{{ route('institute.fetch') }}",
           method:"POST",
           data:{query:query, _token:_token},
           success:function(data)
           {
               $('#institutesList').fadeIn();
               $('#institutesList').html(data);
           }
         })
       }
       else
       {
         $('#institutesList').fadeOut();
       }
    });
  });

  $('#institute').focusout(function(){
    $('#institutesList').fadeOut();
  });


  $(document).on('click', 'li',function(){
    $('#institute').val($(this).text());
    $('#submit').click();
  });

</script>

</html>
