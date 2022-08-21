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

Route::get('/', function(){
    return view ('auth.login');
}) ->name('login');



// Route::get('/login', function () {
//     return view('auth.login');
// }) -> name('login');

Route::post('/postlogin', 'App\Http\Controllers\LoginController@postlogin') ->name('postlogin');
Route::get('/postlogout', 'App\Http\Controllers\LoginController@postlogout') ->name('postlogout');



Route::get('/beranda', 'App\Http\Controllers\BerandaController@index');

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/data-listrik', 'App\Http\Controllers\DatalistrikController@index')-> name ('data-pegawai');
Route::get('/Create', 'App\Http\Controllers\DatalistrikController@create')-> name ('Create');
Route::post('/Save', 'App\Http\Controllers\DatalistrikController@store')-> name ('Save');




