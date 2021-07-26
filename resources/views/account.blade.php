@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <br>
            <h1>{{ $user->complete_name }}</h1>
            <h3>{{ $user->type }}</h3>
        </div>
        <div class="col text-right">
            {!! $user->avatar(200) !!}
        </div>
    </div>
@endsection
