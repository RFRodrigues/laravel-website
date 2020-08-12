<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/form', 'MainController@form')->middleware('auth');

Route::get('/addUser', 'MainController@addUsernameForm')->middleware('auth');

Route::get('/usersList', 'MainController@getUsers');

Route::post('/form/submit', 'MainController@submitForm')->middleware('auth');

Route::put('/usersList/update/{id}', 'MainController@updateUser')->middleware('auth');

Route::delete('/usersList/delete/{id}', 'MainController@deleteUser')->middleware('auth');

// Route::get('/{default?}', 'MainController@notFound');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
