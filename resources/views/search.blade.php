<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>We6</title>

    <!-- Favicon -->
    <link rel="icon" href="/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="searchfilters.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css"/>


</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">


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
                                        <li><a href="{{route('page.compare')}}">Compare</a></li>
                                        <li><a href="{{route('page.timer')}}">Single Courses</a></li>
                                        <li><a href="{{route('page.timer')}}">Instructors</a></li>
                                        <li><a href="{{route('page.timer')}}">Blog</a></li>
                                        <li><a href="{{route('page.timer')}}">Single Blog</a></li>
                                        <li><a href="{{route('page.timer')}}">Regular Page</a></li>
                                        <li><a href="{{route('page.timer')}}">Contact</a></li>
                                    </ul>
                                </li>
                              </ul>
                              <div class="classynav2">
                                <ul>
                                <li><a href="{{route('page.timer')}}" position="relative">Wishlist<span class="badge">3</span></a></li>
                              </ul>
                            </div>
                            <div class="classynav3">
                              <ul>
                                <li><a href="">Instructors</a></li>
                                <li><a href="">Contact</a></li>
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
<!--
                <div class="side2nav">
                    <a href="#about">About</a>
                    <a href="#services">Services</a>
                    <a href="#clients">Clients</a>
                    <a href="#contact">Contact</a>
                    <button class="dropdown-btn-2">Dropdown
                      <i class="fa fa-caret-down"></i>
                    </button>
                  <div class="dropdown-container-2">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                  </div>
                    <a href="#contact">Search</a>
                  </div> -->

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class=" bg-overlay-2by5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="regular-page-area section-padding-25">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-lg-4" style="padding-bottom:2%";>
                  <div class="clever-faqs">
                      <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="clever-main-menu">
                          <!-- Search Button -->
                          <div class="search-area">
                              <form action="#" method="">
                                  <input type="search" name="search" id="search" placeholder="Keyword">
                                  <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                              </form>
                          </div>
                        </div>

                        <!-- Degree Group -->
                        <div class="panel single-accordion8">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseEight" class="collapsed"
                                data-parent="#accordion" data-toggle="collapse" href="#collapseEight">Search By Degree Group
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                            </h6>
                            <div id="collapseEight" class="accordion-content collapse">

                              <?php $c_fsc = App\Degree::where('name','LIKE','%FSC%')->count() ?>

                              <label  style="word-wrap:break-word">
                                  <input class="common-selector group"  type="checkbox" value="FSC" /> FSC ({{$c_fsc}})
                               </label>

                                 <?php $c_ics = App\Degree::where('name','LIKE','%ICS%')->count() ?>

                                <label  style="word-wrap:break-word">
                                  <input class="common-selector group"  type="checkbox" value="ICS" /> ICS  ({{$c_ics}})
                               </label>

                                 <?php $c_fa = App\Degree::where('name','LIKE','%FA%')->count() ?>

                               <label  style="word-wrap:break-word">
                                   <input class="common-selector group"  type="checkbox" value="FA" /> FA ({{$c_fa}})
                                </label>

                                  <?php $c_icom = App\Degree::where('name','LIKE','%ICOM%')->count() ?>

                                <label  style="word-wrap:break-word">
                                    <input class="common-selector group"  type="checkbox" value="ICOM" /> ICOM  ({{$c_icom}})
                                 </label>

                                 <?php $c_acca = App\Degree::where('name','LIKE','%ACCA%')->count() ?>

                               <label  style="word-wrap:break-word">
                                   <input class="common-selector group"  type="checkbox" value="ACCA" /> ACCA  ({{$c_acca}})
                                </label>

                                <?php $c_alevel = App\Degree::where('name','LIKE','%level%')->count() ?>

                              <label  style="word-wrap:break-word">
                                  <input class="common-selector group"  type="checkbox" value="A Level" /> A Level  ({{$c_alevel}})
                               </label>

                               <?php $c_he = App\Degree::where('name','LIKE','%HOME%')->count() ?>

                             <label  style="word-wrap:break-word">
                                 <input class="common-selector group"  type="checkbox" value="Home Economics" /> Home Economics  ({{$c_he}})
                              </label>

                              <?php $c_gs = App\Degree::where('name','LIKE','General%')->count() ?>

                            <label  style="word-wrap:break-word">
                                <input class="common-selector group"  type="checkbox" value="General Science" /> General Science  ({{$c_gs}})
                             </label>

                            </div>
                        </div>


                        <!-- Affiliation -->
                        <div class="panel single-accordion4">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseFour" class="collapsed"
                                data-parent="#accordion" data-toggle="collapse" href="#collapseFour">Search By Affiliation
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                            </h6>
                            <div id="collapseFour" class="accordion-content collapse">
                              @php
                                  $affiliations= App\Institute::select('affiliation')->distinct()->get();

                              @endphp
                              @foreach($affiliations as $affiliation)
                                <?php
                                  $c_aff = App\Institute::where('affiliation',$affiliation->affiliation)->count();
                                 ?>
                                <label  style="word-wrap:break-word">

                                    <input  class="common-selector affiliation" type="checkbox" value="{{$affiliation->affiliation}}" /> {{$affiliation->affiliation}}  ({{$c_aff}})
                                </label>
                              @endforeach


                            </div>
                        </div>

                        <!-- Facilities -->
                        <div class="panel single-accordion7">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseSeven" class="collapsed"
                                data-parent="#accordion" data-toggle="collapse" href="#collapseSeven">Search By Facilities
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                            </h6>
                            <div id="collapseSeven" class="accordion-content collapse">

                              <!-- count for hosel -->
                              <?php $c_trans = App\Institute::where('transportation',1)->count() ?>

                              <label  style="word-wrap:break-word">
                                  <input id="transport" class="common-selector transport" type="checkbox" value="1" /> Transportation ({{$c_trans}})
                               </label>

                               <!-- count for hosel -->
                               <?php $c_hostel = App\Institute::where('hostel',1)->count() ?>

                                <label  style="word-wrap:break-word">
                                  <input id="hostel" class="common-selector hostel" type="checkbox" value="1" /> Hostel ({{$c_hostel}})
                               </label>

                              <!-- count of scholarship -->
                              <?php $c_sch = App\Institute::where('scholarship',1)->count() ?>

                              <label  style="word-wrap:break-word">
                                <input id="scholarship" class="common-selector scholarship" type="checkbox" value="1" /> Scholarship  ({{$c_sch}})
                             </label>
                            </div>
                        </div>

                          <!--Town -->
                          <div class="panel single-accordion2">
                              <h6><a role="button2" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseTwo">Search by Town
                              <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                              <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                              </a></h6>
                              <div id="collapseTwo" class="accordion-content collapse">
                                @php
                                  $areas= App\Town::select('name','id')->distinct()->get();
                                @endphp

                                @foreach($areas as $area)

                                <?php $c_area = DB::table('addresses')->join('towns','towns.id','addresses.town_id')->where('towns.name',$area->name)->count();
                                 ?>

                                  <label  style="word-wrap:break-word">
                                    <input class="common-selector town" id="show" type="checkbox" value="{{$area->name}}"/> {{$area->name}} ({{$c_area}})
                                  </label>
                                @endforeach


                              </div>
                          </div>

                          <!-- Subarea -->
                          <div class="panel single-accordion10" id="hide">
                              <h6><a role="button2" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseTen">Search by Subarea
                              <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                              <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                              </a></h6>
                              <div id="collapseTen" class="accordion-content collapse">
                              </div>
                          </div>

                          <!-- Sector -->
                          <div class="panel single-accordion3">
                              <h6>
                                  <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed"
                                  data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Search By Sector
                                  <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                  <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                  </a>
                              </h6>
                              @php
                                $sector= App\Institute::select('sector')->distinct()->get();
                              @endphp

                              <div id="collapseThree" class="accordion-content collapse">
                              @foreach($sector as $s)

                              <?php
                                $c_sect = App\Institute::where('sector',$s->sector)->count();
                               ?>

                                <label  style="word-wrap:break-word">
                                  <input class="common-selector sector" type="checkbox" value="{{$s->sector}}"/> {{$s->sector}} ({{$c_sect}})
                                </label>
                              @endforeach
                              </div>
                          </div>



                          <!-- Fees -->
                          <div class="panel single-accordion5">
                              <h6>
                                  <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseFive"
                                  data-parent="#accordion" data-toggle="collapse" href="#collapseFive">Search by Fees Range
                                  <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                  <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                  </a>
                              </h6>
                                <div id="collapseFive" class="accordion-content collapse">
                                  <div style="padding:30px";>
                                    <input type="text" class="js-range-slider" name="fees_range" value="">
                                    <p>(<span id="feecount"></span>) Results</p>
                                  </div>
                                </div>
                          </div>

                          <!-- Marks -->
                          <div class="panel single-accordion6">
                              <h6>
                                  <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseSix"
                                  data-parent="#accordion" data-toggle="collapse" href="#collapseSix">Search By Your Marks
                                  <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                  <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                  </a>
                              </h6>
                              <div id="collapseSix" class="accordion-content collapse">
                                    <div class="slidecontainer">
                                      <input type="range" min="33" max="100" step="1" value="100" class="slider common-selector" id="marks-max-range">
                                      <p>Maximum Marks: <span id="marks-max"></span>  (<span id="markscount"></span>)</p>
                                      
                                    </div>
                              </div>
                          </div>

                          <!-- other filters -->

                         <div class="panel single-accordion9">
                             <h6>
                                 <a role="button" aria-expanded="true" aria-controls="collapseSeven" class="collapsed"
                                 data-parent="#accordion" data-toggle="collapse" href="#collapseNine"> Other
                                 <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                 <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                 </a>
                             </h6>
                             <div id="collapseNine" class="accordion-content collapse">
                                <?php $c_coEd = App\Institute::where('coEducation',1)->count() ?>
                               <label  style="word-wrap:break-word">
                                 <input id="coEducation" class="common-selector coEducation" type="checkbox" value="1" /> Co-Education ({{$c_coEd}})
                              </label>

                              <?php $c_sM = App\Degree::where('shiftMorning',1)->count() ?>
                             <label  style="word-wrap:break-word">
                               <input id="shiftMorning" class="common-selector shiftMorning" type="checkbox" value="1" /> Morning Shift ({{$c_sM}})
                            </label>

                            <?php $c_sA = App\Degree::where('shiftAfternoon',1)->count() ?>
                           <label  style="word-wrap:break-word">
                             <input id="shiftAfternoon" class="common-selector shiftAfternoon" type="checkbox" value="1" /> Afternoon Shift ({{$c_sA}})
                          </label>
                             </div>
                         </div>
                      </div>

                  </div>
                </div>


    <!-- ##### Hero Area End ##### -->
    <!-- ##### Popular Courses Start ##### -->
      <div class="popular-courses-area" style="padding-left:5%" >


         <div class="container" style="padding:0 4% 0 1%;">
            <!-- <div class="col-12">
            </div> -->
            <div class="container">

              @if (count($results)>0)

                <section class="results">
                    @include('partialviews.searchResults');
                </section>

              @endif

            </div>
           </div>
          </div>
      </div>
    </div>
    </div>
    </div>

    <!-- ##### Popular Courses End ##### -->


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="{{route('page.timer')}}"><img src="img/core-img/logo2.png" alt=""></a>
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
    <!-- range slider plugin js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>



    <script> $(".seat").on("click", function(){
      $(this).css("background", "red");
    });
    </script>

  <script>
  $(document).ready(function(){

    getFeesCount();
      function getFeesCount(minfees=10000,maxfees=500000){
      $.ajax({
        url:"/getFeeCount",
        method:"post",
        data:{minfees:minfees, maxfees:maxfees, _token: "{{csrf_token()}}"},
        success:function(data){
          if(data < 1)
            data=0;
          $('#feecount').html(data);
        }
      });
    }
  });
  </script>

  <script>
  $(document).ready(function(){
    getMarksCount();
    function getMarksCount() {
      var maxMarks = $('#marks-max-range').val();
      $.ajax({
        url:"/getMarksCount",
        method:"post",
        data:{marks:maxMarks, _token: "{{csrf_token()}}"},
        success:function(data){
          $('#markscount').html(data);
        }
      });
    }
    $('#marks-max-range').change(function(){
      getMarksCount();
    });
  });
  </script>

<script>
  $(document).ready(function(){
    $('#hide').hide();
  });
</script>


<script>
  $(document).ready(function(){
    $('.town').click(function(){
      if($('#hide').is(":hidden")){
        $('#hide').show();
      }
      var filter = [];
      $('.'+'town'+':checked').each(function(){
          filter.push($(this).val());
      });
      $.ajax({
        url:'/getSubareas',
        method:'GET',
        data:{town:filter, _token: "{{csrf_token()}}"},
        success:function(data){
            $('#collapseTen').html(data)
          }
      });
    });
  });
</script>


   <script>
        $(document).ready(function()
        {
          filter_data();
          function filter_data(minfees=10000,maxfees=500000)
          {
            var search = document.getElementById('search').value;
            var town = get_filter('town');
            var subarea = get_filter('subarea');
            var sector = get_filter('sector');
            var affiliation = get_filter('affiliation');
            var hostel = get_filter('hostel');
            var scholarship = get_filter('scholarship');
            var transport = get_filter('transport');
            var coEd = get_filter('coEducation');
            var sM = get_filter('shiftMorning');
            var sA = get_filter('shiftAfternoon');
            var maxmarks= $('#marks-max-range').val();
            var group = get_filter('group');
                $.ajax({
                    url:"/apply",
                    method:"GET",
                    data:{ subarea:subarea, shiftMorning:sM, shiftAfternoon:sA, coEducation:coEd, search: search, scholarship:scholarship, town:town, sector:sector, affiliation:affiliation, hostel:hostel,transport:transport,minfees:minfees, maxmarks:maxmarks, maxfees:maxfees,group, _token: "{{csrf_token()}}"},
                    success:function(data){

                      //console.log(data);

                      $('.results').html(data);
                       // $('#degreeResultsArea').load(data);
                    }
                });
            }
            function get_filter(class_name)
            {
                var filter = [];
                $('.'+class_name+':checked').each(function(){
                    filter.push($(this).val());
                });
                return filter;
            }


            $('.js-range-slider').ionRangeSlider({
              type: "integer",
              min:10000,
              max:500000,
              step:10000,
              from:10000,
              to:500000,
              grid:true,
              grid_num:7,
              keyboard:true,
              prefix:"Rs",
              prettyify_enabled:true,
              prettify_separator:",",
              skin:"big",
              onFinish:function(data){
                let minFees=data.from;
                let maxFees=data.to;
                filter_data(minFees,maxFees);
                getFeesCount(minFees,maxFees);

              }

            });

            $(document).on('click', '.pagination a', function(event)
            {
              event.preventDefault();
              var page = $(this).attr('href').split('page=')[1];
              fetch_data(page);

            });

          function fetch_data(page)
          {
            $.ajax({
                url:"?page="+page,
                type:"get",
                datatype:"html",

                success:function(data)
                {
                  $('.results').html(data);
                }
            });
          }
          

            $(document).on('keyup','#search',function(){
                filter_data();
              });

            $(document).on('click','.subarea',function(){
                filter_data();
              });

            $('.common-selector').click(function(){
                filter_data();
            });
        });
    </script>

</body>

</html>
