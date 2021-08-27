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
                <form action="{{ route('account.settings') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="mx-auto col-6 bg-light p-3 shadow">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                        id="name" value="{{ $user->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="surname">Surname</label>
                                    <input type="text" name="surname"
                                        class="form-control @error('surname') is-invalid @enderror" id="name"
                                        value="{{ $user->surname }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" id="email"
                                        value="{{ $user->email }}" disabled>
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <img src="{{ $user->img }}" class="rounded-circle w-100 shadow" alt="avatar">
                                <button type="button" class="btn btn-info mt-3" onclick="$('#avatar').click()">
                                    {{ __('Change') }}
                                </button>
                                <input id="avatar" name="avatar" type="file" class="form-control mt-3 d-none" onchange="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                @if ($user->type == 'student')
                                    <x-dd-button id="collapseRem" title="{{ __('Delete account') }}"
                                        color="outline-danger" text="normal" />

                                @endif

                                <a href="{{ route('teacher', $user) }}" class="btn btn-info text-white">
                                    <i class="fa fa-return"></i>
                                    Back
                                </a>

                                <button type="submit" class="btn btn-success ">
                                    <i class="fa fa-save"></i>
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </x-dd-div>
            <x-dd-div id="collapseLogout">
                <x-q title="logout" ask="Are you sure to logout?" action="{{ route('account.logout') }}" />
                
            </x-dd-div>
            <x-dd-div id="collapseRem">
                <x-q title="remove" ask="Are you sure to delete this account?" action="{{ route('account.delete') }}" />
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
    <div class="mt-3">
        @if (count($user->lessons))
            <div class="bg-light p-3 shadow">
                <div class="text-center">
                    <h1>
                        {{ __('Lessons') }}
                    </h1>
                </div>
                <div class="row">
                    @foreach ($user->lessons as $lesson)
                        <x-lesson :lesson="$lesson" col="12" />
                    @endforeach
                </div>
            </div>
        @elseif($user->isTeacher())
            <div class="jumbotron m-5 shadow">
                <h1>No lessons created</h1>
                @if ($user->isMe())
                    <p class="lead">You didn't created any lessons</p>
                    <a href="{{ route('lessons?new') }}">
                        Let's create one
                    </a>
                @else
                    <p class="lead">This account didn't created any lessons</p>
                @endif
            </div>
        @endif
    </div>
@endsection
