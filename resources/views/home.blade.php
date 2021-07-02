@extends('layouts.app')

@section('content')

    <h1>Eris</h1>
    @auth
        @include('partials.new_post');
    @else
        <p>Esegui il <a href="{{ route('login') }}">login</a> per pubblicare post</p>
    @endauth

@endsection
