<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Institute;
use GMaps;

class pageController extends Controller
{
  public function degree(Request $request)
    {
      $result = DB::table('degrees')
      ->join('institutes','institutes.id','degrees.institute_id')
      ->join('addresses','addresses.institute_id','institutes.id')
      ->where('degrees.id',$request->degreeid)
      ->where('institutes.id',$request->instituteid)
      ->select('institutes.name as instituteName','degrees.id as degreeid','institutes.id as instituteid','degrees.name as degreeName','degrees.lastMerit','degrees.noOfSeats'
      ,'degrees.fees','degrees.duration','degrees.creditHours','degrees.shiftMorning','institutes.scholarship'
      ,'degrees.shiftAfternoon','addresses.website','institutes.principal_name','addresses.phone_number')
      ->get();
      $inc = DB::table('degrees')->where('degrees.id',$request->degreeid)->increment('numberOfViews');
      return view('degree')->withDetails($result);
    }
    public function institute(Request $request)
    {
      $degree;
      if (isset($request->degreeid)) {
        $degree = DB::table('degrees')->where('degrees.id',$request->degreeid)->select('degrees.name','degrees.id')->get();
      }
      else {
        $degree = null;
      }
      $result = DB::table('institutes')
      ->join('addresses','addresses.institute_id','institutes.id')
      ->where('institutes.id',$request->instituteID)
      ->select('institutes.name', 'addresses.website','institutes.id',
      'addresses.phone_number','addresses.email','institutes.affiliation','addresses.location','addresses.city',
      'addresses.lat','addresses.lng')
      ->get();
      return view('institute')->with('details',$result)->with('degree',$degree);
    }

    public function compare()
    {
      return view('comparison');
    }

    public function home()
    {
      return view('home');
    }
}
