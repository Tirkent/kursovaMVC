@extends('layouts.app')

@section('maincontent')
<form action="{{ route('users.store')}}" method="POST">
    @csrf
    <div class="containerRegister">
        @if (Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{{Session::get('success') }}</li>
            </ul>
        </div>
        @endif

        <h1>Регистрация</h1>
        <p>Моля, попълнете този формуляр, за да създадете акаунт.</p>
        <hr>

        @error('name')
        <p class="alert-danger">{{ $errors->first('name') }} </p>
        @enderror

        <label for="name"><b>Име</b></label>
        <input type="text" value="{{old ('name')}}" placeholder="Въведи име:" name="name" id="name" required>

        @error('user_name')
        <p class="alert-danger">{{ $errors->first('user_name') }} </p>
        @enderror

        <label for="user_name"><b>Потребителско име</b></label>
        <input type="text" value="{{old ('user_name')}}" placeholder="Въведи потребителско име: " name="user_name" id="user_name" required>


        @error('email')
        <p class="alert-danger">{{ $errors->first('email') }} </p>
        @enderror

        <label for="email"><b>Имейл</b></label>
        <input type="text" value="{{old ('email')}}" placeholder="Въведи имейл: " name="email" id="email" required>

        @error('password')
        <p class="alert-danger">{{ $errors->first('password') }} </p>
        @enderror

        <label for="password"><b>Парола</b></label>
        <input type="password" placeholder="Въведете парола: " name="password" id="password" required>

        @error('psw-repeat')
        <p class="alert-danger">{{ $errors->first('psw-repeat') }} </p>
        @enderror
        <label for="psw-repeat"><b>Повторно зареждане на парола</b></label>
        <input type="password" placeholder="Повторете парола" name="psw-repeat" id="psw-repeat" required>
        <hr>
        <p>Създавайки акаунт, вие се съгласявате с нашите <a href="#">Условия и поверителност</a>.</p>

        <button type="submit" class="registerbtn">Регистрация</button>
    </div>

    <div class="container signin">
        <p>Вече имате акаунт? <a href="#">Вход</a>.</p>
    </div>
</form>
@endsection