<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home','App\Http\Controllers\HomeController@tsubuyaki');
Route::get('twitter', 'App\Http\Controllers\TwitterController@index');
Route::get('auto/twitter/callback', 'App\Http\Controllers\TwitterController@callback');
Route::get('twitter/mypage', 'App\Http\Controllers\TwitterController@login')->name('twitter.login');