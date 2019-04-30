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

    <link rel="stylesheet" href="customcss/jquery-ui.min.css">
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
                        <div class="panel single-accordion9">

                          <div class="search-area">

                            <input type="search" name="search" id="search" placeholder="Degree Keyword">
                            <button type="submit" id="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>

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

                              @php
                                $results = DB::table('degrees')
                                ->join('degreeGroups','degreeGroups.id','=','degrees.degree_groups_id')
                                ->selectRaw("degreeGroups.name as groupname,count('degrees.id') as count")
                                ->where('degrees.degreeLevel','=','INTER')
                                ->groupby('degreeGroups.name')->get();
                              @endphp
                            <div id="collapseEight" class="accordion-content collapse">


                              @foreach($results as $result)


                                <label  style="word-wrap:break-word; width:100%">
                                    <input class="common-selector group"  type="checkbox" value="{{$result->groupname}}" /> {{$result->groupname}} ({{$result->count}})
                                </label>

                              @endforeach

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
                                $affiliations=DB::table('degrees')
                                ->join('institutes','institutes.id','degrees.institute_id')
                                ->selectRaw("institutes.affiliation as affiliation,count('degrees.id') as count")
                                ->where('degrees.degreeLevel','=','INTER')
                                ->groupby('institutes.affiliation')->get();

                              @endphp
                              @foreach($affiliations as $affiliation)

                                <label  style="word-wrap:break-word; width:100%">

                                    <input  class="common-selector affiliation" type="checkbox" value="{{$affiliation->affiliation}}" /> {{$affiliation->affiliation}}  ({{$affiliation->count}})
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
                              @php
                                $h_degrees=DB::table('degrees')
                                ->join('institutes','institutes.id','degrees.institute_id')
                                ->selectRaw("count('degrees.id') as count")
                                ->where('degrees.degreeLevel','=','INTER')
                                ->where('institutes.hostel',1)
                                ->count();

                              @endphp

                              <label  style="word-wrap:break-word; width:100%">
                                  <input id="hostel" class="common-selector hostel" type="checkbox" value="1" /> Hostel ({{$h_degrees}})
                              </label>

                               <!-- count for hosel -->
                              @php

                                $t_degrees=DB::table('degrees')
                                ->join('institutes','institutes.id','degrees.institute_id')
                                ->selectRaw("count('degrees.id') as count")
                                ->where('degrees.degreeLevel','=','INTER')
                                ->where('institutes.transportation',1)
                                ->count();

                              @endphp

                              <label  style="word-wrap:break-word; width:100%">
                                  <input id="transport" class="common-selector transport" type="checkbox" value="1" /> Transportation ({{$t_degrees}})
                               </label>

                              <!-- count of scholarship -->
                              @php
                                $s_degrees=DB::table('degrees')
                                ->join('institutes','institutes.id','degrees.institute_id')
                                ->selectRaw("count('degrees.id') as count")
                                ->where('degrees.degreeLevel','=','INTER')
                                ->where('institutes.scholarship',1)
                                ->count();

                              @endphp

                              <label  style="word-wrap:break-word; width:100%">
                                <input id="scholarship" class="common-selector scholarship" type="checkbox" value="1" /> Scholarship  ({{$s_degrees}})
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
                                $t = DB::table('towns')->select('towns.id','towns.name as townName')->get();
                                @endphp
                                @foreach ($t as $te)
                                  @php
                                  $count=DB::table('degrees')
                                  ->join('institutes','institutes.id','degrees.institute_id')
                                  ->join('addresses','addresses.institute_id','institutes.id')
                                  ->join('towns','addresses.town_id','towns.id')
                                  ->where('towns.id',$te->id)
                                  ->where('degrees.degreeLevel','INTER')
                                  ->count();
                                  @endphp
                                  <label  style="word-wrap:break-word; width:100%">
                                    <input class="common-selector town" id="show" type="checkbox" value="{{$te->townName}}"/> {{$te->townName}} ({{$count}})
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
                                $sector=DB::table('degrees')
                                ->join('institutes','institutes.id','degrees.institute_id')
                                ->selectRaw("institutes.sector as sector,count('degrees.id') as count")
                                ->where('degrees.degreeLevel','=','INTER')
                                ->groupby('institutes.sector')
                                ->get();
                              @endphp

                              <div id="collapseThree" class="accordion-content collapse">
                              @foreach($sector as $s)
                                <label  style="word-wrap:break-word; width:100%">
                                  <input class="common-selector sector" type="checkbox" value="{{$s->sector}}"/> {{$s->sector}} ({{$s->count}})
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
                                    <div class="slidecontainer">
                                    <!-- <input type="hidden" id="minfees" value="10000"/>
                                    <input type="hidden" id="maxfees" value="500000">
                                    <p id="fees_show">Rs10000 - Rs500000</p>
                                    <div style="padding-left:15px; padding-right:15px;"><div id="fees_range"></div></div> -->
                                    <input type="text" class="fees_range" name="fees_range" value="" />
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
                                    <!-- <input type="hidden" id="minmarks" value="30"/>
                                      <input type="hidden" id="maxmarks" value="100">
                                      <p id="marks_show">30% - 100%</p>
                                      <div style="padding-left:15px;"><div id="marks_range"></div></div> -->
                                      <input type="text" class="marks_range" name="marks_range" value="" />

                                      <p>(<span id="markscount"></span>) Results</p>
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
                                @php
                                $co_degrees=DB::table('degrees')
                                ->join('institutes','institutes.id','degrees.institute_id')
                                ->selectRaw("count('degrees.id') as count")
                                ->where('degrees.degreeLevel','=','INTER')
                                ->where('institutes.coEducation',1)
                                ->count();

                              @endphp
                                <label  style="word-wrap:break-word; width:100%">
                                <input id="coEducation" class="common-selector coEducation" type="checkbox" value="1" /> Co-Education ({{$co_degrees}})
                                </label>

                              @php
                                $mor_degrees=DB::table('degrees')
                                ->join('institutes','institutes.id','degrees.institute_id')
                                ->selectRaw("count('degrees.id') as count")
                                ->where('degrees.degreeLevel','=','INTER')
                                ->where('degrees.shiftMorning',1)
                                ->count();

                              @endphp
                                <label  style="word-wrap:break-word; width:100%">
                                <input id="shiftMorning" class="common-selector shiftMorning" type="checkbox" value="1" /> Morning Shift ({{$mor_degrees}})
                                </label>

                              @php
                                $aft_degrees=DB::table('degrees')
                                ->join('institutes','institutes.id','degrees.institute_id')
                                ->selectRaw("count('degrees.id') as count")
                                ->where('degrees.degreeLevel','=','INTER')
                                ->where('degrees.shiftAfternoon',1)
                                ->count();

                              @endphp
                                <label  style="word-wrap:break-word; width:100%">
                                <input id="shiftAfternoon" class="common-selector shiftAfternoon" type="checkbox" value="1" /> Afternoon Shift ({{$aft_degrees}})
                                </label>
                             </div>
                         </div>
                         <div class="panel single-accordion9">
                         <!--  <button class="clearbtn" id="clear" onclick="alertFunction()"><i class="fa fa-trash"></i> Clear Filters</button>-->
                          <input type='button' class="clearbtn" value="Clear Filters" />
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

               <section class="filterResults">

               </section>

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
    <script src="customjs/jquery/jquery-ui.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>

    <script> $(".seat").on("click", function(){
      $(this).css("background", "red");
    });
    </script>


  <script>

  </script>



<script>
  $(document).ready(function(){
    $('#hide').hide();
  });
</script>

<script>
  $(document).ready(function(){

    if($('#hide').is(":hidden")){
      $('#hide').show();
    }
    var filter = [];
    $('.'+'town'+':checked').each(function(){
      filter.push($(this).val());
    });
    getSubssInter(filter);


    $('.town').click(function(){
      if($('#hide').is(":hidden")){
        $('#hide').show();
      }
      var filter = [];
      $('.'+'town'+':checked').each(function(){
        filter.push($(this).val());
      });
      getSubssInter(filter);
    });

    function getSubssInter(filter) {
      $.ajax({
        url:'/getSubareas',
        method:'GET',
        data:{town:filter, _token: "{{csrf_token()}}"},
        success:function(data){
          $('#collapseTen').html(data)
        }
      });
    }
  });
</script>

<script>
  $(document).ready(function()
  {

      var minFees=10000;
      var maxFees=500000;
      var minMarks=30;
      var maxMarks=100;
      $(document).on('click', '.pagination a', function(event)
      {
          event.preventDefault();



          var page = $(this).attr('href').split('page=')[1];
          filter_data(page,minFees,maxFees,minMarks,maxMarks);
      });

      function filter_data(page,minfees,maxfees,minmarks,maxmarks)
      {
        $('.filterResults').html('  <div id="preloaderLoading">'+
              '<div class="spinner"></div>'+
          '</div>');
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

        // var minmarks=$('#minmarks').val();
        // var maxmarks=$('#maxmarks').val();
        // var minfees=$('#minfees').val();
        // var maxfees=$('#maxfees').val();
        //var maxmarks= $('#marks-max-range').val();
        var group = get_filter('group');

            $.ajax({
                url:"/applyIntermediate?page="+page,
                method:"GET",
                data:{ subarea:subarea, shiftMorning:sM, shiftAfternoon:sA, coEducation:coEd, search: search, scholarship:scholarship, town:town, sector:sector, affiliation:affiliation, hostel:hostel,transport:transport,minfees:minfees,maxfees:maxfees ,minmarks:minmarks, maxmarks:maxmarks,group:group,   _token: "{{csrf_token()}}"},
                success:function(data){
                  //console.log(data);
                  $('#preloaderLoading').hide();
                  $('.filterResults').html(data);
                }
            });
      }

        function getFeesCount(minfees,maxfees)
        {
          // var minfees=$('#minfees').val();
          // var maxfees=$('#maxfees').val();

          $.ajax({
            url:"/getFeeCountIntermediate",
            method:"post",
            data:{minfees:minfees, maxfees:maxfees, _token: "{{csrf_token()}}"},
            success:function(data){

              $('#feecount').html(data);
            }
          });
        }

      function getMarksCount(minmarks,maxmarks)
      {
        // var minmarks=$('#minmarks').val();
        // var maxmarks=$('#maxmarks').val();
        $.ajax({
          url:"/getMarksCountInter",
          method:"post",
          data:{minmarks:minmarks,maxmarks:maxmarks, _token: "{{csrf_token()}}"},
          success:function(data){

            $('#markscount').html(data);
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

          // $('#fees_range').slider({
          //   range:true,
          //   min:10000,
          //   max:500000,
          //   values:[10000,500000],
          //   step:10000,
          //   stop:function(event,ui)
          //   {
          //     $('#fees_show').html("Rs"+ui.values[0] + ' - ' + "Rs"+ui.values[1]);
          //     $('#minfees').val(ui.values[0]);
          //     $('#maxfees').val(ui.values[1]);
          //     filter_data();
          //     getFeesCount();
          //   }
          // })

          $(".fees_range").ionRangeSlider({
            type:"integer",
            min:10000,
            max:500000,
            from:10000,
            to:500000,
            grid:true,
            prefix:"Rs",
            step:20000,
            prettify_enabled:true,
            prettify_separator: ",",
            grid_snap:true,
            skin:"big",
            onFinish:function(data){
              minFees=data.from;
              maxFees=data.to;
              filter_data(1,minFees,maxFees,minMarks,maxMarks);
              getFeesCount(minFees,maxFees);

            }

          });

          $(".marks_range").ionRangeSlider({
            type:"integer",
            min:30,
            max:100,
            from:30,
            to:100,
            grid:true,
            postfix:"%",
            step:5,
            grid_snap:true,
            skin:"big",
            onFinish:function(data){
              minMarks=data.from;
              maxMarks=data.to;
              filter_data(1,minFees,maxFees,minMarks,maxMarks);
              getMarksCount(minMarks,maxMarks);

            }

          });

          // $('#marks_range').slider({
          //   range:true,
          //   min:30,
          //   max:100,
          //   values:[30,100],
          //   step:5,
          //   stop:function(event,ui)
          //   {
          //     $('#marks_show').html(ui.values[0]+" %" + " - " + ui.values[1]+" %");
          //     $('#minmarks').val(ui.values[0]);
          //     $('#maxmarks').val(ui.values[1]);
          //     filter_data();
          //     getMarksCount();

          //   }

          // })

          filter_data(1,minFees,maxFees,minMarks,maxMarks);
          getFeesCount(minFees,maxFees);
          getMarksCount(minMarks,maxMarks);





      $(document).on('keyup','#search-btn',function(){
          filter_data(1,minFees,maxFees,minMarks,maxMarks);
        });



      $(document).on('click','.subarea',function(){
          filter_data(1,minFees,maxFees,minMarks,maxMarks);
        });

      $('.common-selector').click(function(){
          filter_data(1,minFees,maxFees,minMarks,maxMarks);
      });
      function uncheckAll() {
    $("input[type='checkbox']:checked").prop("checked", false)
    filter_data();
    }
    $(':button').on('click', uncheckAll)

  });


</script>


</body>

</html>
