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
                              <li><a href="{{route('page.home')}}">Home</a></li>
                              <li><a href="{{route('institute.index')}}">Institutes</a></li>
                              <li><a href="{{route('department.index')}}">Departments</a></li>
                              <li><a href="{{route('degree.index')}}">Degrees</a></li>
                            </ul>

                            <!-- Search Button -->

                            <!-- Register / Login -->
                            <div class="register-login-area">
                              @if(auth()->check())
                                <a href="#" class="btn">Hi {{auth()->user()->name}}</a>

                                <a  href="{{route('admin.logout')}}"class="btn">Logout</a>
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
    <section>
      <form action="{{route('degree.store')}}" method="post">
        {{ csrf_field() }}
      <div class="container">
        <div class="form-row">
          <div class="col-lg-12">
            <h3>Degree</h3>
          </div>
        </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name"><strong>Name</strong></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
              </div>
              <div class="form-group col-md-2">
                <label for="duration"><strong>Duration (Years)</strong></label>
                <input step="any" type="number" class="form-control" id="duration" name="duration" placeholder="(e.g) 2" required>
              </div>
              <div class="form-group col-md-4">
                <label for="system"><strong>System</strong></label>
                <select id="system" name="system" class="form-control" required>
                  <option selected>Choose...</option>
                  <option value="Semester">Semester</option>
                  <option value="Annual">Annual</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="noOfSeats"><strong>Number Of Seats</strong></label>
                <input type="number" class="form-control" id="duration" name="noOfSeats" placeholder="(e.g.) 200" required>
              </div>
              <div class="form-group col-md-4">
                <label for="creditHours"><strong>Credit Hours</strong></label>
                <input type="number" class="form-control" id="creditHours" name="creditHours" placeholder="(e.g.) 20" required>
              </div>
              <div class="form-group col-md-4">
                <label for="lastMerit"><strong>Last Merit</strong></label>
                <input step="any" type="number" class="form-control" id="lastMerit" name="lastMerit" placeholder="(e.g.) 79s" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-3">
              </div>
              <div class="form-group col-md-3">
                <div class="form-radio">
                  <label for="shiftMorning"><strong>Morning Shift</strong></label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="shiftMorning" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="shiftMorning" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                  </div>
                </div>
              </div>
              <div class="form-group col-md-3">
                <div class="form-radio">
                  <label for="shiftAfternoon"><strong>Afternoon Shift</strong></label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="shiftAfternoon" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="shiftAfternoon" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="fees"><strong>Fees (Per Year)</strong></label>
                <input type="number" class="form-control" id="fees" name="fees" placeholder="12345" required>
              </div>
              <div class="form-group col-md-3">
                @php
                  $i = App\Institute::select('name','id')->get();
                @endphp
                <label for="institute_id"><strong>Institute</strong></label>
                <select id="institute_id" name="institute_id" class="form-control" required>
                  <option selected>Choose...</option>
                  @foreach ($i as $in)
                    <option value="{{$in->id}}">{{$in->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-md-3">
                @php
                  $towns = App\Department::select('name','id')->get();
                @endphp
                <label for="department_id"><strong>Department</strong></label>
                <select id="department_id" name="department_id" class="form-control" required>
                  <option selected>Choose...</option>
                  @foreach ($towns as $town)
                    <option value="{{$town->id}}">{{$town->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <a class="btn btn-sm btn-success" href="{{route('degree.index')}}">Back</a>
            <button type="submit" class="btn btn-sm btn-primary">Create</button>
          </div>
        </form>
        <br>
      </div>
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

    <script>
      $(document).ready(function() {
        $('#town').on('change',function(){
          var town_id = $(this).val();
          $.ajax({
            url: '/admin/getSubareas',
            type: 'GET',
            data: {town_id:town_id,_token: "{{csrf_token()}}"},
            success:function(data){
              $('#subarea').html(data);
            }
          });
        });
        $('#location').on('change',function(){
          var address = $(this).val();
          $.ajax({
            url: '/admin/getLatLng',
            type: 'GET',
            data: {address: address, _token: "{{csrf_token()}}"},
            success:function(data){
              console.log(data);
              $('#lat').val(data[0]);
              $('#lng').val(data[1]);
            }
          });
        });
      });
    </script>
</body>

</html>
