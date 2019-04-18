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
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="comparison.css">

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
                        <div class="classynav">
                            <ul>
                                <li><a href="{{route('page.home')}}">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('page.home')}}">Home</a></li>
                                        <li><a href="{{route('page.timer')}}">Courses</a></li>
                                        <li><a href="{{route('page.timer')}}">Single Courses</a></li>
                                        <li><a href="{{route('page.timer')}}">Instructors</a></li>
                                        <li><a href="{{route('page.timer')}}">Blog</a></li>
                                        <li><a href="{{route('page.timer')}}">Single Blog</a></li>
                                        <li><a href="{{route('page.timer')}}">Regular Page</a></li>
                                        <li><a href="{{route('page.timer')}}">Contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('page.timer')}}">Courses</a></li>
                                <li><a href="{{route('page.timer')}}">Instructors</a></li>
                                <li><a href="{{route('page.timer')}}">Blog</a></li>
                                <li><a href="{{route('page.timer')}}">Contact</a></li>
                            </ul>

                            <!-- Search Button -->
                            <div class="search-area">
                                <form action="#" method="">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Register / Login -->
                            <div class="register-login-area">
                              @if(auth()->check())
                                <a href="#" class="btn">Hi {{auth()->user()->name}}</a>

                                <a  href="{{route('page.logout')}}"class="btn">Logout</a>
                                @else
                                <a href="{{route('page.register')}}" class="btn">Register</a>

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

    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area section-padding-100">


        <div class="container-fluid">

            <div class="row">
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-12">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="250ms">

                        <!-- Blog Content -->

                          <table>
                            <tr>
                              <th style="width:80%">Features</th>
                              <th><span id="myid">PUCIT</span></th>
                              <th><span id="myid">PUCAD</span></th>
                              <th><span id="myid">UCP</span></th>
                            </tr>
                            <tr>
                              <td>Fees</td>
                              <td>Rs. 40,000/-</td>
                              <td>Rs. 18,000/-</td>
                              <td>Rs. 1,24,000/-</td>
                            </tr>
                            <tr>
                              <td>Merit</td>
                              <td>69.78</td>
                              <td>72.25</td>
                              <td>78.36</td>
                            </tr>
                            <tr>
                              <td>Location</td>
                              <td>Lahore</td>
                              <td>Lahore</td>
                              <td>Lahore</td>
                            </tr>
                            <tr>
                              <td>Ranking</td>
                              <td>2nd, in CS</td>
                              <td>2nd, in Arts</td>
                              <td>21st, in Medical</td>
                            </tr>
                            <tr>
                              <td>Seats</td>
                              <td>600</td>
                              <td>32</td>
                              <td>380</td>
                            </tr>
                            <tr>
                              <td>Hostels</td>
                              <td><i class="fa fa-check"></i></td>
                              <td><i class="fa fa-check"></i></td>
                              <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                              <td>Transportation</td>
                              <td><i class="fa fa-check"></i></td>
                              <td><i class="fa fa-remove"></i></td>
                              <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                              <td>Co Education</td>
                              <td><i class="fa fa-remove"></i></td>
                              <td><i class="fa fa-check"></i></td>
                              <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                              <td>Sector</td>
                              <td>Government</td>
                              <td>Government</td>
                              <td>Government</td>
                            </tr>
                            <tr>
                              <td>Affiliation</td>
                              <td>HEC</td>
                              <td>HEC</td>
                              <td>HEC</td>
                            </tr>
                            <tr>
                              <td>M/A Shifts</td>
                              <td><i class="fa fa-check"></i></td>
                              <td><i class="fa fa-remove"></i></td>
                              <td><i class="fa fa-check"></i></td>
                            </tr>
                            </table>

                    </div>
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
                            <a href="index.html"><img src="img/core-img/logo2.png" alt=""></a>
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
    <script>
      function openNav() {
          document.getElementById("myNav").style.height = "100%";}

    /* Close */
        function closeNav() {
          document.getElementById("myNav").style.height = "0%";}
    </script>

</body>

</html>
