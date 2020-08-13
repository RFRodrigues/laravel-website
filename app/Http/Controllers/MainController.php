<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

class MainController
{

    public function addUsernameForm(Request $request)
    {
        return view('addUserForm');
    }

    public function form(Request $request)
    {
        //$request->flash();
        return view('form')->with('name', $request->name);
    }

    public function submitForm(Request $request)
    {

        $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
            'age'   => 'required|integer|min:18',
        ]);
        dd('ping');
        
        // try {

            $user = new User;
            $user->name = $request->old('name');
            $user->email = $request->email;
            $user->age = $request->age;
            $user->save();

            //dd($user->save());

            // User::create([
            //     'name' => $request->name,
            //     'email' => $request->email,
            //     'age' => $request->age,
            //     'password' => 'teste'
            // ]);


            // DB::table('users')->insert(
            //     ['email' => $request->input('email'), 'age' => $request->input('age'), 'name' => $request->old('name') ?? 'Utilizador anónimo']
            // );
        // } catch (Exception $e) {
        //     dd($e->getMessage());
        // }

        return view('submited');
    }

    public function getUsers()
    {
        try {
            $request = Request::create('/api/getUsers', 'GET');
            $response = Route::dispatch($request);
            // $users = User::all();
            //dd($response->getData());
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return view('usersList')->with('users', $response->getData());
    }

    public function deleteUser($id)
    {
        try {
            $user = User::find($id);
            $user->delete();
        } catch (Exception $e) {
            dd($e->getMessage());
        }
        return redirect('usersList');
    }

    public function updateUser(Request $request, $id)
    {
        //dd($request->input('name'));
        try {
            $user = User::find($id);
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->age = $request->input('age');
            $user->save();
        } catch (Exception $e) {
            dd($e->getMessage());
        }
        return redirect('usersList');
    }

    public function notFound()
    {
        return view('notFound');
    }
}
