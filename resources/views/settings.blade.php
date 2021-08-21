@extends('layouts.app')
@section('title', 'settings')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('account') }}">{{ $user->name }}</a>
        </li>
        <li class="breadcrumb-item">
            Settings
        </li>
    </ol>

    <form action="{{ route('settings') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        @error('name')
            <x-log.danger message="{{ $message }}" />
        @enderror
        <div class="row">
            <div class="col-10">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" value="{{ $user->email }}" disabled>
                </div>
            </div>
            <div class="col-2 text-center">
                <img src="{{ auth()->user()->img }}" class="rounded-circle w-100 shadow" alt="avatar">
                <input id="avatar" name="avatar" type="file" class="form-control" >
            </div>
        </div>
        <div class="row">
            <!--
            @foreach (App\Models\Course::all() as $course)
                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" id="{{ $course->id }}" name="courses[{{ $course->id }}]">
                    <label class="form-check-label" for="{{ $course->id }}">{{ $course->name }}</label>
                </div>
            @endforeach
            -->
        </div>
        <hr>

        <button type="submit" href="" class="btn btn-primary pull-left">
            <i class="fa fa-save"></i>
            Save
        </button>

        <a href="{{ route('delete-account') }}" class="btn btn-outline-danger pull-right">
            <i class="fa fa-trash"></i>
            Delete account
        </a>
    </form>

@endsection
