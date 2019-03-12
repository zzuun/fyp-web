<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Response;
use Illuminate\Support\Facades\DB;
use App\Degree;
use App\Institute;
use App\Http\Resources\Institute as instituteResource;
class MainController extends Controller
{
    public function getPostRequisites(Request $request)
    {
      $query = $request->get('degree');
      $result = \DB::table('degrees')->join
      ('post_requisites','degrees.id','post_requisites.degree_id')
      ->where('degrees.name',$query)
      ->join('engineering_groups','engineering_groups.id','engineering_groups_id')
      ->pluck('engineering_groups.degreeName','engineering_groups.id');
      return  response()->json($result);
    }
    public function degreesByViews()
    {
      $result = DB::table('degrees')
      ->join('institutes','degrees.institute_id','institutes.id')
      ->join('addresses','addresses.institute_id','institutes.id')
      ->select('degrees.name','degrees.numberOfViews', 'institutes.name as InstituteName','addresses.city','degrees.id')
      ->orderby('numberOfViews','desc')
      ->get();
      return  response()->json($result);
      // $result = App\Institute::all();
      // return instituteResource::collection($result);
      // orderby('numberOfViews', 'desc')->get()
    }
    public function getDegree(Request $request)
    {
      $degreeId = $request->input('degreeID');
      $result = DB::table('degrees')
      ->join('institutes','institutes.id','degrees.institute_id')
      ->where('degrees.id',$degreeId)
      ->join('addresses','addresses.institute_id','institutes.id')
      ->select('degrees.name as degreeName','degrees.duration','degrees.system','institutes.name as instituteName',
      'institutes.id as instituteID','degrees.noOfSeats','degrees.creditHours','degrees.lastMerit',
      'degrees.fees','degrees.shiftMorning','degrees.shiftAfternoon','addresses.location')
      ->get();
      $inc = DB::table('degrees')->where('degrees.id',$degreeId)->increment('numberOfViews');
      return Response::json(array('data' => $result));
    }
    public function getInstitute(Request $request)
    {
      $instituteId = $request->input('instituteID');
      $result = DB::table('institutes')
      ->join('addresses','addresses.institute_id','institutes.id')
      ->where('institutes.id',$instituteId)
      ->select('institutes.name as instituteName','institutes.coEducation','addresses.phone_number','addresses.email',
      'addresses.website','institutes.principal_name','institutes.sector','institutes.affiliation','institutes.hostel',
      'institutes.transportation','institutes.scholarship','addresses.lat','addresses.lng',
      'addresses.location')
      ->get();
      return Response::json(array('data' => $result));
    }
    public function getInstitueByName(Request $request)
    {
      $key = $request->input('keyword');
      $result = DB::table('institutes')
      ->where('institutes.name','LIKE','%'.$key.'%')
      ->select('institutes.id','institutes.name as InstituteName')
      ->get();
      return  response()->json($result);
    }
    public function filterSearch(Request $request)
    {
      $degree = DB::table('degrees');
      $degree->join('institutes','institutes.id','degrees.institute_id')
      ->join('addresses','addresses.institute_id','institutes.id')
      ->select('degrees.id as degreeID','degrees.name as degreeName','degrees.numberOfViews',
      'institutes.name as instituteName','addresses.location','addresses.city','addresses.subarea','institutes.id as intituteID')
      ->orderby('numberOfViews','desc');
      if ($request->input('key')) {
        $degree->where('institutes.name','LIKE','%'.$request->input('key').'%');
      }
      if ($request->input('hostel')) {
        $degree->where("institutes.hostel",(int)$request->input('hostel'));
      }
      if ($request->input('coEducation')) {
        $degree->where("institutes.coEducation",(int)$request->input('coEducation'));
      }
      if($request->input('group'))
      {
         $degree->where('degrees.name', 'like',$request->input('group')[0].'%');
         for ($i=1; $i < sizeof($request->input('group')) ; $i++) {
           $degree->orwhere('degrees.name', 'like',$request->input('group')[$i].'%');
         }
      }
      if ($request->input('transportation')) {
        $degree->where("institutes.transportation",(int)$request->input('transportation'));
      }
      if ($request->input('scholarship')) {
        $degree->where("institutes.scholarship",(int)$request->input('scholarship'));
      }
      if ($request->input('sector')) {
        $sector_filter = implode("','",$request->input('sector'));
        $degree->whereRaw("institutes.sector in ('".$sector_filter."')");
      }
      if ($request->input('affiliation')) {
        $affiliation_filter = implode("','",$request->input('affiliation'));
        $degree->whereRaw("institutes.affiliation in ('".$affiliation_filter."')");
      }
      if ($request->input('area')) {
        $area_filter = implode("','",$request->input('area'));
        $degree->whereRaw("addresses.subarea in ('".$area_filter."')");
      }
      if ($request->input('maxMarks')) {
          $maxMarks = (int) $request->input('maxMarks');
          $degree->whereBetween("degrees.lastMerit",[33,$maxMarks]);
      }
      if ($request->input('maxFees') | $request->input('minFees')) {
          $maxfees = (int) $request->input('maxFees');
          $minfees = (int) $request->input('minFees');
          $degree->whereBetween("degrees.fees",[$minfees,$maxfees]);
      }

      return Response::json(array('data' => $degree->get()));
      // return  response()->json($degree->orderby('numberOfViews','desc')->get());
    }
}
