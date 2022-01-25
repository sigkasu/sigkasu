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
    return view('toppage');
});
Auth::routes();

Route::get('/home', 'App\Http\Controllers\Home1Controller@index')->name('home');

Route::resource('mypage', 'App\Http\Controllers\MypageController');

Route::post('/mypage/{mypage}', 'App\Http\Controllers\MypageController@update');

Route::get('/selec_serach', 'App\Http\Controllers\Home1Controller@selec_search');

Route::get('home1', function () {
    return view('home');
});
	
Route::get('support', 'App\Http\Controllers\SupportController@index')->name('support');

Route::post('support', 'App\Http\Controllers\SupportController@send')->name('support');

Route::get('toppage', 'App\Http\Controllers\ToppageController@index')->name('toppage');

Route::get('support1', 'App\Http\Controllers\Support1Controller@index')->name('support1');

Route::post('support1', 'App\Http\Controllers\Support1Controller@send')->name('support1');