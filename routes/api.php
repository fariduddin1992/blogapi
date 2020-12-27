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
Route::get('getBlog','Api\blogController@index');
Route::get('getBlog/{slug}','Api\blogController@showPost');
Route::get('share-menu','Api\blogController@shareMenu');
Route::get('getPopularPost','Api\blogController@popularPost');
Route::get('Subcategory','Api\blogController@Subcategory');





