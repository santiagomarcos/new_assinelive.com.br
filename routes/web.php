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

Route::get('/sitemap.xml', function(){

$variabel ="<?xml version='1.0' encoding='UTF-8'?>
<urlset
      xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'
      xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance'
      xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>
<!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->


<url>
  <loc>https://planotimlive.com.br/</loc>
  <lastmod>2020-06-08T17:22:33+00:00</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>https://planotimlive.com.br/pages/faq</loc>
  <lastmod>2020-06-08T17:22:33+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://planotimlive.com.br/pages/verifications/PLAN60M</loc>
  <lastmod>2020-06-08T17:22:33+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://planotimlive.com.br/pages/verifications/PLAN150M</loc>
  <lastmod>2020-06-08T17:22:33+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://planotimlive.com.br/pages/verifications/PLAN200M</loc>
  <lastmod>2020-06-08T17:22:33+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://planotimlive.com.br/pages/verifications/PLAN300M</loc>
  <lastmod>2020-06-08T17:22:33+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://planotimlive.com.br/pages/verifications/40</loc>
  <lastmod>2020-06-08T17:22:33+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://planotimlive.com.br/pages/regulaments</loc>
  <lastmod>2020-06-08T17:22:33+00:00</lastmod>
  <priority>0.80</priority>
</url>
</urlset>";

   return response()->make($variabel, 200, [
        'Content-Type' => 'application/xml'
    ]);
});

Route::group(['middleware' => 'analytics'], function () {
    Route::get('/', 'PagesController@home')->name('home');
    Route::group(['prefix' => 'pages', 'as' => 'pages.'], function () {
        Route::get('/verification', ['uses' => 'PagesController@verification', 'as' => 'verification']);
        Route::get('/faq', ['uses' => 'PagesController@faq', 'as' => 'faq']);
        Route::get('/regulaments', ['uses' => 'PagesController@regulaments', 'as' => 'regulaments']);
        Route::get('/verifications/{plan?}', 'PagesController@verifications')->name('verifications');
    });
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    /**
     * Auth Routes
     */
    Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
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
            Route::get('/calling-me', ['uses' => 'Admin\\ConsultsController@callingMe', 'as' => 'calling-me']);

        });

    });

});


