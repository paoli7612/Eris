@extends('layouts.app')

@section('title', $user->surname)

@section('content')

    <x-tt name="account" text="normal">
        {{ $user->type_ucf }}
    </x-tt>

    <x-bc>
        <x-bc-item link="{{ route('home') }}">Home</x-bc-item>
        <x-bc-item link="{{ route('teachers') }}">Teachers</x-bc-item>
        <x-bc-item>{{ $user->complete_name }}</x-bc-item>
    </x-bc>

    @if ($user->isMe())
        <div id="accordion">
            <x-dd-button id="collapseSettings" title="{{ __('Settings') }}" />
            <x-dd-button id="collapseLogout" title="{{ __('Logout') }}" />
            <x-dd-div id="collapseSettings">
                @include('forms.user-setting')
            </x-dd-div>
            <x-dd-div id="collapseLogout">
                <x-q title="logout" ask="Are you sure to logout?" action="{{ route('logout') }}"  method="POST" />
            </x-dd-div>
            <x-dd-div id="collapseRem">
                <x-q title="remove" ask="Are you sure to delete this account?" action="{{ route('account.delete') }}" method="POST"/>
            </x-dd-div>
        </div>
    @endif

    <div class="bg-light p-3 border shadow mt-3">
        <div class="row px-3">
            <div class="col-3">
                <img src="{{ $user->img }}" class="rounded-circle w-100 shadow" alt="avatar">
            </div>
            <div class="col-9 text-right">
                <b>Name</b>: {{ $user->complete_name }} <br>
                <b>Email</b>: <a href="mailto:{{ $user->email }}">{{ $user->email }}</a> <br>

                @if (auth()->user()->isStudent())
                    <h1>student</h1>
                @endif
            </div>
        </div>
    </div>
    @if ($user->isTeacher())
        @include ('partials.my-lessons', $user)
    @endif

@endsection
