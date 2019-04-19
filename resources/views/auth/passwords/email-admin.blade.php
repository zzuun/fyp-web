<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Clever - Education &amp; Courses Template | Home</title>

    <!-- Favicon -->
    <link rel="icon" href="../../img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../../login.css">
      <link rel="stylesheet" href="https://cdnjs.com/libraries/1000hz-bootstrap-validator">

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
                    <a class="nav-brand" href="index.html"><img src="../../img/core-img/logo.png" alt=""></a>

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
                                <li><a href="courses.html">Courses</a></li>
                                <li><a href="instructors.html">Instructors</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>

                            <!-- Search Button -->

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

    <!-- ##### Register Now Start ##### -->
    <section class="register-now section-padding-100-0 d-flex justify-content-between align-items-center" style="background-image: url(../../img/core-img/texture.png);">
        <!-- Register Contact Form -->
        <div class="register-contact-form mb-100 wow fadeInUp" align="center"; data-wow-delay="250ms" >
            <div class="container-fluid">
                <div class="row  align-items-center">
                    <div class="col-12 ">
                        <div class="forms">
                            <h4 style="text-align:center;">Admin Reset Password</h4>
                            <form action="{{ route('admin.password.email') }}" method="post">
                               {{ csrf_field() }}
                                <div class="row">
                                  <div class="col-12">
                                    @if (session('status'))
                                       <div class="alert alert-success">
                                           {{ session('status') }}
                                       </div>
                                    @endif
                                  </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                      @if ($errors->has('email'))
                                          <div class="alert alert-danger" role="alert">{{$errors->first('email')}}</div>
                                      @endif
                                    </div>
                                    <div class="col-12">

                                        <button class="btn btn-success w-50">Send Password Reset Link</button>

                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          <!--  <div>
              <span class="txt1 p-b-17">
							Or
						</span>
            <br>
						<a href="#" class="txt2">
							<h4>Sign Up<h4>
						</a>
          </div>-->
        </div>

        <!-- Register Now Countdown -->

    </section>
    <!-- ##### Register Now End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="index.html"><img src="../../img/core-img/logo2.png" alt=""></a>
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
    <script src="../../customjs/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../../customjs/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../../customjs/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../../customjs/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="../../customjs/active.js"></script>
</body>

</html>
