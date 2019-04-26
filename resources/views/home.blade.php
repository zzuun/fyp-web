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
    <link rel="stylesheet" href="home.css">

</head>

<body>
  <!-- <div id="myModal" class="modal">


    <div class="modal-content">
      <span class="close22">&times;</span>
      <p>Some text in the Modal..</p>
    </div>

  </div> -->
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
                    <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>

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
                                <li><a href="#">Home</a></li>
                                <li><a href="{{route('page.interCompare')}}">Compare Colleges</a></li>
                                <li><a href="{{route('page.undergraduateCompare')}}">Compare Universities</a></li>
                                <li><a href="{{route('page.timer')}}">Contact</a></li>
                            </ul>

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
                        <h2>Let Us Help You To Find You A Way!</h2>
                        <h6 style="color:white;">Our goal is to assist people to design the career and
                          education pathways that lead to live a life of "CHOICE" not "CHANCE". </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->
    <div class="blog-catagories mb-50 d-flex flex-wrap">
      <div class="col-12">
            <div class="section-heading2">
                <h5>Find the best Colleges, Universities and Degree Programs! Give it a try?</h5>
            </div>
        </div>

        <!-- Single Catagories -->
        <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc2.jpg);left:25%;">
          <a href="{{route('intermediate.main')}}">
              <h6>Intermediate</h6>
          </a>
        </div>

        <!-- Single Catagories -->
        <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc3.jpg);left:50%;">
          <a href="{{route('undergraduate.main')}}">
              <h6>Undergraduate</h6>
          </a>
        </div>
      </div>
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
                        @php
                          $cCount = App\Institute::where('instituteType','College')->count();
                        @endphp
                        <h2><span class="counter">{{$cCount}}</span></h2>
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
                        @php
                          $uCount = App\Institute::where('instituteType','University')->count();
                        @endphp
                        <h2><span class="counter">{{$uCount}}</span></h2>
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
                        @php
                          $dCount = App\Department::count();
                        @endphp
                        <h2><span class="counter">{{$dCount}}</span></h2>
                        <h5>Departments</h5>
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
                          @php
                            $dCount = App\Degree::count();
                          @endphp
                        <h2><span class="counter">{{$dCount}}</span></h2>
                        <h5>Degrees</h5>
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
                        <h3>Explore Us</h3>
                    </div>
                </div>

            </div>

            <div class="row">
              <div class="col-12">
                  <div class="course-content">

                      <div class="clever-tabs-content">
                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item" style="margin-left: 10%;">
                                  <a class="nav-link active" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Home</a>
                              </li>
                              <li class="nav-item" style="margin-left: 5%;">
                                  <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">Top Colleges</a>
                              </li>
                              <li class="nav-item" style="margin-left: 5%;">
                                  <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">Top Universities</a>
                              </li>
                              <li class="nav-item" style="margin-left: 5%;">
                                  <a class="nav-link" id="tab--4" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="true">Popular Degrees</a>
                              </li>
                          </ul>

                          <div class="tab-content" id="myTabContent">
                                <!-- Tab Text -->
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">



                                </div>

                                              <!-- Tab Text -->
                                              <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                                <div class="col-12">
                                                    <div class="section-heading">
                                                        <h3>Explore Top Colleges</h3>
                                                        <h4>In Lahore</h4>
                                                    </div>
                                                </div>
                                                <!-- Single Upcoming Events -->
                                                <div class="row">

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                           <a href="nust.html">
                                                            <h4>Government College University</h4>
                                                            <div class="total-ratings d-flex float-right" align="right">
                                                                <div class="ratings-text">
                                                                  <img src="img/bg-img/t1.png" alt="">
                                                                </div>
                                                              </div>
                                                            <ul>
                                                            <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>  042-99213349</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i>   GC University, Katchery Road, Lahore</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-book" aria-hidden="true" style="color: #e3d21b;"></i>  FSC Pre Engg - Pre Med - ICS - ICOM - FA</span>
                                                              </ul>
                                                            </a>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat" >
                                                                <a>
                                                                  <i id="favIcon" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                           <a href="nust.html">
                                                            <h4>Punjab Group of Colleges</h4>
                                                            <div class="total-ratings d-flex float-right" align="right">
                                                                <div class="ratings-text">
                                                                  <img src="img/bg-img/t1.png" alt="">
                                                                </div>
                                                              </div>
                                                            <ul>
                                                            <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>  042-35870192-6</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i>   64-E/1, Gulberg-III, Lahore</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-book" aria-hidden="true" style="color: #e3d21b;"></i>  FSC Pre Engg - ICS - ICOM - FSC Pre Med - FA</span>
                                                              </ul>
                                                            </a>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat2" >
                                                                <a>
                                                                  <i id="favIcon2" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                           <a href="nust.html">
                                                            <h4>Lahore College for Women University</h4>
                                                            <div class="total-ratings d-flex float-right" align="right">
                                                                <div class="ratings-text">
                                                                  <img src="img/bg-img/t1.png" alt="">
                                                                </div>
                                                              </div>
                                                            <ul>
                                                            <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>  042-99203077</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i>    LCWU, Jail Road, Lahore</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-book" aria-hidden="true" style="color: #e3d21b;"></i>  FA Arts - FSc Pre Eng-  FSc Pre Med - ICom Gen. Science - ICS Phy - ICS Stats - Home Economics</span>
                                                              </ul>
                                                            </a>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat3" >
                                                                <a>
                                                                  <i id="favIcon3" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                           <a href="nust.html">
                                                            <h4>Forman Christian College (FCC)</h4>
                                                            <div class="total-ratings d-flex float-right" align="right">
                                                                <div class="ratings-text">
                                                                  <img src="img/bg-img/t1.png" alt="">
                                                                </div>
                                                              </div>
                                                            <ul>
                                                            <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>  042-99230703</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i>     Forman Christian College, Ferozepur Road, Lahore</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-book" aria-hidden="true" style="color: #e3d21b;"></i>  FSc Pre Engg - FSc Pre Med - ICS CS - ICom - FA Arts - FA General Sci</span>
                                                              </ul>
                                                            </a>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat4" >
                                                                <a>
                                                                  <i id="favIcon4" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                           <a href="nust.html">
                                                            <h4>Fazaia Inter College Lahore</h4>
                                                            <div class="total-ratings d-flex float-right" align="right">
                                                                <div class="ratings-text">
                                                                  <img src="img/bg-img/t1.png" alt="">
                                                                </div>
                                                              </div>
                                                            <ul>
                                                            <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>   042-6683924</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i>   Munir Road, Lahore Cantt</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-book" aria-hidden="true" style="color: #e3d21b;"></i>  FSc Pre Eng - FSc Pre Med - FA - ICom - ICS </span>
                                                              </ul>
                                                            </a>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat5" >
                                                                <a>
                                                                  <i id="favIcon5" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                           <a href="nust.html">
                                                            <h4>The Superior Group of Colleges</h4>
                                                            <div class="total-ratings d-flex float-right" align="right">
                                                                <div class="ratings-text">
                                                                  <img src="img/bg-img/t1.png" alt="">
                                                                </div>
                                                              </div>
                                                            <ul>
                                                            <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>  042-38104221</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i>   Main Raiwind Road, Lahore</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-book" aria-hidden="true" style="color: #e3d21b;"></i> FSc. Pre Med - FSc Pre Eng - ICS Comp. - FA Arts - ICom</span>
                                                              </ul>
                                                            </a>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat6" >
                                                                <a>
                                                                  <i id="favIcon6" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                           <a href="nust.html">
                                                            <h4>Kinnaird College for Women University</h4>
                                                            <div class="total-ratings d-flex float-right" align="right">
                                                                <div class="ratings-text">
                                                                  <img src="img/bg-img/t1.png" alt="">
                                                                </div>
                                                              </div>
                                                            <ul>
                                                            <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>  042-99203788</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i>    93-Jail Road, Lahore</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-book" aria-hidden="true" style="color: #e3d21b;"></i>  FSc Pre Engg - FA Humanities - FA General Sci. - ICom - ICS - ICS (Stats) - ICS(Phy) </span>
                                                              </ul>
                                                            </a>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat7" >
                                                                <a>
                                                                  <i id="favIcon7" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                           <a href="nust.html">
                                                            <h4>Aitchison College</h4>
                                                            <div class="total-ratings d-flex float-right" align="right">
                                                                <div class="ratings-text">
                                                                  <img src="img/bg-img/t1.png" alt="">
                                                                </div>
                                                              </div>
                                                            <ul>
                                                            <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>  042-36362989</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i>    Aitchison College, Shahrah-e-Quaid-e-Azam, Lahore</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-book" aria-hidden="true" style="color: #e3d21b;"></i>  A Level - FSc Pre Engg - FSc Pre Med - ICom - ICS </span>
                                                              </ul>
                                                            </a>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat8" >
                                                                <a>
                                                                  <i id="favIcon8" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>





                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="load-more text-center mt-100 wow fadeInUp" data-wow-delay="50ms">
                                                            <a href="searchfilters.html" class="btn clever-btn-view-more btn-2">View More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>

                                              <!-- Tab Text -->
                                              <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                                <div class="col-12">
                                                    <div class="section-heading">
                                                        <h3>Explore Top Universities</h3>
                                                        <h4>In Lahore</h4>
                                                    </div>
                                                </div>
                                                <!-- Single Upcoming Events -->
                                                <div class="row">

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                           <a href="searchfilters.html">
                                                            <h4>LUMS</h4>
                                                            <div class="total-ratings d-flex float-right" align="right">
                                                                <div class="ratings-text">
                                                                  <img src="img/bg-img/t1.png" alt="">
                                                                </div>
                                                              </div>
                                                            <ul>
                                                            <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i> (042) 35608000</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i> Opposite Sector U, DHA,Lahore </span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-book" aria-hidden="true" style="color: #e3d21b;"></i> HEC RANKING: 6</span>
                                                              </ul>
                                                            </a>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat1" >
                                                                <a>
                                                                  <i id="favIcon55" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                           <a href="searchfilters.html">
                                                            <h4> University of the Punjab </h4>
                                                            <div class="total-ratings d-flex float-right" align="right">
                                                                <div class="ratings-text">
                                                                  <img src="img/bg-img/t1.png" alt="">
                                                                </div>
                                                              </div>
                                                            <ul>
                                                            <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>  (042) 990161201-5</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i>  PU, Canal Bank Rd, Lahore,</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-book" aria-hidden="true" style="color: #e3d21b;"></i>  HEC RANKING: 1</span>
                                                              </ul>
                                                            </a>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat" >
                                                                <a>
                                                                  <i id="favIcon2" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                           <a href="searchfilters.html">
                                                            <h4>Kinnaird Women University	</h4>
                                                            <div class="total-ratings d-flex float-right" align="right">
                                                                <div class="ratings-text">
                                                                  <img src="img/bg-img/t1.png" alt="">
                                                                </div>
                                                              </div>
                                                            <ul>
                                                            <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i> (042) 99203781</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i>   Kinnaird College, 93-Jail Road, Lahore</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-book" aria-hidden="true" style="color: #e3d21b;"></i> HEC RANKING: 53</span>
                                                              </ul>
                                                            </a>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat" >
                                                                <a>
                                                                  <i id="favIcon3" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                           <a href="searchfilters.html">
                                                            <h4>FAST - NUCES	</h4>
                                                            <div class="total-ratings d-flex float-right" align="right">
                                                                <div class="ratings-text">
                                                                  <img src="img/bg-img/t1.png" alt="">
                                                                </div>
                                                              </div>
                                                            <ul>
                                                            <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>  (042) 111-128-128</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i>  NUCES, Block B, Faisal Town,Lahore</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-book" aria-hidden="true" style="color: #e3d21b;"></i>  HEC RANKING: 21</span>
                                                              </ul>
                                                            </a>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat" >
                                                                <a>
                                                                  <i id="favIcon4" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                           <a href="searchfilters.html">
                                                            <h4>UET LAHORE</h4>
                                                            <div class="total-ratings d-flex float-right" align="right">
                                                                <div class="ratings-text">
                                                                  <img src="img/bg-img/t1.png" alt="">
                                                                </div>
                                                              </div>
                                                            <ul>
                                                            <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>  (042) 99029258</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i>   UET, Mughalpura, Lahore</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-book" aria-hidden="true" style="color: #e3d21b;"></i>  HEC RANKING: 5</span>
                                                              </ul>
                                                            </a>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat" >
                                                                <a>
                                                                  <i id="favIcon5" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                           <a href="searchfilters.html">
                                                            <h4>University of Lahore </h4>
                                                            <div class="total-ratings d-flex float-right" align="right">
                                                                <div class="ratings-text">
                                                                  <img src="img/bg-img/t1.png" alt="">
                                                                </div>
                                                              </div>
                                                            <ul>
                                                            <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>  +92 (0)42 35963421-8</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i>   1 - KM Raiwind Road, Lahore</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-book" aria-hidden="true" style="color: #e3d21b;"></i>  HEC RANKING: 29</span>
                                                              </ul>
                                                            </a>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat" >
                                                                <a>
                                                                  <i id="favIcon6" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                           <a href="searchfilters.html">
                                                            <h4>University of Management & Technology	</h4>
                                                            <div class="total-ratings d-flex float-right" align="right">
                                                                <div class="ratings-text">
                                                                  <img src="img/bg-img/t1.png" alt="">
                                                                </div>
                                                              </div>
                                                            <ul>
                                                            <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>  +92 42 35212801</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i> Block C 2 Phase 1 Johar Town, Lahore</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-book" aria-hidden="true" style="color: #e3d21b;"></i> HEC RANKING: 35	</span>
                                                              </ul>
                                                            </a>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat" >
                                                                <a>
                                                                  <i id="favIcon7" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                           <a href="searchfilters.html">
                                                            <h4>FCU Lahore	</h4>
                                                            <div class="total-ratings d-flex float-right" align="right">
                                                                <div class="ratings-text">
                                                                  <img src="img/bg-img/t1.png" alt="">
                                                                </div>
                                                              </div>
                                                            <ul>
                                                            <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>  +92(42)9231581-88</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i>  FCU, Ferozepur Road Lahore</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-book" aria-hidden="true" style="color: #e3d21b;"></i> HEC RANKING: 20</span>
                                                              </ul>
                                                            </a>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat" >
                                                                <a>
                                                                  <i id="favIcon8" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                           <a href="searchfilters.html">
                                                            <h4>Government College University</h4>
                                                            <div class="total-ratings d-flex float-right" align="right">
                                                                <div class="ratings-text">
                                                                  <img src="img/bg-img/t1.png" alt="">
                                                                </div>
                                                              </div>
                                                            <ul>
                                                            <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>  (042) 111-000-010</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i>   GC University, Katchery Road, Lahore</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-book" aria-hidden="true" style="color: #e3d21b;"></i> HEC RANKING: 14</span>
                                                              </ul>
                                                            </a>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat" >
                                                                <a>
                                                                  <i id="favIcon9" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                           <a href="searchfilters.html">
                                                            <h4>King Edward Medical University</h4>
                                                            <div class="total-ratings d-flex float-right" align="right">
                                                                <div class="ratings-text">
                                                                  <img src="img/bg-img/t1.png" alt="">
                                                                </div>
                                                              </div>
                                                            <ul>
                                                            <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>  (042) 99211145</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i>   Mayo Hospital Road, Anarkali</span>
                                                            </ul>
                                                            <ul>
                                                            <span><i class="fa fa-book" aria-hidden="true" style="color: #e3d21b;"></i> HEC RANKING: 5</span>
                                                              </ul>
                                                            </a>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat" >
                                                                <a>
                                                                  <i id="favIcon10" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="load-more text-center mt-100 wow fadeInUp" data-wow-delay="50ms">
                                                            <a href="searchfilters.html" class="btn clever-btn-view-more btn-2">View More</a>
                                                        </div>
                                                    </div>
                                                </div>

                                              </div>


                                              <!-- Tab Text -->
                                              <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab--4">

                                                <div class="col-12">
                                                    <div class="section-heading">
                                                        <h3>Explore Top Universities</h3>
                                                        <h4>In Lahore</h4>
                                                    </div>
                                                </div>
                                                <!-- Single Upcoming Events -->
                                                <div class="row">

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                          <h4>Chartered Accountant</h4>

                                                            <h6>Chartered accountancy is considered the top profession, since it offers a very highly paying job. To become a chartered accountant it requires at least 4.5 years of CA course provided all exams are cleared in first attempt. You can register for CA Foundation after 10th class. After 12th class the foundation exam can be taken, once this exam is cleared you can appear for Intermediate level after almost 1 year. After clearing Intermediate level 3 years of Article ship (internship) is required. The subjects that you need to be strong at are Accounts, Mathematics and Economics.
                                                            After doing your CA you will be able to analyze and interpret business problems and develop solutions.</h6>
                                                            <ul>
                                                            <span><i class="fa fa-money"  aria-hidden="true" style="color: #e3d21b;"></i> Rs. 75,000 - Rs. 5,00,000/- (per month) </span>
                                                            </ul>

                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat1" >
                                                                <a>
                                                                  <i id="favIcon55" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                          <h4>IT Professional</h4>

                                                            <h6>IT is an emerging industry all over the world. It contributes in every sector, and is an integral part of all the businesses. There is a great demand for IT professional all over the world. To become a software engineer you should have a good hold on Mathematics. Software engineers have to know a few basic programming languages like C++, C#, Java, Java Script, Python. After your Intermediate, you can start your Bachelors program in computer sciences and then move onto Master’s degree. After doing your master degree you can work as a software engineer, network engineer, systems analyst, IT consultant, web designer/developer etc. </h6>
                                                            <ul>
                                                            <span><i class="fa fa-money"  aria-hidden="true" style="color: #e3d21b;"></i> Rs. 50,000 - Rs. 5,00,000/- (per month) </span>
                                                            </ul>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat" >
                                                                <a>
                                                                  <i id="favIcon2" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                          <h4>Aviation Manager</h4>

                                                            <h6>Very less students take aviation management into consideration, but this is also a good career to pursue. An aviation manager handles the navigation of airlines and makes sure of their safety. Taking up this career does require special trainings and education. You will have to do you bachelors and then masters in engineering with aviation management and administration courses, public and business management will also be required with it. You will also need to have certain skills to be an aviation manager like knowledge of Federal Air Regulations (FAR), being capable of making fingerprint and background checks. This is a highly paying job but it requires one to be alert, smart and active at all times.</h6>
                                                            <ul>
                                                            <span><i class="fa fa-money"  aria-hidden="true" style="color: #e3d21b;"></i> Rs. 1,50,000 - Rs. 7,50,000/- (per month) </span>
                                                            </ul>

                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat" >
                                                                <a>
                                                                  <i id="favIcon3" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                          <h4>University Lecturer</h4>

                                                            <h6>University lecturer is also a growing trend nowadays, since it offers a good salary package. However to become a lecturer you need to be well qualified in your subject. Whatever subject of specialization you choose, it is better to have at least a master’s degree in it. Having a Ph.D. is a plus. To become a lecturer it is essential to possess teaching skills along with the ability and drive to research for the latest in your area of specialization.</h6>
                                                            <ul>
                                                            <span><i class="fa fa-money"  aria-hidden="true" style="color: #e3d21b;"></i> Rs. 30,000 - Rs. 1,50,000/- (per month) </span>
                                                            </ul>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat" >
                                                                <a>
                                                                  <i id="favIcon4" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                          <h4>Mechanical Engineer</h4>

                                                            <h6>Mechanical engineering is done after Intermediate, it normally takes four years to complete and the degree earned is BEng and upon completion of studies MEng. This program enables students to design, manufacture, maintain and test different devices and mechanical systems. They also learn communication and problem-solving skill along with critical thinking to work effectively so that their projects work efficiently. This is one of a high demand jobs, which offers good position not only in Pakistan but also in Gulf states.</h6>
                                                            <ul>
                                                            <span><i class="fa fa-money"  aria-hidden="true" style="color: #e3d21b;"></i> Rs. 30,000 - Rs. 2,25,000/- (per month) </span>
                                                            </ul>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat" >
                                                                <a>
                                                                  <i id="favIcon5" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                          <h4>Project Manager</h4>

                                                            <h6>Project management is also one of the very well-paying jobs with growth possibilities on a higher scale. To become a Project Manager you will require Project Management certifications, they are sometimes done from institutions or are even arranged/conducted by the organizations for their employees. For a formal certification you can opt for PMP (Project Management Professional) which is an internationally recognized certification conducted by the PMI (Project Management Institute). A Project Manager has an important role in an organization and must possess leadership skills for planning, obtaining and execution of a project. In this field only degree and certifications doesn’t serve full purpose, rather you will also require a good amount of experience to excel in your field. Once successful, the growth rate is impressive.</h6>
                                                            <ul>
                                                            <span><i class="fa fa-money"  aria-hidden="true" style="color: #e3d21b;"></i> Rs. 25,000 - Rs. 1,50,000/- (per month) </span>
                                                            </ul>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat" >
                                                                <a>
                                                                  <i id="favIcon6" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">

                                                            <h4>Creative Designer</h4>

                                                              <h6>To be a creative designer the first thing that you will need is the creativity within you. This profession is gaining popularity on the corporate level, since all organizations need to be publicized on print media as well as the social media and the internet. You will need to have degree in Creative and Graphic Designing and other visual art subjects. To gain a job, you will also need to have a portfolio to show your creativity or some relevant work as sample. This work does not restrict you to a professionally earned degree, since it requires skill on the application that you work on and a very creative mind. As a creative designer you will be introducing new and stylish logos, website designs and models etc.</h6>
                                                              <ul>
                                                              <span><i class="fa fa-money"  aria-hidden="true" style="color: #e3d21b;"></i> Rs. 15,000 - Rs. 80,000/- (per month) </span>
                                                              </ul>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat" >
                                                                <a>
                                                                  <i id="favIcon7" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                          <h4>Marketing Manager</h4>

                                                            <h6>Making and selling of products and services will never end, and someone is always required to place the product /service in the market well enough to attract public and sales. Although, it is the convincing personality of a person that can generate sales, but a proper business degree can polish the traits and make you a professional at what you already possess. A business professional must also be able to analyze problems and come up with solutions. A marketing plan requires the knowledge of market and trend of public. To study the marketing management program you have to gain Master degree in Business Administration. The master’s program is taken up after the bachelor’s degree.</h6>
                                                            <ul>
                                                            <span><i class="fa fa-money"  aria-hidden="true" style="color: #e3d21b;"></i> Rs. 30,000 - Rs. 2,00,000/- (per month) </span>
                                                            </ul>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat" >
                                                                <a>
                                                                  <i id="favIcon8" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">
                                                          <h4>Telecom Engineer</h4>
                                                          <h6>In the advanced age of technology, telecommunications is the fastest growing industry, which generates billions of rupees from its services on a daily basis. This industry holds very good growth opportunity for its employees since the technology business will always stay in demand. Initially the degree required to join the telecom industry was Electrical Engineering but now many institutes are offering degrees in telecommunications. Technical ability, attention to detail, communication and problem-solving skills are required to do this job.</h6>
                                                            <ul>
                                                            <span><i class="fa fa-money"  aria-hidden="true" style="color: #e3d21b;"></i> Rs. 25,000 - Rs. 1,00,000/- (per month) </span>
                                                            </ul>

                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat" >
                                                                <a>
                                                                  <i id="favIcon9" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>
                                                            <div class="course-fee2 h-100">
                                                              <a>
                                                              <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                  <div class="boxstyle2"  style="cursor: pointer;">
                                                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="50ms">

                                                        <!-- Course Content -->
                                                        <div class="course-content">

                                                          <h4>HR Manager</h4>
                                                          <h6>To become HR manager, you will need an HR degree of bachelor level and in better cases on the Masters level. You can also have a Degree in Business Administration to excel in this field. A human resource manager must have good communication and problem solving skill because your direct contact will be with the employees of the company. You will be responsible for interviewing, hiring and placement of the employees so that the organization functions efficiently and effectively.</h6>
                                                            <ul>
                                                            <span><i class="fa fa-money"  aria-hidden="true" style="color: #e3d21b;"></i> Rs. 35,000 - Rs. 1,50,000/- (per month) </span>
                                                            </ul>
                                                        </div>
                                                        <!-- Seat Rating Fee -->
                                                        <div class="seat-rating-fee d-flex justify-content-between">
                                                            <div class="seat-rating h-100 d-flex align-items-center">
                                                              <div class="seat" >
                                                                <a>
                                                                  <i id="favIcon10" class="fa fa-heart-o"></i>
                                                              </a>
                                                              </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5>Apart from all these, there are many other professions which can be taken up and are very well paying as well, some of which are, doctors, lawyers, armed forces, pharmacists, architects, and many more. You have to pick a profession that is just right for you, the one that you enjoy doing. Last word is that</h5> <h5 style="color:green;" align="justify;">“hard work pays”.</h5>
                                                        <div class="load-more text-center mt-100 wow fadeInUp" data-wow-delay="50ms">
                                                            <a href="searchfilters.html" class="btn clever-btn-view-more btn-2">View More</a>
                                                        </div>
                                                    </div>
                                                </div>

                                              </div>

                                              <!-- Tab Text -->
                                              <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab--5">

                                              </div>


                                          </div>
                                      </div>
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
                      <div class="single-tutors-slides">
                          <!-- Tutor Thumbnail -->
                          <div class="tutor-thumbnail">
                              <img src="img/bg-img/t8.png" alt="">
                          </div>
                          <!-- Tutor Information -->
                          <div class="tutor-information text-center">
                              <h5>Dr. Muhammad Murtaza Yousaf</h5>
                              <p><b>CEO</b></p>
                              <span>Assistant Professor</span>
                              <p>PhD Computer Science, University of Innsbruck, Austria, 2008</p>
                              <p>M.Sc Computer Science, PU, 2001 (Gold Medal)</p>
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
                                <img src="img/bg-img/t7.png" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>Arsalan Jamal Khan</h5>
                                <span>Web Developer</span>
                                <p>Bachelors In Information Technology</p>
                                <p>PUCIT</p>
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
                                <span>Android Developer</span>
                                <p>Bachelors In Information Technology</p>
                                <p>PUCIT</p>
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
                                <span>Lead Web Developer</span>
                                <p>Bachelors In Information Technology</p>
                                <p>PUCIT</p>
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
                                <p>Bachelors In Information Technology</p>
                                <p>PUCIT</p>
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
                                <p>Bachelors In Information Technology</p>
                                <p>PUCIT</p>
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
                                <span>Front End Developer</span>
                                <p>Bachelors In Information Technology</p>
                                <p>PUCIT</p>
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

    <script>
          $(document).ready(function() {
        $('.seat').click(function() {
          $('#favIcon').toggleClass('fa-heart-o fa-heart');

        });
      });
    </script>

    <script>
          $(document).ready(function() {
        $('.seat2').click(function() {
          $('#favIcon2').toggleClass('fa-heart-o fa-heart');

        });
      });
    </script>

    <script>
          $(document).ready(function() {
        $('.seat3').click(function() {
          $('#favIcon3').toggleClass('fa-heart-o fa-heart');

        });
      });
    </script>

    <script>
          $(document).ready(function() {
        $('.seat4').click(function() {
          $('#favIcon4').toggleClass('fa-heart-o fa-heart');

        });
      });
    </script>

    <script>
          $(document).ready(function() {
        $('.seat5').click(function() {
          $('#favIcon5').toggleClass('fa-heart-o fa-heart');

        });
      });
    </script>

    <script>
          $(document).ready(function() {
        $('.seat6').click(function() {
          $('#favIcon6').toggleClass('fa-heart-o fa-heart');

        });
      });
    </script>

    <script>
          $(document).ready(function() {
        $('.seat7').click(function() {
          $('#favIcon7').toggleClass('fa-heart-o fa-heart');

        });
      });
    </script>

    <script>
          $(document).ready(function() {
        $('.seat8').click(function() {
          $('#favIcon8').toggleClass('fa-heart-o fa-heart');

        });
      });
    </script>



    <script>
          $(document).ready(function() {
        $('.seat1').click(function() {
          $('#favIcon55').toggleClass('fa-heart-o fa-heart');

        });
      });
    </script>


</body>

</html>
