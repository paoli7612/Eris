@extends('layouts.app')

@section('title', 'account')

@section('content')

    <ol class="breadcrumb">
        <x-layout.breadcrumb-item link="{{ route('home') }}"> Home </x-layout.breadcrumb-item>
        <x-layout.breadcrumb-item> {{ $user->name }} </x-layout.breadcrumb-item>
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
                <a href="{{ route('settings') }}" class="btn btn-primary">
                    Settings
                    <i class="fa fa-cog"></i>
                </a>
                <a href="{{ route('logout') }}" class="btn btn-warning">
                    {{ __('Logout') }}
                    <i class="fa fa-sign-out"></i>
                </a>
            </div>
        </div>
    </div>


@endsection
