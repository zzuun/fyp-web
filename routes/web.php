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


Route::get('/intermediate',function(){
  return view('searchIntermediate');
})->name('intermediate.main');

Route::get('/undergraduate',function(){
  return view('searchUndergraduate');
})->name('undergraduate.main');


Route::get('/applyIntermediate','SearchController@filterIntermediateDegrees');
Route::get('/applyUndergraduate','SearchController@filterUndergraduateDegrees');

Route::get('/degree','pageController@degree')->name('page.degree');
Route::get('/institute','pageController@institute')->name('page.institute');
Route::get('/degreeUniversity','UniversityController@index');
Route::get('/department','UniversityController@getDepartmentProfile');
Route::get('/university','UniversityController@getUniversityProfile');

// Route::get('/intermediate','SearchController@search')->name('page.home');
Route::get('/apply','SearchController@filter');

Route::get('/wishlist','pageController@wishlist');

//undergraduate compare
Route::get('undergraduate/compare','pageController@compare')->name('page.undergraduateCompare');
Route::post('undergraduate/ResultCompare','pageController@compareResult');

//intermediate compare
Route::get('intermediate/compare','pageController@interCompare')->name('page.interCompare');
Route::post('intermediate/ResultCompare','pageController@interCompareResult');

Route::get('/degree','pageController@degree')->name('page.degree');
Route::get('/institute','pageController@institute')->name('page.institute');


//middleware AccessControl
Route::group(['middleware' => ['AccessControl']],function(){
  Route::get('/','pageController@home')->name('page.home');
  Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
});

//login
// Route::get('/login','SessionController@login')->name('login');
// Route::post('/login','SessionController@store');
Route::get('/user/logout','Auth\LoginController@userLogout')->name('user.logout');
//
// //register
// Route::get('/register','RegisterationController@register')->name('register');
// Route::post('/register','RegisterationController@store');


Route::get('/comingSoon','pageController@timer')->name('page.timer');
Route::get('/ajaxGetCities','SearchController@getCities');

Route::post('/getFeeCountIntermediate',function(){
  if(isset($_POST["minfees"])|| isset($_POST["maxfees"])){
    $maxRange= $_POST['maxfees'];
    $minRange= $_POST['minfees'];
    $c_degree = App\Degree::whereBetween('fees',[$minRange,$maxRange])
    ->where('degreeLevel','INTER')->count();
    return $c_degree;
 }

});
Route::post('/getFeeCountUndergraduate',function(){
   if(isset($_POST["minfees"])|| isset($_POST["maxfees"])){
      $maxRange= $_POST['maxfees'];
      $minRange= $_POST['minfees'];
      $c_degrees = DB::table('degrees')
      ->join('degreeGroups','degreeGroups.id','degrees.degree_groups_id')
      ->whereBetween('fees',[$minRange,$maxRange])
      ->where('degrees.degreeLevel','BS')->count();
      return $c_degrees;
   }
});
Route::post('/getMarksCountInter',function(){
  if(isset($_POST["minmarks"])|| isset($_POST["maxmarks"])){
     $maxRange= $_POST['maxmarks'];
     $minRange=$_POST['minmarks'];
     $c_degree = App\Degree::whereBetween('lastMerit',[$minRange,$maxRange])->where('degreeLevel','INTER')->count();
     return $c_degree;
  }
});

Route::post('/getMarksCountUni',function(){
  if(isset($_POST["minmarks"])|| isset($_POST["maxmarks"])){
     $maxRange= $_POST['maxmarks'];
     $minRange=$_POST['minmarks'];

     $c_degrees = DB::table('degrees')
     ->where('degreeLevel','BS')
     ->whereBetween('lastMerit',[$minRange,$maxRange])
     ->count();
     return $c_degrees;
  }
});

Route::get('/getSubareas',function(Request $request, Town $towns){
  $towns = $towns->newQuery();
  $towns->join('subareas','subareas.town_id','towns.id')
  ->select('subareas.name as areaName');
  $output = '';
  //$counts = array();
  if(isset($_GET["town"]))
  {
     $area_filter = $_GET["town"];
     $towns->wherein("towns.name",$area_filter);
     $result = $towns->get();
     foreach ($result as $r) {
       $output.= '<label  style="word-wrap:break-word"><input class="common-selector subarea" type="checkbox" value="'.$r->areaName.'"> '.$r->areaName.'</label>';
     }
  }
  return $output;
});



Auth::routes();


//admin routes
Route::prefix('admin')->group(function(){
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
  //password reset
  Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequesForm')->name('admin.password.request');
  Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

  //department
  Route::get('/getDepartments','AdminController@department');


  //degrees
  Route::get('/getDegrees','AdminController@degrees');
  Route::get('/getInterDegrees','AdminController@getInterDegrees');

  //subareas
  Route::get('/getSubareas','AdminController@subarea');
  Route::get('/getLatLng','AdminController@latlng');

  //faculty
  Route::DELETE('/faculty/{faculty}','FacultyController@destroy')->name('faculty.destroy');
  Route::get('/faculty/{faculty}/edit','FacultyController@edit')->name('faculty.edit');

  //institutes
  Route::resource('/institute','InstituteController');
  Route::resource('/department','DepartmentController');
  Route::resource('/degree','DegreeController');
});
