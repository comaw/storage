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

Route::get('/', 'JobsController@index');
Route::get('/jobs/index', 'JobsController@index')->name("jobs.index");
Route::get('/jobs/create', 'JobsController@create')->name("jobs.create");
Route::post('/jobs/create', 'JobsController@create')->name("jobs.create");
