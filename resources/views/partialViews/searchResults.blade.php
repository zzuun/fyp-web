    <div class="col-12">
        @if(count($results) > 0)
            @foreach($results as $result)
                    <div class="boxstyle2" style="cursor: pointer;">
                        <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="750ms">

                            <!-- Course Content -->
                            <div class="course-content" onclick="location.href='/degree?degreeid='.$result->degreeID.'&instituteid='.$result->instituteID.'">
                                <a href="/degree?degreeid='.$result->degreeID.'&instituteid='.$result->instituteID.'">
                                    <h4>{{$result->degreeName}}</h4>

                                    <div class="meta d-flex align-items-center">
                                        <a href="/institute?instituteID='.$result->instituteID.'">{{$result->name}}</a>
                                        <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                        <a href="/degree?degreeid='.$result->degreeID.'&instituteid='.$result->instituteID.'">{{$result->degreeName}}</a>
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
                                        <a  href="wishlist.html">
                                            <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                        </a>
                                    </div>
                                </div>
                                <div class="course-fee2 h-100">
                                    <a href="index.html">
                                        <i class="fa fa-location-arrow" aria-hidden="true"><abbr title="12 kms away from your location">12kms</abbr></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            
    </div>
    {{$results->links()}}
