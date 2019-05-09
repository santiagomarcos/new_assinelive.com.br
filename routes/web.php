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

Route::group(['middleware' => 'analytics'], function () {

    Route::get('', 'PagesController@home')->name('home');

    Route::group(['prefix' => 'pages', 'as' => 'pages.'], function () {
        Route::get('/verification', ['uses' => 'PagesController@verification', 'as' => 'verification']);
        Route::get('/faq', ['uses' => 'PagesController@faq', 'as' => 'faq']);
        Route::get('/verifications/{plan?}', 'PagesController@verifications')->name('verifications');
    });
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    /**
     * Auth Routes
     */
    Route::group(['prefix' => 'auth', 'as' => 'auth.', 'middleware' => 'analytics'], function () {
        Route::get('/login', ['uses' => 'AuthController@login', 'as' => 'login']);
        Route::post('/login', ['uses' => 'AuthController@authenticate', 'as' => 'authenticate']);
        Route::get('/logout', ['uses' => 'AuthController@logout', 'as' => 'logout']);
    });

    Route::group(['middleware' => 'usersession'], function () {
        Route::get('', 'Admin\\PagesController@dashboard')->name('home');
        Route::group(['prefix' => 'affiliates', 'as' => 'affiliates.'], function () {
            Route::get('', ['uses' => 'Admin\\AffiliatesController@all', 'as' => 'all']);
        });

        Route::group(['prefix' => 'consults', 'as' => 'consults.'], function () {
            Route::get('', ['uses' => 'Admin\\ConsultsController@all', 'as' => 'all']);
        });

    });

});


