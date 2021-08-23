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
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Surname</th>
                        <td>{{ $user->surname }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>
                            <a href="mailto:{{ $user->email }}">
                                {{ $user->email }}
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td>{{ $user->type }}</td>
                    </tr>
                    @if (auth()->user()->type == 'teacher')
                        <tr>
                            <th>Lessons created</th>
                            <td>{{ count($user->lessons) }}</td>
                        </tr> 
                    @endif
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-3 m-auto">
                <a href="{{ route('settings') }}" class="shadow btn btn-{{ config('app.colors.account') }}">
                    Settings
                    <i class="fa fa-cog"></i>
                </a>
                <a href="{{ route('logout') }}" class="shadow btn btn-{{ config('app.colors.account') }}">
                    {{ __('Logout') }}
                    <i class="fa fa-sign-out"></i>
                </a>
            </div>
        </div>
    </div>


@endsection
