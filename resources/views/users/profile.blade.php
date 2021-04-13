@extends('layouts.app')
@section('title')
    {{ $user->name }} - profile | NLSetups
@endsection
@section('content')
    <div id="profile" class="center-the-stuff">
        <header style="
                    max-width:80%;
                    display:flex;
                    justify-content:space-between;
                    padding:2rem;
                    border-radius:1rem;
                    margin-top:1rem;
                    margin-bottom:1rem;">
            <div class="avatar-big round  isolated" style="background: maroon;"></div>
            <div>
                <h2>{{ $user->name }}</h2>
                <p>bio goes here</p>
            </div>
            
        </header>
    </div>
@endsection