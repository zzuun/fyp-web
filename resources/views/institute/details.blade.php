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
            <h3>Institute Details</h3>
          </div>
          <br>
            <div class="col-2">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Details</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Departments</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Degrees</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Address</a>
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
                            <strong>Principal Name: </strong>{{$data->principal_name}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <strong>Institute Type: </strong>{{$data->instituteType}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <strong>Sector: </strong>{{$data->sector}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <strong>Affiliation: </strong>{{$data->affiliation}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          @php
                            $o = '';
                            if ($data->hostel == 0)
                              $o = 'No';
                            else
                              $o = 'Yes'
                          @endphp
                            <strong>Hostel: </strong>{{$o}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          @php
                            $o = '';
                            if ($data->transportation == 0)
                              $o = 'No';
                            else
                              $o = 'Yes'
                          @endphp
                            <strong>Transportation: </strong>{{$o}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          @php
                            $o = '';
                            if ($data->scholarship == 0)
                              $o = 'No';
                            else
                              $o = 'Yes'
                          @endphp
                            <strong>Scholarship: </strong>{{$o}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          @php
                            $o = '';
                            if ($data->coEducation == 0)
                              $o = 'No';
                            else
                              $o = 'Yes'
                          @endphp
                            <strong>Co-Education: </strong>{{$o}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          @php
                            $o = '';
                            if ($data->hostel == 0)
                              $o = 'No';
                            else
                              $o = 'Yes'
                          @endphp
                            <strong>Hostel: </strong>{{$o}}
                        </div>
                      </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                  @if ($data->departments->isEmpty())
                    <h6>No Departments For This Institute</h6>
                  @else
                    <table class="table table-hover table-sm">
                      <tr>
                        <th width="50px"><b>No.</b></th>
                        <th width="50px"><b>Name</b></th>
                        <th width="50px"><b>Department Type</b></th>
                        <th width="50px"><b>Action</b></th>
                      </tr>
                      @php
                        $i=0;
                      @endphp
                      <?php foreach ($data->departments as $d): ?>
                        <tr>
                          <td><b>{{++$i}}</b></td>
                          <td>{{$d->name}}</td>
                          <td>{{$d->departmentType}}</td>
                          <td>
                            <form action="{{route('department.destroy', $d->id)}}" method="post">
                              <a class="btn btn-sm btn-outline-success" href="{{route('department.show',$d->id)}}">Show</a>
                              <a class="btn btn-sm btn-outline-warning" href="{{route('department.edit',$d->id)}}">Edit</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                          </td>
                        </tr>
                      <?php endforeach; ?>

                    </table>
                  @endif
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                  @if ($data->degrees->isEmpty())
                    <h6>No Degrees Currently For This Institute</h6>
                  @else

                  @endif
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                  <div class="container">
                      <div class="col-md-6">
                        <div class="form-group">
                            <strong>location: </strong>{{$data->address->location}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <strong>City: </strong>{{$data->address->city}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          @php
                            $town = App\Town::find($data->address->town_id);
                          @endphp
                            <strong>Town: </strong>{{$town->name}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          @php
                            $subarea = App\Subarea::find($data->address->subarea_id);
                          @endphp
                            <strong>Subarea: </strong>{{$subarea->name}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <strong>Phone Number: </strong>{{$data->address->phone_number}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <strong>Website: </strong>{{$data->address->website}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <strong>E-mail: </strong>{{$data->address->email}}
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <a class="btn btn-sm btn-success" href="{{route('institute.index')}}">Back</a>
          </div>
          <br>
      </div>
      {{-- <form action="{{route('institute.store')}}" method="post">
        {{ csrf_field() }}
      <div class="container">
        <div class="form-row">
          <div class="col-lg-12">
            <h3>Institute</h3>
          </div>
        </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name"><strong>Name</strong></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="principal_name"><strong>Principal Name</strong></label>
                <input type="text" class="form-control" id="principal_name" name="principal_name" placeholder="Principal/Vice Chancellor Name" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="instituteType"><strong>Institute Type</strong></label>
                <select id="instituteType" name="instituteType" class="form-control" required>
                  <option selected>Choose...</option>
                  <option value="University">University</option>
                  <option value="College">College</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="sector"><strong>Sector</strong></label>
                <select id="sector" name="sector" class="form-control" required>
                  <option selected>Choose...</option>
                  <option value="Public">Public</option>
                  <option value="Private">Private</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="affiliation"><strong>Affiliation</strong></label>
                <select id="affiliation" name="affiliation" class="form-control" required>
                  <option selected>Choose...</option>
                  <option value="HEC">HEC</option>
                  <option value="Fedral Board">Fedral Board</option>
                  <option value="BISE">BISE</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="important_dates"><strong>Important Dates</strong></label>
                <input type="text" class="form-control" id="important_dates" name="important_dates" placeholder="(i.e. Admission date)" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-3">
                <div class="form-radio">
                  <label for="transportation"><strong>Transportation</strong></label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="transportation" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="transportation" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                  </div>
                </div>
              </div>
              <div class="form-group col-md-3">
                <div class="form-radio">
                  <label for="hostel"><strong>Hostel</strong></label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hostel" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hostel" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                  </div>
                </div>
              </div>
              <div class="form-group col-md-3">
                <div class="form-radio">
                  <label for="coEducation"><strong>Co-Education</strong></label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="coEducation" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="coEducation" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                  </div>
                </div>
              </div>
              <div class="form-group col-md-3">
                <div class="form-radio">
                  <label for="scholarship"><strong>Scholarship</strong></label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="scholarship" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="scholarship" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                  </div>
                </div>
              </div>
            </div>

            <hr>

            <div class="form-row">
              <div class="form-group col-md-8">
                <label for="location"><strong>Address</strong></label>
                <input type="text" class="form-control" id="location" name="location" placeholder="1234 Main St" required>
              </div>
              <div class="form-group col-md-2">
                @php
                  $towns = App\Town::select('name','id')->get();
                @endphp
                <label for="town"><strong>Town</strong></label>
                <select id="town" name="town_id" class="form-control" required>
                  <option selected>Choose...</option>
                  @foreach ($towns as $town)
                    <option value="{{$town->id}}">{{$town->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-md-2">
                @php

                @endphp
                <label for="subarea"><strong>Subarea</strong></label>
                <select id="subarea" name="subarea_id" class="form-control" required>
                  <option selected>Choose...</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="email"><strong>Email</strong></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
              </div>
              <div class="form-group col-md-6">
                <label for="website"><strong>Website</strong></label>
                <input type="text" class="form-control" id="website" name="website" placeholder="https://example.edu/" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="city"><strong>City</strong></label>
                <select id="city" name="city" class="form-control" required>
                  <option selected>Choose...</option>
                  <option value="Lahore">Lahore</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="phone_number"><strong>Phone Number</strong></label>
                <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="0423-1234567" required>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
          </div>
        </form>
        <br>
      </div> --}}
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
