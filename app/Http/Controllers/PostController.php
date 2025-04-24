<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:100',
            'content' => 'required|min:50|max:1000',
        ];
    }
    public function messages()
    {
        $messages = [
            'title' => 'Заглавието трябва да съдържа между 5 и 100
    символа.',
            'content' => 'Съдържанието на публикацията трябва да съдържа
    между 50 и 1000 символа',
        ];
        return $messages;
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
        Post::create($request->validated());
        return back()->with('success', 'Публикацията е добавена в базата
данни');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
