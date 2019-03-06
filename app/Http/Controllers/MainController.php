<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;
use App\degree;
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
}
