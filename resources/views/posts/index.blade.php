@extends('layouts.app')
@section('content')
    @foreach ($posts as $post)
        <div style="margin: 2rem; display: inline-block;">
            <a href="/posts/{{ $post->id }}">
                <img style="
                        width: 12rem;
                        height: auto;
                        border-radius: 1rem;" 
                        src="{{ asset( 'img/'.$post->image_path ) }}" 
                        alt="setup screenshot" 
                        class="shadow">
            </a>
            <div style="
                    width: 100%;
                    display: flex;
                    justify-content: space-between;
                    padding-left: .5rem;
                    padding-right: .5rem;">
                <p style="display: inline;">
                    {{-- profile link --}}
                    by <a href="#" class="username">{{ $post->user->name }}</a>
                </p>
                {{-- bookmark icon --}}
                <button>
                    <span></span>
                </button>
            </div>
        </div>
    @endforeach

    @forelse ($posts as $post)
        {{-- <p>No results found.</p> --}}
    @empty
        <p>No results found.</p>
    @endforelse
@endsection