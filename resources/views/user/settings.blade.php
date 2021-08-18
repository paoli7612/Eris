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
            <a href="{{ route('user', $user) }}">{{ $user->name }}</a>
        </li>
        <li class="breadcrumb-item">
            Settings
        </li>
    </ol>

    <form action="">
        <div class="row">
            <div class="col-8">
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
                <img src="{{ auth()->user()->img(200) }}" class="rounded-circle w-100 shadow" alt="avatar">
            </div>

        </div>
        <div class="text-center">
            <p>
                <hr>
            </p>
            <a href="" class="btn btn-outline-danger">
                <i class="fa fa-trash"></i>
                Delete account
            </a>

            <a href="" class="btn btn-primary">
                <i class="fa fa-save"></i>
                Save
            </a>

        </div>
    </form>

@endsection
