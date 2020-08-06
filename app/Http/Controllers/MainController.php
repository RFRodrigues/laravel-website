<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Exception;

class MainController
{

    public function addUsernameForm(Request $request)
    {
        return view('addUserForm');
    }

    public function form(Request $request)
    {
        $request->flash();
        return view('form')->with('name', $request->name);
    }

    public function submitForm(Request $request)
    {
        try {
            DB::table('users')->insert(
                ['email' => $request->input('email'), 'age' => $request->input('age'), 'name' => $request->old('name') ?? 'Utilizador anónimo']
            );
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return view('submited');
    }

    public function getUsers(Request $request)
    {
        try {
            $users = DB::table('users')->get();
            //dd($users);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return view('usersList')->with('users', $users);
    }

    public function deleteUser(Request $request, $id)
    {
        //dd($request);
        try {
            DB::table('users')->where('id', '=', $id)->delete();
        } catch (Exception $e) {
            dd($e->getMessage());
        }
        return redirect('usersList');
    }

    public function updateUser(Request $request, $id)
    {
        //dd($request->input('name'));
        try {
            DB::table('users')
                ->where('id', $id)
                ->update(['name' => $request->input('name'), 'email' => $request->input('email'), 'age' => $request->input('age')]);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
        return redirect('usersList');
    }

    public function notFound(Request $request)
    {
        return view('notFound');
    }
}
