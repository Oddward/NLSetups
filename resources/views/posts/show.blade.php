@extends('layouts.app')
@section('title')
    Post by {{ $post->user->name }} ● {{ $post->id }}
@endsection
@section('content')
    <div>
        {{-- Screenshot main view --}}
        <div style="display:flex; justify-content:center;">
            <img style="" 
                src="{{ asset('/img/'.$post->image_path) }}" 
                alt="setup screenshot" 
                class="screen-preview shadow">
        </div>

        {{-- Post details --}}
        <div style="display:grid; grid-template-columns:2fr 1fr; padding-top:4rem;">
            <div id="post-content" 
                style="
                    display:flex;
                    justify-content:center;">
                <div style="display:inline-block;" class="shadow soft-outline">
                    <header style="padding:1rem; display:flex; justify-content:space-between;">
                        <div id="user-info" class="center-the-stuff-h">
                            <button class="avatar-small round" style="background:#222;"></button>
                            <p style="display:inline-block; margin-right:auto; margin-left:.5rem;"
                                class="stack">
                                <a href="/users/{{ $post->user->id }}">
                                    <strong>{{ $post->user->name }}</strong>
                                </a>
                                <small class="muted-text">{{ $post->created_at }}</small>
                            </p>
                        </div>
                        <div id="post-stats" class="center-the-stuff-h">
                            {{-- bookmark icon --}}
                            <form action="{{ route('posts.saves', $post->id) }}" method="post">
                                @csrf
                                <button type="submit" class="muted-till-hover">
                                    <x-gmdi-bookmark-border class="small-icon"/>
                                </button>
                            </form>
                            {{-- *no need to show save counter, will add likes/votes --}}
                            {{-- <span>{{ $post->saves->count() }}</span> --}}
                        </div>
                    </header>
                    <div id="post-description" style="padding:1.5rem; width:30rem; min-width:12rem; max-width:100%;">
                        <p>{{ $post->description }}</p>
                    </div>
                </div>
            </div>
            <div id="explore-more">
                @if (DB::table('posts')->where('user_id', $post->user_id )->count() > 1)
                    <div id="more-from-user">
                        <h3 class="muted-text">More from {{ $post->user->name }}</h3>
                        @yield('more-from-user')
                    </div>
                @else
                    <div id="more-from-user">
                        <h3 class="muted-text">No more posts from {{ $post->user->name }}</h3>
                    </div>
                @endif
                
            </div>
        </div>
    </div>
@endsection
