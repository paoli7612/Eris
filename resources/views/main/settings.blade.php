@extends('layouts.app')

@section('title', 'settings')

@section('content')

    <x-bc>
        <x-bc-item link="{{ route('home') }}"> Home </x-bc-item>
        <x-bc-item link="{{ route('user', $user ) }}"> {{ $user->complete_name }} </x-bc-item>
        <x-bc-item> Settings </x-bc-item>
    </x-bc>
    <div class="row">
        @error('name')
            <x-log.danger message="{{ $message }}" />
        @enderror
    </div>
    
    <form action="{{ route('settings') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="row">
                <div class="form-group col-sm-12 col-md-6 col-lg-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $user->name }}">
                </div>
                <div class="form-group col-sm-12 col-md-6 col-lg-3">
                    <label for="surname">Surname</label>
                    <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror" id="name" value="{{ $user->surname }}">
                </div>
                <div class="form-group col-sm-12 col-md-6 col-lg-3">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" value="{{ $user->email }}" disabled>
                </div>
            <div class="col-sm-12 col-md-6 col-lg-3 text-center p-3">
                <img src="{{ $user->img }}" class="rounded-circle w-100 shadow" alt="avatar">
                    <button type="button" class="btn btn-info mt-3" onclick="$('#avatar').click()">
                        Change
                    </button>
                <input id="avatar" name="avatar" type="file" class="form-control mt-3 d-none" >
            </div>
        </div>
        <hr>

        <button type="submit" href="" class="btn btn-success pull-left">
            <i class="fa fa-save"></i>
            Save
        </button>

        @if ($user->type == 'student')
            <a href="{{ route('account.delete') }}" class="btn btn-outline-danger pull-right">
                <i class="fa fa-trash"></i>
                Delete account
            </a>    
        @endif
        
    </form>

@endsection
