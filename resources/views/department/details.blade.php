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
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3>Department Details</h3>
          </div>
          <br>
            <div class="col-2">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Details</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Faculy</a>
              </div>
            </div>
            <div class="col-10">
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <div class="container">
                      <div class="col-md-6">
                        <div class="form-group">
                            <strong>Name: </strong>{{$data->name}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <strong>Department Type: </strong>{{$data->departmentType}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        @php
                          $i = App\Institute::find($data->institute_id);
                        @endphp
                        <div class="form-group">
                            <strong>Institute: </strong>{{$i->name}}
                        </div>
                      </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                  <div class="container">
                    <table class="table table-hover table-sm">
                      <tr>
                        <th width="50px"><b>No.</b></th>
                        <th width="50px"><b>Name</b></th>
                        <th width="50px"><b>Designation</b></th>
                        <th width="50px">Action</th>
                      </tr>
                      @php
                        $i=0;
                      @endphp
                      <?php foreach ($data->faculty as $f): ?>
                        <tr>
                          <td><b>{{++$i}}</b></td>
                          <td>{{$f->name}}</td>
                          <td>{{$f->designation}}</td>
                          <td>
                            <form action="{{route('faculty.destroy', $f->id)}}" method="post">
                              <a class="btn btn-sm btn-outline-warning" href="{{route('faculty.edit',$f->id)}}">Edit</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <a class="btn btn-sm btn-success" href="{{route('department.index')}}">Back</a>
          </div>
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
      });
    </script>
</body>

</html>
