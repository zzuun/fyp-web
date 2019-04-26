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
    <link rel="stylesheet" href="universityDept.css">


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
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{route('page.home')}}">Home</a></li>
                                  </ul>
                                  <div class="classynav2">
                                </div>
                                <div class="classynav3">
                                  <ul>
                                    <li><a href="{{route('page.undergraduateCompare')}}">Compare</a></li>
                                  </ul>
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
                            <!-- Nav End -->
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
                    <li class="breadcrumb-item"><a href="{{'route(page.home)'}}"></a>Home</li>
                    <li class="breadcrumb-item"><a href="{{'route(undergraduate.main)'}}">Undergraduate</a></li>
                    <li class="breadcrumb-item"><a href="/university?instituteid={{$details[0]->instituteid}}">{{$details[0]->instituteName}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$details[0]->departmentName}}</li>
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
                <h3>{{$details[0]->departmentName}}</h3>
                <div class="meta d-flex align-items-center justify-content-center">
                  <div class="globalonly">
                    <a href="http://{{$details[0]->website}} class="fa fa-globe"></a>
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
                                        <a class="nav-link " id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">Faculty</a>
                                    </li>

                                </ul>

                                <div class="tab-content" id="myTabContent">

                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">

                                    <div class="clever-curriculum">



                                      <div id="mainID">


                                        <!-- Curriculum Level -->
                                          <div id="myUL" class="curriculum-level hide mb-30">
                                            <h4  class="d-flex justify-content-between"><span>{{$details[0]->departmentName}}</span></h4>
                                                <div class="curriculum-list">

                                                @php

                                                    $degrees=App\Department::find($details[0]->departmentid)->degrees;

                                                @endphp

                                                  <li>
                                                    <ul >
                                                        @foreach($degrees as $degree)
                                                        <li onmouseover="highlight(this);" onmouseout="unhighlight(this)">
                                                            <span><i class="fa fa-graduation-cap" aria-hidden="true"></i><a href="/degreeUniversity?degreeid={{$degree->id}}&instituteid={{$details[0]->instituteid}}&departmentid={{$details[0]->departmentid}}">{{$degree->name}}</a></span>
                                                            <span ></span>
                                                        </li>
                                                        @endforeach






                                                    </ul>
                                                  </li>
                                                  <div class="specialClass"></div>
                                                </div>
                                          </div>
                                        <!-- Curriculum Level -->


                                      </div>
                                    </div>


                                  </div>

                                    <!-- Tab Text -->
                                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                      <div class="clever-review">
                                          @php
                                            $faculties=DB::table('faculties')->join('departments','faculties.department_id','departments.id')
                                            ->where('departments.id',$details[0]->departmentid)
                                            ->select('faculties.name as name','faculties.designation as designation')
                                            ->get();
                                          @endphp

                                        @foreach($faculties as $faculty)
                                          <div class="clever-ratings d-flex align-items-center mb-30">

                                              <div class="total-ratings text-center d-flex align-items-center justify-content-center">
                                                  <div class="ratings-text">
                                                    <img src="img/bg-img/t1.png" alt="">

                                                  </div>
                                              </div>

                                                <div class="rating-viewer">
                                                  <!-- Rating -->

                                                  <h4>{{$faculty->name}}</h4>
                                                  <h6>{{$faculty->designation}}</h6>

                                                </div>
                                            </div>
                                        @endforeach

                                      </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="course-sidebar">
                            <!-- Buy Course -->
                            <a href="/university?instituteid={{$details[0]->instituteid}}" class="btn clever-btn mb-30 w-100"><i class="fa fa-arrow-left"></i> University Page</a>

                            <!-- Widget -->
                            <div class="sidebar-widget">
                                <h4>Department Info</h4>
                                @php
                                    $views=DB::table('departments')
                                    ->join('degrees','departments.id','degrees.department_id')
                                    ->select(DB::raw("sum('degrees.numberOfViews') as sum"))
                                    ->where('departments.id',$details[0]->departmentid)
                                    ->get();
                                @endphp
                                <ul class="features-list">
                                    <li>
                                        <h6><i class="fa fa-clock-o" aria-hidden="true"></i> Views</h6>
                                        <h6 style="color:orange;">{{$views[0]->sum}}</h6>
                                    </li>



                                        <!-- <li>
                                        <h6><i class="fa fa-code-fork" aria-hidden="true"></i>HEC Affiliation</h6>

                                            <h6><i class="fa fa-check-circle" style="color:blue"></i></h6>



                                        </li> -->

                                    <li>
                                        <h6><i class="fa fa-graduation-cap" aria-hidden="true"></i>Total Degrees</h6>
                                        <h6 style="color:blue;"></h6>
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
          function unhighlight(x) {
        x.style.backgroundColor = "transparent"
      }

      function highlight(x) {
        x.style.backgroundColor = "#f7d3d6"
        x.style.cursor = "pointer"

      }

      function specialhighlight(x) {
        x.style.fontSize = "16"
        x.style.cursor = "pointer"
        x.style.transitionDelay = "10ms"
        x.style.transitionDuration="2s"
      }

      function specialunhighlight(x) {
        x.style.backgroundColor = "transparent"

      }
</script>

<script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myUL li").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          $('.specialClass').html('Nothing')
      });



    });
  });
</script>


</body>

</html>
