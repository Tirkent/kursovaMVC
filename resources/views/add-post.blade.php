@extends('layouts.app')
@section('maincontent')
<form action="{{ route('posts.store')}}" method="POST">
    @csrf
    <div class="containerRegister">
        <h1>Добави пост</h1>
        <hr>
        @if (Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success') }}
        </div>
        @endif
        @error('title')
        <p class="alert-danger">{{ $errors->first('title') }} </p>
        @enderror
        <label for="title"><b>Заглавие</b></label>
        <input type="text" value="{{ old('title')}}"
            placeholder="Въведи заглавие" name="title" id="title" required>
        @error('content')
        <p class="alert-danger">{{ $errors->first('content') }} </p>
        @enderror
        <label for="content"><b>Съдържание</b></label>
        <textarea name="content" id="content"> {{
old('content')}}</textarea>
        <button type="submit" class="registerbtn">Публикация</button>
    </div>
</form>
@endsection