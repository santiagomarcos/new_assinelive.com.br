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

Route::get('/{code?}', function () {

    return view('index');
});

Route::group(['prefix' => 'pages', 'as' => 'pages.'], function (){
   Route::get('/verification',['uses' => 'PagesController@verification', 'as' => 'verification']);
   Route::get('/verifications/{plan?}', 'PagesController@verifications')->name('test');

});

