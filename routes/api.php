<?php

use Illuminate\Http\Request;

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

Route::get('degreesByViews','MainController@degreesByViews');
Route::get('getPostRequisites','MainController@getPostRequisites');
Route::get('/degree','MainController@getDegree');
Route::get('/institute','MainController@getInstitute');
Route::get('/instituteSearch','MainController@getInstitueByName');
Route::post('/filter','MainController@filterSearch');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
