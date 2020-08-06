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

Route::get('/form', 'MainController@form');

Route::get('/addUser', 'MainController@addUsernameForm');

Route::get('/usersList', 'MainController@getUsers');

Route::post('/form/submit', 'MainController@submitForm');

Route::put('/usersList/update/{id}', 'MainController@updateUser');

Route::delete('/usersList/delete/{id}', 'MainController@deleteUser');

Route::get('/{default?}', 'MainController@notFound');


