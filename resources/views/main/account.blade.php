@extends('layouts.app')

@section('title', auth()->user()->name)

@section('content')

    <x-bc>
        <x-bc-item link="{{ route('home') }}"> Home </x-bc-item>
        <x-bc-item> {{ $user->complete_name }} </x-bc-item>
    </x-bc>

    <div class="bg-light p-3 border shadow">
        <div class="row px-3">
            <div class="col-3">
                <img src="{{ auth()->user()->img }}" class="rounded-circle w-100 shadow" alt="avatar">
            </div>
            <div class="col-9 text-right">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Surname</th>
                        <td>{{ $user->surname }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>
                            <a href="mailto:{{ $user->email }}">
                                {{ $user->email }}
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td>{{ $user->type }}</td>
                    </tr>
                    @if (auth()->user()->type == 'teacher')
                        <tr>
                            <th>Lessons created</th>
                            <td>{{ count($user->lessons) }}</td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('settings') }}" class="shadow btn btn-{{ config('app.colors.account') }}">
                Settings
                <i class="fa fa-cog"></i>
            </a>
            <a href="{{ route('logout') }}" class="shadow btn btn-{{ config('app.colors.account') }}">
                {{ __('Logout') }}
                <i class="fa fa-sign-out"></i>
            </a>
        </div>
    </div>
    <div class="row">

    @if ($user->isTeacher())
        <div class="mt-3 col-6">
            @if (count($user->lessons))
                <div class="bg-light p-3 shadow">
                    <div class="text-center">
                        <h1>
                            {{ __('Lessons') }}    
                        </h1>
                        <a href="{{ route('lessons') }}?new" class="pull-right btn {{ Colors::btn('lessons') }}">
                            <i class="fa fa-plus"></i>
                        </a>
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

        <div class="mt-3 col-6">
            @if (count($user->lessons))
                <div class="bg-light p-3 shadow">
                    <div class="text-center">
                        <h1>
                            {{ __('Materials') }}    
                        </h1>
                        <a href="{{ route('material.load') }}" class="pull-right btn {{ Colors::btn('materials') }}">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div> 
                    <br><br>                   
                </div>
            @else
                <div class="jumbotron m-5 shadow">
                    <h1>No lessons created</h1>
                    <p class="lead">You didn't create neither a lesson.</p>
                    <a class="btn btn-lg btn-primary" href="{{ route('lessons') }}?new" role="button">Create now</a>
                </div>
            @endif
        </div>

    @endif
</div>


@endsection
