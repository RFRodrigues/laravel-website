<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController 
{
    public function show(Request $request, $view)
    {
        $views = [
            'view-home' => 'home view',
            'view-about' => 'about info',
        ];

        return view('test', ['view' => $views[$view] ?? 'default'])
            ->with('name', $request->name);
    }
}