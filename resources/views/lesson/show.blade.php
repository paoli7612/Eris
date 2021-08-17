@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/lessons">Lessons</a>
        </li>
        <li class="breadcrumb-item">
            {{ $lesson->title }}
        </li>
    </ol>
    <div class="row">
        <div class="col">
            <div class="card bg-secondary">
                <div class="card-header text-white">
                    <h2 class="pull-left">
                        {{ $lesson->title }}
                    </h2>
                    <a href="{{ route('course', $lesson->course) }}" class="pull-right text-white">
                        {{ $lesson->course->name }}
                    </a>
                </div>
                
                <div class="card-body">
                    <button class="btn bg-white mb-3" disabled>
                        <i class="fa fa-bookmark"></i>
                        Salva
                    </button>
                    <a class="btn bg-white mb-3" href="{{ route('user', $lesson->user) }}">
                        <i class="fa fa-user"></i>
                        {{ $lesson->user->name }}
                    </a>
                    <button class="btn bg-white mb-3" disabled>
                        <i class="fa fa-info-circle"></i>
                        Dettagli</button>
                    <button class="btn bg-white mb-3" disabled>
                        <i class="fa fa-edit"></i>
                        Modifica</button>
                    <button class="btn bg-white mb-3" disabled>
                        <i class="fa fa-upload"></i>
                        Carica materiali</button>
                    <a href="{{ route('lesson.settings', $lesson) }}" class="btn bg-white mb-3">
                        <i class="fa fa-cog"></i>
                        Settings
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
