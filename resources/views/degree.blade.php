<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>{{$details[0]->instituteName}}</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="degree.css">
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

                        <div class="classynav">
                            <ul>
                                <li><a href="{{route('page.home')}}">Home</a></li>
                              </ul>
                              <div class="classynav2">
                            </div>
                            <div class="classynav3">
                              <ul>
                                <li><a href="{{route('page.interCompare')}}">Compare</a></li>
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
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area">
        <!-- Breadcumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('page.home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('page.home') }}">Intermediate</a></li>
                <li class="breadcrumb-item"><a href="/institute?instituteID={{$details[0]->instituteid}}">{{$details[0]->instituteName}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$details[0]->degreeName}}</li>
            </ol>
        </nav>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Single Course Intro Start ##### -->
    <div class="hero-area bg-img bg-overlay-2by5 d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg3.jpg);">
        <!-- Content -->
        <div class="single-course-intro-content text-center">
            <!-- Ratings -->
            <div class="ratings">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
            <h3>{{$details[0]->degreeName}}</h3>
            <!-- <div class="meta d-flex align-items-center justify-content-center">
              <div class="globalonly">
                <a href="https://{{$details[0]->website}}" class="fa fa-globe"></a>
              </div>
            </div> -->

        </div>
    </div>
    <!-- ##### Single Course Intro End ##### -->

    <!-- ##### Courses Content Start ##### -->
    <div class="single-course-content section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="course--content">

                        <div class="clever-tabs-content">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">Faculty</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <!-- Tab Text -->
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                  <div class="clever-curriculum">

                                      <!-- Curriculum Level -->
                                      <div class="curriculum-level mb-30">
                                          <h4 class="d-flex justify-content-between"><span>Basic Information</span></h4>
                                            <ul class="curriculum-list">
                                              <li>
                                                <ul>
                                                  <li>
                                                    <span><i class="fa fa-calculator" aria-hidden="true"></i> Merit </span>
                                                    <span>{{$details[0]->lastMerit}}%</span>
                                                  </li>
                                                  <li>
                                                      <span><i class="fa fa-user" aria-hidden="true"></i> Available Seats </span>
                                                      <span>{{$details[0]->noOfSeats}}</span>
                                                  </li>
                                                  <li>
                                                      <span><i class="fa fa-phone" aria-hidden="true"></i> Contact </span>
                                                      <span>{{$details[0]->phone_number}}</span>
                                                  </li>
                                                  <li>
                                                      <span><i class="fa fa-th-list" aria-hidden="true"></i> Admission Criteria </span>
                                                      <span>Matriculation Degree</span>
                                                  </li>
                                                </ul>
                                          </li>
                                        </ul>
                                      </div>

                                      <!-- Curriculum Level -->
                                      <div class="cl2 mb-30">
                                          <h4 class="d-flex justify-content-between"><span>Fee Structure</span></h4>
                                            <ul class="curriculum-list">
                                              <li>
                                                <ul>
                                                <li>
                                                        <span><i class="fa fa-money" aria-hidden="true"></i> Fees </span>
                                                        <span id=fees>{{currency($details[0]->fees,'PKR','PKR')}}</span>
                                                      </li>




                                                      <li>
                                                        <span><i class="fa fa-graduation-cap" aria-hidden="true"></i> Scholarships </span>
                                                        <?php if ($details[0]->scholarship == 1) {
                                                          echo  "<span><div class=".'text-success'.">Available</div></span>";
                                                        }
                                                        else {
                                                          echo  "<span><div class=".'text-danger'.">Not Available</div></span>";
                                                        } ?>

                                                      </li>
                                                    </ul>
                                              </li>

                                          </ul>



                                          <div class="regular-page-area section-padding-100">
                                              <div class="container">
                                                  <div class="row">
                                                      <div class="col-12">
                                                        <div class="clever-faqs">


                                                            <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">

                                                                <!-- Single Accordian Area -->
                                                                <div class="panel single-accordion">
                                                                    <h6><a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion"
                                                                      href="#collapseOne">Find in different Currency
                                                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                                    </a></h6>
                                                                    <div id="collapseOne" class="accordion-content collapse">
                                                                      <p>
                                                                      <label  style="word-wrap:break-word">
                                                                        <input id="rupee"  name="curr" type="radio" checked value="test" />PKR ₨
                                                                     </label>
                                                                   </p>
                                                                      <p>
                                                                      <label  style="word-wrap:break-word">
                                                                          <input id="dollar" name="curr" type="radio" value="test" />USD $
                                                                       </label>
                                                                     </p>
                                                                       <p>
                                                                        <label  style="word-wrap:break-word">
                                                                          <input id="riyal"  name="curr" type="radio" value="test" />Saudi Riyal ﷼
                                                                       </label>
                                                                     </p>
                                                                       <p>
                                                                       <label  style="word-wrap:break-word">
                                                                         <input id="pound"  name="curr" type="radio" value="test" />UK £
                                                                      </label>
                                                                    </p>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              </div>
                                                              </div>
                                                              </div>
                                                              </div>
                                                              </div>
                                      </div>

                                      <!-- Curriculum Level -->

                                  </div>
                                </div>

                                <!-- Tab Text -->




                                <!-- Tab Text -->
                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                  <div class="clever-review">
                                      <div class="clever-ratings d-flex align-items-center mb-30">

                                          <div class="total-ratings text-center d-flex align-items-center justify-content-center">
                                              <div class="ratings-text">
                                                <img src="img/bg-img/mastergee.png" alt="">

                                              </div>
                                          </div>

                                          <div class="rating-viewer">
                                              <!-- Rating -->
                                              <h4>{{$details[0]->principal_name}}</h4>
                                              <h6>Prinicipal {{$details[0]->instituteName}}</h6>
                                              </li>
                                              </div>
                                            </div>

                                  </div>
                                </div>

                                <!-- Tab Text -->
                                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab--4">
                                    <div class="clever-members">

                                        <!-- About Members -->
                                          <div class="about-members mb-30">
                                            <!-- <h4>Members</h4>
                                           -->
                                            <div class="map-area">
                                                <div id="googleMap"></div>
                                              </div>

                                        </div>

                                        <div class="about-members mb-30">
                                          <h4> Location </h4>
                                          <p>National University of Sciences and Technology. NUST Campus, H-12, Islamabad, Pakistan.</p>
                                      </div>



                                    </div>
                                </div>

                                <!-- Tab Text -->
                                <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab--5">
                                    <div class="clever-review">

                                        <!-- About Review -->
                                        <div class="about-review mb-30">
                                            <h4>Fee Structures</h4>
                                            <p style="color:red;">Note: All fees and other charges are subject to revision from time to time.</p>
                                        </div>

                                        <div class="about-curriculum mb-30">
                                          <div class="col-12">
                                              <div class="blog-catagories mb-20 d-flex flex-wrap justify-content-between">

                                                  <!-- Single Catagories -->
                                                  <div class="zoom">
                                                      <div class="single-catagories bg-img" id="btn5" style="background-image: url(img/bg-img/bc1.jpg);">
                                                        <h6>Master Programs</h6>
                                                      </div>
                                                    </div>

                                                    <!-- Single Catagories -->
                                                <div class="zoom">
                                                  <div class="single-catagories bg-img" id="btn6" style="background-image: url(img/bg-img/bc2.jpg);">
                                                    <h6>Undergraduate Courses</h6>
                                                  </div>
                                                </div>
                                          </div>
                                          </div>
                                        </div>


                                        <!-- Ratings -->
<!--
                                          <div class="clever-curriculum">
                                          <div class="cl5 mb-30">
                                              <h4 class="d-flex justify-content-between"><span>MASTERS PROGRAMS</span></h4>
                                                <ul class="curriculum-list1">
                                                  <li><i class="fa fa-graduation-cap" aria-hidden="true"></i> <b>NUST Business School</b>
                                                    <ul>
                                                      <li>
                                                        <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Admission Processing Fee </span>
                                                        <span> Rs. 10,000 </span>
                                                      </li>
                                                      <li>
                                                          <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Security Deposit </span>
                                                          <span> Rs. 10,000 </span>
                                                      </li>
                                                      <li>
                                                          <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Semester Fee </span>
                                                          <span> Rs. 100,000 </span>
                                                      </li>
                                                    </ul>
                                              </li>

                                              <li><i class="fa fa-graduation-cap" aria-hidden="true"></i> <b>Engineering, IT, Social, HRM</b>
                                                <ul>
                                                  <li>
                                                    <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Admission Processing Fee </span>
                                                    <span> Rs. 10,000 </span>
                                                  </li>
                                                  <li>
                                                      <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Security Deposit </span>
                                                      <span> Rs. 10,000 </span>
                                                  </li>
                                                  <li>
                                                      <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Semester Fee </span>
                                                      <span> Rs. 65,000 </span>
                                                  </li>
                                                </ul>
                                          </li>
                                              </ul>
                                          </div>
                                        </div> -->

                                        <!--Graduation-->

                                        <!-- <div class="clever-curriculum">
                                        <div class="cl6 mb-30">
                                            <h4 class="d-flex justify-content-between"><span>GRADUATION PRGRAMS</span></h4>
                                              <ul class="curriculum-list2">
                                                <li><i class="fa fa-graduation-cap" aria-hidden="true"></i> <b> Architecture, Sciences, Business</b>
                                                  <ul>
                                                    <li>
                                                      <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Admission Processing Fee </span>
                                                      <span> Rs. 35,000 </span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Security Deposit </span>
                                                        <span> Rs. 10,000 </span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Semester Fee </span>
                                                        <span> Rs. 105,000 </span>
                                                    </li>
                                                  </ul>
                                            </li>

                                            <li><i class="fa fa-graduation-cap" aria-hidden="true"></i> <b>Engineering, IT, Social, HRM</b>
                                              <ul>
                                                <li>
                                                  <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Admission Processing Fee </span>
                                                  <span> Rs. 10,000 </span>
                                                </li>
                                                <li>
                                                    <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Security Deposit </span>
                                                    <span> Rs. 10,000 </span>
                                                </li>
                                                <li>
                                                    <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Semester Fee </span>
                                                    <span> Rs. 90,000 </span>
                                                </li>
                                              </ul>
                                        </li>
                                            </ul>
                                        </div>
                                      </div> -->


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="course-sidebar">
                        <!-- Buy Course -->
                        <a href="/institute?instituteID={{$details[0]->instituteid}}" class="btn clever-btn mb-30 w-100">Visit Institute Profile</a>

                        <!-- Widget -->
                        <div class="sidebar-widget">
                            <h4>Course Features</h4>
                            <ul class="features-list">
                                <li>
                                    <h6><i class="fa fa-clock-o" aria-hidden="true"></i> Duration</h6>
                                    <h6>{{$details[0]->duration}} Years</h6>
                                </li>
                                <!-- <li>
                                    <h6><i class="fa fa-bell" aria-hidden="true"></i> Semesters</h6>
                                    <h6>8</h6>
                                </li> -->
                                <!-- <li>
                                    <h6><i class="fa fa-hourglass" aria-hidden="true"></i> Credit Hours</h6>
                                    <h6>132</h6>
                                </li> -->
                                <li>
                                    <h6><i class="fa fa-sun-o" aria-hidden="true"></i> Morning Classes</h6>
                                    <?php if ($details[0]->shiftMorning == 1) {
                                      echo "<h6 style=".'color:green;'.">Yes</h6>";
                                    }
                                    else {
                                      echo "<h6 style=".'color:red;'.">No</h6>";
                                    }?>

                                </li>
                                <li>
                                    <h6><i class="fa fa-moon-o" aria-hidden="true"></i> Afternoon Classes</h6>
                                    <?php if ($details[0]->shiftAfternoon == 1) {
                                      echo "<h6 style=".'color:green;'.">Yes</h6>";
                                    }
                                    else {
                                      echo "<h6 style=".'color:red;'.">No</h6>";
                                    }?>
                                </li>
                            </ul>
                        </div>

                        <!-- Widget -->
                        <!-- <div class="sidebar-widget">
                            <h4>Certification</h4>
                            <img src="img/bg-img/cer.png" alt="">
                        </div> -->

                        <!-- Widget -->
                        <div class="sidebar-widget">
                            <h4>You may like</h4>
                            @php
                              $result =  DB::table('degrees')
                              ->join('institutes','institutes.id','degrees.institute_id')
                              ->where('institutes.id','!=',$details[0]->instituteid)
                              ->where('degrees.name',$details[0]->degreeName)
                              ->select('degrees.name as degreeName','institutes.name as instituteName','degrees.id as degreeid','institutes.id as instituteid')
                              ->orderby('numberOfViews','desc')->limit(3)->get();
                            @endphp

                            <?php foreach ($result as $r): ?>
                              <div class="single--courses d-flex align-items-center">
                                  <div class="content">
                                      <h5><a href="/degree?degreeid={{$r->degreeid}}&instituteid={{$r->instituteid}}">{{$r->degreeName}}</h5>
                                      <h6>{{$r->instituteName}}</h6>
                                  </div>
                              </div>
                            <?php endforeach; ?>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Courses Content End ##### -->

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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by We6 with <i class="fa fa-heart-o" aria-hidden="true"></i></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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
    <script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

$("#rupee").on("click", function(){
   if($(this).is(":not(:checked)")){
     <?php
     $res = currency($details[0]->fees,'PKR','PKR') ?>
     document.getElementById("fees").innerHTML="~ {{$res}}";
   }
  else {
    <?php $res = currency($details[0]->fees,'PKR','PKR') ?>
    document.getElementById("fees").innerHTML="~ {{$res}}";
  }
});
$("#dollar").on("click", function(){
   if($(this).is(":not(:checked)")){
     <?php
     $res = currency($details[0]->fees,'PKR','PKR') ?>
     document.getElementById("fees").innerHTML="{{$res}}";
   }
  else {
    <?php $res = currency($details[0]->fees,'PKR','USD',false) ?>
    document.getElementById("fees").innerHTML="~ ${{(int)$res}}";
  }
});
$("#riyal").on("click", function(){
   if($(this).is(":not(:checked)")){
     <?php
     $res = currency($details[0]->fees,'PKR','PKR') ?>
     document.getElementById("fees").innerHTML="{{$res}}";
   }
  else {
    <?php $res = currency($details[0]->fees,'PKR','SAR',false) ?>
    document.getElementById("fees").innerHTML="~ {{(int)$res}} ﷼";
  }
});
$("#pound").on("click", function(){
   if($(this).is(":not(:checked)")){
     <?php
     $res = currency($details[0]->fees,'PKR','PKR') ?>
     document.getElementById("fees").innerHTML="{{$res}}";
   }
  else {
    <?php $res = currency($details[0]->fees,'PKR','GBP',false) ?>
    document.getElementById("fees").innerHTML="~ {{(int)$res}} £";
  }
});




// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>

</html>
