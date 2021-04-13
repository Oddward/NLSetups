@extends('posts.show')
@section('more-from-user')
<div style="margin:2rem; display:inline-block;">
    <a href="/posts/{{ $post->id }}">
        <img style="
                width: 100px;
                height: auto;
                border-radius: .5rem;" 
                src="{{ asset( 'img/'.$post->image_path ) }}" 
                alt="setup screenshot" 
                class="shadow">
    </a>
</div>
@endsection