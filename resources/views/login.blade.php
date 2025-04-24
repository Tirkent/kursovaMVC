@extends('layouts.app')

@section('maincontent')

<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<form action="{{ route('auth.login')}}" method="POST">
    @csrf
    <div class="containerRegister">
        @if (Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{{Session::get('success') }}</li>
            </ul>
        </div>
        @endif
        <div class="imgcontainer">
            <img src="https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_1280.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            @error('user_name')
            <p class="alert-danger">{{ $errors->first('user_name') }} </p>
            @enderror
            <label for="user_name"><b>Потребителско име</b></label>
            <input type="text" placeholder="Въведи потребителско име" name="user_name" required>

            @error('password')
            <p class="alert-danger">{{ $errors->first('password') }} </p>
            @enderror

            <label for="psw"><b>Парола</b></label>
            <input type="password" placeholder="Въведи парола" name="password" required>

            <button type="submit">Регистрация</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Запомни ме
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Отказ</button>
            <span class="password">Забравена <a href="#">парола?</a></span>
        </div>

    </div>
</form>
@endsection