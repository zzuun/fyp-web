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
      $result = App\Institute::all();
      return instituteResource::collection($result);
      // orderby('numberOfViews', 'desc')->get()
    }
}
