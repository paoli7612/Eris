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
@endsection
