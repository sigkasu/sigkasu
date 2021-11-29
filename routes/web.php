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

Route::get('hello', 'App\Http\Controllers\HelloController@index');

Route::get('gg', 'HelloController@index');

Route::get('/register', [App\Http\Controllers\RegisterController::class, 'create']);

Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store']);

Route::get('/', function () {
    return view('toppage');
});

Route::get('/login1', function () {
    return view('login1');
});

Route::get('/forgot', function () {
    return view('forgot');
});

Route::get('/reset', function () {
    return view('reset');
});

Route::get('/change', function () {
    return view('change');
});


Route::get('/header', function() {
    return view('header');
});
Auth::routes();

Route::get('/home', function () {
    return view('home');
});

Route::get('/question', function () {
    return view('question');
});

Route::get('/area', function () {
    return view('area');
});

Route::get('/support', function () {
    return view('support');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('gomi', function () {
    return view('auth.register');
});

Route::get('kasu', function () {
    return view('auth.login');
});

Route::get('/home1', 'App\Http\Controllers\Home1Controller@index');

Route::get('/mypage', function () {
    return view('mypage');
});

Route::get('/tweet', function () {
    return view('tweet');
});

Route::get('answer', function () {
    return view('answer');
});

Route::get('/questionnaire', function () {
    return view('/questionnaire');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create', 'App\Http\Controllers\CreateController@index');

# Route::get('/selection', 'App\Http\Controllers\SelectionController@index');

Route::get('/selection', function () {
    return view('/selection');
});