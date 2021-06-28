@extends('layouts.app')

@section('content')
    <div class="container border border-3 rounded p-5 bg-white">
        <footer class="row p-3">
            <div class="col">
                <h1> {{ $user->name }} </h1>
                <h3 class="text-secondary">
                    {{ $user->email }}
                </h3>
            </div>
            <div class="col-auto">
                {!! $user->avatar_image(255) !!}
            </div>
        </footer>
    </div>
@endsection
