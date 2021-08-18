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

    <h1 class="pull-left"> {{ $user->name }} </h1>
    <div class="pull-right">
        <img src="{{ auth()->user()->img }}" class="rounded-circle" alt="">
        <a href="{{ route('user.settings', $user) }}" class="btn btn-primary">
            <i class="fa fa-cog"></i>
        </a>
    </div>

@endsection
