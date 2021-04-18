@extends('layouts.app')
@section('title')
    Page not found | NLSetups
@endsection
@section('content')
    <div class="center-the-stuff">
        <h1 style="
                heigh:100%;
                text-align:center;"
            class="muted-text">
            404 | PAGE NOT FOUND
        </h1>
        <x-gmdi-broken-link class="medium-icon" />
    </div>
@endsection