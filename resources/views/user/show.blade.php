@extends('layouts.app')

@section('title', $user->surname)

@section('content')

    <x-bc>
        <x-bc-item link="{{ route('home') }}">Home</x-bc-item>
        <x-bc-item link="{{ route('teachers') }}">Teachers</x-bc-item>
        <x-bc-item>{{ $user->complete_name }}</x-bc-item>
    </x-bc>
    
    @if (auth()->user()->isMe())
        <a href="{{ route('account.settings') }}" class="btn btn-info text-white mb-3 shadow">
            Settings
        </a>
    @endif

    <div class="bg-light p-3 border shadow">
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
