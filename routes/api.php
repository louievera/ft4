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


/* Default auth scaffolding - removing to eliminate clousers in route:list

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

*/


Route::get('/welcomeposts','Welcomepage@getPosts');
Route::get('/welcomevids','Welcomepage@getVids');

Route::get('/videos','VideosController@index');
Route::get('/articles','ArticlesController@index');


