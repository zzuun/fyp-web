<?php

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

Route::get('/',function(){
    return view('search');
})->name('page.main');

Route::get('/degree','pageController@degree')->name('page.degree');
Route::get('/institute','pageController@institute')->name('page.institute');
Route::get('/compare','pageController@compare')->name('page.compare');
Route::get('/home','pageController@home')->name('page.home');
Route::post('/search','SearchController@filter');
Route::get('/ajaxGetCities','SearchController@getCities');
