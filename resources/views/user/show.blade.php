@extends('layouts.app')

@section('title', $user->surname)


@section('content')

    <x-bc>
        <x-bc-item link="{{ route('home') }}">Home</x-bc-item>
        <x-bc-item link="{{ route('teachers') }}">Teachers</x-bc-item>
        <x-bc-item>{{ $user->complete_name }}</x-bc-item>
    </x-bc>

    <div class="bg-light p-3 border shadow">
        <div class="row px-3">
            <div class="col-3">
                <img src="{{ $user->img }}" class="rounded-circle w-100 shadow" alt="avatar">
            </div>
            <div class="col-9 text-right">
                <h3>{{ $user->complete_name }}</h3>
                <a href="mailto:{{ $user->email }}" data-toggle="tooltip" data-placement="top" title="Send a mail">
                    <p>{{ $user->email }}</p>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="mt-3 col">
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
            @else
                <div class="jumbotron m-5 shadow">
                    <h1>No lessons created</h1>
                    <p class="lead">You didn't create neither a lesson.</p>
                    <a class="btn btn-lg btn-primary" href="{{ route('lessons') }}?new" role="button">Create now</a>
                </div>
            @endif
        </div>    
    </div>
@endsection
