<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute;
use App\Address;
class SearchController extends Controller
{
    public function getInstitutes(){

        $institutes= Institute::all();
        return view('searchFilters')->withDetails($institutes);

    }

    public function filter(Institute $institutes )
    {
       /* if(isset($_POST["action"]))
       {
           $institutes=Institute::all();
           return response()->json($institutes);
       }*/

       $institutes=$institutes->newQuery();

       if(isset($_POST["area"]))
       {
          $area_filter = implode("','",$_POST["area"]);
          $institutes->join('addresses','institutes.id','=','addresses.instiute_id')
          ->whereRaw("addresses.subarea in ('".$area_filter."')");
          //$institutes->whereRaw("name in ('".$institute_filter."')"); 
          //$results =Institute::whereIn('name' in ->get();
       }
       if(isset($_POST["sector"]))
       {
           $sector_filter = implode("','",$_POST["sector"]);
           $institutes->whereRaw("sector in ('".$sector_filter."')"); 

       }

       if(isset($_POST["affiliation"]))
       {
           $affiliation_filter = implode("','",$_POST["affiliation"]);
           $institutes->whereRaw("affiliation in ('".$affiliation_filter."')");
       }

      if(isset($_POST["hostel"]))
       {
           $value=$_POST["hostel"];
           $value=(int)$value;
           $institutes->where('hostel',$value);
       }
       if(isset($_POST["transport"]))
       {
           $value=$_POST["transport"];
           $value=(int)$value;
           $institutes->where('transportation',$value);
       }

       if(isset($_POST["fees"]))
       {
           $minRange=10000;
           $maxRange= $_POST["fees"];
           $institutes->join('degrees','institutes.id','=','degrees.institute_id')->whereRaw("degrees.fees in between($minRange,$maxRange)");

       }
      
       return response()->json($institutes->get());
      
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


