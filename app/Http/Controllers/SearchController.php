<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute;
use App\Address;
use App\Degree;
class SearchController extends Controller
{
    public function filter(Degree $degrees )
    {

       $degrees=$degrees->newQuery();
       $degrees->join('institutes','degrees.institute_id','=','institutes.id')
       ->join('addresses','institutes.id','=','addresses.institute_id')
       ->select('institutes.id as instituteID','degrees.id as degreeID','degrees.name as degreeName',
       'institutes.name','institutes.sector','institutes.affiliation','addresses.city','addresses.phone_number as phoneNumber')->orderby('numberOfViews','desc');
       if (isset($_POST["search"])) {
         $degrees->where('degrees.name','LIKE','%'.$_POST["search"].'%');
       }
       if(isset($_POST["area"]))
       {
          $area_filter = implode("','",$_POST["area"]);
          $degrees->whereRaw("addresses.subarea in ('".$area_filter."')");
       }

       if(isset($_POST["sector"]))
       {
           $sector_filter = implode("','",$_POST["sector"]);
           $degrees->whereRaw("institutes.sector in ('".$sector_filter."')");

       }

       if(isset($_POST["affiliation"]))
       {
           $affiliation_filter = implode("','",$_POST["affiliation"]);
           $degrees->whereRaw("institutes.affiliation in ('".$affiliation_filter."')");

       }

       if(isset($_POST["group"]))
       {
         $degrees->where('degrees.name', 'like',$_POST["group"][0].'%');
          for ($i=1; $i < sizeof($_POST["group"]) ; $i++) {
            $degrees->orwhere('degrees.name', 'like',$_POST["group"][$i].'%');
          }
       }

      if(isset($_POST["hostel"]))
       {
           $value=$_POST["hostel"];
           $value=(int)$value;
           $degrees->where("institutes.hostel",$value);
       }

       if(isset($_POST["transport"]))
       {
           $value=$_POST["transport"];
           $value=(int)$value;
           $degrees->where("institutes.transportation",$value);
       }

       if(isset($_POST["coEducation"]))
       {
           $value=$_POST["coEducation"];
           $value=(int)$value;
           $degrees->where("institutes.coEducation",$value);
       }

       if(isset($_POST["minfees"]) | isset($_POST["maxfees"]))
       {
           $minRange=(int) $_POST["minfees"];
           $maxRange= (int) $_POST['maxfees'];
           $degrees->whereBetween("degrees.fees",[$minRange,$maxRange]);
       }
       if(isset($_POST["minmarks"]) | isset($_POST["maxmarks"]))
       {
           $minRange=(int) $_POST["minmarks"];
           $maxRange= (int) $_POST['maxmarks'];
           $degrees->whereBetween("degrees.lastMerit",[0,$maxRange]);

       }

       $results = $degrees->get();

       $htmlOutput='';
       if($results->count()>0)
       {
           foreach($results as $result)
           {
                $htmlOutput.=
                '<div class="col-12">
                    <div class="boxstyle2" style="cursor: pointer;">
                        <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="750ms" >

                            <!-- Course Content -->
                            <div class="course-content">
                                <a href="/degree?degreeid='.$result->degreeID.'&instituteid='.$result->instituteID.'">
                                    <h4>'.$result->degreeName.'</h4>

                              <div class="total-ratings d-flex float-right" align="right">
                                <div class="ratings-text">
                                  <img src="img/bg-img/t1.png" alt="">
                                </div>
                              </div>

                                    <div class="meta d-flex align-items-center">
                                        <a href="/institute?instituteID='.$result->instituteID.'"">'.$result->name.'</a>
                                    </div>
                                    <ul>
                                    <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>'.$result->phoneNumber.'</span>
                                    </ul>


                                    <ul>
                                    <span><i class="fa fa-location-arrow" aria-hidden="true" style="color: #e3d21b;"></i>'.$result->city.'</span>
                                    </ul>



                                    <ul>
                                    <span><i class="fa fa-won" aria-hidden="true" style="color: #e3d21b;"></i>'.$result->affiliation.'</span>
                                    </ul>


                                    <ul>
                                    <span><i class="fa fa-users" aria-hidden="true" style="color: #e3d21b;"></i>'.$result->sector.'</span>
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
                            </div>
                        </div>
                    </div>
                </div>';
           }
         }
        else{

            // $htmlOutput.="<h1>No Instiututes Found</h1>";
            $htmlOutput.='<img src="img/bg-img/noresult.png" alt="No Institute Found">';
        }
     //    if ($results->hasMorePages()) {
     //      $htmlOutput.=
     //      '<div class="pagination-center">'.
     //         $results->links()
     //      .'</div>';
     // }
        return ($htmlOutput);

    }




    public function getCities(){

        if(isset($_GET["city"]))
        {
            $cityName=$_GET["city"];
            $areas = Address::where('city',$cityName)->pluck('subarea');
            $output='';

            foreach($areas as $area)
            {
                $output.='<label  style="word-wrap:break-word">'.'<input id="area"  type="checkbox" value='.$area.' />'.$area.'</label></br>';

            }

            return ($output);
        }
    }
}
