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

    public function interCompare()
    {
      return view('interComparison');
    }

    public function compareResult(Request $request){
      $data = $request->all();
      $uni = $data['universityID'];
      $dept = $data['departmentID'];
      $deg = $data['degreeID'];
      $first = null;
      $second = null;
      $third = null;
      $check = 1;

      if($uni[0] != 0){
        if($dept[0]!= 0){
          if($deg[0]!=0){
            $first = DB::table('institutes')
            ->join('departments','departments.institute_id','institutes.id')
            ->join('degrees','degrees.department_id','departments.id')
            ->join('addresses','addresses.institute_id','institutes.id')
            ->where('institutes.id',$uni[0])
            ->where('departments.id',$dept[0])
            ->where('degrees.id',$deg[0])
            ->select('institutes.name','degrees.name as degreeName','departments.name as deptName','degrees.fees','addresses.location','institutes.scholarship','degrees.noOfSeats',
            'institutes.hostel','institutes.transportation','institutes.coEducation','degrees.shiftMorning','degrees.shiftAfternoon'
            ,'institutes.sector','institutes.affiliation','institutes.id as instID','addresses.lat','addresses.lng')
            ->first();
            $check++;
          }
        }
      }
      if($uni[1] != 0){
        if($dept[1]!= 0){
          if($deg[1]!=0){
            $second = DB::table('institutes')
            ->join('departments','departments.institute_id','institutes.id')
            ->join('degrees','degrees.department_id','departments.id')
            ->join('addresses','addresses.institute_id','institutes.id')
            ->where('institutes.id',$uni[1])
            ->where('departments.id',$dept[1])
            ->where('degrees.id',$deg[1])
            ->select('institutes.name','degrees.name as degreeName','departments.name as deptName','degrees.fees','addresses.location','institutes.scholarship','degrees.noOfSeats',
            'institutes.hostel','institutes.transportation','institutes.coEducation','degrees.shiftMorning','degrees.shiftAfternoon'
            ,'institutes.sector','institutes.affiliation','institutes.id as instID','addresses.lat','addresses.lng')
            ->first();
            $check++;
          }
        }
      }
      else{
        return redirect()->route('page.undergraduateCompare')->with('success','Please Select Atleast Two Institutes');
      }
      if($uni[2] != 0){
        if($dept[2]!= 0){
          if($deg[2]!=0){
            $third = DB::table('institutes')
            ->join('departments','departments.institute_id','institutes.id')
            ->join('degrees','degrees.department_id','departments.id')
            ->join('addresses','addresses.institute_id','institutes.id')
            ->where('institutes.id',$uni[2])
            ->where('departments.id',$dept[2])
            ->where('degrees.id',$deg[2])
            ->select('institutes.name','degrees.name as degreeName','departments.name as deptName','degrees.fees','addresses.location','institutes.scholarship','degrees.noOfSeats',
            'institutes.hostel','institutes.transportation','institutes.coEducation','degrees.shiftMorning','degrees.shiftAfternoon'
            ,'institutes.sector','institutes.affiliation','institutes.id as instID','addresses.lat','addresses.lng')
            ->first();
          }
        }
      }
      if($check < 2){
        return redirect()->route('page.undergraduateCompare')->with('success','Please Select Atleast Two Institutes');
      }
      return view('comparisonResult')->with(compact('first','second','third'));
    }

    public function interCompareResult(Request $request){
      $data = $request->all();
      $uni = $data['collegeID'];
      $deg = $data['degreeID'];
      $first = null;
      $second = null;
      $third = null;
      $check = 1;

      if($uni[0] != 0){
          if($deg[0]!=0){
            $first = DB::table('institutes')
            ->join('degrees','degrees.institute_id','institutes.id')
            ->join('addresses','addresses.institute_id','institutes.id')
            ->where('institutes.id',$uni[0])
            ->where('degrees.id',$deg[0])
            ->select('institutes.name','degrees.name as degreeName','degrees.fees','addresses.location','institutes.scholarship','degrees.noOfSeats',
            'institutes.hostel','institutes.transportation','institutes.coEducation','degrees.shiftMorning','degrees.shiftAfternoon'
            ,'institutes.sector','institutes.affiliation','institutes.id as instID','addresses.lat','addresses.lng')
            ->first();
            $check++;
          }
      }
      if($uni[1] != 0){
          if($deg[1]!=0){
            $second = DB::table('institutes')
            ->join('degrees','degrees.institute_id','institutes.id')
            ->join('addresses','addresses.institute_id','institutes.id')
            ->where('institutes.id',$uni[1])
            ->where('degrees.id',$deg[1])
            ->select('institutes.name','degrees.name as degreeName','degrees.fees','addresses.location','institutes.scholarship','degrees.noOfSeats',
            'institutes.hostel','institutes.transportation','institutes.coEducation','degrees.shiftMorning','degrees.shiftAfternoon'
            ,'institutes.sector','institutes.affiliation','institutes.id as instID','addresses.lat','addresses.lng')
            ->first();
            $check++;
          }
      }
      else{
        return redirect()->route('page.interCompare')->with('success','Please Select Atleast Two Institutes');
      }
      if($uni[2] != 0){
          if($deg[2]!=0){
            $third = DB::table('institutes')
            ->join('degrees','degrees.institute_id','institutes.id')
            ->join('addresses','addresses.institute_id','institutes.id')
            ->where('institutes.id',$uni[2])
            ->where('degrees.id',$deg[2])
            ->select('institutes.name','degrees.name as degreeName','degrees.fees','addresses.location','institutes.scholarship','degrees.noOfSeats',
            'institutes.hostel','institutes.transportation','institutes.coEducation','degrees.shiftMorning','degrees.shiftAfternoon'
            ,'institutes.sector','institutes.affiliation','institutes.id as instID','addresses.lat','addresses.lng')
            ->first();
            $check++;
          }
      }
      if($check < 3){
        return redirect()->route('page.interCompare')->with('success','Please Select Atleast Two Institutes');
      }
      return view('interComparisonResult')->with(compact('first','second','third'));
    }

    public function home()
    {
      return view('home');
    }

    public function timer()
    {
      return view('timer');
    }

    public function wishList()
    {
      return view('wishlist');
    }
}
