<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    //
    function store(Request $request)
    {

        $validated = request()->validate([
            'email' => 'required|email|unique:users,email',
            'name' => 'required',
            'user_name' => 'required|min:3',
            'password' => 'required|min:3',
            'psw-repeat' => 'required|min:3|same:password',

        ]);

        User::create($validated);
        return back()->with('success', 'Благодаря ви за отговора');


        // dd($validated);
    }
}
