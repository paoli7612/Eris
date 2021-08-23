@extends('layouts.app')
@section('title', 'settings')

@section('content')

    <ol class="breadcrumb">
        <x-layout.breadcrumb-item link="{{ route('home') }}"> Home </x-layout.breadcrumb-item>
        <x-layout.breadcrumb-item link="{{ route('account') }}"> Home </x-layout.breadcrumb-item>
        <x-layout.breadcrumb-item> Settings </x-layout.breadcrumb-item>
    </ol>
    <div class="row">
        @error('name')
            <x-log.danger message="{{ $message }}" />
        @enderror
    </div>
    
    <form action="{{ route('settings') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="row">
            <div class="col-10">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $user->name }}">
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
