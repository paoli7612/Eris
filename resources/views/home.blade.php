@extends('layouts.app')

@section('content')
    <div class="jumbotron mt-5">
        <div class="container">
            <h1 class="display-3">Bentornato, {{ Auth::user()->name }}</h1>
            <p>Grazie per aver scelto Apprendiamoci. Sei un {{ auth()->user()->type }}</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <h1>Home</h1>
        </div>
    </div>

@endsection
