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

Route::get('jobs', 'Api\JobController@index');
Route::get('jobs/{id}', 'Api\JobController@one');
Route::post('jobs', 'Api\JobController@crete');
Route::put('jobs/{id}', 'Api\JobController@update');
Route::delete('jobs/{id}', 'Api\JobController@delete');
