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

/**
 * V1 API routes
 */
Route::group(['prefix' => 'v1', 'as' => 'v1.'], function(){
    Route::group(['prefix' => 'consult', 'as' => 'consult.'], function() {
        Route::post('/viability/create', 'API\\LeadsController@create')->name('viability');
        Route::post('/superlist/search', ['uses' => 'API\\SuperListController@searchAddress', 'as' => 'search']);
    });
});

