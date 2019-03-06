<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute;
use App\Address;
use App\Degree;
class SearchController extends Controller
{
    public function getInstitutes(){

        $institutes= Institute::all();
        return view('searchFilters')->withDetails($institutes);

    }

    public function filter(Degree $degrees )
    {

       $degrees=$degrees->newQuery();
       $degrees->join('institutes','degrees.institute_id','=','institutes.id')
       ->join('addresses','institutes.id','=','addresses.instiute_id')
       ->select('degrees.name as degreeName','institutes.name','institutes.sector','institutes.affiliation','addresses.city');

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
           $degrees->whereBetween("degrees.merit",[$minRange,$maxRange]);

       } 
       
       $results = $degrees->get();
    
       $htmlOutput='';  
       if($results->count()>0)
       {
           foreach($results as $result)
           {

                $htmlOutput.=
                '<div class="col-12">
                    <div class="boxstyle2" onclick="" style="cursor: pointer;">
                        <div class="single-popular-course mb-50 wow fadeInUp" data-wow-delay="750ms">

                            <!-- Course Content -->
                            <div class="course-content">
                                <a href="#">
                                    <h4>'.$result->degreeName.'</h4>

                                    <div class="meta d-flex align-items-center">
                                        <a href="nust.html">'.$result->name.'</a>
                                        <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                        <a href="nust degree.html">CS</a>
                                    </div>
                                    <ul>
                                    <span><i class="fa fa-phone"  aria-hidden="true" style="color: #e3d21b;"></i>  052-4422365</span>
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
                                        <a onclick="">
                                            <i aria-hidden="true" ></i> Add To Wishlist <i class="fa fa-heart-o" aria-hidden="true"></i>
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
                </div>';
           }
        }
        else{

            $htmlOutput.="<h1>No Instiututes Found</h1>";
        }

        return ($htmlOutput);

    }
       
     
    

    public function getCities(){

        if(isset($_GET["city"]))
        {

            $cityName=$_GET["city"];
            /*$lahoreAreas=['islampura','johar town','township','mughalpura'];
            $karachiAreas=['clifton','sadar'];
            $output='';
            if($cityName == 'lahore')
            {
                foreach($lahoreAreas as $area)
                {
                   $output.='<label  style="word-wrap:break-word">'.'<input id="area"  type="checkbox" value='.$area.' />'.$area.'</label></br>';

                }

            }
            if($cityName == 'karachi')
            {
                foreach($karachiAreas as $area)
                {
                   $output.='<label  style="word-wrap:break-word">'.'<input id="area"  type="checkbox" value='.$area.' />'.$area.'</label></br>';

                }

            }*/

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


