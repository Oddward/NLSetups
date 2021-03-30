@extends('layouts.app')
@section('title')
    {{ $post->user->name }} - {{ $post->id }} | NLSetups
@endsection
@section('content')
    <div>
        <div style="display:flex; justify-content:center;">
            <img style="
                    width: auto;
                    height: 720px;
                    border-radius: 1rem;
                    display:inline-block;" 
                src="{{ asset('/img/'.$post->image_path) }}" 
                alt="setup screenshot" 
                class="shadow">
        </div>
        <div id="post-content" style="display:flex; justify-content:space-evenly;">
            <header style="padding:1rem; display:flex; justify-content:space-between;">
                <div id="user-info" style="display:inline-flex; align-items:center;">
                    <button class="avatar" style="background:#222;"></button>
                    <p style="display:inline-block; margin-right:auto; margin-left:.5rem;"
                        class="stack">
                        <a href="/profile/{{ $post->id }}">
                            <strong>{{ $post->user->name }}</strong>
                        </a>
                        <small class="muted-text">{{ $post->created_at }}</small>
                    </p>
                </div>
                <button>
                    <span></span>
                </button>
            </header>
            <div id="post-description" style="padding:1.5rem; width:30rem; min-width:12rem; max-width:100%;">
                <p>{{ $post->description }}</p>
            </div>
        </div>
    </div>
@endsection
