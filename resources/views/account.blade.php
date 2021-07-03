@extends('layouts.app')

@section('content')
    <h1>{{ $user->name }}</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{ $user }}
        </div>
    </div>
@endsection
