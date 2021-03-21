@extends('layouts.app')

@section('content')
    
    <form action="{{ url('/post') }}" method="post" enctype="multipart/form-data" class="region-isolated">
        
        <h1>Edit post</h1>
        {{-- Route model binding --}}
        {!! Form::model( $post, ['route' => [ 'posts.update', $post->id], 'method' => 'PUT']) !!}

        <div>
            {{-- <section>
                <h2>Setup</h2>
                <label for="">Please upload a plain full screenshot of your setup</label>
                <input type="image" src="" alt="" required>
            </section> --}}
            <section>
                {{-- <input type="text" name="description" value="{{ old('description') }}" placeholder="A brief description of what this setup is about and/or how it was made"> --}}
                {!! Form::label( 'title', 'Description:') !!}
                {!! Form::textarea( 'desc', $post->description, ['class' => 'textbox']) !!}
                {{-- tags --}}
            </section>
            <section>
                <h2>Additional files</h2>
            </section>
        </div>

    </form>

@endsection
