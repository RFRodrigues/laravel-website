<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Exception;

class TestController
{

    public function home(Request $request)
    {
        try {
            DB::table('users')->get();
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return view('main')->with('name', $request->name);
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

    public function notFound(Request $request){
        return view('notFound');
    }
}
