<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>{{$details[0]->name}}</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="institute.css">

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
                              </ul>
                              <div class="classynav2">
                            </div>
                            <div class="classynav3">
                              <ul>
                                <li><a href="{{route('page.undergraduateCompare')}}">Compare</a></li>
                                <li><a href="{{route('contactus')}}">Contact</a></li>
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
                <div class="breadcumb-area">
                  <!-- Breadcumb -->
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('page.home') }}">Home</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('page.home') }}">Intermediate</a></li>
                      <?php if (isset($degree)): ?>
                        <li class="breadcrumb-item"><a href="/degree?instituteid={{$details[0]->id}}&degreeid={{$degree[0]->id}}">{{$degree[0]->name}}</a></li>
                      <?php endif; ?>
                      <li class="breadcrumb-item active" aria-current="page">{{$details[0]->name}}</li>
                    </ol>
                  </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Single Course Intro Start ##### -->
    @php
    if($details[0]->img_url == 'NIL'){
      $url = 'img/bg-img/bg3.jpg';
    }
    else {
      $url = str_replace('https://drive.google.com/open?','https://docs.google.com/uc?',$details[0]->img_url);
    }
    @endphp
    <div class="hero-area bg-img bg-overlay-2by5 d-flex align-items-center justify-content-center" style="background-image: url({{$url}});">
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
            <h3>{{$details[0]->name}}</h3>
            <!-- <div class="meta d-flex align-items-center justify-content-center">
              <div class="globalonly">
                <a href="{{$details[0]->website}}" class="fa fa-globe"></a>
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
                                    <a class="nav-link active" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab--4" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="true">Location / Directions</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" id="tab--5" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="true">Fees</a>
                                </li> -->
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <!-- Tab Text -->
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                    <div class="clever-description">

                                      <div class="clever-curriculum mb-30">
                                        <div class="cl7 mb-30">
                                          <h4 class="d-flex justify-content-between"><span>College Specification</span></h4>
                                            <ul class="curriculum-list3">

                                                <ul>
                                                  <li>
                                                    <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-map-marker" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i> Location</h6>
                                                    <h6>Lahore</h6>
                                                  </li>

                                                  <li>
                                                    <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-bus" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i> Transportation</h6>

                                                        @if($details[0]->transportation==1)
                                                            <h6 style="color:#20ba72;">Available</h6>
                                                        @else
                                                            <h6 style="color:red;">Unavailable</h6>
                                                        @endif
                                                  </li>
                                                  <li>
                                                    <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-users" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i> Co-Education</h6>
                                                        @if($details[0]->coEducation == 1)
                                                            <h6 style="color:#20ba72;">Yes</h6>
                                                        @else
                                                            <h6 style="color:red;">No</h6>
                                                        @endif


                                                  </li>
                                                  <li>
                                                    <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-building" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i> Sector</h6>
                                                    <h6>{{$details[0]->sector}}</h6>
                                                  </li>
                                                  <li>
                                                    <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-code-fork" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i>Affiliation</h6>
                                                    <h6>{{$details[0]->affiliation}} <i class="fa fa-check-circle" style="color:blue"></i></h6>
                                                  </li>
                                                  @php
                                                  $town=DB::table('institutes')
                                                  ->join('addresses','institutes.id','addresses.institute_id')
                                                  ->join('towns','addresses.town_id','towns.id')
                                                  ->select('towns.name as townName')
                                                  ->where('institutes.id',$details[0]->id)
                                                  ->first();
                                                  @endphp
                                                  <li>
                                                      <h6  style="color:rgba(0,0,0,0.5)"><i class="fa fa-cube" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i>Town</h6>
                                                      <h6>{{$town->townName}}</h6>
                                                  </li>
                                                  @php
                                                    $subarea=DB::table('institutes')
                                                      ->join('addresses','institutes.id','addresses.institute_id')
                                                      ->join('subareas','addresses.subarea_id','subareas.id')
                                                      ->select('subareas.name as areaName')
                                                      ->where('institutes.id',$details[0]->id)
                                                      ->first();
                                                  @endphp
                                                  <li>
                                                      <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-cubes" aria-hidden="true" style="color:rgba(0,0,0,0.5);"></i>Sub-area</h6>
                                                      <h6>{{$subarea->areaName}}</h6>
                                                  </li>
                                                </ul>
                                                </ul>

                                              </div>
                                            </div>

                                        <div class="clever-curriculum mb-30">
                                          <div class="cl7 mb-30">
                                            <h4 class="d-flex justify-content-between"><span>Basic Information</span></h4>
                                              <ul class="curriculum-list3">

                                                  <ul>
                                                    <li>
                                                      <span><i style="color:rgba(0,0,0,0.5)" class="fa fa-mobile-phone" aria-hidden="true"></i> {{$details[0]->phone_number}} </span>
                                                      <span></span>
                                                    </li>
                                                    <li>
                                                        <span><i style="color:rgba(0,0,0,0.5)" class="fa fa-mail-forward" aria-hidden="true"></i> {{$details[0]->email}} </span>
                                                        <span></span>
                                                    </li>
                                                    <li>
                                                        <span><i style="color:rgba(0,0,0,0.5)" class="fa fa-globe" aria-hidden="true"></i> https://{{$details[0]->website}} </span>
                                                        <span></span>
                                                    </li>
                                                    <li>
                                                        <span><i style="color:rgba(0,0,0,0.5)" class="fa fa-won" aria-hidden="true"></i> {{$details[0]->affiliation}}  </span>
                                                        <span></span>
                                                    </li>
                                                    <li>
                                                        <span><i style="color:rgba(0,0,0,0.5)" class="fa fa-location-arrow" aria-hidden="true"></i> {{$details[0]->location}}  </span>
                                                        <span></span>
                                                    </li>
                                                  </ul>
                                                  </ul>
                                    </li>


                                            </ul>
                                        </div>
                                      </div>

                                        <!-- FAQ -->
                                    </div>
                                </div>

                                <!-- Tab Text -->
                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">



                                    <div class="clever-curriculum">

                                      {{-- <div class="clever-faqs mb-30">
                                          <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">

                                              <!-- Single Accordian Area -->
                                              <!-- <div class="panel single-accordion">
                                                  <h6><a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseOne">Find by Location
                                                  <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                  <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                  </a></h6>
                                                  <div id="collapseOne" class="accordion-content collapse">

                                                        <label  style="word-wrap:break-word">
                                                            <input id="checkid"  type="checkbox" value="test" />Samnabad
                                                         </label>

                                                          <label  style="word-wrap:break-word">
                                                            <input id="checkid"  type="checkbox" value="test" />Model Town
                                                         </label>

                                                         <label  style="word-wrap:break-word">
                                                             <input id="checkid"  type="checkbox" value="test" />Islampura
                                                          </label>


                                                            <label  style="word-wrap:break-word">
                                                                <input id="checkid"  type="checkbox" value="test" />Faisal Town
                                                             </label>

                                                              <label  style="word-wrap:break-word">
                                                                <input id="checkid"  type="checkbox" value="test" />Harban
                                                             </label>

                                                             <label  style="word-wrap:break-word">
                                                                 <input id="checkid"  type="checkbox" value="test" />MughalPura
                                                              </label>

                                                                <label  style="word-wrap:break-word">
                                                                    <input id="checkid"  type="checkbox" value="test" />Johar Town
                                                                 </label>

                                                                  <label  style="word-wrap:break-word">
                                                                    <input id="checkid"  type="checkbox" value="test" />Wapda Town
                                                                 </label>

                                                                 <label  style="word-wrap:break-word">
                                                                     <input id="checkid"  type="checkbox" value="test" />Gulberg
                                                                  </label>

                                                                    <label  style="word-wrap:break-word">
                                                                        <input id="checkid"  type="checkbox" value="test" />Mall Road
                                                                     </label>

                                                                      <label  style="word-wrap:break-word">
                                                                        <input id="checkid"  type="checkbox" value="test" />Anarkali
                                                                     </label>

                                                                     <label  style="word-wrap:break-word">
                                                                         <input id="checkid"  type="checkbox" value="test" />Bahria Town
                                                                      </label>

                                                  </div>
                                              </div> -->

                                              <!-- Single Accordian Area -->
                                              <!-- <div class="panel single-accordion">
                                                  <h6>
                                                      <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Sort by Fees
                                                      <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                      <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                      </a>
                                                  </h6>
                                                  <div id="collapseTwo" class="accordion-content collapse">
                                                        <div class="""slidecontainer">
                                                          <input type="range" min="10000" max="100000" value="500" class="slider" id="myRange">
                                                          <p>Fee Range: <span id="demo"></span></p>
                                                        </div>
                                                  </div>
                                              </div> -->

                                              <!-- Single Accordian Area -->
                                              <!-- <div class="panel single-accordion">
                                                  <h6>
                                                      <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Sort by Govt/Private
                                                      <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                      <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                      </a>
                                                  </h6>
                                                  <div id="collapseThree" class="accordion-content collapse">
                                                    <label  style="word-wrap:break-word">
                                                        <input id="checkid"  type="checkbox" value="test" />Government
                                                     </label>

                                                      <label  style="word-wrap:break-word">
                                                        <input id="checkid"  type="checkbox" value="test" />Private
                                                     </label>
                                                  </div>
                                              </div> -->

                                              <!-- Single Accordian Area -->
                                              <!-- <div class="panel single-accordion">
                                                  <h6>
                                                      <a role="button" aria-expanded="true" aria-controls="collapseFour" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseFour">Sort by Affiliation
                                                      <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                      <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                      </a>
                                                  </h6>
                                                  <div id="collapseFour" class="accordion-content collapse">
                                                    <label  style="word-wrap:break-word">
                                                        <input id="checkid"  type="checkbox" value="test" />Lahore Board
                                                     </label>

                                                      <label  style="word-wrap:break-word">
                                                        <input id="checkid"  type="checkbox" value="test" />Punjab University
                                                     </label>

                                                     <label  style="word-wrap:break-word">
                                                         <input id="checkid"  type="checkbox" value="test" />Federal Board
                                                      </label>

                                                       <label  style="word-wrap:break-word">
                                                         <input id="checkid"  type="checkbox" value="test" />HEC
                                                      </label>
                                                  </div>
                                              </div> -->
                                          </div>

                                      </div> --}}
                                      <!-- Curriculum Level -->
                                        <!-- <div class="curriculum-level mb-30">
                                            <h4 class="d-flex justify-content-between"><span>MASTERS PROGRAMS</span></h4>
                                              <ul class="curriculum-list">
                                                <li><i class="fa fa-graduation-cap" aria-hidden="true"></i> NUST Business School (NBS)
                                                  <ul>
                                                    <li>
                                                      <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> MBA </span>
                                                      <span></span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Executive MBA </span>
                                                        <span></span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> MS Human Resource Management </span>
                                                        <span></span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> MS Logistics & Supply Chain Management </span>
                                                        <span></span>
                                                    </li>
                                                  </ul>
                                            </li>

                                            <li><i class="fa fa-graduation-cap" aria-hidden="true"></i> College of Aeronautical Engineering (CAE)
                                              <ul>
                                                <li>
                                                  <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> MS Avionics Engineering </span>
                                                  <span></span>
                                                </li>
                                                <li>
                                                    <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> MS Aerospace Engineering </span>
                                                    <span></span>
                                                </li>
                                              </ul>
                                        </li>

                                        <li><i class="fa fa-graduation-cap" aria-hidden="true"></i> School of Natural Sciences (SNS)
                                          <ul>
                                            <li>
                                              <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> MS Physics </span>
                                              <span></span>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> MS Mathematics </span>
                                                <span></span>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> MS Chemistry </span>
                                                <span></span>
                                            </li>

                                          </ul>
                                    </li>


                                            </ul>
                                        </div> -->

                                        <!-- Curriculum Level -->
                                        <!-- <div class="cl2 mb-30">
                                            <h4 class="d-flex justify-content-between"><span>Under Graduate</span></h4>
                                              <ul class="curriculum-list">
                                                <li><i class="fa fa-graduation-cap" aria-hidden="true"></i>School of Civil and Environmental Engineering  (SCEE)
                                                  <ul>
                                                    <li>
                                                      <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Bachelor of Environmental Engineering </span>
                                                      <span></span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Bachelor of Geoinformatics Engineering </span>
                                                        <span></span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Bachelor of Civil Engineering </span>
                                                        <span></span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Bachelor of Civil Engineering </span>
                                                        <span></span>
                                                    </li>

                                            </li>

                                            </ul>
                                        </div> -->
                                        @php
                                          $result = DB::table('degrees')
                                          ->join('institutes','institutes.id','degrees.institute_id')
                                          ->where('institutes.id',$details[0]->id)
                                          ->select('degrees.name as degreeName','degrees.id', 'institutes.id as instituteID')
                                          ->get();
                                        @endphp
                                        <!-- Curriculum Level -->
                                        <div class="cl3 mb-30">
                                          <h4 class="d-flex justify-content-between"><span>Intermediate</span></h4>
                                        <?php foreach ($result as $r): ?>
                                                <ul class="curriculum-list">
                                                  <ul>
                                                    <li onmouseover="highlight(this);" onmouseout="unhighlight(this)">
                                                      <h6 style="color:rgba(0,0,0,0.8);font-size:16px;font-weight:700;"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><a href="/degree?degreeid={{$r->id}}&instituteid={{$r->instituteID}}">{{$r->degreeName}}</a></h6>
                                                        <span></span>
                                                    </li>
                                                </ul>
                                              </ul>

                                        <?php endforeach; ?>
                                        </div>

                                    </div>
                                </div>

                                <!-- Tab Text -->
                                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                    <div class="clever-review">

                                        <!-- About Review -->
                                        <div class="about-review mb-30">
                                            <h4>Reviews</h4>
                                            <p>Sed elementum lacus a risus luctus suscipit. Aenean sollicitudin sapien neque, in fermentum lorem dignissim a. Nullam eu mattis quam. Donec porttitor nunc a diam molestie blandit. Maecenas quis ultrices</p>
                                        </div>

                                        <!-- Ratings -->
                                        <div class="clever-ratings d-flex align-items-center mb-30">

                                            <div class="total-ratings text-center d-flex align-items-center justify-content-center">
                                                <div class="ratings-text">
                                                    <h2>4.5</h2>
                                                    <div class="ratings--">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                    </div>
                                                    <span>Rated 5 out of 3 Ratings</span>
                                                </div>
                                            </div>

                                            <div class="rating-viewer">
                                                <!-- Rating -->
                                                <div class="single-rating mb-15 d-flex align-items-center">
                                                    <span>5 STARS</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>80%</span>
                                                </div>
                                                <!-- Rating -->
                                                <div class="single-rating mb-15 d-flex align-items-center">
                                                    <span>4 STARS</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>20%</span>
                                                </div>
                                                <!-- Rating -->
                                                <div class="single-rating mb-15 d-flex align-items-center">
                                                    <span>3 STARS</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>0%</span>
                                                </div>
                                                <!-- Rating -->
                                                <div class="single-rating mb-15 d-flex align-items-center">
                                                    <span>2 STARS</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>0%</span>
                                                </div>
                                                <!-- Rating -->
                                                <div class="single-rating mb-15 d-flex align-items-center">
                                                    <span>1 STARS</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>0%</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Review -->
                                        <div class="single-review mb-30">
                                            <div class="d-flex justify-content-between mb-30">
                                                <!-- Review Admin -->
                                                <div class="review-admin d-flex">
                                                    <div class="thumb">
                                                        <img src="img/bg-img/t1.png" alt="">
                                                    </div>
                                                    <div class="text">
                                                        <h6>Sarah Parker</h6>
                                                        <span>Sep 29, 2017 at 9:48 am</span>
                                                    </div>
                                                </div>
                                                <!-- Ratings -->
                                                <div class="ratings">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis.</p>
                                        </div>

                                        <!-- Single Review -->
                                        <div class="single-review mb-30">
                                            <div class="d-flex justify-content-between mb-30">
                                                <!-- Review Admin -->
                                                <div class="review-admin d-flex">
                                                    <div class="thumb">
                                                        <img src="img/bg-img/t1.png" alt="">
                                                    </div>
                                                    <div class="text">
                                                        <h6>Sarah Parker</h6>
                                                        <span>Sep 29, 2017 at 9:48 am</span>
                                                    </div>
                                                </div>
                                                <!-- Ratings -->
                                                <div class="ratings">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis.</p>
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
                                                <div id="googleMap">
                                                </div>
                                              </div>

                                        </div>

                                        <div class="about-members mb-30">
                                          <h4> Location </h4>
                                          <p>{{$details[0]->location}}</p>
                                          <div class="curriculum-list">
                                            <ul>
                                              <li>
                                                <span><i class="fa fa-clock-o" aria-hidden="true"></i> Estimated Time: </span>
                                                <span><b id="duration"></b></span>
                                              </li>

                                                <li>
                                                  <span><i class="fa fa-map-pin"  aria-hidden="true"></i> Distance From Current Location: </span>
                                                  <span><b id="distance"></b></span>
                                                </li>
                                                <li>
                                                <input class="clever-btn" type="button" onclick="getDirections()" value="Get Directions">
                                                </li>
                                              </ul>
                                              </div>
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
                                        </div>

                                        <!--Graduation-->

                                        <div class="clever-curriculum">
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
                                      </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @php
                  $views = DB::table('degrees')
                  ->join('institutes','institutes.id','degrees.institute_id')
                  ->where('institutes.id',$details[0]->id)
                  ->sum('numberOfViews');
                @endphp

                <div class="col-12 col-lg-4">
                    <div class="course-sidebar">
                        <!-- Buy Course -->
                        <a href="https://{{$details[0]->website}}" class="btn clever-btn mb-30 w-100">Visit Institute Website</a>

                        <!-- Widget -->
                        <div class="sidebar-widget">
                            <h4>Basic Info</h4>
                            <ul class="features-list">
                                <li>
                                    <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-clock-o" aria-hidden="true"></i> Views</h6>
                                    <h6 style="color:orange;">{{$views}}</h6>
                                </li>
                                @php
                                    $degreesCount=App\Institute::join('degrees','institutes.id','degrees.institute_id')
                                    ->select(DB::raw("count(*) as count"))
                                    ->where('institutes.id',$details[0]->id)
                                    ->get();
                                @endphp
                                <li>
                                    <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Total Degrees</h6>
                                    <h6 style="color:blue;">{{$degreesCount[0]->count}}</h6>
                                </li>
                                @php
                                    $seats=App\Institute::join('degrees','institutes.id','degrees.institute_id')
                                    ->select(DB::raw("sum(degrees.noOfSeats) as sum"))
                                    ->where('institutes.id',$details[0]->id)
                                    ->get();
                                @endphp
                                <li>
                                    <h6 style="color:rgba(0,0,0,0.5)"><i class="fa fa-sitemap" aria-hidden="true"></i> Total Seats</h6>
                                    <h6 style="color:green;">{{$seats[0]->sum}}</h6>
                                </li>
                                {{-- <li>
                                    <h6><i class="fa fa-location-arrow" aria-hidden="true"></i> Location</h6>
                                    <h6>{{$details[0]->city}}</h6>
                                </li> --}}
                                <!-- <li>
                                    <h6><i class="fa fa-thumbs-down" aria-hidden="true"></i> Max Retakes</h6>
                                    <h6>5</h6>
                                </li> -->
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
                              ->where('institutes.id',$details[0]->id)
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
                            <a href="{{route('page.home')}}"><img src="img/core-img/logo2.png" alt=""></a>
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

    @php
      $institutes = App\Institute::with('address')->where('instituteType','College')->get();
      $i=0;
    @endphp

    <script>
        var instituteName = "{!! $details[0]->name !!}";
        var lat = {!! $details[0]->lat !!};
        var lng = {!! $details[0]->lng !!};
    </script>

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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGQs-TY6bUtndfezIiYNev6pCD1tcfTso&libraries=geometry"></script>
    <script src="customjs/google-map/map-active.js"></script>

    <script>
          function unhighlight(x) {
        x.style.backgroundColor = "transparent"
      }

      function highlight(x) {
        x.style.backgroundColor = "#f7d3d6"
        x.style.cursor = "pointer"

      }

      function specialhighlight(x) {
        x.style.fontSize = "16"
        x.style.cursor = "pointer"
        x.style.transitionDelay = "10ms"
        x.style.transitionDuration="2s"
      }

      function specialunhighlight(x) {
        x.style.backgroundColor = "transparent"

      }
</script>

</body>

</html>
