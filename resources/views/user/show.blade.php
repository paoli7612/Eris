@extends('layouts.app')

@section('title', $user->surname)


@section('content')

    <ol class="breadcrumb">
        <x-layout.breadcrumb-item link="{{ route('home') }}">Home</x-layout.breadcrumb-item>
        <x-layout.breadcrumb-item link="{{ route('teachers') }}">Teachers</x-layout.breadcrumb-item>
        <x-layout.breadcrumb-item>{{ $user->complete_name }}</x-layout.breadcrumb-item>
    </ol>

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
