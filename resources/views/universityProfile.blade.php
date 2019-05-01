<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>{{$institute->name}}</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="universityhomepage.css">


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
                    <li class="breadcrumb-item"><a href="{{route('page.home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('undergraduate.main')}}">Undergraduate</a></li>
                    <li class="breadcrumb-item"><a href="/univeristy?instituteid{{$institute->id}}">{{$institute->name}}</a></li>

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
                <h3>{{$institute->name}}</h3>
                <div class="meta d-flex align-items-center justify-content-center">
                  <div class="globalonly">
                    <a href="http://{{$address->website}}" class="fa fa-globe"></a>
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
                                        <a class="nav-link " id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">Departments</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="tab--4" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="true">Location</a>
                                    </li>

                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <!-- Tab Text -->
                                    <div class="tab-pane fade " id="tab1" role="tabpanel" aria-labelledby="tab--1">

                                        <div class="clever-description">

                                          <div class="clever-curriculum mb-30">
                                            <div class="cl7 mb-30">
                                              <h4 class="d-flex justify-content-between"><span>University Specification</span></h4>
                                                <ul class="curriculum-list3">

                                                    <ul>
                                                      <li>
                                                        <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-map-marker" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i> Location</h6>
                                                        <h6>Lahore</h6>
                                                      </li>

                                                      <li>
                                                        <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-bus" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i> Transportation</h6>

                                                            @if($institute->transportation==1)
                                                                <h6 style="color:#20ba72;">Available</h6>
                                                            @else
                                                                <h6 style="color:red;">Unavailable</h6>
                                                            @endif
                                                      </li>
                                                      <li>
                                                        <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-users" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i> Co-Education</h6>
                                                            @if($institute->coEducation == 1)
                                                                <h6 style="color:#20ba72;">Yes</h6>
                                                            @else
                                                                <h6 style="color:red;">No</h6>
                                                            @endif


                                                      </li>
                                                      <li>
                                                        <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-building" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i> Sector</h6>
                                                        <h6>{{$institute->sector}}</h6>
                                                      </li>
                                                      <li>
                                                        <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-code-fork" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i>Affiliation</h6>
                                                        <h6>{{$institute->affiliation}} <i class="fa fa-check-circle" style="color:blue"></i></h6>
                                                      </li>
                                                      @php

                                                        $town=DB::table('institutes')
                                                        ->join('addresses','institutes.id','addresses.institute_id')
                                                        ->join('towns','addresses.town_id','towns.id')
                                                        ->select('towns.name as townName')
                                                        ->where('institutes.id',$institute->id)
                                                        ->get();


                                                      @endphp
                                                      <li>
                                                          <h6  style="color:rgba(0,0,0,0.5)"><i class="fa fa-cube" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i>Town</h6>
                                                          <h6>{{$town[0]->townName}}</h6>
                                                      </li>
                                                      <li>
                                                          <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-cubes" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i>Sub-area</h6>
                                                          <h6>M Block</h6>
                                                      </li> -->
                                                    </ul>
                                                    </ul>

                                          </div>
                                          </div>

                                            <div class="clever-curriculum mb-30">
                                              <div class="cl7 mb-30">
                                                <h4 class="d-flex justify-content-between"><span>Contact Information</span></h4>
                                                  <ul class="curriculum-list3">

                                                      <ul>
                                                        <li>
                                                          <span><i class="fa fa-phone" aria-hidden="true"></i> {{$address->phone_number}} </span>
                                                          <span></span>
                                                        </li>

                                                        <li>
                                                            <span><i class="fa fa-envelope-o" aria-hidden="true"></i> {{$address->email}} </span>
                                                            <span></span>
                                                        </li>
                                                        <li>
                                                            <span><i class="fa fa-globe" aria-hidden="true"></i> {{$address->website}} </span>
                                                            <span></span>
                                                        </li>

                                                        <li>
                                                            <span><i class="fa fa-location-arrow" aria-hidden="true"></i> {{$address->location}}  </span>
                                                            <span></span>
                                                        </li>
                                                      </ul>
                                                      </ul>
                                                    </li>


                                                </ul>
                                            </div>
                                            </div>


                                        </div>
                                    </div>

                                    <!-- Tab Text -->
                                <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab--2">

                                    <div class="clever-curriculum">


                                        <div class="clever-faqs mb-30">
                                            <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">



                                                <div class="panel single-accordion align-items-center">
                                                  <div class="search-area">
                                                      <form method="post">
                                                          <input type="search" id="myInput" name="search" placeholder="Search Departments">
                                                          <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                                      </form>
                                                  </div>

                                              </div>
                                              </div>

                                        </div>
                                        <div id="mainID">

                                          <!-- Curriculum Level -->
                                        @foreach($departments as $department)
                                            <div id="myUL" class="curriculum-level mb-30" data-page="grad">
                                                <a href="/department?departmentid={{$department->id}}&instituteid={{$institute->id}}"><h4 class="d-flex justify-content-between"><span>{{$department->name}}</span></h4></a>

                                                <div class="curriculum-list">

                                                    @php
                                                        $degrees=DB::table('departments')->join('degrees','departments.id','degrees.department_id')
                                                        ->where('departments.id',$department->id)
                                                        ->select('degrees.id as degreeid','degrees.name as degreeName')->get();
                                                    @endphp
                                                    <li>
                                                        <ul>
                                                            @foreach($degrees as $degree)
                                                                <li onmouseover="highlight(this);" onmouseout="unhighlight(this)">
                                                                    <span><i class="fa fa-graduation-cap" aria-hidden="true"></i><a href="/degreeUniversity?degreeid={{$degree->degreeid}}&departmentid={{$department->id}}&instituteid={{$institute->id}}"> {{$degree->degreeName}} </a></span>
                                                                    <span></span>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>






                                    <!-- Tab Text -->
                                    <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab--4">
                                        <div class="clever-members">

                                            <!-- About Members -->
                                              <div class="about-members mb-30">
                                                <!-- <h4>Members</h4>
                                               -->
                                                <div class="map-area">
                                                    <div id="googleMap"></div>
                                                  </div>

                                            </div>

                                            <div class="about-members mb-30">
                                              <h4> Location </h4>
                                              <p>{{$address->location}}</p>
                                              <div class="curriculum-list">
                                                <ul>
                                                  <li>
                                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> Estimated Time: </span>
                                                    <span><b id="duration"></b></span>
                                                  </li>

                                                    <li>
                                                      <span><i class="fa fa-map-pin"  aria-hidden="true"></i> Distance From Current Location: </span>
                                                      <span><b id="distance"></b></span>
                                                    </li>

                                                    <li>
                                                    <input class="clever-btn" type="button" onclick="getDirections()" value="Get Directions">
                                                    </li>

                                                  </ul>
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
                            <a href="http://{{$address->website}}" class="btn clever-btn mb-30 w-100">Visit Website</a>

                            <!-- Widget -->
                            <div class="sidebar-widget">
                                <h4>Basic Info</h4>
                                <ul class="features-list">
                                    <li>
                                        <h6><i class="fa fa-clock-o" aria-hidden="true"></i> Views</h6>
                                        <h6 style="color:orange;">27k</h6>
                                    </li>
                                    {{-- <li>
                                        <h6><i class="fa fa-bell" aria-hidden="true"></i> Ratings</h6>
                                        <h6 style="color:blue;">80%</h6>
                                    </li> --}}
                                    {{-- <li>
                                        <h6><i class="fa fa-file" aria-hidden="true"></i> HEC Rank</h6>
                                        <h6 style="color:blue;">3</h6>
                                    </li> --}}
                                    @php
                                        $departmentCount=App\Institute::join('departments','institutes.id','departments.institute_id')
                                        ->select(DB::raw("count(*) as count"))
                                        ->where('institutes.id',$institute->id)
                                        ->get();
                                    @endphp

                                    <li>
                                        <h6><i class="fa fa-building" aria-hidden="true"></i> Total Departments</h6>
                                        <h6 style="color:blue;"> {{$departmentCount[0]->count}} </h6>
                                    </li>
                                    @php
                                        $degreesCount=App\Institute::join('degrees','institutes.id','degrees.institute_id')
                                        ->select(DB::raw("count(*) as count"))
                                        ->where('institutes.id',$institute->id)
                                        ->get();
                                    @endphp

                                    <li>
                                        <h6><i class="fa fa-graduation-cap" aria-hidden="true"></i>Total Degrees</h6>
                                        <h6 style="color:blue;"> {{$degreesCount[0]->count}} </h6>
                                    </li>
                                    @php
                                        $seats=App\Institute::join('degrees','institutes.id','degrees.institute_id')
                                        ->select(DB::raw("sum(degrees.noOfSeats) as sum"))
                                        ->where('institutes.id',$institute->id)
                                        ->get();
                                    @endphp

                                    <li>
                                        <h6><i class="fa fa-sitemap" aria-hidden="true"></i> Total Seats</h6>
                                        <h6 style="color:blue;">{{$seats[0]->sum}}</h6>
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
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script>
    var instituteName = "{!! $institute->name !!}";
    var lat = {!! $address->lat !!};
    var lng = {!! $address->lng !!};

    </script>
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
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGQs-TY6bUtndfezIiYNev6pCD1tcfTso&libraries=geometry"></script>
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
    $("#myInput").on("keyup", function () {
    var search = this.value;
    var small =search.toLowerCase();
    $("#myUL, .curriculum-level").show().filter(function () {
      return $("li", this).text().toLowerCase().indexOf(small) < 0;
    }).hide();
    });
</script>





    <!-- <script>
      $(document).ready(function(){
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#myUL li").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

          });
        });
      });
    </script> -->

</body>

</html>
