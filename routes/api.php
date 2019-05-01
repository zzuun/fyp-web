<?php

use Illuminate\Http\Request;
use App\Institute;
use App\Address;
use App\Town;
use App\Subarea;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//compare
Route::get('/compare','MainController@compare');

//user
Route::post('password/email', 'Auth\ForgotPasswordController@getResetToken');

//register
Route::post('register','MainController@register');
Route::post('login','MainController@login');

//intermediate
Route::get('/inter/colleges','MainController@interColleges');
Route::get('/inter/collegeDegrees','MainController@CollegeDegrees');
Route::get('degreesByViews','MainController@degreesByViews');
Route::get('getPostRequisites','MainController@getPostRequisites');
Route::get('/inter/search','MainController@filterSearch');
Route::get('inter/degree','MainController@getDegree');
Route::get('inter/institute','MainController@getInstitute');
Route::get('/inter/getAffiliations',function(){
  $i=0;
  $j=0;
  $counts = array();
  $names = array();
  $result = Institute::select('affiliation')->where('instituteType','College')->distinct()->get();
  foreach ($result as $r) {
    $count = DB::table('degrees')
    ->join('institutes','institutes.id','degrees.institute_id')
    ->selectRaw("count('degrees.id') as count")
    ->where('degrees.degreeLevel','=','INTER')
    ->where('affiliation',$r->affiliation)
    ->groupby('institutes.affiliation')->get();
    $counts[++$i] = $count[0]->count;
    $names[++$j] = $r->affiliation;
  }
  $merged = collect($names)->zip($counts)->transform(function($values){
    return [
      'name' => $values[0],
      'count' =>$values[1]
    ];
  });
  return Response::json(array('data' => $merged->all()));
});
Route::get('inter/getTown',function(){
  $resultTowns = Town::select('name')->get();
  $i=0;
  $j=0;
  $counts = array();
  $names = array();
    foreach ($resultTowns as $r) {
        $count = DB::table('addresses')
        ->join('towns','towns.id','addresses.town_id')
        ->join('institutes','institutes.id','addresses.institute_id')
        ->join('degrees','degrees.institute_id','institutes.id')
        ->where('instituteType','College')
        ->where('towns.name',$r->name)
        ->selectRaw("count('degrees.id') as count")
        ->get();
        // data_set($counts,'name',$r->name);
        // data_set($counts,'count',$count);
        $counts[++$i] = $count[0]->count  ;
        $names[++$j] = $r->name;
    }
    $merged = collect($names)->zip($counts)->transform(function($values){
      return [
        'name' => $values[0],
        'count' =>$values[1]
      ];
    });
    return Response::json(array('data' => $merged->all()));
});
Route::get('/getSubareas',function(){

  $result = array('subarea' => 'name', 'count'=> 1, 'town', 'town' );
  $towns = $resultTowns = Town::select('name', 'id')->get();
  foreach ($towns as $town) {
      $result[++$k] = $town->name;
    $subs = Subarea::where('town_id',$town->id)->select('name','id')->get();
    foreach ($subs as $sub) {
      $count = DB::table('addresses')->join('subareas','subareas.id','addresses.subarea_id')->where('addresses.subarea_id', $sub->id)->count();
      $result[++$i]=$sub->name;
      $result[++$j] = $count;

    }
  }

  return Response::json(array('data' => $result));
});
Route::get('/inter/getSectors',function(){
  $i=0;
  $j=0;
  $counts = array();
  $names = array();
  $result = Institute::select('sector')->distinct()->get();
  foreach ($result as $r) {
    $count = DB::table('degrees')
    ->join('institutes','institutes.id','degrees.institute_id')
    ->selectRaw("count('degrees.id') as count")
    ->where('degrees.degreeLevel','=','INTER')
    ->where('institutes.sector',$r->sector)
    ->get();
    $counts[++$i] = $count[0]->count;
    $names[++$j] = $r->sector;
  }
  $merged = collect($names)->zip($counts)->transform(function($values){
    return [
      'name' => $values[0],
      'count' =>$values[1]
    ];
  });
  return Response::json(array('data' => $merged->all()));
});
Route::get('/inter/getGroups',function(){
    $count = DB::table('degrees')
    ->join('degreeGroups','degreeGroups.id','=','degrees.degree_groups_id')
    ->selectRaw("degreeGroups.name as groupname,count('degrees.id') as count")
    ->where('degrees.degreeLevel','=','INTER')
    ->groupby('degreeGroups.name')->get();
  return Response::json(array('data' => $count));
});

//undergraduate
Route::get('/undergraduate/departmentDegrees','MainController@departmentDegrees');
Route::get('/undergraduate/departments','MainController@UniversityDepartments');
Route::get('/undergraduate/search','MainController@undergraduatefilterSearch');
Route::get('/undergraduate/universities','MainController@undergraduateUniversities');
Route::get('/undergraduate/degree','MainController@getUnderDegree');
Route::get('/undergraduate/department','MainController@getDepartment');
Route::get('/undergraduate/institute','MainController@getUnderInstitute');
Route::get('/instituteSearch','MainController@getInstitueByName');
Route::get('/undergraduate/getAffiliations',function(){
  $i=0;
  $j=0;
  $counts = array();
  $names = array();
  $result = Institute::select('affiliation')->where('instituteType','University')->distinct()->get();
  foreach ($result as $r) {
    $count = DB::table('degrees')
    ->join('institutes','institutes.id','degrees.institute_id')
    ->selectRaw("count('degrees.id') as count")
    ->where('degrees.degreeLevel','=','BS')
    ->where('affiliation',$r->affiliation)
    ->groupby('institutes.affiliation')->get();
    $counts[++$i] = $count[0]->count;
    $names[++$j] = $r->affiliation;
  }
  $merged = collect($names)->zip($counts)->transform(function($values){
    return [
      'name' => $values[0],
      'count' =>$values[1]
    ];
  });
  return Response::json(array('data' => $merged->all()));
});
Route::get('undergraduate/getTown',function(){
  $resultTowns = Town::select('name')->get();
  $i=0;
  $j=0;
  $counts = array();
  $names = array();
    foreach ($resultTowns as $r) {
        $count = DB::table('degrees')
        ->join('departments','degrees.department_id','departments.id')
        ->join('institutes','institutes.id','departments.institute_id')
        ->join('addresses','addresses.institute_id','institutes.id')
        ->join('towns','addresses.town_id','towns.id')
        ->selectRaw("count('degrees.id') as count")
        ->where('degrees.degreeLevel','BS')
        ->where('towns.name',$r->name)
        ->get();
        // data_set($counts,'name',$r->name);
        // data_set($counts,'count',$count);
        $counts[++$i] = $count[0]->count;
        $names[++$j] = $r->name;
    }
    $merged = collect($names)->zip($counts)->transform(function($values){
      return [
        'name' => $values[0],
        'count' =>$values[1]
      ];
    });
    return Response::json(array('data' => $merged->all()));
});
Route::get('/undergraduate/getSectors',function(){
  $i=0;
  $j=0;
  $counts = array();
  $names = array();
  $result = Institute::select('sector')->distinct()->get();
  foreach ($result as $r) {
    $count = DB::table('degrees')
    ->join('departments','degrees.department_id','departments.id')
    ->join('institutes','institutes.id','departments.institute_id')
    ->selectRaw("count('degrees.id') as count")
    ->where('degrees.degreeLevel','=','BS')
    ->where('institutes.sector',$r->sector)
    ->get();
    $counts[++$i] = $count[0]->count;
    $names[++$j] = $r->sector;
  }
  $merged = collect($names)->zip($counts)->transform(function($values){
    return [
      'name' => $values[0],
      'count' =>$values[1]
    ];
  });
  return Response::json(array('data' => $merged->all()));
});
Route::get('/undergraduate/getGroups',function(){
    $count = DB::table('degrees')
    ->join('degreeGroups','degreeGroups.id','=','degrees.degree_groups_id')
    ->selectRaw("degreeGroups.name as groupname,count('degrees.id') as count")
    ->where('degrees.degreeLevel','=','BS')
    ->groupby('degreeGroups.name')->get();
  return Response::json(array('data' => $count));
});
