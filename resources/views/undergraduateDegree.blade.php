<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>{{$details[0]->instituteName}}</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="universityDegree.css">


</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->

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
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="comparison.html">Compare</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                          <li><a href="contact.html">Contact</a></li>

                                    </ul>
                                </li>
                                <li><a href="comparison.html">Compare</a></li>
                                <li><a href="universityhomepage.html">University</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>

                            <!-- Register / Login -->
                            <div class="register-login-area">
                                <a href="#" class="btn">Register</a>

                                <a  href="onlyloginpage.html"class="btn">Login</a>
                              </div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

        <!-- ##### Breadcumb Area Start ##### -->
        <div class="breadcumb-area">
            <!-- Breadcumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('page.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('undergraduate.main')}}">Undergraduate</a></li>
                    
                    <li class="breadcrumb-item"><a href="/university?instituteid={{$details[0]->instituteid}}">{{$details[0]->instituteName}}</a></li>
                    <li class="breadcrumb-item"><a href="/department?departmentid={{$details[0]->departmentid}}">{{$details[0]->departmentName}}e</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$details[0]->degreeName}}</li>
                </ol>
            </nav>
        </div>
        <!-- ##### Breadcumb Area End ##### -->

        <!-- ##### Single Course Intro Start ##### -->
        <div class="hero-area bg-img bg-overlay-2by5 d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg3.jpg);">
            <!-- Content -->
            <div class="single-course-intro-content text-center">
                <!-- Ratings -->
                <div class="ratings">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <h3>{{$details[0]->instituteName}}</h3>
                <div class="meta d-flex align-items-center justify-content-center">
                  <div class="globalonly">
                    <a href="http://{{$details[0]->website}}" class="fa fa-globe"></a>
                  </div>
                </div>

            </div>
        </div>
        <!-- ##### Single Course Intro End ##### -->

        <!-- ##### Courses Content Start ##### -->
        <div class="single-course-content section-padding-100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="course--content">

                            <div class="clever-tabs-content">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Degrees</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">Fees</a>
                                    </li>

                                </ul>

                                <div class="tab-content" id="myTabContent">

                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                      <div class="clever-description">

                                        <div class="clever-curriculum mb-30">
                                          <div class="cl7 mb-30">
                                            <h4 class="d-flex justify-content-between"><span>Degree Specification</span></h4>
                                              <ul class="curriculum-list3">
                                                <ul>
                                                  <li>
                                                      <h6  style="color:rgba(0,0,0,0.5)"><i class="fa fa-info-circle" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i>Name</h6>
                                                      <h6>{{$details[0]->degreeName}}</h6>
                                                  </li>

                                                  <li>
                                                    <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-calculator" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i> Merit</h6>
                                                    <h6>{{$details[0]->lastMerit}} %</h6>
                                                  </li>

                                                  <li>
                                                    <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-calendar" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i> Duration</h6>
                                                    <h6>{{$details[0]->duration}}</h6>
                                                  </li>
                                                  <li>
                                                    <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-cogs" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i> System</h6>
                                                    <h6 style="color:;">{{$details[0]->system}}</h6>
                                                  </li>
                                                  <li>
                                                    <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-level-up" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i> Degree Level</h6>
                                                    <h6>{{$details[0]->degreeLevel}}</h6>
                                                  </li>
                                                  <li>
                                                    <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-sitemap" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i>No Of Seats</h6>
                                                    <h6>{{$details[0]->noOfSeats}}</h6>
                                                  </li>
                                                  <li>
                                                      @if($details[0]->shiftMorning == 1)
                                                        <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-sun-o" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i> Morning Shift</h6>
                                                        <h6 style="color:green;">Yes</h6>
                                                        

                                                      @else
                                                        <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-sun-o" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i> Morning Shift</h6>
                                                        <h6 style="color:green;">Yes</h6>
                                                      @endif
                                                  </li>
                                                  <li>
                                                      @if($details[0]->shiftAfternoon == 1)
                                                        <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-sun-o" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i> Afternoon Shift</h6>
                                                        <h6 style="color:green;">Yes</h6>
                                                        

                                                      @else
                                                        <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-sun-o" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i> Afternoon Shift</h6>
                                                        <h6 style="color:green;">No</h6>
                                                      @endif
                                                  </li>
                                                </ul>

                                              </ul>

                                        </div>
                                        </div>



                                      </div>
                                    </div>

                                    <!-- Tab Text -->
                                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                      <div class="clever-curriculum">
                                      <div class="cl2 mb-30">
                                          <h4 class="d-flex justify-content-between"><span>Fee Structure</span></h4>
                                            <ul class="curriculum-list">
                                              <li>
                                                <ul>

                                                      <li>
                                                        <span><i class="fa fa-money" aria-hidden="true"></i> Fees </span>
                                                        <span id="fees">{{currency($details[0]->fees,'PKR','PKR')}}</span>
                                                      </li>

                                                      <li>
                                                        <span><i class="fa fa-graduation-cap" aria-hidden="true"></i> Scholarships </span>
                                                        @if($details[0]->scholarship == 1)
                                                          <span><div class="text-success">Available</div></span>
                                                        @else
                                                          <span><div class="text-success">Not Available</div></span>
                                                        @endif
                                                      </li>
                                                    </ul>
                                              </li>
                                              <h6 class="special">Please note that we will not be responsible for any any recent changes.</h6>
                                          </ul>





                                            <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">

                                                <!-- Single Accordian Area -->
                                                <div class="panel single-accordion">
                                                    <h6><a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion"
                                                      href="#collapseOne">Find in different Currency
                                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                    </a></h6>
                                                    <div id="collapseOne" class="accordion-content collapse">

                                                      <p>
                                                        <label class="radios">PKR ₨
                                                            <input  id="rupee" type="radio"  checked="checked" name="curr">
                                                              <span class="checkmark"></span>
                                                          </label>
                                                      </p>
                                                          <p>

                                                        <label class="radios">USD $
                                                            <input  id="dollar" type="radio"  name="curr">
                                                              <span class="checkmark"></span>
                                                          </label>
                                                          </p>

                                                          <p>
                                                        <label class="radios">Saudi Riyal ﷼
                                                            <input id="riyal" type="radio" name="curr">
                                                              <span class="checkmark"></span>
                                                          </label>
                                                          </p>
                                                          <p>
                                                        <label class="radios">UK £
                                                            <input id="pound" type="radio" name="curr">
                                                              <span class="checkmark"></span>
                                                          </label>
                                                    </p>
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

                    <div class="col-12 col-lg-4">
                        <div class="course-sidebar">
                            <!-- Buy Course -->
                            <a href="/department?departmentid={{$details[0]->departmentid}}" class="btn clever-btn mb-30 w-100"><i class="fa fa-arrow-left"></i> Department Page</a>

                            <!-- Widget -->
                            <div class="sidebar-widget">
                                <h4>Degree Info</h4>
                                <ul class="features-list">
                                    <li>
                                        <h6><i class="fa fa-clock-o" aria-hidden="true"></i> Views</h6>
                                        <h6 style="color:orange;">{{$details[0]->numberOfViews}}</h6>
                                    </li>

                                    <li>
                                        <h6><i class="fa fa-hourglass-half" aria-hidden="true"></i> Credit Hours</h6>
                                        <h6 style="color:blue;">{{$details[0]->creditHours}}</h6>
                                    </li>
                                    <li>
                                        <h6><i class="fa fa-building-o" aria-hidden="true"></i> Department Name</h6>
                                        <h6 style="color:blue;font-size:12px;">{{$details[0]->departmentName}}</h6>
                                    </li>
                                    <li>
                                        <h6><i class="fa fa-building" aria-hidden="true"></i> University Name</h6>
                                        <h6 style="color:blue;font-size:12px;">{{$details[0]->instituteName}}</h6>
                                    </li>

                                    <!-- <li>
                                        <h6><i class="fa fa-thumbs-down" aria-hidden="true"></i> Max Retakes</h6>
                                        <h6>5</h6>
                                    </li> -->
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Courses Content End ##### -->

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
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by We6 with <i class="fa fa-heart-o" aria-hidden="true"></i></a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Footer Area -->
            <div class="bottom-footer-area d-flex justify-content-between align-items-center">
                <!-- Contact Info -->
                <div class="contact-info">
                    <a href="#"><span>Phone:</span> +44 300 303 0266</a>
                    <a href="#"><span>Email:</span> info@clever.com</a>
                </div>
                <!-- Follow Us -->
                <div class="follow-us">
                    <span>Follow us</span>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </footer>    <!-- ##### Footer Area End ##### -->

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

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="customjs/google-map/map-active.js"></script>

    <script>

      $("#rupee").on("click", function(){
        if($(this).is(":not(:checked)")){
          <?php
          $res = currency($details[0]->fees,'PKR','PKR') ?>
          document.getElementById("fees").innerHTML="~ {{$res}}";
        }
        else {
          <?php $res = currency($details[0]->fees,'PKR','PKR') ?>
          document.getElementById("fees").innerHTML="~ {{$res}}";
        }
      });
      $("#dollar").on("click", function(){
        if($(this).is(":not(:checked)")){
          <?php
          $res = currency($details[0]->fees,'PKR','PKR') ?>
          document.getElementById("fees").innerHTML="{{$res}}";
        }
        else {
          <?php $res = currency($details[0]->fees,'PKR','USD',false) ?>
          document.getElementById("fees").innerHTML="~ ${{(int)$res}}";
        }
      });
      $("#riyal").on("click", function(){
        if($(this).is(":not(:checked)")){
          <?php
          $res = currency($details[0]->fees,'PKR','PKR') ?>
          document.getElementById("fees").innerHTML="{{$res}}";
        }
        else {
          <?php $res = currency($details[0]->fees,'PKR','SAR',false) ?>
          document.getElementById("fees").innerHTML="~ {{(int)$res}} ﷼";
        }
      });
      $("#pound").on("click", function(){
        if($(this).is(":not(:checked)")){
          <?php
          $res = currency($details[0]->fees,'PKR','PKR') ?>
          document.getElementById("fees").innerHTML="{{$res}}";
        }
        else {
          <?php $res = currency($details[0]->fees,'PKR','GBP',false) ?>
          document.getElementById("fees").innerHTML="~ {{(int)$res}} £";
        }
      });
    </script>

</body>

</html>
