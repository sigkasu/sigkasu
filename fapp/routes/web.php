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

Route::resource('tweets', 'App\Http\Controllers\TweetController');

Route::resource('questions', 'App\Http\Controllers\QuestionController');

Route::get('/questions/{question}/index', 'App\Http\Controllers\QuestionController@index')->name('questions.index');

Route::post('/questions/{question}/store', 'App\Http\Controllers\QuestionController@store')->name('questions.store');

Route::get('/questions/{question}/create', 'App\Http\Controllers\QuestionController@create')->name('questions.create');

Route::post('/questions/{question}', 'App\Http\Controllers\QuestionController@update');

Route::post('/questions/{question}/answer', 'App\Http\Controllers\QuestionController@answer')->name('questions.answer');

Route::get('gazou', function(){

    $image = Image::make(file_get_contents('http://goo.gl/uDTEzv'));
  
    return $image->response('jpg');
  
  });