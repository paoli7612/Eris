@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            Users
        </li>
        <li class="breadcrumb-item">
            {{ $user->name }}
        </li>
    </ol>

    <div class="bg-light p-3 border shadow">
        <div class="row px-3">
            <div class="col-3">
                <img src="{{ auth()->user()->img }}" class="rounded-circle w-100 shadow" alt="avatar">
            </div>
            <div class="col-9 text-right">
                <h3>{{ $user->name }}</h3>
                <p>{{ $user->email }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-3 m-auto">
                <a href="{{ route('user.settings', $user) }}" class="btn btn-primary">
                    Settings
                    <i class="fa fa-cog"></i>
                </a>
            </div>
        </div>
        
    </div>


@endsection
