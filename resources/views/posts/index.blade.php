@extends('layouts.app')
@section('title')
    Feed 
@endsection
@section('content')
    <div class="region-isolated" style="display: flex; justify-content: space-between;">
        <div>
            <button class="label-isolated">new</button>
            <button class="label-isolated">popular</button>
        </div>
        @yield('search')
    </div>
    <div style="text-align:center;">
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
                    <form action="" method="post">
                        <button type="submit" class="muted-till-hover">
                            @csrf
                            <x-gmdi-bookmark-border class="small-icon"/>
                        </button>
                    </form>
                    
                </div>
            </div>
        @endforeach

        @forelse ($posts as $post)
            {{-- <p>No results found.</p> --}}
        @empty
            <p>No results found.</p>
        @endforelse
    </div>
@endsection