<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('aboutus');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post(
    '/user/store',
    [UserController::class, 'store']
)->name('users.store');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/posts/add', function () {
    return view('add-post');
})->name('posts.add');
Route::post(
    '/post/store',
    [PostController::class, 'store']
)->name('posts.store');

Route::get(
    '/post/show/{post}',
    [PostController::class, 'show']
)->name('posts.show');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/')->with('success', 'Излезе успешно.');
})->name('logout');
