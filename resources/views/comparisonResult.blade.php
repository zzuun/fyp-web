<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Clever - Education &amp; Courses Template | Blog</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../comparisonResult.css">

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
                    <a class="nav-brand" href="index.html"><img src="../img/core-img/logo.png" alt=""></a>

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
                                <li><a href="{{route('contactus')}}">Contact</a></li>
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

                            <!-- Search Button -->

                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area blog-page section-padding-100">


        <div class="container-fluid">
          <div class="row">
                <!-- Single Blog Area -->
                <!-- <div class="col-12 col-xs-6"> -->

                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                        <tr>
                          <th class="main" scope="col">Features</th>
                          @if (isset($first))
                          <th class="main" scope="col">{{$first->name}}</th>
                          @endif
                          @if (isset($second))
                            <th class="main" scope="col">{{$second->name}}</th>
                          @endif
                          @if(isset($third))
                            <th class="main" scope="col">{{$third->name}}</th>
                          @endif
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">Department</th>
                          @if (isset($first))
                            <td><strong>{{$first->deptName}}</strong></td>
                            @endif
                          @if (isset($second))
                            <td><strong>{{$second->deptName}}</strong></td>
                            @endif
                          @if(isset($third))
                            <td><strong>{{$third->deptName}}</strong></td>
                          @endif
                        </tr>
                          <tr>
                            <th scope="row">Degree</th>
                            @if (isset($first))
                              <td><strong>{{$first->degreeName}}</strong></td>
                              @endif
                            @if (isset($second))
                              <td><strong>{{$second->degreeName}}</strong></td>
                              @endif
                            @if(isset($third))
                              <td><strong>{{$third->degreeName}}</strong></td>
                            @endif
                          </tr>
                          <tr>
                            <th scope="row">Fees</th>
                            @if (isset($first))
                              <td>Rs. {{$first->fees}}/-</td>
                              @endif
                            @if (isset($second))
                              <td>Rs. {{$second->fees}}/-</td>
                              @endif
                            @if(isset($third))
                              <td>Rs. {{$third->fees}}/-</td>
                            @endif
                          </tr>
                          <tr>
                            <th scope="row">Scholarship</th>
                            @if (isset($first))
                              @if ($first->scholarship)
                                <td><i class="fa fa-check"></i></td>
                              @else
                                <td><i style="color:red" class="fa fa-times"></i></td>
                              @endif
                            @endif
                            @if (isset($second))
                              @if ($second->scholarship)
                                <td><i class="fa fa-check"></i></td>
                              @else
                                <td><i style="color:red" class="fa fa-times"></i></td>
                              @endif
                            @endif
                            @if (isset($third))
                              @if ($third->scholarship)
                                <td><i class="fa fa-check"></i></td>
                              @else
                                <td><i style="color:red" class="fa fa-times"></i></td>
                              @endif
                            @endif
                          </tr>
                          <tr>
                            <th scope="row">Seats</th>
                            @if (isset($first))
                              <td> {{$first->noOfSeats}}</td>
                            @endif
                            @if (isset($second))
                              <td> {{$second->noOfSeats}}</td>
                            @endif
                            @if(isset($third))
                              <td> {{$third->noOfSeats}}</td>
                            @endif
                          </tr>
                          <tr>
                            <th scope="row">Co-Education</th>
                            @if (isset($first))
                              @if ($first->coEducation)
                                <td><i class="fa fa-check"></i></td>
                              @else
                                <td><i style="color:red" class="fa fa-times"></i></td>
                              @endif
                            @endif
                            @if (isset($second))
                              @if ($second->coEducation)
                                <td><i class="fa fa-check"></i></td>
                              @else
                                <td><i style="color:red" class="fa fa-times"></i></td>
                              @endif
                            @endif
                            @if (isset($third))
                              @if ($third->coEducation)
                                <td><i class="fa fa-check"></i></td>
                              @else
                                <td><i style="color:red" class="fa fa-times"></i></td>
                              @endif
                            @endif
                          </tr>
                          <tr>
                            <th scope="row">Morning Shift</th>
                            @if (isset($first))
                              @if ($first->shiftMorning)
                                <td><i class="fa fa-check"></i></td>
                              @else
                                <td><i style="color:red" class="fa fa-times"></i></td>
                              @endif
                            @endif
                            @if (isset($second))
                              @if ($second->shiftMorning)
                                <td><i class="fa fa-check"></i></td>
                              @else
                                <td><i style="color:red" class="fa fa-times"></i></td>
                              @endif
                            @endif
                            @if (isset($third))
                              @if ($third->shiftMorning)
                                <td><i class="fa fa-check"></i></td>
                              @else
                                <td><i style="color:red" class="fa fa-times"></i></td>
                              @endif
                            @endif
                          </tr>
                          <tr>
                            <th scope="row">Afternoon Shift</th>
                            @if (isset($first))
                              @if ($first->shiftAfternoon)
                                <td><i class="fa fa-check"></i></td>
                              @else
                                <td><i style="color:red" class="fa fa-times"></i></td>
                              @endif
                            @endif
                            @if (isset($second))
                              @if ($second->shiftAfternoon)
                                <td><i class="fa fa-check"></i></td>
                              @else
                                <td><i style="color:red" class="fa fa-times"></i></td>
                              @endif
                            @endif
                            @if (isset($third))
                              @if ($third->shiftAfternoon)
                                <td><i class="fa fa-check"></i></td>
                              @else
                                <td><i style="color:red" class="fa fa-times"></i></td>
                              @endif
                            @endif
                          </tr>
                          <tr>
                            <th scope="row">Distance</th>
                            @if (isset($first))
                              <td id="one"></td>
                              @endif
                            @if (isset($second))
                              <td id="two"></td>
                              @endif
                            @if(isset($third))
                              <td id="three"></td>
                            @endif
                          </tr>
                          <tr>
                            <th scope="row">Institute Sector</th>
                            @if (isset($first))
                              <td> {{$first->sector}}</td>
                              @endif
                            @if (isset($second))
                              <td> {{$second->sector}}</td>
                              @endif
                            @if(isset($third))
                              <td> {{$third->sector}}</td>
                            @endif
                          </tr>
                          <tr>
                            <th scope="row">Affiliation</th>
                            @if (isset($first))
                              <td> {{$first->affiliation}}</td>
                              @endif
                            @if (isset($second))
                              <td> {{$second->affiliation}}</td>
                              @endif
                            @if(isset($third))
                              <td> {{$third->affiliation}}</td>
                            @endif
                          </tr>
                          <tr>
                            <th scope="row">Total Department</th>
                            @if (isset($first))
                              @php
                                $count = App\Institute::with('departments')->where('institutes.id',$first->instID)->first();
                              @endphp
                              <td> {{$count->departments->count()}}</td>
                              @endif
                            @if (isset($second))
                              @php
                                $count = App\Institute::with('departments')->where('institutes.id',$second->instID)->first();
                              @endphp
                              <td> {{$count->departments->count()}}</td>
                              @endif
                            @if(isset($third))
                              @php
                                $count = App\Institute::with('departments')->where('institutes.id',$third->instID)->first();
                              @endphp
                              <td> {{$count->departments->count()}}</td>
                            @endif
                          </tr>
                          <tr>
                            <th scope="row">Total Degrees</th>
                            @if (isset($first))
                              @php
                                $count = App\Institute::with('degrees')->where('institutes.id',$first->instID)->first();
                              @endphp
                              <td> {{$count->degrees->count()}}</td>
                              @endif
                            @if (isset($second))
                              @php
                                $count = App\Institute::with('degrees')->where('institutes.id',$second->instID)->first();
                              @endphp
                              <td> {{$count->degrees->count()}}</td>
                              @endif
                            @if(isset($third))
                              @php
                                $count = App\Institute::with('degrees')->where('institutes.id',$third->instID)->first();
                              @endphp
                              <td> {{$count->degrees->count()}}</td>
                            @endif
                          </tr>
                          <tr>
                            <th scope="row">Hostels</th>
                            @if (isset($first))
                                @if ($first->hostel)
                                  <td><i class="fa fa-check"></i></td>
                                @else
                                  <td><i style="color:red" class="fa fa-times"></i></td>
                                @endif
                              @endif
                            @if (isset($second))
                                @if ($second->hostel)
                                  <td><i class="fa fa-check"></i></td>
                                @else
                                  <td><i style="color:red" class="fa fa-times"></i></td>
                                @endif
                              @endif
                              @if (isset($third))
                                  @if ($third->hostel)
                                    <td><i class="fa fa-check"></i></td>
                                  @else
                                    <td><i style="color:red" class="fa fa-times"></i></td>
                                  @endif
                                @endif
                          </tr>
                          <tr>
                            <th scope="row">Transportation</th>
                            @if (isset($first))
                                @if ($first->transportation)
                                  <td><i class="fa fa-check"></i></td>
                                @else
                                  <td><i style="color:red" class="fa fa-times"></i></td>
                                @endif
                              @endif
                            @if (isset($second))
                                @if ($second->transportation)
                                  <td><i class="fa fa-check"></i></td>
                                @else
                                  <td><i style="color:red" class="fa fa-times"></i></td>
                                @endif
                              @endif
                              @if (isset($third))
                                  @if ($third->transportation)
                                    <td><i class="fa fa-check"></i></td>
                                  @else
                                    <td><i style="color:red" class="fa fa-times"></i></td>
                                  @endif
                                @endif
                          </tr>
                        </tbody>
                  </table>
                </div>
                <!-- </div> -->
            </div>

        </div>
    </section>
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
                            <a href="index.html"><img src="../img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Copywrite -->
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="../customjs/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../customjs/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../customjs/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../customjs/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="../customjs/active.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGQs-TY6bUtndfezIiYNev6pCD1tcfTso&libraries=geometry"></script>
    <script>
      function openNav() {
          document.getElementById("myNav").style.height = "100%";}
    /* Close */
        function closeNav() {
          document.getElementById("myNav").style.height = "0%";}
    </script>

    <script>
    @if (isset($first))
      getDistance('one',{{$first->lat}},{{$first->lng}});
    @endif
    @if (isset($second))
      getDistance('two',{{$second->lat}},{{$second->lng}});
    @endif
    @if (isset($third))
      getDistance('three',{{$third->lat}},{{$third->lng}});
    @endif
    function getDistance(id, lat, lng){
      var currentLat;
      var currentLng;
      var latlng = new google.maps.LatLng(lat, lng);
      function getLocation() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(success);
        } else {
          alert("Geolocation is not supported by this browser.");
        }
      }

      function success(position) {
        //get current location of user
        currentLat = position.coords.latitude;
        currentLng = position.coords.longitude;
        from = new google.maps.LatLng(currentLat, currentLng);
        //calculating the distance from user's location to institute
        var distanceService = new google.maps.DistanceMatrixService();
        distanceService.getDistanceMatrix({
           origins: [from],
           destinations: [latlng],
           travelMode: google.maps.TravelMode.DRIVING,
           unitSystem: google.maps.UnitSystem.METRIC,
           durationInTraffic: true,
           avoidHighways: false,
           avoidTolls: false
       },
       function (response, status) {
           if (status !== google.maps.DistanceMatrixStatus.OK) {
               console.log('Error:', status);
           } else {
             console.log(response);
               $("#"+id).text(response.rows[0].elements[0].distance.text).show();
           }
       });
      }

      getLocation();
    }


    </script>


</body>

</html>
