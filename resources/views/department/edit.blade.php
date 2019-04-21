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
    <link rel="stylesheet" href="../../../login.css">
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
                    <a class="nav-brand" href="index.html"><img src="../../../img/core-img/logo.png" alt=""></a>

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
      <form action="{{route('institute.update',$data->id)}}" method="post">
        {{ csrf_field() }}
        @method('PUT')
      <div class="container">
        <div class="form-row">
          <div class="col-lg-12">
            <h3>Edit Institute</h3>
          </div>
        </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name"><strong>Name</strong></label>
                <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}" required>
              </div>
              <div class="form-group col-md-6">
                <label for="principal_name"><strong>Principal Name</strong></label>
                <input type="text" class="form-control" id="principal_name" name="principal_name" value="{{$data->principal_name}}" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="instituteType"><strong>Institute Type</strong></label>
                <select id="instituteType" name="instituteType" class="form-control" required>
                  <option>Choose...</option>
                  @if ($data->instituteType=='University')
                    <option value="University" selected>University</option>
                    <option value="College">College</option>
                  @else
                    <option value="University">University</option>
                    <option value="College" selected>College</option>
                  @endif
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="sector"><strong>Sector</strong></label>
                <select id="sector" name="sector" class="form-control" required>
                  <option>Choose...</option>
                  @if ($data->sector=='Public')
                    <option value="Public" selected>Public</option>
                  @endif
                  <option value="Public">Public</option>
                  <option value="Private" selected>Private</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="affiliation"><strong>Affiliation</strong></label>
                <select id="affiliation" name="affiliation" class="form-control" required>
                  <option>Choose...</option>
                  @if ($data->affiliation=='HEC')
                    <option value="HEC" selected>HEC</option>
                  @endif
                  @if ($data->affiliation=='Fedral Board')
                  <option value="Fedral Board" selected>Fedral Board</option>
                  @endif
                  @if ($data->affiliation=='BISE')
                    <option value="BISE" selected>BISE</option>
                  @endif
                  <option value="HEC">HEC</option>
                  <option value="Fedral Board">Fedral Board</option>
                  <option value="BISE">BISE</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="important_dates"><strong>Important Dates</strong></label>
                <input type="text" class="form-control" id="important_dates" name="important_dates" value="{{$data->important_dates}}" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-3">
                <div class="form-radio">
                  <label for="transportation"><strong>Transportation</strong></label>
                  <div class="form-check form-check-inline">
                    @if ($data->transportation)
                      <input class="form-check-input" type="radio" name="transportation" id="inlineRadio1" value="1" checked required>
                      <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="transportation" id="inlineRadio2" value="0" required>
                      <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                    @else
                      <input class="form-check-input" type="radio" name="transportation" id="inlineRadio1" value="1" required>
                      <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="transportation" id="inlineRadio2" value="0" checked required>
                      <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                    @endif
                </div>
              </div>
              <div class="form-group col-md-3">
                <div class="form-radio">
                  <label for="hostel"><strong>Hostel</strong></label>
                  <div class="form-check form-check-inline">
                    @if ($data->hostel)
                      <input class="form-check-input" type="radio" name="hostel" id="inlineRadio1" value="1" checked required>
                      <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="hostel" id="inlineRadio2" value="0" required>
                      <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                    @else
                    <input class="form-check-input" type="radio" name="hostel" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="hostel" id="inlineRadio2" value="0" checked required>
                      <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                    @endif
                </div>
              </div>
              <div class="form-group col-md-3">
                <div class="form-radio">
                  <label for="coEducation"><strong>Co-Education</strong></label>
                  <div class="form-check form-check-inline">
                    @if ($data->coEducation)
                      <input class="form-check-input" type="radio" name="coEducation" id="inlineRadio1" value="1" checked required>
                      <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="coEducation" id="inlineRadio2" value="0" required>
                      <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                  @else
                    <input class="form-check-input" type="radio" name="coEducation" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="coEducation" id="inlineRadio2" value="0" checked required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                  </div>
                    @endif
                </div>
              </div>
              <div class="form-group col-md-3">
                <div class="form-radio">
                  <label for="scholarship"><strong>Scholarship</strong></label>
                  <div class="form-check form-check-inline">
                    @if ($data->scholarship)
                      <input class="form-check-input" type="radio" name="scholarship" id="inlineRadio1" value="1" checked required>
                      <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="scholarship" id="inlineRadio2" value="0" required>
                      <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                  @else
                    <input class="form-check-input" type="radio" name="scholarship" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="scholarship" id="inlineRadio2" value="0" checked required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                  </div>
                    @endif
                </div>
              </div>
            </div>

            <hr>

            <div class="form-row">
              <div class="form-group col-md-8">
                <label for="location"><strong>Address</strong></label>
                <input type="text" class="form-control" id="location" name="location" value="{{$data->address->location}}" required>
              </div>
              <div class="form-group col-md-2">
                <label for="latitude"><strong>latitude</strong></label>
                <input type="text" class="form-control" id="lat" name="lat" value="{{$data->address->lat}}" readonly>
              </div>
              <div class="form-group col-md-2">
                <label for="longitude"><strong>longitude</strong></label>
                <input type="text" class="form-control" id="lng" name="lng" value="{{$data->address->lng}}" readonly>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-2">
                @php
                  $towns = App\Town::select('name','id')->get();
                @endphp
                <label for="town"><strong>Town</strong></label>
                <select id="town" name="town_id" class="form-control" required>
                  <option selected>Choose...</option>
                  @foreach ($towns as $town)
                    <option value="{{$town->id}}" @if($data->address->town_id==$town->id) selected='selected' @endif>{{$town->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="subarea"><strong>Subarea</strong></label>
                <select id="subarea" name="subarea_id" class="form-control" required>
                  <option selected>Choose...</option>
                </select>
              </div>
              <div class="form-group col-md-8">
                <label for="email"><strong>Email</strong></label>
                <input type="email" class="form-control" id="email" name="email" value="{{$data->address->email}}" required>
              </div>

            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="website"><strong>Website</strong></label>
                <input type="text" class="form-control" id="website" name="website" value="{{$data->address->website}}" required>
              </div>
              <div class="form-group col-md-4">
                <label for="city"><strong>City</strong></label>
                <select id="city" name="city" class="form-control" required>
                  <option >Choose...</option>
                  <option value="Lahore" selected>Lahore</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="phone_number"><strong>Phone Number</strong></label>
                <input type="text" name="phone_number" class="form-control" id="phone_number" value="{{$data->address->phone_number}}" required>
              </div>
            </div>
            <a class="btn btn-sm btn-success" href="{{route('institute.index')}}">Back</a>
            <button type="submit" class="btn btn-sm btn-primary">Update</button>
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
                            <a href="index.html"><img src="../../../img/core-img/logo2.png" alt=""></a>
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
    <script src="../../../customjs/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../../../customjs/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../../../customjs/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../../../customjs/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="../../../customjs/active.js"></script>

    <script>
      $(document).ready(function() {
        var town = $('#town').val();
        getSubareas(town);

        $('#town').on('change',function(){
          var town = $(this).val();
          getSubareas(town);
        });

        function getSubareas(town) {
          $.ajax({
            url: '/admin/getSubareas',
            type: 'GET',
            data: {town_id:town , id:{{$data->address->subarea_id}} , _token: "{{csrf_token()}}"},
            success:function(data){
              console.log(data);
              $('#subarea').html(data);
            }
          });
        }

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
