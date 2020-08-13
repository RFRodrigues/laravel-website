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
    try{
        $users = User::all();
    }
    catch (Exception $e) {
        dd($e->getMessage());
    }
    return $users;
});

Route::get('/getUsers/{id}', function (Request $request) {
    try{
        $user = User::find($request->id);
    }
    catch (Exception $e) {
        dd($e->getMessage());
    }
    return $user;
});

Route::get('/getRoles', function (Request $request) {
    try{
        $roles = Role::all();
    }
    catch (Exception $e) {
        dd($e->getMessage());
    }
    return $roles;
});