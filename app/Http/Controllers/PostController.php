<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::get();
        $users = User::all();

        return view('posts.index', compact('posts', 'users'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function new()
    {
        //
        $posts = Post::get();
        $users = User::all();

        return view('posts.index', compact('posts', 'users'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function popular()
    {
        //
        $posts = Post::get();
        $users = User::all();

        return view('posts.index', compact('posts', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (Auth::user()->is_admin == 1) {
            return view('posts.create');
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if (Auth::user()->is_admin == 1) {
            $post = new Post;
            
            $post->user = $request->input('user');
            $post->image = $request->input('image');
            $post->desc = $request->input('description');
            $post->tags = $request->input('tags');
            $post->save();

            if ($post) {
                return redirect('posts');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        $post = Post::findOrFail($post->id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        if (Auth::user()->is_admin == 1) {
            $post = Post::findOrFail($id);
            return view('posts.edit', compact('posts'));
        }
        else {
            //
            return redirect('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        if (Auth::user()->is_admin == 1) {
            $post = Post::findOrFail($id);

            $post->user = $request->input('user');
            $post->image = $request->input('image');
            $post->desc = $request->input('description');
            $post->tags = $request->input('tags');
            $post->save();

            if ($post) {
                return redirect('posts');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
