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

Route::get('/form', 'TestController@form');

Route::get('/home', 'TestController@home');

Route::post('/form/submit', 'TestController@submitForm');

Route::get('/{default?}', 'TestController@notFound');


