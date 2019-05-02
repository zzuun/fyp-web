<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute;
use App\Address;
use App\Degree;
class SearchController extends Controller
{
    public function filterUndergraduateDegrees(Request $request, Degree $degrees )
    {

       $degrees=$degrees->newQuery();
       $degrees->join('departments','degrees.department_id','=','departments.id')
       ->join('institutes','departments.institute_id','=','institutes.id')
       ->join('addresses','institutes.id','=','addresses.institute_id')
       ->join('towns','towns.id','addresses.town_id')
       ->join('subareas','subareas.id','addresses.subarea_id')
       ->join('degreeGroups','degrees.degree_groups_id','degreeGroups.id')
       ->where('degrees.degreeLevel','=','BS')
       ->select('institutes.id as instituteid','institutes.logo_url','degrees.id as degreeid','institutes.logo_url','degrees.name as degreeName','institutes.name as instituteName','institutes.sector','institutes.affiliation','departments.name as departmentName','departments.id as departmentid','addresses.city','addresses.phone_number as phoneNumber','addresses.lat','addresses.lng');
       if (isset($_GET["search"])) {
         $degrees->where('institutes.name','LIKE','%'.$_GET["search"].'%');
       }
       if(isset($_GET["town"]))
       {
         $arr = $_GET["town"];
          $area_filter = implode("','",$_GET["town"]);
          $degrees->whereRaw("towns.name in ('".$area_filter."')");
       }

       if(isset($_GET["subarea"]))
       {
          $area_filter = implode("','",$_GET["subarea"]);
          $degrees->whereRaw("subareas.name in ('".$area_filter."')");
       }

       if(isset($_GET["sector"]))
       {
           $sector_filter = implode("','",$_GET["sector"]);
           $degrees->whereRaw("institutes.sector in ('".$sector_filter."')");

       }

       if(isset($_GET["affiliation"]))
       {
           $degrees->wherein('institutes.affiliation',$_GET["affiliation"]);
       }

       if(isset($_GET["group"]))
       {
         $degrees->wherein('degreeGroups.name',$_GET["group"]);
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

       if(isset($_GET["coEducation"]))
       {
           $value=$_GET["coEducation"];
           $value=(int)$value;
           $degrees->where("institutes.coEducation",$value);
       }

       if(isset($_GET["shiftMorning"]))
       {
           $value=$_GET["shiftMorning"];
           $value=(int)$value;
           $degrees->where("degrees.shiftMorning",$value);
       }

       if(isset($_GET["shiftAfternoon"]))
       {
           $value=$_GET["shiftAfternoon"];
           $value=(int)$value;
           $degrees->where("degrees.shiftAfternoon",$value);
       }

       if(isset($_GET["scholarship"]))
       {
           $value=$_GET["scholarship"];
           $value=(int)$value;
           $degrees->where("institutes.scholarship",$value);
       }

       if(isset($_GET["minfees"]) || isset($_GET["maxfees"]))
       {
           $minRange= $_GET['minfees'];
           $maxRange= $_GET['maxfees'];
           $degrees->whereBetween("degrees.fees",[$minRange,$maxRange]);
       }
       // if(isset($_GET["maxmarks"]) || isset($_GET["minmarks"]))
       // {
       //     $maxRange=  $_GET['maxmarks'];
       //     $minRange=  $_GET['minmarks'];
       //     $degrees->whereBetween("degrees.lastMerit",[$minRange,$maxRange]);
       //
       // }

       $results = $degrees->paginate(5);

       if ($request->ajax()) {
         return view('partialViews.resultsUndergraduate',compact('results'))->render();
       }

       return view('searchUndergraduate',compact('results'));
    }

    public function filterIntermediateDegrees(Request $request, Degree $degrees )
    {
       $degrees=$degrees->newQuery();
       $degrees->join('institutes','degrees.institute_id','=','institutes.id')
       ->join('addresses','institutes.id','=','addresses.institute_id')
       ->join('towns','towns.id','addresses.town_id')
       ->join('subareas','subareas.id','addresses.subarea_id')
       ->join('degreeGroups','degrees.degree_groups_id','degreeGroups.id')
       ->where('degrees.degreeLevel','=','INTER')
       ->select('institutes.id as instituteID','degrees.id as degreeID','degrees.name as degreeName',
       'institutes.name','institutes.sector','institutes.logo_url','institutes.affiliation','addresses.city','addresses.phone_number as phoneNumber','addresses.lat','addresses.lng');
       if (isset($_GET["search"])) {
         $degrees->Where('institutes.name','LIKE','%'.$_GET["search"].'%');
       }
       if(isset($_GET["town"]))
       {
          $area_filter = implode("','",$_GET["town"]);
          $degrees->whereRaw("towns.name in ('".$area_filter."')");
       }

       if(isset($_GET["subarea"]))
       {
          $area_filter = implode("','",$_GET["subarea"]);
          $degrees->whereRaw("subareas.name in ('".$area_filter."')");
       }

       if(isset($_GET["sector"]))
       {
           $sector_filter = implode("','",$_GET["sector"]);
           $degrees->whereRaw("institutes.sector in ('".$sector_filter."')");

       }

       if(isset($_GET["affiliation"]))
       {
           $degrees->wherein('institutes.affiliation',$_GET["affiliation"]);
       }

       if(isset($_GET["group"]))
       {
         $degrees->wherein('degreeGroups.name',$_GET["group"]);
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

       if(isset($_GET["coEducation"]))
       {
           $value=$_GET["coEducation"];
           $value=(int)$value;
           $degrees->where("institutes.coEducation",$value);
       }

       if(isset($_GET["shiftMorning"]))
       {
           $value=$_GET["shiftMorning"];
           $value=(int)$value;
           $degrees->where("degrees.shiftMorning",$value);
       }

       if(isset($_GET["shiftAfternoon"]))
       {
           $value=$_GET["shiftAfternoon"];
           $value=(int)$value;
           $degrees->where("degrees.shiftAfternoon",$value);
       }

       if(isset($_GET["scholarship"]))
       {
           $value=$_GET["scholarship"];
           $value=(int)$value;
           $degrees->where("institutes.scholarship",$value);
       }

       if(isset($_GET["minfees"]) || isset($_GET["maxfees"]))
       {
           $minRange= $_GET['minfees'];
           $maxRange= $_GET['maxfees'];
           $degrees->whereBetween("degrees.fees",[$minRange,$maxRange]);
       }
       if(isset($_GET["maxmarks"]) || isset($_GET["minmarks"]))
       {
           $maxRange=  $_GET['maxmarks'];
           $minRange=  $_GET['minmarks'];
           $degrees->whereBetween("degrees.lastMerit",[$minRange,$maxRange]);

       }

       $results = $degrees->paginate(5);

       if ($request->ajax()) {
         return view('partialViews.resultsIntermediate',compact('results'))->render();
       }

       return view('searchIntermediate',compact('results'));


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
