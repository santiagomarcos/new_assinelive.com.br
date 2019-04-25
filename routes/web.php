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

Route::group([ 'middleware' => 'analytics'], function() {
    Route::get('/{code?}', function ($code = null) {

        $request = (new \Illuminate\Http\Request());
        getPartner($code);
        return view('index');

    })->name('home');

    Route::group(['prefix' => 'pages', 'as' => 'pages.'], function () {
        Route::get('/verification', ['uses' => 'PagesController@verification', 'as' => 'verification']);
        Route::get('/verifications/{plan?}', 'PagesController@verifications')->name('verifications');
    });
});

