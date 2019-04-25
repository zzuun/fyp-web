<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Response;
use App\User;
use Hash;
use Illuminate\Support\Facades\DB;
use App\Degree;
use Validator;
use App\Institute;
use App\Http\Resources\Institute as instituteResource;
class MainController extends Controller
{

  // public function __construct()
  // {
  //     $this->middleware('auth:api');
  // }
    public function register(Request $request)
    {
      $validator = Validator::make($request->all(), [
           'name' => 'required',
           'email' => 'required|email',
           'password' => 'required',
           'c_password' => 'required|same:password',
       ]);
       if ($validator->fails()) {
            return response()->json(['success'=>false,'message'=>$validator->errors()], 200);
        }
        $record = User::where('email',$request->get('email'))->first();
        if(isset($record)){
          return response()->json(['success'=>false,'message'=>'This Email is Taken'], 200);
        }
        else {
          $input = $request->all();
          $input['password'] = bcrypt($input['password']);
          $user = User::create([
              'name' => $input['name'],
              'email' => $input['email'],
              'password' => $input['password']
              ]);
          $token = Hash::make(str_random(80));
          $user->api_token = $token;
          $user->save();
          return response()->json(['success'=>true,'message'=>'User Register Successfull','token'=>$token], 200);
        }
      }

      public function login(Request $request)
      {
          $record = User::where('email',$request->get('email'))->first();
          if(isset($record)){
          if(Hash::check($request->get('password'), $record->password)){
            $token = Hash::make(str_random(80));
            $record->api_token = $token;
            $record->save();
            return response()->json(['success'=>true, 'message'=>'Successfully','token'=>$token,'name'=>$record->name],200);
          }
          else {
            return response()->json(['success'=>false, 'message'=>'Wrong Password'],200);
          }
        }
        else {
          return response()->json(['success'=>false, 'message'=>'No Record Found Against provided Email'],200);
        }
      }

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
      $more =  DB::table('degrees')
      ->join('institutes','institutes.id','degrees.institute_id')
      ->where('institutes.id',$result[0]->instituteID)
      ->select('degrees.name as degreeName','institutes.name as instituteName','degrees.id as degreeid','institutes.id as instituteid')
      ->take(3)
      ->get();
      return Response::json([array('data' => $result),array('related'=>$more)]);
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
      $more = DB::table('institutes')
      ->join('degrees','degrees.institute_id','institutes.id')
      ->join('addresses','addresses.institute_id','institutes.id')
      ->where('institutes.id',$instituteId)
      ->select('degrees.name as degreeName','degrees.id as degreeID')
      ->get();
      return Response::json([array('data' => $result),array('degrees'=>$more)]);
    }
    public function getUnderInstitute(Request $request)
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

      $more = DB::table('departments')
      ->join('institutes','institutes.id','departments.institute_id')
      ->join('degrees','degrees.department_id','departments.id')
      ->join('degreeGroups','degrees.degree_groups_id','degreeGroups.id')
      ->where('institutes.id',$instituteId)
      ->select('departments.name as deptName','departments.id','degreeGroups.name as degreeType')
      ->distinct()
      ->get();
      return Response::json([array('data' => $result),array('departments'=>$more)]);
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
      $degree->join('institutes','degrees.institute_id','=','institutes.id')
       ->join('addresses','institutes.id','=','addresses.institute_id')
       ->join('towns','towns.id','addresses.town_id')
       ->join('subareas','subareas.id','addresses.subarea_id')
       ->join('degreeGroups','degrees.degree_groups_id','degreeGroups.id')
       ->where('degreeLevel','INTER')
       ->where('institutes.instituteType', 'College')
      ->select('degrees.id as degreeID','degrees.name as degreeName','degrees.numberOfViews',
      'institutes.name as instituteName','addresses.location','addresses.city','addresses.lat','addresses.lng','institutes.id as instituteID')
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
         $degree->wherein('degreeGroups.name',$_GET["group"]);
      }
      if ($request->input('transportation')) {
        $degree->where("institutes.transportation",(int)$request->input('transportation'));
      }
      if ($request->input('shiftMorning')) {
        $degree->where("degrees.shiftMorning",(int)$request->input('shiftMorning'));
      }
      if ($request->input('shiftAfternoon')) {
        $degree->where("degrees.shiftAfternoon",(int)$request->input('shiftAfternoon'));
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
      if ($request->input('town')) {
        $area_filter = implode("','",$request->input('town'));
        $degree->whereRaw("towns.name in ('".$area_filter."')");
      }
      if($request->get('subarea'))
      {
         $area_filter = implode("','",$request->get('subarea'));
         $degree->whereRaw("subareas.name in ('".$area_filter."')");
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
      $result = $degree->paginate(10);
      if($result->count()>0){
        return Response::json(['success'=>true,array('data' => $result)]);
      }
      else{
          return response()->json(['success'=>false, 'message'=>'No Record Found Against provided Filters'],200);
      }
    }
    public function undergraduatefilterSearch(Request $request)
    {
      $degree = DB::table('degrees');
      $degree->join('institutes','degrees.institute_id','=','institutes.id')
       ->join('addresses','institutes.id','=','addresses.institute_id')
       ->join('towns','towns.id','addresses.town_id')
       ->join('subareas','subareas.id','addresses.subarea_id')
       ->join('degreeGroups','degrees.degree_groups_id','degreeGroups.id')
       ->where('institutes.instituteType', 'University')
      ->select('degrees.id as degreeID','degrees.name as degreeName','degrees.numberOfViews',
      'institutes.name as instituteName','addresses.location','addresses.city','addresses.lat','addresses.lng','institutes.id as instituteID')
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
         $degree->wherein('degreeGroups.name',$_GET["group"]);
      }
      if ($request->input('transportation')) {
        $degree->where("institutes.transportation",(int)$request->input('transportation'));
      }
      if ($request->input('shiftMorning')) {
        $degree->where("degrees.shiftMorning",(int)$request->input('shiftMorning'));
      }
      if ($request->input('shiftAfternoon')) {
        $degree->where("degrees.shiftAfternoon",(int)$request->input('shiftAfternoon'));
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
      if ($request->input('town')) {
        $area_filter = implode("','",$request->input('town'));
        $degree->whereRaw("towns.name in ('".$area_filter."')");
      }
      if($request->get('subarea'))
      {
         $area_filter = implode("','",$request->get('subarea'));
         $degree->whereRaw("subareas.name in ('".$area_filter."')");
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
      $result = $degree->paginate(10);
      if($result->count()>0){
        return Response::json(['success'=>true,array('data' => $result)]);
      }
      else{
          return response()->json(['success'=>false, 'message'=>'No Record Found Against provided Filters'],200);
      }
    }
    public function compare(Request $request)
    {
      $first = DB::table('degrees')
      ->join('institutes','institutes.id','degrees.institute_id')
      ->where('degrees.id',$request->input('first'))
      ->join('addresses','addresses.institute_id','institutes.id')
      ->select('institutes.name as instituteName','institutes.hostel','degrees.name as degreeName',
      'degrees.noOfSeats','degrees.lastMerit', 'institutes.transportation',
      'degrees.fees','degrees.shiftMorning','degrees.shiftAfternoon','addresses.location')
      ->get();
      $second = DB::table('degrees')
      ->join('institutes','institutes.id','degrees.institute_id')
      ->where('degrees.id',$request->input('second'))
      ->join('addresses','addresses.institute_id','institutes.id')
      ->select('institutes.name as instituteName','institutes.hostel', 'degrees.name as degreeName',
      'degrees.noOfSeats','degrees.lastMerit', 'institutes.transportation',
      'degrees.fees','degrees.shiftMorning','degrees.shiftAfternoon','addresses.location')
      ->get();
      return Response::json([array('first' => $first),array('second'=>$second)]);
    }

    public function getUnderDegree(Request $request)
    {
      $degreeId = $request->input('degreeID');
      $result = DB::table('degrees')
      ->join('institutes','institutes.id','degrees.institute_id')
      ->join('degreeGroups','degreeGroups.id','degrees.degree_groups_id')
      ->where('degrees.id',$degreeId)
      ->where('institutes.instituteType','University')
      ->join('addresses','addresses.institute_id','institutes.id')
      ->select('degrees.name as degreeName','degrees.duration','degrees.system','institutes.name as instituteName',
      'institutes.id as instituteID','degrees.noOfSeats','degrees.creditHours','degrees.lastMerit',
      'degrees.fees','degrees.shiftMorning','degrees.shiftAfternoon','addresses.location','degreeGroups.id as type')
      ->get();
      $inc = DB::table('degrees')->where('degrees.id',$degreeId)->increment('numberOfViews');

      $more =  DB::table('degrees')
      ->join('institutes','institutes.id','degrees.institute_id')
      ->join('degreeGroups','degreeGroups.id','degrees.degree_groups_id')
      ->where('degreeGroups.id',$result[0]->type)
      ->where('institutes.id','!=',$result[0]->instituteID)
      ->select('degrees.name as degreeName','institutes.name as instituteName',
      'degrees.id as degreeid','institutes.id as instituteid')
      ->take(3)
      ->get();
      return Response::json([array('data' => $result),array('related'=>$more)]);
    }
}
