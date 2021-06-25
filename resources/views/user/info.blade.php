@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-2">
            @include('_sidebar-links')
        </div>
        <div class="col">
            <h1>{{ $user->name }}</h1>
        </div>
    </div>
@endsection
