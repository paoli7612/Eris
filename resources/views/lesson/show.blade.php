@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <x-layout.breadcrumb-item link="/"> Home </x-layout.breadcrum-item>
        <x-layout.breadcrumb-item link="/lessons"> Lessons </x-layout.breadcrum-item>
        <x-layout.breadcrumb-item> {{ $lesson->title }} </x-layout.breadcrum-item>
    </ol>

    <div class="card shadow">
        <div class="card-header ">
            <h2 class="pull-left">
                {{ $lesson->title }}
            </h2>
            <a href="{{ route('course', $lesson->course) }}" class="pull-right">
                {{ $lesson->course->name }}
            </a>
        </div>
        
        <div class="card-body">
            <button class="btn btn-light mb-3" disabled>
                <i class="fa fa-bookmark"></i>
                Salva
            </button>
            <a class="btn btn-light  mb-3" href="{{ route('user', $lesson->user) }}">
                <i class="fa fa-user"></i>
                {{ $lesson->user->name }}
            </a>
            <a href="{{ route('lesson.details', $lesson) }}" class="btn btn-light  mb-3">
                <i class="fa fa-info-circle"></i>
                Dettagli</a>
            <button class="btn btn-light  mb-3" disabled>
                <i class="fa fa-edit"></i>
                Modifica</button>
            <a href="{{ route('lesson.settings', $lesson) }}" class="btn  mb-3">
                <i class="fa fa-cog"></i>
                Settings
            </a>
        </div>
    </div>

@endsection
