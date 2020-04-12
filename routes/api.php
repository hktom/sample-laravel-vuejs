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

Route::resource('projects', 'Api\ProjectController');
Route::resource('actions', 'Api\ActionController');
Route::resource('actors', 'Api\ActorController');
Route::resource('states', 'Api\StatusController');
Route::resource('types', 'Api\TypeController');
Route::resource('echelles', 'Api\EchelleController');
