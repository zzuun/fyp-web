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
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"/>
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
                                <a href="#" class="btn">Register</a>
                                <a href="onlyloginpage.html" class="btn">Login</a>
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
    <section class="register-now section-padding-100-0 d-flex justify-content-between align-items-center" style="background-image: url(img/core-img/texture.png);">
        <!-- Register Contact Form -->
        <div class="register-contact-form mb-100 wow fadeInUp" align="center"; data-wow-delay="250ms" >
            <div class="container-fluid">
                <div class="row  align-items-center">
                    <div class="col-12 ">
                        <div class="forms">
                            <h4 style="text-align:center;">Register Yourself</h4>
                            <form action="/register" method="post" id="registerForm" class="form-horizontal">
                               {{ csrf_field() }}
                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Enter Password Again">
                                        </div>
                                    </div>
                                    <div class="col-12" id="alert">

                                    </div>
                                      <div class="col-12">

                                        <button class="btn btn-success w-50">Register</button>

                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Register Now Countdown -->

    </section>
    <!-- ##### Register Now End ##### -->

    <!-- ##### Upcoming Events Start ##### -->

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>

    <script>
      $(document).ready(function(){
        $('#cpassword').keyup(function() {
          checkPasswordMatch();
        });

        function checkPasswordMatch() {
          var password = $("#password").val();
          var confirmPassword = $("#cpassword").val();

          if (password != confirmPassword)
              $("#alert").html("<div class='alert alert-danger' role='alert'> Password doesn't match!  </div>");
          else
              $("#alert").html("");
      }
      });
    </script>
</body>

</html>
