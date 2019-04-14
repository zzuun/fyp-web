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

    public function filter(Request $request,Degree $degrees)
    {

    //    $degrees = $degrees->newQuery();
    //    $degrees->join('institutes','degrees.institute_id','=','institutes.id')
    //    ->join('addresses','institutes.id','=','addresses.institute_id')
    //    ->select('institutes.id as instituteID','degrees.id as degreeID','degrees.name as degreeName','institutes.name','institutes.sector','institutes.affiliation','addresses.city','addresses.phone_number as phoneNumber');

    $degrees = $degrees->newQuery();
    $degrees->join('institutes','degrees.institute_id','=','institutes.id')
    ->select('institutes.id as instituteID','degrees.id as degreeID','degrees.name as degreeName','institutes.name','institutes.sector','institutes.affiliation');

       if(isset($_GET["area"]))
       {
          $area_filter = implode("','",$_GET["area"]);
          $degrees->whereRaw("addresses.subarea in ('".$area_filter."')");
       }

       if(isset($_GET["sector"]))
       {
           $sector_filter = implode("','",$_GET["sector"]);
           $degrees->whereRaw("institutes.sector in ('".$sector_filter."')");

       }

       if(isset($_GET["affiliation"]))
       {
           $affiliation_filter = implode("','",$_GET["affiliation"]);
           $degrees->whereRaw("institutes.affiliation in ('".$affiliation_filter."')");

       }

      if(isset($_GET["hostel"]))
       {
           $value=$_GET["hostel"];
           $value=(int)$value;
           $degrees->where("institutes.hostel",$value);


       }
       if(isset($_GET["transport"]))
       {
           $value=$_GET["transport"];
           $value=(int)$value;
           $degrees->where("institutes.transportation",$value);

       }

       if(isset($_GET["minfees"]) | isset($_GET["maxfees"]))
       {
           $minRange=(int) $_GET["minfees"];
           $maxRange= (int) $_GET['maxfees'];
           $degrees->whereBetween("degrees.fees",[$minRange,$maxRange]);
       }
       if(isset($_GET["minmarks"]) | isset($_GET["maxmarks"]))
       {
           $minRange=(int) $_GET["minmarks"];
           $maxRange= (int) $_GET['maxmarks'];
           $degrees->whereBetween("degrees.lastMerit",[33,$maxRange]);

       }
       $results = $degrees->paginate(2);
       if($request->ajax())
        {
            return view('partialViews.searchResults',compact('results'))->render();
        }

        return view('search',compact('results'));

    // $results=Degree::join('institutes','degrees.institute_id','=','institutes.id')
    // ->select('institutes.id as instituteID','degrees.id as degreeID','degrees.name as degreeName','institutes.name','institutes.sector','institutes.affiliation')
    // ->where('institutes.sector','=','private')->paginate(5);

    }

    public function search(Degree $degrees)
    {
        $degrees=$degrees->newQuery();
        $degrees->join('institutes','degrees.institute_id','=','institutes.id')
        ->select('institutes.id as instituteID','degrees.id as degreeID','degrees.name as degreeName','institutes.name','institutes.sector','institutes.affiliation');

        $results=$degrees->paginate(2);

        return view('search',compact('results'));

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
