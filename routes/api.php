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


Route::group(['middleware' => ['auth:api']], function () {
    // register post routes
    Route::post('perdorues', 'PerdoruesController@apiStore');
    Route::post('produkt', 'ProduktController@apiStore');
    Route::post('porosi', 'PorosiController@apiStore');

    //register get routes
    Route::get('perdorues', 'PerdoruesController@apiIndex');
    Route::get('produkt', 'ProduktController@apiIndex');
    //Route::post('porosi', 'PorosiController@apiStore');
});