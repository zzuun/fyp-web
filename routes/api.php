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

//register
Route::post('register','MainController@register');
Route::post('login','MainController@login');

//intermediate
Route::get('/inter/colleges','MainController@interColleges');
Route::get('/inter/collegeDegrees','MainController@CollegeDegrees');
Route::get('degreesByViews','MainController@degreesByViews');
Route::get('getPostRequisites','MainController@getPostRequisites');
Route::get('/inter/search','MainController@filterSearch');
Route::get('/inter/compare','MainController@compare');
Route::get('inter/degree','MainController@getDegree');
Route::get('inter/institute','MainController@getInstitute');
Route::get('/inter/getAffiliations',function(){
  $i=0;
  $j=0;
  $counts = array();
  $names = array();
  $result = Institute::select('affiliation')->where('instituteType','College')->distinct()->get();
  foreach ($result as $r) {
    $count = Institute::where('affiliation',$r->affiliation)->where('instituteType','College')->count();
    $counts[++$i] = $count;
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
        ->where('instituteType','College')
        ->where('towns.name',$r->name)
        ->count();
        // data_set($counts,'name',$r->name);
        // data_set($counts,'count',$count);
        $counts[++$i] = $count;
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
    $count = App\Institute::where('sector',$r->sector)->where('instituteType', 'College')->count();
    $counts[++$i] = $count;
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
  $i=0;
  $j=0;
  $counts = array();
  $names = array();
  $result = App\degreeGroups::wherein('name',['FSC Pre Engineering','FSC Pre Medical','ICS','FA','iCOM'])->select('name')->get();
  foreach ($result as $r) {
    $count = DB::table('degreeGroups')->join('degrees','degreeGroups.id','degrees.degree_groups_id')->where('degreeGroups.name',$r->name)->count();
    $counts[++$i] = $count;
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

//undergraduate
Route::get('/undergraduate/departmentDegrees','MainController@departmentDegrees');
Route::get('/undergraduate/departments','MainController@UniversityDepartments');
Route::get('/undergraduate/search','MainController@undergraduatefilterSearch');
Route::get('/undergraduate/universities','MainController@undergraduateUniversities');
Route::get('/undergraduate/degree','MainController@getUnderDegree');
Route::get('/undergraduate/department','MainController@getDepartment');
Route::get('/undergraduate/compare','MainController@Undercompare');
Route::get('/undergraduate/institute','MainController@getUnderInstitute');
Route::get('/instituteSearch','MainController@getInstitueByName');
Route::get('/undergraduate/getAffiliations',function(){
  $i=0;
  $j=0;
  $counts = array();
  $names = array();
  $result = Institute::select('affiliation')->where('instituteType','University')->distinct()->get();
  foreach ($result as $r) {
    $count = Institute::where('affiliation',$r->affiliation)->where('instituteType','University')->count();
    $counts[++$i] = $count;
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
        $count = DB::table('addresses')
        ->join('towns','towns.id','addresses.town_id')
        ->join('institutes','institutes.id','addresses.institute_id')
        ->where('instituteType','University')
        ->where('towns.name',$r->name)
        ->count();
        // data_set($counts,'name',$r->name);
        // data_set($counts,'count',$count);
        $counts[++$i] = $count;
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
    $count = App\Institute::where('sector',$r->sector)->where('instituteType', 'University')->count();
    $counts[++$i] = $count;
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
  $i=0;
  $j=0;
  $counts = array();
  $names = array();
  $result = App\degreeGroups::whereNotIn('name',['FSC Pre Engineering','FSC Pre Medical','ICS','FA','iCOM'])->select('name')->get();
  foreach ($result as $r) {
    $count = DB::table('degreeGroups')->join('degrees','degreeGroups.id','degrees.degree_groups_id')->where('degreeGroups.name',$r->name)->count();
    $counts[++$i] = $count;
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
