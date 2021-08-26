@extends('layouts.app')

@section('title', 'settings')

@section('content')

    <x-bc>
        <x-bc-item link="{{ route('home') }}"> Home </x-bc-item>
        <x-bc-item link="{{ route('teacher', $user) }}"> {{ $user->complete_name }} </x-bc-item>
        <x-bc-item> Settings </x-bc-item>
    </x-bc>
    <div class="row">
        @error('name')
            <x-log.danger message="{{ $message }}" />
        @enderror
    </div>

    <form action="{{ route('account.settings') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="mx-auto col-6 bg-light p-3 shadow">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                            value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="surname">Surname</label>
                        <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror" id="name"
                            value="{{ $user->surname }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" value="{{ $user->email }}" disabled>
                    </div>
                </div>
                <div class="col-4 text-center">
                        <img src="{{ $user->img }}" class="rounded-circle w-100 shadow" alt="avatar">
                        <button type="button" class="btn btn-info mt-3" onclick="$('#avatar').click()">
                            {{ __('Change')}}
                        </button>
                        <input id="avatar" name="avatar" type="file" class="form-control mt-3 d-none" onchange="">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    @if ($user->type == 'student')
                        <a href="{{ route('account.delete') }}" class="btn btn-outline-danger ">
                            <i class="fa fa-trash"></i>
                            Delete account
                        </a>
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

@endsection
