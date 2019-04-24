<?php

use Illuminate\Http\Request;
use App\Institute;
use App\Address;
use App\Town;

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
  $objects = array(
  (object)array(
    'name' => 'name',
    'count' => 1,
  )
);
  foreach ($resultTowns as $r) {
      $count = DB::table('addresses')->join('towns','towns.id','addresses.town_id')->where('towns.name',$r->name)->count();
      $objects->name = $r->name;
      $objects->count = $count;
  }
  return Response::json(array('data' => $objects));
});
Route::get('/getSectors',function(){
  $result = Institute::select('sector')->distinct()->get();
  return Response::json(array('data' => $result));
});
Route::get('/getGroups',function(){
  $result = ['FSC','ICS','ICOM','FA'];
  return Response::json(array('data' => $result));
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
