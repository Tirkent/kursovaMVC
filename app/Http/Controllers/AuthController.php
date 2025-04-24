<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Валидиране на входа
        $validated =  request()->validate([
            'user_name' => 'required',
            'password' => 'required|min:3',
        ]);

        // Търсене на потребител
        $user_name = User::where('user_name', $validated['user_name'])->first();

        // Проверка на паролата
        if ($user_name && Hash::check($validated['password'], $user_name->password)) {
            // Успешен вход – пренасочване към начална страница
            Auth::login($user_name);
            return redirect('/')->with('success', 'Добре дошъл, ' . $user_name->name . '!');
        }

        // Грешни данни
        return back()->withErrors(['user_name' => 'Грешен имейл или парола.']);
    }
}
