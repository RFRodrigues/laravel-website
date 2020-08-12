<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\User;
use App\Role;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/getUsers', function (Request $request) {
    return User::all();
});

Route::get('/getUsers/{id}', function (Request $request) {
    return User::find($request->id);
});

Route::get('/getRoles', function (Request $request) {
    return Role::all();
});