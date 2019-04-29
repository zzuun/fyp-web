<?php

namespace App\Http\Controllers;
use App\Institute;
use App\Department;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UniversityController extends Controller
{
    public function index(Request $request)
    {
        $result = DB::table('degrees')
      ->join('institutes','institutes.id','degrees.institute_id')
      ->join('departments','degrees.department_id','departments.id')
      ->join('addresses','addresses.institute_id','institutes.id')
      ->where('degrees.id',$request->degreeid)
      ->where('institutes.id',$request->instituteid)
      ->where('departments.id',$request->departmentid)
      ->select('institutes.name as instituteName','degrees.id as degreeid','institutes.id as instituteid','degrees.name as degreeName','departments.id as departmentid','departments.name as departmentName','degrees.lastMerit','degrees.noOfSeats','degrees.numberOfViews'
      ,'degrees.fees','degrees.duration','degrees.creditHours','degrees.shiftMorning','institutes.scholarship'
      ,'degrees.shiftAfternoon','degrees.system','degrees.degreeLevel','addresses.website','institutes.principal_name','addresses.phone_number')
      ->get();
      $inc = DB::table('degrees')->where('degrees.id',$request->degreeid)->increment('numberOfViews');
      return view('undergraduateDegree')->withDetails($result);

    }

    public function getUniversityProfile(Request $request)
    {
        $institute=Institute::find($request->instituteid);
        $departments=Institute::find($request->instituteid)->departments;
        $address=Institute::find($request->instituteid)->address;
        return view('universityProfile')->withInstitute($institute)->withAddress($address)->withDepartments($departments);

    }

    public function getDepartmentProfile(Request $request)
    {
        $department=Department::join('institutes','institutes.id','departments.institute_id')
        ->join('addresses','addresses.institute_id','institutes.id')
        ->where('departments.id',$request->departmentid)
        ->where('institutes.id',$request->instituteid)
        ->select('institutes.id as instituteid','institutes.name as instituteName','departments.id as departmentid','departments.name as departmentName','addresses.website')
        ->get();
        return view('universityDepartment')->withDetails($department);
    }

}
