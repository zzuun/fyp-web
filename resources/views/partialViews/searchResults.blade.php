<div class="col-12">
        @if(count($results) > 0)
          <p>About {{$results->total()}} results.</p>

        <!-- <div class="col-12">
          <h5>Showing Records:{{count($results)}}</h5>
        </div> -->


            @foreach($results as $result)
                    <div class="boxstyle2" style="cursor: pointer;">
                        <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="750ms">

                            <!-- Course Content -->
                            <div class="course-content" onclick="location.href='/degree?degreeid={{$result->degreeID}}&instituteid={{$result->instituteID}}'">
                              <a href="/institute?instituteID={{$result->instituteID}}">
                                    <h5>{{$result->name}}</h5>

                                    <div class="total-ratings d-flex float-right" align="right">
                                      <div class="ratings-text">
                                        <img src="img/bg-img/t1.png" alt="">
                                      </div>
                                    </div>


                                    <div class="meta d-flex align-items-center">
                                        <a href="/degree?degreeid={{$result->degreeID}}&instituteid={{$result->instituteID}}">{{$result->degreeName}}</a>
                                    </div>
                                    <ul>
                                    <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>{{$result->phoneNumber}}</span>
                                    </ul>


                                    <ul>
                                    <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i>{{$result->city}}</span>
                                    </ul>



                                    <ul>
                                    <span><i class="fa fa-won" aria-hidden="true" style="color: #e3d21b;"></i>{{$result->affiliation}}</span>
                                    </ul>


                                    <ul>
                                    <span><i class="fa fa-users" aria-hidden="true" style="color: #e3d21b;"></i>{{$result->sector}}</span>
                                    </ul>

                                </a>
                            </div>
                            <!-- Seat Rating Fee -->
                            <div class="seat-rating-fee d-flex justify-content-between">
                                <div class="seat-rating h-100 d-flex align-items-center">
                                    <div class="seat">
                                    <a >
                                        <i onclick="myFunction(this);" class="fa fa-thumbs-up" style="font-size:23px;padding-top: 8px;"></i>
                                    </a>
                                    </div>
                                    <div class="rating">
                                        <a  href="#">
                                            <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

    </div>
    {{$results->links()}}
