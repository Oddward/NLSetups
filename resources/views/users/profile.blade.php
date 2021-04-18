@extends('layouts.app')
@section('title')
    {{ $user->name }} ● profile
@endsection
@section('content')
    <div id="profile" style="margin-left:15%; margin-right:15%; text-align:center;">
        <header style="
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 1rem;
                    border-radius: 1rem;
                    margin-top: 1rem;
                    margin-bottom: 1rem;"
                class="shadow blue-grad">
            <div id="acct-info" class="center-the-stuff-h">
                <div class="avatar-big" style="background: maroon;"></div>
                <div style="display:inline-block;">
                    <h2 style="margin-bottom:.5rem;">{{ $user->name }}</h2>
                    <p style="margin-top:.5rem;">bio goes here</p>
                </div>
            </div>
            <div id="stats" class="">
                <div style="display:inline-block;">
                    <span>12</span>
                    <x-gmdi-photo class="small-icon" />
                </div>
                <div style="display:inline-block;">
                    <span>24</span>
                    <x-gmdi-people class="small-icon" />
                </div>
            </div>
            <div id="social-interaction" style="margin-right:1rem;">
                {{-- <x-gmdi-twitter-brand class="small-icon" /> --}}
                {{-- <x-gmdi-instagram class="small-icon" /> --}}
                <button class="big-g-button animated center-the-stuff-h">
                    {{-- @if ()
                        
                    @else
                        
                    @endif --}}
                    Unfollow<x-gmdi-close class="small-icon" />
                </button>
            </div>
        </header>

        <div>
            <h2>Posts</h2>
            @foreach ($posts as $post)
            <div style="margin:2rem; display:inline-block;">
                <a href="/posts/{{ $post->id }}">
                    <img style="" 
                            src="{{ asset( 'img/'.$post->image_path ) }}" 
                            alt="setup screenshot" 
                            class="screen-thumb shadow">
                </a>
                <div style="
                        width: 100%;
                        display: flex;
                        justify-content: space-between;
                        padding-left: .5rem;
                        padding-right: .5rem;">
                    <p style="display: inline;">
                        {{-- profile link --}}
                        by <a href="/users/{{ $post->user->id }}" class="username">{{ $post->user->name }}</a>
                    </p>
                    {{-- bookmark icon --}}
                    <button class="muted-till-hover">
                        <x-gmdi-bookmark-border class="small-icon"/>
                    </button>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection