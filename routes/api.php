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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'api', 'as' => 'api.'], function (){
    Route::group(['prefix' => 'calling', 'as' => 'calling.'], function (){
        Route::post('/send', 'API\\CallingMeController@create')->name('send');
    });
});

/**
 * V1 API routes
 */
Route::group(['prefix' => 'v1', 'as' => 'v1.'], function(){
    Route::group(['prefix' => 'consult', 'as' => 'consult.'], function() {
        Route::post('/viability/create', 'API\\LeadsController@create')->name('viability');
        Route::get('/superlist/search', ['uses' => 'API\\SuperListController@searchAddress', 'as' => 'search']);
    });

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::post('/get-affiliates', 'API\\AffiliatesController@getAffiliateReferrer')->name('consult-referrer');
        Route::post('/create-affiliate', 'API\\AffiliatesController@createAffiliate')->name('create-affiliate');

    });
});



