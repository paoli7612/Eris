
@extends('layouts.app')

@section('content')
    <div class="bg-light rounded p-3">
        <h3 class="font-weight-bold mb-4">Users</h3>
        @foreach (\App\Models\User::all() as $user)
            @include('partials.friend')
        @endforeach
    </div>
@endsection
