@section('content')
    @foreach ($posts as $post)
        
    @endforeach

    <div style="margin: 2rem;">
        <a href="{{ url('/posts/{id}') }}">
            <img style="
                    width: 12rem;
                    height: auto;
                    border-radius: 1rem;" 
                    src="{{ asset('img/screens/20200524_184539.jpg') }}" 
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
                by <a href="#" class="username">Oddward</a>
            </p>
            {{-- bookmark icon --}}
            <button>
                <span></span>
            </button>
        </div>
    </div>

    @forelse ($posts as $post)
        <p>No results found.</p>
    @empty
        
    @endforelse
@endsection