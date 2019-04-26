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

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../comparison.css">
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
      @if($message = Session::get('success'))
        <div style="text-align:center;" class="alert alert-danger">
          <strong>{{$message}}</strong>
        </div>
      @endif

      <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">
        <form action="/intermediate/ResultCompare" method="post">


          <!-- <button class="cancelbutton cancelbutton2"><i class="glyphicon glyphicon-minus w3-spin"></i></button> -->
          <!-- Single Accordian Area -->
          {{-- <form action="admin/compareResult" method="post"> --}}
@csrf

          <div class="panel single-accordion">
              <h6>
                  <a role="button" aria-expanded="true" aria-controls="collapseOne" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseOne">Click To Compare
                  <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                  </a>
              </h6>
              <div id="collapseOne" class="accordion-content collapse">
                @php
                  $uni = App\Institute::where('instituteType','College')->get();
                @endphp
                <select style="margin-left: 12%;" class="custom-select" name="collegeID[]" id="uni1" required>
                    <option selected value="0" >College</option>
                    @foreach ($uni as $u)
                      <option value="{{$u->id}}">{{$u->name}}</option>
                    @endforeach
                  </select>
                    <select style="margin-left: 12%;" class="custom-select" name="degreeID[]" id="deg1" required>
                        <option selected value="0">Degree</option>
                      </select>
              </div>

          </div>

          <h3 style="text-align:center; margin-bottom:20px;font-size:20px">With</h3>

          <div class="panel single-accordion">
              <h6>
                  <a role="button" aria-expanded="true" aria-controls="collapseTwo" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Click To Compare
                  <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                  </a>
              </h6>
              <div id="collapseTwo" class="accordion-content collapse">
                <select style="margin-left: 12%;" class="custom-select" name="collegeID[]" id="uni2" required>
                  <option selected value="0">College</option>
                  @foreach ($uni as $u)
                    <option value="{{$u->id}}">{{$u->name}}</option>
                  @endforeach
                  </select>
                    <select style="margin-left: 12%;" class="custom-select" name="degreeID[]" id="deg2" required>
                      <option selected value="0">Degree</option>
                      </select>
              </div>

          </div>
          <h3 style="text-align:center; margin-bottom:20px;font-size:20px">With</h3>

          <div class="panel single-accordion">
              <h6>
                  <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Click To Compare
                  <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                  </a>
              </h6>
              <div id="collapseThree" class="accordion-content collapse">
                <select style="margin-left: 12%;" class="custom-select" name="collegeID[]" id="uni3">
                  <option selected value="0">College</option>
                  @foreach ($uni as $u)
                    <option value="{{$u->id}}">{{$u->name}}</option>
                  @endforeach
                  </select>
                    <select style="margin-left: 12%;" class="custom-select" name="degreeID[]" id="deg3">
                      <option selected value="0">Degree</option>
                      </select>
              </div>

          </div>
          <br>
          <button name="newdiv" style="align:center;"class="newdivButton"></i> Compare</button>
        </form>
      </div>

        {{-- <div class="container-fluid">
          <div class="row">
                <!-- Single Blog Area -->
                <!-- <div class="col-12 col-xs-6"> -->



                          <table>
                            <tr>
                              <th>Features</th>
                              <th><span id="myid">PUCIT</span></th>
                              <th><span id="myid">PUCADDDDDDddddddddddddddddddddddd</span></th>
                              <th><span id="myid">UCP</span></th>
                            </tr>
                            <tr>
                              <td>Fees</td>
                              <td>Rs. 40,000/-</td>
                              <td>Rs. 18,000/-</td>
                              <td>Rs. 1,24,000/-</td>
                            </tr>
                            <tr>
                              <td>Location</td>
                              <td>Lahore</td>
                              <td>Lahore</td>
                              <td>Lahore</td>
                            </tr>
                            <tr>
                              <td>Ranking</td>
                              <td>2nd</td>
                              <td>2nd</td>
                              <td>21</td>
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
                              <td><i class="fa fa-check"></i></td>
                              <td><i class="fa fa-check"></i></td>
                            </tr>

                            <tr>
                              <td>Co-Education</td>
                              <td><i class="fa fa-check"></i></td>
                              <td><i class="fa fa-check"></i></td>
                              <td><i class="fa fa-check"></i></td>
                            </tr>
                            </table>


                <!-- </div> -->


            </div>

        </div> --}}
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

    <script>
    $(document).ready(function() {
      $('#uni1').on('change',function(){
        var inst_id = $(this).val();
        $.ajax({
          url: '/admin/getInterDegrees',
          type: 'GET',
          data: {inst_id:inst_id,_token: "{{csrf_token()}}"},
          success:function(data){
            $('#deg1').html(data);
          }
        });
      });
      $('#uni2').on('change',function(){
        var inst_id = $(this).val();
        $.ajax({
          url: '/admin/getInterDegrees',
          type: 'GET',
          data: {inst_id:inst_id,_token: "{{csrf_token()}}"},
          success:function(data){
            $('#deg2').html(data);
          }
        });
      });
      $(document).on("click","#uni3",function(){
        var inst_id = $(this).val();
        $.ajax({
          url: '/admin/getInterDegrees',
          type: 'GET',
          data: {inst_id:inst_id,_token: "{{csrf_token()}}"},
          success:function(data){
            $('#deg3').html(data);
          }
        });
      });
    });
    </script>
    <script>
      function openNav() {
          document.getElementById("myNav").style.height = "100%";}

    /* Close */
        function closeNav() {
          document.getElementById("myNav").style.height = "0%";}
    </script>
  </body>

</html>
