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
Route::post('register','MainController@register');
Route::post('login','MainController@login');
Route::get('degreesByViews','MainController@degreesByViews');
Route::get('getPostRequisites','MainController@getPostRequisites');
Route::get('/interFilter','MainController@filterSearch');
Route::get('/degree','MainController@getDegree');
Route::get('/institute','MainController@getInstitute');
Route::get('/instituteSearch','MainController@getInstitueByName');
Route::get('/getAffiliations',function(){
  $result = Institute::select('affiliation')->distinct()->get();
  return Response::json(array('data' => $result));
});
Route::get('/getTown',function(){
  $resultTowns = Town::select('name')->get();
//   $counts = [
//     'name' => 'joe',
//     'count'  => 12,
// ];
$i=0;
$j=0;
$counts = array();
$names = array();
  foreach ($resultTowns as $r) {
      $count = DB::table('addresses')->join('towns','towns.id','addresses.town_id')->where('towns.name',$r->name)->count();
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
Route::get('/getSectors',function(){
  $result = Institute::select('sector')->distinct()->get();
  return Response::json(array('data' => $result));
});
Route::get('/getGroups',function(){
  $result = App\degreeGroups::wherein('name',['FSC Pre Engineering','FSC Pre Medical','ICS','FA','iCOM'])->select('name')->get();
  return Response::json(array('data' => $result));
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
