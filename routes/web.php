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
Route::get('/verify/{vtoken}', 'VerifyController@verify')->name('verify');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/changePassword','HomeController@showChangePasswordForm')->name('Form_changePassword');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'PageController@getIndex')->name('welcome');
Route::get('/articles','PageController@indexPost')->name('article_browse');
Route::get('/article/{slug}','PageController@showPost')->name('article_read');
Route::get('/search','PageController@searchResult');
Route::get('/videos','PageController@indexVideo');

Route::get('/video/{slug}','PageController@showVideo')->name('video_read');
Route::get('/lyrics','PageController@indexLyric')->name('lyric_browse');
Route::get('/lyric/{slug}','PageController@showLyric')->name('lyric_read');

Route::get('/{slug}','PageController@showPage')->name('page_read');


/*
Route::get('/promos', 'PageController@getPromos')->name('promos');
Route::view('/fliptop_radio_station1', 'pages.ftradio1')->name('radio1');
Route::view('/fliptop_radio_station2', 'pages.ftradio2')->name('radio2');
Route::view('/fliptop_radio_station3', 'pages.ftradio3')->name('radio3');
*/

Route::view('/terms', 'pages.terms')->name('terms');
Route::view('/privacy', 'pages.privacy')->name('privacy');
Route::view('/wip', 'pages.wip')->name('wip');


// Temporary Stuff
//Route::view('videos', 'tempo.videos_static');
Route::view('/artists', 'tempo.artists_static')->name('artists');
Route::view('/library', 'tempo.articles_static')->name('library');
Route::view('/tryouts', 'tempo.tryouts_static')->name('tryouts');
