<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>We6</title>

    <!-- Favicon -->
    <link rel="icon" href="/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="searchfilters.css">

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
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="single-course.html">Single Courses</a></li>
                                        <li><a href="instructors.html">Instructors</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Single Blog</a></li>
                                        <li><a href="regular-page.html">Regular Page</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </li>
                              </ul>
                              <div class="classynav2">
                                <ul>
                                <li><a href="courses.html" position="relative">Wishlist<span class="badge">3</span></a></li>
                              </ul>
                            </div>
                            <div class="classynav3">
                              <ul>
                                <li><a href="instructors.html">Instructors</a></li>
                                <li><a href="contact.html">Contact</a></li>
                              </ul>
                            </div>


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
<!--
                <div class="side2nav">
                    <a href="#about">About</a>
                    <a href="#services">Services</a>
                    <a href="#clients">Clients</a>
                    <a href="#contact">Contact</a>
                    <button class="dropdown-btn-2">Dropdown
                      <i class="fa fa-caret-down"></i>
                    </button>
                  <div class="dropdown-container-2">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                  </div>
                    <a href="#contact">Search</a>
                  </div> -->

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class=" bg-overlay-2by5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">

                        <div class="clever-main-menu">
                          <!-- Search Button -->
                          <div class="search-area">
                              <form action="#" method="post">
                                  <input type="search" name="search" id="search" placeholder="Search">
                                  <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                              </form>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="regular-page-area section-padding-25">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-lg-4" style="padding-bottom:2%";>
                  <div class="clever-faqs">
                      <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">

                          <!--Areas -->
                          <div class="panel single-accordion2">
                              <h6><a role="button2" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseTwo">Search by Area
                              <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                              <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                              </a></h6>
                              <div id="collapseTwo" class="accordion-content collapse">
                                @php
                                  $areas= App\Address::where('city','Lahore')->pluck('subarea');                                  
                                @endphp

                                @foreach($areas as $area)

                                  <label  style="word-wrap:break-word">
                                    <input class="common-selector area" type="checkbox" value="{{$area}}"/>{{$area}}
                                  </label><br>
                                @endforeach


                              </div>
                          </div>

                          <!-- Sector -->
                          <div class="panel single-accordion3">
                              <h6>
                                  <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed"
                                  data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Search By Sector
                                  <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                  <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                  </a>
                              </h6>
                              <div id="collapseThree" class="accordion-content collapse">
                                <label  style="word-wrap:break-word">
                                    <input class="common-selector sector" type="checkbox" value="government" />Government
                                 </label>

                                  <label  style="word-wrap:break-word">
                                    <input class="common-selector sector" type="checkbox" value="private" />Private
                                 </label>
                              </div>
                          </div>

                          <!-- Affiliation -->
                          <div class="panel single-accordion4">
                              <h6>
                                  <a role="button" aria-expanded="true" aria-controls="collapseFour" class="collapsed"
                                  data-parent="#accordion" data-toggle="collapse" href="#collapseFour">Search By Affiliation
                                  <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                  <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                  </a>
                              </h6>
                              <div id="collapseFour" class="accordion-content collapse">
                                @php
                                    $affiliations= App\Institute::distinct()->pluck('affiliation');
                          
                                @endphp
                                @foreach($affiliations as $affiliation)
                                  <label  style="word-wrap:break-word">
                                    
                                      <input  class="common-selector affiliation" type="checkbox" value="{{$affiliation}}" />{{$affiliation}}
                                  </label>
                                  <br>
                                @endforeach

                          
                              </div>
                          </div>

                          <!-- Fees -->
                          <div class="panel single-accordion5">
                              <h6>
                                  <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseFive"
                                  data-parent="#accordion" data-toggle="collapse" href="#collapseFive">Search by Fees Range
                                  <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                  <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                  </a>
                              </h6>
                              <div id="collapseFive" class="accordion-content collapse">
                                    <div class="slidecontainer">
                                        <input type="range" min="10000" max="100000" value="500" class="slider fees-range common-selector" id="fees-range">
                                        <p>Fee Range: <span id="demo1"></span></p>
                                    </div>
                              </div>
                          </div>

                          <!-- Marks -->
                          <div class="panel single-accordion6">
                              <h6>
                                  <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseSix"
                                  data-parent="#accordion" data-toggle="collapse" href="#collapseSix">Search By Your Marks
                                  <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                  <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                  </a>
                              </h6>
                              <div id="collapseSix" class="accordion-content collapse">
                                    <div class="slidecontainer">
                                      <input type="range" min="330" max="1100" value="10" class="slider" id="myRange1">
                                      <p>Select Marks: <span id="demo2"></span></p>
                                    </div>
                              </div>
                          </div>

                          <!-- Facilities -->
                          <div class="panel single-accordion7">
                              <h6>
                                  <a role="button" aria-expanded="true" aria-controls="collapseSeven" class="collapsed"
                                  data-parent="#accordion" data-toggle="collapse" href="#collapseSeven">Search By Facilities
                                  <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                  <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                  </a>
                              </h6>
                              <div id="collapseSeven" class="accordion-content collapse">
                                <label  style="word-wrap:break-word">
                                    <input  class="common-selector transport" type="checkbox" value="1" />Transportation
                                 </label>

                                  <label  style="word-wrap:break-word">
                                    <input id="hostel" class="common-selector hostel" type="checkbox" value="1" />Hostel
                                 </label>
                              </div>
                          </div>

                          <!-- Degree Group -->
                          <div class="panel single-accordion8">
                              <h6>
                                  <a role="button" aria-expanded="true" aria-controls="collapseEight" class="collapsed"
                                  data-parent="#accordion" data-toggle="collapse" href="#collapseEight">Search By Degree Group
                                  <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                  <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                  </a>
                              </h6>
                              <div id="collapseEight" class="accordion-content collapse">
                                <label  style="word-wrap:break-word">
                                    <input id="checkid"  type="checkbox" value="test" />Arts Group
                                 </label>

                                  <label  style="word-wrap:break-word">
                                    <input id="checkid"  type="checkbox" value="test" />Science Group
                                 </label>

                                 <label  style="word-wrap:break-word">
                                     <input id="checkid"  type="checkbox" value="test" />Computer Science Group
                                  </label>

                              </div>
                          </div>

                      </div>

                  </div>
                </div>


    <!-- ##### Hero Area End ##### -->
    <!-- ##### Popular Courses Start ##### -->
    <div class="popular-courses-area" style="padding-left:5%" >


        <div class="container" style="padding:0 4% 0 1%;">


                <div class="col-12">
                    <div class="section-heading">
                        <h3>Best Institues For You</h3>
                    </div>
                </div>

                <!-- Single Popular Course -->


                <!-- Single Popular Course -->
                <div class="col-12">
                  <div class="boxstyle2" onclick="location.href='nust degree.html';" style="cursor: pointer;">
                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="750ms">

                        <!-- Course Content -->
                        <div class="course-content">
                           <a href="#">
                            <h4>Bachelors in CS</h4>

                            <div class="meta d-flex align-items-center">
                                <a href="nust.html">NUST</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="nust degree.html">CS</a>
                            </div>
                            <ul>
                            <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>  052-4422365</span>
                          </ul>


                              <ul>
                            <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i>  Islamabad</span>
                              </ul>



                              <ul>
                            <span><i class="fa fa-won" aria-hidden="true" style="color: #e3d21b;"></i>  HEC Recognized</span>
                              </ul>


                              <ul>
                            <span><i class="fa fa-users" aria-hidden="true" style="color: #e3d21b;"></i>  Government Sector</span>
                              </ul>

                            </a>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                  <a onclick="location.href='#';">
                                    <i aria-hidden="true" ></i> Add To Wishlist <i class="fa fa-heart-o" aria-hidden="true"></i>
                                  </a>
                                </div>
                                <div class="rating">
                                  <a  href="wishlist.html">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                  </a>
                                </div>
                            </div>
                            <div class="course-fee2 h-100">
                                <a href="index.html">
                                      <i class="fa fa-location-arrow" aria-hidden="true"><abbr title="12 kms away from your location">12kms</abbr></i>
                                  </a>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>

                <!-- Single Popular Course -->
                <div class="col-12" >
                  <div class="boxstyle2" onclick="location.href='pu.html';" style="cursor: pointer;">
                    <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="750ms">

                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Bachelors in CS</h4>
                            <a href="#"></a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">PUCIT</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">CS</a>
                            </div>
                            <!-- <div class="course-curriculum">
                            <div class="cl2"> -->
                              <ul>
                              <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>  042-37223322</span>
                            </ul>


                                <ul>
                              <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i>  Lahore</span>
                                </ul>



                                <ul>
                              <span><i class="fa fa-won" aria-hidden="true" style="color: #e3d21b;"></i>  HEC Recognized</span>
                                </ul>


                                <ul>
                              <span><i class="fa fa-users" aria-hidden="true" style="color: #e3d21b;"></i>  Government Sector</span>
                                </ul>

                              <!-- </div>
                            </div> -->

                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                  <a onclick="location.href='#';">
                                    <i aria-hidden="true" ></i> Add To Wishlist <i class="fa fa-heart-o" aria-hidden="true"></i>
                                  </a>
                                </div>
                                <div class="rating">
                                  <a  href="wishlist.html">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                  </a>
                                </div>
                            </div>
                            <div class="course-fee2 h-100">
                                <a  href="pu.html">
                                      <i class="fa fa-location-arrow" aria-hidden="true"><abbr title="4 kms away from your location">4kms</abbr></i>
                                  </a>
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

    <!-- ##### Popular Courses End ##### -->


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

   

    <script> $(".seat").on("click", function(){
      $(this).css("background", "red");
    });
    </script>

  <script>
      $(document).ready(function()
      {

        var slider = document.getElementById("fees-range");
        var output1 = document.getElementById("demo1");
        output1.innerHTML = slider.value;

        slider.oninput = function() {
          output1.innerHTML = this.value;
        }
      });
     </script>-

        <!--<script>
          $('#city-selector').on('change',function(){
            var cityName=$('#city-selector').val();              
            $.ajax({
                      url:"/ajaxGetCities",
                      method:"GET",
                      data:{city:cityName, _token: "{{csrf_token()}}"},
                      success:function(data){
                        console.log(data);
                        $('#collapseTwo').html(data);


                      }
                  });
          })
        </script> -->

   <script>
        $(document).ready(function()
        {

          filter_data();
          function filter_data()
          {
            var area = get_filter('area');
            var sector = get_filter('sector');
            var affiliation = get_filter('affiliation'); 
            var hostel = get_filter('hostel');
            var transport = get_filter('transport');
            var fees = $('#fees-range').val();
                $.ajax({
                    url:"/search",
                    method:"POST",
                    dataType:"json",
                    data:{area:area, sector:sector, affiliation:affiliation, hostel:hostel,transport:transport, fees:fees, _token: "{{csrf_token()}}"},
                    success:function(data){
                        $('.div1').html()
                    }
                });
            }

            function get_filter(class_name)
            {
                var filter = [];
                $('.'+class_name+':checked').each(function(){
                    filter.push($(this).val());
                });
                return filter;
            }

            $('.common-selector').click(function(){
                filter_data();
            });


           /* $('#price_range').slider({
                range:true,
                 min:10000,
                max:100000,
                values:[1000, 65000],
                step:1000,
                stop:function(event, ui)
                {
                    $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                    $('#hidden_minimum_price').val(ui.values[0]);
                    $('#hidden_maximum_price').val(ui.values[1]);
                    //filter_data();
                }
             });
             */

          
        });
    </script>

</body>

</html>
