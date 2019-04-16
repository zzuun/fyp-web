<?php

use App\Town;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Input;

Route::get('/','SearchController@search')->name('page.main');
Route::get('/apply','SearchController@filter');
Route::get('/degree','pageController@degree')->name('page.degree');
Route::get('/institute','pageController@institute')->name('page.institute');
Route::get('/compare','pageController@compare')->name('page.compare');
Route::get('/home','pageController@home')->name('page.home');
Route::get('/comingSoon','pageController@timer')->name('page.timer');
Route::post('/getFeeCount',function(){
   if(isset($_POST["fees"])){
      $maxRange= (int) $_POST['fees'];
      $c_degree = App\Degree::whereBetween('fees',[10000,$maxRange])->count();
      return $c_degree;
   }
});
Route::post('/getMarksCount',function(){
  if(isset($_POST["marks"])){
     $maxRange= (int) $_POST['marks'];
     $c_degree = App\Degree::whereBetween('lastMerit',[33,$maxRange])->count();
     return $c_degree;
  }
});
Route::get('/ajaxGetCities','SearchController@getCities');
Route::get('/getSubareas',function(Request $request, Town $towns){
  $towns = $towns->newQuery();
  $towns->join('subareas','towns.id','subareas.town_id')->select('subareas.name');
  $output = '';
  $counts = array();
  if(isset($_GET["town"]))
  {
     $area_filter = $_GET["town"];
     $towns->wherein("towns.name",$area_filter);
     $result = $towns->get();
     $i = 0;
     foreach ($area_filter as $a) {
       $temp = DB::table('towns')->join('subareas','towns.id','subareas.town_id')->where('towns.name',$a)->count();
       $temp--;
       $counts[$i++]=$temp;
     }
     $i = 0;
     foreach ($result as $r) {
       $output.= '<label  style="word-wrap:break-word"><input class="common-selector subarea" type="checkbox" value='.$r->name.'>'.$r->name.'  ('.$counts[$i++].')</label>';
     }
  }
  return $output;
});
