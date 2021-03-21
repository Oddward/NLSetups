@extends('layouts.app')

@section('content')
    
    <form action="{{ url('/post') }}" method="post" enctype="multipart/form-data">
        
        <h1>Submit new post</h1>

        <div>
            <section>
                <h2>Setup</h2>
                <label for="">Please upload a plain full screenshot of your setup</label>
                <input type="image" src="" alt="" required>
            </section>
            <section>
                <input type="text" name="description" value="{{ old('description') }}" placeholder="A brief description of what this setup is about">
                {{-- tags --}}
            </section>
            <section>
                <h2>Additional files</h2>
            </section>
        </div>

    </form>

@endsection
